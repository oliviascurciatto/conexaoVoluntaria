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
                                <a href="{{ route('home-ong', ['id'=>1]) }}"
                                    class="bg-orange-500 text-white hover:bg-green-400 rounded-md px-3 py-2 text-sm font-medium"
                                    aria-current="page">Início</a>
                                <a href="#"
                                    class="text-gray-700 hover:bg-green-400 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Ongs</a>
                                <a href="{{ route('listar-vaga-ong') }}"
                                    class="text-gray-700 hover:bg-green-400 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Vagas</a>
                                <a href="{{ route('listar-campanha-ong', ['id'=>1]) }}"
                                    class="text-gray-700 hover:bg-green-400 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Campanhas</a>

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
                            <button type="button"
                                class="relative rounded-full bg-green-400 p-1 text-gray-700 hover:text-black focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>

                            
                                
                           
                            <div class="ml-3 relative" x-data="{ dropdown: false }">
                                <div>
                                    <button x-on:click="dropdown = ! dropdown" type="button"
                                        class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="false">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                            src="/images/apae_perfil.png">
                                    </button>
                                </div>
                                <div x-show="dropdown"
                                    class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    @if (isset($ong))
                                    <a href="{{ route('perfil-ong.show', ['ong'=>$ong->id]) }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="perfil">Perfil</a> 
                                        @endif 
                                    <a href="{{ route('edit-perfil-ong.show', ['id'=>1]) }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="edit-perfil">Editar Perfil</a>

                                    <a href="{{ route('criar-vaga.create') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="criar-vaga">Criar Vaga</a>
                                    
                                        <a href="{{ route('criar-campanha.create') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="criar-campanha">Criar Campanha</a>
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <a href="{{ route('login-ong.destroy', ['id'=>1]) }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="sair">Sair</a>
                                        </form>

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
