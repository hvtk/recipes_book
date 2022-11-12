<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RecipeController extends Controller {

    //Show All Recipes
    public function index() {
        return view('recipes.index', [
            'recipes' => Recipe::latest()
                      ->filter(request(['search']))
                      ->paginate(1)
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
        // 'recipe_section' => 'required',
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

       $A = "Baking";
       $B = "Roasting";
       $C = "Cooking";
       $D = "Frying";
       $E = "Warming up";

          
       switch($request->has('recipe_section')) {
            case($request = 'A'):
                $formFieldsRecipe['recipe_section'] = "hhBacking";
                break;
            case($request = 'B'):
                $formFieldsRecipe['recipe_section'] = "Roasting";
                break;
            case($request = $C):
                $formFieldsRecipe['recipe_section'] = "Cooking";
                break;   
            case($request = $D):
                $formFieldsRecipe['recipe_section'] = "Frying";
                break;
            case($request = $E):
                $formFieldsRecipe['recipe_section'] = "Warming up";   
                break;
            default: "Not an possible option!";
        }
            

        // if($request->has('recipe_section' -> $A)) {
        //     $formFieldsRecipe['recipe_section'] = $request = "Backing";
        //     }elseif('recipe_section' -> $B) {
        //         $formFieldsRecipe['recipe_section'] = "Roasting";
        //     }elseif('recipe_section' -> $C) {
        //         $formFieldsRecipe['recipe_section'] = "Cooking";
        //     }elseif('recipe_section' -> $D) {
        //         $formFieldsRecipe['recipe_section'] = "Frying";
        //     }elseif('recipe_section' -> $E) {
        //         $formFieldsRecipe['recipe_section'] = "Warming up";
        //     }else {
        //         'Not an possible option!'; 
        // }



       //To connect the recipe data on an user
       $formFieldsRecipe['user_id'] = auth()->id();

       Recipe::create($formFieldsRecipe);
       
       return redirect('/recipes')
              ->with('message', 'Recipe created succesfully!');
    }

    //Show Edit Form
    public function edit(Recipe $recipe) {

         // Make sure logged in user is owner
         if($recipe->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        return view('recipes.edit', ['recipe' => $recipe]);
    }

    //Update Recipe Data
    public function update(Request $request, Recipe $recipe) {

        // Make sure logged in user is owner
        if($recipe->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

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

         // Make sure logged in user is owner
         if($recipe->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

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
