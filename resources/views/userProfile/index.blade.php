<x-layout>

    {{-- Compiled style from Tailwind example profile --}}
    <link href="{{ url('/css/userProfile.css') }}" rel="stylesheet">

    @foreach ($userProfile as $userProfile )
 
    <header class="text-center">
        <h2 class="text-xl uppercase mb-1">
            Title from this recipe
        </h2>
        <div class="text-2xl font-bold mb-4">
            <a href="/userprofiles/{{ $userProfile->id }}">
                {{ $userProfile->first_name }}
            </a>
        </div>
    </header>

    
    
    <div class="bg-gray-100">

        <a href="/recipes" class="inline-block text-black ml-4 mb-4">
            <i class="fa-solid fa-arrow-left"></i>
            Back
        </a>

        <div class="container mx-auto my-5 p-5">
            <div class="md:flex no-wrap md:-mx-2 ">

                <!-- Left Side -->
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white p-3 border-t-4 border-green-400">
                        <div class="image overflow-hidden h-auto w-full mx-auto">

                            
                            <img class="hidden w-48 mr-6 md:block"
                            src="{{$userProfile->image ? asset('storage/' . $userProfile->image) : asset('images/no-image.png')}}"
                            alt=""
                            /> 

                           
                        </div>
                        {{-- <h1 class="text-gray-900 font-bold text-xl leading-8 my-1"> {{ auth()->user()->name }} </h1> --}}
                        <div class="text-gray-600 font-lg text-semibold leading-6">
                            <p>
                                    Information about the user
                            </p>
                            <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                    {{ $userProfile->information }}
                            </div>  
    
                        </div>
                        
                    </div>
                    <!-- End of profile card -->
                    
                </div>
                <!-- Right Side -->
                <div class="w-full md:w-9/12 mx-2 h-64">
                    <!-- Profile tab -->
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
                                    
                                    <p class="px-4 py-2 font-semibold"
                                       >
                                            First name

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $userProfile->first_name }}
                                    </div>
                                  
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                        >
                                        
                                            Last name

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $userProfile->last_name }}
                                    </div>
                                   
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                        >
                                        
                                            Gender

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $userProfile->gender }}
                                    </div>
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                        >
                                        
                                            Street

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $userProfile->street }}
                                    </div>
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                      >
                                        
                                            Streetnumber

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $userProfile->streetnumber }}
                                    </div>
                    
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                      >
                                        
                                            Postalcode

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $userProfile->postalcode }}
                                    </div>
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                        >
                                        
                                            City

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $userProfile->city }}
                                    </div>
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                        >
                                        
                                            Country

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $userProfile->country }}   

                                    </div>
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                      >
                                        
                                            Birthday

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $userProfile->birthday }}   
                                        
                                    </div>
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <div class="px-4 py-2 font-semibold"
                                        >
                                        
                                            Email

                                    </div>
                                    <div class="px-4 py-2"> 

                                    {{-- {{ auth()->user()->email }}  --}}
                                    
                                    </div>
                    
                                </div>

                            </div>
                        </div>
                    
                    </div>
                    <!-- End of about section -->

                
                    <!-- End of profile tab -->
                </div>

             
            </div>  
        </div>
    </div>

    @endforeach
</x-layout>