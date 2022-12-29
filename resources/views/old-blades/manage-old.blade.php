<x-layout-bootstrap>

    <x-card class="p-10">  

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Manage User Profile
            </h2>
            <p class="mb-4">
                To manage the user profile (look,edit,delete)
            </p>
        </header>
        
        <table class="w-full table-auto rounded-sm">
            
            <tbody>

                @unless($userProfile->isEmpty())
                @foreach ($userProfile as $userProfile)
                    
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="/userprofiles/{{ $userProfile->id }}">
                                 {{ auth()->user()->email }} 
                        </a>
                    </td>

                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a class="text-blue-400 px-6 py-2 rounded-xl"
                           href="/userprofiles/{{ $userProfile->id }}/edit"
                          >
                            <i class="fa-solid fa-pen-to-square"></i>
                                Edit
                        </a>
                    </td>

                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">  
                        <form method="POST"
                                action="/userprofiles/{{ $userProfile->id }}"  
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
                            No User Profiles Found!
                        </p>
                    </td>
                </tr>

                @endunless

            </tbody>

        </table>  

    </x-card>

</x-layout-bootstrap>