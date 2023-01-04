<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PublikasiController;

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PublicationController; 

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


Route::get('publikasi', [PublikasiController::class, 'index']);
Route::get('publikasi/{slug}', [PublikasiController::class, 'view']);
Route::post('publikasi-download/{slug}', [PublikasiController::class, 'downloader']);

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    route::get('dashboard', [DashboardController::class, 'index']);

    route::get('publication', [PublicationController::class, 'index']);
    route::post('publication/create', [PublicationController::class, 'create']);
    route::get('publication-edit/{id}', [PublicationController::class, 'edit']);
    route::patch('publication-update/{id}', [PublicationController::class, 'update']);
    route::get('publication-delete/{id}', [PublicationController::class, 'delete']);
});
