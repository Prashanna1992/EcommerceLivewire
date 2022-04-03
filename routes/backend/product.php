<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Product Routes
|--------------------------------------------------------------------------
|
*/

Route::group([

], function(){
    Route::resource('product', ProductController::class);
});
