<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Catch Themes
 * @subpackage Lucida
 * @since Lucida 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * lucida_before_page_container hook
	 *
	 * @hooked lucida_single_content_image - 10
	 */
	do_action( 'lucida_before_page_container' ); ?>
	<div class="entry-container">
		<header class="entry-header">
			<h2 class="entry-title"><?php the_title(); ?></h2>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php the_content(); ?>
			<?php 
			$id_curent_page = get_the_ID();
			$enabled_post = get_post_meta($id_curent_page, 'wpcr3_enable', true);
				if ($enabled_post ) {
					echo do_shortcode('[WPCR_SHOW  POSTID="'.$id_curent_page.'" SHOWFORM="1"  NUM="3"]'); 
				}
			?>
			
			<?php if ( function_exists( 'echo_crp' ) ) { echo_crp(); } ?>
			
			
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links"><span class="pages">' . esc_html__( 'Pages:', 'lucida' ) . '</span>',
					'after'  => '</div>',
					'link_before' 	=> '<span>',
                    'link_after'   	=> '</span>',
				) );
			?>
			    <div class="what">
					<div class="cotainer">
						<div class="otzyv__title">Часто задаваемые вопросы</div>
						<?php custom_category_description(); ?>
					</div>
				</div>
				<div class="otzyv">
				<div class="container">
					<div class="otzyv__title">Отзывы наших клиентов</div>
					<?php echo do_shortcode( '[rt-testimonial id="11339" title="Категории"]' ) ?>

					<div class="star__sss" >
						<img src="images/star sss.png" alt="">
						<img src="images/star__sssser (1).png" alt="">
						<img src="images/star__sssser (1).png" alt="">
					</div>
				</div>
			</div>
		</div><!-- .entry-content -->		
		<?php edit_post_link( esc_html__( 'Edit', 'lucida' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
	</div><!-- .entry-container -->
</article><!-- #post-## -->