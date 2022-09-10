<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Controllerlogin;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Panel;
use  App\Http\Controllers\Login;
use  App\Http\Controllers\menucontroller;
use  App\Http\Controllers\ImageUploadController;

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

Route::get('/', function () {  return view('welcome');});
Route::get('/login',[Controllerlogin::class,"login"])-> name('name.login');
Route::get('/register',[Controllerlogin::class,"register"])-> name('name.register');
Route::post('/checkregister',[Controllerlogin::class,"loginsubmit"])-> name('login.submit');
Route::get('allorder/{id}',[Controllerlogin::class,"allorder"])->name('all.order');

Route::get('delete/{id}',[Controllerlogin::class,"delete"])->name('delete.user');
Route::get('edit/{id}',[Controllerlogin::class,"edit"])->name('edit.user');
Route::post('update',[Controllerlogin::class,"update"])-> name('update.user');


Route::get('allorder/ordereditt/{id}',[Controllerlogin::class,"editorder"]);
Route::get('allorder/orderdeletee/{id}',[Controllerlogin::class,"orderdelete"]);
Route::post('updateorder',[Controllerlogin::class,"updateorder"])-> name('update.order');

Route::get('/html',[Controllerlogin::class,"html"])-> name('html.order');
