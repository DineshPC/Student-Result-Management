<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;

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
    
    // admin -> dashboard routes 
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    // admin -> admin routes
    Route::get('admin/admin/list', [AdminController::class, 'list']);
    Route::get('admin/admin/add', [AdminController::class, 'add']);
    Route::post('admin/admin/add', [AdminController::class, 'insert']);
    Route::get('admin/admin/edit/{id}', [AdminController::class, 'edit']);
    Route::post('admin/admin/edit/{id}', [AdminController::class, 'update']);
    Route::post('admin/admin/delete/{id}', [AdminController::class, 'delete']);

    // admin -> class routes 
    Route::get('admin/classroom/list', [ClassController::class, 'list']);
    Route::get('admin/classroom/add', [ClassController::class, 'add']);
    Route::post('admin/classroom/add', [ClassController::class, 'insert']);
    Route::get('admin/classroom/edit/{id}', [ClassController::class, 'edit']);
    Route::post('admin/classroom/edit/{id}', [ClassController::class, 'update']);
    Route::post('admin/classroom/delete/{id}', [ClassController::class, 'delete']);

    // admin -> teacher routes
    Route::get('admin/teacher/list', [AdminController::class, 'listTeacher']);
    Route::get('admin/teacher/add', [AdminController::class, 'addTeacher']);
    Route::post('admin/teacher/add', [AdminController::class, 'addNewTeacher']);
    Route::get('admin/teacher/edit/{id}', [AdminController::class, 'editTeacher']);
    Route::post('admin/teacher/edit/{id}', [AdminController::class, 'updateTeacher']);
    Route::post('admin/teacher/delete/{id}', [AdminController::class, 'delete']);

    // admin -> subjects routes
    Route::get('admin/subjects/list', [SubjectController::class, 'list']);
    Route::get('admin/subjects/add', [SubjectController::class, 'add']);
    Route::post('admin/subjects/add', [SubjectController::class, 'insert']);
    Route::get('admin/subjects/edit/{id}', [SubjectController::class, 'edit']);
    Route::post('admin/subjects/edit/{id}', [SubjectController::class, 'update']);
    Route::post('admin/subjects/delete/{id}', [SubjectController::class, 'delete']);

    // admin -> student routes
    Route::get('admin/student/list', [AdminController::class, 'listStudent']);
    Route::get('admin/student/add', [AdminController::class, 'addStudent']);
    Route::post('admin/student/add', [AdminController::class, 'insertStudent']);
    Route::get('admin/student/edit/{id}', [AdminController::class, 'editStudent']);
    Route::post('admin/student/edit/{id}', [AdminController::class, 'updateStudent']);
    Route::post('admin/student/delete/{id}', [AdminController::class, 'delete']);
    
});

Route::group(['middleware' => 'teacher'], function (){

    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);

});

Route::group(['middleware' => 'student'], function (){

    Route::get('student/dashboard', [DashboardController::class, 'dashboard']);

});
 