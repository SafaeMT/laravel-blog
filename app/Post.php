<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the user that authored the post.
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function categorie()
    {
        return $this->belongsTo('Categorie');
    }
}
 
 