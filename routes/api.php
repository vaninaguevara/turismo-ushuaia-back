<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource(name:'usuarios', controller:UsuarioController::class);
Route::resource(name:'rol', controller:RolController::class);
Route::resource(name:'productos', controller:ProductosController::class);
Route::resource(name:'tipo', controller:TipoController::class);
Route::resource(name:'paquetes', controller:PaqueteController::class);
Route::resource(name:'ticket', controller:TicketController::class);
Route::resource(name:'detalleTicket', controller:DetalleTicketController::class);