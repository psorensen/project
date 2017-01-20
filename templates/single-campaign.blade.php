@extends('layouts.2')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials/content-single-'.get_post_type())
  @endwhile
@endsection

@section('sidebar')

    <div class="card">
        <div class="card-block">
            <h3>Sidebar</h3>
            @php(charitable_template( 'content-campaign.php', array( 'content' => '', 'campaign' => charitable_get_current_campaign() ) ))
        </div>
    </div>
    @endsection