<nav class="navbar">
  <div class="container">
    <div class="navbar__inside">
      <div class="navbar__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo Vouga" />
        </a>
      </div>
      <div class="navbar__hambuguer jsHamburguer">
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </div>
      <div class="menu jsMenu">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </div>
    </div>
  </div>
</nav>
