{{-- // Main Page on Instagram Homepage --}}
@extends('layouts.main')
@section('title', 'Instantgram')
@section('css')
@section('content')
    {{-- Story Section Start --}}
    <section class="story-main">

    </section>
    {{-- Story Section End --}}

    {{-- Post Section Start --}}
    <section class="post-main w-9/12 mx-auto h-full dark:bg-[#1f2937] px-4 overflow-y-auto">
        <section class="h-fit flex flex-col xl:flex-row dark:bg-[#1f2937] px-4 py-2 mt-7 border border-gray-200 border-solid">
            <section class=" flex justify-center items-center p-5 dark:bg-[#111828]">
                <img class="w-full xl:w-[100rem]" src="https://cdn.oneesports.gg/cdn-data/2022/09/Valorant_Phoenix_Banner.jpg" alt="">
            </section>
            <section class="w-full flex flex-col justify-end dark:bg-[#111828]">
                <div class="h-32 xl:h-20 flex border-b border-gray-200 border-solid pl-5">
                    <img class="w-[60px] h-[60px] rounded-full my-auto" src="{{ URL::asset('assets/imgs/bjorka.png') }}" alt="{{-- isi username / nama --}}">
                    <p class="dark:text-white my-auto ml-3 text-xl">Bjorka</p>
                </div>
                <div class="h-[20rem] xl:h-full">
                    <div class="user-post dark:text-white flex items-center">
                        <div class="cover-image rounded-full w-8">
                            <img src="{{ asset('assets/imgs/logo_codio.png') }}" alt="" srcset="" class="">
                        </div>
                        <span class="flex-1 ml-2 whitespace-nowrap">Username</span>
                    </div>
                    <textarea class="w-full h-full resize-none bg-transparent dark:text-white cursor-default focus:outline-none overflow-y-auto scroll-smooth" type="text" readonly>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem incidunt, expedita aut maiores corrupti in recusandae nihil eius perspiciatis eum quos mollitia fugit reprehenderit earum. Deleniti veniam obcaecati eos laborum!
                    </textarea>
                </div>
                <div class="h-[5rem] xl:h-24 flex items-center justify-center border-t border-gray-200 border-solid">
                    <span class="mx-3">
                        <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 15">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m13.717 1 5.518 4.95a1.05 1.05 0 0 1 0 1.549l-5.612 5.088m-5.73-3.214v1.615a.95.95 0 0 0 1.525.845l5.108-4.251a1.1 1.1 0 0 0 0-1.646L9.418 1.685a.95.95 0 0 0-1.525.846v1.7c-3.312 0-6 2.979-6 6.654v1.329a.7.7 0 0 0 1.344.353 5.174 5.174 0 0 1 4.652-3.191l.004-.003Z" />
                        </svg>
                    </span>
                    <span class="mx-3">
                        <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                        </svg>
                    </span>
                    <span class="mx-3">
                        <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m11.479 1.712 2.367 4.8a.532.532 0 0 0 .4.292l5.294.769a.534.534 0 0 1 .3.91l-3.83 3.735a.534.534 0 0 0-.154.473l.9 5.272a.535.535 0 0 1-.775.563l-4.734-2.49a.536.536 0 0 0-.5 0l-4.73 2.487a.534.534 0 0 1-.775-.563l.9-5.272a.534.534 0 0 0-.154-.473L2.158 8.48a.534.534 0 0 1 .3-.911l5.294-.77a.532.532 0 0 0 .4-.292l2.367-4.8a.534.534 0 0 1 .96.004Z" />
                        </svg>
                    </span>
                </div>
            </section>
        </section>
        <section class="h-fit flex flex-col xl:flex-row dark:bg-[#1f2937] px-4 py-2 mt-7 border border-gray-200 border-solid">
            <section class="flex justify-center items-center p-5 dark:bg-[#111828]">
                <img class="w-full xl:w-[100rem]" src="https://etc.usf.edu/clipart/37100/37148/frac_02-03_37148_lg.gif" alt="">
            </section>
            <section class="w-full flex flex-col justify-end dark:bg-[#111828]">
                <div class="h-32 xl:h-20 flex border-b border-gray-200 border-solid pl-5">
                    <img class="w-[60px] h-[60px] rounded-full my-auto" src="{{ URL::asset('assets/imgs/bjorka.png') }}" alt="{{-- isi username / nama --}}">
                    <p class="dark:text-white my-auto ml-3 text-xl">Bjorka</p>
                </div>
                <div class="h-[20rem] xl:h-full">
                    <div class="user-post dark:text-white flex items-center">
                        <div class="cover-image rounded-full w-8">
                            <img src="{{ asset('assets/imgs/logo_codio.png') }}" alt="" srcset="" class="">
                        </div>
                        <span class="flex-1 ml-2 whitespace-nowrap">Username</span>
                    </div>
                    <textarea class="w-full h-full resize-none bg-transparent dark:text-white cursor-default focus:outline-none overflow-y-auto scroll-smooth" type="text" readonly>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem incidunt, expedita aut maiores corrupti in recusandae nihil eius perspiciatis eum quos mollitia fugit reprehenderit earum. Deleniti veniam obcaecati eos laborum!</textarea>
                </div>
                <div class="h-[5rem] xl:h-24 flex items-center justify-center border-t border-gray-200 border-solid">
                    <span class="mx-3">
                        <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 15">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m13.717 1 5.518 4.95a1.05 1.05 0 0 1 0 1.549l-5.612 5.088m-5.73-3.214v1.615a.95.95 0 0 0 1.525.845l5.108-4.251a1.1 1.1 0 0 0 0-1.646L9.418 1.685a.95.95 0 0 0-1.525.846v1.7c-3.312 0-6 2.979-6 6.654v1.329a.7.7 0 0 0 1.344.353 5.174 5.174 0 0 1 4.652-3.191l.004-.003Z" />
                        </svg>
                    </span>
                    <span class="mx-3">
                        <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                        </svg>
                    </span>
                    <span class="mx-3">
                        <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m11.479 1.712 2.367 4.8a.532.532 0 0 0 .4.292l5.294.769a.534.534 0 0 1 .3.91l-3.83 3.735a.534.534 0 0 0-.154.473l.9 5.272a.535.535 0 0 1-.775.563l-4.734-2.49a.536.536 0 0 0-.5 0l-4.73 2.487a.534.534 0 0 1-.775-.563l.9-5.272a.534.534 0 0 0-.154-.473L2.158 8.48a.534.534 0 0 1 .3-.911l5.294-.77a.532.532 0 0 0 .4-.292l2.367-4.8a.534.534 0 0 1 .96.004Z" />
                        </svg>
                    </span>
                </div>
            </section>
        </section>
    </section>
    {{-- Post Section End --}}

    {{-- Menu Bar Section Start --}}
    <section class="menu-bar-main">

    </section>
    {{-- Menu Bar Section End --}}
@endsection
@section('script')

@endsection
