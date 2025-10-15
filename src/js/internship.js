if (window.innerWidth <= 767) {
  const slider = new Swiper('.js-swiper',{
    slidesPerView:1,
    loop:true,
    speed:500,
    autoplay:{
      delay:3000,
      disableOnInteraction:false,
    },
    pagination:{
      el:'.internship__swiper-pagination'
    },
  })
}