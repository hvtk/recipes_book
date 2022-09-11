<x-layout>

    <form method="POST"
        action="/recipes"  
        enctype="multipart/form-data"
        >
        @csrf

        <header class="text-center">
            <div>
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Create a recipe
                </h2>
                <p class="mb-4">
                    describe your recipe and create your own recipe book
                </p>  
            </div>

            <div class="p-5 rounded max-w-lg mx-auto mt-1"> 
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
                        value="{{ old('recipe_title') }}"
                    /> 
                    
                    @error('recipe_title')
                        <p class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
            </div>

        </header>

        <!-- Information fields short -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 p-4 gap-4">
            
            <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                
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
                        value="{{ old('recipe_section') }}"
                    /> 
                    
                    @error('recipe_section')
                        <p class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
            
            </div>

            <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                
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
                            {{ old('kitchenware') }}
                    </textarea> 
                    
                    @error('kitchenware')
                        <p class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
                
            </div>

            <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                
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
                        value="{{ old('ingredients') }}"
                    /> 
                    
                    @error('ingredients')
                        <p class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
                
            </div>
            <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            
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
                        value="{{ old('recipe_estimated_time') }}"
                    /> 
                    
                    @error('recipe_estimated_time')
                        <p class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                    
                </div>
                
            </div>
            <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                
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
                        value="{{ old('recipe_shelf_life') }}"
                    /> 
                    
                    @error('recipe_shelf_life')
                        <p class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </p>
                    @enderror

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
                                    {{ old('recipe_the_steps_to_follow') }}
                            </textarea> 
                            
                            @error('recipe_the_steps_to_follow')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
        
                        </div>

                    </div>
                </div>
            </div>
            <!-- The steps to follow -->

            <!-- Recipe commentary -->
            <div class="relative flex flex-col min-w-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                <div class="rounded-t mb-0 px-0 border-0">
                    <div class="flex flex-wrap items-center px-4 py-2">

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
                                    {{ old('recipe_commentary') }}
                            </textarea>  
                            
                            @error('recipe_commentary')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
        
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Recipe commentary -->

            <!-- Recipe image -->
            <div class="relative flex flex-col min-w-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                <div class="rounded-t mb-0 px-0 border-0">
                    <div class="flex flex-wrap items-center px-4 py-2">

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
        
                            @error('recipe_image_end_result')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            <!-- Recipe image -->

        </div>

        <div class="p-5 rounded max-w-lg mx-auto mt-1"> 
            <div class="flex flex-col">
                <button class="w-100 mt-2 py-3 px-3 rounded-lg bg-blue-500 dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-white dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                    >
                Create a recipe
                </button>
            </div>
        </div>

    </form>
        <!-- paragraph fields and image -->

    <!-- Databases for the recipes -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
        <div class="md:col-span-2 xl:col-span-3">
        <h3 class="text-lg font-semibold">Databases for the recipes</h3>
        </div>
        <div class="md:col-span-2 xl:col-span-1">
        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
            <div class="flex justify-between py-1 text-black dark:text-white">
            <h3 class="text-sm font-semibold">Recipe section</h3>
            </div>
            <div class="text-sm text-black dark:text-gray-50 mt-2">
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Baking</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Roasting</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Cooking</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Frying</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Warming up</div>
            </div>
        </div>
        </div>

        <div class="md:col-span-2 xl:col-span-1">
        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
            <div class="flex justify-between py-1 text-black dark:text-white">
            <h3 class="text-sm font-semibold">Kitchenware</h3>
            </div>
            <div class="text-sm text-black dark:text-gray-50 mt-2">
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Frying pan</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Baking pan</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Casserole</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Measuring jug</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Pan</div>
            </div>
        </div>
        </div>

        <div class="md:col-span-2 xl:col-span-1">
        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
            <div class="flex justify-between py-1 text-black dark:text-white">
            <h3 class="text-sm font-semibold">Ingredients</h3>
            </div>
            <div class="text-sm text-black dark:text-gray-50 mt-2">
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Pancake mix</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Bread mix</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Herbs</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Eggs</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Butter</div>
            </div>
        </div>
        </div>

    </div>
    <!-- Databases for the recipes -->
</x-layout>