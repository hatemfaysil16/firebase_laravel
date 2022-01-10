<?php

use App\Http\Controllers\Firebase\ContactController;
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

Route::get('contents',[ContactController::class,'index']);
Route::get('add-contact',[ContactController::class,'create']);
Route::post('add-contact',[ContactController::class,'store']);






// add-contact
Route::get('/', function () {
    return view('welcome');
});
