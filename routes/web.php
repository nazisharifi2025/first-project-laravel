<?php
use App\Http\Controllers\blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// ROUTE FOR TESTING PURPOSES
ROUTE::get('/test', function(){
    return "This is a test route.";
});
// route and with view
route::get("about", function(){
    $myName = "Ali Rezaei";
    $myLastName = "Karimi";
    return view("about")->with("name" , $myName)->with("lastName" , $myLastName);
});
// GROUPING ROUTING

Route::prefix("/admin")->group(function(){
    Route::get("/Dashbord" , function(){
    return "This is Admin details page";
});
route::get("/user" , function(){
    return "this is admin user page";
});
});
// DAYNAMIK ROUTING
Route::get('/student/{id}', function ($id) {
    return "the Student id is " . $id;
});
// Route::get('/user/{id}', function ($id) {
//     return "شناسه کاربر: " . $id;
// });
// 
Route::get('Servece/{name}', function($name){
    return view("Serveces", compact('name'));
});
// Basic Routing to view
Route::get('/home' , function(){
    return view('home');
});
route::get("aboutus", function(){
    return view("aboutus");
});
Route::get("contuct", function(){
    return view("Contuct");
});
Route::get("servec", function(){
    return view("Servec");
});
Route::get("blog", [blog::class,'index']);
Route::get("show", [blog::class,'show']);
Route::get("privet", [blog::class,'privetFunction']);
Route::get("protect", [blog::class,'Prot']);

Route::get("HomeSection" , function(){
    return view("PageHome");
});
Route::get("fetcher" , function(){
    return view("features");
});
Route::get("price" , function(){
    return view("Price");
});
Route::get("tamas" , function(){
    return view("Tamas");
});