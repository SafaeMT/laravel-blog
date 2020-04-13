<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
    function index()
    {
        //return view('articles');
        $posts = \App\Post::all();
        return view('articles', compact('posts'));
    }

    public function show($post_name)
    {
        // Get first post with post_name == $post_name and its author's name
        $post = Post::where('post_name', $post_name)->firstOrFail();
        $author_name = $post->author->name;
        
        // Pass the post and the name of its author to the view
        return view('posts/single', array(
            'post' => $post,
            'author_name' => $author_name
        ));
    }
}
