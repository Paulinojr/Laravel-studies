<?php

namespace App;


class Comment extends Model
{

    //Loads the post based on the comment
    public function posts()
    {

        return $this->belongsTo(Posts::class);

    }

    //The comment belongs to a post but it also belongs to an user
    public function user()
    {

        return $this->belongsTo(User::class);
        
    }

}
