<?php
/*
/* Template Name: Home
*/
get_header(); 
// wp_redirect( '/vouga/www/home' );
// exit;
?>


  <header class="site-header">
    <div class="container">
      <div class="site-header__inside">
        <div class="site-header__image"></div>
      </div>
    </div>
  </header>

  <section class="vivifique">
    <div class="container">
      <div class="vivifique__inside centered-columns">
      <?php 
        if(have_rows('vivifique_sua_casa')) :
          while(have_rows('vivifique_sua_casa')) : the_row();
            $titulo = get_sub_field('titulo');
            $texto = get_sub_field('texto');
          endwhile;
        endif;
      ?>
        <div class="column content">
          <h2 class="title-2">
            <?= $titulo ?>
          </h2>
        </div>
        <div class="column content">
          <p>
            <?= $texto ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="quem-somos" id="quem-somos">
    <div class="container">
      <div class="quem-somos__inside centered-columns">
      <?php
        if(have_rows('quem_somos')) :
          while(have_rows('quem_somos')) : the_row();
            $titulo = get_sub_field('titulo');
            $texto = get_sub_field('texto');
            $texto_2 = get_sub_field('texto-2');
            $texto_3 = get_sub_field('texto-3');
            $imagem = get_sub_field('imagem');
          endwhile;
        endif;
        ?>
        <div class="column content">
          <h2 class="title-2">
            <div><?= $titulo ?></div>
          </h2>
          <p>
            <?= $texto ?>
          </p>
          <p>
            <?= $texto_2 ?>
          </p>
          <p>
          <?= $texto_3 ?>
          </p>
        </div>
        <div class="column content">
          <img src="<?php echo $imagem ?>" alt="Vaso" />
        </div>
      </div>
    </div>
  </section>
  <section class="diferenciais">
    <div class="container">
      <div class="diferenciais__inside">
        <header class="diferenciais__header content">
          <h2 class="title-2">Diferenciais</h2>
        </header>
        <div class="diferenciais-list">
          <?php 
          for($i = 1; $i < 5; $i++) :
            $field = 'diferencial_' . $i;
            if( have_rows($field) ) :
              while( have_rows($field) ) : the_row();
                $titulo = get_sub_field('titulo');
                $texto = get_sub_field('texto');
              endwhile;
            endif;
            ?>
            <div class="diferencial content">
            <h3><?= $titulo ?></h3>
            <p>
              <?= $texto ?>
            </p>
          </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="ouse-mudar">
    <div class="ouse-mudar__inside">
      <div class="container">
        <header class="ouse-mudar__header">
          <h2>OUSE MUDAR</h2>
          <p>
            São mais de <strong>800 combinações</strong> de produtos, entre
            tamanhos, modelos e cores
          </p>
        </header>
      </div>
      <div class="ouse-mudar__body">
        <div class="container">
          <div class="ouse-mudar__list">
            <div class="ouse-mudar__list-item">
              <p>
                Mudar é um ato de amor
              </p>
            </div>
            <div class="ouse-mudar__list-item">
              <p>
                Mude seus ambientes
              </p>
            </div>
            <div class="ouse-mudar__list-item">
              <p>
                Mude seu dia a dia
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>