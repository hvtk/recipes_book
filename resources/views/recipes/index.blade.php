<x-layout>

    @unless(count($recipes) == 0)

    @foreach ($recipes as $recipe)

    <x-recipe-card :recipe="$recipe" />

    @endforeach

    @else
    <p> No Recipes Found </p>

    @endunless  

</x-layout>
@
    