<?php
/**
 * The default template for displaying header
 *
 * @package Catch Themes
 * @subpackage Lucida
 * @since Lucida 0.1
 */

	/**
	 * lucida_doctype hook
	 *
	 * @hooked lucida_doctype -  10
	 *
	 */
	do_action( 'lucida_doctype' );?>

<head>
<?php
	/**
	 * lucida_before_wp_head hook
	 *
	 * @hooked lucida_head -  10
	 *
	 */
	do_action( 'lucida_before_wp_head' );

	wp_head(); ?>
	<!-- Yandex.Metrika counter -->
<!--<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(56011528, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56011528" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter 
	<meta name="yandex-verification" content="9ca397a106613fcb" />
	<meta name="yandex-verification" content="6f95bbbeedb05b0a" /> -->


</head>

<body <?php body_class(); ?>>
	<div id="wptime-plugin-preloader"></div>

<?php do_action( 'wp_body_open' );  ?>

<?php
	/**
     * lucida_before_header hook
     *
     */
    do_action( 'lucida_before' );

	/**
	 * lucida_header hook
	 *
	 * @hooked lucida_page_start -  10
	 * @hooked lucida_header_top -  20
	 * @hooked lucida_promotion_headline - 25
	 * @hooked lucida_featured_overall_image (before-header) - 30
	 * @hooked lucida_header_start- 40
	 * @hooked lucida_mobile_header_nav_anchor - 50
	 * @hooked lucida_site_branding - 60
	 * @hooked lucida_header_right - 70
	 * @hooked lucida_header_end - 100
	 * @hooked lucida_header_bottom - 110
	 *
	 */
	do_action( 'lucida_header' );

	/**
     * lucida_after_header hook
     *
     * @hooked lucida_featured_overall_image (before-menu) - 10
     * @hooked lucida_primary_menu - 20
     * @hooked lucida_news_ticker (below-menu) - 30
     * @hooked lucida_featured_overall_image (after-menu) - 50
     * @hooked lucida_add_breadcrumb - 60
     */
	do_action( 'lucida_after_header' );

	/**
	 * lucida_before_content hook
	 *
	 * @hooked lucida_header_highlight_content_display - 10
	 * @hooked lucida_featured_slider - 20
	 * @hooked lucida_featured_overall_image (after-slider)  - 30
	 * @hooked lucida_featured_content_display (move featured content above homepage posts - default option) - 40
	 */
	do_action( 'lucida_before_content' );

	/**
     * lucida_main hook
     * @hooked lucida_news_ticker (above-content) - 10
     * @hooked lucida_before_content_sidebar - 20
     * @hooked lucida_content_start - 30
     * @hooked lucida_primary_start - 40
     * @hooked lucida_main_start - 50
     * @hooked lucida_before_posts_pages_sidebar - 60
     */
	do_action( 'lucida_content' );
	?>
	
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); 
			}
		?>