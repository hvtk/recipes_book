<x-layout-bootstrap>

    <!-- Custom styles for this template -->
    <link href="{{ url('/css/recipeCreate.css') }}" rel="stylesheet"/>

    <main class="col align-self-center py-3">
        <div class="body-recipeCreate">
            <div class="container rounded bg-white mt-5 mb-5">
               
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
                            Manage User profile
                    </h4>
                </div>

                <div class="p-3 py-4">

                    <table class="table">

                        <tbody>

                            <tr class="text-left">
                                <th>
                                    User
                                </th>
                            </tr>
                        
                            @unless($userProfile->isEmpty())
                            @foreach ($userProfile as $userProfile)
                                
                            <tr>
                                <td>
                                    <a href="/userprofiles/{{ $userProfile->id }}">
                                            {{ auth()->user()->email }}
                                    </a>
                                </td>
            
                                <td class="text-center">
                                    <a href="/userprofiles/{{ $userProfile->id }}/edit"
                                        >
                                            Edit
                                    </a>
                                </td>
            
                                <td class="justify-content-right">  
                                    <form method="POST"
                                          action="/userprofiles/{{ $userProfile->id }}"  
                                        >
                                        @csrf
                                        @method('DELETE') 
                                        <button>
                                                Delete
                                        </button>
                                    </form>
                                </td>
            
                            </tr>
            
                            @endforeach
                            @else
            
                            <tr>
                                <td>
                                    <p class="text-center">
                                        No User Profiles Found!
                                    </p>
                                </td>
                            </tr>
            
                            @endunless
            
                        </tbody>
            
                    </table> 
                </div> 
            </div>
        </div>
    </main>

</x-layout-bootstrap>