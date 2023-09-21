@extends('layouts.voluntario-layout')

@section('title', 'Perfil Voluntário')

@section('content')
        <div class="bg-white items-start my-6 flex flex-col 2xl:flex-row space-y-8 2xl:space-y-0 2xl:space-x-8">
            
            <div class="w-full flex flex-col 2xl:w-1/3">
                
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <div class="flex items-center gap-x-6">
                        <img class="h-29 w-29 rounded-lg items-start"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </div>
                    <h4 class="text-xl text-gray-700 font-bold">Dados Pessoais</h4>
                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-24">Nome:</span>
                            <span class="text-gray-700">Amanda S. Ross</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Celular:</span>
                            <span class="text-gray-700">(123) 123-1234</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">E-mail:</span>
                            <span class="text-gray-700">amandaross@example.com</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Endereço:</span>
                            <span class="text-gray-700">Santa Fé do Sul, São Paulo</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Habilidades:</span>
                            <span class="text-gray-700">Programação</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col w-full 2xl:w-2/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-700 font-bold">Sobre</h4>
                    <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                        voluptates obcaecati numquam error et ut fugiat asperiores. Sunt nulla ad incidunt
                        laboriosam,
                        laudantium est unde natus cum numquam, neque facere. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Ut, magni odio magnam commodi sunt ipsum eum! Voluptas eveniet aperiam at
                        maxime, iste id dicta autem odio laudantium eligendi commodi distinctio!</p>
                </div>
            </div>
        </div>
@endsection
