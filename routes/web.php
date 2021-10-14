<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Auth/Login');
});


Route::get('dashboard', [PageController::class, 'dashboard'])
    ->middleware('auth:sanctum')->name('dashboard');

Route::resource('pacientes', PatientController::class)
    ->middleware('auth:sanctum');

Route::resource('Citas', AppointmentController::class)
    ->middleware('auth:sanctum');

Route::resource('Personal', UserController::class)
    ->middleware('auth:sanctum');