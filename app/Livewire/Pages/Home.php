<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Post;

class Home extends Component
{
    public $title = "Instantgram";

    public $totalRecords;
    public $loadAmount = 4;
    public $captionState = "collapsed";

    public function loadMore()
    {
        $this->loadAmount += 4;
    }

    public function mount()
    {
        $this->totalRecords = Post::count();
    }

    public function setCaptionState($post)
    {
        dd($post, 'panggil');
        $post->captionState = "expanded";
    }

    public function likeThisPost($id)
    {
        $post = Post::find($id);

        if ($this->isLiked($post)) {
            $post->likes()->where('user_id', auth()->user()->id)->delete();
            return;
        }

        $post->likes()->create([
            'user_id' => auth()->user()->id
        ]);
    }

    public function isLiked($post)
    {
        if ($post->likes->contains('user_id', auth()->user()->id)) {
            return true;
        }
        return false;
    }

    public function getCaptionText($post)
    {
        $limit = 68;
        $caption = $post->caption;

        if ($post->captionState === "expanded") return $caption;

        if (strlen($caption) > $limit) {
            $caption = substr($caption, 0, $limit) . '...';
            return $caption;
        }
    }

    public function getLikeCountText($post)
    {
        $count = $post->likes->count();
        if ($count === 0) {
            return '';
        }
        return $count . ' ' . ($count == 1 ? 'like' : 'likes');
    }

    public function getCommentCountText($post)
    {
        $count = $post->comments->count();
        if ($count === 0) {
            return '';
        }
        return 'View all ' . $count . ' ' . ($count == 1 ? 'comment' : 'comments');
    }

    public function render()
    {
        return view('livewire.pages.home')->with(
            'posts',
            Post::limit($this->loadAmount)->orderBy('created_at', 'desc')->get()
        );
    }
}
