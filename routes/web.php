<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kalimatController;

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

Route::get('kalimat', [kalimatController::class, 'index']);
Route::get('kalimat/halamanUtama', [kalimatController::class, 'halamanUtama']);
Route::get('kalimat/addText', [kalimatController::class, 'addText']);
Route::get('kalimat/seeText', [kalimatController::class, 'seeText']);
Route::post('kalimat/postText', [kalimatController::class, 'postText']);;
Route::get('kalimat/deskripsi', [kalimatController::class, 'deskripsi']);
