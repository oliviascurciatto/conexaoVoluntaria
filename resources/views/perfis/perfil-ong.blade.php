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
                            <button type="button"
                                class="relative rounded-full bg-green-300 p-1 text-gray-700 hover:text-black focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
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


        <div class="items-center my-6 flex flex-col 2xl:flex-row space-y-8 2xl:space-y-0 2xl:space-x-8">

            <img class="h-auto max-w-md max-h-max rounded-lg shadow-xl dark:shadow-gray-800"
                src="https://www.saltodoitarare.pr.gov.br/assets/noticias/APAE.jpg" alt="image description">

            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Sobre Nós</h4>
                    <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                        voluptates obcaecati numquam error et ut fugiat asperiores. Sunt nulla ad incidunt
                        laboriosam,
                        laudantium est unde natus cum numquam, neque facere. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Ut, magni odio magnam commodi sunt ipsum eum! Voluptas eveniet aperiam at
                        maxime, iste id dicta autem odio laudantium eligendi commodi distinctio!</p>
                </div>

            </div>

            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Informações</h4>
                    <ul class="mt-2 text-gray-700">

                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Telefone:</span>
                            <span class="text-gray-700">(123) 123-1234</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">E-mail:</span>
                            <span class="text-gray-700">ong@example.com</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Endereço:</span>
                            <span class="text-gray-700">Rua Tal, 10, Bairo Tal. &nbsp; <br></span>
                            <span class="text-gray-700">Santa Fé do Sul, São Paulo</span>
                        </li>
                        <li class="flex items-center border-b py-2 space-x-2">
                            <span class="font-bold w-24">Redes:</span>
                            <a href="#" title="Facebook">
                                <svg class="w-5 h-5" id="Layer_1" data-name="Layer 1"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.86 506.86">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #1877f2;
                                            }

                                            .cls-2 {
                                                fill: #fff;
                                            }
                                        </style>
                                    </defs>
                                    <path class="cls-1"
                                        d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" title="Twitter">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333"
                                    shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                    image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm90493 110539c-6654 2976-13822 4953-21307 5835 7669-4593 13533-11870 16333-20535-7168 4239-15133 7348-23574 9011-6787-7211-16426-11694-27105-11694-20504 0-37104 16610-37104 37101 0 2893 320 5722 949 8450-30852-1564-58204-16333-76513-38806-3285 5666-5022 12109-5022 18661v4c0 12866 6532 24246 16500 30882-6083-180-11804-1876-16828-4626v464c0 17993 12789 33007 29783 36400-3113 845-6400 1313-9786 1313-2398 0-4709-247-7007-665 4746 14736 18448 25478 34673 25791-12722 9967-28700 15902-46120 15902-3006 0-5935-184-8860-534 16466 10565 35972 16684 56928 16684 68271 0 105636-56577 105636-105632 0-1630-36-3209-104-4806 7251-5187 13538-11733 18514-19185l17-17-3 2z"
                                        fill="#1da1f2"></path>
                                </svg>
                            </a>
                            <a href="#" title="LinkedIn">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333"
                                    shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                    image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm-18220 138885h28897v14814l418 1c4024-7220 13865-14814 28538-14814 30514-1 36157 18989 36157 43691v50320l-30136 1v-44607c0-10634-221-24322-15670-24322-15691 0-18096 11575-18096 23548v45382h-30109v-94013zm-20892-26114c0 8650-7020 15670-15670 15670s-15672-7020-15672-15670 7022-15670 15672-15670 15670 7020 15670 15670zm-31342 26114h31342v94013H96213v-94013z"
                                        fill="#0077b5"></path>
                                </svg>
                            </a>
                            <a href="#" title="Github">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="0"
                                    height="0" shape-rendering="geometricPrecision"
                                    text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                    fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 640 640">
                                    <path
                                        d="M319.988 7.973C143.293 7.973 0 151.242 0 327.96c0 141.392 91.678 261.298 218.826 303.63 16.004 2.964 21.886-6.957 21.886-15.414 0-7.63-.319-32.835-.449-59.552-89.032 19.359-107.8-37.772-107.8-37.772-14.552-36.993-35.529-46.831-35.529-46.831-29.032-19.879 2.209-19.442 2.209-19.442 32.126 2.245 49.04 32.954 49.04 32.954 28.56 48.922 74.883 34.76 93.131 26.598 2.882-20.681 11.15-34.807 20.315-42.803-71.08-8.067-145.797-35.516-145.797-158.14 0-34.926 12.52-63.485 32.965-85.88-3.33-8.078-14.291-40.606 3.083-84.674 0 0 26.87-8.61 88.029 32.8 25.512-7.075 52.878-10.642 80.056-10.76 27.2.118 54.614 3.673 80.162 10.76 61.076-41.386 87.922-32.8 87.922-32.8 17.398 44.08 6.485 76.631 3.154 84.675 20.516 22.394 32.93 50.953 32.93 85.879 0 122.907-74.883 149.93-146.117 157.856 11.481 9.921 21.733 29.398 21.733 59.233 0 42.792-.366 77.28-.366 87.804 0 8.516 5.764 18.473 21.992 15.354 127.076-42.354 218.637-162.274 218.637-303.582 0-176.695-143.269-319.988-320-319.988l-.023.107z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-4 w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-700 font-bold">Vagas</h4>

                    <div
                        class="mt-2 max-w-sm rounded-lg shadow-2xl  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-100 dark:hover:bg-gray-300">
                        <a href="#">
                            <img class="rounded-t-lg"
                                src="https://editalconcursosbrasil.com.br/wp-content/uploads/2019/02/pedagogo.jpg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-700">
                                    Estágio Pedagogo</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Vaga para estágio voluntário.
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-orange-500 dark:hover:bg-green-300 dark:focus:ring-blue-800">
                                Candidatar
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
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-700 font-bold">Campanhas</h4>

                    <a href="#"
                        class="mt-2 flex flex-col items-center bg-white border-separate rounded-lg shadow-2xl md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-100 dark:hover:bg-gray-300">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                            src="data:image/jpeg;base64,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"
                            alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-700">
                                Campanha do Agasalho</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Campanha de doação de
                                agasalho.</p>
                        </div>
                    </a>

                </div>

            </div>
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-700 font-bold">Empresas Parceiras</h4>
                    <div x-data="imageSlider"
                        class="relative mx-auto max-w-full overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4 grid min-h-fit w-full place-content-center">
                        <div
                            class="absolute right-5 top-5 z-10 rounded-full bg-gray-600 px-2 text-center text-sm text-white">
                            <span x-text="currentIndex"></span>/<span x-text="images.length"></span>
                        </div>

                        <button @click="previous()"
                            class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                            <i class="fas fa-chevron-left text-2xl font-bold text-gray-500"></i>
                        </button>

                        <button @click="forward()"
                            class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                            <i class="fas fa-chevron-right text-2xl font-bold text-gray-500"></i>
                        </button>

                        <div class="relative h-80" style="width: 30rem">
                            <template x-for="(image, index) in images">
                                <div x-show="currentIndex == index + 1"
                                    x-transition:enter="transition transform duration-300"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition transform duration-300"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                    class="absolute top-0">
                                    <img :src="image" alt="image" class="rounded-sm" />
                                </div>
                            </template>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("alpine:init", () => {
                            Alpine.data("imageSlider", () => ({
                                currentIndex: 1,
                                images: [
                                    "https://unsplash.it/640/425?image=30",
                                    "https://unsplash.it/640/425?image=40",
                                    "https://unsplash.it/640/425?image=50",
                                ],
                                previous() {
                                    if (this.currentIndex > 1) {
                                        this.currentIndex = this.currentIndex - 1;
                                    }
                                },
                                forward() {
                                    if (this.currentIndex < this.images.length) {
                                        this.currentIndex = this.currentIndex + 1;
                                    }
                                },
                            }));
                        });
                    </script>



                </div>

            </div>
        </div>

</body>

</html>
