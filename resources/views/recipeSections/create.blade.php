<x-layout>

    <div class="md:col-span-2 xl:col-span-1">
        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
            <div class="flex justify-between py-1 text-black dark:text-white">
                <h3 class="text-sm font-semibold">
                    Recipe section
                </h3>
            </div>

            <form method="POST"
                  action="/recipesections"
                >
                @csrf

                <div class="text-sm text-black dark:text-gray-50 mt-2">
                    <div class="bg-white hover:bg-gray-50 p-2 rounded mt-1 border-b border-gray-100 cursor-pointer"
                        >
                        <label for="recipe_section"
                            >  
                                Recipe section
                        </label>
                        <input type="text"
                               name="recipe_section"
                               id=""
                               placeholder="Recipe section" 
                        />
                    </div>
                </div>

                <div class="p-5 rounded max-w-lg mx-auto mt-1"> 
                    <div class="flex flex-col">
                        <button class="w-100 mt-2 py-3 px-3 rounded-lg bg-blue-500 dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-white dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                            >
                        Create a recipe section
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-layout>