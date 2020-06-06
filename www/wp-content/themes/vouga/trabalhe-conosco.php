<?php get_header(); ?>
    <header class="page-header">
      <div class="page-header__inside">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trabalhe-conosco-background.png" />
      </div>
    </header>

    <section class="atendimento">
      <div class="container">
        <div class="atendimento__inside desktop-space-left">
          <header class="atendimento__header content">
            <h1 class="title-2">FAÇA PARTE DA VOUGA</h1>
          </header>
          <div class="atendimento__body">
            <div class="atendimento__columns">
              <div class="atendimento__infos">
                <h2 class="title-4">Fale com a gente</h2>
                <div class="contact">
                  <p>
                    <i class="icon icon-email--brown"></i>
                    <span>
                      <a href="mailto:vendas@vougadecor.com.br">
                        vendas@vougadecor.com.br
                      </a>
                    </span>
                  </p>
                  <p>
                    <i class="icon icon-whatsapp--brown"></i>
                    <span>
                      <a href="tel:+5511973569049">
                        +55 11 97356 9049
                      </a>
                    </span>
                  </p>
                  <p>
                    <i class="icon icon-phone--brown"></i>
                    <span>
                      <a href="tel:+551145240509">
                        +55 11 4524 0509
                      </a>
                    </span>
                  </p>
                </div>
                <div class="address">
                  <i class="icon icon-location--brown"></i>
                  <span>
                    <div>
                      Rua Vicente Mecca, 199
                    </div>
                    <div>
                      Jardim De Lucca - Itatiba - SP
                    </div>
                    <div>
                      CEP: 13.255-240 - Brasil
                    </div>
                  </span>
                </div>
              </div>
              <div class="atendimento__form">
                <form action="" class="form">
                  <input class="form__input" type="text" placeholder="Nome" />
                  <input class="form__input" type="tel" placeholder="Fone" />
                  <input class="form__input" type="email" placeholder="Email" />
                  <textarea
                    class="form__textarea"
                    placeholder="Mensagem"
                    rows="7"
                  ></textarea>
                  <button
                    type="submit"
                    class="button button--small button--primary button--primary-reverse"
                  >
                    Enviar
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>