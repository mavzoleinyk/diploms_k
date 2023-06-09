<?php
/*
Template Name: Full Width Page with No Sidebar
*/
  
get_header();?> 
    <div id="primary" class="site-content-fullwidth">
        <div id="content" role="main">
  
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
                <?php comments_template( '', true ); ?>
            <?php endwhile; // end of the loop. ?>
  
        </div><!-- #content -->
    </div><!-- #primary -->
  
<?php get_footer(); ?>