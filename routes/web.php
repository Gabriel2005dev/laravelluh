<?php

use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ClientDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Site Público
|--------------------------------------------------------------------------
*/

Route::view('/', 'pages.home')->name('home');

Route::get('/agendamento', AgendamentoController::class)->name('agendar');

/*
|--------------------------------------------------------------------------
| Área Autenticada
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

       Route::get('/dashboard', ClientDashboardController::class)
        ->name('dashboard');

});


/*
|--------------------------------------------------------------------------
| Perfil
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


require __DIR__.'/auth.php';