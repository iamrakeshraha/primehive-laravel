<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

it is a dupicate file as web.php, we should register into provider for this routes.
|
*/



Route::prefix('admin')->group(function () {
    Route::get('/',[AdminController::class, 'index' ])->Name('admin.login');

    Route::fallback(function(){
        return view('admin.auth.login');
    });
});



