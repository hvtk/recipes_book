<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    //Store Recipe Data
    public function store(Request $request) {
       $formFieldsRecipe = $request->validate([
        'recipe_title' => ['required', Rule::unique('recipes', 'recipe_title' )],
        'recipe_section' => 'required',
        'kitchenware' => 'required',
        'ingredients' => 'required',
        'recipe_the_steps_to_follow' => 'required',
        'recipe_estimated_time' => 'required',
        'recipe_shelf_life' => 'required',
        'recipe_commentary' => 'required'
       ]);

       return redirect('/recipes');
    }

    //Show Single Recipe
    public function show(Recipe $recipe) {
        return view('recipes.show', [
            'recipe' => $recipe
        ]); 
    }

}
