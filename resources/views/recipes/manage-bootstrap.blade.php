<x-layout-bootstrap>

    <!-- Custom styles for this template -->
    <link href="{{ url('/css/recipeCreate.css') }}" rel="stylesheet"/>

    <main class="col align-self-center py-3">
        <div class="body-recipeCreate">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">

                    <div class="d-flex flex-column align-items-center text-center">
                        <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <span class="font-weight-bold">
                            {{ auth()->user()->name }} 
                        </span>
                        <span class="text-black-50">
                            {{ auth()->user()->email }} 
                        </span>
                    </div>
                   
                    <div class="text-center p-2">
                        <h4 >
                                Manage Recipes
                        </h4>
                    </div>

                        <div class="col-md-12">

                            <div class="p-3 py-4">

                                <table class="col-md-12">

                                    <tbody class="d-flex flex-column align-items-center text-center">
                        
                                        @unless($recipes->isEmpty())
                                        @foreach ($recipes as $recipe)
                                            
                                        <tr class="border-gray-300">
                                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                                <a href="/recipes/{{ $recipe->id }}">
                                                        {{ $recipe->recipe_title }}
                                                </a>
                                            </td>
                        
                                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                                <a class="text-blue-400 px-6 py-2 rounded-xl"
                                                    href="/recipes/{{ $recipe->id }}/edit"
                                                    >
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                        Edit
                                                </a>
                                            </td>
                        
                                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">  
                                                <form method="POST"
                                                        action="/recipes/{{ $recipe->id }}"  
                                                    >
                                                    @csrf
                                                    @method('DELETE') 
                                                    <button class="text-red-500">
                                                        <i class="fa-solid fa-trash">
                                                        </i>
                                                            Delete
                                                    </button>
                                                </form>
                                            </td>
                        
                                        </tr>
                        
                                        @endforeach
                                        @else
                        
                                        <tr class="border-gray-300">
                                            <td class=class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                                <p class="text-center">
                                                    No Recipes Found!
                                                </p>
                                            </td>
                                        </tr>
                        
                                        @endunless
                        
                                    </tbody>
                        
                                </table> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout-bootstrap>

