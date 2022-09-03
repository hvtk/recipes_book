<x-layout>

    <div class="mt-8 mx-4">
        <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
            <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">Create a recipe</h1>
            <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">Fill in the form to submit the recipe into your database</p>

            <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <div class="ml-4 text-md tracking-wide font-semibold w-40">The address of the logged in person</div>
            </div>

            <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <div class="ml-4 text-md tracking-wide font-semibold w-40">The phonenumber of the logged in person</div>
            </div>

            <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <div class="ml-4 text-md tracking-wide font-semibold w-40">The email of the logged in person</div>
            </div>
        </div>
        <form class="p-6 flex flex-col justify-center">
            <div class="flex flex-col">
                <label for="title"
                       class="ml-4 text-md tracking-wide font-semibold w-40">
                          Recipe title
                </label>
                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                       type="text" 
                       name="title" 
                       id="" 
                       placeholder="Recipe title" 
                />    
            </div>
            <div class="flex flex-col">
                <label for="section"
                       class="ml-4 text-md tracking-wide font-semibold w-40">
                          Recipe section
                </label>
                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                       type="text" 
                       name="section" 
                       id="" 
                       placeholder="Recipe section" 
                />    
            </div>
            <div class="flex flex-col">
                <label for="kitchenware"
                       class="ml-4 text-md tracking-wide font-semibold w-40">
                         Kitchenware
                </label>
                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                       type="text" 
                       name="kitchenware" 
                       id="" 
                       placeholder="Kitchenware" 
                />    
            </div>
            <div class="flex flex-col">
                <label for="ingredients"
                       class="ml-4 text-md tracking-wide font-semibold w-40">
                         Ingredients
                </label>
                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                       type="text" 
                       name="ingredients" 
                       id="" 
                       placeholder="Ingredients" 
                />    
            </div>
            <div class="flex flex-col">
                <label for="recipe_the_steps_to_follow"
                       class="ml-4 text-md tracking-wide font-semibold w-40">
                          The steps to follow for this recipe
                </label>
                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                       type="text" 
                       name="recipe_the_steps_to_follow" 
                       id="" 
                       placeholder="The steps to follow for this recipe" 
                />    
            </div>
            <div class="flex flex-col">
                <label for="recipe_estimated_time"
                       class="ml-4 text-md tracking-wide font-semibold w-40">
                          Estimated time for this recipe
                </label>
                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                       type="text" 
                       name="recipe_estimated_time" 
                       id="" 
                       placeholder="Estimated time for this recipe" 
                />    
            </div> 
            <div class="flex flex-col">
                <label for="recipe_image_end_result"
                       class="ml-4 text-md tracking-wide font-semibold w-40">
                          Image end result from this recipe
                </label>
                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                       type="text" 
                       name="recipe_image_end_result" 
                       id="" 
                       placeholder="Image end result from this recipe" 
                />    
            </div>
            <div class="flex flex-col">
                <label for="recipe_shelf_life"
                       class="ml-4 text-md tracking-wide font-semibold w-40">
                          Recipe shelf life
                </label>
                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                       type="text" 
                       name="recipe_shelf_life" 
                       id="" 
                       placeholder="Recipe shelf life" 
                />    
            </div>
            <div class="flex flex-col">
                <label for="recipe_commentary"
                       class="ml-4 text-md tracking-wide font-semibold w-40">
                          Commentary by this recipe
                </label>
                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                       type="text" 
                       name="recipe_commentary" 
                       id="" 
                       placeholder="Commentary by this recipe" 
                />    
            </div>

            <button type="submit" class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Submit</button>
        </form>
        </div>
    </div>

</x-layout>