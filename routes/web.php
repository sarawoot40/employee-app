<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsertestController;
use App\Http\Controllers\TestbodyController;
use App\Http\Controllers\AlltestcarController;


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

Route::get('home',[UsertestController::class,'home'])->name('home');
//Route::get('adduser',[UsertestController::class,'index'])->name('adduser');
Route::post('add',[UsertestController::class,'store'])->name('adddataUser');
Route::get('edituser/{id}',[UsertestController::class,'edituser']);
Route::post('update/{id}',[UsertestController::class,'update']);
//ส่วนของการลบข้อมูลและกู้คืน
Route::get('softdelete/{id}',[UsertestController::class,'softdelete']);
Route::get('restore',[UsertestController::class,'showrestore']);
Route::get('addrestore/{id}',[UsertestController::class,'addrestore']);
Route::post('updateAjex',[UsertestController::class,'updateAjex']);




