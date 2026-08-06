<?php

namespace App\Actions\Appointments;

use App\Enums\AppointmentStatus;
use App\Enums\PaymentStatus;
use App\Models\Appointment;
use App\Models\Service;
use App\Services\Availability\AvailabilityService;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CreateAppointment
{
    public function __construct(private readonly AvailabilityService $availability) {}

    public function handle(Service $service, array $data): Appointment
    {
        $startsAt = CarbonImmutable::parse($data['date'].' '.$data['time']);

        return DB::transaction(function () use ($service, $data, $startsAt): Appointment {
            $service->loadMissing('subcategory.category');

            if (! $this->availability->isAvailable($service, $startsAt)) {
                throw ValidationException::withMessages([
                    'time' => 'Este horário acabou de ficar indisponível. Escolha outro horário.',
                ]);
            }

            return Appointment::create([
                'user_id' => auth()->id(),
                'service_id' => $service->id,
                'starts_at' => $startsAt,
                'ends_at' => $startsAt->addMinutes($service->duration_minutes),
                'status' => AppointmentStatus::Scheduled,
                'payment_method' => $data['payment_method'],
                'payment_status' => PaymentStatus::Pending,
                'customer_name' => $data['customer_name'],
                'customer_phone' => $data['customer_phone'] ?? null,
                'customer_email' => $data['customer_email'] ?? null,
                'service_snapshot_name' => $service->name,
                'service_snapshot_duration_minutes' => $service->duration_minutes,
                'service_snapshot_price_cents' => $service->price_cents,
                'service_snapshot_category_name' => $service->subcategory->category->name,
                'service_snapshot_subcategory_name' => $service->subcategory->name,
            ]);
        });
    }
}