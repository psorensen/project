<header class="banner">
  <div class="container">

    <nav class="navbar navbar-toggleable-md navbar-light">


      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{ home_url('/') }}">
        <img src="@asset('images/logos/logo_wordmark_color.svg')" width="180">
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'navbar-nav ml-auto',
          'container' => false,
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker()
                ]) !!}
        @endif
      </div>
    </nav>
  </div>

</header>


