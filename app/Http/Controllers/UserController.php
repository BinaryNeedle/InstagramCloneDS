<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display a setting pages of the user.
     */
    public function settingPages()
    {
        $user = Auth::user();
        $email = $user->email;
        return view('pages.account.setting', compact(
            'email'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Auth::user()->id;
        $posts = Post::all()->where('user_id', $user);
        $post_count = $posts->count();
        return view('pages.account.index', compact(
            'posts',
            'post_count'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Auth::user();
        $username = $user->username;
        $name = $user->name;
        $bio = $user->bio;
        $images = $user->images;
        return view('pages.account.edit-profile', compact(
            'user',
            'username',
            'name',
            'bio',
            'images',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user_id = $request->id;
        $user = User::find($user_id);
        $username = $user->username;
        $name = $user->name;
        $bio = $user->bio;
        $images = $user->images;

        if ($request->hasFile('images') == NULL) {
            $uploadImage = $images;
        }

        $username = $request->username;
        $name = $request->name;
        $bio = $request->bio;

        $user->username = $username;
        $user->name = $name;
        $user->bio = $bio;
        $user->images = $uploadImage;
        $user->save();

        return redirect('/@' . $username);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
