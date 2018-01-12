
@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <h1>Register</h1>

                <form action="/register" method="POST">

                    {{ csrf_field() }}

                    <div class="form-group">

                        <label for="name">Name:</label>

                        <input type="text" class="form-control" name="name" id="name">

                    </div>

                    <div class="form-group">

                        <label for="email">Email:</label>

                        <input type="email" class="form-control" id="email" name="email">

                    </div>

                    <div class="form-group">

                        <label for="password">Password:</label>

                        <input type="password" class="form-control" name="password" id="password">

                    </div>

                    <div class="form-group">

                        <label for="password_confirmation">Confirm your password:</label>

                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary"> Register </button>

                    </div>

                    @include('partials.errors')

                </form>

            </div>

        </div>

    </div>

@endsection
