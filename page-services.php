<?php
/**
 * Template name: Services Page
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

      get_template_part( 'template-parts/content', 'services' );
      get_template_part( 'template-parts/content', 'all' );

    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
