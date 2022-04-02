<?php

use App\Domains\Home\Http\Controller\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/products',[HomeController::class,'products']);
