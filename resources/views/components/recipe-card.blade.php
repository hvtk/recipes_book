@props(['recipe'])
 
<!-- Information fields short -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 p-4 gap-4">
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="text-center">
            <p class="mb-4">Title recipe</p>
            <div class="text-xl font-bold mb-4">
                <a href="/recipes/{{ $recipe->id }}">
                    {{ $recipe->recipe_title }}
                </a>
            </div>
        </div>
    </div>
    
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="text-center">
            <p class="mb-4">Section recipe</p>
            <div class="text-xl font-bold mb-4">
                {{ $recipe->recipe_section }}
            </div>
        </div>
    </div>
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="text-center">
            <p class="mb-4">Kitchenware</p> 
            <div class="text-xl font-bold mb-4">
                {{ $recipe->kitchenware }}
            </div>
        </div>
    </div>
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="text-center">
            <p class="mb-4">Ingredients</p> 
            <div class="text-xl font-bold mb-4">
                {{ $recipe->ingredients }}
            </div>
        </div>
    </div>
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="text-center">
            <p class="mb-4">Estimated time</p> 
            <div class="text-xl font-bold mb-4">
                {{ $recipe->recipe_estimated_time }}
            </div>
        </div>
    </div>
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="text-center">
            <p class="mb-4">Shelf life</p> 
            <div class="text-xl font-bold mb-4">
                {{ $recipe->recipe_shelf_life }}
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
                    {{ $recipe->recipe_the_steps_to_follow }}
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
                    {{ $recipe->recipe_commentary }}
                </div>
            </div>
        </div>
    </div>
    <!-- Recipe commentary -->

    <!-- Recipe image -->
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
    <!-- Recipe image -->

</div>
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

<!-- Other Users From Recept_book Table -->
<div class="mt-4 mx-4">
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full">

                <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">User</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Facebook</th>
                    <th class="px-4 py-3">Instagram</th>
                </tr>
                </thead>
                
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                            <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div>
                            <p class="font-semibold">Hans Burger</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer</p>
                            </div>
                        </div>
                        </td>
                        <td class="px-4 py-3 text-sm">Email address</td>
                        <td class="px-4 py-3 text-xs">
                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> facebook name </span>
                        </td>
                        <td class="px-4 py-3 text-sm">Instagram name</td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        
        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <span class="flex items-center col-span-3"> Showing 21-30 of 100 </span>
            <span class="col-span-2"></span>
            
            <!-- Pagination -->

            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                        <li>
                        <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                            <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                        </li>
                        <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                        </li>
                        <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                        </li>
                        <li>
                        <button class="px-3 py-1 text-white dark:text-gray-800 transition-colors duration-150 bg-blue-600 dark:bg-gray-100 border border-r-0 border-blue-600 dark:border-gray-100 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                        </li>
                        <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                        </li>
                        <li>
                        <span class="px-3 py-1">...</span>
                        </li>
                        <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                        </li>
                        <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                        </li>
                        <li>
                        <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                            <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                        </li>
                    </ul>
                </nav>
            </span>
        </div>
    </div>
</div>
<!-- Other Users From Recept_book Table -->