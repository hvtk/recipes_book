<x-layout> 

    <!-- Group of symbols for this template -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="estimatedTime"
                viewBox="0 0 16 16"
            >
            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
        </symbol>
        <symbol id="shelfLife"
                viewBox="0 0 16 16">
            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
        </symbol>
        <symbol id="finish" 
                viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5z"/>
            <path d="M13 7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7z"/>
        </symbol>
    </svg>

    <div class="row">

        <div class="text-center fs-4 p-2">     
                <a href="/recipes/{{ $recipe->id }}">
                    Recipe: {{ $recipe->recipe_title }}
                </a>
        </div>

        <div class="d-flex flex-column align-items-center text-center">
            <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <span class="font-weight-bold">
                {{ auth()->user()->name }} 
            </span>
            <span class="text-black-50">
                {{ auth()->user()->email }} 
            </span>
        </div>
    
        <div class="col-md-12">

            <div class="p-3 py-4">

                <div class="col-md-12">

                    <div class="d-flex flex-column align-items-center text-center"> 

                        <img src="/images/section.jpg"
                            alt="picture with cryptic section"
                            class="img-fluid rounded-pill"
                            width="310px"
                            height="237px"
                            >

                        <div class="text-xl font-bold mb-4">
                            Section recipe: {{ $recipe->recipe_section }}
                        </div>

                    </div>

                </div>

                <div class="row mt-2">

                    <div class="col-md-6">

                        <div class="d-flex flex-column align-items-center text-center"> 

                            <img src="/images/kitchenware.jpg"
                                alt="picture with kitchenware"
                                class="img-fluid rounded-4"
                                width="400px"
                                height="305px"
                                >
                            <p class="mb-4">Kitchenware</p> 
                            <div class="text-xl font-bold mb-4">
                                <ul>
                                    @foreach ($recipe->kitchenware as $kitchenware)
                                        <li> {{ $kitchenware }} </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                    </div>
                    
                    <div class="col-md-6">

                        <div class="d-flex flex-column align-items-center text-center"> 

                            <img src="/images/ingredients.jpg"
                                alt="picture with ingredients"
                                class="img-fluid rounded-4"
                                width="400px"
                                height="305px"
                                >
                            <p class="mb-4">Ingredients</p> 
                            <div class="text-xl font-bold mb-4">
                                <ul>
                                    @foreach ($recipe->ingredients as $ingredient)
                                        <li> {{ $ingredient }} </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row mt-2">

                    <div class="col-md-6">

                        <div class="d-flex flex-column align-items-center text-center"> 

                            <img src="/images/stepstofollow.jpg"
                                alt="a cryptic picture"
                                class="img-fluid rounded-4"
                                width="400px"
                                height="305px"
                                >

                            <p class="mb-4">The steps to follow for this recipe</p> 
                            <div class="text-xl font-bold mb-4">
                                {{ $recipe->recipe_the_steps_to_follow }}
                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="d-flex flex-column align-items-center text-center"> 

                            <img src="/images/commentary.jpg"
                                alt="a cryptic picture"
                                class="img-fluid rounded-4"
                                width="400px"
                                height="305px"
                                >

                            <p class="mb-4">Commentary by this recipe</p> 
                            <div class="text-xl font-bold mb-4">
                                {{ $recipe->recipe_commentary }}
                            </div>
                            
                        </div>
                    </div>
                    
                </div>

                <div class="row mt-2">

                    <div class="col-md-6">

                        <div class="d-flex flex-column align-items-center text-center"> 

                            <svg width="32" 
                                height="32" 
                                fill="currentColor" 
                                class="bi bi-clock-history" 
                                >
                                <use xlink:href="#estimatedTime"/>
                            </svg>

                            <p class="mb-4">Estimated time for this recipe</p> 
                            <div class="text-xl font-bold mb-4">
                                {{ $recipe->recipe_estimated_time }}
                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="d-flex flex-column align-items-center text-center"> 

                            <svg width="32" 
                                height="32" 
                                fill="currentColor" 
                                class="bi bi-calendar-check-fill" 
                                >
                                <use xlink:href="#shelfLife"/>
                            </svg>

                            <p class="mb-4">Recipe shelf life</p> 
                            <div class="text-xl font-bold mb-4">
                                {{ $recipe->recipe_shelf_life }}
                            </div>

                        </div>

                    </div>
                    
                </div>

                <div class="col-md-12">

                <div class="d-flex flex-column align-items-center text-center"> 
                    
                        <svg width="32" 
                            height="32" 
                            fill="currentColor" 
                            class="bi bi-align-end" 
                            >
                            <use xlink:href="#finish"/>
                        </svg>

                        <p class="mb-4">Image end result from this recipe</p> 
                        <div>
                            <img src="{{ $recipe->recipe_image_end_result ? asset('storage/' . $recipe->recipe_image_end_result) : asset('images/no-image.png') }}"
                                alt="picture from the recipe"
                                class="img-fluid rounded-4"
                                width="400px"
                                height="305px"
                            />
                        </div>

                </div>

                </div>
            
            </div>
        </div>
    </div>

</x-layout>