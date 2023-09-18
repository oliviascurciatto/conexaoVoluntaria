<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="./icone_cv.ico" type="image/ico">
    <title>@yield('title')</title>
</head>

<body class="h-full bg-white">
    @vite('resources/css/app.css')

    <div class="min-h-full">
        <nav class="bg-white drop-shadow-xl">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-16 w-16" src="/images/logo_cv.png" alt="">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex-  items-baseline space-x-4">
                                <a href="#"
                                    class="bg-orange-500 text-white hover:bg-green-400 rounded-md px-3 py-2 text-sm font-medium"
                                    aria-current="page">Início</a>
                                <a href="#"
                                    class="text-gray-700 hover:bg-green-400 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Ongs</a>
                                <a href="#"
                                    class="text-gray-700 hover:bg-green-400 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Vagas</a>

                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-10 space-x-2">
                            <a href="#"
                                class="text-gray-700 hover:bg-green-400 hover:text-white rounded-md px-3 py-2 text-sm font-medium ml-2">Perguntas
                                Frequentes</a>
                            

                                <form>
                                    <div class="flex">
                                        <div class="relative w-full space-x-2">
                                            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-100 rounded-r-lg border-l-gray-50 border-l-2 focus:ring-blue-500 focus:border-blue-500 rounded-l-lg placeholder-gray-700 placeholder-opacity-50" placeholder="" required>
                                            <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-green-400 rounded-r-lg border hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                                </svg>
                                                <span class="sr-only">Search</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                


                            <div x-data="{ isOpen: false }" class="relative inline-block text-left">
                                <button @click="isOpen = !isOpen"
                                    class="px-4 py-2 font-semibold text-white bg-orange-500 rounded-md hover:bg-green-400 focus:outline-none focus:ring">Login
                                </button>
                                <div x-show="isOpen" @click.away="isOpen = false"
                                    class="absolute right-0 mt-2 origin-top-right bg-white border rounded-md shadow-lg">
                                    <div class="py-1" role="menu" aria-orientation="vertical"
                                        aria-labelledby="options-menu">
                                        <a href="{{ route('login-ong', ['id'=>1]) }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                            role="menuitem">Ong</a>
                                        <a href="{{ route('login-voluntario', ['id'=>1]) }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                            role="menuitem">Voluntário</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                            role="menuitem">Cadastro</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div>
            @yield('content')
        </div>
        
        <footer class="bg-white">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-400 lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">Conexão Voluntária © 2023</span>
            </div>
        </footer>


</body>

</html>
