</div><!-- /.blog-main -->

<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        @foreach($archive as $item)
            <li><a href="#">{{ $item['month'] }}, {{$item['year']}}</a></li>
        @endforeach
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->
</div><!-- /.container -->
