$(document).ready(function () {
  const menu = {
    init() {
      $('.jsHamburguer').on('click', menu.handleHamburguerClick);
      $('.menu-item').on('click', menu.handleMenuDropdownClick);
    },
    handleMenuDropdownClick(event) {
      $(
        'a[data-type = "Produtos"], a[data-type = "Atendimento"], a[data-type = "Products"], a[data-type = "Attendance"]'
      ).removeAttr('href');
      $(this).toggleClass('active');
    },
    handleHamburguerClick() {
      menu.makeHamburguerAnimation();

      $('.jsMenu').toggleClass('active');
    },
    makeHamburguerAnimation() {
      $('.jsHamburguer').addClass('animate');

      setTimeout(() => {
        $('.jsHamburguer').removeClass('animate');
      }, 300);
    },
  };
  const ambientacaoModal = {
    init() {
      $(window).on('resize', ambientacaoModal.resizeModalImage);
      $('.jsCloseModal').on('click', ambientacaoModal.close);

      $('.jsActiveModal').on('click', ambientacaoModal.handleImageSelect);
    },
    handleImageSelect(event) {
      let image = event.currentTarget.dataset.src;
      ambientacaoModal.placeImage(image);
      ambientacaoModal.active();
    },
    resizeModalImage() {
      let height = window.innerHeight * 0.8;
      $('.jsModalImagem').css('max-height', height);
    },
    active() {
      $('body').css('overflow-y', 'hidden');
      $('.jsModalOverlay').addClass('active');
    },
    close(event) {
      $('body').css('overflow-y', 'scroll');
      let el = event.target;
      if (el.classList.contains('jsCloseModal')) {
        $('.jsModalOverlay').removeClass('active');
      }
    },
    placeImage(image) {
      $('.jsModalImagem')[0].src = image;
    },
  };

  const productSlide = {
    init() {
      $('.jsSlide').on('scroll', productSlide.handleScroll);
      $('.jsSlideNext').on('click', productSlide.next);
      $('.jsSlidePrev').on('click', productSlide.prev);
    },
    next(event) {
      event.target.parentElement.parentElement.scrollBy({
        top: 0,
        left: 300,
        behavior: 'smooth',
      });
    },
    prev(event) {
      event.target.parentElement.parentElement.scrollBy({
        top: 0,
        left: -300,
        behavior: 'smooth',
      });
    },
    handleScroll() {
      if (this.scrollLeft === 0) {
        $(this).find('.jsSlidePrev').css('opacity', 0);
      } else {
        $(this).find('.jsSlidePrev').css('opacity', 1);
      }

      if (this.scrollLeft > 300) {
        $(this).find('.jsSlideNext').css('opacity', 0);
      } else {
        $(this).find('.jsSlideNext').css('opacity', 1);
      }
    },
  };

  productSlide.init();
  ambientacaoModal.init();
  menu.init();
});
