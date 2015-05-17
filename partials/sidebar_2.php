<div id="sidebar-2">
<?php

if( is_archive() ) {
  if( have_posts() ) {
    while( have_posts() ) {
      the_post();
  ?>

      <?php get_template_part('partials/release-archive'); ?>
  <?php
      
    }
  } else {
?>
    <article class="u-alert"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
  }
} else if ( is_single() ) {
  $post_type = get_post_type();
  $archive_list = new WP_Query( array(
    'post_type'       => $post_type,
    'posts_per_page'  => -1
  ) );
  if( $archive_list->have_posts() ) {
    while( $archive_list->have_posts() ) {
      $archive_list->the_post();
  ?>

      <?php get_template_part('partials/release-archive'); ?>

  <?php
    }
  } else {
?>
    <article class="u-alert"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
  }
}
?>

  <!-- end posts -->
</div>
