<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Parent\ParentsAuthController;
use App\Http\Controllers\Student\StudentAuthController;
use App\Http\Controllers\Teacher\TeachersAuthController;

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

Route::get('/', function () {
    return view('welcome');
});



// Routes for students
Route::prefix('student')->middleware(['student'])->name('student.')->group(function(){
    Route::get('/login',[StudentAuthController::class, 'loginForm']
)->name('login');
 });
Route::prefix('teacher')->name('teacher.')->group(function(){

    Route::middleware(['teacher'])->group(function(){
        Route::get('/home',[TeachersAuthController::class,'home'])->name('home');
    Route::get('/attendance/{class}',[TeacherController::class,'attendanceForm'])->name('class-attendance');
    Route::post('/attendance/{class}',[TeacherController::class,'submitAttendance'])->name('submit');
    Route::get('/homework/{class}',[TeacherController::class,'homeworkReport'])->name('homework');
    Route::post('/homework/{class}/{studentId}', [TeacherController::class,'approveHomework'])->name('update-homework');
    Route::post('/logout',[TeachersAuthController::class, 'logout'])->name('logout.submit');
    });

        Route::get('/login',[TeachersAuthController::class, 'loginForm'])->name('login');
        Route::post('/login',[TeachersAuthController::class, 'login'])->name('login.submit');
        

      
        

 });
Route::prefix('parent')->middleware(['parent'])->name('parent.')->group(function(){
    Route::get('/login',[ParentsAuthController::class, 'loginForm']
)->name('login');
 });
Route::prefix('admin')->middleware(['admin'])->name('admin.')->group(function(){
    Route::get('/login',[AdminAuthController::class, 'loginForm']
)->name('login');
 });
// Route::prefix('student')->middleware(['student'])->name('student.')->group(function () {
//     Route::get('dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
//     // Define other student routes
// });

// Define routes for other user types

