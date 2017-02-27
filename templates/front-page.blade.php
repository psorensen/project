@extends('layouts.full', ['breadcrumbs' => false])

@section('content')
    {{--@php(var_dump($terms))--}}

    <section class="page-section">
        <div class="container">
            <h2 class="text-blue
             text-center mb-5">What is Project Gaia?</h2>
            <div class="row">
                <div class="col-sm-8 offset-2">
                    <div class="two-columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias, doloribus fugit libero
                            magnam non quibusdam reiciendis sapiente sit vero.</p>
                        <p>Architecto cupiditate distinctio dolore doloremque, dolorum eligendi, exercitationem id labore
                            mollitia odit possimus qui saepe soluta sunt tempore ullam vitae!</p>
                        <p>Iure mollitia repudiandae vel? Assumenda beatae consectetur cupiditate dolorem enim error fuga,
                            obcaecati placeat possimus quasi, quis ratione. Perferendis, quidem!</p>
                        <p>Consectetur corporis dicta eaque earum error harum, impedit libero nam numquam perferendis qui
                            repellendus sit soluta tenetur ut vel, veniam.</p>
                    </div>
                </div>
            </div>
            <p class="text-center my-5">
                <a href="{{ home_url('/the-problem') }}">Why Stoves?</a>
            </p>
        </div>
    </section>
    <section class="bg-purple">
        <div class="container text-center page-section dark-bg" >
            <h2>Get Involved</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad architecto libero nostrum pariatur possimus quasi, qui quia reiciendis sit ut?</p>
            <div class="row">
                <div class="col-sm-4">
                    <img src="@asset('images/logos/logo_symbol_white.svg')" alt="" width="50" class="mb-3">
                    <h5>Donate</h5>
                    <p>Investments from supporters like you make our mission possible.</p>
                    <p><a href="">Make A Donation</a></p>
                </div>
                <div class="col-sm-4">
                    <img src="@asset('images/logos/logo_symbol_white.svg')" alt="" width="50" class="mb-3">
                    <h5>Fundraise</h5>
                    <p>Create your own fundraising campaign on our site. Share it with your friends and family!</p>
                    <p><a href="">Start A Campaign</a></p>
                </div>
                <div class="col-sm-4">
                    <img src="@asset('images/logos/logo_symbol_white.svg')" alt="" width="50" class="mb-3">
                    <h5>Volunteer</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus debitis ducimus eum quae tempore totam.</p>
                    <p><a href="">Learn More</a></p>
                </div>
            </div>
        </div>
    </section>

    <div id="locations" class="">
        <div class="container-fluid pr-0">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-right p-5">
                    <h2 class="text-blue">Where We Work</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis eos eaque, iusto, laborum nisi blanditiis.</p>
                    <p class="lead">Explore our projects by country or theme.</p>
                    <ul class="list-inline text-right">
                        @foreach($terms as $term)
                        <li class="list-inline-item mb-2">
                            <a class="btn btn-sm btn-outline-primary js-project-focus" href="javascript:void(0)" data-filter='{{ $term['campaigns'] }}'>{{ $term['name'] }}</a>
                        </li>
                        @endforeach
                      </ul>

                </div>
                <div class="col-xs-12 col-sm-6">

                    <div id='map'></div>
                </div>
            </div>
        </div>
    </div>
    <section class="page-section bg-faded">
        <div class="container">
            <h3 class="text-center mb-5">Latest News</h3>
            <div class="row">
                @foreach($latest_posts as $post)
                    <div class="col-sm-4">

                        <div class="card">
                            @if( has_post_thumbnail($post))
                                {!! get_the_post_thumbnail($post, 'card', ['class' => 'card-img-top img-fluid']) !!}
                            @else
                                <img src="{{ wp_get_attachment_image_src(4447, "card", true )[0] }}" class="card-img-top img-fluid wp-post-image" />
                            @endif
                            <div class="card-block">
                                <h5 class="card-title"><a href="{{ get_the_permalink($post) }}">{{ get_the_title($post) }}</a></h5>
                                <p class="card-text">{!! get_the_excerpt($post) !!}</p>
                                <p class="card-text"><small class="text-muted">{{ get_the_date('F j, Y', $post) }}</small></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection
