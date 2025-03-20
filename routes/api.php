<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestContact;

Route::get('/testcontact','App\Http\Controllers\TestContact@index');

Route::get('/indexuser', 'App\Http\Controllers\UserController@index');

Route::get('/indexcontact', 'App\Http\Controllers\ContactController@index');

Route::post('/storecontact', 'App\Http\Controllers\ContactController@store');



