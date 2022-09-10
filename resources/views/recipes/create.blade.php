<x-layout>

    <x-card class="p-10 max-w-lg mx-auto mt-24">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a recipe
            </h2>
            <p class="mb-4">describe your recipe and create your own recipe book</p>
        </header>

        <div p-10 rounded max-w-lg mx-auto mt-24>
            <form class="p-6 flex flex-col justify-center"
                    method="POST"
                    action="/recipes"  
                    enctype="multipart/form-data"
                >
                @csrf
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
                
                <div class="flex flex-col">
                    <button class="w-100 mt-2 py-3 px-3 rounded-lg bg-blue-600 dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                        >
                    Create a recipe
                    </button>
                </div>
            </form>
        </div>
    </x-card>

</x-layout>