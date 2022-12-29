<x-layout>

    <x-card class="p-10">  

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Manage Recipes
            </h2>
            <p class="mb-4">
                To manage your recipes (look,edit,delete)
            </p>
        </header>
        
        <table class="w-full table-auto rounded-sm">
            
            <tbody>

                @unless($recipes->isEmpty())
                @foreach ($recipes as $recipe)
                    
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="/recipes/{{ $recipe->id }}">
                                {{ $recipe->recipe_title }}
                        </a>
                    </td>

                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a class="text-blue-400 px-6 py-2 rounded-xl"
                           href="/recipes/{{ $recipe->id }}/edit"
                          >
                            <i class="fa-solid fa-pen-to-square"></i>
                                Edit
                        </a>
                    </td>

                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">  
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
                    </td>

                </tr>

                @endforeach
                @else

                <tr class="border-gray-300">
                    <td class=class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">
                            No Recipes Found!
                        </p>
                    </td>
                </tr>

                @endunless

            </tbody>

        </table>  

    </x-card>

</x-layout>