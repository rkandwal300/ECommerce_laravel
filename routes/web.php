<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Contact ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/h','Eg') ;

Route::view('/','Home');
Route::view('/products','ProductListPage');


Route::view('/about','About') ;
Route::view('/contact','Contact') ;
Route::post('/contact_detail',[Contact::class ,'index']) ;

Route::post('/SaveProduct',[Contact::class ,'SaveProducts']) ;
// Route::post('/form_submit',[Contact::class ,'SaveProducts']) ;
