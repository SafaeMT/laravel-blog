<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\User;
use App\Post;
use Illuminate\Config\Repository;

class CommentsController extends Controller
{
    //
    public function index($post)
    {
        //
    }

    public function store(CommentRequest $request) //methode chargée de gérer la soumission du commentaire
    {
        $comment = new Comment(); //$this->model; 
        
        if (Auth::check()) {
            $comment->user_name = $request->user()->name;
            $comment->email = $request->user()->email;
        } else {
            $comment->user_name = $request->user_name; //recuperer le user_name
            $comment->email = $request->email;
        }

        $comment->post_id = $request->post_id; //recuper le post_id
        $comment->body = $request->body;
        $comment->approved = true;
        $comment->save();



        return redirect()->route('articles.show', ['post_name' => $comment->post->post_name]);
    }
}
