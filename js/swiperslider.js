const helpSwiper = new Swiper('.help-swiper', {
  // Optional parameters
  loop: true,

  // Default parameters
  slidesPerView: 1,
  spaceBetween: 10,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    480: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    // when window width is >= 860px
    860: {
      slidesPerView: 3,
      spaceBetween: 10
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 4,
      spaceBetween: 20
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

const newsSwiper = new Swiper('.news-swiper', {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.news-button-next',
    prevEl: '.news-button-prev',
  },

});
