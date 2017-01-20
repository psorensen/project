<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
      <div class="wrap container" role="document">
        <div class="content row">
          <main class="main col-sm-8">
            @yield('content')
          </main>
          <aside class="aside col-sm-4">
            @yield('sidebar')
          </aside>
        </div>
      </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
