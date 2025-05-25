<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CriteriaController;

Route::get('/', function () {
    return view('welcome');
});

// Group route untuk admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('criteria', CriteriaController::class);
});
