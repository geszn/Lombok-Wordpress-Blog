<?php
/*
* The main template file
*/
 ?>
 <?php get_header() ?>

  <!--HOME ICON SECTION  -->
  <section id="home-icons" class="py-5">
    <div class="container">
      <div class="row justify-content-center align-items-center" style="height: 20vh">
        <div class="col-sm-10 text-center">
          <h3 class="font-weight-bold display-4"><?php the_field('welcome_section_title') ?></h3>
          <br>
          <p><?php the_field('welcome_section_description') ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- PRICE LIST SECTION -->
    <div class="container-fluid py-5">
      <div class="row my-4">
        <div class="col-md-6 offset-md-3 text-center">
          <h1 class="text-dark">Photo Gallery</h1>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider" class="pb-4 w-25">
        </div>
      </div>
      <div class="row my-4">
        <div class="col-sm-4 ">
          <figure class="polaroid ml-auto mr-auto">
            <picture>
              <img src="<?php the_field('section_title_image_1') ?>" />
            </picture>
            <figcaption>Ricefield</figcaption>
          </figure>
        </div>
        <div class="col-sm-4 ">
          <figure class="polaroid ml-auto mr-auto">
            <picture>
              <img src="<?php the_field('section_title_image_2') ?>" />
            </picture>
            <figcaption>Waterfall</figcaption>
          </figure>
        </div>
        <div class="col-sm-4 ">
          <figure class="polaroid ml-auto mr-auto">
            <picture>
              <img src="<?php the_field('section_title_image_3') ?>" />
            </picture>
            <figcaption>Hill</figcaption>
          </figure>
        </div>
      </div>
      <div class="row my-4">
        <div class="col-sm-4 ">
          <figure class="polaroid ml-auto mr-auto">
            <picture>
              <img src="<?php the_field('section_title_image_4') ?>" />
            </picture>
            <figcaption>Culture</figcaption>
          </figure>
        </div>
        <div class="col-sm-4 ">
          <figure class="polaroid ml-auto mr-auto">
            <picture>
              <img src="<?php the_field('section_title_image_5') ?>" />
            </picture>
            <figcaption>Village</figcaption>
          </figure>
        </div>
        <div class="col-sm-4 ">
          <figure class="polaroid ml-auto mr-auto">
            <picture>
              <img src="<?php the_field('section_title_image_6') ?>" />
            </picture>
            <figcaption>Beach</figcaption>
          </figure>
        </div>
      </div>
    </div>


<?php get_footer() ?>
