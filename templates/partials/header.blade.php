<header class="banner" style="
        background:
        /* top, transparent red, faked with gradient */
        linear-gradient(
        rgba(38,34,98, 0.85),
        rgba(38,34,98, 0.95)
        ),
        /* bottom, image */
        url({{ $img }});
        background-size: cover;
        background-repeat: no-repeat;
      ">
  <nav class="navbar navbar-toggleable-md navbar-inverse">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ home_url('/') }}">
      <img src="@asset('images/logos/logo_wordmark_white.svg')" width="250">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto', 'container' => false]) !!}
      @endif
    </div>

  </nav>
  <div class="page-header">
    <div class="container">
      <h1>{!! App\title() !!}</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequuntur expedita libero? Autem consectetur ducimus earum explicabo ipsa minus ratione.</p>
    </div>
  </div>

</header>

