{{-- // Main Page on Instagram Homepage --}}
@extends('layouts.main')
@section('title', 'Profile')
@section('css')
@endsection
@section('content')
    <div class="w-9/12 h-fit bg-slate-800 mx-auto dark:text-white px-16 py-16">
        <section class="info-user grid grid-row-3 grid-cols-3 gap-10 flex items-center h-fit">
            <div class="image-section row-span-2 mx-auto">
                <div class="cover-image rounded-full w-fit">
                    <img src="{{ asset('assets/imgs/' . auth()->user()->images) }}" alt="" srcset="" class="w-40">
                </div>
            </div>
            <div class="user grid grid-row-2 col-span-2">
                <div class="row flex ">
                    <div class="col">
                        <h1 class="flex-1 font-bold text-lg">{{ auth()->user()->username }}</h1>
                    </div>
                    <div class="col mx-auto">
                        <button>
                            Edit Profile
                        </button>
                    </div>
                    <div class="col mx-auto">
                        <button>
                            Setting
                        </button>
                    </div>
                </div>
                <div class="folowers my-7">
                    <div class="row flex">
                        <div class="col">
                            0 POST
                        </div>
                        <div class="col mx-auto">
                            0 FOLLOWERS
                        </div>
                        <div class="col mx-auto">
                            0 FOLLOWING
                        </div>
                    </div>
                </div>
                <h1 class="flex-1 font-bold text-lg">{{ auth()->user()->name }}</h1>
            </div>
            <div class="bio col-span-2 mb-10">
                <blockquote class="text-xl italic font-semibold text-gray-900 dark:text-white">
                    <p>{{ auth()->user()->bio }}</p>
                </blockquote>
            </div>
        </section>
        <hr class="row-span-4">
        <div class="row text-center my-10">
            <div class="col">
                <i class="fa-solid fa-table-cells"></i><span class="ml-2">POSTS</span>
            </div>
        </div>
        <section class="my-post grid grid-cols-3 gap-1">
            @foreach ($posts as $post)
                <div class="post">
                    <div class="cover-image aspect-square border border-info w-full h-full hover:scale-110 transition duration-300 cursor-pointer object-cover">
                        <img src="{{ asset('assets/imgs/post/' . $post->images) }}" alt="" srcset="" class="object-cover h-full w-full">
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
@section('script')

@endsection
