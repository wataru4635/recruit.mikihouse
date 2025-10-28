window.addEventListener('load', () => {
  setTimeout(() => {
    var fv_swiper = new Swiper(".js-fv-swiper", {
      loop: true,
      speed: 2000,
      effect: "fade",
      fadeEffect: {
        crossFade: true
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false
      },
      allowTouchMove: false,
    });
  }, 100);
});