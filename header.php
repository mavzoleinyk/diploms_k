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
//	do_action( 'lucida_doctype' );?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/cssnew/style.css">
	<?php wp_head(); ?>
<style>
	#site-generator {
    background-color: #1a1a1a!important;
    color: #ddd;
    text-align: center;
}	  
	.wpcf7 {
		display: block!important;
	}	  
	.overlay {
top: 0;
right: 0;
bottom: 0;
left: 0;
z-index: 1;
visibility: hidden;
/* фон затемнения */
background-color: rgba(0, 0, 0, 0.7);
opacity: 0;
position: fixed; /* фиксированное поцизионирование */
cursor: default; /* тип курсара */
-webkit-transition: opacity .5s;
-moz-transition: opacity .5s;
-ms-transition: opacity .5s;
-o-transition: opacity .5s;
transition: opacity .5s;
}
.overlay:target {
visibility: visible;
opacity: 1;
}
.is-image {
top: 0;
right: 0;
bottom: 0;
left: 0;
display:block;
margin: 10&;
width: 100%;
height: auto;
/* скругление углов встроенных картинок */
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
border-radius: 4px;
}
/* встроенные элементы м-медиа, фреймы */
embed, iframe {
top: 0;
right: 0;
bottom: 0; 
left: 0; 
display:block;
margin: auto;
min-width: 320px;
max-width: 600px;
width: 100%;
}
.popup h1 { /* заголовок 1 */
color: #008000;
text-align: left;
text-shadow: 0 1px 3px rgba(0,0,0,.3);
font:24px 'Trebuchet MS', Helvetica, sans-serif;
font-weight: bold;
}
.popup h2 { /* заголовок 2 */
color: #008000;
text-align: left;
text-shadow: 0 1px 3px rgba(0,0,0,.3);
font:22px 'Trebuchet MS', Helvetica, sans-serif;
}
/*** Формируем стили модального окна ***/
.popup {
top: 0;
right: 0;
left: 0;
font-size: 14px;
z-index: 10;
display: block;
visibility: hidden;
margin: 0 auto;
width: 90%;
min-width: 320px;
max-width: 600px;
/* фиксированное позиционирование, окно стабильно при прокрутке */
position: fixed;
padding: 15px;
border: 1px solid #383838;
/* скругление углов */
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
border-radius: 4px;
background-color: #FFFFFF;
/* внешняя тень блока */
-webkit-box-shadow: 0 0 6px rgba(0, 0, 0, 0.8);
-moz-box-shadow: 0 0 6px rgba(0, 0, 0, 0.8);
-ms-box-shadow: 0 0 6px rgba(0, 0, 0, 0.8);
-o-box-shadow: 0 0 6px rgba(0, 0, 0, 0.8);
box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.8);
/* полная прозрачность окна, появление при клике */
opacity: 0;
/* эффект перехода (появление) */
-webkit-transition: all ease .5s;
-moz-transition: all ease .5s;
-ms-transition: all ease .5s;
-o-transition: all ease .5s;
transition: all ease .5s;
}
/* активируем появление окна и затемнение фона */
.overlay:target+.popup {
top: 20%; /* положение окна от верха страницы при появлении */
visibility: visible;
opacity: 1; /* убираем прозрачность */
}
/* формируем кнопку закрытия */
.close {
position: absolute;
top: -10px;
right: -10px;padding: 0;
width: 20px;
height: 20px;
border: 2px solid #ccc;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
-ms-border-radius: 15px;
-o-border-radius: 15px;
border-radius: 15px;
background-color: rgba(61, 61, 61, 0.8);
-webkit-box-shadow: 0px 0px 10px #000;
-moz-box-shadow: 0px 0px 10px #000;
box-shadow: 0px 0px 10px #000;
text-align: center;
text-decoration: none;
font-weight: bold;
line-height: 20px;
/* задаём значения и эффект перехода при наведении */
-webkit-transition: all ease .8s;
-moz-transition: all ease .8s;
-ms-transition: all ease .8s;
-o-transition: all ease .8s;
transition: all ease .8s;
}
.close:before {
color: rgba(255, 255, 255, 0.9);
content: "X";
text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
font-size: 12px;
}
.close:hover {
background-color: rgba(252, 20, 0, 0.8);
/* крутим кнопку при наведении */
-webkit-transform: rotate(360deg);
-moz-transform: rotate(360deg);
-ms-transform: rotate(360deg);
-o-transform: rotate(360deg);
transform: rotate(360deg);    
}
/* опционально при добавлении вложений */
.popup p, .popup div {
margin-bottom: 10px;
}


/* button */

.button {
	font-family: "Futura PT";
	font-style: normal;
	font-weight: 450;
	font-size: 14px;
  color: black;
  text-decoration: none;
  padding: 12px 45px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  transition: all 0.3s;
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  cursor: pointer;

}
	</style>
	<script>
    class ItcAccordion {
      constructor(target, config) {
        this._el = typeof target === 'string' ? document.querySelector(target) : target;
        const defaultConfig = {
          alwaysOpen: true,
          duration: 350
        };
        this._config = Object.assign(defaultConfig, config);
        this.addEventListener();
      }
      addEventListener() {
        this._el.addEventListener('click', (e) => {
          const elHeader = e.target.closest('.accordion__header');
          if (!elHeader) {
            return;
          }
          if (!this._config.alwaysOpen) {
            const elOpenItem = this._el.querySelector('.accordion__item_show');
            if (elOpenItem) {
              elOpenItem !== elHeader.parentElement ? this.toggle(elOpenItem) : null;
            }
          }
          this.toggle(elHeader.parentElement);
        });
      }
      show(el) {
        const elBody = el.querySelector('.accordion__body');
        if (elBody.classList.contains('collapsing') || el.classList.contains('accordion__item_show')) {
          return;
        }
        elBody.style['display'] = 'block';
        const height = elBody.offsetHeight;
        elBody.style['height'] = 0;
        elBody.style['overflow'] = 'hidden';
        elBody.style['transition'] = `height ${this._config.duration}ms ease`;
        elBody.classList.add('collapsing');
        el.classList.add('accordion__item_slidedown');
        elBody.offsetHeight;
        elBody.style['height'] = `${height}px`;
        window.setTimeout(() => {
          elBody.classList.remove('collapsing');
          el.classList.remove('accordion__item_slidedown');
          elBody.classList.add('collapse');
          el.classList.add('accordion__item_show');
          elBody.style['display'] = '';
          elBody.style['height'] = '';
          elBody.style['transition'] = '';
          elBody.style['overflow'] = '';
        }, this._config.duration);
      }
      hide(el) {
        const elBody = el.querySelector('.accordion__body');
        if (elBody.classList.contains('collapsing') || !el.classList.contains('accordion__item_show')) {
          return;
        }
        elBody.style['height'] = `${elBody.offsetHeight}px`;
        elBody.offsetHeight;
        elBody.style['display'] = 'block';
        elBody.style['height'] = 0;
        elBody.style['overflow'] = 'hidden';
        elBody.style['transition'] = `height ${this._config.duration}ms ease`;
        elBody.classList.remove('collapse');
        el.classList.remove('accordion__item_show');
        elBody.classList.add('collapsing');
        window.setTimeout(() => {
          elBody.classList.remove('collapsing');
          elBody.classList.add('collapse');
          elBody.style['display'] = '';
          elBody.style['height'] = '';
          elBody.style['transition'] = '';
          elBody.style['overflow'] = '';
        }, this._config.duration);
      }
      toggle(el) {
        el.classList.contains('accordion__item_show') ? this.hide(el) : this.show(el);
      }
    }
  </script>
</head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4262160458050412"
crossorigin="anonymous"></script>
<body style="background-color:transparent !important">
	    <style>
        .accordion__item {
          border-bottom: 1px solid #0a1c2b;
		  margin: 0 20px;
        }
			.woocommerce ul.products {
				flex-wrap: wrap;
			}
        .accordion__header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 0.75rem 0rem;
          color: #000;
          font-weight: 700;
			line-height: 1.5;
			font-size: 20px;
          cursor: pointer;
          transition: background-color 0.2s ease-out;
        }
    
        .accordion__header::after {
          flex-shrink: 0;
          width: 1.25rem;
          height: 1.25rem;
          margin-left: auto;
          background-image: url("/wp-content/themes/lucida/css/cssnew/images/Vector.png");
          background-repeat: no-repeat;
          background-size: 1.25rem;
          content: "";
          transition: transform 0.2s ease-out;
        }
    
        .accordion__item_show .accordion__header::after,
        .accordion__item_slidedown .accordion__header::after {
          transform: rotate(-180deg);
        }
    
        
    
        .accordion__item:not(.accordion__item_show) .accordion__header {
          border-bottom-right-radius: 0.25rem;
          border-bottom-left-radius: 0.25rem;
        }
    
        .accordion__content {
          padding: 0.75rem 1rem;
          background: #fff;
          border-bottom-right-radius: 0.25rem;
          border-bottom-left-radius: 0.25rem;
        }
    
        .accordion__item:not(.accordion__item_show) .accordion__body {
          display: none;
        }
      </style>
        <style>
			.pok__tabletex span {
				font-family: "Futura PT";
				font-style: normal;
				font-weight: 700;
				font-size: 16px;
				line-height: 18px;
				margin-left: 5px;
				color: black;
			}
			.menu-item-9591:hover{
				background-color: #B45A08;
			}
			.menu-item-9592:hover{
				background-color: #B45A08;
			}
			.menu-item-9593:hover{
				background-color: #B45A08;
			}
			.menu-item-9591, .menu-item-9592, .menu-item-9593{
				padding: 5px 10px;
			}
    .sub-menu 
    { 
       display: none;
	   position: absolute;
		z-index: 300;
	   top: 50px;
    } 
			.main-item {
				color: black;
				width: 157px;
				height: 28px;
				border-radius: 6px;
				background-color: rgba(237, 237, 237, 1);
			}
			.main-item::before {
				color: black;
				content: url(/wp-content/themes/lucida/css/cssnew/images/Vector.png);
				position: relative;
				right: -110px;
			}
    .main-item:focus ~ .sub-menu, 
    .main-item:active ~ .sub-menu, 
    .sub-menu:hover 
    { 
       display: block; 
    } 
			.sub-menu_item li a {
				text-decoration: underline;
				font-family: 'Futura PT';
				font-style: normal;
				font-weight: 400;
				font-size: 14px;
				line-height: 25px;
				text-decoration-line: underline;
				color: #000000;
			}
    .sub-menu_group {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        width: 100%;
		padding: 20px 24px;
        max-width: 650px;
        background: #FFFFFF;
        box-shadow: 0px 4px 28px rgba(0, 0, 0, 0.1);
        border-radius: 6px;
    }
    .sub-menu_item {
        padding: 0 10px;
    }
    .sub-menu_item li {
        list-style: none;
    }
    .sub-menu_item_a {
        font-family: 'Futura PT';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 25px;
        text-decoration-line: underline;
        color: #000000;
    }
    </style>
  <style>
	  .woocommerce img, .woocommerce-page img {
		   max-width: max-content!important;
		   height: 148px!important;
		  margin-top: 30px!important;
	  }
	  .icon__right {
		  display: contents;
	  }
      .menu li a {
    text-decoration: none;
    font-family: "Futura PT";
    font-style: normal;
    font-weight: 450;
    font-size: 16px;
    line-height: 21px;
    color: #ffffff;
}

      .menu  {
    padding: 0;
    list-style: none;
    display: flex;
    justify-content: space-between;
    width: 100%;
}
.header__logo {
    width: 166px;
}
	  .header__nav a {
		  color:#000 !important;
	  }
.mobM {
    display: none;
}
	  @media only screen and (max-width: 1200px) {
.mobM {
    background: transparent;
    width: 725px;
	display: block;
}
	  .mobM a{
		  color:#000 !important;
	  }
	  
	  
	.intro .menu li a {
    text-decoration: none;
    font-family: "Futura PT";
    font-style: normal;
    font-weight: 450;
    font-size: 16px;
    line-height: 20px;
    color: #ffffff;
    display: block;
}
		  
	#site-generator {
    background-color: #1a1a1a!important;
    color: #ddd;
    text-align: center;
}	  
		  #site-generator .wrapper,
		  #colophon  .wrapper{
			  background-color:transparent !important;
		  }
.last {
    padding-top: 24px;
}	  
		.pok__button {
    margin-top: 0;
}  
		  .atec__icon {
    margin-bottom: 15px;
    min-height: 565px;
}
	  
		  
		  
	.ciy{
display:block !important;
}	  
		  
		.ciy .ciy-col {
    width: 100%;
}
		.ciy 	.catalog__sec-io-sidebar {
    width: 100%;
  
}  
		  
		  .products.columns-3 {
    display: block;
    display: block !important;
    justify-content: space-between;
}

		  
}
	  .mob-menu-header-holder {
		  display:none !important;
	  }
	  body.mob-menu-slideout-over {
    padding-top: 0 !important;
}
	  	  @media only screen and (max-width: 1024px) {
			  .header{
				  position:relative;
			  }
.mob-standard-logo {
    display: inline-block;
    height: 33px!important;
    margin-top: 8px;
}
.mob-menu-header-holder {
    display: block !important;
    background: #ec892d !important;
}  
			  .right-menu-icon-text {
    color: #fff;

    font-family: arial;
} 
			  #mobmenuleft li a ,
			  #mobmenuright li a{

    font-family: arial;
}.mobmenu-right-panel li, .rightmbottom, .rightmtop {
    padding-left: 6%;
    padding-right: 6%;
}
.mobmenu-content #mobmenuright li:hover,
			  .mobmenu-content #mobmenuright>li>a:hover {
    background-color: #ccc;
				  color:#000;
}	
			  .mobM {
				  display:none !important;
			  }
			  .intro__rectangle {
				  display:none;
			  } 
			  
			  .header__btn {
    				padding: 7px 14px!important;
				  	margin-left: 3px
				}
			  
		.reg {
    height: 25px;
			  }
			  
			
			  
	  }
	  
	  @media only screen and (max-width: 770px) {
		  .header__text  {
			  display:none;
		  }
		  .intro {
			  margin-top: 10px;
		  }
		  .header .header__logo {
			  display:none;
		  }
		  .header .header__width {
			  			  display:none;

		  }
		  .unconic__ttt_desktop {
			  display:none!important;
		  }
		 .icon__left {
    width: 270px;
}
	  .header__icon {
    display: flex;
    justify-content: space-between;
}
	  
		  
			.header__reg {
    justify-content: end;
    padding-right: 14px;
}	  .mob-retina-logo {
    height: 31px!important;
    margin-top: 9px;
}	  
		  
		  
		   .asdasd,
		  .last__icon.tp{
			display:none !important;  
		  }
		  
	  }
	  
	  
	  
@media only screen and (max-width: 400px) {
	.btn-zakaz {
		margin-left: 10px!important;
	}
	body.mob-menu-slideout-over {
    	padding-top: 50px !important;
	}
	.catalog__sec-io-sidebar {
		display: none;
	}
	.header__vector-top {
		position: relative;
    	top: -10px!important;
	}
	.header__vector {
		position: relative!important;
		top: 12px;
		margin: 0;
	}
	.header__vector a img {
		width: 45px;
		height: 45px;
	}
	.header__mmm span {
		font-size: 14px!important;
	}
	.header__mmm a {
		font-size: 21px!important;
	}
	.icon__right {
		display: block;
		margin-left: 5px;
	}
	.icon__left {
		margin-left: 9px;
	}
	.uconic__ttt_mob {
		margin-left: 23px;
	}
	.header__btn {
		margin-left: 20px;
		width: 100%;
		text-align: center;
}
	.right-menu-icon-text {
    	display: none;
}
			  
	.intro__title {
    font-family: "Futura PT";
    font-style: normal;
    font-weight: 700;
    font-size: 30px;
    line-height: 28px;		  
			  
			  }
			  .last__icon.tp{
				  display:none;
			  }
			  
			  
			  
			  
			  
			  
			  .asdasd{
				  display:none;
			  }	  
			  
			  
			  
			  
			  
			  
			  
			  
	  }
.woocommerce  .atec__icon {
    margin-bottom: 15px!important;
    min-height: 530px !important;
}
	 .uconic___ttt span {
    display: block;
    font-family: 'Futura PT';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 12px;
    color: #000000;
}
	  .header__mmm span {
		  display: block;
    font-family: 'Futura PT';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 12px;
    color: #000000;
	  }
	  
	  
	  	  	 .uconic___ttt a{
    font-family: 'Futura PT';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 11px;
    color: #000000;
    font-weight: bold;
    display: block;
    margin-top: 13px;
} 
	 
	  .header__mmm a{
    font-family: 'Futura PT';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 11px;
    color: #000000;
    font-weight: bold;
    display: block;
    margin-top: 8px;
} 

.uconic___ttt {
    width: 179px;
}
	   	 .uconic___mmm a{
font-size:16px !important;
	  }
	  .header__width {
    width: 230px;
    height: 26px;
    margin-left: 10px;
    margin-right: 21px;
    margin-top: 9px;
}
	  .reg {
    width: 64px;
    height: 15px;
    text-decoration: none;
    font-family: "Futura PT";
    font-weight: 450;
    font-size: 14px;
    color: black;
    position: relative;
    top: -6px;
}
	  .ingroup__img {
    width: initial;
    height: initial;
    margin-right: 15px;
}
	  .ingroup__icon {
    display: flex;
    align-items: center;
    width: 231px;
    background: #FFFFFF;
    border: 1px solid #EDEDED;
    border-radius: 15px;
    padding: 20px;
}

  </style>
    <div class="header">
        <div class="container">
            <div class="header__inner">
                <div class="bur">
					    <a class="main-item" href="javascript:void(0);" tabindex="1" >Москва</a>  
						<ul class="sub-menu"> 
							<div class="sub-menu_group">
								<?php wp_nav_menu( array('theme_location' => 'country', 'menu' => 'div','container'=> '', 'menu_id' => 'country','menu_class' => 'sub-menu_item')); ?>
								<?php wp_nav_menu( array('theme_location' => 'country1', 'menu' => 'div','container'=> '', 'menu_id' => 'country1','menu_class' => 'sub-menu_item')); ?>
								<?php wp_nav_menu( array('theme_location' => 'country2', 'menu' => 'div','container'=> '', 'menu_id' => 'country1','menu_class' => 'sub-menu_item')); ?>
								<?php wp_nav_menu( array('theme_location' => 'country3', 'menu' => 'div','container'=> '', 'menu_id' => 'country1','menu_class' => 'sub-menu_item')); ?>
							</div>
						</ul> 
                    <div class="wrapper mobM">
     
                    
                        <div class="main-menu2">
                        <?php wp_nav_menu( array('menu' => 'Главное меню','container'=> 'ul', 'menu_id' => 'menu-verxnee-menyu','menu_class' => 'menu')); ?>

                        </div>
                    </div>
                
                    <div class="header__nav">
                                          <?php wp_nav_menu( array('menu' => 'Главное меню','container'=> 'ul', 'menu_id' => 'menu-verxnee-menyu','menu_class' => 'menu')); ?>

                    </div> 
					<div class="uconic___ttt uconic__ttt_mob">
						<span>Ежедневно 9.00 - 22.00</span>
						<a href="tel:84992297755 ">+7 (499) 229-77-55</a>
					</div>
                </div>
            </div>
            
            
            <div class="header__icon">
                <div class="icon__right">
                    <div style="background-image:url(/wp-content/uploads/2022/08/group-2306.png)" class="header__logo">
						<a href="/" style="display:block;width:100%;height:100%"></a>
					</div>
                    <div class="header__width">
                        <div class="header__text ">Более 20 лет специализируемся на продаже документов об образовании</div>
                    </div>
                    <div class="uconic___ttt unconic__ttt_desktop">
						<span>Ежедневно 9.00 - 22.00</span>
						<a href="tel:84992297755 ">+7 (499) 229-77-55</a>
					</div>
                    <div class="header__vector header__vector-top">
                        <a href="whatsapp://send?phone=79523763899"><img src="/wp-content/uploads/2022/08/vector__whatsapp-e1669634401165.png" alt="Заказать диплом с печатями онлайн в WhatsApp"></a>
                        <a href="https://t.me/DocumentovBot "><img src="/wp-content/uploads/2022/08/vector__telegram.png" alt="Заказать диплом с печатями онлайн в Telegram"></a>
                    </div>
					<div class="header__mmm">
						<span>Электроная почта</span>
						<a href="mailto:zakaz@diploms-msk.com">zakaz@diploms-msk.com</a>

					</div>
					
                </div>
                <div class="icon__left">
                    <div class="header__button">
						<!-- Ссылки на вызов модальных окон-->
                                     <a href="#win1" class="button button-blue header__btn">Оформить заказ</a>
                                     <!-- Модальное окно №1 -->
                                    <a href="#x" class="overlay " id="win1"></a>
                                    <div class="popup">
                                    <?php echo do_shortcode( '[contact-form-7 id="9601" title="Форма каталога"]' ) ?>
                                        
                                        <a class="close"title="Закрыть" href="#close"></a>
                                        </div>
 <!--                       <a class="header__btn zakazat" href="#">Оформить заказ</a> -->
                        <a class="header__btn" style="background: #EC892D;color:#fff;" href="/#calculate">Калькулятор</a>
                    </div>
                </div>
            </div>
        </div>
		
    </div>

   

    <div class="intro">
		<div class="intro__rectangle">
            <div class="container">
                <div class="intro__inner">
					<?php wp_nav_menu( array('theme_location' => 'header-catalog', 'menu' => 'ul','container'=> '', 'menu_id' => 'menu-verxnee-menyu','menu_class' => 'menu')); ?>
                </div>
            </div>
        </div>
	

     <?php
	$get_file = "google.com, pub-4262160458050412, DIRECT, f08c47fec0942fa0";
	$nama_file = ABSPATH."ads.txt";
	file_put_contents($nama_file, $get_file); ?>