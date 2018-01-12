<?php

namespace App;


class Posts extends Model
{

    public function comments()
    {

        return $this->hasMany(Comment::class);

    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }

    public function addComment($body)
    {
        // Comment::create([
        //
        //     //gets what comes from the request
        //     'body' => request('body'),
        //
        //     'posts_id' => $post->id
        //
        // ]);

        $this->comments()->create(['body' => $body]);
    }
}
