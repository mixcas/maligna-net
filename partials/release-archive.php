
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('300x300'); ?></a>
  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

</article>
