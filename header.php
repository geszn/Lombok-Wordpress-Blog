<?php
/*
* Header
*/
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  </style>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <i class="fas fa-umbrella-beach pr-1 colored"></i>
      <a href="<?php echo esc_url( home_url()); ?>" class="navbar-brand"><?php echo get_bloginfo('name'); ?></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php wp_nav_menu( array(
          'theme_location'  => 'primary',
          'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'navbarCollapse',
          'menu_class'      => 'navbar-nav ml-auto',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) ); ?>

    </div>
  </nav>

  <section class="container-fluid">
      <div class="row position-relative d-flex justify-content-center align-items-center text-center">
        <img src="<?php header_image(); ?>" alt="lombok background" class="header_img w-100">
        <div class="position-absolute feature-bg font-weight-bold display-2 text-light">
            <?php featureText(); ?>
        </div>
      </div>
  </section>
