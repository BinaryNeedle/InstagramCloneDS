{{-- // Main Page on Instagram Homepage --}}
@extends('layouts.main')
@section('title', 'Instantgram')
@section('css')
@section('content')
    {{-- Story Section Start --}}
    <div class="story-main">

    </div>
    {{-- Story Section End --}}

    {{-- Post Section Start --}}
    <div class="post-main flex justify-center">
        {{-- <div class="grid">
            <div><img src="https://source.unsplash.com/t3DHojIo-08" alt=""></div>
            <div><img src="https://source.unsplash.com/Imc-IoZDMXc" alt=""></div>
            <div><img src="https://source.unsplash.com/SOZWHqeXcPQ" alt=""></div>
            <div><img src="https://source.unsplash.com/bkdzvgBB7rQ" alt=""></div>
            <div><img src="https://source.unsplash.com/Aruugw_rJCM" alt=""></div>
            <div><img src="https://source.unsplash.com/t3DHojIo-08" alt=""></div>
            <div><img src="https://source.unsplash.com/Imc-IoZDMXc" alt=""></div>
            <div><img src="https://source.unsplash.com/SOZWHqeXcPQ" alt=""></div>
            <div><img src="https://source.unsplash.com/bkdzvgBB7rQ" alt=""></div>
            <div><img src="https://source.unsplash.com/Aruugw_rJCM" alt=""></div>
            <div><img src="https://source.unsplash.com/t3DHojIo-08" alt=""></div>
            <div><img src="https://source.unsplash.com/Imc-IoZDMXc" alt=""></div>
            <div><img src="https://source.unsplash.com/SOZWHqeXcPQ" alt=""></div>
            <div><img src="https://source.unsplash.com/bkdzvgBB7rQ" alt=""></div>
            <div><img src="https://source.unsplash.com/Aruugw_rJCM" alt=""></div>
            <div><img src="https://source.unsplash.com/t3DHojIo-08" alt=""></div>
            <div><img src="https://source.unsplash.com/Imc-IoZDMXc" alt=""></div>
            <div><img src="https://source.unsplash.com/SOZWHqeXcPQ" alt=""></div>
            <div><img src="https://source.unsplash.com/bkdzvgBB7rQ" alt=""></div>
            <div><img src="https://source.unsplash.com/Aruugw_rJCM" alt=""></div>
        </div> --}}
        <div class="flex">
            <div class="aspect-[2/3] bg-white w-80 flex flex-col justify-center">
                <img src="https://static01.nyt.com/images/2022/09/01/business/00roose-1/merlin_212276709_3104aef5-3dc4-4288-bb44-9e5624db0b37-superJumbo.jpg"
                    alt="">
            </div>
            <div class="w-10 bg-[#1f2937] flex flex-col justify-center">
                <div></div>
                <div></div>
                <div><svg class="my-2 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.008 8.714c1-.097 1.96-.45 2.792-1.028a25.112 25.112 0 0 0 4.454-5.72 1.8 1.8 0 0 1 .654-.706 1.742 1.742 0 0 1 1.65-.098 1.82 1.82 0 0 1 .97 1.128c.075.248.097.51.065.767l-1.562 4.629M4.008 8.714H1v9.257c0 .273.106.535.294.728a.99.99 0 0 0 .709.301h1.002a.99.99 0 0 0 .71-.301c.187-.193.293-.455.293-.728V8.714Zm8.02-1.028h4.968c.322 0 .64.08.925.232.286.153.531.374.716.645a2.108 2.108 0 0 1 .242 1.883l-2.36 7.2c-.288.813-.48 1.354-1.884 1.354-2.59 0-5.39-1.06-7.504-1.66" />
                    </svg>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.992 11.287c-1 .097-1.96.45-2.792 1.029a25.118 25.118 0 0 0-4.454 5.721 1.803 1.803 0 0 1-.655.705 1.742 1.742 0 0 1-1.648.096 1.786 1.786 0 0 1-.604-.457 1.874 1.874 0 0 1-.432-1.439l1.562-4.626m9.023-1.03H19V2.03c0-.273-.106-.535-.294-.728A.99.99 0 0 0 17.997 1h-1.002a.99.99 0 0 0-.71.301 1.042 1.042 0 0 0-.293.728v9.258Zm-8.02 1.03H3.003c-.322 0-.64-.08-.925-.233a2.022 2.022 0 0 1-.716-.645 2.108 2.108 0 0 1-.242-1.883l2.36-7.2C3.769 1.54 3.96 1 5.365 1c2.59 0 5.39 1.06 7.504 1.66" />
                    </svg>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m5.953 7.467 6.094-2.612m.096 8.114L5.857 9.676m.305-1.192a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0ZM17 3.84a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0Zm0 10.322a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0Z" />
                    </svg>
                </div>
            </div>
            <div class="dark:text-white"></div>
        </div>
    </div>
    {{-- Post Section End --}}

    {{-- Menu Bar Section Start --}}
    <div class="menu-bar-main">

    </div>
    {{-- Menu Bar Section End --}}
@endsection
@section('script')

@endsection
