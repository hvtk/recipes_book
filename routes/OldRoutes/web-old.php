// ALL PROFILE USER ROUTES

//All Profiles
Route::get('/profile', [ProfileUserController::class, 'index'])
       ->middleware('auth'); 

//Show Profile Create Form
Route::get('/profile/create', [ProfileUserController::class, 'create'])
       ->middleware('auth');       
       
//Store Profile Data
Route::post('/profile', [ProfileUserController::class, 'store'])
       ->middleware('auth');

//Show Edit Profile Form
Route::get('/profile/{profile}/edit', [ProfileUserController::class, 'edit'])
       ->middleware('auth');

//Update Profile
Route::put('/profile/{profile}', [ProfileUserController::class, 'update'])
       ->middleware('auth');

//Delete Profile
Route::delete('/profile/{profileUser}', [ProfileUserController::class, 'destroy'])
       ->middleware('auth');

//Show Profile
Route::get('/profile/{profileUser}', [ProfileUserController::class, 'show'])
       ->middleware('auth');
//END ALL PROFILE USER ROUTES
