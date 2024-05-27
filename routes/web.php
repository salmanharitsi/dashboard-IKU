<?php

use App\Http\Controllers\AdminBinagramController;
use App\Http\Controllers\AdminSistemController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OperatorController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

//Route Login
Route::post('/login_post', [AuthController::class, 'login_post']);

//Route logout
Route::get('/logout', [AuthController::class, 'logout']);

//Route Role Access
Route::group(['middleware' => ['pimpinan', 'no-cache']], function () {
    Route::get('pimpinan/dashboard', [DashboardController::class, "dashboard"]);
    Route::get('pimpinan/edit-user/{id}', [AdminSistemController::class, "view_update_user"]);
});

Route::group(['middleware' => ['adminsistem', 'no-cache']], function () {
    Route::get('adminsistem/dashboard', [DashboardController::class, "dashboard"]);
    // Route::get('adminsistem/dashboard', [AdminSistemController::class, 'get_all_user']);
    Route::get('adminsistem/dashboard', [AdminSistemController::class, 'search_users'])->name('search-user');
    Route::get('adminsistem/tambah-user', [AdminSistemController::class, "view_add_user"]);
    Route::get('adminsistem/edit-user/{id}', [AdminSistemController::class, "view_update_user"]);
    Route::delete('adminsistem/dashboard/{id}', [AdminSistemController::class, 'delete_user']);
    Route::post('adminsistem/tambah-user', [AdminSistemController::class, 'create_user']);
    Route::put('adminsistem/edit-user/{id}', [AdminSistemController::class, "edit_user"]);
});

Route::group(['middleware' => ['adminbinagram', 'no-cache']], function () {
    Route::get('adminbinagram/dashboard', [DashboardController::class, "dashboard"]);
    Route::get('adminbinagram/edit-user/{id}', [AdminSistemController::class, "view_update_user"]);
    Route::get('adminbinagram/dashboard', [AdminBinagramController::class, "view_master_data"]);
    Route::post('adminbinagram/dashboard/store', [AdminBinagramController::class, 'store']);
    Route::put('adminbinagram/dashboard/update/{id}', [AdminBinagramController::class, 'update']);
    Route::delete('adminbinagram/dashboard/delete/{id}', [AdminBinagramController::class, 'delete']);
});

Route::group(['middleware' => ['adminapproval', 'no-cache']], function () {
    Route::get('adminapproval/dashboard', [DashboardController::class, "dashboard"]);
    Route::get('adminapproval/edit-user/{id}', [AdminSistemController::class, "view_update_user"]);
});

Route::group(['middleware' => ['operator', 'no-cache']], function () {
    Route::get('operator/dashboard', [DashboardController::class, "dashboard"]);
    Route::get('operator/dashboard', [OperatorController::class, "view_master_data"]);
    Route::get('operator/edit-master-data/{type}/{id}', [OperatorController::class, 'view_edit_master_data']);
    Route::get('operator/tambah-master-data/{type}/{id}', [OperatorController::class, 'view_add_master_data']);
    Route::get('operator/pending-master-data', [OperatorController::class, 'view_uploaded_master_data'])->name('search-data');
    Route::post('operator/tambah-master-data', [OperatorController::class, "add_master_data"]);
    Route::put('operator/edit-master-data/{id}', [OperatorController::class, "update_master_data"]);
});
