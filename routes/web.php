<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('laravel-camel', [UserController::class, 'index']);


