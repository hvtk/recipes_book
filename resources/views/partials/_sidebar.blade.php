<div class="row g-0">

    <div class="col-1 fixed-top bg-primary min-vh-100"
        >
        
        <nav>
            
            <x-card-book-image/>
            
            <x-card-center>
                <a href="/recipebook/homepage" 
                    >
                    <h5 class="text-white">Recipebook</h5>
                </a>
            </x-card-center>

            <ul class="list-unstyled">

                <x-card-center class="dropdown pb-2">
                    
                    <button class="btn btn-toggle text-white border-0 dropdown-toggle"
                            id="dropdownAuthenticate"
                            data-bs-toggle="dropdown" 
                            aria-expanded="true"
                        >
                                Authenticate
                    </button>
                    
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                    >
                        <li>
                            <a href="/register" 
                                class="dropdown-item text-decoration-none rounded"
                            >
                                Register
                            </a>
                        </li>
                        <li>
                            <a href="/login" 
                                class="dropdown-item text-decoration-none rounded"
                            >
                                Login
                            </a>
                        </li>
                        <li>
                            <a href="#" 
                                class="dropdown-item text-decoration-none rounded"
                            >
                                Reset password
                            </a>
                        </li>
                    </ul>
                    
                </x-card-center>

                <x-card-center class="dropdown pb-2">

                    <button class="btn btn-toggle text-white border-0 dropdown-toggle" 
                            id="dropdownRecipe"
                            data-bs-toggle="dropdown" 
                            aria-expanded="true"
                        >
                                Recipe

                    </button>

                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                    >
                        <li>
                            <a href="/recipes/create" 
                                class="dropdown-item text-decoration-none rounded"
                            >
                                    Create
                            </a>
                        </li>
                        <li>
                            <a href="/recipes/manage" 
                                class="dropdown-item text-decoration-none rounded"
                            >
                                    Manage
                            </a>
                        </li>
                    </ul>
                    
                </x-card-center>
                
                <x-card-center class="dropdown pb-2">
                
                    <button class="btn btn-toggle text-white border-0 dropdown-toggle" 
                            id="dropdownUserprofile"
                            data-bs-toggle="dropdown" 
                            aria-expanded="true"
                        >
                                User Profile
                    </button>

                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                    >
                        <li>
                            <a href="/userprofiles/manage" 
                                class="dropdown-item text-decoration-none rounded"
                            >
                                    Manage
                            </a>
                        </li>
                        <li>
                            <a href="/userprofiles/create" 
                                class="dropdown-item text-decoration-none rounded"
                            >
                                    Create
                            </a>
                        </li>

                    </ul>
                
                </x-card-center>

                <div class="border-top mt-5 mb-2"></div>

                <x-card-center class="pb-2">
                    <form method="POST"
                            action="/logout"  
                        >

                        @csrf

                        <button type="submit"
                                class="btn text-white border-0"        
                        >
                            <span>
                            Logout
                            </span>
                        </button>
                    </form>
                </x-card-center>
                
            </ul>

        </nav>
        
    </div>

</div>
            
