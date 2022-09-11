<li>
    <div class="flex items-center mr-4">
        <span class="inline-flex mr-1"
            >
            <svg class="w-5 h-5" 
                fill="none" 
                stroke="currentColor" 
                stroke-width="1.5" 
                viewBox="0 0 24 24" 
                xmlns="http://www.w3.org/2000/svg"
                >
                <path stroke-linecap="round" 
                    stroke-linejoin="round" 
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                    >
                </path>
            </svg>
            Welcome {{ auth()->user()->name }}
        </span>
    </div>
</li>