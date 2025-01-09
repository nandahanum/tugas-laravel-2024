<?php

use App\Http\Controllers\crudControllers;
use Illuminate\Support\Facades\Route;

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
Route::resource('/',crudControllers::class);

Route::get('/',[crudControllers::class,'index'])->name('index');
Route::get('/create',[crudControllers::class,'create'])->name('create');
Route::post('/store',[crudControllers::class,'store'])->name('store');
Route::post('/show/{id}',[crudControllers::class,'show'])->name('show');
Route::get('/edit/{id}',[crudControllers::class,'edit'])->name('edit');
Route::put('/update/{id}',[crudControllers::class,'update'])->name('update');
Route::delete('/update/{id}',[crudControllers::class,'destroy'])->name('destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
