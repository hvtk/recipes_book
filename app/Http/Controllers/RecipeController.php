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
                      ->paginate(2)
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

       if($request->hasFile('recipe_image_end_result')) {
           $formFieldsRecipe['recipe_image_end_result'] = $request
           ->file('recipe_image_end_result')
           ->store('recipeImages', 'public');
       }

       //To connect the recipe data on an user
       $formFieldsRecipe['user_id'] = auth()->id();

       Recipe::create($formFieldsRecipe);

       return redirect('/recipes')
              ->with('message', 'Recipe created succesfully!');
    }

    //Show Edit Form
    public function edit(Recipe $recipe) {
        return view('recipes.edit', ['recipe' => $recipe]);
    }

    //Update Recipe Data
    public function update(Request $request, Recipe $recipe) {
        $formFieldsRecipe = $request->validate([
         'recipe_title' => 'required',
         'recipe_section' => 'required',
         'kitchenware' => 'required',
         'ingredients' => 'required',
         'recipe_the_steps_to_follow' => 'required',
         'recipe_estimated_time' => 'required',
         'recipe_shelf_life' => 'required',
         'recipe_commentary' => 'required'
        ]);
 
        if($request->hasFile('recipe_image_end_result')) {
            $formFieldsRecipe['recipe_image_end_result'] = $request
            ->file('recipe_image_end_result')
            ->store('recipeImages', 'public');
        }
 
        $recipe->update($formFieldsRecipe);
 
        return back()
               ->with('message', 'Recipe updated succesfully!');
     }

    //Delete Recipe
    public function destroy(Recipe $recipe) {
        $recipe->delete();
        return redirect('/recipes')
               ->with('message', 'Recipe deleted succesfully!');   
    }

    // Manage Recipes
    public function manage() {
        return view('recipes.manage', ['recipes' => auth()->user()->recipes()->get()]);
    }

    //Show Single Recipe
    public function show(Recipe $recipe) {
        return view('recipes.show', [
            'recipe' => $recipe
        ]); 
    }

}
