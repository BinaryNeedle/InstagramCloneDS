<?php

namespace App\Http\Controllers;

use App\Models\Like;

class LikeController extends Controller
{
    public function hasLiked($postId)
    {
        $like = Like::where('user_id', auth()->user()->id)->where('post_id', $postId)->first();

        return $like ? true : false;
    }

    public function addLike($postId)
    {
        $like = new Like;
        $like->user_id = auth()->user()->id;
        $like->post_id = $postId;
        $like->save();

        return response()->json(['message' => 'Like added successfully']);
    }

    public function removeLike($postId)
    {
        $like = Like::where('user_id', auth()->user()->id)->where('post_id', $postId)->first();

        if (!$like) {
            return response()->json(['message' => 'Like not found'], 404);
        }

        $like->delete();

        return response()->json(['message' => 'Like removed successfully']);
    }
}
