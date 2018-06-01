<?php
/**
 * Template name: Home Page
 *
 * @package Baseplate_4
 */

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', 'homehero' );
      get_template_part( 'template-parts/content', 'all' );

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
