<?php

function create_news_post_type() {
    $labels = [
        'name'               => 'News',
        'singular_name'      => 'News',
        'add_new'            => 'new News',
        'add_new_item'       => __( 'Add New News' ),
        'edit_item'          => __( 'Edit News' ),
        'new_item'           => __( 'New News' ),
        'all_items'          => __( 'All News' ),
        'view_item'          => __( 'View News' ),
        'search_items'       => __( 'Search News' ),
        'not_found'          => __( 'No News found' ),
        'not_found_in_trash' => __( 'No News found in the Trash' ), 
        'menu_name'          => 'News'
    ];
    $args = [
        'labels'        => $labels,
        'description'   => 'News Type Posts',
        'public'        => true,
        'menu_position' => 15,
        'supports'      => [],
        'has_archive'   => true,
    ];
    register_post_type('news', $args); 
}
