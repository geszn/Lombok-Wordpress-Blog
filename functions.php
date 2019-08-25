<?php
/*
* Function definitions
*/
 ?>
 <?php
 if(! isset($content_width)) {
   $content_width = 660;
 }

 function lombokwp_setup() {
   add_theme_support('automatic-feed-links');
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
   // Register Custom Navigation Walker
   require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
   register_nav_menus( array(
   'primary' => __( 'Main header menu', 'lombokwp' ),
   'footer' => __(' Footer Menu', 'lombokwp')
 ) );
 }

 add_action('after_setup_theme', 'lombokwp_setup');

 function lombok_scripts() {
   /* Add styles */
   wp_enqueue_style('bootstrap-core', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
   wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css');
   wp_enqueue_style('lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css');
   wp_enqueue_style('custom', get_template_directory_uri() .'/style.css');

   wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), null, true);

   if ( is_singular()
       && comments_open()
       && get_option('thread_comments')
     ) {
     wp_enqueue_script('comment-reply');
   }
 }
 add_action('wp_enqueue_scripts', 'lombok_scripts');

 function new_excerpt_text( $more ) {
 	return '...';
 }
 add_filter('excerpt_more', 'new_excerpt_text');

 function featureText() {
   if( is_front_page() ) {
     the_field('header_text_front_page');
   } elseif ( is_home() || is_single()){
     _e("JOLLY LOMBOK BLOG");
   } elseif( is_search() ) {
     _e("JOLLY LOMBOK BLOG");
     _e("<br>");
     printf(__('<h3>Search results for: %s</h3>', 'lombokwp'), get_search_query());
   } elseif( is_404() ) {
     _e("<h2>Whoops, were a little lost<br>
     <em>Let's get back on track</em></h2>");
   } else {
     _e("LOMBOK");
   }
 }

 function alphabet_widgets_init() {

 	register_sidebar( array(
 		'name'          => 'Home right sidebar',
 		'id'            => 'home_right_1',
 		'before_widget' => '<div class="py-3">',
 		'after_widget'  => '</div>',
 		'before_title'  => '<h4 class="font-italic">',
 		'after_title'   => '</h4>',
 	) );

 }
 add_action( 'widgets_init', 'alphabet_widgets_init' );

 $args = array(
   'width' => 2600,
   'height' => 650,
   'default-image' => get_template_directory_uri() . '/images/header.jpg',
   'uploads' => true
 );
 add_theme_support('custom-header', $args);

 register_default_headers( array(
   'header1' => array(
     'url' => get_template_directory_uri() . '/images/header.jpg',
     'thumbnail_url' => get_template_directory_uri() . '/images/header.jpg',
     'description' => __(' header 1 ')
   ),
   'header2' => array(
     'url' => get_template_directory_uri() . '/images/image15.jpg',
     'thumbnail_url' => get_template_directory_uri() . '/images/image15.jpg',
     'description' => __(' header 2 ')
   ),
 ));
?>
