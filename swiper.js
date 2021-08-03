var swiper = new Swiper('.swiper-container', {
  slidesPerView: 3,
  spaceBetween: 0,
  speed: 800,
  loop: true,
  centeredSlides: true,
  pagination: '.swiper-pagination',
  autoplay: 2000,
  disableOnInteraction: false,
  breakpoints: {
    767: {
      slidesPerView: 1,
      spaceBetween: 0
    }
  }
});