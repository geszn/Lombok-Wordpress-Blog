<?php
/*
* The template for displaying all blog posts
*/
?>

<!-- HEADER SECTION -->
<?php get_header() ?>

<!-- BLOG SECTION -->
<main class="container-fluid py-5">
  <div class="row">
    <div class="col-sm-8">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div>
          <h2><?php the_title(); ?></h2>
        <p><?php echo get_the_date('F j, Y'); ?> by <a href=""><?php the_author(); ?></a></p>
        <div class="pb-2">
          <i class="fas fa-tags"></i>
          <p class="d-inline"><?php the_tags(__('Tagged: ', ' ~ ','lombokwp')) ?></p>
        </div>
        <div class="my-3">
          <?php the_post_thumbnail('large'); ?>
        </div>
        <p><?php the_content() ?></p>
        <?php wp_link_pages() ?>
      </div>
    <?php endwhile; else: ?>

  <?php the_content() ?>


  <p><?php _e('Sorry, no post matched your criteria'); ?></p>

<?php
endif;
?>

<?php
  if( comments_open() || get_comments_number() ):
    comments_template();
  endif;
?>

  <nav>
    <ul class="nav">
      <li><?php next_post_link(); ?></li> &nbsp;
      <li><?php previous_post_link(); ?></li>
    </ul>
  </nav>
</div>

    <aside class="col-sm-4">
      <?php get_sidebar(); ?>
    </aside>

  </div>
</main>
<!-- FOOTER SECTION -->
<?php get_footer() ?>
