<?php
   /**
    * The template for displaying all pages
    *
    * This is the template that displays all pages by default.
    * Please note that this is the WordPress construct of pages
    * and that other 'pages' on your WordPress site will use a
    * different template.
    *
    * @package Catch Themes
    * @subpackage Lucida
    * @since Lucida 0.1
    */
   
   get_header();
   
   ?>
<style>
   .sidebar-primary {
   display:none;
   }
   #wpcf7-f7045-p43-o1 ,
   .wpcr3_respond_1  {
   display:none !important;
   }
   .ciy-col ul {
   display:block;
   }
   .ciy-col a{
   font-family: 'Futura PT' !important;
   font-style: normal !important;
   font-weight: 500 !important;
   font-size: 16px !important;
   line-height: 183.2% !important;
   color: #000000 !important;
   text-decoration:underline !important;
   }
   .captcha-image {
   display:none!important;
   }
   .wpcf7 {
   display:none;
   }
   .widget-title {
   font-weight: bold !important;
   display: block !important;
   margin-bottom: 5px !important;
   text-decoration: none !important;
   font-size: 17px;
   }
   .coool {
   display: flex;
   justify-content: space-between;
   }
   .ccc a{
   color:#000 !important;
   }
   @media only screen and (max-width: 1200px) {
   .ciy{
   display:block !important;
   }	  		  
   }
</style>
<div class="atec">
   <div class="container">
      <div class="ates__title"><?php the_title(); ?></div>
      <div class="ccc" style="margin-bottom:50px;margin-top:50px">
         <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
      </div>
      <div id="asdasdasdvbcvbncv" class="coool">
         <div class="ciy">
            <div class="ciy-col">
               <div>
                  <?php
                     get_sidebar();?>
               </div>
            </div>
            <div class="ciy-col ciyy-col">
               <div>
                  <?php while ( have_posts() ) : the_post(); ?>
                  <?php get_template_part( 'content', 'page' ); ?>
                  <?php
                     /**
                      * lucida_comment_section hook
                      *
                      * @hooked lucida_get_comment_section - 10
                      */
                     do_action( 'lucida_comment_section' );
                     ?>
                  <?php endwhile; // end of the loop. ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
   get_footer(); ?>