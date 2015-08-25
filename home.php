<?php
get_header();
?>


<!-- Sidebar 1 -->
<?php get_template_part('partials/sidebar_1'); ?>

<!-- main content -->
<main id="main-content">

  <!-- main posts loop -->
  <section id="posts">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <a href="<?php the_permalink() ?>"><h2 data-date="<?php echo the_date('d / m / Y '); ?>"><?php the_title(); ?></h2></a>

      <?php the_post_thumbnail('archive-featured'); ?>

      <?php the_content(); ?>

    </article>

<?php
  }
} else {
?>
    <article class="u-alert"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

  <!-- end posts -->
  </section>

  <?php get_template_part('partials/pagination'); ?>

<!-- end main-content -->

</main>

<?php
get_footer();
?>
