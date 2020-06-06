
<?php get_header(); ?>

  <?php include('template-parts/navbar.php') ?>

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
        <div class="column content">
          <h2 class="title-2">
            Vivifique sua casa
          </h2>
        </div>
        <div class="column content">
          <p>
            Acreditamos que detalhes são importantes, e memórias afetivas são
            o fruto de ambientes transformadores, como ouvir as histórias da
            avó na varanda de casa, regando as plantas com aquele cheirinho de
            terra molhada. Momentos como este nos fazem brilhar os olhos.
            Ficam até marejados de saudades com tantas lembranças que uma casa
            e a decoração podem nos proporcionar. Juntos, vamos participar da
            sua vida unindo histórias e trazendo mais beleza, consciência
            ecológica e sofisticação no seu lar.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="quem-somos" id="quem-somos">
    <div class="container">
      <div class="quem-somos__inside centered-columns">
        <div class="column content">
          <h2 class="title-2">
            <div>Quem</div>
            <div>somos</div>
          </h2>
          <p>
            Desde 1993 acumulando experiência no setor, conseguimos
            desenvolver a mais completa linha de vasos, floreiras e acessórios
            capazes de atender aos mais diferentes projetos paisagísticos bem
            como aos mais exigentes profissionais.
          </p>
          <p>
            Oferecemos a melhor tecnologia na produção de vasos, com alta
            resistência e design moderno.
          </p>
          <p>
            Resistência, Durabilidade e Beleza
          </p>
        </div>
        <div class="column content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vaso-2.png" alt="Vaso" />
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
          <div class="diferencial content">
            <h3>Ecológico</h3>
            <p>
              Nossos produtos respeitam as normas ambientais, são atóxicos e
              podem ser reciclados
            </p>
          </div>
          <div class="diferencial content">
            <h3>Leve</h3>
            <p>Confeccionados em polietileno, são muito mais leves.</p>
          </div>
          <div class="diferencial content">
            <h3>Resistência</h3>
            <p>
              Nossos produtos são resistentes a impactos e batidas, garantindo
              sempre sua função e durabilidade
            </p>
          </div>
          <div class="diferencial content">
            <h3>Proteção</h3>
            <p>
              Devido aos aditivos anti-UV não sofrem ação da natureza. Faça
              sol ou chuva, frio ou calor.
            </p>
          </div>
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