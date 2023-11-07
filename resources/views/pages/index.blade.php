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
    <section class="post-main w-3/4 mx-auto dark:bg-[#1f2937]">
        <section
            class="w-[360px] h-[540px] dark:bg-[#1f2937] flex border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <section class="aspect-[2/3]">
                <img src="https://cdn.oneesports.gg/cdn-data/2022/09/Valorant_Phoenix_Banner.jpg" alt="">
            </section>
            <section class="w-20 flex flex-col justify-end m-4 dark:bg-[#111828]">
                <span>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 21 15">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m13.717 1 5.518 4.95a1.05 1.05 0 0 1 0 1.549l-5.612 5.088m-5.73-3.214v1.615a.95.95 0 0 0 1.525.845l5.108-4.251a1.1 1.1 0 0 0 0-1.646L9.418 1.685a.95.95 0 0 0-1.525.846v1.7c-3.312 0-6 2.979-6 6.654v1.329a.7.7 0 0 0 1.344.353 5.174 5.174 0 0 1 4.652-3.191l.004-.003Z" />
                    </svg>
                </span>
                <span>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                    </svg>
                </span>
                <span>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 21 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m11.479 1.712 2.367 4.8a.532.532 0 0 0 .4.292l5.294.769a.534.534 0 0 1 .3.91l-3.83 3.735a.534.534 0 0 0-.154.473l.9 5.272a.535.535 0 0 1-.775.563l-4.734-2.49a.536.536 0 0 0-.5 0l-4.73 2.487a.534.534 0 0 1-.775-.563l.9-5.272a.534.534 0 0 0-.154-.473L2.158 8.48a.534.534 0 0 1 .3-.911l5.294-.77a.532.532 0 0 0 .4-.292l2.367-4.8a.534.534 0 0 1 .96.004Z" />
                    </svg>
                </span>
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
