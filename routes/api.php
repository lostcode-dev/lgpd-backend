<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequirementsController;
use App\Http\Controllers\TypeController;


Route::post('/requirements', [RequirementsController:: class, 'store']);

Route::get('/requirements', [RequirementsController:: class, 'index']);

Route::get('/types', [TypeController:: class, 'index']);

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
