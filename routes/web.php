<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;

Route::get('/login', function () {
    return view('login');
}); 

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
}); 
Route::view('/register','register'); 
Route::post("/login",[usercontroller::class,'login']);
Route::post("/register",[usercontroller::class,'register']);  
Route::get("/",[productcontroller::class,'index']); 
Route::get("detail/{id}",[productcontroller::class,'detail']);
Route::get("search",[productcontroller::class,'search']); 
Route::post("add_to_cart",[productcontroller::class,'addToCart']);
Route::get("cartlist",[productcontroller::class,'cartlist']); 
Route::get("removecart/{id}",[productcontroller::class,'removecart']); 
Route::get("ordernow",[productcontroller::class,'ordernow']); 
Route::post("orderplace",[ProductController::class,'orderplace']);
Route::get("myorders",[ProductController::class,'myorders']);







