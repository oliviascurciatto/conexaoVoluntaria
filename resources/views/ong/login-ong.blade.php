@extends('layouts.layout-geral')
@section('title', 'Login Ong')

@section('content')

        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-white">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-40 w-40" src="/images/logo_cv.png" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Entrar como ong
                </h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white">
                <form class="space-y-6" action="{{ route('login-ong.loginOngAuth') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
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

                    <div class="bg-white">
                        <button  type="submit"
                            class="flex w-full justify-center rounded-md bg-orange-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-300">Entrar</button>
                    </div>
                    <div class="">
                        <p class="mt-10 text-center text-sm text-gray-500">
                            Não tem cadastro?
                            <a href="{{ route('criar-cadastro-ong.create') }}"
                                class="font-semibold leading-6 text-gray-500 hover:text-green-300">Cadastre-se!</a>
                        </p>
                    </div>
                    
                </form>
           </div>
        </div>
@endsection