<?php

namespace App\Http\Controllers;

use App\Models\ProfileUser;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    //Show ProfileUser
    public function index() {
        return view('profile.profile-show');
    }


    //Show Create Form
    public function create() {
        return view('profile.profile-create');
    }

    //Store ProfileUser Data
    public function store(Request $request) {
        $formFieldsProfileUsers = $request->validate([
            'profile_users_first_name' => 'required', 
            'profile_users_last_name' => 'required',
            'profile_users_gender' => 'required',
            'profile_users_street' => 'required',
            'profile_users_streetnumber' => 'required',
            'profile_users_postalcode' => 'required',
            'profile_users_city' => 'required',
            'profile_users_country' => 'required',
            'profile_users_birthday' => 'required',
            'profile_users_information' => 'required',
            'profile_users_phonenumber',
            'profile_users_whatsappaddress',
            'profile_users_instagramaddress',
            'profile_users_facebookaddress'
        ]);

        if($request->hasFile('profile_users_image')) {
           $formFieldsProfileUsers['profile_users_image'] = $request
           ->file('profile_users_image')
           ->store('profileUsersImage', 'public');
        }

       //To connect the profile user data on an user
        $formFieldsProfileUsers['profile_users_id'] = auth()->id();

        ProfileUser::create($formFieldsProfileUsers);

        return redirect('/profile')
               ->with('message', 'User profile created succesfully!');
    }

    // //Show Edit Form
     public function edit(ProfileUser $profileUser) {

          // Make sure logged in user is owner
          if($profileUser->profile_users_id != auth()->id()) {
             abort(403, 'Unauthorized Action');
         }
        
        return view('profile.profile-edit', ['profileUser' => $profileUser]);
    }

    //Update ProfileUsers Data
    public function update(Request $request, ProfileUser $profileUser) {

        // Make sure logged in user is owner
        if($profileUser->profile_users_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFieldsProfileUsers = $request->validate([
         'profile_users_first_name' => 'required', 
         'profile_users_last_name' => 'required',
         'profile_users_gender' => 'required',
         'profile_users_street' => 'required',
         'profile_users_streetnumber' => 'required',
         'profile_users_postalcode' => 'required',
         'profile_users_city' => 'required',
         'profile_users_country' => 'required',
         'profile_users_birthday' => 'required',
         'profile_users_information' => 'required',
         'profile_users_phonenumber',
         'profile_users_whatsappaddress',
         'profile_users_instagramaddress',
         'profile_users_facebookaddress'
        ]);
 
        if($request->hasFile('profile_users_image')) {
            $formFieldsProfileUsers['profile_users_image'] = $request
            ->file('profile_users_image')
            ->store('profileUsersImage', 'public');
        }
 
        $profileUser->update($formFieldsProfileUsers);
 
        return back()
               ->with('message', 'Profile user updated succesfully!');
    }

    //Delete ProfileUsers
    public function destroy(ProfileUser $profileUser) {

         // Make sure logged in user is owner
         if($profileUser->profile_users_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $profileUser->delete();
        return redirect('/recipes')
               ->with('message', 'Profile user deleted succesfully!');   
    }

    //Show Profile User
    public function show(ProfileUser $profileUser) {
        return view('profile.profile-show', [
         'profileUser' => $profileUser
        ]); 
        
    }
}
