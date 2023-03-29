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
do_action( 'lucida_footer' );


/**
 * lucida_after hook
 *
 * @hooked lucida_scrollup - 10
 * @hooked lucida_mobile_menus- 20
 *
 */
//do_action( 'lucida_after' );

wp_footer(); ?>

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

-->

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
</script>

</body>
</html>