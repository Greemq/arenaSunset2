<?php

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

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
});

Route::middleware(['auth:api', 'localization'])->group(function () {
    Route::post('upload-file', [\App\Http\Controllers\MainController::class, 'uploadFile']);

    Route::get('flats', [\App\Http\Controllers\FlatController::class, 'index']);
    Route::get('flats/{id}', [\App\Http\Controllers\FlatController::class, 'show']);
    Route::post('flats', [\App\Http\Controllers\FlatController::class, 'store']);
    Route::post('flats/{id}/update', [\App\Http\Controllers\FlatController::class, 'update']);
    Route::delete('flats', [\App\Http\Controllers\FlatController::class, 'destroy']);

    Route::get('progress', [\App\Http\Controllers\ProgressController::class, 'index']);
    Route::get('progress/{id}', [\App\Http\Controllers\ProgressController::class, 'show']);
    Route::post('progress', [\App\Http\Controllers\ProgressController::class, 'store']);
    Route::post('progress/{id}/update', [\App\Http\Controllers\ProgressController::class, 'update']);
    Route::delete('progress', [\App\Http\Controllers\ProgressController::class, 'destroy']);

    Route::get('purchase', [\App\Http\Controllers\PurchaseController::class, 'index']);
    Route::get('purchase/{id}', [\App\Http\Controllers\PurchaseController::class, 'show']);
    Route::post('purchase', [\App\Http\Controllers\PurchaseController::class, 'store']);
    Route::post('purchase/{id}/update', [\App\Http\Controllers\PurchaseController::class, 'update']);
    Route::delete('purchase', [\App\Http\Controllers\PurchaseController::class, 'destroy']);
    Route::post('purchase/order/{id}', [\App\Http\Controllers\PurchaseController::class, 'changeOrder']);


    Route::post('contact', [\App\Http\Controllers\ContactController::class, 'store']);
    Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index']);
    Route::delete('contact/{id}', [\App\Http\Controllers\ContactController::class, 'destroy']);
    Route::post('contact/{id}/main', [\App\Http\Controllers\ContactController::class, 'makeMain']);
});
Route::middleware(['api', 'localization'])->prefix('public')->group(function () {

    Route::get('flats', [\App\Http\Controllers\FlatController::class, 'allFlats']);
    Route::get('progress', [\App\Http\Controllers\ProgressController::class, 'allProgress']);
    Route::get('purchases', [\App\Http\Controllers\PurchaseController::class, 'index']);
    Route::get('contacts', [\App\Http\Controllers\ContactController::class, 'allContacts']);
});
