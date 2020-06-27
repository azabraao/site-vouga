<?php
/*
Template Name: Produto
*/
get_header(); ?>
    <header class="page-header">
      <div class="page-header__inside">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/produtos-header.png" />
      </div>
    </header>

    <div class="product-detail">
      <div class="container">
        <div class="product-detail__inside desktop-space-left">
          <header class="product-detail__header">
            <div class="product-detail__header-content content">
              <h1 class="title-1">
                <div class="smaller">
                  Linha
                </div>
                <div>
                  <?php 
                  $term = get_the_terms( $post->ID, 'linha');
                  $term = $term[0];
                   echo $term->name;?>
                </div>
              </h1>
              <?php 
              // print_r($post); ?>
              <h2 class="title-5">
                <?php $material = get_field('material', $term);
                echo $material; ?>
              </h2>
              <p>
                <?php echo term_description();?>
              </p>
            </div>
            <div class="product-detail__header-image content">
              <h3 class="title-5">Cores</h3>
              <?php $cores = get_field('cores', $term);
              ?>
              <img src="<?php echo $cores; ?>" alt="Cores" />
            </div>
          </header>

          <div class="product-detail__body">
          <?php if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        the_content();
                    ?>
            <section class="product-detail__row">
              <header class="product-detail__row-header content">
                <h3 class="title-4">
                  <?php the_title(); ?>
                </h3>
              </header>
              <div class="product-detail__row-image">
                <div class="slide-pass">
                  <div class="slide-pass__prev jsSlidePrev"></div>
                  <div class="slide-pass__next jsSlideNext"></div>
                </div>              
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jateado-inclinato.png" alt="" /> -->
                <?php echo get_the_post_thumbnail(); ?>
              </div>
            </section>
         <?php endwhile; 
        endif;?>
<!-- 
            <section class="product-detail__row">
              <header class="product-detail__row-header content">
                <h3 class="title-4">
                  Floreira estreita
                </h3>
              </header>
              <div class="product-detail__row-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jateado-floreira-estreita.png" alt="" />
              </div>
            </section>

            <section class="product-detail__row">
              <header class="product-detail__row-header content">
                <h3 class="title-4">
                  Oval
                </h3>
              </header>
              <div class="product-detail__row-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jateado-oval.png" alt="" />
              </div>
            </section> -->

          </div>
          
        </div>
      </div>
    </div>

<?php get_footer(); ?>
