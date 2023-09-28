@extends('layouts.ong-layout')

@section('title', 'Perfil Ong')

@section('content')
        <div class="items-center my-6 flex flex-col 2xl:flex-row space-y-8 2xl:space-y-0 2xl:space-x-8 bg-white">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
                    <figure class="max-w-lg">
                        <img class="h-auto max-w-full rounded-lg shadow-xl dark:shadow-gray-500" src="https://cruzaltaonline.com.br/portal/wp-content/uploads/2021/05/apae-new.jpg" alt="image description">
                      </figure>
                    <h4 class="mt-8 text-xl text-gray-900 font-bold">Sobre Nós</h4>
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
                            <span class="text-gray-700">(17) 01123-1234</span>
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
                            <a href="#" title="LinkedIn">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333"
                                    shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                    image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm-18220 138885h28897v14814l418 1c4024-7220 13865-14814 28538-14814 30514-1 36157 18989 36157 43691v50320l-30136 1v-44607c0-10634-221-24322-15670-24322-15691 0-18096 11575-18096 23548v45382h-30109v-94013zm-20892-26114c0 8650-7020 15670-15670 15670s-15672-7020-15672-15670 7022-15670 15672-15670 15670 7020 15670 15670zm-31342 26114h31342v94013H96213v-94013z"
                                        fill="#0077b5"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>

                    <div x-data="{ modelOpen: false }">
                        <button @click="modelOpen =!modelOpen" class="mt-4 inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-green-500 hover:bg-orange-500 focus:ring-4">
                            
                    
                            <span>Doações</span>
                        </button>
                    
                        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="opacity-0" 
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-in duration-200 transform"
                                    x-transition:leave-start="opacity-100" 
                                    x-transition:leave-end="opacity-0"
                                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                ></div>
                    
                                <div x-cloak x-show="modelOpen" 
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave="transition ease-in duration-200 transform"
                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                                >
                                    <div class="flex items-center justify-between space-x-4">
                                        <h1 class="text-center text-xl text-gray-700 font-bold">Faça uma doação</h1>
                    
                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>
                    
                                    <p class="mt-2 text-sm text-gray-500 ">
                                        Você pode enviar uma doação para o nosso endereço ou doar um valor no pix!
                                    </p>
                                    <div class="flex flex-col w-full 2xl:w-2/3">
                                        <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                                            <h4 class="text-center text-xl text-gray-700 font-bold">Chave-pix:</h4>
                                            <p class="text-center mt-2 text-gray-700">OJNunljnOunOb624624IBbONobnUBjBBo6</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mt-4 w-full flex flex-col 2xl:w-1/3 ">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-700 font-bold">Vagas</h4>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="mt-2 max-w-sm rounded-lg shadow-2xl  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-100 dark:hover:bg-gray-300">
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-700">
                                    Estágio Pedagogo</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Vaga para estágio voluntário.
                            </p>
                            <a href="{{ route('vaga-ong', ['id'=>1]) }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-orange-500 dark:hover:bg-green-500 dark:focus:ring-green-500">
                                Ver vaga
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

            </div>
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-700 font-bold">Campanhas</h4>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <a href="{{ route('campanha-ong', ['id'=>1]) }}"
                        class="mt-2 flex flex-col items-center bg-white border-separate rounded-lg shadow-2xl md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-100 dark:hover:bg-gray-300">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-700">
                                Campanha do Agasalho</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Campanha de doação de
                                agasalho.</p>
                        </div>
                    </a> 
                </div>
                </div>
            </div>
            </div>    
        </div>
@endsection
