<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\User;
use App\Post;

class CommentsController extends Controller
{
    //
    public function index($post)
    {

       //
    }



    public function store(CommentRequest $request, Post $post) //methode chargée de gérer la soumission du commentaire
    {
        $validator = $request->validate([ //validation de la requete
               
        'user_name' => ['required', 'user_name', 'max:200'],
        'comment_content'=> ['required', 'body', 'max:6500']
        ]);

     
        $comment = new $this->model; 
        $body= $request ['body'];
        $comment->body = $body;
        $comment->post_id = $request['post_id'];//comment recuperer le post_id
        $comment->user_id = $request['user_id'];
        $user = User::where('user_id',$comment->user_id)->first();
        
        $comment->save();
        return redirect()->back();
        
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
            }
        
    }

    


    
}
