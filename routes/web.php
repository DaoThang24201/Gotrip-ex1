<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::controller(HomeController::class)->group(function() {
    /*Layout*/
    Route::get('/blog/layout', 'layout');

    /*Blogv1*/
    Route::get('/blogv1/home', 'blogv1');

    /*Blogv2*/
    Route::get('/blogv2/home', 'blogv2');

    /*Blogv3*/
    Route::get('/blogv3/home', 'blogv3');

});



