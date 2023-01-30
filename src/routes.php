<?php

use Illuminate\Support\Facades\Route;
use sedaaydin360drc\greetings2\PackageController;

Route::get('/hello', [PackageController::class, 'index']);
