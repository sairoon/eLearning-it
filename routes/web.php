<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\FrontController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Teacher\TeacherDashboardController;
use App\Http\Controllers\Student\StudentAuthController;
use App\Http\Controllers\Student\StudentProfileController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Demo\DemoController;

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

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/course/{id}', [FrontController::class, 'courses'])->name('course');
Route::get('/course-detail/{course}', [FrontController::class, 'coursesDetail'])->name('detail-course');
Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('contact-us');

Route::get('/student/login', [StudentAuthController::class, 'login'])->name('user-login');
Route::post('/student/login', [StudentAuthController::class, 'checkLogin'])->name('user-login');

Route::get('/student/register', [StudentAuthController::class, 'register'])->name('user-register');
Route::post('/student/register', [StudentAuthController::class, 'checkRegister'])->name('register-student');

Route::post('/student/logout', [StudentAuthController::class, 'logout'])->name('user-logout');
Route::get('/student/reset-password', [StudentAuthController::class, 'resetPass'])->name('user.reset.pass');

Route::get('/student/profile', [StudentProfileController::class, 'profile'])->name('user-profile')->middleware('student');

Route::middleware(['teacher'])->group(function (){
    Route::get('/teacher/dashboard', [TeacherDashboardController::class, 'teacherDashboard'])->name('teacher.dashboard');
    Route::resource('/courses', CourseController::class);

    Route::resource('/demos', DemoController::class);

});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::resource('/departments', DepartmentController::class);
    Route::resource('/teachers', TeacherController::class);


});
