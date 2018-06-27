<?php

// AUTOMATIC PLUGIN UPDATES
add_filter( 'auto_update_plugin', '__return_true' );

// FEATURED IMAGES
add_theme_support('post-thumbnails');

// CUSTOM POSTS
function my_custom_posttypes() {

//    CURRENT EXHIBITIONS
    $labels = array(
        'name'               => 'Current Exhibitions',
        'singular_name'      => 'Current Exhibition',
        'menu_name'          => 'Current Exhibitions',
        'name_admin_bar'     => 'Current Exhibitions',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Current Exhibition',
        'new_item'           => 'New Current Exhibition',
        'edit_item'          => 'Edit Current Exhibition',
        'view_item'          => 'View Current Exhibition',
        'all_items'          => 'All Current Exhibitions',
        'search_items'       => 'Search Current Exhibitions',
        'parent_item_colon'  => 'Parent Current Exhibitions:',
        'not_found'          => 'No Current Exhibitions found.',
        'not_found_in_trash' => 'No Current Exhibitions found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'current' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'show_in_rest'       => true
    );

    register_post_type( 'current', $args );


//    UPCOMING EXHIBITIONS
    $labels = array(
        'name'               => 'Upcoming Exhibitions',
        'singular_name'      => 'Upcoming Exhibition',
        'menu_name'          => 'Upcoming Exhibitions',
        'name_admin_bar'     => 'Upcoming Exhibitions',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Upcoming Exhibition',
        'new_item'           => 'New Upcoming Exhibition',
        'edit_item'          => 'Edit Upcoming Exhibition',
        'view_item'          => 'View Upcoming Exhibition',
        'all_items'          => 'All Upcoming Exhibitions',
        'search_items'       => 'Search Upcoming Exhibitions',
        'parent_item_colon'  => 'Parent Upcoming Exhibitions:',
        'not_found'          => 'No Upcoming Exhibitions found.',
        'not_found_in_trash' => 'No Upcoming Exhibitions found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'upcoming' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'show_in_rest'       => true
    );

    register_post_type( 'upcoming', $args );


//    PAST EXHIBITIONS
    $labels = array(
        'name'               => 'Past Exhibitions',
        'singular_name'      => 'Past Exhibition',
        'menu_name'          => 'Past Exhibitions',
        'name_admin_bar'     => 'Past Exhibitions',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Past Exhibition',
        'new_item'           => 'New Past Exhibition',
        'edit_item'          => 'Edit Past Exhibition',
        'view_item'          => 'View Past Exhibition',
        'all_items'          => 'All Past Exhibitions',
        'search_items'       => 'Search Past Exhibitions',
        'parent_item_colon'  => 'Parent Past Exhibitions:',
        'not_found'          => 'No Past Exhibitions found.',
        'not_found_in_trash' => 'No Past Exhibitions found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'past' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'show_in_rest'       => true
    );

    register_post_type( 'past', $args );


//    EVENTS
    $labels = array(
        'name'               => 'Events',
        'singular_name'      => 'Event',
        'menu_name'          => 'Events',
        'name_admin_bar'     => 'Events',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Event',
        'new_item'           => 'New Event',
        'edit_item'          => 'Edit Event',
        'view_item'          => 'View Event',
        'all_items'          => 'All Events',
        'search_items'       => 'Search Events',
        'parent_item_colon'  => 'Parent Events:',
        'not_found'          => 'No Events found.',
        'not_found_in_trash' => 'No Events found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'events' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'show_in_rest'       => true
    );

    register_post_type( 'events', $args );


//    PRESS
    $labels = array(
        'name'               => 'Press',
        'singular_name'      => 'Press',
        'menu_name'          => 'Press',
        'name_admin_bar'     => 'Press',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Press',
        'new_item'           => 'New Press',
        'edit_item'          => 'Edit Press',
        'view_item'          => 'View Press',
        'all_items'          => 'All Press',
        'search_items'       => 'Search Press',
        'parent_item_colon'  => 'Parent Press:',
        'not_found'          => 'No Press found.',
        'not_found_in_trash' => 'No Press found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'press' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'show_in_rest'       => true
    );

    register_post_type( 'press', $args );


//    MAGAZINE
    $labels = array(
        'name'               => 'Magazine',
        'singular_name'      => 'Magazine',
        'menu_name'          => 'Magazine',
        'name_admin_bar'     => 'Magazine',
        'add_new'            => 'Add New Issue',
        'add_new_item'       => 'Add New Issue',
        'new_item'           => 'New Issue',
        'edit_item'          => 'Edit Magazine',
        'view_item'          => 'View Magazine',
        'all_items'          => 'All Issues',
        'search_items'       => 'Search Magazine',
        'parent_item_colon'  => 'Parent Magazine:',
        'not_found'          => 'No Issues found.',
        'not_found_in_trash' => 'No Issues found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'magazine' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'show_in_rest'       => true
    );

    register_post_type( 'magazine', $args );

}
add_action( 'init', 'my_custom_posttypes' );

// Flush rewrite rules to add post-types as a permalink slug
function my_rewrite_flush() {
    my_custom_posttypes();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );


// VISUAL EDITOR CUSTOMIZATION - TINY MCE

// REMOVE TEXT COLOR BUTTON
function zines_tinymce_buttons_2( $buttons ) {

    $remove = array( 'forecolor' );

    return array_diff( $buttons, $remove );
}
add_filter( 'mce_buttons_2', 'zines_tinymce_buttons_2' );

// FORMATSELECT DROPDOWN
function tiny_mce_remove_unused_formats($init) {

    $init['block_formats'] = 'Paragraph';
    return $init;
}

add_filter('tiny_mce_before_init', 'tiny_mce_remove_unused_formats' );

?>