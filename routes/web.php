<?php

use Illuminate\Support\Facades\Route;
use App\Domains\Home\Http\Controller\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

require __DIR__.'/backend/backend.php';

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'IsAdmin'], function () {
    require __DIR__.'/backend/backend.php';
});

Route::group(['prefix' => '', 'as' => 'frontend.'], function () {
    require __DIR__.'/frontend/frontend.php';
});
