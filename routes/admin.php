<?php
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\SpecialtiesController;
use App\Http\Controllers\TopicsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->group(function () {

Route::get('/' , [\App\Http\Controllers\AdminpanelController::class, 'index'])->name('dashboard.index');

    /******************            Setting                   ********************/

Route::get('/setting/new' , [SettingController::class, 'create']);
Route::post('/setting/store' , [SettingController::class, 'store']);
Route::get('/setting/index' , [SettingController::class, 'index']);
Route::post('/setting/{name}/edit' , [SettingController::class, 'update']);



/******************            Contact                   ********************/
Route::get('/contact/index' , [ContactController::class, 'getAllToAdminpanel']);
Route::post('/contact/index' , [ContactController::class, 'store']);

Route::get('/contact/{id}/show' , [ContactController::class, 'getContactById']);


    /******************            Cities                   ********************/
 Route::get('/cities/index' , [CitiesController::class, 'index'])->name('cities');
 Route::post('/cities/new' , [CitiesController::class, 'store']);
 Route::post('/cities/edit' , [CitiesController::class, 'showEdit']);
 Route::post('/cities/update' , [CitiesController::class, 'update']);
 Route::get('/cities/search' , [CitiesController::class, 'searchAjax'])->name('citiesSearch');
 Route::delete('/cities/delete' , [CitiesController::class, 'destroy']);


    /******************            Universities                   ********************/
    Route::get('/universities/index' , [UniversityController::class, 'index'])->name('universities');
    Route::post('/universities/new' , [UniversityController::class, 'store']);
    Route::post('/universities/edit' , [UniversityController::class, 'showEdit']);
    Route::post('/universities/update' , [UniversityController::class, 'update']);
    Route::get('/universities/search' , [UniversityController::class, 'searchAjax'])->name('universitiesSearch');
    Route::delete('/universities/delete' , [UniversityController::class, 'destroy']);


    /******************            degree                   ********************/
    Route::get('/degree/index' , [DegreeController::class, 'index'])->name('degree');
    Route::post('/degree/new' , [DegreeController::class, 'store']);
    Route::post('/degree/edit' , [DegreeController::class, 'showEdit']);
    Route::post('/degree/update' , [DegreeController::class, 'update']);
    Route::get('/degree/search' , [DegreeController::class, 'searchAjax'])->name('degreeSearch');
    Route::delete('/degree/delete' , [DegreeController::class, 'destroy']);


    /******************            main specialties                   ********************/
    Route::get('/mainspecialties/index' , [SpecialtiesController::class, 'index'])->name('mainspecialties');
    Route::post('/mainspecialties/new' , [SpecialtiesController::class, 'store']);
    Route::post('/mainspecialties/edit' , [SpecialtiesController::class, 'showEdit']);
    Route::post('/mainspecialties/update' , [SpecialtiesController::class, 'update']);
    Route::get('/mainspecialties/search' , [SpecialtiesController::class, 'searchAjax'])->name('mainSpecialtiesSearch');
    Route::post('/mainspecialties/delete' , [SpecialtiesController::class, 'destroy']);

    /******************            Sub specialties                   ********************/
    Route::get('/subspecialties/{id}/index' , [SpecialtiesController::class, 'subSpecialties'])->name('subspecialties');
    Route::post('/subspecialties/new' , [SpecialtiesController::class, 'store']);
    Route::post('/subspecialties/update' , [SpecialtiesController::class, 'update']);
    Route::post('/subspecialties/delete' , [SpecialtiesController::class, 'destroy']);
    Route::get('/subspecialties/search' , [SpecialtiesController::class, 'searchSubAjax'])->name('subSpecialtiesSearch');


    /******************            main Topics                   ********************/
    Route::get('/maintopics/index' , [TopicsController::class, 'index'])->name('mainTopics');
    Route::post('/maintopics/new' , [TopicsController::class, 'store']);
    Route::post('/maintopics/edit' , [TopicsController::class, 'showEdit']);
    Route::post('/maintopics/update' , [TopicsController::class, 'update']);
    Route::get('/maintopics/search' , [TopicsController::class, 'searchAjax'])->name('mainTopicsSearch');
    Route::post('/maintopics/delete' , [TopicsController::class, 'destroy']);

    /******************            Sub Topics                   ********************/
    Route::get('/subtopics/{id}/index' , [TopicsController::class, 'subTopics'])->name('subTopics');
    Route::post('/subtopics/new' , [TopicsController::class, 'store']);
    Route::post('/subtopics/update' , [TopicsController::class, 'updateSubٍ']);
    Route::post('/subtopics/delete' , [TopicsController::class, 'destroySub']);
    Route::get('/subtopics/search' , [TopicsController::class, 'searchSubAjax'])->name('subTopicsSearch');


    /******************            blog                   ********************/
    Route::get('/blog/new' , [\App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');



});
