<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

Route::get('/', [Homecontroller::class, 'index']);