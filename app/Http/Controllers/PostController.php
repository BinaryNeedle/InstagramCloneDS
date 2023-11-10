<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'images' => 'required|mimes:png,jpg,jpeg|max:2048',
        //     ]);

        // // dd($images);


        $username = Auth::user()->username;
        $user_id = Auth::user()->id;

        $post = new Post;
        $post->user_id = $user_id;
        $post->caption = $request->caption;

        if (request()->hasFile('images')){
            $images = $request->file('images');
            $fileName = Carbon::now()->getTimestampMs() . "-" . $images->getClientOriginalName();
            $path = public_path('/assets/imgs/post/');
            $images->move($path, $fileName);
            $post->images = $fileName;
            // Storage::disk('public')->put($path, file_get_contents($images));s
        }

        $post->save();

        return redirect('/@' . $username)->with('success', 'Post created successfully!');
    }

    public function show($id)
    {
        $post = Post::find($id);
        $likeController = new LikeController;
        $hasLiked = $likeController->hasLiked($id);
        $likeCount = $post->countLikes();

        return view('post.show', ['post' => $post, 'hasLiked' => $hasLiked, 'likeCount' => $likeCount]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->update($validatedData);

        return redirect('/posts')->with('success', 'Post updated successfully!');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted successfully!');
    }
}