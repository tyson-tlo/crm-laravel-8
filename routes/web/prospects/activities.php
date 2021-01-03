<?php

use App\Http\Controllers\Admin\Prospects\Activities\ProspectActivitiesController;

// Prefix: admin/prospects/activities

Route::get('{prospect}', [ProspectActivitiesController::class, 'index'])->name('dashboard');
Route::get('{prospect}/create', [ProspectActivitiesController::class, 'create'])->name('create');
Route::post('{prospect}', [ProspectActivitiesController::class, 'store'])->name('store');
Route::get('{prospect}/{activity}', [ProspectActivitiesController::class, 'show'])->name('show');
