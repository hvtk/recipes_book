<header>
    <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
      <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-blue-800 dark:bg-gray-800 border-none">
        <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden"
             src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg"
        />
        <span class="hidden md:block">
          ADMIN
        </span>
      </div>
      <div class="flex justify-between items-center h-14 bg-blue-800 dark:bg-gray-800 header-right">
        <form action="/recipes">
          <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
              <button class="outline-none focus:outline-none"
                      type="submit"
                    >
                    <svg class="w-5 text-gray-600 h-5 cursor-pointer" 
                         fill="none" 
                         stroke-linecap="round" 
                         stroke-linejoin="round" 
                         stroke-width="2" 
                         stroke="currentColor" 
                         viewBox="0 0 24 24"
                        >
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                            >
                        </path>
                      </svg>
              </button>
              <input type="text" 
                     name="search" 
                     id="" 
                     placeholder="Search" 
                     class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent"
              />
          </div>
        </form>
        <ul class="flex items-center">
          <li>
            <button aria-hidden="true"
                    @click="toggleTheme"
                    class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-200 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none"
                  >
                  <svg x-show="isDark"
                       width="24"
                       height="24"
                       class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                       xmlns="http://www.w3.org/2000/svg"
                       fill="none"
                       viewBox="0 0 24 24"
                       stroke=""
                      >
                      <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                      />
                  </svg>
                  <svg x-show="!isDark"
                       width="24"
                       height="24"
                       class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                       xmlns="http://www.w3.org/2000/svg"
                       fill="none"
                       viewBox="0 0 24 24"
                       stroke=""
                      >
                      <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                      />
                  </svg>
            </button>
          </li>
          <li>
            <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700">
            </div>
          </li>
          @auth
          <li>
            <span class="inline-flex mr-1"
                >
                <svg class="w-5 h-5" 
                      fill="none" 
                      stroke="currentColor" 
                      viewBox="0 0 24 24" 
                      xmlns="http://www.w3.org/2000/svg"
                    >
                    <path stroke-linecap="round" 
                          stroke-linejoin="round" 
                          stroke-width="2" 
                          d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                        >
                    </path>
                </svg>
                   Welcome {{ auth()->user()->name }}
            </span>
          </li>
          <li>
            <a href="/recipes/manage" 
               class="flex items-center mr-4 hover:text-blue-100"
              >
              <span class="inline-flex mr-1"
                  >
                  <svg class="w-5 h-5" 
                       fill="none" 
                       stroke="currentColor" 
                       viewBox="0 0 24 24" 
                       xmlns="http://www.w3.org/2000/svg"
                      >
                      <path stroke-linecap="round" 
                            stroke-linejoin="round" 
                            stroke-width="2" 
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                          >
                      </path>
                  </svg>
              </span>

              Manage Recipes

            </a>
          </li>
          @else
          <li>
            <a href="/register" 
               class="flex items-center mr-4 hover:text-blue-100"
              >
              <span class="inline-flex mr-1"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" 
                       fill="none" 
                       viewBox="0 0 24 24" 
                       stroke-width="1.5" 
                       stroke="currentColor" 
                       class="w-5 h-5"
                      >
                      <path stroke-linecap="round" 
                            stroke-linejoin="round"
                            d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z"
                          />
                  </svg>
              </span>

              Register

            </a>
          </li>
          <li>
            <a href="/login" 
               class="flex items-center mr-4 hover:text-blue-100"
              >
              <span class="inline-flex mr-1"
                  >
                  <svg class="w-5 h-5" 
                       xmlns="http://www.w3.org/2000/svg"
                       fill="none" 
                       viewBox="0 0 24 24" 
                       stroke-width="1.5" 
                       stroke="currentColor"
                      >
                      <path stroke-linecap="round" 
                            stroke-linejoin="round" 
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"
                          />
                  </svg>
                  
              </span>

              Login

            </a>
          </li>
          <li>
            <form class="flex items-center mr-4 hover:text-blue-100"
                  method="POST"
                  action="/logout"  
                >
                @csrf
                <button type="submit">
          
                  <span class="inline-flex mr-1"
                      >
                      <svg class="w-5 h-5" 
                          fill="none" 
                          stroke="currentColor" 
                          viewBox="0 0 24 24" 
                          stroke-width="1.5"
                          xmlns="http://www.w3.org/2000/svg"
                          >
                          <path stroke-linecap="round" 
                                stroke-linejoin="round" 
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                              >
                          </path>
                      </svg>

                      Logout
                      
                  </span>
                </button>
            </form>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </header>
