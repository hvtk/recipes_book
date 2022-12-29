<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_profiles_id',
        'first_name',
        'last_name',
        'gender',
        'street',
        'streetnumber',
        'postalcode',
        'city',
        'country',
        'birthday',
        'information',
        'image',
        'phonenumber',
        'whatsappaddress',
        'instagramaddress',
        'facebookaddress'
    ];

    //Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_profiles_id');
    }
}
