<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AvailabilityRequest;
use App\Http\Requests\CalendarAvailabilityRequest;
use App\Models\Service;
use App\Services\Availability\AvailabilityService;
use Illuminate\Http\JsonResponse;

class AvailabilityController extends Controller
{
    public function slots(AvailabilityRequest $request, AvailabilityService $availability): JsonResponse
    {
        $service = Service::findOrFail($request->integer('service_id'));

        return response()->json($availability->availableSlots($service, $request->validated()['date']));
    }

    public function calendar(CalendarAvailabilityRequest $request, AvailabilityService $availability): JsonResponse
    {
        $service = Service::findOrFail($request->integer('service_id'));

        return response()->json($availability->calendar($service, $request->validated()['month']));
    }
}