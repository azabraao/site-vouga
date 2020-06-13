<?php 
/* Template Name: Contato

*/
get_header(); 
  include('template-parts/page-banner.php');
  include('template-parts/contato-info.php');
?>

              <div class="atendimento__form">
                <!-- <form action="" class="form">
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
              </div> -->
              <form action="" class="form">
                <?php echo do_shortcode('[contact-form-7 id="79" title="Contato"]'); ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>
  </body>
</html>
