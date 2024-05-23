<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/testTemplate',function (){
    return view('panel.layout.app');
});
