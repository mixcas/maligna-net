
<article <?php post_class('release-thumb'); ?> id="post-<?php the_ID(); ?>">

  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('archive-thumb'); ?></a>
  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

</article>
