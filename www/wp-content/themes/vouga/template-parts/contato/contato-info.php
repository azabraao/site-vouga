<?php 
    $post_ID = get_the_ID();
    $parentpost_id = wp_get_post_parent_id( $post_ID );
    $page = $parentpost_id;
    include('contato-data.php');
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
                    <?= $bairro . ' - ' . $cidade . ' - ' . $estado ?>
                    </div>
                    <div>
                      CEP: <?= $cep . ' - ' . $pais ?>
                    </div>
                  </span>
                </div>
              </div> 