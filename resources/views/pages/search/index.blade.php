@extends('layouts.main')
@section('title', 'Instantgram')
@section('css')
@section('content')
    <section
        class="search-main w-3/4 mx-auto dark:bg-[#1f2937] h-full border-2 border-gray-200 border-solid rounded-lg h-full px-4 overflow-y-auto scroll-smooth">
        <section id="search" class="search px-60 mt-10 mb-10">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex flex-col">
                    <input
                        class="w-full shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="search" type="text" name="search" value="{{ old('search') }}" placeholder="Search" required
                        autofocus>
                    <button class="-mt-8 mr-3 self-end cursor-pointer" type="submit">
                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </button>
                </div>
            </form>
        </section>
        <section class="mx-60 mt-7">
            <a href="#" class="flex pb-4 border-b-2 border-gray-200 border-solid h-full">
                <div class="">
                    <img src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="Coding Studio">
                </div>
                <article class="ml-3">
                    <p class="dark:text-white text-xl">Coding Studio</p>
                    <p class="dark:text-white text-sm">BIO</p>
                </article>
            </a>
        </section>
        <section class="mx-60 mt-7">
            <a href="#" class="flex pb-4 border-b-2 border-gray-200 border-solid h-full">
                <div class="">
                    <img src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="Coding Studio">
                </div>
                <article class="ml-3">
                    <p class="dark:text-white text-xl">Coding Studio</p>
                    <p class="dark:text-white text-sm">BIO</p>
                </article>
            </a>
        </section>
        <section class="mx-60 mt-7">
            <a href="#" class="flex pb-4 border-b-2 border-gray-200 border-solid h-full">
                <div class="">
                    <img src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="Coding Studio">
                </div>
                <article class="ml-3">
                    <p class="dark:text-white text-xl">Coding Studio</p>
                    <p class="dark:text-white text-sm">BIO</p>
                </article>
            </a>
        </section>
        <section class="mx-60 mt-7">
            <a href="#" class="flex pb-4 border-b-2 border-gray-200 border-solid h-full">
                <div class="">
                    <img src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="Coding Studio">
                </div>
                <article class="ml-3">
                    <p class="dark:text-white text-xl">Coding Studio</p>
                    <p class="dark:text-white text-sm">BIO</p>
                </article>
            </a>
        </section>
        <section class="mx-60 mt-7">
            <a href="#" class="flex pb-4 border-b-2 border-gray-200 border-solid h-full">
                <div class="">
                    <img src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="Coding Studio">
                </div>
                <article class="ml-3">
                    <p class="dark:text-white text-xl">Coding Studio</p>
                    <p class="dark:text-white text-sm">BIO</p>
                </article>
            </a>
        </section>
        <section class="mx-60 mt-7">
            <a href="#" class="flex pb-4 border-b-2 border-gray-200 border-solid h-full">
                <div class="">
                    <img src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="Coding Studio">
                </div>
                <article class="ml-3">
                    <p class="dark:text-white text-xl">Coding Studio</p>
                    <p class="dark:text-white text-sm">BIO</p>
                </article>
            </a>
        </section>
        <section class="mx-60 mt-7">
            <a href="#" class="flex pb-4 border-b-2 border-gray-200 border-solid h-full">
                <div class="">
                    <img src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="Coding Studio">
                </div>
                <article class="ml-3">
                    <p class="dark:text-white text-xl">Coding Studio</p>
                    <p class="dark:text-white text-sm">BIO</p>
                </article>
            </a>
        </section>
        <section class="mx-60 mt-7">
            <a href="#" class="flex pb-4 border-b-2 border-gray-200 border-solid h-full">
                <div class="">
                    <img src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="Coding Studio">
                </div>
                <article class="ml-3">
                    <p class="dark:text-white text-xl">Coding Studio</p>
                    <p class="dark:text-white text-sm">BIO</p>
                </article>
            </a>
        </section>
        <section class="mx-60 mt-7">
            <a href="#" class="flex pb-4 border-b-2 border-gray-200 border-solid h-full">
                <div class="">
                    <img src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="Coding Studio">
                </div>
                <article class="ml-3">
                    <p class="dark:text-white text-xl">Coding Studio</p>
                    <p class="dark:text-white text-sm">BIO</p>
                </article>
            </a>
        </section>
        <section class="mx-60 mt-7">
            <a href="#" class="flex pb-4 border-b-2 border-gray-200 border-solid h-full">
                <div class="">
                    <img src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="Coding Studio">
                </div>
                <article class="ml-3">
                    <p class="dark:text-white text-xl">Coding Studio</p>
                    <p class="dark:text-white text-sm">BIO</p>
                </article>
            </a>
        </section>
        <section class="mx-60 mt-7">
            <a href="#" class="flex pb-4 border-b-2 border-gray-200 border-solid h-full">
                <div class="">
                    <img src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="Coding Studio">
                </div>
                <article class="ml-3">
                    <p class="dark:text-white text-xl">Coding Studio</p>
                    <p class="dark:text-white text-sm">BIO</p>
                </article>
            </a>
        </section>
        <a href="#search">
            <section
                class="fixed z-50 bottom-10 right-[18rem] bg-white hover:bg-gray-200 p-3 rounded-full hover:animate-bounce">
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 13V1m0 0L1 5m4-4 4 4" />
                </svg>
            </section>
        </a>
    </section>
@endsection
@section('script')

@endsection
