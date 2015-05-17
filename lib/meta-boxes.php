<?php

/* Get post objects for select field options */ 
function get_post_objects( $query_args ) {
$args = wp_parse_args( $query_args, array(
    'post_type' => 'post',
) );
$posts = get_posts( $args );
$post_options = array();
if ( $posts ) {
    foreach ( $posts as $post ) {
        $post_options [ $post->ID ] = $post->post_title;
    }
}
return $post_options;
}


/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Hook in and add metaboxes. Can only happen on the 'cmb2_init' hook.
 */
add_action( 'cmb2_init', 'igv_cmb_metaboxes' );
function igv_cmb_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_igv_';

  // Releases
  $release_info = new_cmb2_box( array(
    'id'           => $prefix . 'metabox',
    'title'        => __( 'Release Info', 'cmb2' ),
    'object_types' => array( 'release', ),
  ) );

  // -- Catalog No.
  $release_info->add_field( array(
    'name' => __( 'Catalog No.', 'cmb2' ),
    'id'   => $prefix . 'catalog_no',
    'type' => 'text_small',
  ) );

  // -- Artist
  $release_info->add_field( array(
    'name' => __( 'Artist', 'cmb2' ),
    'id'   => $prefix . 'artist',
    'type' => 'text_medium',
  ) );

  // -- Format
  $release_info->add_field( array(
    'name'             => __( 'Format', 'cmb2' ),
    'id'               => $prefix . 'format',
    'type'             => 'select',
    'show_option_none' => true,
    'options'          => array(
      'digital' => __( 'Digital One', 'cmb2' ),
      'cd'   => __( 'CD', 'cmb2' ),
      'cassete'     => __( 'Cassete', 'cmb2' ),
      'vinyl'     => __( 'Vinyl', 'cmb2' ),
    ),
  ) );

  // -- Date
  $release_info->add_field( array(
    'name' => __( 'Release date', 'cmb2' ),
    'id'   => $prefix . 'release_date',
    'type' => 'text_date',
  ) );

	/**
	 * Metaboxes declarations here
   * Reference: https://github.com/WebDevStudios/CMB2/blob/master/example-functions.php
	 */

}
?>
