<?php 
/* Template Name: Contato

*/
get_header(); 
  include('template-parts/page-banner.php');
  include('template-parts/contato/contato-info.php');
?>

              <div class="atendimento__form">
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
