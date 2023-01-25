<x-layout>

    <div class="row m-3">

        <div class="col-11 offset-1 bg-secondary min-vh-100"
            >

            <div class="row rounded bg-white m-5 min-vh-100">
    
                <form method="POST"
                    action="/recipes"  
                    enctype="multipart/form-data"  
                    >  
                    @csrf

                    <div class="row align-items-center min-vh-100">

                        <div class="col-3">
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

                        <div class="col-6">

                            <div class="text-center p-2">
                                <h4 >
                                        Create a new recipe
                                </h4>
                            </div>

                            <div class="col-12">

                                <label class="labels"
                                    for="recipe_title"
                                    >
                                        Recipe title
                                </label>
                                <input type="text" 
                                    class="form-control" 
                                    name="recipe_title" 
                                    id="inputForm"
                                    placeholder="Recipe title" 
                                    value="{{ old('recipe_title') }}"
                                />

                                @error('recipe_title')
                                    <p class="text-danger text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <div class="col-12 mt-2">

                                <label class="labels"
                                    for="recipe_section" 
                                    >
                                        Recipe section
                                </label>
                                <select type="text" 
                                        class="form-select" 
                                        name="recipe_section" 
                                        id="selectForm"
                                    >
                                        <option selected>
                                            -- Open this select menu to choose the section --
                                        </option>
                                        <option value="backing"> 
                                            Backing
                                        </option>
                                        <option value="roasting"> 
                                            Roasting
                                        </option>
                                        <option value="cooking"> 
                                            Cooking
                                        </option>
                                        <option value="frying"> 
                                            Frying
                                        </option>
                                        <option value="warming up"> 
                                            Warming up
                                        </option>

                                        {{ old('recipe_section') }}"

                                </select>

                                @error('recipe_section')
                                    <p class="text-danger text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <div class="d-flex flex-row mt-2 gap-4">

                                <div class="row">

                                    <table class="table col-12"
                                        id="kitchenwareAddRemove" 
                                        >
                                        <thead>
                                            <tr>
                                            <th>
                                                Kitchenware for this recipe
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody-kitchenwareAddRemove">
                                            <tr id="tr-kitchenwareAddRemove">
                                                <td id="td-kitchenwareAddRemove">
                                                    <input type="text"
                                                        name="kitchenware[]" 
                                                        placeholder="Enter kitchenware"
                                                        class="form-control"
                                                        value="{{ old('kitchenware[]') }}"
                                                        />
                                                    @error('kitchenware[]')
                                                        <p class="text-danger text-xs mt-1">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </td>
                                                <td>
                                                    <button type="button"
                                                            name="add"
                                                            id="add-button"
                                                            class="btn btn-success"
                                                        >
                                                            Add extra input field.
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="row">

                                    <div class="text-center mt-2">
                                        <p>
                                            Ingredients for this recipe
                                        </p>
                                    </div>

                                    @for ($i=0; $i < 5; $i++)

                                        <div class="col-12">

                                            <label class="labels"
                                                for="ingredients-{{ $i }}" 
                                                >
                                                Ingredients #{{ $i }}
                                            </label>
                                            
                                            <input type="text" 
                                                class="form-control"
                                                name="ingredients[]"
                                                id="inputFormIngredients-{{ $i }}" 
                                                value="{{ old('ingredients.' . $i) }}"
                                            />

                                            @error('ingredients.' . $i)
                                                <p class="text-danger text-xs mt-1">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                            
                                        </div>

                                    @endfor 

                                </div>
                                
                            </div>

                            <div class="row mt-2">

                                <div class="col-6">

                                    <label class="labels"
                                        for="recipe_the_steps_to_follow" 
                                        >
                                        The steps to follow for this recipe
                                    </label>

                                    <textarea type="text" 
                                            class="form-control"
                                            name="recipe_the_steps_to_follow"
                                            id="textareaForm"
                                            placeholder="The steps to follow for this recipe" 
                                            >

                                                {{ old('recipe_the_steps_to_follow') }}

                                    </textarea>

                                    @error('recipe_the_steps_to_follow')
                                        <p class="text-danger text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                
                                </div>

                                <div class="col-6">

                                    <label class="labels"
                                        for="recipe_commentary" 
                                        >
                                        Commentary by this recipe
                                    </label>

                                    <textarea type="text" 
                                            class="form-control"
                                            name="recipe_commentary"
                                            id="textareaForm"
                                            placeholder="Commentary by this recipe" 
                                            >

                                                {{ old('recipe_commentary') }}

                                    </textarea>

                                    @error('recipe_commentary')
                                        <p class="text-danger text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                
                                </div>

                            </div>

                            <div class="row mt-2">

                                <div class="col-6">

                                    <label class="labels"
                                        for="recipe_estimated_time" 
                                        >
                                            Estimated time for this recipe
                                    </label>

                                    <input type="text" 
                                        class="form-control"
                                        name="recipe_estimated_time"
                                        id="inputForm"
                                        placeholder="Estimated time for this recipe" 
                                        value="{{ old('recipe_estimated_time') }}"
                                    />

                                    @error('recipe_estimated_time')
                                        <p class="text-danger text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                
                                </div>

                                <div class="col-6">

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
                                        value="{{ old('recipe_shelf_life') }}"
                                    />

                                    @error('recipe_shelf_life')
                                        <p class="text-danger text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                
                                </div>

                            </div>

                            <div class="col-12 mt-2">

                                <label class="labels"
                                    for="recipe_image_end_result" 
                                    >
                                    Image end result from this recipe
                                </label>

                                <input type="file" 
                                    class="form-control"
                                    name="recipe_image_end_result"
                                    id="inputForm" 
                                />

                                @error('recipe_image_end_result')
                                    <p class="text-danger text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                    
                            </div>

                            
                        </div>
                    
                        <div class="p-3 text-center">
                            <button class="btn btn-primary" 
                                    type="submit"
                                >
                                        Save Recipe
                            </button>
                        </div>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
    

    <!-- Javascript for dynamic fields kitchenware -->
    <script type="text/javascript">
    var i = 0;
    
    const kitchenwareField = document.querySelector("#add-button")
    kitchenwareField.addEventListener("click", () => {   
        i = i + 1;
        var table = document.createElement("table");
        table.setAttribute("id", "kitchenwareAddRemove");
        document.getElementById("kitchenwareAddRemove").appendChild(table);
        var tbody = document.createElement("tbody");
        tbody.setAttribute("id", "tbody-kitchenwareAddRemove");
        document.getElementById("tbody-kitchenwareAddRemove").appendChild(tbody);
        var tr = document.createElement("tr");
        tr.setAttribute("id", "tr-kitchenwareAddRemove");
        document.getElementById("tbody-kitchenwareAddRemove").appendChild(tr);
        var td = document.createElement("td");
        td.setAttribute("id", "td-kitchenwareAddRemove");
        document.getElementById("tr-kitchenwareAddRemove").appendChild(td);
        var input = document.createElement("input");
        input.setAttribute("type", "text");
        input.setAttribute("name", "kitchenware[]");
        input.setAttribute("placeholder", "Enter kitchenware");
        input.setAttribute("class", "form-control");
        document.getElementById("td-kitchenwareAddRemove").appendChild(input);
    });
    </script>

</x-layout>