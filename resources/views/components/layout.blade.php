<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>

    <title>Recipebook</title>

  </head>

   {{-- Compiled dark classes from Tailwind  --}}
  <link href="{{ url('/css/layout.css') }}" rel="stylesheet">

  <div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

      <header>
        
        <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
          <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-blue-800 dark:bg-gray-800 border-none">
          
          <x-layout.user />

          </div>  
          <div class="flex justify-between items-center h-14 bg-blue-800 dark:bg-gray-800 header-right">
          
            <x-layout.search />

            <ul class="flex items-center">
              
              <x-layout.dark-light />
              
              <x-vertical-line />

              @auth
              
              <x-layout.welcome />

              <x-layout.manage-recipes />

              <x-layout.logout />
            
              @else

              <x-layout.register />
            
              <x-layout.login />
              
              @endauth

            </ul>
          </div>
        </div>

      </header>

      <x-layout.sidebar />
      
      <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        
        <x-flash-message/>

        <body>

          <main>
            {{-- VIEW OUTPUT --}}
            {{ $slot }}
          </main>

          <x-layout.footer />

        </body>

      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
  
  <script>
    const setup = () => {
      const getTheme = () => {
        if (window.localStorage.getItem('dark')) {
          return JSON.parse(window.localStorage.getItem('dark'))
        }
        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
      }

      const setTheme = (value) => {
        window.localStorage.setItem('dark', value)
      }

      return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
          this.isDark = !this.isDark
          setTheme(this.isDark)
        },
      }
    }
  </script>
</html>