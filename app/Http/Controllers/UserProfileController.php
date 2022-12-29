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
            'phonenumber' => 'required',
            'whatsappaddress' => 'required',
            'instagramaddress' => 'required',
            'facebookaddress' => 'required'
        ]);

        if($request->hasFile('image')) {
           $formFieldsUserProfile['image'] = $request
           ->file('image')
           ->store('userProfileImage', 'public');
        }

       //To connect the user profile data on an user
        $formFieldsUserProfile['user_profiles_id'] = auth()->id();

        UserProfile::create($formFieldsUserProfile);

        return redirect('/userprofiles')
               ->with('message', 'User profile created succesfully!');
    }

    // Show Edit User Profile Form
    public function edit(UserProfile $userProfile) {
        return view('userProfile.edit', ['userProfile' => $userProfile]);
    }

    //Update User Profile
    public function update(Request $request, UserProfile $userProfile) {

        // Make sure logged in user is owner
        if($userProfile->user_profiles_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
            
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
         'phonenumber' => 'required',
         'whatsappaddress' => 'required',
         'instagramaddress' => 'required',
         'facebookaddress' => 'required'
        ]);
 
        if($request->hasFile('image')) {
            $formFieldsUserProfile['image'] = $request
            ->file('image')
            ->store('userProfileImage', 'public');
        }
 
        $userProfile->update($formFieldsUserProfile);
 
        return redirect('/userprofiles')
               ->with('message', 'User profile updated succesfully!');
    }

    //Delete Recipe
    public function destroy(UserProfile $userProfile) {

        // Make sure logged in user is owner
        if($userProfile->user_profiles_id != auth()->id()) {
        abort(403, 'Unauthorized Action');
        }

        $userProfile->delete();
        return redirect('/userprofiles')
            ->with('message', 'User profile deleted succesfully!');   
    }

    // Manage User Profiles
    public function manage() {
        return view('userProfile.manage', ['userProfile' => auth()->user()->userProfile()->get()]);
    }
}
