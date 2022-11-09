<x-layout>

    <!-- Custom styles for this template -->
    <link href="{{ url('/css/recipeCreate.css') }}" rel="stylesheet"/>

    <main class="col align-self-center py-3">
        <div class="body-recipeCreate">
            <div class="container rounded bg-white mt-5 mb-5">
              
                @php
                $A = "Baking";
                $B = "Roasting";
                $C = "Cooking";
                $D = "Frying";
                $E = "Warming up";
                @endphp

                <form method="POST"
                      action="/recipes/{{ $recipe->id }}"  
                      enctype="multipart/form-data"  
                    >  
                    @csrf
                    @method('PUT')

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
                                <h4 >
                                        Edit this recipe
                                </h4>
                            </div>

                            <div class="p-3 py-5">

                                <div class="col-md-12">

                                    <label class="labels"
                                           for="recipe_title"
                                        >
                                            Recipe title
                                    </label>
                                    <input type="text" 
                                           class="form-control" 
                                           name="recipe_title" 
                                           id="inputEditForm"
                                           placeholder="Recipe title" 
                                           value="{{ $recipe->recipe_title }}"
                                    />

                                    @error('recipe_title')
                                        <p class="text-danger text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                                <div class="col-md-12">

                                    <label class="labels"
                                           for="recipe_section" 
                                        >
                                            Recipe section
                                    </label>
                                    <select type="text" 
                                            class="form-select" 
                                            name="recipe_section" 
                                            id="selectEditForm"
                                        >
                                            <option selected>
                                                Open this select menu to choose the section
                                            </option>
                                            <option value="A"> 
                                                {{ $A }}
                                            </option>
                                            <option value="A"> 
                                                {{ $B }}
                                            </option>
                                            <option value="A"> 
                                                {{ $C }}
                                            </option>
                                            <option value="A"> 
                                                {{ $D }}
                                            </option>
                                            <option value="A"> 
                                                {{ $E }}
                                            </option>

                                            {{ $recipe->recipe_section }}"

                                    </select>

                                    @error('recipe_section')
                                        <p class="text-danger text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                                <div class="row mt-2">

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="kitchenware" 
                                            >
                                                Kitchenware
                                        </label>

                                        <textarea type="text" 
                                                  class="form-control"
                                                  name="kitchenware" 
                                                  id="textareaEditForm"                                               
                                                  placeholder="Kitchenware"
                                                >

                                                 {{ $recipe->kitchenware }}

                                        </textarea>

                                        @error('kitchenware')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    
                                    </div>

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="ingredients" 
                                            >
                                                Ingredients
                                        </label>

                                        <textarea type="text" 
                                                  class="form-control"
                                                  name="ingredients"
                                                  id="textareaEditForm"
                                                  placeholder="Ingredients" 
                                                > 

                                               {{ $recipe->ingredients }}

                                        </textarea>

                                        @error('ingredients')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    
                                    </div>

                                </div>

                                <div class="row mt-2">

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="recipe_the_steps_to_follow" 
                                            >
                                            The steps to follow for this recipe
                                        </label>

                                        <textarea type="text" 
                                                  class="form-control"
                                                  name="recipe_the_steps_to_follow"
                                                  id="textareaEditForm"
                                                  placeholder="The steps to follow for this recipe" 
                                                >

                                                     {{ $recipe->recipe_the_steps_to_follow }}

                                        </textarea>

                                        @error('recipe_the_steps_to_follow')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    
                                    </div>

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="recipe_commentary" 
                                            >
                                            Commentary by this recipe
                                        </label>

                                        <textarea type="text" 
                                                  class="form-control"
                                                  name="recipe_commentary"
                                                  id="textareaEditForm"
                                                  placeholder="Commentary by this recipe" 
                                                >

                                                     {{ $recipe->recipe_commentary }}

                                        </textarea>

                                        @error('recipe_commentary')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    
                                    </div>

                                </div>

                                <div class="row mt-2">

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="recipe_estimated_time" 
                                            >
                                                Estimated time for this recipe
                                        </label>

                                        <input type="text" 
                                               class="form-control"
                                               name="recipe_estimated_time"
                                               id="inputEditForm"
                                               placeholder="Estimated time for this recipe" 
                                               value="{{ $recipe->recipe_estimated_time }}"
                                        />

                                        @error('recipe_estimated_time')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    
                                    </div>

                                    <div class="col-md-6">

                                        <label class="labels"
                                               for="recipe_shelf_life" 
                                            >
                                            Recipe shelf life
                                        </label>

                                        <input type="text" 
                                               class="form-control"
                                               name="recipe_shelf_life"
                                               id="inputForm"
                                               placeholder="Recipe shelf life" 
                                               value="{{ $recipe->recipe_shelf_life }}"
                                        />

                                        @error('recipe_shelf_life')
                                            <p class="text-danger text-xs mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    
                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <label class="labels"
                                           for="recipe_image_end_result" 
                                        >
                                        Image end result from this recipe
                                    </label>

                                    <input type="file" 
                                           class="form-control"
                                           name="recipe_image_end_result"
                                           id="inputEditForm" 
                                    />
                                    <img src="{{$recipe->recipe_image_end_result ? asset('storage/' . $recipe->recipe_image_end_result) : asset('images/no-image.png')}}"
                                         alt="Image from this recipe"
                                    />

                                    @error('recipe_image_end_result')
                                        <p class="text-danger text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                         
                                </div>

                            </div>
                        </div>
                    
                        <div class="p-3 text-center">
                            <button class="btn btn-primary profile-button" 
                                    type="submit"
                                   >
                                        Update this recipe
                            </button>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </main>

</x-layout>