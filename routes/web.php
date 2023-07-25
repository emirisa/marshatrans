<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\UnitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* VIEW */
Route::get('/',[HomeController::class,'master']);

Route::get('/unit',[HomeController::class,'unit']);

Route::get('/unit-details',[HomeController::class,'unitDetails']);

Route::get('/blog',[HomeController::class,'blog']);

Route::get('/blog-details',[HomeController::class,'blogDetails']);

Route::get('/contact',[HomeController::class,'contact']);

Route::get('/adm',[AdmController::class,'admLg']);

Route::get('/adm-index',[AdmController::class,'admIndex'])->name('adm.index');


/* POST */
Route::post('/store-user',[UserController::class,'store'])->name('store.user');

Route::resource('user', UserController::class);
/* UNIT */

Route::resource('unit-adm', UnitController::class);

Route::post('/store-unit',[UnitController::class,'store'])->name('unit.store');










