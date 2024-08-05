<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(Post $post){
        return view('posts.index')->with(['posts' => $post->get()]);
    }
    
    public function create(Post $post) {
        return view('posts.create');
    }
    
    public function regist(Request $request,Post $post) {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

}
