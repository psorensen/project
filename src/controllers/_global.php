<?php
/**
 * Global Data
 */

add_filter( 'sage/template/global/data', 'header_controller' );

function header_controller($data) {
    $featured_image_id = get_post_thumbnail_id();
    $featured_image_url = wp_get_attachment_image_src($featured_image_id, 'full', true );

    $data['img'] = $featured_image_url[0];

    return $data;
}