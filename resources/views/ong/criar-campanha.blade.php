@extends('layouts.ong-layout')
@section('title', 'Criar Campanha')

@section('content')
        <form method="POST" action="{{ route('criar-campanha.store') }}">
            @csrf
            <div class="bg-white space-y-12">
                <div class="bg-white ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <h2 class="mt-4 text-base font-semibold leading-7 text-gray-900">Criar Campanha</h2>
                </div>

                <div class="ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Informações da campanha</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label 
                                class="block text-sm font-medium leading-6 text-gray-900">Título</label>
                            <div class="mt-2">
                                <input type="text" name="nomeCampanha" id="nomeCampanha" 
                                    class="block w-7/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>


                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Termina em:</label>
                            <div class="mt-2">
                                <input id="termina" name="termina" type="date" autocomplete="date"
                                    class="block w-7/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>





                    <div class="sm:col-span-2">
                        <div class="mt-4 col-span-full">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">Sobre a campanha</label>
                            <div class="mt-2">
                                <textarea id="descricaoCampanha" name="descricaoCampanha" 
                                    class="block w-7/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Descreva a campanha!
                            </p>
                        </div>
                    </div>
                    <div class="mt-6 sm:col-span-3">
                        <label 
                            class="block text-sm font-medium leading-6 text-gray-900">Causa</label>
                        <div class="mt-2">
                            <select id="causa" name="causa" 
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="1">Políticas Públicas</option>
                                <option value="2">Arte e Cultura</option>
                                <option value="3">Cidadania</option>
                                <option value="4">Combate à fome</option>
                                <option value="5">Combate à pobreza</option>
                                <option value="6">Consumo consciente</option>
                                <option value="7">Crianças</option>
                                <option value="8">Desenvolvimento comunitário</option>
                                <option value="9">Direitos humanos</option>
                                <option value="10">Educação</option>
                                <option value="11">Equidade racial</option>
                                <option value="12">Esportes</option>
                                <option value="13">Idosos</option>
                                <option value="14">Jovens</option>
                                <option value="15">LGBTQIAPN+</option>
                                <option value="16">Meio ambiente</option>
                                <option value="17">Mulheres</option>
                                <option value="18">Pessoas com deficiência</option>
                                <option value="19">População em situação de rua</option>
                                <option value="20">Povos indígenas</option>
                                <option value="21">Proteção animal</option>
                                <option value="22">Refugiados</option>
                                <option value="23">Saúde</option>
                                <option value="24">Sustentabilidade</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-7 sm:col-span-3">
                        <label 
                            class="block text-sm font-medium leading-6 text-gray-900">Adionar chave-pix</label>
                        <div class="mt-2">
                            <input type="text" name="pixCampanha" id="pixCampanha" 
                                class="block w-7/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>

                <div class="ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <a href="{{ route('perfil-ong', ['id'=>1]) }}" id="cancelar"
                        class="inline-flex justify-center hover:text-gray-700 items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg border border-orange-500 hover:bg-orange-500 focus:ring-4 focus:ring-gray-400"
                        name="cancelar">Cancelar</a>
                    <button type="submit" id="salvar"
                        class="inline-flex justify-center hover:text-gray-700 items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg border border-green-500 hover:bg-green-500 focus:ring-4 focus:ring-green-500"
                        name="salvar">Salvar</a>
                </div>
            </div>
        </form>
@endsection
