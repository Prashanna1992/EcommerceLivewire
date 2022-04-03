<?php

use Illuminate\Support\Facades\Route;
use App\Domains\Product\Http\Controllers\Backend\ProductController;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix' => '', 'as' => '', 'middleware' => ''], function () {
    require __DIR__.'/product.php';
});
