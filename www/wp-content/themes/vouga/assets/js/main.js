const menu = {
  init() {
    $(".jsHamburguer").on("click", menu.handleHamburguerClick);
    $(".jsMenuDropdown").on("click", menu.handleMenuDropdownClick);
  },
  handleMenuDropdownClick(event) {
    $(this).toggleClass("active");
  },
  handleHamburguerClick() {
    menu.makeHamburguerAnimation();

    $(".jsMenu").toggleClass("active");
  },
  makeHamburguerAnimation() {
    $(".jsHamburguer").addClass("animate");

    setTimeout(() => {
      $(".jsHamburguer").removeClass("animate");
    }, 300);
  },
};

menu.init();
