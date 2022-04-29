<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\InquiryApiController;
use App\Http\Controllers\DoctorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/doctor/{id}', [DoctorController::class, 'getDoctors'])->name('doctors.getDoctors');

Route::get('/', function(){
    return "prueba";
});
Route::post('login', [LoginController::class, 'login']);


Route::get('inquiries/{patient_id}', [InquiryApiController::class, 'getConsultas']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
