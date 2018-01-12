<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="#">Home</a>
      <a class="nav-link" href="#">New features</a>
      <a class="nav-link" href="#">Press</a>
      <a class="nav-link" href="#">New hires</a>
      <a class="nav-link" href="#">About</a>

      {{-- Only displays the name if the user is logged in --}}
      @if(Auth::check())
          <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
      @endif
    </nav>
  </div>
</div>

<div class="blog-header">
  <div class="container">
    <h1 class="blog-title">A Blog</h1>
    <p class="lead blog-description">This is a blog.</p>
  </div>
</div>
