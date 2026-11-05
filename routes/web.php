<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello"; 
}); 

Route::get('/goodbye', function(){
    return "Goodbye"; 
});

Route::redirect('/hello', '/goodbye'); 

Route::get('/accept/{name}', function($name){
    return $name; 
}); 