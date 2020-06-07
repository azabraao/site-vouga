<?php
/* 
Template Name: Ambientacao
*/
get_header(); 
    include('template-parts/page-banner.php'); 
?>
<section class="ambientacao">
    <div class="container">
        <header class="ambientacao__header content desktop-space-left">
            <h1 class="title-3"><?php the_title(); ?></h1>
            <?php if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; 
                endif;?>
        </header>
        <div class="ambientacao__body">
            <div class="ambientacao_images">
                <div class="ambientacao__image">
                    <div class="ambientacao__image-the-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ambientacao-item.png" alt="Vouga decor imagem de ambientação" />
                    </div>
                    <div data-src="<?php echo get_template_directory_uri(); ?>/assets/img/ambientacao-item.png" class="ambientacao__image-title jsActiveModal">
                        <p>
                            Nome do produto
                        </p>
                    </div>
                </div>
                <div class="ambientacao__image">
                    <div class="ambientacao__image-the-image">
                        <img src="http://placekitten.com/200/100" alt="Vouga decor imagem de ambientação" />
                    </div>
                    <div data-src="http://placekitten.com/200/100" class="ambientacao__image-title jsActiveModal">
                        <p>
                            Nome do produto
                        </p>
                    </div>
                </div>
                <div class="ambientacao__image">
                    <div class="ambientacao__image-the-image">
                        <img src="http://placekitten.com/200/600" alt="Vouga decor imagem de ambientação" />
                    </div>
                    <div data-src="http://placekitten.com/200/600" class="ambientacao__image-title jsActiveModal">
                        <p>
                            Nome do produto
                        </p>
                    </div>
                </div>
                <div class="ambientacao__image">
                    <div class="ambientacao__image-the-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ambientacao-item.png" alt="Vouga decor imagem de ambientação" />
                    </div>
                    <div data-src="<?php echo get_template_directory_uri(); ?>/assets/img/ambientacao-item.png" class="ambientacao__image-title jsActiveModal">
                        <p>
                            Nome do produto
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cta">
    <div class="container">
        <div class="cta__inside">
            <div class="cta__header">
                <h2 class="title-1">
                    Vivifique sua casa
                </h2>
            </div>
            <div class="cta__body">
                <a href="/contato" class="button button--medium button--primary">Entre em contato</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-overlay jsModalOverlay jsCloseModal">
      <div class="modal">
        <div class="modal__body">
          <picture>
            <button type="button" class="modal__close jsCloseModal">x</button>
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/ambientacao-item.png"
              class="jsModalImagem"
              alt="Imagem ampliada"
            />
          </picture>
        </div>
      </div>
    </div>
<?php get_footer(); ?>