<?php

use App\Http\Controllers\Main\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main');
