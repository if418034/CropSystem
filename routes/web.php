<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanamansController;
use App\Http\Controllers\CropsController;
use App\Http\Controllers\JadwalsController;
use App\Http\Controllers\DatasController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SequenceController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\HasilPanenController;


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

Route::resource('feedback', FeedbackController::class);
Route::resource('request', RequestController::class);
Route::resource('users', UsersController::class);
Route::resource('roles', RolesController::class);
Route::resource('tanamans', TanamansController::class);
Route::resource('datas', DatasController::class);
Route::resource('crops', CropsController::class);
//Route::resource('profile', CropsController::class);
Route::resource('jadwals', JadwalsController::class);
Route::resource('sequences', SequenceController::class);
Route::resource('hasilpanens', HasilPanenController::class);

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::post('/login', [
    'uses' => 'App\Http\Controllers\UsersController@login',
    'as' => 'user.login'
]);

Route::post('/plainLogin', [UsersController::class, 'login']);

Route::get('/changeFarmer/{id}', [UsersController::class, 'changeFarmer']);
Route::get('/deleteUser/{id}', [UsersController::class, 'destroy']);
Route::get('/unregistered', [UsersController::class, 'unregistered']);
Route::get('/sequence/editUrutan', [SequenceController::class, 'editUrutan']);
Route::post('/sequence/simpanUrutan', [SequenceController::class, 'simpanUrutan']);

Route::get('/changePassword/{id}' , [UsersController::class, 'changePassword']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
