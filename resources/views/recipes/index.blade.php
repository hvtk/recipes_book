<x-layout-bootstrap>

    <!-- Custom styles for this template -->
    <link href="{{ url('/css/recipeCreate.css') }}" rel="stylesheet"/>

    <main class="col align-self-center py-3">
        <div class="body-recipeCreate">
            <div class="container rounded bg-white mt-5 mb-5">

                @unless(count($recipes) == 0)

                @foreach ($recipes as $recipe)

                <x-recipe-card-bootstrap :recipe="$recipe" />

                @endforeach

                @else
                <p> No Recipes Found </p>

                @endunless  

                {{-- <!-- gives the links of the pages in combination with paginate -->
                <div class="mt-0 p-4">
                    {{ $recipes->links() }}
                </div> --}}

            </div>
        </div>
    </main>
    
</x-layout-bootstrap>

    