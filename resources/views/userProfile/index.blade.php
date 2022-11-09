<x-layout>

    <!-- Custom styles for this template -->
    <link href="{{ url('/css/userProfileCreate.css') }}" rel="stylesheet"/>

    @foreach ($userProfile as $userProfile)

    <main class="col align-self-center py-3">
        <div class="body-userProfileCreate">
            <div class="container rounded bg-white mt-5 mb-5">
    
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
                            <p class="mb-4">Information</p> 
                            <div class="text-xl font-bold mb-4">
                                {{ $userProfile->information }}
                            </div>
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
                                    <input class="form-control"
                                           value="{{ $userProfile->first_name }}"
                                    />
                                    
                                </div>

                                <div class="col-md-6">

                                    <label class="labels"
                                            for="last_name" 
                                        >
                                            Last name
                                    </label>
                                    <input class="form-control" 
                                           value="{{ $userProfile->last_name }}"
                                    />

                                </div>

                            </div>

                            <div class="row mt-2">

                                <div class="col-md-6">

                                    <label class="labels"
                                            for="gender" 
                                        >
                                            Gender
                                    </label>

                                    <input class="form-control"
                                           value="{{ $userProfile->gender }}"
                                    />

                                </div>

                                <div class="col-md-6">

                                    <label class="labels"
                                            for="birthday" 
                                        >
                                            Birthday
                                    </label>

                                    <input class="form-control"
                                           value="{{ $userProfile->birthday }}"
                                    />

                                </div>

                            </div>

                            <div class="row mt-2">

                                <div class="col-md-6">

                                    <label class="labels"
                                            for="street" 
                                        >
                                            Street
                                    </label>

                                    <input class="form-control"
                                           value="{{ $userProfile->street }}"
                                    />

                                </div>

                                <div class="col-md-6">

                                    <label class="labels"
                                            for="streetnumber" 
                                        >
                                            Streetnumber
                                    </label>

                                    <input class="form-control"
                                           value="{{ $userProfile->streetnumber }}"
                                    />

                                </div>

                            </div>

                            <div class="row mt-2">

                                <div class="col-md-6">

                                    <label class="labels"
                                            for="postalcode" 
                                        >
                                            Postalcode
                                    </label>

                                    <input class="form-control"
                                           value="{{ $userProfile->postalcode }}"
                                    />
                                
                                </div>

                                <div class="col-md-6">

                                    <label class="labels"
                                            for="city" 
                                        >
                                            City
                                    </label>

                                    <input class="form-control"
                                           value="{{ $userProfile->city }}"
                                    />
                                
                                </div>

                            </div>

                            <div class="col-md-12">

                                <label class="labels"
                                        for="country" 
                                    >
                                        Country
                                </label>

                                <input class="form-control"
                                       value="{{ $userProfile->country }}"
                                />

                            </div>

                            <div class="col-md-12">

                                <label class="labels"
                                        for="phonenumber" 
                                    >
                                        Phonenumber
                                </label>

                                <input class="form-control"
                                       value="{{ $userProfile->phonenumber }}"
                                />

                            </div>
                    
                        </div>
                    </div>
                    <div class="col-md-4 border-right">

                        <div class="p-3 py-5">

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="text-right">
                                    Social Media
                                </span>
                            </div>
                            
                            <div class="col-md-12">
                                
                                <label class="labels"
                                        for="whatsappaddress"  
                                    >
                                        Whatsappaddress

                                </label>
                                <input class="form-control"
                                       value="{{ $userProfile->whatsappaddress }}"
                                />

                            </div>
        
                            <div class="col-md-12">
                                
                                <label class="labels"
                                        for="instagramaddress"  
                                    >
                                        Instagramaddress

                                </label>
                                <input class="form-control"
                                       value="{{ $userProfile->instagramaddress }}"
                                />

                            </div>

                            <div class="col-md-12">
                                
                                <label class="labels"
                                        for="facebookaddress"  
                                    >
                                        Facebookaddress

                                </label>
                                <input class="form-control"
                                       value="{{ $userProfile->facebookaddress }}"
                                />

                            </div>
                        
                        </div>
                    </div>
                    
                </div>
               
            </div>
        </div>
    </main>

    @endforeach

</x-layout>