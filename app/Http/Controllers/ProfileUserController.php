<?php

namespace App\Http\Controllers;

use App\Models\ProfileUser;
use Illuminate\Http\Request;

class ProfileUserController extends Controller {

    //Show Create Form
    public function create() {
        return view('users.profile-create');
    }

    //Store ProfileUser Data
    public function store(Request $request) {
       $formFieldsProfileUser = $request->validate([
        'profile_user_first_name' => 'required', 
        'profile_user_last_name' => 'required',
        'profile_user_gender' => 'required',
        'profile_user_street' => 'required',
        'profile_user_streetnumber' => 'required',
        'profile_user_postalcode' => 'required',
        'profile_user_city' => 'required',
        'profile_user_country' => 'required',
        'profile_user_birthday' => 'required',
        'profile_user_information' => 'required',
       ]);

       if($request->hasFile('profile_user_image')) {
           $formFieldsProfileUser['profile_user_image'] = $request
           ->file('profile_user_image')
           ->store('profileUserImage', 'public');
       }

       //To connect the profile user data on an user
       $formFieldsProfileUser['profile_user_id'] = auth()->id();

       ProfileUser::create($formFieldsProfileUser);

       return redirect('/users/profile-show')
              ->with('message', 'User profile created succesfully!');
    }

    //Show Edit Form
    public function edit(ProfileUser $profileUser) {

         // Make sure logged in user is owner
         if($profileUser->profile_user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        return view('users.profile-edit', ['profileUser' => $profileUser]);
    }

    //Update Recipe Data
    public function update(Request $request, ProfileUser $profileUser) {

        // Make sure logged in user is owner
        if($profileUser->profile_user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFieldsProfileUser = $request->validate([
         'profile_user_first_name' => 'required', 
         'profile_user_last_name' => 'required',
         'profile_user_gender' => 'required',
         'profile_user_street' => 'required',
         'profile_user_streetnumber' => 'required',
         'profile_user_postalcode' => 'required',
         'profile_user_city' => 'required',
         'profile_user_country' => 'required',
         'profile_user_birthday' => 'required',
         'profile_user_information' => 'required',
        ]);
 
        if($request->hasFile('profile_user_image')) {
            $formFieldsProfileUser['profile_user_image'] = $request
            ->file('profile_user_image')
            ->store('profileUserImage', 'public');
        }
 
        $recipe->update($formFieldsProfileUser);
 
        return back()
               ->with('message', 'Profile user updated succesfully!');
     }

    //Delete Recipe
    public function destroy(ProfileUser $profileUser) {

         // Make sure logged in user is owner
         if($profileUser->profile_user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $profileUser->delete();
        return redirect('/recipes')
               ->with('message', 'Profile user deleted succesfully!');   
    }

    //Show Profile User
    public function show(ProfileUser $profileUser) {
        return view('users.profile-show', [
            'profileUser' => $profileUser
        ]); 
    }
}
