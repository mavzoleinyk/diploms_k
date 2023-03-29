<?php
/*
Template Name: sidebar shop
 *
 * @package Catch Themes
 * @subpackage Lucida
 * @since Lucida 0.1
 */
?>
<?php
get_header();?> 
        
<style>
    body{
    background-color:#fff;
}
.ciy {
    display: flex;
    justify-content: space-between;
    width: 100%;
}
.products.columns-3{
    display: block;
    display: flex;
	flex-wrap: wrap;
    justify-content: space-between;
}
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
	
    <div class="catalog__sec-io-sidebar">
    <?php
    if ( function_exists('dynamic_sidebar') )
    dynamic_sidebar('shop-sidebar');
    ?>
    </div>
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





    <style>

</style>
<?php
get_footer(); ?>