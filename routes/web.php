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
Route::get("/duan",[HomeController::class, 'project']);
Route::get("/tintuc-chitiet",[HomeController::class, 'blogDetail']);
Route::get("/tintuc-video",[HomeController::class, 'blogVideo']);
Route::get("/duan-chitiet",[HomeController::class, 'projectgallery']);