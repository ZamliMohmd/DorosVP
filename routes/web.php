<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');



Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// ->middleware('verified');



/******************            Contact                   ********************/
Route::get('/contact' , [\App\Http\Controllers\ContactController::class, 'index']);
Route::post('/contact' , [\App\Http\Controllers\ContactController::class, 'store'])->name('contact');

/******************            Question                   ********************/

Route::post('/question' , [\App\Http\Controllers\QuestionController::class, 'store'])->name('question');

/******************            Register                   ********************/

Route::get('auth/facebook', [\App\Http\Controllers\SocialiteController::class, 'redirectToFB']);
Route::get('auth/facebook/callback', [\App\Http\Controllers\SocialiteController::class, 'handleCallback']);

Route::get('auth/google', [\App\Http\Controllers\SocialiteController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [\App\Http\Controllers\SocialiteController::class, 'handleGoogleCallback']);

Route::get('/user/verify/{token}', [\App\Http\Controllers\UserController::class , 'verifyNewUser'])->name('activeNewUser');
Route::get('/login', [\App\Http\Controllers\UserController::class , 'loginPage'])->name('login');
Route::post('/loginuser', [\App\Http\Controllers\UserController::class , 'login'])->name('loginuser');

//Route::get('/user/verify/notification', 'ActivateNewUserNotification@sendOfferNotification');


/******************            Search                   ********************/
Route::get('/search' , [\App\Http\Controllers\SerachController::class, 'index']);



Route::get('/chat', [\App\Http\Controllers\TeacherController::class, 'chat']);
Route::get('messages', [\App\Http\Controllers\TeacherController::class, 'fetchMessages']);
Route::post('messages', [\App\Http\Controllers\TeacherController::class, 'sendMessage']);

Route::get('/pays', [\App\Http\Controllers\PaymentController::class, 'pays']);
Route::post('/payment/normal', [\App\Http\Controllers\PaymentController::class, 'tranzillaNormalPayment'])->name('teacher_normal_payment');
Route::post('/payment/installments', [\App\Http\Controllers\PaymentController::class, 'tranzillaInstallmentsPayment'])->name('teacher_installments_payments');


Route::get('/terms', [\App\Http\Controllers\HomesController::class, 'terms']);

Route::get('/terms1', [\App\Http\Controllers\HomesController::class, 'terms']);


/******************            blog                   ********************/
Route::get('/about', [\App\Http\Controllers\HomesController::class, 'about']);

Route::get('/blog/index', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('/blog/{id}/show', [\App\Http\Controllers\BlogController::class, 'show']);


Route::get('admin/blog/index', [\App\Http\Controllers\BlogController::class, 'adminIndex'])->name('admin.blog.index');
Route::post('/admin/blog/store', [\App\Http\Controllers\BlogController::class, 'store']);



Route::get('admin/blog/index', [\App\Http\Controllers\BlogController::class, 'adminIndex'])->name('admin.blog.index');
Route::post('/admin/blog/store', [\App\Http\Controllers\BlogController::class, 'store']);


