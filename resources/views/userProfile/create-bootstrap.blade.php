<x-layout-bootstrap>

    <!-- Custom styles for this template -->
    <link href="{{ url('/css/userProfileCreate.css') }}" rel="stylesheet"/>

    <main class="col align-self-center py-3">
        <div class="body-userProfileCreate">
            <div class="container rounded bg-white mt-5 mb-5">
               <form method="POST"
                     action="/userprofiles"  
                     enctype="multipart/form-data"  
                    >  
                    @csrf
                    <div class="row">

                        <div class="col-md-3 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                <span class="font-weight-bold">
                                    {{ auth()->user()->name }} 
                                </span>
                                <span class="text-black-50">
                                    {{ auth()->user()->email }} 
                                </span>
                            </div>
                        </div>

                        <div class="col-md-5 border-right">

                            <div class="p-3 py-5">

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">
                                            Profile Settings
                                    </h4>
                                </div>

                                <div class="row mt-2">

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="first_name"
                                            >
                                                First name
                                        </label>
                                        <input type="text" 
                                               class="form-control" 
                                               name="first_name" 
                                               id="inputForm"
                                               placeholder="First name" 
                                               value="{{ old('first_name') }}"
                                        />

                                        @error('first_name')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="last_name" 
                                            >
                                                Last name
                                        </label>
                                        <input type="text" 
                                               class="form-control" 
                                               name="last_name" 
                                               id="inputForm"
                                               placeholder="Last name"
                                               value="{{ old('last_name') }}"
                                        />

                                        @error('last_name')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>

                                </div>

                                <div class="row mt-2">

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="gender" 
                                            >
                                                Gender
                                        </label>

                                        <input type="text" 
                                               class="form-control"
                                               name="gender"
                                               id="inputForm"
                                               placeholder="Your gender" 
                                               value="{{ old('gender') }}"
                                        />

                                        @error('gender')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    
                                    </div>

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="birthday" 
                                            >
                                                Birthday
                                        </label>

                                        <input type="text" 
                                               class="form-control"
                                               name="birthday"
                                               id="inputForm"
                                               placeholder="Your birthday" 
                                               value="{{ old('birthday') }}"
                                        />

                                        @error('birthday')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    
                                    </div>

                                </div>

                                <div class="row mt-2">

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="street" 
                                            >
                                                Street
                                        </label>

                                        <input type="text" 
                                               class="form-control"
                                               name="street"
                                               id="inputForm"
                                               placeholder="Street" 
                                               value="{{ old('street') }}"
                                        />

                                        @error('street')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    
                                    </div>

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="streetnumber" 
                                            >
                                                Streetnumber
                                        </label>

                                        <input type="text" 
                                               class="form-control"
                                               name="streetnumber"
                                               id="inputForm"
                                               placeholder="Streetnumber" 
                                               value="{{ old('streetnumber') }}"
                                        />

                                        @error('streetnumber')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    
                                    </div>

                                </div>

                                <div class="row mt-2">

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="postalcode" 
                                            >
                                                Postalcode
                                        </label>

                                        <input type="text" 
                                               class="form-control"
                                               name="postalcode"
                                               id="inputForm"
                                               placeholder="Postalcode" 
                                               value="{{ old('postalcode') }}"
                                        />

                                        @error('postalcode')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    
                                    </div>

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="city" 
                                            >
                                                City
                                        </label>

                                        <input type="text" 
                                               class="form-control"
                                               name="city"
                                               id="inputForm"
                                               placeholder="City" 
                                               value="{{ old('city') }}"
                                        />

                                        @error('city')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    
                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <label class="labels"
                                           for="country" 
                                        >
                                            Country
                                    </label>

                                    <input type="text" 
                                           class="form-control"
                                           name="country"
                                           id="inputForm"
                                           placeholder="Country" 
                                           value="{{ old('country') }}"
                                    />

                                    @error('country')
                                        <p class="text-danger text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                         
                                </div>

                                <div class="col-md-12">

                                    <label class="labels"
                                           for="phonenumber" 
                                        >
                                            Phonenumber
                                    </label>

                                    <input type="text" 
                                           class="form-control"
                                           name="phonenumber"
                                           id="inputForm"
                                           placeholder="Phonenumber" 
                                           value="{{ old('phonenumber') }}"
                                    />

                                    @error('phonenumber')
                                        <p class="text-danger text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                         
                                </div>
                        
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                    </div>
                   
               </form>
            </div>
        </div>
    </main>

</x-layout-bootstrap>
