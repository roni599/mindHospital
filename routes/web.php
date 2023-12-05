<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/home',[HomeController::class, 'redirect'])->middleware('auth','verified')->name('redirect');

Route::get('/add_doctors',[AdminController::class,'add_doctors'])->name('add_doctors');
Route::post('/add_doctors',[AdminController::class,'create_doctors'])->name('create_doctors');
Route::post('/appoinment',[HomeController::class, 'appoinment'])->name('appoinment');
Route::get('/show_appoinment',[HomeController::class, 'showAppoinment'])->name('show_appoinment');
Route::get('/delete_appoinment/{id}',[HomeController::class, 'deleteAppoinment'])->name('delete_appoinment');

Route::get('/adminAppoinment',[AdminController::class, 'adminAppoinment'])->name('adminAppoinment');
Route::get('/approve/{id}',[AdminController::class, 'approve'])->name('approve');
Route::get('/cancel/{id}',[AdminController::class, 'cancel'])->name('cancel');
Route::get('/alldoctors',[AdminController::class, 'alldoctors'])->name('alldoctors');
Route::get('/deleteDoctors/{id}',[AdminController::class, 'deleteDoctors'])->name('deleteDoctors');
Route::get('/updateDoctors/{id}',[AdminController::class, 'updateDoctors'])->name('updateDoctors');
Route::post('/editDoctors/{id}',[AdminController::class, 'editDoctors'])->name('editDoctors');