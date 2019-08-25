<?php
/*
* Template Name: Contact Us
*/
get_header();
?>

<!-- BLOG SECTION -->
<section id="contact" class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 text-center">
        <h3><?php the_title(); ?></h3>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/divider-purple.png" alt="divider" class="w-25">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <?php echo do_shortcode('[contact-form-7 html_class="wpcf7-form text-left" id="90" title="Contact form 1"]') ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
