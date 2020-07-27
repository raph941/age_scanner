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