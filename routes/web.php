<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
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

// Route::get('/student', function () {
//     return view('student');
// });
Route::get('student',[StudentController::class,'student']);
Route::get('delete/{id}',[StudentController::class,'delete']);
Route::get('table',[StudentController::class,'table']);
Route::get('trash',[StudentController::class,'trash']);
Route::get('restore/{id}',[StudentController::class,'restore']);

Route::view('user','user');

Route::get('search',[TestController::class,'testTable']);
Route::get('testMail',[TestController::class,'testMail']);
