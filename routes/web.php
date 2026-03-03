<?php

    use Illuminate\Support\Facades\Route;
    //use App\Http\Controllers\RoutingController;

    Route::middleware('auth')->group(function () {
        Route::get('/', function () {
            return view('index');
        });
    });
   
