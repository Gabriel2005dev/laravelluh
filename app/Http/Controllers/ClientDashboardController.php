<?php

namespace App\Http\Controllers;

use App\Enums\AppointmentStatus;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function __invoke(Request $request): View
    {
        $user = $request->user();
        $now = now();

        $appointments = $user->appointments()
            ->with('service.subcategory.category')
            ->latest('starts_at')
            ->get();

        $upcomingAppointments = $appointments
            ->filter(fn ($appointment) => $appointment->starts_at->greaterThanOrEqualTo($now)
                && $appointment->status === AppointmentStatus::Scheduled)
            ->sortBy('starts_at')
            ->values();

        $historyAppointments = $appointments
            ->reject(fn ($appointment) => $appointment->starts_at->greaterThanOrEqualTo($now)
                && $appointment->status === AppointmentStatus::Scheduled)
            ->values();

        return view('dashboard', [
            'upcomingAppointments' => $upcomingAppointments,
            'historyAppointments' => $historyAppointments,
            'totalAppointments' => $appointments->count(),
            'completedAppointments' => $appointments->where('status', AppointmentStatus::Completed)->count(),
            'nextAppointment' => $upcomingAppointments->first(),
        ]);
    }
}