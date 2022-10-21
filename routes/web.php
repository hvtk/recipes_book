<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\RecipeSectionController;

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

// ALL RECIPES ROUTES

//All Recipes
Route::get('/recipes', [RecipeController::class, 'index'])
       ->middleware('preventBackHistory');

//Show Create Form
Route::get('/recipes/create', [RecipeController::class, 'create'])
       ->middleware('auth')
       ->middleware('preventBackHistory');

//Store Recipe Data
Route::post('/recipes', [RecipeController::class, 'store'])
       ->middleware('auth');

//Show Edit Form
Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit'])
       ->middleware('auth')
       ->middleware('preventBackHistory');

//Update Recipe
Route::put('/recipes/{recipe}', [RecipeController::class, 'update'])
       ->middleware('auth')
       ->middleware('preventBackHistory');

//Delete Recipe
Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy'])
       ->middleware('auth')
       ->middleware('preventBackHistory');

//Manage Recipes
Route::get('/recipes/manage', [RecipeController::class, 'manage'])
       ->middleware('auth')
       ->middleware('preventBackHistory');

//Single Recipe
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])
       ->middleware('preventBackHistory');

// END ALL RECIPES ROUTES

// ALL AUTHENTICATE ROUTES

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])
       ->middleware('guest')
       ->middleware('preventBackHistory');

//Show Login Form (->name('login') is for the connection with middleware authenticate)
Route::get('/login', [UserController::class, 'login'])
       ->name('login')
       ->middleware('guest')
       ->middleware('preventBackHistory');

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);    

//Create New user
Route::post('/users', [UserController::class, 'store']);

//Log User Out
Route::post('/logout', [UserController::class, 'logout'])
       ->middleware('auth')
       ->middleware('preventBackHistory');

// END ALL AUTHENTICATE ROUTES

// ALL USER PROFILE ROUTES

// All User Profiles
Route::get('/userprofiles', [UserProfileController::class, 'index'])
       ->middleware('preventBackHistory');

// Create User Profile (show user profile form)
Route::get('/userprofiles/create', [UserProfileController::class, 'create'])
       ->middleware('auth')
       ->middleware('preventBackHistory');

// Store User Profile Data
Route::post('/userprofiles', [UserProfileController::class, 'store'])
       ->middleware('auth');

// Show Edit User Profile Form
Route::get('/userprofiles/{userProfile}/edit', [UserProfileController::class, 'edit'])
       ->middleware('auth')
       ->middleware('preventBackHistory');

// Update User Profile
Route::put('/userprofiles/{userProfile}', [UserProfileController::class, 'update'])
       ->middleware('auth')
       ->middleware('preventBackHistory');

// Delete User Profile
Route::delete('/userprofiles/{userProfile}', [UserProfileController::class, 'destroy'])
       ->middleware('auth')
       ->middleware('preventBackHistory');

//Manage User Profiles
Route::get('/userprofiles/manage', [UserProfileController::class, 'manage'])
       ->middleware('auth')
       ->middleware('preventBackHistory');

// Single User Profile
Route::get('/userprofiles/{userProfile}', [UserProfileController::class, 'show'])
       ->middleware('preventBackHistory');

// END ALL USER PROFILE ROUTES

// ALL RECIPE SECTION ROUTES

// Show Raw Data
route::get('/recipesections', [RecipeSectionController::class, 'rawData']);









