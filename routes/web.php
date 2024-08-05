<?php

use App\Http\Controllers\HomeController;
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

Route::get("/tintuc",[HomeController::class, 'blog']);
Route::get("/tintuc/chi-tiet",[HomeController::class, 'blogDetail']);
Route::get("/tintuc-video",[HomeController::class, 'blogVideo']);

Route::get("/duan",[HomeController::class, 'project']);
Route::get("/duan/phan-loai",[HomeController::class, 'projectgallery']);     


Route::get("/thu-vien",[HomeController::class, 'library']);
Route::get("/thu-vien/van-ban-quy-pham-phap-luat",[HomeController::class, 'legalDoc']);
Route::get("/thu-vien/chi-tiet",[HomeController::class, 'detailsLib']);

Route::get("/bao-gia",[HomeController::class, 'quotation']);