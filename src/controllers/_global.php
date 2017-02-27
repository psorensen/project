<?php
/**
 * Global Data
 */

add_filter( 'sage/template/global/data', 'header_controller' );

function header_controller($data) {
    $featured_image_id = get_post_thumbnail_id();
    $featured_image_url = basename(wp_get_attachment_image_src($featured_image_id, 'full', true )[0]) !== 'default.png' && ! is_home() && ! is_singular('post')
        ? wp_get_attachment_image_src($featured_image_id, 'full', true )[0]
        : wp_get_attachment_image_src(4447, 'full', true )[0];

    $data['background_style'] =
        sprintf('
        background:
        /* top, transparent red, faked with gradient */
        linear-gradient(
        rgba(0,0,0, 0.4),
        rgba(0,0,0, 0.4)
        ),
        /* bottom, image */
        url(%s);
        background-size: cover;
        background-position: top;
        background-repeat: no-repeat;
        ', $featured_image_url
        );

    $about_page = get_page_by_path('about')->ID;
    $data['about_pages'] = get_pages(['child_of' => $about_page]);
    $campaign_query = new WP_Query([
        'post_type' => 'campaign',
        'date_query' => [
            'before' => '2016-05-01'
        ]
    ]);
    $data['campaigns'] = $campaign_query->get_posts();
	$data['breadcrumbs'] = true;
    return $data;
}

//  rgba(1, 123, 210, 0.7),
//  rgba(1, 123, 210, 0.7)