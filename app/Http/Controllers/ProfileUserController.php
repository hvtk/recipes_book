<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileUserController extends Controller {

    //Show ProfileUser Form
    public function create() {
        return view('profile.create');
    }

    //Store ProfileUser Data
    public function store(Request $request) {
       $formFieldsProfileUser = $request->validate([
        'profile_user_first_name' => 'required', 
        'profile_user_last_name' => 'required',
        'profile_user_gender' => 'required',
        'profile_user_street' => 'required',
        'profile_user_streetnumber' => 'required',
        'profile_user_postalcode' => 'required',
        'profile_user_city' => 'required',
        'profile_user_country' => 'required',
        'profile_user_birthday' => 'required',
       ]);

       if($request->hasFile('profile_user_image')) {
           $formFieldsProfileUser['profile_user_image'] = $request
           ->file('profile_user_image')
           ->store('profileUserImage', 'public');
       }

       //To connect the profile user data on an user
       $formFieldsProfileUser['profile_user_id'] = auth()->id();

       ProfileUser::create($formFieldsProfileUser);

       return redirect('/users/profile')
              ->with('message', 'User profile created succesfully!');
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
