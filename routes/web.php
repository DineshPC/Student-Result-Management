<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ResultTeacherController;
use App\Http\Controllers\ResultStudentController;
use App\Http\Controllers\ExamController;

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
    
    // admin -> student routes
    Route::get('admin/student/list', [AdminController::class, 'listStudent']);
    Route::get('admin/student/add', [AdminController::class, 'addStudent']);
    Route::post('admin/student/add', [AdminController::class, 'insertStudent']);
    Route::get('admin/student/edit/{id}', [AdminController::class, 'editStudent']);
    Route::post('admin/student/edit/{id}', [AdminController::class, 'updateStudent']);
    Route::post('admin/student/delete/{id}', [AdminController::class, 'delete']);

    // admin -> subjects routes
    Route::get('admin/subjects/list', [SubjectController::class, 'list']);
    Route::get('admin/subjects/add', [SubjectController::class, 'add']);
    Route::post('admin/subjects/add', [SubjectController::class, 'insert']);
    Route::get('admin/subjects/edit/{id}', [SubjectController::class, 'edit']);
    Route::post('admin/subjects/edit/{id}', [SubjectController::class, 'update']);
    Route::post('admin/subjects/delete/{id}', [SubjectController::class, 'delete']);

    // admin -> results routes
    Route::get('admin/result/list', [ResultController::class, 'listResult']);
    Route::get('admin/result/show/{id}', [ResultController::class, 'showStudentResult']);
    Route::get('admin/result/add', [ResultController::class, 'add']);
    Route::post('admin/result/added', [ResultController::class, 'update']);
    Route::post('admin/result/delete/{id}', [ResultController::class, 'delete']);
    Route::post('admin/result/upload', [ResultController::class, 'upload']);

    // admin -> exam routes
    Route::get('admin/exam/list', [ExamController::class, 'list']);
    Route::get('admin/exam/add', [ExamController::class, 'add']);
    Route::post('admin/exam/add', [ExamController::class, 'insert']);
    Route::post('admin/exam/delete/{id}', [ExamController::class, 'delete']);
    
    

});

Route::group(['middleware' => 'teacher'], function (){

    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('teacher/student/list', [TeacherController::class, 'listStudent']);
    Route::get('teacher/student/add', [TeacherController::class, 'addStudent']);
    Route::post('teacher/student/add', [TeacherController::class, 'insertStudent']);
    Route::get('teacher/student/edit/{id}', [TeacherController::class, 'editStudent']);
    Route::post('teacher/student/edit/{id}', [TeacherController::class, 'updateStudent']);
    Route::post('teacher/student/delete/{id}', [TeacherController::class, 'delete']);

    Route::get('teacher/result/list', [ResultTeacherController::class, 'listResult']);
    Route::get('teacher/result/show/{id}', [ResultTeacherController::class, 'showStudentResult']);
    Route::get('teacher/result/add', [ResultTeacherController::class, 'add']);
    Route::post('teacher/result/added', [ResultTeacherController::class, 'update']);
    Route::post('teacher/result/delete/{id}', [ResultTeacherController::class, 'delete']);
    Route::post('teacher/result/upload', [ResultTeacherController::class, 'upload']);

});

Route::group(['middleware' => 'student'], function (){

    Route::get('student/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('student/result', [ResultStudentController::class, 'showResult']);


});
 