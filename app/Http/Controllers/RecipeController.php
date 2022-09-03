<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //Show All Recipes
    public function index() {
        return view('recipes.index', [
            'recipes' => Recipe::latest()
                      ->filter(request(['search']))
                      ->get()
        ]);
    }

    //Show Create Form
    public function create() {
        return view('recipes.create');
    }

    //Show Single Recipe
    public function show(Recipe $recipe) {
        return view('recipes.show', [
            'recipe' => $recipe
        ]); 
    }

}
