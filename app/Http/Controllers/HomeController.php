<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    function index()
    {
        // gets the 3 newest posts
        $posts = (Post::all())->sort(function ($a, $b) {
            return ($a->post_date > $b->post_date) ? -1 : 1;
        })->slice(0, 3);

        return view('welcome', array(
            'posts' => $posts
        ));
    }
}
