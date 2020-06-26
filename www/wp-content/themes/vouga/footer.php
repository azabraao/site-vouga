<?php 
    $parentpost_id = wp_get_post_parent_id( '10' );
    $page = $parentpost_id;
    include('template-parts/contato/contato-data.php');
?>
<footer class="footer">
  <div class="container">
    <div class="footer__inside">
      <div class="footer__columns">
        <div class="footer__column logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo vouga" />
        </div>
        <div class="footer__column contact">
          <p>
            <i class="icon icon-email"></i>
            <span>
              <a href="mailto:<?= $email ?>">
                <?= $email ?>
              </a>
            </span>
          </p>
          <p>
            <i class="icon icon-whatsapp"></i>
            <span>
              <a href="tel:<?= $celular ?>">
                <?= $celular ?>
              </a>
            </span>
          </p>
          <p>
            <i class="icon icon-phone"></i>
            <span>
              <a href="tel:<?= $telefone ?>">
              <?= $telefone ?>
              </a>
            </span>
          </p>
        </div>
        <div class="footer__column address">
          <i class="icon icon-location"></i>
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
        <div class="footer__column social">
          <a target="_blank" href="<?php the_field('instagram', $page) ?>">
            <i class="icon icon-instagram"></i>
            <span><?php the_field('instagram_@', $page) ?></span>
          </a>
          <a target="_blank" href="<?php the_field('facebook', $page) ?>">
            <i class="icon icon-facebook"></i>
            <span><?php the_field('facebook_nome', $page) ?></span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php dynamic_sidebar( 'footer-information' ); ?>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  </body>
</html>

<?php wp_footer(); ?>

