<header class="banner">
  <nav class="navbar navbar-toggleable-md navbar-inverse">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto', 'container' => false]) !!}
        @endif
    </div>

  </nav>
  <div class="page-header mb-5">
    <div class="container">
      <h1>{!! App\title() !!}</h1>
    </div>
  </div>

</header>