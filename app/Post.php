<?php

namespace App;

use App\User;
use App\Comment;
use App\Categorie;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the user that authored the post.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comments()
    {
        //Post::with('posts.comments')->get();//le modele charge les commentaires du post
        return $this->hasMany(Comment::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
 
 