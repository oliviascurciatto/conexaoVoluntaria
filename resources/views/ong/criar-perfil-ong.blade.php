@extends('layouts.layout-geral')
@section('title', 'Criar Perfil')

@section('content')
        <form action="{{ route('criar-perfil-ong.store') }}" method="POST">
            @csrf
            <div class="bg-white space-y-12">
                <div class="bg-white ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <h2 class="mt-4 text-base font-semibold leading-7 text-gray-900">Criar perfil de Ong</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">




                        <div class="col-span-full">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">Foto</label>
                            <div class="mt-2 flex items-center gap-x-3" >
                                <input class="block w-auto text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white" aria-describedby="file_input_help" id="image" type="file">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Informações da Ong</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Dê preferência ao principal e-mail e principal
                        número telefone!
                    </p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label 
                                class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                            <div class="mt-2">
                                <input type="text" name="nomeOng" id="nomeOng" autocomplete="given-name" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">CNPJ</label>
                            <div class="mt-2">
                                <input id="cnpj" name="cnpj" type="text"  required
                                    class="block w-5/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                   

                    <div class="mt-6 sm:col-span-2">
                        <label  class="block text-sm font-medium leading-6 text-gray-900">Telefone</label>
                        <div class="mt-2">
                            <input type="phone" name="telefone" id="telefone" autocomplete="tel-local" required
                                class="block w-auto rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="mt-4 sm:col-span-2">
                        <label  class="block text-sm font-medium leading-6 text-gray-900">Cidade</label>
                        <div class="mt-2">
                            <input type="text" name="cidade" id="cidade" autocomplete="address-level2"
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

                    <div class="mt-4 sm:col-span-2">
                        <label  class="block text-sm font-medium leading-6 text-gray-900">Rua</label>
                        <div class="mt-2">
                            <input type="text" name="rua" id="rua" autocomplete="street-address"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="mt-4 sm:col-span-2">
                        <label  class="block text-sm font-medium leading-6 text-gray-900">Número</label>
                        <div class="mt-2">
                            <input type="text" name="numero" id="numero" autocomplete="#"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="mt-4 sm:col-span-2">
                        <label  class="block text-sm font-medium leading-6 text-gray-900">Complemento</label>
                        <div class="mt-2">
                            <input type="text" name="complemento" id="complemento" autocomplete="#"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="mt-4 sm:col-span-2">
                        <label  class="block text-sm font-medium leading-6 text-gray-900">Bairro</label>
                        <div class="mt-2">
                            <input type="text" name="bairro" id="bairro" autocomplete="address-level3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    </div>

                    <div class="mt-10 sm:col-span-2">
                        <div class="mt-4 col-span-full">
                            <label  class="block text-sm font-medium leading-6 text-gray-900">Sobre
                                a ong</label>
                            <div class="mt-2">
                                <textarea id="sobre" name="sobre" rows="3"
                                    class="block w-5/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Escreva um pouco sobre a história da ong!
                            </p>
                        </div>
                        <div class="mt-4 sm:col-span-3">
                            <label 
                                class="block text-sm font-medium leading-6 text-gray-900">Causas</label>
                            <div class="mt-2">
                                <select id="causa" name="causa" 
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value=""></option>
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
                    </div>
                </div>
                <div class="ml-10 mr-10 border-b border-gray-900/10 pb-12">
                    <button type="submit" id="cadastrar"
                    class="inline-flex justify-center hover:text-gray-700 items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg border border-green-300 hover:bg-green-300 focus:ring-4 focus:ring-gray-400"
                    name="cadastrar">Cadastrar</button>
                </div>
            </div>
            </div>
        </form>
@endsection