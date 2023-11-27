<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\WordFileController;
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
    return view('index');
});

Route::get('/activity_info_form', function () {
    return view('activity_info_form');
});

Route::get('/test', function () {
    return "test";
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware'=>'admins'],function(){
    Route::get('/admin/user-add/form',[AdminController::class,'addUsers'])->name('addUser');
    Route::post('/admin/user-add/form/store',[AdminController::class,'storeUsers'])->name('addUser.store');
});



Route::post('/activity/store', [HomeController::class, 'store'])->name('activity.store');
Route::get('/activity/{activity_id}/goal', [GoalController::class, 'index'])->name('activity.goal');
Route::post('/activity/goal/store', [GoalController::class, 'store'])->name('activity.goal.store');

Route::get('/activity/{activity_id}/tables', [TableController::class, 'index'])->name('activity.table');
Route::get('/activity/tables/word/download',[WordFileController::class, 'store'])->name('activity.table.download');
Route::get('/activity/actions/form', [ActionController::class, 'index'])->name('activity.action.form');

route::get('/deletetask/{id}',[HomeController::class,'deletetask'])->name('activity.delete');


