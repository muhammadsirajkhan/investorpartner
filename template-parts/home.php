<?php
/**
 * template name:Home
 * The template for displaying Home pages
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; ?>


<h1>teset</h1>



<?php
get_footer();

