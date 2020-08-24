<?php

function create_event_post_type() {
    $labels = [
        'name'               => 'Event',
        'singular_name'      => 'Event',
        'add_new'            => 'new Event',
        'add_new_item'       => __( 'Add New Event' ),
        'edit_item'          => __( 'Edit Event' ),
        'new_item'           => __( 'New Event' ),
        'all_items'          => __( 'All Events' ),
        'view_item'          => __( 'View Event' ),
        'search_items'       => __( 'Search Events' ),
        'not_found'          => __( 'No Events found' ),
        'not_found_in_trash' => __( 'No Events found in the Trash' ), 
        'menu_name'          => 'Events'
    ];
    $args = [
        'labels'        => $labels,
        'description'   => 'Event Type Posts',
        'public'        => true,
        'menu_position' => 15,
        'supports'      => [],
        'has_archive'   => true,
    ];
    register_post_type('event', $args); 
}
