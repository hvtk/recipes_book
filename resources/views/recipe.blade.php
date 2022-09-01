@extends('layout')

@section('content')

{{-- <h2>
    {{ $recipe['recipe_title'] }}
</h2>
<p>
    {{ $recipe['recipe_commentary'] }}
</p> --}}

<a href="/recipes" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i>
     Back
</a>
<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
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
                {{ $recipe->recipe_image_end_result }}
            </div>
            <div class="text-xl font-bold mb-4">
                {{ $recipe->recipe_commentary }}
            </div>
        </div>
    </div>
</div>

@endsection