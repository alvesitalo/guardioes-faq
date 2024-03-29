<?php
/*
    Plugin Name: Guardiões FAQ
    Plugin URI: https://github.com/alvesitalo/guardioes-faq
    Description: Adiciona o FAQ ao Guardiões da Saúde, permite ser usado pelo site e pela REST API.
    Version: 1.0
    Author: Ítalo Alves
    Author URI: https://github.com/alvesitalo
    License: GPL2
*/

function create_post_type_faq() {
    $labels = array(
        'name'               => 'FAQ',
        'singular_name'      => 'FAQ',
        'add_new'            => 'Adicionar nova',
        'add_new_item'       => 'Adicionar nova pergunta',
        'edit_item'          => 'Editar pergunta',
        'new_item'           => 'Nova pergunta',
        'all_items'          => 'Todas as perguntas',
        'view_item'          => 'Ver pergunta',
        'search_items'       => 'Pesquisar perguntas'
    );

    $args = array(
        'labels'            => $labels,
        'description'       => 'Permite adicionar perguntas ao site',
        'public'            => true,
        'menu_position'     => 5,
        'menu_icon'         => 'dashicons-format-status',
        'supports'          => array( 'title', 'editor', 'excerpt' ),
        'has_archive'       => true,
        'show_in_rest'      => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => true,
    );

    // Register FAQ post type
    register_post_type( 'faq', $args );
}

include_once('endpoints.php');

add_action( 'init', 'create_post_type_faq' );