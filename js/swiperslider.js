const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  // Default parameters
  slidesPerView: 1,
  spaceBetween: 30,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    480: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 40
    },
    // when window width is >= 860px
    860: {
      slidesPerView: 3,
      spaceBetween: 40
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 4,
      spaceBetween: 40
    },
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.help-button-next',
    prevEl: '.help-button-prev',
  },
});
