<?php

function create_idea_post_type() {
    $labels = [
        'name'               => 'Idea',
        'singular_name'      => 'Idea',
        'add_new'            => 'new Idea',
        'add_new_item'       => __( 'Add New Idea' ),
        'edit_item'          => __( 'Edit Idea' ),
        'new_item'           => __( 'New Idea' ),
        'all_items'          => __( 'All Ideas' ),
        'view_item'          => __( 'View Idea' ),
        'search_items'       => __( 'Search Ideas' ),
        'not_found'          => __( 'No Ideas found' ),
        'not_found_in_trash' => __( 'No Ideas found in the Trash' ), 
        'menu_name'          => 'Ideas'
    ];
    $args = [
        'labels'        => $labels,
        'description'   => 'Idea Type Posts',
        'public'        => true,
        'menu_position' => 15,
        'supports'      => [],
        'has_archive'   => true,
    ];
    register_post_type('idea', $args); 
}
