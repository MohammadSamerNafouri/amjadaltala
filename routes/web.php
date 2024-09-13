<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Models\Patient;
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

//---------------customer-----------------
Route::get('/', function () { return view('pages.home');});
Route::get('/services', function () { return view('pages.services');})->name('services');
Route::get('/contact', function () {return view('pages.contact');})->name('contact');
//------end---------customer-----------------


//-------------dashborad----------------------
Route::group(['auth', 'verified'] ,function(){

    Route::get('dashboard', [PatientController::class,'index'])->name('dashboard');
    Route::get('patient/add/new', [PatientController::class,'create'])->name('create_patient');
    Route::post('patient/store', [PatientController::class,'store'])->name('store_patient');
    Route::get('patient/delete/{id}', [PatientController::class,'destroy'])->name('destroy_patient');
    Route::get('patient/edit/{id}', [PatientController::class,'edit'])->name('edit_patient');
    Route::post('patient/update', [PatientController::class,'update'])->name('update_patient');



    Route::get('/doctors', [DoctorController::class,'index'])->name('doctors');
    Route::get('/doctor/create', [DoctorController::class,'create'])->name('create_doctor');
    Route::post('/doctor/store', [DoctorController::class,'store'])->name('store_doctor');
    Route::get('doctor/delete/{id}', [DoctorController::class,'destroy'])->name('destroy_doctor');
    Route::get('doctor/edit/{id}', [DoctorController::class,'edit'])->name('edit_doctor');
    Route::post('doctor/update', [DoctorController::class,'update'])->name('update_doctor');





});


//-------end------dashborad----------------------


















Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
