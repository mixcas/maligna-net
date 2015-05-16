<?php
// Menu icons for Custom Post Types
function add_menu_icons_styles(){
?>
 
<style>
#adminmenu .menu-icon-project div.wp-menu-image:before {
    content: '\f498';
}
</style>
 
<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );


//Register Custom Post Types

// Relases
add_action( 'init', 'register_cpt_release' );

function register_cpt_release() {

    $labels = array( 
        'name' => _x( 'Releases', 'release' ),
        'singular_name' => _x( 'Release', 'release' ),
        'add_new' => _x( 'Add New', 'release' ),
        'add_new_item' => _x( 'Add New Release', 'release' ),
        'edit_item' => _x( 'Edit Release', 'release' ),
        'new_item' => _x( 'New Release', 'release' ),
        'view_item' => _x( 'View Release', 'release' ),
        'search_items' => _x( 'Search Releases', 'release' ),
        'not_found' => _x( 'No releases found', 'release' ),
        'not_found_in_trash' => _x( 'No releases found in Trash', 'release' ),
        'parent_item_colon' => _x( 'Parent Release:', 'release' ),
        'menu_name' => _x( 'Releases', 'release' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'release', $args );
}

// Relases
add_action( 'init', 'register_cpt_artist' );

function register_cpt_artist() {

    $labels = array( 
        'name' => _x( 'Artists', 'artist' ),
        'singular_name' => _x( 'Artist', 'artist' ),
        'add_new' => _x( 'Add New', 'artist' ),
        'add_new_item' => _x( 'Add New Artist', 'artist' ),
        'edit_item' => _x( 'Edit Artist', 'artist' ),
        'new_item' => _x( 'New Artist', 'artist' ),
        'view_item' => _x( 'View Artist', 'artist' ),
        'search_items' => _x( 'Search Artists', 'artist' ),
        'not_found' => _x( 'No artists found', 'artist' ),
        'not_found_in_trash' => _x( 'No artists found in Trash', 'artist' ),
        'parent_item_colon' => _x( 'Parent Artist:', 'artist' ),
        'menu_name' => _x( 'Artists', 'artist' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'artist', $args );
}
