<?php

add_filter( 'sage/template/projects/data', 'projects_controller' );

function projects_controller($data) {
    $projects = new WP_Query(['post_type' => 'campaign', 'posts_per_page' => -1, 'author' => 1]);
    $data['projects'] = $projects->get_posts();
    wp_reset_query();

    return $data;
}

