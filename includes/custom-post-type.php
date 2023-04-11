<?php

function cvd_custom_post() {

    $servicesPost_Label = array(
        'name'                  => __('Services Post', 'textdomain'),
        'singular_name'         => __('Services Post', 'textdomain'),
        'add_new'               => __('Add Services Post', 'textdomain'),
        'add_new_item'         => __('Add New Services', 'textdomain'),
        'edit_item'            => __('Edit Services Post', 'textdomain'),
        'all_items'             => __('Services Post', 'textdomain')
    );

    $servicesPost_args = array(
        'labels'                => $servicesPost_Label,
        'public'                => true,
        'capabality_type'       => 'post',
        'show_ui'               => true,
        'taxonomies'            => array ('post_tag', 'category'),
        'supports'              => array ('title','editor','thumbnail','excerpt')

    );

    register_post_type('ServicesPost',$servicesPost_args);

    $latestPost_Label = array(
        'name'                  => __('Latest Post', 'textdomain'),
        'singular_name'         => __('Latest Post', 'textdomain'),
        'add_new'               => __('Add Latest Post', 'textdomain'),
        'add_new_item'         => __('Add New Latest', 'textdomain'),
        'edit_item'            => __('Edit Latest Post', 'textdomain'),
        'all_items'             => __('Latest Post', 'textdomain')
    );

    $latestPost_args = array(
        'labels'                => $latestPost_Label,
        'public'                => true,
        'capabality_type'       => 'post',
        'show_ui'               => true,
        'taxonomies'            => array ('post_tag', 'category'),
        'supports'              => array ('title','editor','thumbnail','excerpt')

    );

    register_post_type('LatestPost',$latestPost_args);
}

add_action('init', 'cvd_custom_post');