@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <h1> {{ $post->title }} </h1>

                {{ $post->body }}

            </div>
            @include('partials.sidebar')
        </div>
    </div>

@endsection
