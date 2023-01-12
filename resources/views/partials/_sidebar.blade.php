<!-- Group of symbols for this template -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="book" 
            viewBox="0 0 16 16"
        >
        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
    </symbol>
</svg>

<div class="d-flex flex-column fixed-top px-sm-2 bg-primary"
     style="width: 200px"
    >
    <div class="justify-content-start align-items-center px-3 pt-2 min-vh-100">
        <nav>
            <a href="/recipebook/homepage" 
            class="align-items-center pb-3 mb-md-0 me-md-auto text-white"
            >
                <svg class="bi pe-none me-2" 
                     width="30" 
                     height="24"
                    >
                    <use xlink:href="#book"/>
                </svg>
                <span class="fs-5 d-none d-sm-inline">Recipebook</span>
            </a>

            <ul class="list-unstyled ps-0">

                <div class="dropdown pb-2">
                    
                    <button class="btn btn-toggle text-white rounded border-0 dropdown-toggle"
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
                            class="dropdown-item d-inline-flex text-decoration-none rounded"
                            >
                                Register
                            </a>
                        </li>
                        <li>
                            <a href="/login" 
                            class="dropdown-item d-inline-flex text-decoration-none rounded"
                            >
                                Login
                            </a>
                        </li>
                        <li>
                            <a href="#" 
                            class="dropdown-item d-inline-flex text-decoration-none rounded"
                            >
                                Reset password
                            </a>
                        </li>
                    </ul>
                    
                </div>

                <div class="dropdown pb-2">

                    <button class="btn btn-toggle align-items-center text-white rounded border-0 dropdown-toggle" 
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
                               class="dropdown-item d-inline-flex text-decoration-none rounded"
                              >
                                    Create
                            </a>
                        </li>
                        <li>
                            <a href="/recipes/manage" 
                               class="dropdown-item d-inline-flex text-decoration-none rounded"
                              >
                                    Manage
                            </a>
                        </li>
                    </ul>
                    
                </div>
                
                <div class="dropdown pb-2">
                
                    <button class="btn btn-toggle align-items-center text-white rounded border-0 dropdown-toggle" 
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
                               class="dropdown-item d-inline-flex text-decoration-none rounded"
                              >
                                    Manage
                            </a>
                        </li>
                        <li>
                            <a href="/userprofiles/create" 
                               class="dropdown-item d-inline-flex text-decoration-none rounded"
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
                                class="btn align-items-center text-white rounded border-0"        
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
       
