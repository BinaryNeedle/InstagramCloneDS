<nav id="navbar"
    class="fixed z-50 w-full md:w-0 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700"
    style="transition: top 0.3s;">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="md:hidden items-center">
                <a href="{{ url('') }}" class="flex ml-2">
                    <img src="{{ URL::asset('assets/imgs/logo-exported.png') }}" class="h-8 mr-3"
                        alt="Instantgram Logo" />
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Instantgram</span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ml-3">
                    <div>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            {{-- <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo"> --}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-52 xl:w-64 h-screen transition-transform -translate-x-full md:translate-x-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full flex flex-col justify-between px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <a href="{{ url('') }}" class="hidden md:flex ml-2 md:mr-24 pt-5">
            <img src="{{ URL::asset('assets/imgs/logo-exported.png') }}" class="h-8 mr-3" alt="Instantgram Logo" />
            <span id="instantgram_font"
                class="self-center text-xl xl:text-2xl sm:text-lg font-semibold whitespace-nowrap dark:text-white">Instantgram</span>
        </a>
        <ul class="space-y-2 font-medium h-fit flex flex-col items-stretch">
            <li>
                <a href="{{ url('/') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6.487 1.746c0 4.192 3.592 1.66 4.592 5.754 0 .828 1 1.5 2 1.5s2-.672 2-1.5a1.5 1.5 0 0 1 1.5-1.5h1.5m-16.02.471c4.02 2.248 1.776 4.216 4.878 5.645C10.18 13.61 9 19 9 19m9.366-6h-2.287a3 3 0 0 0-3 3v2m6-8a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="ml-3">Explore</span>
                </a>
            </li>
            <li>
                <a href="{{ route('search') }}" {{-- fix bang kalo mau --}}
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Search</span>
                    {{-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> --}}
                </a>
            </li>
            <li>
                <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                    class="flex w-full items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                    type="button">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 5.757v8.486M5.757 10h8.486M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="flex ml-3 whitespace-nowrap">Add New Post</span>
                    {{-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
                </button>
            </li>
        </ul>
        <ul class="space-y-5 font-medium h-fit flex flex-col items-stretch pb-2">
            <li>
                <a href="{{ auth()->check() ? route('profileDetail', ['username' => '@' . auth()->user()->username]) : '' }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <div class="cover-images">
                        <img src="{{ asset('assets/imgs/profiles/' . auth()->user()->images) }}" alt=""
                            srcset="" class="cover-image w-10 h-10 rounded-full">
                    </div>
                    <span class="flex-1 ml-3 whitespace-nowrap">{{ optional(auth()->user())->username }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                    wire-navigate>
                    <svg class="w-7 h-6 ml-1 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<!-- Main modal -->
<div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 hidden right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-5">
            <form class="text-left font-medium flex flex-col" action="{{ route('postCreate') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-head w-100 h-full mb-10 flex dark:text-white">
                    <button data-modal-hide="static-modal" type="button"
                        class="dark:text-blue-600 mr-auto text-center">
                        Back
                    </button>
                    <h1 class="text-center dark:text-white">Create Your Own Post</h1>
                    <button type="submit" class="ml-auto text-center text-blue-600">Publish</button>
                </div>
                <div class="card-body flex items-center w-full h-full dark:text-white">
                    <div id="browse-file"
                        class="mx-10 w-[700px] h-[700px] items-center justify-center bg-slate-600 border border-blue-600">
                        <input type="file" id="file" name="images" accept="image/*" hidden
                            onchange="previewImage(this)">
                        <div class="img-area w-full h-full before:z-50 rounded overflow-hidden flex justify-center items-center"
                            data-img="">
                            <img id="preview" src="" alt=""
                                class="object-cover object-center z-50" hidden>
                            <label for="file" id="select-image"
                                class="select-image cursor-pointer bg-blue-700 rounded px-4 py-2">Select Image</label>
                        </div>
                    </div>
                    <div id="FormSection w-full h-fit justify-center">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/imgs/profiles/' . auth()->user()->images) }}" alt="profile"
                                sizes="" srcset="" class="w-8">
                            <span class="ml-2 text-sm">{{ optional(auth()->user())->username }}</span>
                        </div>
                        <div id="Forms" class="flex flex-col  text-center">
                            <div class="my-7">
                                <textarea id="captions" name="caption" cols="40" rows="20"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Write your description here..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Comment Modal --}}
<section class="z-50 bg-black/70 fixed w-full h-screen">
    <section class="flex justify-center items-center h-screen">
        <section class="flex items-center w-full md:w-[470px] h-[836px] dark:bg-[#111828]">
            <section class="">
                <img src="{{ asset('assets/imgs/post/sunrise.jpg') }}" alt="">
            </section>
        </section>
        <section class="w-full md:w-[470px] h-[836px] relative"> {{-- width and height is based on ration 16:9 --}}
            <section class="h-full dark:bg-[#111828]">
                <section class="flex py-3">
                    <img class="w-10  rounded-full" src="{{ asset('assets/imgs/profiles/bjorka.png') }}"
                        alt="">
                    <p class="dark:text-white self-center ml-3 -mt-1"><a href="#"><b>Codio</a></b><span
                            wire:poll.1s> •
                            6 Year ago</span></p>
                </section>
                <section class="h-[700px] px-2 overflow-auto scrollbar-hide">
                    <section class="flex flex-col py-3">
                        <div class="flex mb-2">
                            <img class="w-10 h-10 my-auto rounded-full"
                                src="{{ asset('assets/imgs/profiles/bjorka.png') }}" alt="">
                            <p class="dark:text-white self-center ml-3 -mt-1"><a href="#"><b>Codio</a></b></p>
                        </div>
                        <p
                            class="dark:text-white self-center border-b border-solid border-slate-200 pb-1 text-justify">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Nulla imperdiet ullamcorper vehicula. Sed a leo leo. Donec ullamcorper
                            tempor blandit. Ut mollis at ipsum vitae venenatis. Praesent quis pharetra dolor. In in
                            facilisis magna. Integer blandit malesuada accumsan. Nunc a velit mollis, molestie nisl at,
                            accumsan ex. Aliquam sollicitudin orci non sollicitudin ultrices. Vestibulum ante ipsum
                            primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin cursus luctus sapien
                            nec dictum.
                        </p>
                    </section>
                    <section class="flex flex-col py-3">
                        <div class="flex mb-2">
                            <img class="w-10 h-10 my-auto rounded-full"
                                src="{{ asset('assets/imgs/profiles/bjorka.png') }}" alt="">
                            <p class="dark:text-white self-center ml-3 -mt-1"><a href="#"><b>Codio</a></b></p>
                        </div>
                        <p
                            class="dark:text-white self-center border-b border-solid border-slate-200 pb-1 text-justify">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Nulla imperdiet ullamcorper vehicula. Sed a leo leo. Donec ullamcorper
                            tempor blandit. Ut mollis at ipsum vitae venenatis. Praesent quis pharetra dolor. In in
                            facilisis magna. Integer blandit malesuada accumsan. Nunc a velit mollis, molestie nisl at,
                            accumsan ex. Aliquam sollicitudin orci non sollicitudin ultrices. Vestibulum ante ipsum
                            primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin cursus luctus sapien
                            nec dictum.
                        </p>
                    </section>
                    <section class="flex flex-col py-3">
                        <div class="flex mb-2">
                            <img class="w-10 h-10 my-auto rounded-full"
                                src="{{ asset('assets/imgs/profiles/bjorka.png') }}" alt="">
                            <p class="dark:text-white self-center ml-3 -mt-1"><a href="#"><b>Codio</a></b></p>
                        </div>
                        <p
                            class="dark:text-white self-center border-b border-solid border-slate-200 pb-1 text-justify">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Nulla imperdiet ullamcorper vehicula. Sed a leo leo. Donec ullamcorper
                            tempor blandit. Ut mollis at ipsum vitae venenatis. Praesent quis pharetra dolor. In in
                            facilisis magna. Integer blandit malesuada accumsan. Nunc a velit mollis, molestie nisl at,
                            accumsan ex. Aliquam sollicitudin orci non sollicitudin ultrices. Vestibulum ante ipsum
                            primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin cursus luctus sapien
                            nec dictum.
                        </p>
                    </section>
                    <section class="flex flex-col py-3">
                        <div class="flex mb-2">
                            <img class="w-10 h-10 my-auto rounded-full"
                                src="{{ asset('assets/imgs/profiles/bjorka.png') }}" alt="">
                            <p class="dark:text-white self-center ml-3 -mt-1"><a href="#"><b>Codio</a></b></p>
                        </div>
                        <p
                            class="dark:text-white self-center border-b border-solid border-slate-200 pb-1 text-justify">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Nulla imperdiet ullamcorper vehicula. Sed a leo leo. Donec ullamcorper
                            tempor blandit. Ut mollis at ipsum vitae venenatis. Praesent quis pharetra dolor. In in
                            facilisis magna. Integer blandit malesuada accumsan. Nunc a velit mollis, molestie nisl at,
                            accumsan ex. Aliquam sollicitudin orci non sollicitudin ultrices. Vestibulum ante ipsum
                            primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin cursus luctus sapien
                            nec dictum.
                        </p>
                    </section>
                    <section class="flex flex-col py-3">
                        <div class="flex mb-2">
                            <img class="w-10 h-10 my-auto rounded-full"
                                src="{{ asset('assets/imgs/profiles/bjorka.png') }}" alt="">
                            <p class="dark:text-white self-center ml-3 -mt-1"><a href="#"><b>Codio</a></b></p>
                        </div>
                        <p
                            class="dark:text-white self-center border-b border-solid border-slate-200 pb-1 text-justify">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Nulla imperdiet ullamcorper vehicula. Sed a leo leo. Donec ullamcorper
                            tempor blandit. Ut mollis at ipsum vitae venenatis. Praesent quis pharetra dolor. In in
                            facilisis magna. Integer blandit malesuada accumsan. Nunc a velit mollis, molestie nisl at,
                            accumsan ex. Aliquam sollicitudin orci non sollicitudin ultrices. Vestibulum ante ipsum
                            primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin cursus luctus sapien
                            nec dictum.
                        </p>
                    </section>
                    <section class="flex flex-col py-3">
                        <div class="flex mb-2">
                            <img class="w-10 h-10 my-auto rounded-full"
                                src="{{ asset('assets/imgs/profiles/bjorka.png') }}" alt="">
                            <p class="dark:text-white self-center ml-3 -mt-1"><a href="#"><b>Codio</a></b></p>
                        </div>
                        <p
                            class="dark:text-white self-center border-b border-solid border-slate-200 pb-1 text-justify">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Nulla imperdiet ullamcorper vehicula. Sed a leo leo. Donec ullamcorper
                            tempor blandit. Ut mollis at ipsum vitae venenatis. Praesent quis pharetra dolor. In in
                            facilisis magna. Integer blandit malesuada accumsan. Nunc a velit mollis, molestie nisl at,
                            accumsan ex. Aliquam sollicitudin orci non sollicitudin ultrices. Vestibulum ante ipsum
                            primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin cursus luctus sapien
                            nec dictum.
                        </p>
                    </section>
                </section>
                <section
                    class="absolute inset-x-0 bottom-0 dark:bg-[#111828] pb-2 pt-1 border-t border-solid border-slate-200">
                    <section class="flex dark:text-white justify-start mb-3">
                        <span class="mr-2">
                            <form action="POST" class="inline-block">
                                @csrf
                                <button name="like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-hand-thumbs-up inline-block"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                                    </svg>
                                </button>
                            </form>
                        </span>
                        <span class="mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-chat-dots inline-block" viewBox="0 0 16 16">
                                <path
                                    d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                <path
                                    d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                            </svg>
                        </span>
                        <span class="mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                fill="currentColor" class="bi bi-share mt-1" viewBox="0 0 16 16">
                                <path
                                    d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                            </svg>
                        </span>
                    </section>
                    <p class="inline-block dark:text-white" wire:poll.750ms>
                        1</p>
                    <section class="mt-2">
                        <form action="POST">
                            @csrf
                            <div class="flex">
                                <input
                                    class="w-full dark:bg-transparent dark:text-white focus:outline-none border-b border-gray-200 border-solid pb-2"
                                    name="comment" type="text" placeholder="add a comment...">
                                <button class="dark:text-white mx-2" name="commentBtn">Post</button>
                            </div>
                        </form>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
{{-- Comment Modal End --}}
