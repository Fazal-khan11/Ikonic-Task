<?php
// Register Custom Post Type
function custom_post_type_projects() {
    $labels = array(
        'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Projects', 'text_domain' ),
        'name_admin_bar'        => __( 'Project', 'text_domain' ),
        'archives'              => __( 'Project Archives', 'text_domain' ),
        'attributes'            => __( 'Project Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Project:', 'text_domain' ),
        'all_items'             => __( 'All Projects', 'text_domain' ),
        'add_new_item'          => __( 'Add New Project', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Project', 'text_domain' ),
        'edit_item'             => __( 'Edit Project', 'text_domain' ),
        'update_item'           => __( 'Update Project', 'text_domain' ),
        'view_item'             => __( 'View Project', 'text_domain' ),
        'view_items'            => __( 'View Projects', 'text_domain' ),
        'search_items'          => __( 'Search Project', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into project', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this project', 'text_domain' ),
        'items_list'            => __( 'Projects list', 'text_domain' ),
        'items_list_navigation' => __( 'Projects list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter projects list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Project', 'text_domain' ),
        'description'           => __( 'Custom Projects', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'project_type' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-clipboard', // You can change the icon
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'project', $args );
}
add_action( 'init', 'custom_post_type_projects', 0 );

// Register Custom Taxonomy
function custom_taxonomy_project_type() {
    $labels = array(
        'name'                       => _x( 'Project Types', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Project Type', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Project Types', 'text_domain' ),
        'all_items'                  => __( 'All Project Types', 'text_domain' ),
        'parent_item'                => __( 'Parent Project Type', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Project Type:', 'text_domain' ),
        'new_item_name'              => __( 'New Project Type Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Project Type', 'text_domain' ),
        'edit_item'                  => __( 'Edit Project Type', 'text_domain' ),
        'update_item'                => __( 'Update Project Type', 'text_domain' ),
        'view_item'                  => __( 'View Project Type', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate project types with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove project types', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Project Types', 'text_domain' ),
        'search_items'               => __( 'Search Project Types', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No project types', 'text_domain' ),
        'items_list'                 => __( 'Project types list', 'text_domain' ),
        'items_list_navigation'      => __( 'Project types list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'project_type', array( 'project' ), $args );
}
add_action( 'init', 'custom_taxonomy_project_type', 0 );
