{{-- // Main Page on Instagram Homepage --}}
@extends('layouts.main')
@section('title', 'Profile')
@section('css')
@endsection
@section('content')
    <div class="w-9/12 h-full bg-black mx-auto dark:text-white">
        <section class="info-user grid grid-row-3 grid-cols-2 flex items-center justify-center h-fit p-28">
            <div class="cover-image rounded-full row-span-2">
                <img src="{{ URL::to('/') }}/assets/imgs/logo_codio.png" alt="" srcset="" class="w-40">
            </div>
            <div class="user grid grid-row-2">
                <span class="flex-1 mb-10 whitespace-nowrap">{{ auth()->user()->username }}</span>
                <div class="folowers">
                    <div class="row flex items-center justify-between">
                        <div class="col">POST</div>
                        <div class="col">
                            FOLLOWERS
                        </div>
                        <div class="col">FOLLOWING</div>
                    </div>
                </div>
            </div>
            <div class="bio col-span-2 my-10">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut odit eum harum sed temporibus neque earum voluptate saepe optio dolor rem blanditiis modi sequi pariatur asperiores beatae, cumque, totam facere?</p>
            </div>
        </section>
        <hr class="row-span-4">
    </div>
@endsection
@section('script')

@endsection
