<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','partes/home');
Route::view('/contact','contact');
Route::view('/about','about');

// Route::get('/usuarios',[UserController::class,'index']);
Route::resource(name:'usuarios', controller:UsuarioController::class);
