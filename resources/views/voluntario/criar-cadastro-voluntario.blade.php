@extends('layouts.layout-geral')
@section('title', 'Criar Cadastro')

@section('content')
        <form action="/criar-cadastro-voluntario/" method="POST">
            @csrf
            <div class="bg-white space-y-12">
                <div class="bg-white ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <h2 class="mt-4 text-base font-semibold leading-7 text-gray-900">Criar cadastro de Voluntário</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">




                        <div class="col-span-full">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">Foto</label>
                            <div class="mt-2 flex items-center gap-x-3">
                                <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <button type="button"
                                    class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Adicionar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Dados Pessoais</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Dê preferência ao seu principal e-mail e principal
                        número telefone!
                    </p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="mt-4 sm:col-span-3">
                            <label 
                                class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                            <div class="mt-2">
                                <input type="text" name="nome"  id="nome" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="mt-4 sm:col-span-2">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">CPF</label>
                            <div class="mt-2">
                                <input type="number" name="cpf" id="cpf" 
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="mt-4 sm:col-span-2">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Telefone</label>
                            <div class="mt-2">
                                <input type="number" name="telefone" id="telefone" autocomplete="tel-local"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class=" mt-4 sm:col-span-4">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">Endereço
                                de e-mail</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 sm:col-span-2 sm:col-start-1">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Cidade</label>
                        <div class="mt-2">
                            <input type="text" name="Cidade" id="Cidade" autocomplete="address-level2"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="mt-4 sm:col-span-2">
                        <label  class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                        <div class="mt-2">
                            <input type="text" name="estado" id="estado" autocomplete="address-level1"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <div class="mt-4 col-span-full">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">Sobre
                                você</label>
                            <div class="mt-2">
                                <textarea id="Sobre" name="sobre" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Escreva um pouco sobre você!
                            </p>
                        </div>
                        <div class="mt-4 sm:col-span-3">
                            <label 
                                class="block text-sm font-medium leading-6 text-gray-900">Gênero</label>
                            <div class="mt-2">
                                <select id="genero" name="genero" 
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value=""></option>
                                    <option value="nao_especificado">Não especificado</option>
                                    <option value="prefiro_nao_responder">Prefiro não responder</option>
                                    <option value="mulher_cis">Mulher cis</option>
                                    <option value="homem_cis">Homem cis</option>
                                    <option value="mulher_trans">Mulher transexual/transgênero</option>
                                    <option value="homem_trans">Homem transexual/transgênero</option>
                                    <option value="travesti">Travesti</option>
                                    <option value="nao_binarie">Não binárie</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4 sm:col-span-3">
                            <label 
                                class="block text-sm font-medium leading-6 text-gray-900">Habilidades</label>
                            <div class="mt-2">
                                <select id="habilidades" name="habilidades" autocomplete="habilidades-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="habilidade_1">Habilidade 1</option>
                                    <option value="habilidade_2">Habilidade 2</option>
                                    <option value="habilidade_3">Habilidade 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4 sm:col-span-2">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">Criar senha</label>
                            <div class="mt-2">
                                <input type="password" name="password" id="password" autocomplete="password"
                                    class="block w-32 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="mt-4 sm:col-span-2">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">Confirmar senha</label>
                            <div class="mt-2">
                                <input type="password_confirm" name="password_confirm" id="password_confirm" autocomplete="password"
                                    class="block w-32 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <button type="submit" id="cadastrar" 
                    class="inline-flex justify-center hover:text-white items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg border border-green-500 hover:bg-green-500 focus:ring-4 focus:ring-gray-400"
                    name="cadastrar">Cadastrar</button>
                </div>
            </div>
        </form>
 
@endsection