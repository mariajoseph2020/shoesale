<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\admincontroller;

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
Route::get("search",[productcontroller::class,'search']); 
Route::get("ordernow",[productcontroller::class,'ordernow']); 
Route::get("detail/{id}",[productcontroller::class,'detail']);
Route::get("cartlist",[productcontroller::class,'cartlist']); 
Route::get("removecart/{id}",[productcontroller::class,'removecart']); 
    
Route::get("myorders",[ProductController::class,'myorders']);
Route::post("add_to_cart",[productcontroller::class,'addToCart']);
Route::post("orderplace",[ProductController::class,'orderplace']);
Route::get("/admintheme",[admincontroller::class,'index']);
Route::get("/purchaseditem",[admincontroller::class,'getallpurchaseditems']);

Route::get("/userdetails",[admincontroller::class,'getalluserdetails']);
Route::get('/admin', function () {
    return view('admin');
}); 
Route::post("/admin",[admincontroller::class,'admin']);
Route::view('/adminregister','adminregister'); 
Route::post("/adminregister",[admincontroller::class,'adminregister']);
Route::get('/admintheme', [admincontroller::class,'show'] );
Route::get('/addproduct', [admincontroller::class,'index'] );
Route::post('/addproduct/add', [admincontroller::class,"addproduct"] );
Route::get("/allproducts",[admincontroller::class,'allproducts']);
Route::get('delete/{id}',[admincontroller::class,'delete']);
Route::get('edit/{id}',[admincontroller::class,'showdata']);
Route::post('edit',[admincontroller::class,'edit']);
