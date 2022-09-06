<x-layout>

    <div class="mt-8 mb-10 mx-4">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">
                     Edit a recipe
                </h1>
                <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">
                     Edit in the form recipe: {{ $recipe->recipe_title }}
                </p>
                <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                    <svg class="w-8 h-8 text-gray-500"
                         fill="none" 
                         stroke="currentColor" 
                         stroke-linecap="round" 
                         stroke-linejoin="round" 
                         stroke-width="1.5" 
                         viewBox="0 0 24 24" 
                        >
                        <path stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="1.5" 
                              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                            />
                        <path stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="1.5" 
                              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" 
                            />
                    </svg>
                    <div class="ml-4 text-md tracking-wide font-semibold w-40">
                         The address of the logged in person
                    </div>
                </div>

                <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                    <svg class="w-8 h-8 text-gray-500"
                         fill="none" 
                         stroke="currentColor" 
                         stroke-linecap="round" 
                         stroke-linejoin="round" 
                         stroke-width="1.5" 
                         viewBox="0 0 24 24" 
                        >
                        <path stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="1.5" 
                              d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                            />
                    </svg>
                    <div class="ml-4 text-md tracking-wide font-semibold w-40">
                        The phonenumber of the logged in person
                    </div>
                </div>

                <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                    <svg class="w-8 h-8 text-gray-500"
                         fill="none"
                         stroke="currentColor" 
                         stroke-linecap="round" 
                         stroke-linejoin="round" 
                         stroke-width="1.5" 
                         viewBox="0 0 24 24" 
                        >
                        <path stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="1.5"
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" 
                            />
                    </svg>
                    <div class="ml-4 text-md tracking-wide font-semibold w-40">
                         The email of the logged in person
                    </div>
                </div>
            </div>

            <div p-10 rounded max-w-lg mx-auto mt-24>
                    <form class="p-6 flex flex-col justify-center"
                          method="POST"
                          action="/recipes/{{ $recipe->id }}"  
                          enctype="multipart/form-data"
                        >
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col">
                            <label for="recipe_title"
                                   class="ml-4 text-md tracking-wide font-semibold w-50">
                                     Recipe title
                            </label>
                            <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                type="text" 
                                name="recipe_title" 
                                id="" 
                                placeholder="Recipe title" 
                                value="{{ $recipe->recipe_title }}"
                            /> 
                            
                            @error('recipe_title')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>
                        <div class="flex flex-col">
                            <label for="recipe_section"
                                   class="ml-4 text-md tracking-wide font-semibold w-50">
                                     Recipe section
                            </label>
                            <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                type="text" 
                                name="recipe_section" 
                                id="" 
                                placeholder="Recipe section" 
                                value="{{ $recipe->recipe_section }}"
                            /> 
                            
                            @error('recipe_section')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>
                        <div class="flex flex-col">
                            <label for="kitchenware"
                                   class="ml-4 text-md tracking-wide font-semibold w-50">
                                     Kitchenware
                            </label>
                            <textarea class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                    type="text" 
                                    name="kitchenware" 
                                    id="" 
                                    rows="10"
                                    placeholder="Kitchenware" 
                                    >
                                    {{ $recipe->kitchenware }}
                            </textarea> 
                            
                            @error('kitchenware')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>
                        <div class="flex flex-col">
                            <label for="ingredients"
                                   class="ml-4 text-md tracking-wide font-semibold w-50">
                                     Ingredients
                            </label>
                            <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                type="text" 
                                name="ingredients" 
                                id="" 
                                placeholder="Ingredients" 
                                value="{{ $recipe->ingredients }}"
                            /> 
                            
                            @error('ingredients')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>
                        <div class="flex flex-col">
                            <label for="recipe_the_steps_to_follow"
                                   class="ml-4 text-md tracking-wide font-semibold w-50">
                                     The steps to follow for this recipe
                            </label>
                            <textarea class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                    type="text" 
                                    name="recipe_the_steps_to_follow" 
                                    id="" 
                                    rows="10"
                                    placeholder="The steps to follow for this recipe" 
                                    >
                                    {{ $recipe->recipe_the_steps_to_follow }}
                            </textarea> 
                            
                            @error('recipe_the_steps_to_follow')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>
                        <div class="flex flex-col">
                            <label for="recipe_estimated_time"
                                   class="ml-4 text-md tracking-wide font-semibold w-50">
                                     Estimated time for this recipe
                            </label>
                            <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                type="text" 
                                name="recipe_estimated_time" 
                                id="" 
                                placeholder="Estimated time for this recipe" 
                                value="{{ $recipe->recipe_estimated_time }}"
                            /> 
                            
                            @error('recipe_estimated_time')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                            
                        </div> 
                        <div class="flex flex-col">
                            <label for="recipe_image_end_result"
                                   class="ml-4 text-md tracking-wide font-semibold w-50">
                                     Image end result from this recipe
                            </label>
                            <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                   type="file" 
                                   name="recipe_image_end_result" 
                                   id=""
                            />
                            <img class="hidden w-48 mr-6 md:block"
                                 src="{{$recipe->recipe_image_end_result ? asset('storage/' . $recipe->recipe_image_end_result) : asset('images/no-image.png')}}"
                                 alt=""
                                />

                            @error('recipe_image_end_result')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                            
                        </div> 
                        <div class="flex flex-col">
                            <label for="recipe_shelf_life"
                                   class="ml-4 text-md tracking-wide font-semibold w-50">
                                     Recipe shelf life
                            </label>
                            <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                type="text" 
                                name="recipe_shelf_life" 
                                id="" 
                                placeholder="Recipe shelf life" 
                                value="{{ $recipe->recipe_shelf_life }}"
                            /> 
                            
                            @error('recipe_shelf_life')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>
                        <div class="flex flex-col">
                            <label for="recipe_commentary"
                                   class="ml-4 text-md tracking-wide font-semibold w-50">
                                     Commentary by this recipe
                            </label>
                            <textarea class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                    type="text" 
                                    name="recipe_commentary" 
                                    id=""
                                    rows="10" 
                                    placeholder="Commentary by this recipe" 
                                    >
                                    {{ $recipe->recipe_commentary }}
                            </textarea>  
                            
                            @error('recipe_commentary')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>
                        
                        <div class="flex flex-col">
                            <button class="w-100 mt-2 py-3 px-3 rounded-lg bg-blue-600 dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                >
                            Edit this recipe
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

</x-layout>