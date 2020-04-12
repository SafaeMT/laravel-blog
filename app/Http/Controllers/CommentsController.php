<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    public function index($post)
    {

       //
    }


    public function create (CommentRequest $request)
    {
        $body = request['']//message

    }


    public function store(Request $request)
    {
        $this->gestioncomment->store($request->all(), $request->user()->user_id);
 
        return redirect()->back();
    //}
 //----creer un front .blog
    //return redirect()->back()->with('warning', trans('front/blog.warning'));
    }

// /**
//  * Store a comment.
//  *
//  * @param  array $inputs
//  * @param  int   $user_id
//  * @return void
//  */
// public function store($inputs, $user_id)
// {
//     $comment = new $this->model; 
 
//     $comment->content = $inputs['comments'];
//     $comment->post_id = $inputs['post_id'];
//     $comment->user_id = $user_id;
 
//     $comment->save();
// }
    
}
