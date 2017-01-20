@extends('layouts.1')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
@endsection
