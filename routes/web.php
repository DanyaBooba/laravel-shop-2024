<?php

use App\Http\Controllers\Main\AboutController;
use App\Http\Controllers\Main\MainController;
use Illuminate\Support\Facades\Route;

//
// MAIN
//

Route::get('/', [MainController::class, 'index'])->name('main');

Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
});
