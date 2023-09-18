@extends('layouts.voluntario-layout')

@section('title', 'Editar Perfil')

@section('content')
        <form>
            <div class="bg-white space-y-12">
                <div class="bg-white ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <h2 class="mt-4 text-base font-semibold leading-7 text-gray-900">Editar Perfil</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">




                        <div class="col-span-full">
                            <label for="foto" class="block text-sm font-medium leading-6 text-gray-900">Foto</label>
                            <div class="mt-2 flex items-center gap-x-3">
                                <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <button type="button"
                                    class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Trocar</button>
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
                        <div class="sm:col-span-3">
                            <label for="first-name"
                                class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last-name"
                                class="block text-sm font-medium leading-6 text-gray-900">Sobrenome</label>
                            <div class="mt-2">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="mt-4 sm:col-span-2">
                            <label for="ddd" class="block text-sm font-medium leading-6 text-gray-900">DDD</label>
                            <div class="mt-2">
                                <input type="number" name="ddd" id="ddd" autocomplete=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="mt-4 sm:col-span-2">
                            <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Telefone</label>
                            <div class="mt-2">
                                <input type="number" name="phone" id="phone" autocomplete="tel-local"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Endereço
                                de e-mail</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 sm:col-span-2 sm:col-start-1">
                        <label for="Cidade" class="block text-sm font-medium leading-6 text-gray-900">Cidade</label>
                        <div class="mt-2">
                            <input type="text" name="Cidade" id="Cidade" autocomplete="address-level2"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="mt-4 sm:col-span-2">
                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                        <div class="mt-2">
                            <input type="text" name="region" id="region" autocomplete="address-level1"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <div class="mt-4 col-span-full">
                            <label for="Sobre" class="block text-sm font-medium leading-6 text-gray-900">Sobre
                                você</label>
                            <div class="mt-2">
                                <textarea id="Sobre" name="Sobre" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Escreva um pouco sobre você!
                            </p>
                        </div>
                        <div class="mt-4 sm:col-span-3">
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
                </div>

                <div class="ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Notificações</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Quais notificações você deseja receber?</p>

                    <div class="mt-10 space-y-10">
                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Por E-mail</legend>
                            <div class="mt-6 space-y-6">
                                <div class="relative flex gap-x-3">
                                    <div class="flex h-6 items-center">
                                        <input id="vagas" name="vagas" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="text-sm leading-6">
                                        <label for="vagas" class="font-medium text-gray-900">Vagas</label>
                                        <p class="text-gray-500">Veja novas vagas publicadas.</p>
                                    </div>
                                </div>
                                <div class="relative flex gap-x-3">
                                    <div class="flex h-6 items-center">
                                        <input id="campanhas" name="campanhas" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="text-sm leading-6">
                                        <label for="campanhas" class="font-medium text-gray-900">Campanhas</label>
                                        <p class="text-gray-500">Fique por dentro das campanhas das ongs.</p>
                                    </div>
                                </div>
                                <div class="relative flex gap-x-3">
                                    <div class="flex h-6 items-center">
                                        <input id="mensagens" name="mensagens" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="text-sm leading-6">
                                        <label for="mensagens" class="font-medium text-gray-900">Mensagens</label>
                                        <p class="text-gray-500">Saiba quando uma ong te enviou uma mensagem.</p>
                                    </div>
                                </div>
                                <div class="relative flex gap-x-3">
                                    <div class="flex h-6 items-center">
                                        <input id="processo" name="processo" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="text-sm leading-6">
                                        <label for="processo" class="font-medium text-gray-900">Processo
                                            Seletivo</label>
                                        <p class="text-gray-500">Fique por dentro do andamento do processo seletivo das
                                            vagas nas quais se candidatou.</p>
                                    </div>
                                </div>
                                <div class="relative flex gap-x-3">
                                    <div class="flex h-6 items-center">
                                        <input id="nenhuma" name="nenhuma" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="text-sm leading-6">
                                        <label for="nenhuma" class="font-medium text-gray-900">Nenhuma</label>
                                        <p class="text-gray-500">Não quero receber nenhuma notificação.</p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Por Whatsapp</legend>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="push-todas" name="push-notifications" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="push-todas"
                                        class="block text-sm font-medium leading-6 text-gray-900">Todas as
                                        notificações</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="push-email" name="push-notifications" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="push-email"
                                        class="block text-sm font-medium leading-6 text-gray-900">Igual ao
                                        e-mail</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="push-nenhuma" name="push-notifications" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="push-nenhuma"
                                        class="block text-sm font-medium leading-6 text-gray-900">Nenhuma
                                        notificação</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <button type="button" id="cancelar"
                        class="inline-flex justify-center hover:text-gray-700 items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg border border-white hover:bg-orange-500 focus:ring-4 focus:ring-gray-400"
                        name="cancelar">Cancelar</button>
                    <button type="button" id="salvar"
                        class="inline-flex justify-center hover:text-gray-700 items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg border border-green-300 hover:bg-green-300 focus:ring-4 focus:ring-gray-400"
                        name="salvar">Salvar</button>
                </div>
            </div>
        </form>
 
@endsection
