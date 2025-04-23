<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $myname = "noor";
    $mylastname = "shallouf";

    return view('home' , compact("myname", "mylastname"));
});
Route::get('/loop', function () {
   $cars = ["mercedes" , "bmw" , "audi"];
   return view("loop" , compact("cars") );
});