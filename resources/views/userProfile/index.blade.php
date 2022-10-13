<x-layout>

    {{-- @props(['recipe']) --}}
 
    <header class="text-center">
        <h2 class="text-xl uppercase mb-1">
            Title from this recipe
        </h2>
        <div class="text-2xl font-bold mb-4">
            {{-- <a href="/userprofiles/{{ $userProfile->id }}"> --}}
                {{ $userProfile->first_name }}
            {{-- </a> --}}
        </div>
    </header>
    
    <!-- Information fields short -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 p-4 gap-4">
        
        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="text-center">
                <p class="mb-4">Section recipe</p>
                <div class="text-xl font-bold mb-4">
                    {{ $userProfile->last_name }}
                </div>
            </div>
        </div>
        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="text-center">
                <p class="mb-4">Kitchenware</p> 
                <div class="text-xl font-bold mb-4">
                    {{ $userProfile->gender }}
                </div>
            </div>
        </div>
        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="text-center">
                <p class="mb-4">Ingredients</p> 
                <div class="text-xl font-bold mb-4">
                    {{ $userProfile->street }}
                </div>
            </div>
        </div>
        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="text-center">
                <p class="mb-4">Estimated time</p> 
                <div class="text-xl font-bold mb-4">
                    {{ $userProfile->streetnumber }}
                </div>
            </div>
        </div>
        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="text-center">
                <p class="mb-4">Shelf life</p> 
                <div class="text-xl font-bold mb-4">
                    {{ $userProfile->postalcode }}
                </div>
            </div>
        </div>
    </div>
    <!-- Information fields short -->
    
    <!-- paragraph fields and image -->
    <div class="grid grid-cols-1 lg:grid-cols-3 p-4 gap-4">
    
        <!-- The steps to follow -->
        <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
                <div class="flex flex-wrap items-center px-4 py-2">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">The steps to follow</h3>
                    </div>
                    <div class="text-xl font-bold mb-4">
                        {{ $userProfile->city }}
                    </div>
                </div>
            </div>
        </div>
        <!-- The steps to follow -->
    
        <!-- Recipe commentary -->
        <div class="relative flex flex-col min-w-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
                <div class="flex flex-wrap items-center px-4 py-2">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Recipe commentary</h3>
                    </div>
                    <div class="text-xl font-bold mb-4">
                        {{ $userProfile->country }}
                    </div>
                </div>
            </div>
        </div>
        <!-- Recipe commentary -->
    
        {{-- <!-- Recipe image -->
        <div class="relative flex flex-col min-w-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
                <div class="flex flex-wrap items-center px-4 py-2">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Recipe image</h3>
                    </div>
                    <div class="text-xl font-bold mb-4">
                        <img class="hidden w-48 mr-6 md:block"
                                src="{{ $recipe->recipe_image_end_result ? asset('storage/' . $recipe->recipe_image_end_result) : asset('images/no-image.png') }}"
                                alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- Recipe image --> --}}
    
    </div> 

</x-layout>