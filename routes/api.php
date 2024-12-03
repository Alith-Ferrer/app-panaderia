<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\BeneficioController;
use App\Http\Controllers\ContratosLaboraleController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PrestacionesSocialeController;
use App\Http\Controllers\TipoBeneficioController;
use App\Http\Controllers\TipoContratoController;
use App\Http\Controllers\TipoPrestacionesSocialeController;
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

Route::get('/Asistencia/getData', [AsistenciaController::class, 'getData']); 
Route::get('/Asistencia/getDataByid', [AsistenciaController::class, 'getDataByid']); 
Route::put('/Asistencia/update', [AsistenciaController::class, 'update']); 
Route::delete('/Asistencia/delete', [AsistenciaController::class, 'delete']); 
Route::post('/Asistencia/save', [AsistenciaController::class, 'save']); 

Route::get('/Beneficio/getData', [BeneficioController::class, 'getData']); 
Route::get('/Beneficio/getDataByid', [BeneficioController::class, 'getDataByid']); 
Route::put('/Beneficio/update', [BeneficioController::class, 'update']); 
Route::delete('/Beneficio/delete', [BeneficioController::class, 'delete']); 
Route::post('/Beneficio/save', [BeneficioController::class, 'save']); 

Route::get('/ContratosLaborale/getData', [ContratosLaboraleController::class, 'getData']); 
Route::get('/ContratosLaborale/getDataByid', [ContratosLaboraleController::class, 'getDataByid']); 
Route::put('/ContratosLaborale/update', [ContratosLaboraleController::class, 'update']); 
Route::delete('/ContratosLaborale/delete', [ContratosLaboraleController::class, 'delete']); 
Route::post('/ContratosLaborale/save', [ContratosLaboraleController::class, 'save']); 

Route::get('/empleado/getData', [EmpleadoController::class, 'getData']); 
Route::get('/empleado/getDataByid', [EmpleadoController::class, 'getDataByid']); 
Route::put('/empleado/update', [EmpleadoController::class, 'update']); 
Route::delete('/empleado/delete', [EmpleadoController::class, 'delete']); 
Route::post('/empleado/save', [EmpleadoController::class, 'save']); 

Route::get('/PrestacionesSociale/getData', [PrestacionesSocialeController::class, 'getData']); 
Route::get('/PrestacionesSociale/getDataByid', [PrestacionesSocialeController::class, 'getDataByid']); 
Route::put('/PrestacionesSociale/update', [PrestacionesSocialeController::class, 'update']); 
Route::delete('/PrestacionesSociale/delete', [PrestacionesSocialeController::class, 'delete']); 
Route::post('/PrestacionesSociale/save', [PrestacionesSocialeController::class, 'save']); 

Route::get('/TipoBeneficio/getData', [TipoBeneficioController::class, 'getData']); 
Route::get('/TipoBeneficio/getDataByid', [TipoBeneficioController::class, 'getDataByid']); 
Route::put('/TipoBeneficio/update', [TipoBeneficioController::class, 'update']); 
Route::delete('/TipoBeneficio/delete', [TipoBeneficioController::class, 'delete']); 
Route::post('/TipoBeneficio/save', [TipoBeneficioController::class, 'save']); 

Route::get('/TipoContrato/getData', [TipoContratoController::class, 'getData']); 
Route::get('/TipoContrato/getDataByid', [TipoContratoController::class, 'getDataByid']); 
Route::put('/TipoContrato/update', [TipoContratoController::class, 'update']); 
Route::delete('/TipoContrato/delete', [TipoContratoController::class, 'delete']); 
Route::post('/TipoContrato/save', [TipoContratoController::class, 'save']); 

Route::get('/TipoPrestacionesSociale/getData', [TipoPrestacionesSocialeController::class, 'getData']); 
Route::get('/TipoPrestacionesSociale/getDataByid', [TipoPrestacionesSocialeController::class, 'getDataByid']); 
Route::put('/TipoPrestacionesSociale/update', [TipoPrestacionesSocialeController::class, 'update']); 
Route::delete('/TipoPrestacionesSociale/delete', [TipoPrestacionesSocialeController::class, 'delete']); 
Route::post('/TipoPrestacionesSociale/save', [TipoPrestacionesSocialeController::class, 'save']); 