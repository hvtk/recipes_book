<?php

use App\Models\UserProfile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// ALLE USERPROFILE ROUTES

Route::get('/userprofiles', function () {
       return view('userProfile.userProfiles', [
              'heading' => 'overview',
              'userprofiles' => [
                     [
                            'id' => 1,
                            'firstname' => 'Henk',
                            'birthday' => '07-03-1968'
                     ],
                     [
                            'id' => 2,
                            'firstname' => 'Diederik',
                            'birthday' => '07-03-1968'
                     ],
              ]
       ]);
});

Route::get('/userprofiles/{id}', function($id) {
       return view('userProfile.userProfile', [
              'userprofile' => UserProfile::find($id) //userProfile is the value from UserProfile model
       ]);
});








