<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

Route::get('/data',[simple::class,'index']);

Route::get('/indexuser', 'App\Http\Controllers\UserController@index');


Route::get('/indexcontact', 'App\Http\Controllers\ContactController@index');

Route::post('/storecontact', 'App\Http\Controllers\ContactController@store');



