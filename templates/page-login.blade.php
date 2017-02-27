@extends('layouts.1', ['breadcrumbs' => false])

@section('content')

    <?php
    /**
     * The template used to display the login form. Provided here primarily as a way to make
     * it easier to override using theme templates.
     *
     * Override this template by copying it to yourtheme/charitable/shortcodes/login.php
     *
     * @author  Eric Daams
     * @package Charitable/Templates/Account
     * @since   1.0.0
     * @version 1.4.2
     */

    if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly
    $view_args = [];
    $login_form_args = array_key_exists( 'login_form_args', $view_args ) ? $view_args['login_form_args'] : array();
    ?>

    @if( ! is_user_logged_in() )
    <div class="alert alert-warning">
        <h2>Todo</h2>
        <p>Educate users to why they must register to set up a campaign</p>
    </div>
    <div class="charitable-login-form">
        <div class="row">

            <div class="col-xs-12 col-md-5">
                <?php do_action( 'wordpress_social_login' ); ?>
            </div>
            <div class="col-xs-12 col-md-2">
			<span class="login_or">
				or
			</span>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="wp-social-login-connect-with">Sign In</div>
                <?php


                do_action( 'charitable_login_form_before' );

                wp_login_form( $login_form_args );

                ?>
                <p style="margin-top: 1rem;">
                    <?php if ( array_key_exists( 'registration_link', $view_args ) && $view_args['registration_link'] ) : ?>
                    <a href="<?php echo esc_url( $view_args['registration_link'] ) ?>"><?php echo $view_args['registration_link_text'] ?></a>&nbsp;|&nbsp;
                    <?php endif ?>
                    <a href="<?php echo esc_url( charitable_get_permalink( 'forgot_password_page' ) ) ?>"><?php _e( 'Forgot Password', 'charitable' ) ?></a>
                </p>
                <?php


                do_action( 'charitable_login_form_after' )


                ?>
            </div>
        </div>

    </div>
    @else
    <h1>Already Logged In</h1>
    @endif



@endsection
