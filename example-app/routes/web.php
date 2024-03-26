<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::get('/', function () {
    return view('welcome');
})->name('Home');

Route::get('about', [AdminController::class,'index'])->name('stundeninformation');
Route::get('create',[AdminController::class,'create'])->name('AddStuden');
Route::post('insert',[AdminController::class,'insert'])->name('insert');
Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');
Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');
Route::post('update/{id}',[AdminController::class,'update'])->name('update');
