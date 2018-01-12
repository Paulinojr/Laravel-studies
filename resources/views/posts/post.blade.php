<div class="blog-post">

  <h2 class="blog-post-title">

      <a href="/posts/{{$post->id}}">
            {{ $post->title }}
      </a>

  </h2>
  <p class="blog-post-meta">
      {{ $post->created_at->toFormattedDateString() }} by {{$post->user->name}}
  </p>

  <p>

      {{ $post->body }}

      <br>

      <a href="/posts/{{$post->id}}">
          Read more...
      </a>
  </p>

</div><!-- /.blog-post -->
