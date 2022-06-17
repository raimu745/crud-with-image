<?php

use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
    
route::get('/join','App\Http\Controllers\joinController@join');
route::get('/demo',function(){
 return "hello umair jani";
});

route::post('msg',[LeadController::class,'show']);
route::view('form','form');
route::get('show',[LeadController::class,'data']);
route::get('delete/{id}',[LeadController::class,'destroy'])->name('destroy');
route::get('edit/{id}',[LeadController::class,'edit'])->name('chang');
route::put('update/{id}',[LeadController::class,'update']);
route::get('upload',[LeadController::class,'test']);
route::post('img',[LeadController::class,'imgupload']);

