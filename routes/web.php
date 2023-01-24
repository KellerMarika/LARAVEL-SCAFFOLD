<?php

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;


/* Route::get('/', function () {
return view('welcome');
});
*/

Route::get('/', [FirstController::class, "index"])->name("index");