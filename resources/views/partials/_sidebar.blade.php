<div class="row">

    <div class="col-1 fixed-top bg-primary min-vh-100"
        >
        
        <nav>
            
            <x-book-image-card />
            
            <div class="d-flex justify-content-center align-items-center">
                <a href="/recipebook/homepage" 
                    >
                    <h5 class="text-white">Recipebook</h5>
                </a>
            </div>

            <ul class="list-unstyled">

                <div class="dropdown pb-2">
                    
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
                    
                </div>

                <div class="dropdown pb-2">

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
                    
                </div>
                
                <div class="dropdown pb-2">
                
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
                
                </div>

                <div class="border-top mt-5 mb-2"></div>

                <div class="pb-2">
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
                </div>
                
            </ul>

        </nav>
        
    </div>

</div>
            
