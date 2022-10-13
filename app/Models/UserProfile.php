<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
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
}
