@props(['recipe'])

<div class="row">

    <div class="col-md-3">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <span class="font-weight-bold">
                {{ auth()->user()->name }} 
            </span>
            <span class="text-black-50">
                {{ auth()->user()->email }} 
            </span>
        </div>
    </div>

    <div class="col-md-6">

        <div class="text-center p-2">
            <h4>
                Title from this recipe
            </h4>
        </div>

        <div class="p-3 py-5">

            <div class="col-md-12">
               <div class="text-center fs-4">     
                    <a href="/recipes/{{ $recipe->id }}">
                        {{ $recipe->recipe_title }}
                    </a>
               </div>
            </div>

            <div class="col-md-12">

                <p class="mb-4">Section recipe</p>
                <div class="text-xl font-bold mb-4">
                    {{ $recipe->recipe_section }}
                </div>

            </div>

            <div class="row mt-2">

                <div class="col-md-6">

                    <p class="mb-4">Kitchenware</p> 
                    <div class="text-xl font-bold mb-4">
                        {{ $recipe->kitchenware }}
                    </div>

                </div>
                
                <div class="col-md-6">

                    <p class="mb-4">Ingredients</p> 
                    <div class="text-xl font-bold mb-4">
                        {{ $recipe->ingredients }}
                    </div>

                </div>

            </div>

            <div class="row mt-2">

                <div class="col-md-6">

                    <p class="mb-4">The steps to follow for this recipe</p> 
                    <div class="text-xl font-bold mb-4">
                        {{ $recipe->recipe_the_steps_to_follow }}
                    </div>

                </div>

                <div class="col-md-6">

                    <p class="mb-4">Commentary by this recipe</p> 
                    <div class="text-xl font-bold mb-4">
                        {{ $recipe->recipe_commentary }}
                    </div>

                </div>
                
            </div>

            <div class="row mt-2">

                <div class="col-md-6">

                    <p class="mb-4">Estimated time for this recipe</p> 
                    <div class="text-xl font-bold mb-4">
                        {{ $recipe->recipe_estimated_time }}
                    </div>

                </div>

                <div class="col-md-6">

                    <p class="mb-4">Recipe shelf life</p> 
                    <div class="text-xl font-bold mb-4">
                        {{ $recipe->recipe_shelf_life }}
                    </div>

                </div>
                
            </div>

            <div class="col-md-12">

                <p class="mb-4">Image end result from this recipe</p> 
                <div>
                    <img
                            src="{{ $recipe->recipe_image_end_result ? asset('storage/' . $recipe->recipe_image_end_result) : asset('images/no-image.png') }}"
                            alt=""
                    />
                </div>

            </div>
        
        </div>
    </div>
</div>