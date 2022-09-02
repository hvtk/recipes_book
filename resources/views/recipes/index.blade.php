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

    <x-recipe-card :recipe="$recipe" />

    @endforeach

    @else
    <p> No Recipes Found </p>

    @endunless  

@endsection