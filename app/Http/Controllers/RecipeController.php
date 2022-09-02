<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //Show All Recipes
    public function index() {
        return view('recipes', [
            'recipes' => Recipe::all()
        ]);
    }

    //Show Single Recipe
    public function show(Recipe $recipe) {
        return view('recipe', [
            'recipe' => $recipe
        ]); 
    }
}
