<x-layout>

    <div class="row m-3">

        <div class="col-11 offset-1 bg-secondary min-vh-100"
            >

            <x-card-center class="row min-vh-100">
                
                <div class="col-2">
                    <form method="POST"
                          action="/users/authenticate"
                        >
                        @csrf

                        <x-card-book-image />

                        <x-card-center class="h2">
                            Please sign in
                        </x-card-center>

                        <div class="form-control">

                            <input type="email" 
                                   name="email" 
                                   class="form-control" 
                                   id="floatingInput" 
                                   placeholder="name@example.com" 
                                   value="{{ old('email') }}"
                                >
                            <label for="floatingInput">
                                Email address
                            </label>

                            @error('email')
                            <p class="text-danger text-xs mt-1">
                            {{ $message }}
                            </p>
                            @enderror 

                        </div>

                        <div class="form-control">

                            <input type="password" 
                                   name="password" 
                                   class="form-control" 
                                   id="floatingPassword" 
                                   placeholder="Password"
                                   value="{{ old('password') }}"
                                >
                            <label for="floatingPassword">
                                Password
                            </label>
                            
                            @error('password')
                            <p class="text-danger text-xs mt-1">
                              {{ $message }}
                            </p>
                            @enderror 

                        </div>

                        <x-card-center class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </x-card-center>

                        <x-card-center>

                            <button class="btn btn-lg btn-primary" 
                                    type="submit"
                                >
                                        Sign in
                            </button>

                        </x-card-center>

                        <x-card-center class="mt-2">
                            <p>
                                Don't have an account?
                                <a class="text-primaryblue-600"
                                   href="/register">
                                    Register
                                </a>
                            </p>
                        </x-card-center>

                        <x-card-copyright /> 
                              
                    </form>

                </div>

            </x-card-center>

        </div>

    </div>

</x-layout>