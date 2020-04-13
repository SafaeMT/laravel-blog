<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\ArticleAddRequest;
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
        return view('admin/article-form', ['categories' => Post::CATEGORIES]);
    }

    /**
     * Store a newly created article in storage.
     *
     * @param  \Illuminate\Http\ArticleAddRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleAddRequest $request)
    {
        $article = new Post;
        // TODO: replace by user.id when authentication is implemented
        $article->user_id = 1;
        $article->post_title = $request->title;
        $article->post_category = $request->category;
        $article->post_content = $request->content;
        // To have URLs in the format "url-to-visit"
        $article->post_name = str_replace(' ', '-', strtolower($article->post_title));
        $article->save();

        return redirect('articles/' . $article->post_name);
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post_name)
    {
        $post = Post::where('post_name', $post_name)->first();
        return view('admin/article-form', ['post' => $post, 'categories' => Post::CATEGORIES]);
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
