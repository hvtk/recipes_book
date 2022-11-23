<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['user_id',
                           'recipe_title',
                           'recipe_section',
                           'kitchenware',
                           'ingredients',
                           'recipe_the_steps_to_follow',
                           'recipe_image_end_result',
                           'recipe_estimated_time',
                           'recipe_shelf_life',
                           'recipe_commentary'];

    // Tells laravel to fetch text values and set them as arrays
    protected $casts = [
        'ingredients' => 'array',
        'kitchenware' => 'array'
    ];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('recipe_title', 'like', '%' . request('search') . '%')
                  ->orWhere('recipe_commentary', 'like', '%' . request('search') . '%')  
                  ->orWhere('recipe_section', 'like', '%' . request('search') . '%');  
        }
    }

    //Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
