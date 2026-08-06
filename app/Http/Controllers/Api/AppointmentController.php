<?php

namespace App\Http\Controllers\Api;

use App\Actions\Appointments\CreateAppointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\JsonResponse;

class AppointmentController extends Controller
{
    public function store(StoreAppointmentRequest $request, CreateAppointment $createAppointment): JsonResponse
    {
        $service = Service::findOrFail($request->integer('service_id'));
        $appointment = $createAppointment->handle($service, $request->validated());

        return response()->json([
            'message' => 'Agendamento criado com sucesso.',
            'appointment' => $appointment,
        ], 201);
    }

    public function confirmation(Appointment $appointment): JsonResponse
    {
        return response()->json($appointment);
    }
}
