<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin']);
Route::get('logout', [AuthController::class, 'logout']);





Route::group(['middleware' => 'admin'], function (){
    
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/admin/list', [AdminController::class, 'list']);
    Route::get('admin/admin/add', [AdminController::class, 'add']);
    Route::post('admin/admin/add', [AdminController::class, 'insert']);
    Route::get('admin/admin/edit/{id}', [AdminController::class, 'edit']);
    Route::post('admin/admin/edit/{id}', [AdminController::class, 'update']);
    Route::post('admin/admin/delete/{id}', [AdminController::class, 'delete']);
    
    // Route::get('admin/admin/list', function () {
    //     return view('admin.admin.list');
    // });
    
});

Route::group(['middleware' => 'teacher'], function (){

    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);

});

Route::group(['middleware' => 'student'], function (){

    Route::get('student/dashboard', [DashboardController::class, 'dashboard']);

});
 