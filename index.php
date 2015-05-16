<?php
get_header();
?>


<!-- Sidebar 1 -->
<div id="sidebar-1">
  <header id="header">
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <nav>
      <a href="#">News</a>
      <a href="#">Releases</a>
      <a href="#">Artists</a>
      <a href="#">Store</a>
    </nav>
  </header>
</div>

<!-- main content -->
<main id="main-content">

<?php /*
  <!-- main posts loop -->
  <section id="posts">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

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
 */
?>
  </section>

  <?php get_template_part('partials/pagination'); ?>

<!-- end main-content -->

</main>

<!-- Sidebar 2 -->
<div id="sidebar-2">
</div>

<?php
get_footer();
?>
