// form AJAX submission
$('#form').submit(function(e){
  e.preventDefault();
  var email = $('#email').val()

  $.ajax({
  url: 'action.php',
  method: "POST",
  data: {
      'email': email
  },
  success: function(data){
      $('.alert__wrapper').html(
          '<div class="alert alert-success alert-dismissible fade show" role="alert">Your email has been succesful submiitted. you would be notified when we kick off.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
      )
  },
  error: function(data){
      $('.alert__wrapper').html(
          '<div class="alert alert-danger alert-dismissible fade show" role="alert">An error occur during your email submission. please try again.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'

      )
  },
  })
})

// Swipper Carousel

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

// GSAP Animations
gsap.registerPlugin(ScrollTrigger);

gsap.from(".hero__img", {duration: 4, x: 00, opacity: 0, scale: 0.8});
gsap.from(".dot__img2", {duration: 2, x: 300, opacity: 0, scale: 0.5});
gsap.from(".nav__vector", {duration: 2, y: -300, opacity: 0});
gsap.from(".hero__text", {duration: 4, y: 00, opacity: 0, scale:0.8});

gsap.from(".dot__img1", {duration: 3, x: -300, opacity: 0, scale: 0.5});

gsap.from(".hwiw__image", {
  scrollTrigger: ".hwiw__imgage", // start the animation when ".hwiw__imgage" enters the viewport (once)
  duration: 3, x: 00
});

gsap.from(".hwiw__image", {
  duration: 2.5, y: 20,
    scrollTrigger: {
      trigger:".hwiw__image",
      start:"top 75%", //when top of herman passes 75% viewport height
      end:"bottom 25%", //when bottom of herman passes 25% viewport height
           //events: onEnter onLeave onEnterBack onLeaveBack
      toggleActions:"restart complete reverse reset"
          //options: play, pause, resume, reset, restart, complete, reverse,none
    }
}) 

gsap.from(".hwiw__text", {
  duration: 1.0, y: 20,
    scrollTrigger: {
      trigger:".hwiw__text",
      start:"top 75%", //when top of herman passes 75% viewport height
      end:"bottom 25%", //when bottom of herman passes 25% viewport height
           //events: onEnter onLeave onEnterBack onLeaveBack
      toggleActions: "restart pause restart pause",
          //options: play, pause, resume, reset, restart, complete, reverse,none
    }
}) 


// LightBox
lightbox.option({
  'resizeDuration': 200,
  'wrapAround': true,
  'albumLabel': "Image",
  'disableScrolling': true,
})
