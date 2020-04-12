<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'post_id', 'comment_content',
    ];
     //
    public function article()
    {
        return $this->belongsTo('Article');
    }
 
    public function user()
    {
        return $this->belongsTo('User');
    }
}
