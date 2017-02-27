@extends('layouts.1')

@section('content')
    @while(have_posts()) @php(the_post())
    @include('partials.content-page')
        <div class="row">
            @foreach($projects as $post)
                <div class="col-sm-3">
                    {!! get_the_post_thumbnail($post, 'card', ['class' => 'img-fluid']) !!}
                    <h3>{{ get_the_title($post) }}</h3>
                </div>
            @endforeach
    </div>
@endwhile
@endsection
