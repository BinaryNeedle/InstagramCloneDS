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
                            <img class="w-8 h-8 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
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
                <a href="{{ route('profileDetail', ['username' => '@' . auth()->user()->username]) }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <div class="cover-images">
                        <img src="{{ asset('assets/imgs/profiles/' . auth()->user()->images) }}" alt=""
                            srcset="" class="cover-image w-10 h-10 rounded-full">
                    </div>
                    <span class="flex-1 ml-3 whitespace-nowrap">{{ auth()->user()->username }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
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
                            <span class="ml-2 text-sm">{{ auth()->user()->username }}</span>
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
