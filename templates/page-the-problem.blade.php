@extends('layouts.blank')

@section('content')

    <section class="story-section story-section--smoke text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <h2>Each day, 3 billion people cook their meals using polluting biomass fuels. </h2>
                    <p>The smoke from wood & charcoal stoves causes 4 million deaths each year. 500,000 of these deaths are from childhood pneumonia.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="story-section story-section--carry text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <h2>with increasing deforestation, women must travel further and further to gather wood.</h2>
                    <p>Trips for fuelwood are dangerous, as women risk violence or sexual assault, especially in conflict regions.Long hours collecting fuel and cooking over inefficient stoves prevent women and girls from pursuing an education or a source of income.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="story-section story-section--stove">
        <div class="container text-center">
            <h6>Our Solution</h6>
            <h2>The Clean Cook Stove</h2>
            <p>Project Gaia promotes clean cookstoves that are powered by alcohol fuels – fuels that are clean, safe, and efficient. </p>
            <img src="@asset('images/story/stove.jpg')" alt="" class="mb-5">
            <ul class="stove-benefits row">
                <li class="col-sm-4">
                    <img src="@asset('images/svg/recycle.svg')" alt="" width="50" class="d-block mx-auto">
                    <p>Clean alcohol fuels and safe, efficient stoves create a renewable system for household energy.</p>
                </li>
                <li class="col-sm-4">
                    <img src="@asset('images/svg/red-cross.svg')" alt="" width="50" class="d-block mx-auto">
                    <p>Ethanol & methanol burn cleanly with no smoke or soot, alleviating the harmful health effects of cooking fire & generating a healthy home for families.</p>
                </li>
                <li class="col-sm-4">
                    <img src="@asset('images/svg/heart-1.svg')" alt="" width="50" class="d-block mx-auto">
                    <p>Women no longer face assault or exhaustion from long trips spent gathering wood. With a fuel that cooks quickly they have time to live their lives.</p>
                </li>
                <li class="col-sm-4">
                    <img src="@asset('images/svg/leaf.svg')" alt="" width="50" class="d-block mx-auto">
                    <p>Alcohol fuels and microdistilleries create a market for farmers & make use of otherwise wasted crops</p>
                </li>
                <li class="col-sm-4">
                    <img src="@asset('images/svg/clipboard.svg')" alt="" width="50" class="d-block mx-auto">
                    <p>New local economies for energy independence are established.</p>
                </li>
                <li class="col-sm-4">
                    <img src="@asset('images/svg/forest.svg')" alt="" width="50" class="d-block mx-auto">
                    <p>Moving from the forests to the field prevents deforestation and reduces the effects of climate change.</p>
                </li>
            </ul>
        </div>

    </section>
    <section class="story-section story-section--smile pt-0">
        <div class="container">
            <div class="row">
               <div class="col-sm-8 offset-sm-4">
                   <h3 class="mt-2">With your help, we can improve the lives women and children</h3>
                   <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci esse laboriosam numquam perspiciatis similique tempora.</p>
                    <div class="card-deck text-center">
                        <div class="card">
                            <div class="card-block">
                                <img src="@asset('images/svg/heart.svg')" alt="" class="d-block mx-auto mb-3" width="75">
                                <h4>Donate</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cumque doloremque eum nihil, quis ratione?</p>

                            </div>
                            <div class="card-footer">
                                <a href="{{ home_url('/donate') }}" class="btn btn-primary">Donate Now</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <img src="@asset('images/svg/stats.svg')" alt="" class="d-block mx-auto mb-3" width="75">
                                <h4>Fundraise</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur iusto
                                    laudantium natus nobis quibusdam, reprehenderit vel!</p>

                            </div>
                            <div class="card-footer">
                                <a href="{{ home_url('/fundraise') }}" class="btn btn-danger">Create A Campaign</a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </section>


@endsection
