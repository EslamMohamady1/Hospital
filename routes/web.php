<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;

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
Route::get('/cancel_appointment/{id}', [homecontroller::class , 'cancel_appointmentt']);
Route::get('/admin_cancel_appointment/{id}', [admincontroller::class , 'admin_cancel_appointment']);
Route::get('/admin_delet_doctor/{id}', [admincontroller::class , 'admin_delet_doctor']);
Route::get('/admin_update_doctor/{id}', [admincontroller::class , 'admin_update_doctor']);
Route::post('/update_doctor/{id}', [admincontroller::class , 'update_doctor']);
Route::get('/aprove_appointment/{id}', [admincontroller::class , 'aprove_appointment']);
Route::get('/my_appointment', [homecontroller::class , 'my_appointment']);
Route::get('/', [homecontroller::class , 'index']);
Route::post('/appointment', [homecontroller::class , 'appointment']);
Route::get('/add_doctor', [admincontroller::class , 'admin_add_doctors']);
Route::get('/emailview/{id}', [admincontroller::class , 'emailview']);
Route::post('/upload_doctor', [admincontroller::class , 'upload']);
Route::post('/send_email/{id}', [admincontroller::class , 'send_email']);
Route::get('/home', [homecontroller::class , 'redirection'])->middleware('auth','verified');
Route::get('/ShowAppointments', [admincontroller::class , 'ShowAppointments']);
Route::get('/ShowAllDoctors', [admincontroller::class , 'ShowAllDoctors']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
