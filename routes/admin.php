<?php

use App\Http\Controllers\Admin\{
    DashController,
    DetailPlanController,
    PlanController
};
use Illuminate\Support\Facades\Route;

// Route Dashboard
Route::get('', [DashController::class, 'index'])->name('dash.index');

//Routes Plan
Route::any('plans/search', [PlanController::class, 'search'])->name('plans.search');
Route::resource('/plans', PlanController::class)->names('plans');

// Routes Details Plan
Route::resource('/plans/{url}/details', DetailPlanController::class)->names('plan.details');

