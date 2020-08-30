<?php

function create_philosophy_post_type() {
    $labels = [
        'name'               => 'Philosophy',
        'singular_name'      => 'Philosophy',
        'add_new'            => 'new Philosophy',
        'add_new_item'       => __( 'Add New Philosophy' ),
        'edit_item'          => __( 'Edit Philosophy' ),
        'new_item'           => __( 'New Philosophy' ),
        'all_items'          => __( 'All Philosophy' ),
        'view_item'          => __( 'View Philosophy' ),
        'search_items'       => __( 'Search Philosophy' ),
        'not_found'          => __( 'No Philosophy found' ),
        'not_found_in_trash' => __( 'No Philosophy found in the Trash' ), 
        'menu_name'          => 'Philosophy'
    ];
    $args = [
        'labels'        => $labels,
        'description'   => 'Philosophy Type Posts',
        'public'        => true,
        'menu_position' => 15,
        'supports'      => [],
        'has_archive'   => true,
    ];
    register_post_type('philosophy', $args); 
}
