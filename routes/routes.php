<?php

use App\Controllers\WelcomeController;
use Core\Routing\Route;

/**
 * Make something great with this app
 * keep simple yeah.
 */

Route::get('/', WelcomeController::class);
Route::post('/admin/auth', [AuthController::class, 'login']);
