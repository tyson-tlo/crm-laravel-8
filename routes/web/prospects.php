<?php

use App\Http\Controllers\Admin\Prospects\ProspectsController;

// Prefix: prospects
// nmae: admin.prospects.create

Route::get('/', [ProspectsController::class, 'index'])->name('dashboard');
Route::get('create', [ProspectsController::class, 'create'])->name('create');

Route::post('/', [ProspectsController::class, 'store'])->name('store');
