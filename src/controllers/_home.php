<?php

add_action('wp_head', 'pgi_campaigns_json');
function pgi_campaigns_json() {
	if ( ! is_front_page() ) return;

	$countries_query = new WP_Query([
		'post_type' => 'campaign',
		'post_author' => 1
	]);
	$countries = $countries_query->get_posts();

	$countries_array = [];

	foreach ($countries as $post) {
		$name = get_the_title($post->ID);
		$countries_array[$name]['name'] = $name;
		$countries_array[$name]['url'] = get_the_permalink($post->ID);
		$countries_array[$name]['img'] = 'http://placehold.it/100x50';
	}

	$countries_array['India']['coords'] = [20.59, 78.96];
	$countries_array['Mozambique']['coords'] = [-18.76, 35.52];
	$countries_array['Ethiopia']['coords'] = [9.14, 40.48];
	$countries_array['Nigeria']['coords'] = [9.08, 8.67];
	$countries_array['Haiti']['coords'] = [18.97, -72.28];
	$countries_array['Madagascar']['coords'] = [-18.76, 46.86];
	$countries_array['Brazil']['coords'] = [-14.23, -51.92];
	$countries_array['Kenya']['coords'] = [0.02, 37.90];

	echo sprintf('
		<script>
			var pgi_countries_json = [
			  %s
			]
		</script>
	', json_encode(array_values($countries_array)));
}

add_filter( 'sage/template/home/data', 'front_page_controller' );
function front_page_controller($data) {

    $latest_posts = new WP_Query(['posts_per_page' => 3]);
    $data['latest_posts'] = $latest_posts->get_posts();

    $terms = get_terms('campaign_category');
    $data['terms'] = [];
    foreach ($terms as $term) {
    	$query = new WP_Query(['post_type' => 'campaign', 'campaign_category' => $term->slug]);
    	$data['terms'][$term->slug]['name'] = $term->name;
    	$data['terms'][$term->slug]['description'] = $term->description;
    	$posts = $query->get_posts();
    	foreach ($posts as $post) {
    		$posts_array[] = get_the_title($post->ID);
	    }
	    $data['terms'][$term->slug]['campaigns'] = json_encode($posts_array);
    	unset($posts_array);
    }

    return $data;
}