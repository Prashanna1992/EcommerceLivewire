<?php

use Illuminate\Support\Facades\Route;
use App\Domains\Product\Http\Controllers\Backend\ProductController;

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
