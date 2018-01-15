<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Posts $posts)
    {

        //Fetch all posts
        $posts = $posts->all();

        return view('posts.index', [
            'posts' => $posts
        ]);

    }

    public function show(Posts $post)
    {

        return view('posts.show', [
            'post' => $post
        ]);

    }

    public function create()
    {

        return view('posts.create');

    }

    public function store()
    {
        /* Create a new post using the request data
        the slash '/' before the path, is to indicate we want to start from the root; */
        $post = new \App\Posts;

        $post->title = request('title');
        $post->body = request('body');
        $post->user_id = auth()->id();

        $this->validateData();

        //Save it to the database
        $post->save();

        //Redirect to the homepage
        return redirect('/');

    }

    public function validateData()
    {
        $this->validate(request(), [

            'title' => 'required',
            'body' => 'required'

        ]);
    }
}
