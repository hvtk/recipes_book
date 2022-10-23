<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecipeSection;
use Illuminate\Support\Facades\DB;

class RecipeSectionController extends Controller
{
    // Create Raw Recipe Sections
    public function rawData() {
        DB::table('recipe_sections')->insert ([
            ['recipe_section' => 'Baking'],
            ['recipe_section' => 'Roasting'],
            ['recipe_section' => 'Cooking'],
            ['recipe_section' => 'Frying'],
            ['recipe_section' => 'Warming up']
        ]); 
    }
   


    // Show Create Form
    public function create() {
        return view('recipeSections.create');
    }  
    
    // Store Recipe Section Data
    public function store(Request $request) {
        $formfieldsRecipeSection = $request->validate([
            'recipe_section'
        ]);

        RecipeSection::create($formfieldsRecipeSection);

        DB::table('recipe_sections')->insert ([
            ['recipe_section' => 'Baking'],
            ['recipe_section' => 'Roasting'],
            ['recipe_section' => 'Cooking'],
            ['recipe_section' => 'Frying'],
            ['recipe_section' => 'Warming up']
        ]); 

        return redirect('/recipesections');
    }
}
