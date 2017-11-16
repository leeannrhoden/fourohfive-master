<?php
/**
 * Template Name: Drop Scroller
 */

get_header(); ?>










<main>

<?php
while ( have_posts() ) : the_post();

/* Get content-page.php */
get_template_part( 'template-parts/content', 'dropscroller' );

/* If comments are open or we have at least one comment, load up the comment template. */
if ( comments_open() || get_comments_number() ) :
comments_template();
endif;

endwhile;
?>

</main>

<?php

get_footer();
