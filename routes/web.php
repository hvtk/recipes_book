<?php

use App\Models\UserProfile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserProfileController;

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
Route::get('/recipes', [RecipeController::class, 'index']);

//Show Create Form
Route::get('/recipes/create', [RecipeController::class, 'create'])
       ->middleware('auth');

//Store Recipe Data
Route::post('/recipes', [RecipeController::class, 'store'])
       ->middleware('auth');

//Show Edit Form
Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit'])
       ->middleware('auth'); 

//Update Recipe
Route::put('/recipes/{recipe}', [RecipeController::class, 'update'])
       ->middleware('auth'); 

//Delete Recipe
Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy'])
       ->middleware('auth'); 

//Manage Recipes
Route::get('/recipes/manage', [RecipeController::class, 'manage'])
       ->middleware('auth'); 

//Single Recipe
Route::get('/recipes/{recipe}', [RecipeController::class, 'show']);

// END ALL RECIPES ROUTES

// ALL AUTHENTICATE ROUTES

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])
       ->middleware('guest');

//Show Login Form (->name('login') is for the connection with middleware authenticate)
Route::get('/login', [UserController::class, 'login'])
       ->name('login')
       ->middleware('guest');

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);    

//Create New user
Route::post('/users', [UserController::class, 'store']);

//Log User Out
Route::post('/logout', [UserController::class, 'logout'])
       ->middleware('auth'); 

// END ALL AUTHENTICATE ROUTES

// ALL PROFILE USER ROUTES

//All Profiles
Route::get('/profile', [ProfileUserController::class, 'index'])
       ->middleware('auth'); 

//Show Profile Create Form
Route::get('/profile/create', [ProfileUserController::class, 'create'])
       ->middleware('auth');       
       
//Store Profile Data
Route::post('/profile', [ProfileUserController::class, 'store'])
       ->middleware('auth');

//Show Edit Profile Form
Route::get('/profile/{profile}/edit', [ProfileUserController::class, 'edit'])
       ->middleware('auth');

//Update Profile
Route::put('/profile/{profile}', [ProfileUserController::class, 'update'])
       ->middleware('auth');

//Delete Profile
Route::delete('/profile/{profileUser}', [ProfileUserController::class, 'destroy'])
       ->middleware('auth');

//Show Profile
Route::get('/profile/{profileUser}', [ProfileUserController::class, 'show'])
       ->middleware('auth');

//END ALL PROFILE USER ROUTES


// ALL USER PROFILE ROUTES

// All User Profiles
Route::get('/userprofiles', [UserProfileController::class, 'index']);

// Create User Profile (show user profile form)
Route::get('/userprofiles/create', [UserProfileController::class, 'create'])
       ->middleware('auth');

// Store User Profile Data
Route::post('/userprofiles', [UserProfileController::class, 'store'])
       ->middleware('auth');

// Show Edit User Profile Form
Route::get('/userprofiles/{userProfile}/edit', [UserProfileController::class, 'edit'])
       ->middleware('auth');

// Update User Profile
Route::put('/userprofiles/{userProfile}', [UserProfileController::class, 'update'])
       ->middleware('auth');

// Delete User Profile
Route::delete('/userprofiles/{userProfile}', [UserProfileController::class, 'destroy'])
       ->middleware('auth');

// Single User Profile
Route::get('/userprofiles/{userProfile}', [UserProfileController::class, 'show']);

// END ALL USER PROFILE ROUTES









