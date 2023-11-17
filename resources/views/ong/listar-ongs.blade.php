@extends('layouts.ong-layout')

@section('title', 'ONGs')
@foreach ($ongs as $ong)
    

<div class="mt-4 w-full flex flex-col 2xl:w-1/3 ">
    <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
        
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div class="mt-2 max-w-sm rounded-lg shadow-2xl  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-100 dark:hover:bg-gray-300">
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-700">
                        {{$ong->nomeOng}}</h5>
                </a>
                <a href="{{ route('perfil-ong') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-orange-500 dark:hover:bg-green-500 dark:focus:ring-green-500">
                    Ver ONG
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>


    </div>

</div>

@endforeach

@section('content')
@endsection