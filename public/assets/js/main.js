var swiper = new Swiper(".mySwiper12", {
    slidesPerView: 2,
    spaceBetween: 10,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 50, 
      },
    },
  });