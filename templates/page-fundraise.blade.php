@extends('layouts.full')


@section('content')
<section class="container mb-5">

    <div class="section-heading">
        <h2>Get started with your campaign today</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut dolore explicabo incidunt laborum molestias odit recusandae repudiandae. Assumenda, esse.</p>
    </div>
       <div class="row align-items-center mb-5">
        <div class="col-sm-3 offset-1 text-center">
            <img src="@asset('images/svg/computer.svg')" alt="" class="img-fluid" width="150">
        </div>
        <div class="col-sm-6">
            <h6><span class="badge badge-pill badge-primary mb-2 caps py-1">Step 1</span></h6>
            <h4>Set Up Your Campaign</h4>
            <p>Setting up a campaign is easy. After logging in via Facebook, Google, or Twitter, simply fill out the form and you're ready to start campaigning! </p>
        </div>
    </div>
    <div class="row align-items-center mb-5">
        <div class="col-sm-3 offset-1 first-xs text-center">
            <img src="@asset('images/svg/share.svg')" alt="" width="150">
        </div>
        <div class="col-sm-6 text-left-xs">
            <h6><span class="badge badge-pill badge-primary mb-2 caps py-1">Step 2</span></h6>
            <h4>Share It With The World</h4>
            <p>Once your campaign is set up, simply share it with as many people as you can. The more people you reach, the more donations you will receive.</p>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-sm-3 offset-1 text-center">
            <img src="@asset('images/svg/chart.svg')" alt="" width="120">
        </div>
        <div class="col-sm-6">
            <h6><span class="badge badge-pill badge-primary mb-2 caps py-1">Step 3</span></h6>
            <h4>Track Your Investment</h4>
            <p>100% of these donations go directly to providing stoves and fuel for families. After your campaign is over, we'll report back to you exactly where your money went.</p>
        </div>
    </div>
</section>
<section class="bg-blue py-5 dark-bg text-center">
    <h3 class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, dignissimos.</h3>
    <a href="" class="btn btn-danger">Start Your Campaign Today</a>
</section>
@endsection
