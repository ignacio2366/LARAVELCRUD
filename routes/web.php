<?php

use Illuminate\Support\Facades\Route;

// Import the folder form Page Controller
use App\Http\Controllers\PageController;

/* Route::get('/', function () {
    return view('page.Login');
}
); */

Route::get('/',[PageController::class, 'index']);

Route::get('Register',[PageController::class, 'Register']);

Route::get('nav',[PageController::class, 'nav']);

Route::get('table',[PageController::class, 'table']);

Route::get('Result',[PageController::class, 'Result']);


Route::get('Add',[PageController::class, 'addRegister']);
Route::get('Add/{id}',[PageController::class, 'getPostId']);

Route::get('Delete/{id}',[PageController::class, 'deletePostId']);

Route::get('/edit/{id}',[PageController::class, 'edit']);

Route::get('/update/{id}',[PageController::class, 'update']);



