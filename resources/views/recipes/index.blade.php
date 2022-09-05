<x-layout>

    @unless(count($recipes) == 0)

    @foreach ($recipes as $recipe)

    <x-recipe-card :recipe="$recipe" />

    @endforeach

    @else
    <p> No Recipes Found </p>

    @endunless  

    <!-- gives the links of the pages in combination with paginate -->
    <div class="mt-0 p-4">
        {{ $recipes->links() }}
    </div>

</x-layout>

    