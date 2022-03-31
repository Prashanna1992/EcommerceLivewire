<?php

use Illuminate\Support\Facades\Route;
use App\Domains\Product\Http\Controller\ProductController;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
*/

Route::group([

], function(){
    Route::resource('product', ProductController::class);
});
