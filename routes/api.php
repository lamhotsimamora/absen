<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::post('/',function(){
//     return redirect('user-login');
// });


Route::post('/admin-login',[AdminController::class, 'login']);
Route::post('/save-setting',[SettingController::class, 'saveData']);
Route::post('/get-setting',[SettingController::class, 'getData']);
Route::post('/upload-absen-masuk',[AbsenController::class, 'uploadAbsen']);
Route::post('/get-absen',[AbsenController::class, 'getAbsen']);