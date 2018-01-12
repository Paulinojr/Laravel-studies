
@if(count($post->comments))

    <ul class="list-group">

        @foreach($post->comments as $comment)

            <li class="list-group-item">

                <strong>
                    {{ $comment->created_at->diffForHumans() }}
                    by Random User:
                </strong>

                {{ $comment->body }}

            </li>

        @endforeach

    </ul>
@endif

<hr>


        <form action="/posts/{{ $post->id }}/comments" method="post">

            {{ csrf_field() }}

            <div class="form-group">

                <textarea name="body" rows="8" cols="80" placeholder="Leave a comment here (unless it's a mean one)" class="form-control"></textarea>

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </form>
        @include('partials.errors')
