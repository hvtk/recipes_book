@extends('layout')

@section('content')

    @unless(count($recipes) == 0)

    @foreach ($recipes as $recipe)
    {{-- <h2>
        <a href="/recipes/{{$recipe['id']}}">
            {{ $recipe['recipe_title'] }}
        </a>
    </h2>
    <p>
        {{ $recipe['recipe_commentary'] }}
    </p> --}}

    <div class="bg-gray-50 border border-gray-200 rounded p-6">
        <div class="flex">
            <div>
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
                    {{ $recipe->recipe_image_end_result }}
                </div>
                <div class="text-xl font-bold mb-4">
                    {{ $recipe->recipe_commentary }}
                </div>
            </div>
        </div>
    </div>

    
    @endforeach

    @else
    <p> No Recipes Found </p>

    @endunless  

@endsection