<?php

use App\Http\Controllers\Admin\{
    DashController,
    PlanController
};
use Illuminate\Support\Facades\Route;


Route::get('', [DashController::class, 'index'])->name('dash.index');

Route::any('plans/search', [PlanController::class, 'search'])->name('plans.search');
Route::resource('/plans', PlanController::class)->names('plans');
