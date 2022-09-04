<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['recipe_title',
                           'recipe_section',
                           'kitchenware',
                           'ingredients',
                           'recipe_the_steps_to_follow',
                           'recipe_image_end_result',
                           'recipe_estimated_time',
                           'recipe_shelf_life',
                           'recipe_commentary'];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('recipe_title', 'like', '%' . request('search') . '%')
                  ->orWhere('recipe_commentary', 'like', '%' . request('search') . '%')  
                  ->orWhere('recipe_section', 'like', '%' . request('search') . '%');  
        }
    }
}
