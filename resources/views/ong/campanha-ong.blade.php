@extends('layouts.ong-layout')
@section('title', 'Campanha')

@section('content')
<div class="bg-white items-center my-0 flex flex-col 2xl:flex-row space-y- 2xl:space-y-0 2xl:space-x-4">
    <div class="w-8/12 flex flex-col 2xl:w-1/3 bg-white">
        <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
                    
                    <h4 class="mt-0 mb-6 text-xl text-gray-700 underline font-bold text-center">Campanha</h4>
                        
                            <h4 class="text-xl text-gray-700 font-bold">Informações</h4>
                            <ul class="mt-2 text-gray-700">
                                <li class="flex border-b py-2">
                                    <span class="font-bold w-25">Início:</span>
                                    <span class="text-gray-700">10/09/2023</span>
                                </li>
                                <li class="flex border-b py-2">
                                    <span class="font-bold w-25">Fim:</span>
                                    <span class="text-gray-700">10/10/2023</span>
                                </li>
                            </ul>
                            <h4 class="mt-8 text-xl text-gray-700 font-bold">Descrição</h4>   
                    <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                        voluptates obcaecati numquam error et ut fugiat asperiores. Sunt nulla ad incidunt
                        laboriosam,
                        laudantium est unde natus cum numquam, neque facere. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Ut, magni odio magnam commodi sunt ipsum eum! Voluptas eveniet aperiam at
                        maxime, iste id dicta autem odio laudantium eligendi commodi distinctio!
                    </p>

                            
 
                    <div class="mt-5 ml-0 mr-0 border-b border-gray-900/10 pb-12">
                        <a href="#" id="editar"
                            class="inline-flex justify-center hover:text-gray-700 items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg border border-orange-500 hover:bg-orange-500 focus:ring-4 focus:ring-orange-500"
                            name="editar">Editar</a>
                    </div>       
                </div>
            </div>
        </div>
</div>
@endsection