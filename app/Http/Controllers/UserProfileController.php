<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //Show All User Profiles
    public function index() {
        return view('userProfile.index', [
            'userProfile' => UserProfile::all()
                          
        ]);
    }

    //Show Single User Profile
    public function show(UserProfile $userProfile) {
        return view('userProfile.show', [
         'userProfile' => $userProfile
        ]); 
    }

    //Show Create User Profile Form
    public function create() {
        return view('userProfile.create');
    }

    //Store User Profile Data
    public function store(Request $request) {
        $formFieldsUserProfile = $request->validate([
            'first_name' => 'required', 
            'last_name' => 'required',
            'gender' => 'required',
            'street' => 'required',
            'streetnumber' => 'required',
            'postalcode' => 'required',
            'city' => 'required',
            'country' => 'required',
            'birthday' => 'required',
            'information' => 'required',
            'phonenumber',
            'whatsappaddress',
            'instagramaddress',
            'facebookaddress'
        ]);

        if($request->hasFile('image')) {
           $formFieldsUserProfile['image'] = $request
           ->file('image')
           ->store('userProfileImage', 'public');
        }

    //    //To connect the profile user data on an user
    //     $formFieldsProfileUsers['profile_users_id'] = auth()->id();

        UserProfile::create($formFieldsUserProfile);

        return redirect('/userprofiles')
               ->with('message', 'User profile created succesfully!');
    }

}
