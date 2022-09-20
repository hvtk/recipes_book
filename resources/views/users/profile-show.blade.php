<x-layout>

    {{-- Compiled style from Tailwind example profile --}}
    <link href="{{ url('/css/profile.css') }}" rel="stylesheet">
    
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

                            
                             {{-- <img class="hidden w-48 mr-6 md:block"
                            src="{{profile_users_image ? asset('storage/' . profile_users_image) : asset('images/no-image.png')}}"
                            alt=""
                            />  --}}

                           
                        </div>
                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1"> {{ auth()->user()->name }} </h1>
                        <p class="text-gray-600 font-lg text-semibold leading-6">
                            <p>
                                    Information about the user
                            </p>
                            <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                    {{ $profileUser->profile_users_information }}
                            </div>  
    
                        </p>
                        
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
                                    
                                        {{ $profileUser->profile_users_first_name }}
                                    </div>
                                  
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                        >
                                        
                                            Last name

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $profileUser->profile_users_last_name }}
                                    </div>
                                   
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                        >
                                        
                                            Gender

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $profileUser->profile_users_gender }}
                                    </div>
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                        >
                                        
                                            Street

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $profileUser->profile_users_street }}
                                    </div>
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                      >
                                        
                                            Streetnumber

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $profileUser->profile_users_streetnumber }}
                                    </div>
                    
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                      >
                                        
                                            Postalcode

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $profileUser->profile_users_postalcode }}
                                    </div>
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                        >
                                        
                                            City

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $profileUser->profile_users_city }}
                                    </div>
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                        >
                                        
                                            Country

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $profileUser->profile_users_country }}   

                                    </div>
                    
                                </div>

                                <div class="grid grid-cols-2">
                                    
                                    <p class="px-4 py-2 font-semibold"
                                      >
                                        
                                            Birthday

                                    </p>
                                    <div class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                    
                                        {{ $profileUser->profile_users_birthday }}   
                                        
                                    </div>
                    
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

                    <div class="my-4"></div>

                    <!-- Experience and education -->
                    <div class="bg-white p-3 shadow-sm rounded-sm">

                        <div class="grid grid-cols-2">
                            <div>
                                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                    <span clas="text-green-500">
                                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </span>
                                    <span class="tracking-wide">Experience</span>
                                </div>
                                <ul class="list-inside space-y-2">
                                    <li>
                                        <div class="text-teal-600">Owner at Her Company Inc.</div>
                                        <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                    </li>
                                    <li>
                                        <div class="text-teal-600">Owner at Her Company Inc.</div>
                                        <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                    </li>
                                    <li>
                                        <div class="text-teal-600">Owner at Her Company Inc.</div>
                                        <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                    </li>
                                    <li>
                                        <div class="text-teal-600">Owner at Her Company Inc.</div>
                                        <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                    <span clas="text-green-500">
                                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                            <path fill="#fff"
                                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                        </svg>
                                    </span>
                                    <span class="tracking-wide">Education</span>
                                </div>
                                <ul class="list-inside space-y-2">
                                    <li>
                                        <div class="text-teal-600">Masters Degree in Oxford</div>
                                        <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                    </li>
                                    <li>
                                        <div class="text-teal-600">Bachelors Degreen in LPU</div>
                                        <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End of Experience and education grid -->
                    </div>
                    <!-- End of profile tab -->
                </div>
            </div>

                    
           
                    
        </div>
    </div>

</x-layout>