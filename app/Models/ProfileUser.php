<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfileUser extends Model
{
    use HasFactory;

    protected $fillable = ['profile_user_id',
                           'profile_user_first_name',
                           'profile_user_last_name',
                           'profile_user_gender',
                           'profile_user_street',
                           'profile_user_streetnumber',
                           'profile_user_postalcode',
                           'profile_user_city',
                           'profile_user_country',
                           'profile_user_birthday',
                           'profile_user_information',
                           'profile_user_image'];

    // public function scopeFilter($query, array $filters) {
    //     if($filters['search'] ?? false) {
    //         $query->where('recipe_title', 'like', '%' . request('search') . '%')
    //               ->orWhere('recipe_commentary', 'like', '%' . request('search') . '%')  
    //               ->orWhere('recipe_section', 'like', '%' . request('search') . '%');  
    //     }
    // }

    //Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'profile_user_id');
    }
}
