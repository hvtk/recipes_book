<x-layout>

    <div class="mt-8 mb-10 mx-4">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">
                     Manage your recipes
                </h1>

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

            <table p-10 rounded max-w-lg mx-auto mt-24>
                <tbody class="p-6 flex flex-col justify-center"
                    >
                    @unless($recipes->isEmpty())
                    @foreach ($recipes as $recipe)
                        
                    <tr class="flex flex-col">
                        <td class="ml-4 text-md tracking-wide font-semibold w-50"
                            >
                            <a href="/recipes/{{ $recipe->id }}">
                                    {{ $recipe->recipe_title }}
                            </a>
                        </td>

                        <td class="ml-4 text-md tracking-wide font-semibold w-50">
                            <x-card class="mt-4 p-s flex space-x-6">
                                <a href="/recipes/{{ $recipe->id }}/edit">
                                    <i class="fa-solid fa-pencil"></i>
                                        Edit
                                </a>
                            </x-card>
                        </td>

                        <td class="ml-4 text-md tracking-wide font-semibold w-50">
                            <x-card  class="mt-4 p-s flex space-x-6">  
                                <form method="POST"
                                    action="/recipes/{{ $recipe->id }}"  
                                    >
                                    @csrf
                                    @method('DELETE') 
                                    <button class="text-red-500">
                                        <i class="fa-solid fa-trash">
                                        </i>
                                            Delete
                                    </button>
                                </form>
                            </x-card>
                        </td>

                    </tr>
                    @endforeach
                    @else

                    <tr class="flex flex-col">
                        <td class="ml-4 text-md tracking-wide font-semibold w-50">
                            <p class="text-center">
                                No Recipes Found!
                            </p>
                        </td>
                    </tr>

                    @endunless
                </tbody>
            </table>               
        </div>
    </div> 

</x-layout>