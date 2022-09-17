<x-layout>

    {{-- Compiled style from Tailwind example profile --}}
    <link href="{{ url('/css/profile.css') }}" rel="stylesheet">
    
    <div class="bg-gray-100">

        <div class="container mx-auto my-5 p-5">
            <div class="md:flex no-wrap md:-mx-2 ">
            
                <form method="POST"
                      action="/users/profile-edit"  
                      enctype="multipart/form-data"
                    >
                    @csrf
                    @method('PUT')

                    <!-- Left Side -->
                    <div class="w-full md:w-3/12 md:mx-2">
                        <!-- Profile Card -->
                        <div class="bg-white p-3 border-t-4 border-green-400">
                            <div class="image overflow-hidden h-auto w-full mx-auto">

                                <label for="user_image"
                                        class="ml-4 text-md tracking-wide font-semibold w-50">
                                            Image User
                                </label>
                                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                        type="file" 
                                        name="user_image" 
                                        id=""
                                />
                                <img class="hidden w-48 mr-6 md:block"
                                src="{{$profileUser->profile_user_image ? asset('storage/' . $profileUser->profile_user_image) : asset('images/no-image.png')}}"
                                alt=""
                                /> 

                                @error('profile_user_image')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            
                            </div>
                            <h1 class="text-gray-900 font-bold text-xl leading-8 my-1"> {{ auth()->user()->name }} </h1>
                            <p class="text-gray-600 font-lg text-semibold leading-6">
                                <label for="profile_user_information"
                                    class="ml-4 text-md tracking-wide font-semibold w-50">
                                        Information about the user
                                </label>
                                <textarea class="text-sm text-gray-500 hover:text-gray-600 leading-6"
                                        type="text" 
                                        name="profile_user_information" 
                                        id=""
                                        rows="10" 
                                        placeholder="Information about the user" 
                                        >
                                        {{ $profileUser->profile_user_information }}
                                </textarea>  
                                
                                @error('profile_user_information')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
            
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
                                        
                                        <label for="profile_user_first_name"
                                                class="px-4 py-2 font-semibold"
                                            >
                                            
                                                First name

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                            type="text" 
                                            name="profile_user_first_name" 
                                            id="" 
                                            placeholder="First name" 
                                            value="{{ $profileUser->profile_user_first_name }}"
                                        /> 
                                        
                                        @error('profile_user_first_name')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="profile_user_last_name"
                                                class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Last name

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                            type="text" 
                                            name="profile_user_last_name" 
                                            id="" 
                                            placeholder="Last name" 
                                            value="{{ $profileUser->profile_user_first_name }}"
                                        /> 
                                        
                                        @error('profile_user_last_name')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="profile_user_gender"
                                                class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Gender

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                            type="text" 
                                            name="profile_user_gender" 
                                            id="" 
                                            placeholder="Gender" 
                                            value="{{ $profileUser->profile_user_gender }}"
                                        /> 
                                        
                                        @error('profile_user_gender')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="profile_user_street"
                                                class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Street

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                            type="text" 
                                            name="profile_user_street" 
                                            id="" 
                                            placeholder="Street" 
                                            value="{{ $profileUser->profile_user_street }}"
                                        /> 
                                        
                                        @error('profile_user_street')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="profile_user_streetnumber"
                                                class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Streetnumber

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                            type="text" 
                                            name="profile_user_streetnumber" 
                                            id="" 
                                            placeholder="Streetnumber" 
                                            value="{{ $profileuser->profile_user_streetnumber }}"
                                        /> 
                                        
                                        @error('profile_user_streetnumber')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="profile_user_postalcode"
                                                class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Postalcode

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                            type="text" 
                                            name="profile_user_postalcode" 
                                            id="" 
                                            placeholder="Postalcode" 
                                            value="{{ $profileUser->profile_user_postalcode }}"
                                        /> 
                                        
                                        @error('profile_user_postalcode')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="profile_user_city"
                                                class="px-4 py-2 font-semibold"
                                            >
                                            
                                                City

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                            type="text" 
                                            name="profile_user_city" 
                                            id="" 
                                            placeholder="City" 
                                            value="{{ $profileUser->profile_user_city }}"
                                        /> 
                                        
                                        @error('profile_user_city')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="profile_user_country"
                                                class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Country

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                            type="text" 
                                            name="profile_user_country" 
                                            id="" 
                                            placeholder="Country" 
                                            value="{{ $profileUser->profile_user_country }}"
                                        /> 
                                        
                                        @error('profile_user_country')
                                            <p class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                        
                                    </div>

                                    <div class="grid grid-cols-2">
                                        
                                        <label for="profile_user_birthday"
                                                class="px-4 py-2 font-semibold"
                                            >
                                            
                                                Birthday

                                        </label>
                                        <input class="w-100 mt-2 py-2 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                            type="text" 
                                            name="profile_user_birthday" 
                                            id="" 
                                            placeholder="Birthday" 
                                            value="{{ $profileUser->profile_user_birthday }}"
                                        /> 
                                        
                                        @error('profile_user_birthday')
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

                    <div class="flex flex-col">
                        <button class="w-100 mt-2 py-3 px-3 rounded-lg bg-blue-600 dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                            >
                        Update the profile
                        </button>
                    </div>
            
                </form>
            </div>
        </div>
    </div>

</x-layout>