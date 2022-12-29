<x-layout>

    <x-card class="p-10 max-w-lg mx-auto mt-24">
       
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                REGISTER
            </h2>
            <p class="mb-4">Make a account to login into your recipe book</p>
        </header>
        
        <form class="p-6 flex flex-col justify-center"
              method="POST" 
              action="/users"
            >
            @csrf
            <div class="flex flex-col">
                <label for="name" 
                       class="hidden"
                    >
                        Full Name
                </label>
                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                       type="name" 
                       name="name" 
                       id="name" 
                       placeholder="Full Name" 
                       value="{{ old('name') }}"
                />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">
                         {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex flex-col mt-2">
                 <label for="email" 
                        class="hidden"
                    >
                        Email
                 </label>
                 <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                        type="email" 
                        name="email" 
                        id="email" 
                        placeholder="Email" 
                        value="{{ old('email') }}"
                  />

                  @error('email')
                     <p class="text-red-500 text-xs mt-1">
                       {{ $message }}
                    </p>
                  @enderror      
            </div>

            <div class="flex flex-col mt-2">
                <label for="password" 
                       class="hidden"
                   >
                       Password
                </label>
                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                       type="password" 
                       name="password" 
                       id="password" 
                       placeholder="Password" 
                       value="{{ old('password') }}"
                 />

                 @error('password')
                    <p class="text-red-500 text-xs mt-1">
                      {{ $message }}
                    </p>
                 @enderror      
            </div>

            <div class="flex flex-col mt-2">
                <label for="password2" 
                       class="hidden"
                   >
                       Confirm Password
                </label>
                <input class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                       type="password" 
                       name="password_confirmation" 
                       id="password_confirmation" 
                       placeholder="Password_confirmation" 
                       value="{{ old('password_confirmation') }}"
                 />

                 @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">
                      {{ $message }}
                    </p>
                 @enderror      
            </div>

            <button class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300"
                    type="submit" 
                   >
                    Sign Up
            </button>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a class="text-blue-600"
                       href="/login">
                        Login
                    </a>
                </p>
            </div>
                    
        </form>
        
    </x-card>

</x-layout>