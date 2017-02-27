<?php

function pgi_scripts() {
    if (is_front_page()) {
        wp_enqueue_script( 'countries', 'https://projectgaia.com/geo.json', $in_footer = true );
        wp_enqueue_script( 'leaflet', 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.2/leaflet.js', $in_footer = true );
        wp_enqueue_style( 'leaflet', 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.2/leaflet.css' );
        wp_enqueue_script( 'mapbox-js', 'https://api.tiles.mapbox.com/mapbox-gl-js/v0.21.0/mapbox-gl.js');
        wp_enqueue_style( 'mapbox-css', 'https://api.tiles.mapbox.com/mapbox-gl-js/v0.21.0/mapbox-gl.css');
    }
}

add_action( 'wp_enqueue_scripts', 'pgi_scripts' );

function add_img_column($columns) {
    $columns['img'] = 'Featured Image';
    return $columns;
}
add_filter('manage_pages_columns', 'add_img_column');
add_filter('manage_pages_custom_column', 'manage_img_column', 10, 2);


function manage_img_column($column_name, $post_id) {
    if ( $column_name == 'img' ) {
        $post_thumbnail_id = get_post_thumbnail_id( $post_id );
        if ( $post_thumbnail_id ) {
            $post_thumbnail_img = wp_get_attachment_image_src( $post_thumbnail_id, [50,50] );
            echo '<img src="' . $post_thumbnail_img[0] . '" />';
        }
    }
}