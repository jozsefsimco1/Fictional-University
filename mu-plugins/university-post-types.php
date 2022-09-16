<?php


function university_post_types() {
    register_post_type('event', array(
        'show_in_rest' => true, // makes raw wordpress data available for javascript to fetch
        'supports' => array('title', 'editor', 'excerpt'), // editor adds the modern editor which is based in JS. 
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add new Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event',
        ),
        'menu-icon' => 'dashicons-admin-users'
    ));
}
add_action('init', 'university_post_types');
