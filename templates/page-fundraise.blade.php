@extends('layouts.base')
<?php

$persons = json_decode(wp_remote_get('https://randomuser.me/api/?results=4&nat=us,dk,fr')['body'])->results;
$format = '
';
?>

@section('content')
<div class="container">

    <h1 class="text-center">How Do Campaigns Work?</h1>
    <div class="row middle-xs">
        <div class="col-sm-6">
            <img src="<?php bloginfo('template_url') ?>/assets/images/fundraise_signup.png" alt="">
        </div>
        <div class="col-sm-6">
            <h2><span class="number-circled">1</span>Set Up Your Campaign</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident nobis totam natus libero placeat perspiciatis, corrupti iusto. Vel sed voluptas explicabo delectus veniam voluptate quibusdam?</p>
        </div>
    </div>
    <div class="row middle-xs">
        <div class="col-sm-6 text-right text-left-xs first-sm">
            <h2><span class="number-circled">2</span>Share It With The World</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident nobis totam natus libero placeat perspiciatis, corrupti iusto. Vel sed voluptas explicabo delectus veniam voluptate quibusdam?</p>
        </div>
        <div class="col-sm-6 first-xs">
            <img src="<?php bloginfo('template_url') ?>/assets/images/fundraise_share.png" alt="">
        </div>
    </div>
    <div class="row middle-xs">
        <div class="col-sm-6">
            <img src="<?php bloginfo('template_url') ?>/assets/images/fundraise_signup.png" alt="">
        </div>
        <div class="col-sm-6">
            <h2><span class="number-circled">3</span>Track Your Investment</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident nobis totam natus libero placeat perspiciatis, corrupti iusto. Vel sed voluptas explicabo delectus veniam voluptate quibusdam?</p>
        </div>
    </div>

    <div id="fundraise-stories" class="page-section dark-bg blue-bg">
        <h1 class="text-center">Success Stories</h1>
        <div class="row">
            <?php foreach ($persons as $person) {
                echo sprintf($format, $person->picture->thumbnail,  $person->name->first . ' ' . $person->name->last, mt_rand(2000, 5000), $person->name->first);
            } ?>
        </div>
    </div>
</div>
@endsection
