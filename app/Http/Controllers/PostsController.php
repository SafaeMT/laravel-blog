<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
    /**
     * Display a listing of the posts sorted by newest.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $posts = Post::all()->sort(function ($a, $b) {
            return ($a->post_date > $b->post_date) ? -1 : 1;
        });
        return view('articles', ['posts' => $posts]);
    }

    /**
     * Display the specified post.
     *
     * @param  string  $post_name
     * @return \Illuminate\Http\Response
     */
    public function show($post_name)
    {
        // Get first post with post_name == $post_name and its author's name
        $post = Post::where('post_name', $post_name)->first();
        $author_name = $post->author->name;
        
        // Pass the post and the name of its author to the view
        return view('posts/single', array(
            'post' => $post,
            'author_name' => $author_name
        ));
    }
}
