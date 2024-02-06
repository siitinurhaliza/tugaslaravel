<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', function(){
    return view('welcome',
    );
});

Route::get('/home', function (){
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/register', function (){
    return view('register',[
        "title" => "register"
    ]);
});

