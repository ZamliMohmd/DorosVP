<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeacherController;
/*
|--------------------------------------------------------------------------
| Teacher Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/teacher/index' , [TeacherController::class, 'index'])->name('teacher_index');
Route::get('/teacher/messages' , [TeacherController::class, 'messages'])->name('teacher_messages');
Route::get('/teacher/payment' , [TeacherController::class, 'payment'])->name('teacher_payment');
Route::get('/teacher/blog' , [TeacherController::class, 'blog'])->name('teacher_blog');
Route::get('/teacher/calender' , [TeacherController::class, 'calender'])->name('teacher_calender');

Route::get('/teacher/completeprofile' , [TeacherController::class, 'completeProfile'])->name('teacher_completeprofile')->middleware('auth');
Route::post('/teacher/completeprofiles' , [TeacherController::class, 'storeCompleteProfile'])->name('teacher_storeCompleteProfile')->middleware('auth');
Route::post('/teacher/completeprofile/addLearningSubjects' , [TeacherController::class, 'addLearningSubjects'])->name('addLearningSubjects');
Route::post('/teacher/completeprofile/priceAndCities' , [TeacherController::class, 'storePriceAndCities'])->name('storePriceAndCities');
Route::post('/teacher/completeprofile/experience' , [TeacherController::class, 'storeExperience'])->name('storeExperience');
Route::post('/teacher/completeprofile/workhours' , [TeacherController::class, 'storeWorkHours'])->name('storeWorkHours');

Route::get('/teacher/payment/subscribe' , [TeacherController::class, 'subscripe'])->name('teacher_subscripe');
Route::get('/teacher/payment/{token}/pay' , [TeacherController::class, 'payFromNewTeacher'])->name('teacher_subscripe_payment');

Route::get('/teacher/register' , [TeacherController::class, 'registerPage'])->name('teacher_register_page');
Route::post('/teacher/registers' , [TeacherController::class, 'register'])->name('teacher_register');


