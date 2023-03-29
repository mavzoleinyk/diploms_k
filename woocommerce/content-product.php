<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<style>
    .ciyy-col p {
    margin-bottom: 0;
}
.more-link{
    display:none;
}
</style>
<div  <?php wc_product_class( 'atec__icon', $product ); ?>>
                            <div class="atec__width">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );?>
                                        
    <img class="atec__img" src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
                                <div class="atec__titlewi">
                                    <div class="atec__texttitle"><?php the_title() ?></div>
                                </div>
        
                                <div class="pok__table pok__mar">   
                                <p>
                                    Год выдачи: <b><?php global $product;
                                    echo $product->get_attribute('god'); ?> </b>  
                                </p>
                                <p>
                                    Город : <b><?php global $product;
                                    echo $product->get_attribute('strana'); ?> </b>  
                                </p>
                                <p>
                                    Тип документа : <b><?php global $product;
                                    echo $product->get_attribute('tip-dokumenta'); ?> </b>  
                                </p>
                                </div>
        
                                <div class="atec__rub">
                                    
<?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
<?php echo wc_price( $price ); ?>                                   
</div>
        
                                <div class="pok__button atec__button">
                                    <!-- Ссылки на вызов модальных окон-->
                                    <a href="#win1" class="button product__btn" style="background: #ec892d!important; color:white!important; text-decoration: none!important;font-size: 14px!important;">Заказать</a>
                                     <!-- Модальное окно №1 -->
                                    <a href="#x" class="overlay " id="win1"></a>
                                    <div class="popup">
                                    <?php echo do_shortcode( '[contact-form-7 id="9601" title="Форма каталога"]' ) ?>
                                    
                                    <a class="close"title="Закрыть" href="#close"></a>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
