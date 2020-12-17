<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/student/register' , [StudentController::class, 'register'])->name('student_register');
Route::get('/student/test' , [StudentController::class, 'test']);
Route::get('/student/index' , [StudentController::class, 'index'])->name('student_index');
Route::post('/student/update' , [StudentController::class, 'update'])->name('student_update');

//Route::get('/student/index' , [StudentController::class, 'index'])->name('student_index');
Route::get('/student/messages' , [StudentController::class, 'messages'])->name('student_messages');

Route::get('/student/profile/complete' , [StudentController::class, 'completeProfile']);
Route::post('/student/profile/completes' , [StudentController::class, 'store'])->name('store_completeProfile');

Route::get('/student/cities' , function (){
    return \App\Models\City::all();
    dd(\App\Models\City::all()->name_ar);
});

Route::get('/student/testCity' , [StudentController::class, 'testCity']);


