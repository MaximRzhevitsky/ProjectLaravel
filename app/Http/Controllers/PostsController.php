<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller{

    public function allPosts(){
        $posts = Post::all();
        return view('posts',compact('posts'));
    }

    public function onePost($id)
    {
        $post = Post::find($id);
        return view('one-post', compact('post'));
    }


}
