<?php
/*
    Endpoints for WP REST API
*/

function faq_add_posts_endpoints() {
    register_rest_route( 'api/v2', 'faq', array(
        'methods' => 'POST',
        'callback' => 'add_posts_callback'
    ));
}

function add_posts_callback( $request ) {
    $params = $request->get_json_params();

    $api_response = wp_remote_post( get_rest_url( null, 'wp/v2/faq' ), array(
        'headers' => array(
           'Authorization' => 'Basic ' . base64_encode( 'user:pwd' )
       ),
       'body' => array(
           'title'   => $params['title'],
           'content' => $params['content']
        )
    ));

    return $api_response['body'];
}

add_action( 'rest_api_init', 'faq_add_posts_endpoints' );