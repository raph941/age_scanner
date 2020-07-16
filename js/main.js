    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 20,
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
        dynamicMainBullets: 3,
        // bulletClass: 'slider_bullet'
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        997: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      }
    })

// Animations
gsap.registerPlugin(ScrollTrigger);

gsap.from(".hero__img", {duration: 4, x: 00, opacity: 0, scale: 0.5});
gsap.from(".dot__img2", {duration: 2, x: 300, opacity: 0, scale: 0.5});
gsap.from(".nav__vector", {duration: 2, y: -300, opacity: 0});

gsap.from(".dot__img1", {duration: 3, x: -300, opacity: 0, scale: 0.5});

gsap.from(".hwiw__image", {
  scrollTrigger: ".hwiw__imgage", // start the animation when ".hwiw__imgage" enters the viewport (once)
  duration: 3, x: 00
});

