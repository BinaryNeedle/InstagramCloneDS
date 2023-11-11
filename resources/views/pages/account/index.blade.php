{{-- // Main Page on Instagram Homepage --}}
@extends('layouts.main')
@section('title', 'Profile')
@section('css')
@endsection
@section('content')
<div class="w-9/12 h-fit bg-slate-800 mx-auto dark:text-white p-16">
    <section class="info-user flex items-center justify-between w-full h-fit">
        <div class="image-section flex items-center justify-center w-2/4 h-fit">
            <div class="cover-image">
                <img src="{{ asset('assets/imgs/profiles/' . auth()->user()->images) }}" alt="" srcset="" class="w-40 rounded-full ring ring-sky-500">
            </div>
        </div>
        <div class="user w-3/4">
            <div class="username flex items-center">
                <h1 class="font-bold text-lg">
                    {{ auth()->user()->username }}
                </h1>
                <a href="{{ route('profileEdit', ['username' => '@' . auth()->user()->username]) }}" class="px-4 py-3 bg-gray-600 rounded-xl mx-14">
                    Edit Profile
                </a>
                <a href="{{ route('profileSetting', ['username' => '@' . auth()->user()->username]) }}" class="px-4 py-3 bg-gray-600 rounded-xl">
                    Setting
                </a>
            </div>
            <div class="folowers flex items-center my-7">
                <p class="">{{ $post_count }}<span class="ml-2">POST</span></p>
                <p class="mx-16">0<span class="ml-2">FOLLOWERS</span></p>
                <p class="">0<span class="ml-2">FOLLOWING</span></p>
            </div>
            <h1 class="font-bold text-lg">{{ auth()->user()->name }}</h1>
            <div class="bio my-7">
                <blockquote class="text-xl italic text-justify text-gray-900 dark:text-white">
                    <p>"{{ auth()->user()->bio }}"</p>
                </blockquote>
            </div>
        </div>
    </section>
    <hr class="bg-blue-600">
    <div class="row text-center my-7">
        <div class="col">
            <span class="ml-2">POSTS</span>
        </div>
        @if (session()->has('success'))
        <div class="flex items-center p-4 my-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
            </div>
        </div>
        @endif
    </div>
    <section class="my-post grid grid-cols-3 gap-1">
        @foreach ($posts as $post)
        <div class="post">
            <div class="cover-image aspect-square border border-info w-full h-full object-cover">
                <img src="{{ asset('assets/imgs/post/' . $post->image_url) }}" alt="" srcset="" class="object-cover h-full w-full">
            </div>
        </div>
        @endforeach
    </section>
</div>
@endsection
@section('script')

@endsection
