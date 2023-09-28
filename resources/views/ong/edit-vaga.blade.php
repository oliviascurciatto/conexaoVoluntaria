@extends('layouts.ong-layout')
@section('title', 'Editar Vaga')

@section('content')
<form>
            <div class="bg-white space-y-12">
                <div class="bg-white ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <h2 class="mt-4 text-base font-semibold leading-7 text-gray-900">Editar Vaga</h2>

                </div>

                <div class="ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Informações da vaga</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="first-name"
                                class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    class="block w-7/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="quantidade" class="block text-sm font-medium leading-6 text-gray-900">Quantidade</label>
                            <div class="mt-2">
                                <input id="quantidade" name="quantidade" type="number" 
                                    class="text-center block w-14 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Criada em:</label>
                            <div class="mt-2">
                                <input id="date" name="date" type="date" autocomplete="date"
                                    class="block w-7/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>





                    <div class="sm:col-span-2">
                        <div class="mt-4 col-span-full">
                            <label for="Sobre" class="block text-sm font-medium leading-6 text-gray-900">Sobre a vaga</label>
                            <div class="mt-2">
                                <textarea id="Sobre" name="Sobre" rows="3"
                                    class="block w-7/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Descreva a vaga!
                            </p>
                        </div>
                    </div>
                    <div class="mt-6 sm:col-span-3">
                        <label for="habilidades"
                            class="block text-sm font-medium leading-6 text-gray-900">Habilidades</label>
                        <div class="mt-2">
                            <select id="habilidades" name="habilidades" autocomplete="habilidades-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option>#</option>
                                <option>#</option>
                                <option>#</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <a href="#" id="cancelar"
                        class="inline-flex justify-center hover:text-gray-700 items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg border border-orange-500 hover:bg-orange-500 focus:ring-4 focus:ring-gray-400"
                        name="cancelar">Cancelar</a>
                    <a href="#" id="salvar"
                        class="inline-flex justify-center hover:text-gray-700 items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg border border-green-500 hover:bg-green-500 focus:ring-4 focus:ring-green-500"
                        name="salvar">Salvar</a>
                    <a href="#" id="delete"
                        class="inline-flex justify-center hover:text-gray-400 items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg border border-red-600 hover:bg-red-600 focus:ring-4 focus:ring-green-500"
                        name="delete">Deletar</a>
                </div>
            </div>
        </form>
@endsection

