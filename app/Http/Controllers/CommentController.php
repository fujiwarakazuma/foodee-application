<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    //
        public function store(Request $request, Post $post)
    {
        $validated = $request->validate([
            'comment' => 'required|string',
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'comment' => $validated['comment'],
        ]);
        return back();
    }
}
