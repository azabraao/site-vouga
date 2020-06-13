<?php 
    $post_ID = get_the_ID();
    $parentpost_id = wp_get_post_parent_id( $post_ID );
    $email = get_field( "email", $parentpost_id ); 
    $celular = get_field( "celular", $parentpost_id ); 
    $telefone = get_field( "telefone", $parentpost_id ); 
    if( have_rows('endereco', $parentpost_id) ):
    while( have_rows('endereco', $parentpost_id) ): the_row();
        $rua = get_sub_field( "rua", $parentpost_id ); 
        $bairro = get_sub_field( "bairro", $parentpost_id ); 
        $cep = get_sub_field( "cep", $parentpost_id ); 
    endwhile;
    endif;
?>
<section class="atendimento">
      <div class="container">
        <div class="atendimento__inside desktop-space-left">
          <header class="atendimento__header content">
            <h1 class="title-2"><?php the_title(); ?></h1>
          </header>
          <div class="atendimento__body">
            <div class="atendimento__columns">
              <div class="atendimento__infos">
                <h2 class="title-4">Fale com a gente</h2>
                <div class="contact">
                  <p>
                    <i class="icon icon-email--brown"></i>
                    <span>
                      <a href="mailto:<?= $email ?>">
                        <?= $email ?>
                      </a>
                    </span>
                  </p>
                  <p>
                    <i class="icon icon-whatsapp--brown"></i>
                    <span>
                      <a href="tel:<?= $celular ?>">
                        <?= $celular ?>
                      </a>
                    </span>
                  </p>
                  <p>
                    <i class="icon icon-phone--brown"></i>
                    <span>
                      <a href="tel:<?= $telefone ?>">
                        <?= $telefone ?>
                      </a>
                    </span>
                  </p>
                </div>
                <div class="address">
                  <i class="icon icon-location--brown"></i>
                  <span>
                    <div>
                      <?= $rua ?>
                    </div>
                    <div>
                      <?= $bairro ?>
                    </div>
                    <div>
                      CEP: <?= $cep ?>
                    </div>
                  </span>
                </div>
              </div>