<?php
/**
 * The template for displaying the footer
 *
 * @package Catch Themes
 * @subpackage Lucida
 * @since Lucida 0.1
 */


/**
 * lucida_after_content hook
 *
 * @hooked lucida_content_end - 10
 * @hooked lucida_after_content_sidebar - 20
 * @hooked lucida_featured_content_display (move featured content below homepage posts) - 30
 *
 */
do_action( 'lucida_after_content' );

/**
 * lucida_footer hook
 *
 * @hooked lucida_footer_content_start - 10
 * @hooked lucida_footer_sidebar - 20
 * @hooked lucida_site_generator_start - 30
 * @hooked lucida_footer_content - 50
 * @hooked lucida_site_generator_end - 60
 * @hooked lucida_footer_content_end - 70
 * @hooked lucida_page_end - 80
 *
 */



/**
 * lucida_after hook
 *
 * @hooked lucida_scrollup - 10
 * @hooked lucida_mobile_menus- 20
 *
 */
//do_action( 'lucida_after' );

//wp_footer(); ?>
	
    <div class="asat">
        <div class="container">
            <div class="asat__inner">
                <div class="asat__icon fotostar">
					<a href="/video-vseh-nashih-dokumentov/">
						<img src="/wp-content/uploads/2022/11/image-10.png" alt="Видео подлинных документов для заказа онлайн с доставкой">
					</a>    
				</div>
                <div class="asat__icon col">
					<a href="/kupit-diplom-zakaz-moskve/">
                    	<img class="im_student1" src="/wp-content/uploads/2022/11/delivery-man-1.png" alt="Оплата при получении оригинального документа">
                    	<div class="asat__block">
                    	    <div class="asat__title1" style="font-weight:bold;">ЛЮБЫЕ ВАРИАНТЫ ОПЛАТЫ </div>
                    	    <div class="asat__text" style="font-weight:bold;">оплата при получении</div>
                    	</div>
					</a>
				</div>
                <div class="asat__icon lg">
                    <a href="/spisok-vuzov-moskvy/">
						<img class="im_student2" src="/wp-content/uploads/2022/11/graduated-1.png" alt="Список ВУЗов Москвы для заказа диплома онлайн">
                    	<div class="asat__title2" style="font-weight:bold;">Список ВУЗов Москвы</div>
					</a>
				</div>
            </div>
        </div>
    </div>

    <div class="last">
        <div class="container">
            <div class="last__inner">

                <div class="last__icon">
                     <div style="background-image:url(/wp-content/uploads/2022/08/group-2306.png)" class="header__logo">
						<a href="/" style="display:block;width:100%;height:100%"></a>
					</div>
                    <div class="last__text" style="    margin-bottom: 20px;
">Более 20 лет специализируемся на продаже документов об образовании</div>
<div class="uconic___ttt">
						<span>Ежедневно 9.00 - 22.00</span>
						<a href="tel:84992297755">+7 (499) 229-77-55</a>
					</div>
				</br>
					<div class="adres_foter">
						<div class="title_adress">Адрес</div>
						<b>Москва, площадь Тверская</b></br>
				        <b>Застава, 125047</b>
					</div>
				     </br>
					<div class="header__mmm">
						<span>Электроная почта</span>
						<a href="mailto:zakaz@vyshka.net ">zakaz@diploms-msk.com</a>

					</div>
					<div class="header__vector">
                        <a href="whatsapp://send?phone=79523763899"><img src="/wp-content/uploads/2022/08/vector__whatsapp-e1669634401165.png" alt=""></a>
                        <a href="https://t.me/DocumentovBot "><img src="/wp-content/uploads/2022/08/vector__telegram.png" alt=""></a>
                    </div>
                </div>

                <div class="last__icon">
                    
                    <div class="last__title">Меню</div>
                
                    <div class="last__manu">
                        <a href="/kupit-diplom-goznak/" class="link-menu">О компании</a><br>
                        <a href="/kupit-diplom-moskva-cena/" class="link-menu">Цены</a><br>
                        <a href="/kupit-diplom-otzyvami/" class="link-menu">Отзывы</a><br>
                        <a href="/kupit-diplom-otzyvami/" class="link-menu">Доставка и Оплата</a><br>
                        <a href="/gde-mozhno-naiti-informaciju-diploma/" class="link-menu">Статьи</a><br>
                        <a href="/vopros-otvet-pri-pokupke-diploma/" class="link-menu">Вопросы</a><br>
                        <a href="/diplom-moskve-kontakty/" class="link-menu">Контакты</a><br>
                        <a href="/kupit-vysshee-professionalnoe-obrazovanie/" class="link-menu">Области РФ</a><br>
                    </div>

                    
                </div>

                <div class="last__icon asdasd">
                
                    <div class="last__title">Каталог</div>
                
                    <div class="last__kat">
						<div class="kat__text"><a href="/product-category/vysshee-obrazovanie-vuzy/">Дипломы о высшем образовании</a></div>
						<div class="kat__text"><a href="/product-category/srednee-obrazovanie-ssuzy/">Дипломы о среднем образовании</a></div>
						<div class="kat__text"><a href="/product-category/nachalnoe-obrazovanie-ptu/">Дипломы ПТУ</a></div>
						<div class="kat__text"><a href="/product-category/attestaty-shkoly/">Аттестаты школ</a></div>
						<div class="kat__text"><a href="/product-category/prochie-dokumenty/">Другие документы</a></div>
                    </div>
                </div>

                <div class="last__icon tp">
                    <div class="last__button">
						<!-- Ссылки на вызов модальных окон-->
						<a href="#win1" class="button button-blue header__btn">Оформить заказ</a>
						<!-- Модальное окно №1 -->
						<a href="#x" class="overlay " id="win1"></a>
						<div class="popup">
							<?php echo do_shortcode( '[contact-form-7 id="9601" title="Форма каталога"]' ) ?>
							<a class="close"title="Закрыть" href="#close"></a>
						</div>
                        <a class="last__btn" href="/#calculate">Калькулятор</a>
                    </div>
                    <div class="last__kart">
                        <img src="/wp-content/uploads/2022/11/image-3.png" alt="">
                    </div>
					<div style="margin:20px;">
							<a class="header__btn" style="background: #EC892D;color:#fff; margin:0!important;" href="/shop/">Каталог документов</a>
					</div>
                </div>

            </div>
        </div>
    </div>
<?php
	if (   ! is_active_sidebar( 'footer-1'  )
	&& ! is_active_sidebar( 'footer-2' )
	&& ! is_active_sidebar( 'footer-3'  )
) {
	return;
}
// If we get this far, we have widgets. Let do this.
?>
<section class="section-delivery">
	<div class="container">
		<div class="section-delivery_row">
			<div class="section-delivery-item">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/delivery/delivery-pic-1.jpg" alt="">
			</div>
			<div class="section-delivery-item">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/delivery/delivery-pic-2.jpg" alt="">
			</div>
			<div class="section-delivery-item">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/delivery/delivery-pic-3.jpg" alt="">
			</div>
			<div class="section-delivery-item">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/delivery/delivery-pic-4.jpg" alt="">
			</div>
			<div class="section-delivery-item">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/delivery/delivery-pic-5.jpg" alt="">
			</div>
			<div class="section-delivery-item">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/delivery/delivery-pic-6.jpg" alt="">
			</div>
			<div class="section-delivery-item">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/delivery/delivery-pic-7.jpg" alt="">
			</div>
			<div class="section-delivery-item">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/delivery/delivery-pic-8.jpg" alt="">
			</div>
		</div>
	</div>
</section>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div id="supplementary" <?php lucida_footer_sidebar_class(); ?>>
		<div class="wrapper">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<aside id="first" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</aside><!-- #first .widget-area -->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
			<aside id="second" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</aside><!-- #second .widget-area -->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
			<aside id="third" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</aside><!-- #third .widget-area -->
			<?php endif; ?>
		</div> <!-- .wrapper -->
	</div><!-- #supplementary -->
	<div id="site-generator">
		<div class="wrapper">
			<div id="footer-content" class="copyright">Copyright © 2023 ДИПЛОМЫ, СПРАВКИ, ДОКУМЕНТЫ ПОД ЗАКАЗ +7 (499) 229-77-55. All Rights Reserved.</div>			
		</div><!-- .wrapper -->
	</div>

</footer>



<!-- BEGIN JIVOSITE CODE {literal} -->
 <script src="//code.jivosite.com/widget.js" data-jv-id="0jxLLtcYrT" async></script>
<!-- <?php  /* <script src="//code.jivosite.com/widget.js" data-jv-id="0jxLLtcYrT" async></script> */?>

<!--<script type='text/javascript'>
(function(){ document.jivositeloaded=0;var widget_id = '0jxLLtcYrT';var d=document;var w=window;function l(){var s = d.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}//эта строка обычная для кода JivoSite
function zy(){
    //удаляем EventListeners
    if(w.detachEvent){//поддержка IE8
        w.detachEvent('onscroll',zy);
        w.detachEvent('onmousemove',zy);
        w.detachEvent('ontouchmove',zy);
        w.detachEvent('onresize',zy);
    }else {
        w.removeEventListener("scroll", zy, false);
        w.removeEventListener("mousemove", zy, false);
        w.removeEventListener("touchmove", zy, false);
        w.removeEventListener("resize", zy, false);
    }
    //запускаем функцию загрузки JivoSite
    if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}
    //Устанавливаем куку по которой отличаем первый и второй хит
    var cookie_date = new Date ( );
    cookie_date.setTime ( cookie_date.getTime()+60*60*28*1000); //24 часа для Москвы
    d.cookie = "JivoSiteLoaded=1;path=/;expires=" + cookie_date.toGMTString();
}
if (d.cookie.search ( 'JivoSiteLoaded' )<0){//проверяем, первый ли это визит на наш сайт, если да, то назначаем EventListeners на события прокрутки, изменения размера окна браузера и скроллинга на ПК и мобильных устройствах, для отложенной загрузке JivoSite.
    if(w.attachEvent){// поддержка IE8
        w.attachEvent('onscroll',zy);
        w.attachEvent('onmousemove',zy);
        w.attachEvent('ontouchmove',zy);
        w.attachEvent('onresize',zy);
    }else {
        w.addEventListener("scroll", zy, {capture: false, passive: true});
        w.addEventListener("mousemove", zy, {capture: false, passive: true});
        w.addEventListener("touchmove", zy, {capture: false, passive: true});
        w.addEventListener("resize", zy, {capture: false, passive: true});
    }
}else {zy();}
})();</script>
<!-- {/literal} END JIVOSITE CODE -->


  
  <script>
    new ItcAccordion(document.querySelector('.accordion'), {
      alwaysOpen: true
    });
  </script>
<script>
    var map, head, insertBefore, appendChild, mapApi;
    
    head = document.getElementsByTagName('head')[0];
    insertBefore = head.insertBefore;
    appendChild = head.appendChild;
	
	
   function map_in() {
   if(document.getElementById('map_canvas') !== null) {
        mapApi = document.createElement('script');
        mapApi.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ3P9T8h-4v-AWGKDl3o-0DTea3na9frI&callback=initMap'; // set the source of the script to your script
        document.getElementsByTagName('head')[0].appendChild(mapApi);
    }
   }
	
    function initMap() {
		 var uluru = {lat:55.747394, lng: 37.540853};
        map = new google.maps.Map(document.getElementById('map_canvas'), {
            center: uluru,
            zoom: 15
        });
		var marker = new google.maps.Marker({position: uluru, map: map});
    }
	
	setTimeout(map_in, 6000);
// 	accordeon


const questions = document.querySelectorAll('.asked-question')

console.log(questions)
if(questions){
	questions.forEach(item => {
		const heading = item.querySelector('h2');
		heading.addEventListener('click',() => {
			item.classList.toggle('active');
		})
	})
}
	
// 	
	
	
	
</script>
<style>
@media only screen and (max-width: 400px) {
	.asat__inner {
		padding-top: 60px;
	}
	.asat__icon {
		margin: 20px auto;
		padding: 0;
	}
	.asat__title2, .asat__block {
		text-align: center;
	}
	.asat__icon img {
		padding: 0;
	}
	.im_student2 {
		margin-left: 60px;
	}
	.im_student1 {
		margin-left: 90px;
	}
}
	a{
		color: #000;
		font-size: 16px;
	}
	.title_adress{
		font-size:14px!important;
		
	}
</style>
	<?php wp_footer(); ?>

</body>
</html>