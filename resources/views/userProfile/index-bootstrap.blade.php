<x-layout-bootstrap>

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
                                    <input type="text" 
                                            class="form-control" 
                                            name="last_name" 
                                            id="inputEditForm"
                                            placeholder="Last name"
                                            value="{{ $userProfile->last_name }}"
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
                                            id="inputEditForm"
                                            placeholder="Your gender" 
                                            value="{{ $userProfile->gender }}"
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
                                            id="inputEditForm"
                                            placeholder="Your birthday" 
                                            value="{{ $userProfile->birthday }}"
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
                                            id="inputEditForm"
                                            placeholder="Street" 
                                            value="{{ $userProfile->street }}"
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
                                            id="inputEditForm"
                                            placeholder="Streetnumber" 
                                            value="{{ $userProfile->streetnumber }}"
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
                                            id="inputEditForm"
                                            placeholder="Postalcode" 
                                            value="{{ $userProfile->postalcode }}"
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
                                            id="inputEditForm"
                                            placeholder="City" 
                                            value="{{ $userProfile->city }}"
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
                                        id="inputEditForm"
                                        placeholder="Country" 
                                        value="{{ $userProfile->country }}"
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
                                        id="inputEditForm"
                                        placeholder="Phonenumber" 
                                        value="{{ $userProfile->phonenumber }}"
                                />

                                @error('phonenumber')
                                    <p class="text-danger text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                        
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
                                <input type="text" 
                                        class="form-control"
                                        name="whatsappaddress"
                                        id="inputEditForm"
                                        placeholder="Whatsappaddress"
                                        value="{{ $userProfile->whatsappaddress }}"
                                />

                                @error('whatsappaddress')
                                    <p class="text-danger text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>
        
                            <div class="col-md-12">
                                
                                <label class="labels"
                                        for="instagramaddress"  
                                    >
                                        Instagramaddress

                                </label>
                                <input type="text" 
                                        class="form-control"
                                        name="instagramaddress"
                                        id="inputEditForm"
                                        placeholder="Instagramaddress"
                                        value="{{ $userProfile->instagramaddress }}"
                                />

                                @error('instagramaddress')
                                    <p class="text-danger text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <div class="col-md-12">
                                
                                <label class="labels"
                                        for="facebookaddress"  
                                    >
                                        Facebookaddress

                                </label>
                                <input type="text" 
                                        class="form-control"
                                        name="facebookaddress"
                                        id="inputEditForm"
                                        placeholder="Facebookaddress"
                                        value="{{ $userProfile->facebookaddress }}"
                                />

                                @error('facebookaddress')
                                    <p class="text-danger text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>
                        
                        </div>
                    </div>
                    
                </div>
               
            </div>
        </div>
    </main>

    @endforeach

</x-layout-bootstrap>