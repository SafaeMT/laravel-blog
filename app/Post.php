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
}
 
 