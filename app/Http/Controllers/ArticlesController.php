<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the articles sorted by newest.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->sort(function ($a, $b) {
            return ($a->post_date > $b->post_date) ? -1 : 1;
        });
        return view('admin/articles', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new article.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = [
            'culture' => 'Culture',
            'sport' => 'Sport',
            'news' => 'Faits divers',
            'politics' => 'Politique'
        ];
        return view('admin/create-article', ['categories' => $categories]);
    }

    /**
     * Store a newly created article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified article from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
