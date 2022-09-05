@props(['recipe'])

<x-card>

    <div class="flex">
        <h3 class="text-2xl">
            <a href="/recipes/{{ $recipe->id }}">
                {{ $recipe->recipe_title }}
            </a>
        </h3>
        <div class="text-xl font-bold mb-4">
            {{ $recipe->recipe_section }}
        </div>
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
                 src="{{ $recipe->recipe_image_end_result ? asset('storage/' . $recipe->recipe_image_end_result) }}"
                 alt=""
            />
        </div>
        <div class="text-xl font-bold mb-4">
            {{ $recipe->recipe_commentary }}
        </div>
    </div>

</x-card>