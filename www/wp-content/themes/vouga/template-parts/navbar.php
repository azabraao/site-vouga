<nav class="navbar">
  <div class="container">
    <div class="navbar__inside">
      <div class="navbar__logo">
        <a href="/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo Vouga" />
        </a>
      </div>
      <div class="navbar__hambuguer jsHamburguer">
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </div>
      <div class="menu jsMenu">
        <div class="menu__items">
          <div class="menu__item menu__item--home">
            <a class="menu__item-link" href="/home">
              Home
            </a>
          </div>
          <div class="menu__item menu__item--quem-somos">
            <a class="menu__item-link" href="#quem-somos">
              Quem Somos
            </a>
          </div>
          <div class="menu__item">
            <div class="menu__item--dropdown jsMenuDropdown">
              <span class="menu__item-link">
                Produtos
              </span>

              <div class="menu__item--dropdown-links">
                <a href="">
                  Link
                </a>
                <a href="">
                  Link
                </a>
              </div>
            </div>
          </div>
          <div class="menu__item">
            <a class="menu__item-link" href="ambientacao">
              Ambientação
            </a>
          </div>
          <div class="menu__item">
            <div class="menu__item--dropdown jsMenuDropdown">
              <span class="menu__item-link">
                Atendimento
              </span>
              <div class="menu__item--dropdown-links">
                <a href="">
                  Contato
                </a>
                <a href="">
                  Trabalhe conosco
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
