<?php

namespace App\Http\Controllers;

use App\Models\ProfileUsers;
use Illuminate\Http\Request;

class ProfileUsersController extends Controller
{
    
     //Show Create Form
      public function create() {
        return view('users.profile-create');
    }

    //Store ProfileUser Data
    public function store(Request $request) {
        // dd($request->all());
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
            'profile_users_information' => 'required'
        ]);

    //    if($request->hasFile('profile_users_image')) {
    //        $formFieldsProfileUsers['profile_users_image'] = $request
    //        ->file('profile_users_image')
    //        ->store('profileUsersImage', 'public');
    //    }

    //    //To connect the profile user data on an user
    //    $formFieldsProfileUsers['profile_users_id'] = auth()->id();

        ProfileUsers::create($formFieldsProfileUsers);

        return redirect('/users/profile-show')
               ->with('message', 'User profile created succesfully!');
    }

    // //Show Edit Form
    // public function edit(ProfileUsers $profileUsers) {

    //      // Make sure logged in user is owner
    //      if($profileUsers->profile_users_id != auth()->id()) {
    //         abort(403, 'Unauthorized Action');
    //     }
        
    //     return view('users.profile-edit', ['profileUsers' => $profileUsers]);
    //}

    // //Update ProfileUsers Data
    // public function update(Request $request, ProfileUsers $profileUsers) {

    //     // Make sure logged in user is owner
    //     if($profileUsers->profile_users_id != auth()->id()) {
    //         abort(403, 'Unauthorized Action');
    //     }

    //     $formFieldsProfileUsers = $request->validate([
    //      'profile_users_first_name' => 'required', 
    //      'profile_users_last_name' => 'required',
    //      'profile_users_gender' => 'required',
    //      'profile_users_street' => 'required',
    //      'profile_users_streetnumber' => 'required',
    //      'profile_users_postalcode' => 'required',
    //      'profile_users_city' => 'required',
    //      'profile_users_country' => 'required',
    //      'profile_users_birthday' => 'required',
    //      'profile_users_information' => 'required'
    //     ]);
 
    //     if($request->hasFile('profile_users_image')) {
    //         $formFieldsProfileUsers['profile_users_image'] = $request
    //         ->file('profile_users_image')
    //         ->store('profileUsersImage', 'public');
    //     }
 
    //     $profileUsers->update($formFieldsProfileUsers);
 
    //     return back()
    //            ->with('message', 'Profile user updated succesfully!');
    //  }

    // //Delete ProfileUsers
    // public function destroy(ProfileUsers $profileUsers) {

    //      // Make sure logged in user is owner
    //      if($profileUsers->profile_users_id != auth()->id()) {
    //         abort(403, 'Unauthorized Action');
    //     }

    //     $profileUsers->delete();
    //     return redirect('/recipes')
    //            ->with('message', 'Profile user deleted succesfully!');   
    // }

    // //Show Profile User
    // public function show(ProfileUsers $profileUsers) {
    //     return view('users.profile-show', [
    //         'profileUsers' => $profileUsers
    //     ]); 
    // }
}
