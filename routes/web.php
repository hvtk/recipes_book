<?php

use App\Models\Recipe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

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
    return view('welcome');
});

// //All Recipes
// Route::get('/recipes', function() {
//     return view('recipes', [
//         'recipes' => Recipe::all()
//     ]);
// });

// //Single Recipe
// Route::get('/recipes/{id}', function($id) {
//     return view('recipe', [
//         'recipe' => Recipe::find($id)
//     ]);
// });

// //Single Recipe with abort when id not found
// Route::get('/recipes/{id}', function($id) {
    // $recipe = Recipe::find($id);

    // if($recipe) {
    //     return view('recipe', [
    //         'recipe' => $recipe
    //     ]);
    // } else {
    //     abort('404');
// });


// //Single Recipe with model binding (abort when id not found is integrated)
// Route::get('/recipes/{recipe}', function(Recipe $recipe) {
//     return view('recipe', [
//         'recipe' => $recipe
//     ]);
// });

// Common Recource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

//All Recipes
Route::get('/recipes', [RecipeController::class, 'index']);

//Single Recipe
Route::get('/recipes/{recipe}', [RecipeController::class, 'show']);

