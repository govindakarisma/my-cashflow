<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CashflowController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EximportController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubcategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Route Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('/cashflow', CashflowController::class)->middleware('auth');
Route::resource('/resource', ResourceController::class)->middleware('auth');
Route::resource('/category', CategoryController::class)->middleware('auth');
Route::resource('/subcategory', SubcategoryController::class)->middleware('auth');

//Route Export Import File
Route::get('/exportCashflowExcel', [EximportController::class, 'exportCashflowExcel'])->name('exportCashflowExcel')->middleware('auth');
Route::post('/importCashflowExcel', [EximportController::class, 'importCashflowExcel'])->name('importCashflowExcel')->middleware('auth');
