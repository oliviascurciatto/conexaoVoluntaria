<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="./icone_cv.ico" type="image/ico">
    <title>Conexão Voluntária</title>
</head>

<body class="h-full">
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
                        <div class="ml-4 flex items-center md:ml-10">
                            <a href="#"
                                class="text-gray-700 hover:bg-orange-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium ml-2">Perguntas
                                Frequentes</a>
                            <a href="#"
                                class="text-gray-700 hover:bg-orange-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium mr-3">Busca</a>

                            <div x-data="{ isOpen: false }" class="relative inline-block text-left">
                                <button @click="isOpen = !isOpen"
                                    class="px-4 py-2 font-semibold text-white bg-orange-500 rounded-md hover:bg-green-300 focus:outline-none focus:ring">Login
                                </button>
                                <div x-show="isOpen" @click.away="isOpen = false"
                                    class="absolute right-0 mt-2 origin-top-right bg-white border rounded-md shadow-lg">
                                    <div class="py-1" role="menu" aria-orientation="vertical"
                                        aria-labelledby="options-menu">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                            role="menuitem">Ong</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                            role="menuitem">Voluntário</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <section
            class="bg-center bg-no-repeat bg-[url('https://img.freepik.com/fotos-premium/grupo-de-diversas-pessoas-com-bracos-e-maos-levantadas-em-direcao-a-coracoes-pintados-a-mao-doacao-de-caridade-trabalho-voluntario-assistencia-de-suporte-comunidade-multicultural-pessoas-diversidade-generative-ai_438099-21704.jpg?w=2000')] bg-gray-700 bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                    O poder de fazer a diferença!</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">"A solidariedade é o
                    sentimento que melhor expressa o respeito pela dignidade humana." Franz Kafka</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg bg-green-300 hover:bg-white focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Junte-se a nós!
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex justify-center hover:text-green-300 items-center py-3 px-5 text-base font-medium text-center text-green-300 rounded-lg border border-green-300 hover:bg-white focus:ring-4 focus:ring-gray-400">
                        Saiba mais.
                    </a>
                </div>
            </div>
        </section>

</body>

</html>
