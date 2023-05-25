<?php

use Illuminate\Support\Facades\Route;

use Inertia\Inertia;
use App\Http\Controllers\TableController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tables', [TableController::class, 'index'])->name('table');

Route::get('/table', [TableController::class, 'index'])->name('table.index');

