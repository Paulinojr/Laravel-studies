<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;
use App\Comment;

class CommentsController extends Controller
{

    public function store(Posts $post)
    {

        $this->validate(request(), ['body' => 'required|min:2|max:280']);

        $post->addComment(request('body'));


        return back();

    }

}
