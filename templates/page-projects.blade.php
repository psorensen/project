@extends('layouts.1')

@section('content')
    @while(have_posts()) @php(the_post())
    @include('partials.content-page')
    <div class="card-columns">
        @foreach( $projects as $project )
            <div class="card">
                <div class="card-header">
                    {{ get_the_title($project) }}
                </div>
                <div class="card-block">
                    @php( the_excerpt($project->ID))
                </div>
                <div class="card-footer">
                    <a href="{{get_the_permalink($project)}}" class="btn btn-primary-outline">{{ get_the_title($project) }}</a>
                </div>
            </div>
        @endforeach
    </div>
    @endwhile
@endsection
