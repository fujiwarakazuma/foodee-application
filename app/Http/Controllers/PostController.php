<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Region;
use App\Models\Category;

class PostController extends Controller
{
    //
    public function index(Post $post){
        $posts = Post::withCount('likes')->orderBy('likes_count', 'desc')->get();
        return view('posts.index')->with(['posts' => $post->get()]);
        // dd($post);
    }
    
    public function show(Post $post){
        return view('posts.show')->with(['post' => $post]);
        //   dd($post); 
    }
    
    public function create() {
        $regions = Region::all();
        $categories = Category::all();
        return view('posts.create')->with([
            'regions' => $regions,
            'categories' => $categories
        ]);
    }

    
    public function store(Request $request, Post $post) {
        $userId = Auth::id();
        $input = $request['post'];
        $post->fill($input);
        $post->user_id = $userId;
        $post->save();
        

        return redirect()->route('posts.index');
    }

}