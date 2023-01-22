<x-layout>

    <div class="row m-3">

        <div class="col-11 offset-1 bg-secondary min-vh-100"
            >

            <x-card-center class="row min-vh-100">
                
                <div class="col-2">
                    <form method="POST"
                          action="/users"
                        >
                        @csrf

                        <x-book-image-card />

                        <x-card-center class="h2">
                            Please register
                        </x-card-center>

                        <div class="form-control">

                            <input type="name" 
                                   name="name" 
                                   class="form-control" 
                                   id="floatingInput" 
                                   placeholder="Full Name" 
                                   value="{{ old('name') }}"
                                >
                            <label for="floatingInput">
                                Full Name
                            </label>

                            @error('name')
                            <p class="text-danger text-xs mt-1">
                            {{ $message }}
                            </p>
                            @enderror 

                        </div>

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

                        <div class="form-control">

                            <input type="password" 
                                   name="password_confirmation" 
                                   class="form-control" 
                                   id="floatingPasswordConfirmation" 
                                   placeholder="Password Confirmation"
                                   value="{{ old('password_confirmation') }}"
                                >
                            <label for="floatingPasswordConfirmation">
                                Password
                            </label>
                            
                            @error('password_confirmation')
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
                                        Sign up
                            </button>

                        </x-card-center>

                        <x-card-center class="mt-2">
                            <p>
                                Already have an account?
                                <a class="text-primary"
                                   href="/login">
                                    Sign in
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