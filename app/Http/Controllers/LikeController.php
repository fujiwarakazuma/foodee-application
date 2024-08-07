<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    //
    //     public function store(Post $post){
    //         $userId = Auth::id();
    //         $post->user_id = $userId;
    //         $post->likes()->create();
    //         $post->save();
    //         return back();
    // }

    // public function destroy(Post $post)
    // {
    //     $post->likes()->where('id', request()->like_id)->delete();
    //     return back();
    // }
    public function store(Post $post)
    {
        $post->likes()->create([
            'user_id' => auth()->id(),
        ]);

        return back();
    }

    public function destroy(Post $post)
    {
        $post->likes()->where('user_id', auth()->id())->delete();

        return back();
    }
}
