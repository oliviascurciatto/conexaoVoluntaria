@extends('layouts.voluntario-layout')
@section('title', 'Campanhas')
@section('content')

<div class="w-full flex flex-col 2xl:w-1/3">
    <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
        <h4 class="text-xl text-gray-700 font-bold">Campanhas</h4>
        @foreach ($campanhas as $campanha)
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                
            <a href="{{ route('campanha-voluntario', ['campanha' => $campanha->id]) }}"
                class="mt-2 flex flex-col items-center bg-white border-separate rounded-lg shadow-2xl md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-100 dark:hover:bg-gray-300">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-700">
                        {{$campanha->nomeCampanha}}</h5>
                        
                        </div>
                    </a> 
                </div>
                @endforeach
                
    </div>
</div>

@endsection