@extends('layout')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-sm-8">

                <h1>Add a post</h1>

                <div class="form-group">
                    <form method="POST" action="/posts">
                        {{ csrf_field() }}

                        <div class="form-group">

                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"  placeholder="Insert the post title here">


                            <label for="body">Body</label>
                            <textarea class="form-control" id="body" rows="10" name="body" >
                            </textarea>
                        </div>
                        <div class="form-group">

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>

                        @include('partials.errors')

                    </form>
                </div>

            </div>

            @include('partials.sidebar')

        </div>
    </div>


@endsection
