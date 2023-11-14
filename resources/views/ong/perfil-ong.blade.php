@extends('layouts.ong-layout')

@section('title', 'Perfil Ong')

@section('content')
        <div class="items-center my-6 flex flex-col 2xl:flex-row space-y-8 2xl:space-y-0 2xl:space-x-8 bg-white">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
                    <figure class="max-w-lg">
                        <img class="h-auto max-w-full rounded-lg shadow-xl dark:shadow-gray-500" src="/images/apae_perfil.png" alt="image description">
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
                    </ul>


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
                            <a href="{{ route('vaga-ong.index') }}"
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
