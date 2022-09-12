<div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-800 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
  <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
    <div class="flex flex-col py-4 space-y-1">
      <div class="px-5 hidden md:block">
        <div class="flex flex-row items-center h-8">
            <div class="text-sm font-light tracking-wide text-gray-400 uppercase">
              Main
            </div>
        </div>
      </div>
      
      <a href="/recipes" 
          class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6"
        >
        <span class="inline-flex justify-center items-center ml-4">
          <svg class="w-5 h-5" 
                fill="none"
                stroke="currentColor" 
                viewBox="0 0 24 24" 
                xmlns="http://www.w3.org/2000/svg"
              >
              <path stroke-linecap="round" 
                    stroke-linejoin="round" 
                    stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  >
              </path>
          </svg>
        </span>
        <span class="ml-2 text-sm tracking-wide truncate">
          Homepage
        </span>
      </a>
      

      
      <nav class="relative flex-1 w-64 px-3 space-y-2 overflow-y-hidden hover:overflow-y-auto">
        
        <!-- Authentication links -->
        <div x-data="{ isActive: false, open: false}">
          <a
            href="#"
            @click="$event.preventDefault(); open = !open"
            class="flex items-center p-2 transition-colors text-white-600 hover:text-white-800 hover:bg-blue-800 dark:hover:bg-gray-600"
            :class="{'bg-blue-800 dark:bg-gray-600': isActive || open}"
            role="button"
          >
            <span>
              <svg
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                />
              </svg>
            </span>
            <span class="ml-2 text-sm"> Authentication </span>
            <span class="ml-auto">
              <!-- active class 'rotate-180' -->
              <svg
                class="w-4 h-4 transition-transform transform"
                :class="{ 'rotate-180': open }"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </span>
          </a>
          <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" ">
            <a
              href="/register"
              role="menuitem"
              class="block p-2 text-sm flex items-center mr-4 hover:text-blue-100"
            >
              Register
            </a>
            <a
              href="/login"
              role="menuitem"
              class="block p-2 text-sm flex items-center mr-4 hover:text-blue-100"
            >
              Login
            </a>
            <a
              href="#"
              role="menuitem"
              class="block p-2 text-sm flex items-center mr-4 hover:text-blue-100"
            >
              Reset password
            </a>
          </div>
        </div>
        <!-- Authentication links -->

        <!-- Recipe links -->
        <div x-data="{ isActive: false, open: false}">
          <a
            href="#"
            @click="$event.preventDefault(); open = !open"
            class="flex items-center p-2 transition-colors text-white-600 hover:text-white-800 hover:bg-blue-800 dark:hover:bg-gray-600"
            :class="{'bg-blue-800 dark:bg-gray-600': isActive || open}"
            role="button"
          >
            <span>
              <svg
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                />
              </svg>
            </span>
            <span class="ml-2 text-sm"> Recipe </span>
            <span class="ml-auto">
              <!-- active class 'rotate-180' -->
              <svg
                class="w-4 h-4 transition-transform transform"
                :class="{ 'rotate-180': open }"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </span>
          </a>
          <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" ">
            <a
              href="/register"
              role="menuitem"
              class="block p-2 text-sm flex items-center mr-4 hover:text-blue-100"
            >
              Create
            </a>
            <a
              href="/login"
              role="menuitem"
              class="block p-2 text-sm flex items-center mr-4 hover:text-blue-100"
            >
              Edit
            </a>
            <a
              href="#"
              role="menuitem"
              class="block p-2 text-sm flex items-center mr-4 hover:text-blue-100"
            >
              Manage
            </a>
          </div>
        </div>
        <!-- Recipe links -->

        <div class="px-3 hidden md:block">
          <div class="flex flex-row items-center mt-5 h-8">
              <div class="text-sm font-light tracking-wide text-gray-400 uppercase">
                Settings
              </div>
          </div>
        </div>

        <!-- Profile links -->
        <div x-data="{ isActive: false, open: false}">
          <a
            href="#"
            @click="$event.preventDefault(); open = !open"
            class="flex items-center p-2 transition-colors text-white-600 hover:text-white-800 hover:bg-blue-800 dark:hover:bg-gray-600"
            :class="{'bg-blue-800 dark:bg-gray-600': isActive || open}"
            role="button"
          >
            <span>
              <svg
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                />
              </svg>
            </span>
            <span class="ml-2 text-sm"> Profile </span>
            <span class="ml-auto">
              <!-- active class 'rotate-180' -->
              <svg
                class="w-4 h-4 transition-transform transform"
                :class="{ 'rotate-180': open }"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </span>
          </a>
          <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" ">
            <a
              href="/register"
              role="menuitem"
              class="block p-2 text-sm flex items-center mr-4 hover:text-blue-100"
            >
              Create
            </a>
            <a
              href="/login"
              role="menuitem"
              class="block p-2 text-sm flex items-center mr-4 hover:text-blue-100"
            >
              Edit
            </a>
            <a
              href="#"
              role="menuitem"
              class="block p-2 text-sm flex items-center mr-4 hover:text-blue-100"
            >
              Manage
            </a>
          </div>
        </div>
        <!-- Profile links -->

      </nav>

      <div>
        <form class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6"
              method="POST"
              action="/logout"  
            >
            @csrf
            <button type="submit">
      
              <span class="inline-flex justify-center items-center ml-4"
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
                <span class="ml-2 text-sm tracking-wide truncate">
                  Logout
                </span>
                  
              </span>
            </button>
        </form>
      </div>
  
    </div>
    <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">
      Copyright @2022
    </p>
  </div>
</div>

