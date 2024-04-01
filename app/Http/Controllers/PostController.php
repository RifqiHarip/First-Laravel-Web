<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
   
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show($slug){
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }

    public function collect()
    {
        $posts = Post::all();
        return PostResource::collection($posts);
    }

    public function collectone($id)
    {
        $post = Post::findOrFail($id);
        return new PostResource($post);
    }

}
