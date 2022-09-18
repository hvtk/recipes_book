<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileUsers extends Model
{
    use HasFactory;

    protected $fillable = ['profile_users_id',
    'profile_users_first_name',
    'profile_users_last_name',
    'profile_users_gender',
    'profile_users_street',
    'profile_users_streetnumber',
    'profile_users_postalcode',
    'profile_users_city',
    'profile_users_country',
    'profile_users_birthday',
    'profile_users_information',
    'profile_users_image'];

// public function scopeFilter($query, array $filters) {
//     if($filters['search'] ?? false) {
//         $query->where('recipe_title', 'like', '%' . request('search') . '%')
//               ->orWhere('recipe_commentary', 'like', '%' . request('search') . '%')  
//               ->orWhere('recipe_section', 'like', '%' . request('search') . '%');  
//     }
// }

    //Relationship To User
    public function user() {
    return $this->belongsTo(User::class, 'profile_users_id');
    }
}
