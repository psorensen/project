<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <img src="@asset('images/logos/logo_wordmark_white.svg')" alt="" class="img-fluid">
      </div>
      <div class="col-sm-2 offset-1">
        <h4 class="caps small">About Us</h4>
        <ul class="list-unstyled">
          @foreach( $about_pages as $post )
            <li><a href="{{ get_the_permalink($post) }}">{{ get_the_title($post) }}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-sm-2">
        <h4 class="caps small">Get Involved</h4>
        <ul class="list-unstyled">
          <li><a href="/projects">Projects</a></li>
          <li><a href="/donate">Donate</a></li>
          <li><a href="/fundraise">Fundraise</a></li>
          <li><a href="/resources">Resources</a></li>
        </ul>
      </div>
    </div>

  </div>
</footer>
