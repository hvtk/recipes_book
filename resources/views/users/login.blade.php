<x-layout>

    <!-- Custom styles for this template -->
    <link href="{{ url('/css/signin-bootstrap.css') }}" rel="stylesheet"/>
    
    <!-- Group of symbols for this template -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="book" viewBox="0 0 16 16">
            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
        </symbol>
    </svg>

    <main  class="col align-self-center py-3">

        <div class="body-signin">

            <div class="container text-center">
                
                <div class="form-signin w-100 m-auto">
                    <form method="POST"
                          action="/users/authenticate"
                        >
                        @csrf

                        <svg class="bi pe-none me-2" 
                             width="30" 
                             height="24"
                            >
                            <use xlink:href="#book"/>
                        </svg>

                        <h1 class="h3 mb-3 fw-normal">
                            Please sign in
                        </h1>

                        <div class="form-floating">

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

                        <div class="form-floating">

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

                        <div class="checkbox mb-3">
                            <label>
                            <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" 
                                type="submit"
                            >
                                    Sign in
                        </button>

                        <div class="mt-8">
                            <p>
                                Don't have an account?
                                <a class="text-primaryblue-600"
                                   href="/register">
                                    Register
                                </a>
                            </p>
                        </div>

                        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>

                    </form>
                </div>

            </div>

        </div>

    </main>

</x-layout>