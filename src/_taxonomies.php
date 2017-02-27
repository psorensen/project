<?php

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Team Member Locations.
	 */

	$labels = array(
		"name" => __( 'Team Member Locations', '' ),
		"singular_name" => __( 'Team Member Location', '' ),
	);

	$args = array(
		"label" => __( 'Team Member Locations', '' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => 0,
		"label" => "Team Member Locations",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'team/location', 'with_front' => false, ),
		"show_admin_column" => 1,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "team-location", array( "team" ), $args );

	/**
	 * Taxonomy: Focus.
	 */

	$labels = array(
		"name" => __( 'Focus', '' ),
		"singular_name" => __( 'Focus', '' ),
	);

	$args = array(
		"label" => __( 'Focus', '' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => 0,
		"label" => "Focus",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'skill', 'with_front' => false, ),
		"show_admin_column" => 0,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "skill", array( "campaign" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );
