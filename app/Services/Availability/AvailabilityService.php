<?php

namespace App\Services\Availability;

use App\Enums\AppointmentStatus;
use App\Models\Appointment;
use App\Models\BlockedPeriod;
use App\Models\BusinessHour;
use App\Models\ScheduleException;
use App\Models\Service;
use Carbon\CarbonImmutable;
use Illuminate\Support\Collection;

class AvailabilityService
{
    public function availableSlots(Service $service, string $date): array
{
    $day = CarbonImmutable::parse($date)->startOfDay();
    $schedule = $this->scheduleFor($day);

    if (! $schedule || ! $schedule['is_open']) {
        return [];
    }


        $start = $day->setTimeFromTimeString($schedule['opens_at']);
        $end = $day->setTimeFromTimeString($schedule['closes_at']);
        $interval = $schedule['slot_interval_minutes'];
        $duration = $service->duration_minutes + $schedule['buffer_minutes'];
        $busyPeriods = $this->busyPeriods($day);
        $slots = [];

        for ($slotStart = $start; $slotStart->addMinutes($duration)->lessThanOrEqualTo($end); $slotStart = $slotStart->addMinutes($interval)) {
            $slotEnd = $slotStart->addMinutes($duration);

            if ($this->insideBreak($slotStart, $slotEnd, $day, $schedule)) {
                continue;
            }

            $slots[] = [
                'time' => $slotStart->format('H:i'),
                'available' => ! $this->overlapsAny($slotStart, $slotEnd, $busyPeriods),
            ];
        }

        return $slots;
    }

    public function isAvailable(Service $service, CarbonImmutable $startsAt): bool
    {
        return in_array($startsAt->format('H:i'), $this->availableSlots($service, $startsAt->toDateString()), true);
    }

    public function calendar(Service $service, string $month): array
    {
        $firstDay = CarbonImmutable::parse($month.'-01')->startOfMonth();
        $days = [];

        for ($date = $firstDay; $date->lessThanOrEqualTo($firstDay->endOfMonth()); $date = $date->addDay()) {
            $slots = $this->availableSlots($service, $date->toDateString());
            $schedule = $this->scheduleFor($date);

            $days[] = [
                'date' => $date->toDateString(),
                'status' => ! $schedule || ! $schedule['is_open'] ? 'closed' : (empty($slots) ? 'unavailable' : 'available'),
                'slots_count' => count($slots),
            ];
        }

        return $days;
    }

    private function scheduleFor(CarbonImmutable $day): ?array
    {
        $exception = ScheduleException::query()->whereDate('date', $day->toDateString())->first();

        if ($exception) {
            return [
                'is_open' => $exception->is_open,
                'opens_at' => $exception->opens_at,
                'closes_at' => $exception->closes_at,
                'break_starts_at' => $exception->break_starts_at,
                'break_ends_at' => $exception->break_ends_at,
                'slot_interval_minutes' => $exception->slot_interval_minutes ?? 30,
                'buffer_minutes' => $exception->buffer_minutes ?? 0,
            ];
        }

        $businessHour = BusinessHour::query()->where('weekday', $day->dayOfWeek)->first();

        if (! $businessHour) {
            return null;
        }

        return $businessHour->toArray();
    }

    private function busyPeriods(CarbonImmutable $day): Collection
    {
        $dayStart = $day->startOfDay();
        $dayEnd = $day->endOfDay();

        $appointments = Appointment::query()
            ->whereNotIn('status', [AppointmentStatus::Cancelled->value])
            ->where('starts_at', '<', $dayEnd)
            ->where('ends_at', '>', $dayStart)
            ->get(['starts_at', 'ends_at']);

        $blockedPeriods = BlockedPeriod::query()
            ->where('starts_at', '<', $dayEnd)
            ->where('ends_at', '>', $dayStart)
            ->get(['starts_at', 'ends_at']);

        return $appointments->concat($blockedPeriods);
    }

    private function insideBreak(CarbonImmutable $slotStart, CarbonImmutable $slotEnd, CarbonImmutable $day, array $schedule): bool
    {
        if (empty($schedule['break_starts_at']) || empty($schedule['break_ends_at'])) {
            return false;
        }

        return $this->overlaps($slotStart, $slotEnd, $day->setTimeFromTimeString($schedule['break_starts_at']), $day->setTimeFromTimeString($schedule['break_ends_at']));
    }

    private function overlapsAny(CarbonImmutable $slotStart, CarbonImmutable $slotEnd, Collection $periods): bool
    {
        return $periods->contains(fn ($period): bool => $this->overlaps(
            $slotStart,
            $slotEnd,
            CarbonImmutable::parse($period->starts_at),
            CarbonImmutable::parse($period->ends_at),
        ));
    }

    private function overlaps(CarbonImmutable $startA, CarbonImmutable $endA, CarbonImmutable $startB, CarbonImmutable $endB): bool
    {
        return $startA->lessThan($endB) && $endA->greaterThan($startB);
    }
}