@extends('layouts.layout-geral')

@section('title', 'Login Voluntário')

@section('content')

@method('POST')
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-white">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-40 w-40" src="/images/logo_cv.png" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-700">Entrar como
                    voluntário</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white">
                <form class="space-y-6" action="{{ route('perfil-voluntario', ['id'=>1]) }}" method="POST">
                    <div>
                        <label  class="block text-sm font-medium leading-6 text-gray-900">CPF</label>
                        <div class="mt-2">
                            <input id="cpf" name="cpf" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-300 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password"
                                class="block text-sm font-medium leading-6 text-gray-900">Senha</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-gray-500 hover:text-green-300">Esqueceu sua
                                    senha?</a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-300 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div >
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-orange-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-300">Entrar</button>
                    </div>
                </form>

                <p class="mt-10 text-center text-sm text-gray-500">
                    Não tem cadastro?
                    <a href="{{ route('criar-cadastro-voluntario.store', ['id'=>1]) }}" class="font-semibold leading-6 text-gray-500 hover:text-green-300">Cadastre-se</a>
                </p>
            </div>
        </div>
@endsection