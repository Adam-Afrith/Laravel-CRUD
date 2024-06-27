<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('basicView', [BasicController::class, 'index']);
Route::get('basicCars',[BasicController::class,'baseCars']);

//CRUD - Student Application - starts
Route::resource('students', StudentController::class);
//CRUD - Student Application - ends


// Add this route to render the category view
// Route::get('category', function () {
//     return view('category/category');    //used for accessing Views(category/category)
// });


// Add this route to use the CategoryController
// Route::get('category', [CategoryController::class, 'show']); //used for accessing CategoryController functions