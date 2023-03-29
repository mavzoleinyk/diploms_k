<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();



?>


  <div class="atec">
        <div class="container">
            <div class="ates__title">Популярные</div>
            <a href="#" class="ssaass">
                Главная    \     Аттестаты (школы)
            </a>
            <div class="catalog___sec-io">
                <?php 
                
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );
                
                
                
                
                ?>
                <div class="catalog_sec-io-right">
                    <div class="atec__inner">
                        <?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

?>
                    </div>
                    
                </div>
            </div>
        </div>
      
    </div>
    <div class="asat">
        <div class="container">
            <div class="asat__inner">
                <div class="asat__icon">
                    <img src="images/video__dok (1).png" alt="">
                </div>

                <div class="asat__icon col">
                    <img src="images/man.png" alt="">
                    <div class="asat__block">
                        <div class="asat__title1">ЛЮБЫЕ ВАРИАНТЫ ОПЛАТЫ </div>
                        <div class="asat__text">оплата при получении</div>
                    </div>
                </div>

                <div class="asat__icon lg">
                    <img src="images/she.png" alt="">
                    <div class="asat__title2">Список ВУЗов Москвы</div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer( 'shop' );
