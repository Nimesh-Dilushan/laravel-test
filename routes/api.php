<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Api\ProductController;

Route::get('/ping', function () {
    return response()->json(['message'=>'API is working!']);
});

//Routing to a controller
Route::get('/products', [ProductController::class, 'index']);

//A Protected Route using sanctum middleware





