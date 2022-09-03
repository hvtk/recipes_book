<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('recipe_title', 'like', '%' . request('search') . '%')
                  ->orWhere('recipe_commentary', 'like', '%' . request('search') . '%')  
                  ->orWhere('recipe_section', 'like', '%' . request('search') . '%');  
        }
    }
}
