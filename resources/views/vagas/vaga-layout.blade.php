<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="./icone_cv.ico" type="image/ico">
    <title>Perfil Ong</title>
</head>

<body class="h-full">
    @vite('resources/css/app.css')

    <div class="bg-gray-200 min-h-full">
        {{-- ---------------Nav bar----------------------- --}}
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
                                    class="bg-orange-500 text-white hover:bg-green-300 rounded-md px-3 py-2 text-sm font-medium"
                                    aria-current="page">Início</a>
                                <a href="#"
                                    class="text-gray-700 hover:bg-orange-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Ongs</a>
                                <a href="#"
                                    class="text-gray-700 hover:bg-orange-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Vagas</a>

                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-10 space-x-2">
                            <a href="#"
                                class="text-gray-700 hover:bg-orange-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium ml-2">Perguntas
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
                                class="relative rounded-full bg-green-400 p-1 text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-orange-500">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="ml-3 relative" x-data="{ dropdown: false }">
                                <div>
                                    <button x-on:click="dropdown = ! dropdown" type="button"
                                        class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="false">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
                                    </button>
                                </div>
                                <div x-show="dropdown"
                                    class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Your Profile</a>

                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>

                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Sign out</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="items-center my-6 flex flex-col 2xl:flex-row space-y- 2xl:space-y-0 2xl:space-x-4 bg-gray-200">
            <div class="w-8/12 flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
                    <div class="w-full flex flex-col 2xl:w-1/3">
                        <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
                            
                            <h4 class="mt-0 mb-6 text-xl text-gray-700 underline font-bold text-center">Estágio • Pedagogo</h4>
                                
                                    <h4 class="text-xl text-gray-700 font-bold">Informações</h4>
                                    <ul class="mt-2 text-gray-700">
                
                                        <li class="flex border-b py-2">
                                            <span class="font-bold w-24">Quantidade:</span>
                                            <span class="text-gray-700">2</span>
                                        </li>
                                        <li class="flex border-b py-2">
                                            <span class="font-bold w-25">Inscrições até:</span>
                                            <span class="text-gray-700">10/09/2023</span>
                                        </li>
                                    </ul>
                                    <h4 class="mt-8 text-xl text-gray-700 font-bold">Descrição</h4>   
                            <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                                voluptates obcaecati numquam error et ut fugiat asperiores. Sunt nulla ad incidunt
                                laboriosam,
                                laudantium est unde natus cum numquam, neque facere. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut, magni odio magnam commodi sunt ipsum eum! Voluptas eveniet aperiam at
                                maxime, iste id dicta autem odio laudantium eligendi commodi distinctio!</p>

                                <a href="#"
                                class="mt-8 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-orange-500 dark:hover:bg-green-500 dark:focus:ring-green-500">
                                Candidatar-se
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
        
                    </div>
                </div>
        </div>

       
</body>

</html>