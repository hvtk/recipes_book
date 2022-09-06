<x-layout>

    <a href="/recipes" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i>
        Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-2xl mb-2">
                    {{ $recipe->recipe_title }}
                </h3>
                <div class="text-xl font-bold mb-4">
                    {{ $recipe->kitchenware }}
                </div>
                <ul class="flex">
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">Electric devices</a>
                    </li>
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">Pans, baking tins, measuring cups, etc.</a>
                    </li>
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">Hand tools, cutlery, etc.</a>
                    </li>
                </ul>
                <div class="text-xl font-bold mb-4">
                    {{ $recipe->recipe_the_steps_to_follow }}
                </div>
                <div class="text-xl font-bold mb-4">
                    {{ $recipe->recipe_estimated_time }}
                </div>
                <div class="text-xl font-bold mb-4">
                    {{ $recipe->recipe_shelf_life }}
                </div>
                <div class="text-xl font-bold mb-4">
                    <img class="hidden w-48 mr-6 md:block"
                         src="{{$recipe->recipe_image_end_result ? asset('storage/' . $recipe->recipe_image_end_result) : asset('images/no-image.png')}}"
                         alt=""
                    />
                </div>
                <div class="text-xl font-bold mb-4">
                    {{ $recipe->recipe_commentary }}
                </div>
            </div>

            <x-card class="mt-4 p-s flex space-x-6">
                <a href="/recipes/{{ $recipe->id }}/edit">
                    <i class="fa-solid fa-pencil"></i>
                        Edit
                </a>

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
            
        </x-card>
    </div>

</x-layout>