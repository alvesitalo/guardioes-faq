<?php
/*
    FAQ Endpoints for WP REST API
*/

function faq_add_posts_endpoints() {
    register_rest_route( 'api/v2', 'faq', array(
        'methods' => 'POST',
        'callback' => 'post_faq_callback'
    ));
}

function post_faq_callback( $data ) {
    $params = $data->get_json_params();

    $api_response = wp_remote_post( get_rest_url( null, 'wp/v2/faq' ), array(
        'headers' => array(
           'Authorization' => 'Basic ' . base64_encode( FAQ_USER . ':' . FAQ_PASSWORD )
       ),
       'body' => array(
           'title'   => $params['title'],
           'content' => $params['content']
        )
    ));

    return json_decode( $api_response['body'] );
}

add_action( 'rest_api_init', 'faq_add_posts_endpoints' );