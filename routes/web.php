<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use Nwidart\Modules\Facades\Module;

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

Route::get('/', function () {

    //$module=Module::allEnabled();
    //$moduleall=Module::allDisabled();
    //dd($moduleall);
    return view('welcome');
});
Route::get('/disable/{name}',[IndexController::class, 'disableModule']);
Route::get('/enable/{name}',[IndexController::class, 'enableModule']);
