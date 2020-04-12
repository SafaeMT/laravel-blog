<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'post_id', 'body',
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
