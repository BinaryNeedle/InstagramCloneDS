@section('css')
    <link rel="stylesheet" href="{{ URL::asset('src/css/partials/scrollbar.css') }}">
@endsection
<section class="post-main mx-auto">
    {{-- {{dd($posts);}} --}}
    @foreach ($posts as $post)
        <section class="w-full md:w-[470px] mx-0 md:mx-auto mb-3"
            @if ($loop->last) id="last_record" @endif>
            <section class="flex py-3">
                <img class="w-10  rounded-full" src="{{ asset('assets/imgs/profiles/' . $post->user->images) }}"
                    alt="">
                <p class="dark:text-white self-center ml-3 -mt-1"><a
                        href="#"><b>{{ $post->user->username }}</a></b><span wire:poll.1s> •
                        {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span></p>
            </section>
            <section class="mb-3">
                <img src="{{ asset('assets/imgs/post/' . $post->image_url) }}" alt="">
            </section>
            <section class="flex dark:text-white justify-start mb-3">
                <span class="mr-2">
                    
                        <button name="like" wire:click="likeThisPost({{$post->post_id}})">

{{-- {{ dd($post[0]) }} --}}
@if($this->isLiked($post))
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-hand-thumbs-up-fill inline-block" viewBox="0 0 16 16">
                                <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                            </svg>
@else
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-hand-thumbs-up inline-block" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg>
@endif
                        </button>
                    
                </span>
                <span class="mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-chat-dots inline-block" viewBox="0 0 16 16">
                        <path
                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        <path
                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                    </svg>
                </span>
                <span class="mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-share mt-1" viewBox="0 0 16 16">
                        <path
                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                    </svg>
                </span>
            </section>
            <p class="{{ $post->likes->count() == 0 ? 'hidden' : 'inline-block' }} dark:text-white" wire:poll.750ms>
                {{ $this->getLikeCountText($post) }}</p>
            <section class="mb-3">
                <p class="w-full resize-none bg-transparent focus:outline-none overflow-hidden max-h-32 dark:text-white text-justify scrollbar-hide"
                    readonly>{{ $this->getCaption($post, false) }}</p>
                <a href="#" wire:click="setCaptionState($post)" wire:click.prevent="..." class="dark:text-slate-400">more</a>
            </section>
            <a href="#" class="dark:text-slate-400" wire:poll.750ms>{{ $this->getCommentCountText($post) }}</a>
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
    @endforeach
    {{-- <section class="w-full md:w-[470px] mx-0 md:mx-auto mb-3">
        <section class="flex py-3">
            <img class="w-12" src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="">
            <p class="dark:text-white self-center ml-1"><a href="#"><b><span>@</span>Codio</a></b><span> • 2
                    d</span></p>
        </section>
        <section class="mb-3">
            <img src="https://s3.amazonaws.com/www-inside-design/uploads/2020/10/aspect-ratios-blogpost-1x1-1.png" alt="">
        </section>
        <section class="flex dark:text-white justify-start mb-3">
            <span class="mx-2">
                <form action="POST" class="inline-block">
                    @csrf
                    <button name="like">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-hand-thumbs-up inline-block" viewBox="0 0 16 16">
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                        </svg>
                    </button>
                </form>
                <p class="inline-block">-1 like</p>
            </span>
            <span class="mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-dots inline-block" viewBox="0 0 16 16">
                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                </svg>
                <p class="inline-block">-1 comment</p>
            </span>
            <span class="mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                </svg>
            </span>
        </section>
        <section class="mb-3">
            <textarea class="w-full resize-none bg-transparent focus:outline-none dark:text-white text-justify h-32 scrollbar-hide" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis elit sed venenatis scelerisque. Praesent et enim libero. Aenean sed vulputate odio. Ut libero quam, auctor sed accumsan non, rutrum id metus. Nam tempus enim et magna ullamcorper fermentum. Curabitur odio justo, dictum dignissim commodo quis, aliquam eu risus. In eget nunc eget ipsum convallis iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis elit sed venenatis scelerisque. Praesent et enim libero. Aenean sed vulputate odio. Ut libero quam, auctor sed accumsan non, rutrum id metus. Nam tempus enim et magna ullamcorper fermentum. Curabitur odio justo, dictum dignissim commodo quis, aliquam eu risus. In eget nunc eget ipsum convallis iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis elit sed venenatis scelerisque. Praesent et enim libero. Aenean sed vulputate odio. Ut libero quam, auctor sed accumsan non, rutrum id metus. Nam tempus enim et magna ullamcorper fermentum. Curabitur odio justo, dictum dignissim commodo quis, aliquam eu risus. In eget nunc eget ipsum convallis iaculis.</textarea>
        </section>
        <section>
            <form action="POST">
                @csrf
                <div class="flex">
                    <input class="w-full dark:bg-transparent dark:text-white focus:outline-none border-b border-gray-200 border-solid" name="comment" type="text" placeholder="add a comment...">
                    <button class="dark:text-white mx-2" name="commentBtn">Post</button>
                </div>
            </form>
        </section>
    </section>
    <section class="w-full md:w-[470px] mx-0 md:mx-auto mb-3">
        <section class="flex py-3">
            <img class="w-12" src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="">
            <p class="dark:text-white self-center ml-1"><a href="#"><b><span>@</span>Codio</a></b><span> • 2
                    d</span></p>
        </section>
        <section class="mb-3">
            <img src="{{ URL::asset('assets/imgs/23.jpg') }}" alt="">
        </section>
        <section class="flex dark:text-white justify-start mb-3">
            <span class="mx-2">
                <form action="POST" class="inline-block">
                    @csrf
                    <button name="like">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-hand-thumbs-up inline-block" viewBox="0 0 16 16">
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                        </svg>
                    </button>
                </form>
                <p class="inline-block">-1 like</p>
            </span>
            <span class="mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-dots inline-block" viewBox="0 0 16 16">
                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                </svg>
                <p class="inline-block">-1 comment</p>
            </span>
            <span class="mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                </svg>
            </span>
        </section>
        <section class="mb-3">
            <textarea class="w-full resize-none bg-transparent focus:outline-none dark:text-white text-justify h-32 scrollbar-hide" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis elit sed venenatis scelerisque. Praesent et enim libero. Aenean sed vulputate odio. Ut libero quam, auctor sed accumsan non, rutrum id metus. Nam tempus enim et magna ullamcorper fermentum. Curabitur odio justo, dictum dignissim commodo quis, aliquam eu risus. In eget nunc eget ipsum convallis iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis elit sed venenatis scelerisque. Praesent et enim libero. Aenean sed vulputate odio. Ut libero quam, auctor sed accumsan non, rutrum id metus. Nam tempus enim et magna ullamcorper fermentum. Curabitur odio justo, dictum dignissim commodo quis, aliquam eu risus. In eget nunc eget ipsum convallis iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis elit sed venenatis scelerisque. Praesent et enim libero. Aenean sed vulputate odio. Ut libero quam, auctor sed accumsan non, rutrum id metus. Nam tempus enim et magna ullamcorper fermentum. Curabitur odio justo, dictum dignissim commodo quis, aliquam eu risus. In eget nunc eget ipsum convallis iaculis.</textarea>
        </section>
        <section>
            <form action="POST">
                @csrf
                <div class="flex">
                    <input class="w-full dark:bg-transparent dark:text-white focus:outline-none border-b border-gray-200 border-solid" name="comment" type="text" placeholder="add a comment...">
                    <button class="dark:text-white mx-2" name="commentBtn">Post</button>
                </div>
            </form>
        </section>
    </section>
    <section class="w-full md:w-[470px] mx-0 md:mx-auto mb-3">
        <section class="flex py-3">
            <img class="w-12" src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="">
            <p class="dark:text-white self-center ml-1"><a href="#"><b><span>@</span>Codio</a></b><span> • 2
                    d</span></p>
        </section>
        <section class="mb-3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Aspect-ratio-4x3.svg/2560px-Aspect-ratio-4x3.svg.png" alt="">
        </section>
        <section class="flex dark:text-white justify-start mb-3">
            <span class="mx-2">
                <form action="POST" class="inline-block">
                    @csrf
                    <button name="like">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-hand-thumbs-up inline-block" viewBox="0 0 16 16">
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                        </svg>
                    </button>
                </form>
                <p class="inline-block">-1 like</p>
            </span>
            <span class="mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-dots inline-block" viewBox="0 0 16 16">
                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                </svg>
                <p class="inline-block">-1 comment</p>
            </span>
            <span class="mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                </svg>
            </span>
        </section>
        <section class="mb-3">
            <textarea class="w-full resize-none bg-transparent focus:outline-none dark:text-white text-justify h-32 scrollbar-hide" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis elit sed venenatis scelerisque. Praesent et enim libero. Aenean sed vulputate odio. Ut libero quam, auctor sed accumsan non, rutrum id metus. Nam tempus enim et magna ullamcorper fermentum. Curabitur odio justo, dictum dignissim commodo quis, aliquam eu risus. In eget nunc eget ipsum convallis iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis elit sed venenatis scelerisque. Praesent et enim libero. Aenean sed vulputate odio. Ut libero quam, auctor sed accumsan non, rutrum id metus. Nam tempus enim et magna ullamcorper fermentum. Curabitur odio justo, dictum dignissim commodo quis, aliquam eu risus. In eget nunc eget ipsum convallis iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis elit sed venenatis scelerisque. Praesent et enim libero. Aenean sed vulputate odio. Ut libero quam, auctor sed accumsan non, rutrum id metus. Nam tempus enim et magna ullamcorper fermentum. Curabitur odio justo, dictum dignissim commodo quis, aliquam eu risus. In eget nunc eget ipsum convallis iaculis.</textarea>
        </section>
        <section>
            <form action="POST">
                @csrf
                <div class="flex">
                    <input class="w-full dark:bg-transparent dark:text-white focus:outline-none border-b border-gray-200 border-solid" name="comment" type="text" placeholder="add a comment...">
                    <button class="dark:text-white mx-2" name="commentBtn">Post</button>
                </div>
            </form>
        </section>
    </section>
    <section class="w-full md:w-[470px] mx-0 md:mx-auto mb-3">
        <section class="flex py-3">
            <img class="w-12" src="{{ URL::asset('assets/imgs/logo_codio.png') }}" alt="">
            <p class="dark:text-white self-center ml-1"><a href="#"><b><span>@</span>Codio</a></b><span> • 2
                    d</span></p>
        </section>
        <section class="mb-3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Aspect-ratio-16x9.svg/2560px-Aspect-ratio-16x9.svg.png" alt="">
        </section>
        <section class="flex dark:text-white justify-start mb-3">
            <span class="mx-2">
                <form action="POST" class="inline-block">
                    @csrf
                    <button name="like">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-hand-thumbs-up inline-block" viewBox="0 0 16 16">
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                        </svg>
                    </button>
                </form>
                <p class="inline-block">-1 like</p>
            </span>
            <span class="mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-dots inline-block" viewBox="0 0 16 16">
                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                </svg>
                <p class="inline-block">-1 comment</p>
            </span>
            <span class="mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                </svg>
            </span>
        </section>
        <section class="mb-3">
            <textarea class="w-full resize-none bg-transparent focus:outline-none dark:text-white text-justify h-32 scrollbar-hide" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis elit sed venenatis scelerisque. Praesent et enim libero. Aenean sed vulputate odio. Ut libero quam, auctor sed accumsan non, rutrum id metus. Nam tempus enim et magna ullamcorper fermentum. Curabitur odio justo, dictum dignissim commodo quis, aliquam eu risus. In eget nunc eget ipsum convallis iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis elit sed venenatis scelerisque. Praesent et enim libero. Aenean sed vulputate odio. Ut libero quam, auctor sed accumsan non, rutrum id metus. Nam tempus enim et magna ullamcorper fermentum. Curabitur odio justo, dictum dignissim commodo quis, aliquam eu risus. In eget nunc eget ipsum convallis iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis elit sed venenatis scelerisque. Praesent et enim libero. Aenean sed vulputate odio. Ut libero quam, auctor sed accumsan non, rutrum id metus. Nam tempus enim et magna ullamcorper fermentum. Curabitur odio justo, dictum dignissim commodo quis, aliquam eu risus. In eget nunc eget ipsum convallis iaculis.</textarea>
        </section>
        <section>
            <form action="POST">
                @csrf
                <div class="flex">
                    <input class="w-full dark:bg-transparent dark:text-white focus:outline-none border-b border-gray-200 border-solid" name="comment" type="text" placeholder="add a comment...">
                    <button class="dark:text-white mx-2" name="commentBtn">Post</button>
                </div>
            </form>
        </section>
    </section> --}}
</section>

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
                        <p class="dark:text-white self-center border-b border-solid border-slate-200 pb-1 text-justify">
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
                        <p class="dark:text-white self-center border-b border-solid border-slate-200 pb-1 text-justify">
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
                        <p class="dark:text-white self-center border-b border-solid border-slate-200 pb-1 text-justify">
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

<script type="text/javascript">
    const lastRecord = document.getElementById('last_record')
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 1.0
    }

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                @this.loadMore();
            }
        })
    })

    observer.observe(lastRecord);
</script>
