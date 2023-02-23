<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
//     Auth::routes();
// });

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('master', [App\Http\Controllers\UserController::class, 'allusers'])->name('allusers');


Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {

    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('users', [App\Http\Controllers\AdminController::class, 'manage_users'])->name('admin.users');
    Route::get('view_vaccines', [App\Http\Controllers\AdminController::class, 'view_vacc'])->name('admin.view_vaccines');
    Route::get('pcr', [App\Http\Controllers\AdminController::class, 'pcr_results'])->name('admin.pcr');
    Route::get('reports', [App\Http\Controllers\AdminController::class, 'view_reports'])->name('admin.reports');
    Route::get('patients', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.patients');
    // Users edit , delete , udate :
    Route::get('edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
    Route::post('edit/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
    Route::post('delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('admin.delete');
    // PCR Accept , Reject
    Route::post('accept/{id}', [App\Http\Controllers\AdminController::class, 'accept'])->name('admin.accept');
    Route::post('reject/{id}', [App\Http\Controllers\AdminController::class, 'reject'])->name('admin.reject');

    // Paitent Edit, DELETE ,UPDATE
    Route::get('edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
    Route::post('edit/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
    Route::post('delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('admin.delete');
});


Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('user.dashboard');
    // Route::get('hospitalpatients', [App\Http\Controllers\UserController::class, 'index'])->name('user.hospitalpatients');
    Route::get('patients', [App\Http\Controllers\UserController::class, 'store'])->name('user.patients');
    Route::get('vaccines', [App\Http\Controllers\UserController::class, 'vacc_request'])->name('user.vaccines');
    Route::get('pcr', [App\Http\Controllers\UserController::class, 'pcr_results'])->name('user.pcr');
    Route::post('/pcr', [App\Http\Controllers\TestsController::class, 'store'])->name('addPcr');
    Route::post('/patients', [App\Http\Controllers\PatientsController::class, 'store'])->name('addPatient');
    Route::post('/vaccineRequest', [App\Http\Controllers\VaccinesController::class, 'store'])->name('addVaccine');
    // Paitent Edit, DELETE ,UPDATE
    Route::get('edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::post('edit/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::post('delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
});
