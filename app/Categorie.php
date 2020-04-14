<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //

    public function comments()
    {
        return $this->hasMany('Comment');
    }
 
    public function categorie()
    {
        return $this->belongsTo('Categorie');
    }
 
    public function user()
    {
        return $this->belongsTo('User');
    }
}
