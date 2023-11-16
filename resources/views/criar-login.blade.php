@extends('layouts.layout-geral')
@section('title', 'Criar login')

@section('content')

        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-white">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-40 w-40" src="/images/logo_cv.png" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Criar Login
                </h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white">
                <form class="space-y-6" action="{{ route('criar-login.store') }}" method="POST">
                    @csrf

                    <div>
                        <label  class="block text-sm font-medium leading-6 text-gray-900">E-mail</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email"  required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-300 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="mt-4 sm:col-span-2">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Criar senha</label>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" autocomplete="password"
                                x-model="senha"
                                class="block w-32 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="mt-4 sm:col-span-2">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Confirmar senha</label>
                        <div class="mt-2">
                            <input type="password" name="confirmarSenha" id="confirmarSenha" autocomplete="password"
                                x-model="confirmarSenha"
                                x-bind:class="{ 'border-red-500': senha !== confirmarSenha && confirmarSenha !== '' }"
                                class="block w-32 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        <p x-show="senha !== confirmarSenha && confirmarSenha !== ''" class="text-red-500 text-sm mt-1">As senhas não coincidem.</p>
                    </div>
                    <div class="mt-4 sm:col-span-3">
                        <label 
                            class="block text-sm font-medium leading-6 text-gray-900">Você é:</label>
                        <div class="mt-2">
                            <select id="tipoUser" name="tipoUser" 
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="1">ONG</option>
                                <option value="2">Voluntário</option>
                            </select>
                        </div>
                    </div>
                    <div class="bg-white">
                        <button  type="submit"
                            class="flex w-full justify-center rounded-md bg-orange-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-300">Criar</button>
                    </div>
                </form>
           </div>
        </div>
@endsection