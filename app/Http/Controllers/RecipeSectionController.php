<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecipeSection;

class RecipeSectionController extends Controller
{
    //To Insert The Raw Data
    public function rawData(Request $request) {
        // $recipeSection = new RecipeSection;
        // $recipeSection->recipe_section = 'Baking';
        // $recipeSection->save();
        $formFieldsRecipeSection = $request->validate([
            'recipe_section' => 'Baking'
        ]);

        RecipeSection::create($formFieldsRecipeSection);
    }
}
