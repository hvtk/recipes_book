<x-layout>

    {{-- Compiled style from Tailwind example profile --}}
    <link href="{{ url('/css/userProfile.css') }}" rel="stylesheet">
    
    <div class="bg-gray-100">

        <div class="container mx-auto my-5 p-5">
            <div class="md:flex no-wrap md:-mx-2 ">
            
                <form method="POST"
                      action="/userprofiles/{{ $userProfile->id }}"  
                      enctype="multipart/form-data"
                    >
                    @csrf
                    @method('PUT')

                    <!-- Left Side -->
                    <div class="w-full md:w-3/12 md:mx-2">
                        <!-- Profile Card -->
                        <div class="bg-white p-3 border-t-4 border-green-400">
                            <div class="image overflow-hidden h-auto w-full mx-auto">

                                <label for="image"
                                       class="ml-4 text-md tracking-wide font-semibold w-50"
                                    >
                                            Image User
                                </label>
                                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                       type="file" 
                                       name="image" 
                                       id=""
                                />
                                <img class="hidden w-48 mr-6 md:block"
                                src="{{$userProfile->image ? asset('storage/' . $userProfile->image) : asset('images/no-image.png')}}"
                                alt=""
                                /> 

                                @error('image')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            
                            </div>
                            <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">
                                 {{ auth()->user()->name }}
                            </h1>
                            <div class="text-gray-600 font-lg text-semibold leading-6">
                                <label for="information"
                                       class="ml-4 text-md tracking-wide font-semibold w-50"
                                    >
                                            Information about the user
                                </label>
                                <textarea class="text-sm text-gray-500 hover:text-gray-600 leading-6"
                                          type="text" 
                                          name="information" 
                                          id=""
                                          rows="10" 
                                          placeholder="Information about the user" 
                                        >
                                        {{ $userProfile->information }}
                                </textarea>  
                                
                                @error('information')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
            
                            </div>
                            
                        </div>
                        <!-- End of profile card -->
                        
                    </div>
                    <!-- Right Side -->
                    <div class="w-full md:w-9/12 mx-2 h-64">
                        
                        <!-- About Section -->
                        <div class="bg-white p-3 shadow-sm rounded-sm">
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">About</span>
                            </div>
                            <div class="text-gray-700">
                                <div class="grid md:grid-cols-2 text-sm">

                                    
                                    <div class="grid grid-cols-2">
                                        
                                        <label for="first_name"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                First name

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="first_name" 
                                               id="" 
                                               placeholder="First name" 
                                               value="{{ $userProfile->first_name }}"
                                        /> 
                                        
                                        @error('first_name')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="last_name"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Last name

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="last_name" 
                                               id="" 
                                               placeholder="Last name" 
                                               value="{{ $userProfile->last_name }}"
                                        /> 
                                        
                                        @error('last_name')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="gender"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Gender

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="gender" 
                                               id="" 
                                               placeholder="Gender" 
                                               value="{{ $userProfile->gender }}"
                                        /> 
                                        
                                        @error('gender')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="street"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Street

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="street" 
                                               id="" 
                                               placeholder="Street" 
                                               value="{{ $userProfile->street }}"
                                        /> 
                                        
                                        @error('street')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="streetnumber"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Streetnumber

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="streetnumber" 
                                               id="" 
                                               placeholder="Streetnumber" 
                                               value="{{ $userProfile->streetnumber }}"
                                        /> 
                                        
                                        @error('streetnumber')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="postalcode"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Postalcode

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="postalcode" 
                                               id="" 
                                               placeholder="Postalcode" 
                                               value="{{ $userProfile->postalcode }}"
                                        /> 
                                        
                                        @error('postalcode')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="city"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                City

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="city" 
                                               id="" 
                                               placeholder="City" 
                                               value="{{ $userProfile->city }}"
                                        /> 
                                        
                                        @error('city')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="country"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Country

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="country" 
                                               id="" 
                                               placeholder="Country" 
                                               value="{{ $userProfile->country }}"
                                        /> 
                                        
                                        @error('country')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="birthday"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Birthday

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="birthday" 
                                               id="" 
                                               placeholder="Birthday" 
                                               value="{{ $userProfile->birthday }}"
                                        /> 
                                        
                                        @error('birthday')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="phonenumber"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Phonenumber

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="phonenumber" 
                                               id="" 
                                               placeholder="Phonenumber" 
                                               value="{{ $userProfile->phonenumber }}"
                                        /> 
                                        
                                        @error('phonenumber')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="whatsappaddress"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Whatsappaddress

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="whatsappaddress" 
                                               id="" 
                                               placeholder="Whatsappaddress" 
                                               value="{{ $userProfile->whatsappaddress }}"
                                        /> 
                                        
                                        @error('whatsappaddress')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="birthday"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Instagramaddress

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="instagramaddress" 
                                               id="" 
                                               placeholder="Instagramaddress" 
                                               value="{{ $userProfile->instagramaddress }}"
                                        /> 
                                        
                                        @error('instagramaddress')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="facebookaddress"
                                               class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Facebookaddress

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                               type="text" 
                                               name="facebookaddress" 
                                               id="" 
                                               placeholder="Facebookaddress" 
                                               value="{{ $userProfile->facebookaddress }}"
                                        /> 
                                        
                                        @error('facebookaddress')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <div class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Email

                                        </div>
                                        <div class="px-4 py-2"> 

                                        {{ auth()->user()->email }} 
                                        
                                        </div>
                        
                                    </div>

                                </div>
                            </div>
                        
                        </div>
                        <!-- End of about section -->
                      

                    </div>
                    <!-- End of profile tab -->
                    


                    <div class="flex flex-col">
                        <button class="w-100 mt-2 py-3 px-3 rounded-lg bg-blue-600 dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                            >
                        Update the user profile
                        </button>
                    </div>
            
                </form>
            </div>
        </div>
    </div>

</x-layout>