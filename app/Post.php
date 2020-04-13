<?php

namespace App;

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
        return $this->belongsTo('App\User', 'user_id');
    }
}
 
 