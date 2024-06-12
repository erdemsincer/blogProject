<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/index",function (){
    return view("adminPanel.layouts.app");
});

Route::get("/admin",function (){
    return view("adminPanel.dashboard");
});
