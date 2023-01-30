<?php

use Illuminate\Support\Facades\Route;
use sedaaydin360drc\greetings2\Controller\PackageController;

Route::get('/hello', [PackageController::class, 'index']);
