$(document).ready(function() {
    const menu = {
        init() {
            $('.jsHamburguer').on('click', menu.handleHamburguerClick);
            $('.menu-item').on('click', menu.handleMenuDropdownClick);
        },
        handleMenuDropdownClick(event) {
            $('.menu-item-55>a, .menu-item-44>a').removeAttr("href");
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

    ambientacaoModal.init();
    menu.init();
});