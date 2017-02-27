@extends('layouts.2')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials/content-single-'.get_post_type())
  @endwhile
@endsection

@section('sidebar')

    <div class="card">
        <h2 class="card-header">Sidebar</h2>
        <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nulla quasi repellat ut voluptatem. Accusamus cupiditate exercitationem quasi recusandae reiciendis.</div>
    </div>
    @endsection

