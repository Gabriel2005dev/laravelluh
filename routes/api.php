<?php

use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\AvailabilityController;
use App\Http\Controllers\Api\CatalogController;
use Illuminate\Support\Facades\Route;

Route::get('/categories', [CatalogController::class, 'categories']);
Route::get('/services', [CatalogController::class, 'services']);
Route::get('/availability', [AvailabilityController::class, 'slots']);
Route::get('/calendar', [AvailabilityController::class, 'calendar']);
Route::post('/appointments', [AppointmentController::class, 'store']);
Route::get('/appointments/{appointment}/confirmation', [AppointmentController::class, 'confirmation']);