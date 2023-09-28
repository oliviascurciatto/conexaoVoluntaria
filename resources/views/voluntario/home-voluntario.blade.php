@extends('layouts.voluntario-layout')

@section('title', 'Início')

@section('content')
        <section
            class="bg-center bg-no-repeat bg-[url('https://img.freepik.com/vetores-gratis/pessoas-abracando-design-plano_23-2148576539.jpg?w=740&t=st=1692797694~exp=1692798294~hmac=3604570fc9b6c5105bbcc0371bd5b4189d626e72e748162f2e0bca7717cc63ab')] bg-white bg-blend-multiply">
            <h1 class="text-4xl text-center font-extrabold tracking-tight leading-none text-green-400 md:text-5xl lg:text-6xl">
                O poder de fazer a diferença!</h1>
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                
            </div>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="{{ route('listar-vagas', ['id'=>1]) }}"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg bg-green-400 hover:bg-white focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Vagas Abertas!
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </section>
@endsection       
