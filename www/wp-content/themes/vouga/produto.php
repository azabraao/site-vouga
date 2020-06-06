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
                  Jateado
                </div>
              </h1>

              <h2 class="title-5">Polietileno</h2>
              <p>
                O design da linha Jateado vem para proporcionar à sua casa e ao
                seu ambiente de trabalho mais harmonia na decoração além de
                sofisticação e beleza.
              </p>
            </div>
            <div class="product-detail__header-image content">
              <h3 class="title-5">Cores</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jateado-cores.png" alt="Cores" />
            </div>
          </header>

          <div class="product-detail__body">

            <section class="product-detail__row">
              <header class="product-detail__row-header content">
                <h3 class="title-4">
                  Inclinato
                </h3>
              </header>
              <div class="product-detail__row-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jateado-inclinato.png" alt="" />
              </div>
            </section>

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
            </section>

          </div>
          
        </div>
      </div>
    </div>

<?php get_footer(); ?>
