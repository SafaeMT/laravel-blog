<?php

namespace App;

use App\User;
use App\Comment;
use App\Categorie;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    /**
     * List of posts' categories.
     */
    const CATEGORIES = [
        'culture' => 'Culture',
        'sport' => 'Sport',
        'news' => 'Faits divers',
        'politics' => 'Politique'
    ];

    /**
     * Get the user that authored the post.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comments()
    {
        
        return $this->hasMany(Comment::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
 
 