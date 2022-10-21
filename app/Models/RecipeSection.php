<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_sections_id',
        'recipe_section'
    ];

    //Relationship To Recipe
    public function recipe() {
        return $this->belongsTo(Recipe::class, 'recipe_sections_id');
    }
}
