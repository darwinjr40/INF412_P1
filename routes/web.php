<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\VitalController;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    // return "hola";
    // return redirect('/login');
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('doctors', DoctorController::class)->middleware('auth');

Route::resource('patients', PatientController::class);

Route::resource('inquiries', InquiryController::class);
Route::get('inquirie/{inquery_id}', [InquiryController::class, 'show2'])->name('inquiries.show2');


Route::resource('vitals',   VitalController::class);
Route::get('vital/{inquery_id}', [VitalController::class, 'create2'])->name('vitals.create2');
Route::post('vital/{inquery_id}', [VitalController::class, 'store2'])->name('vitals.store2');

Route::resource('recipes', RecipeController::class);
Route::post('recipe/{inquery_id}', [RecipeController::class, 'store2'])->name('recipes.store2');
Route::delete('recipe//{recipe_id}/{inquery_id}', [RecipeController::class, 'destroy2'])->name('recipes.destroy2');

Route::get('stories', [HistoryController::class, 'index'])->name('stories.index');





