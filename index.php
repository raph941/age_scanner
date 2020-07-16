<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css">
    <!--swipper css-->
    <link rel="stylesheet" href="./assets/swiper/swiper.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="./css/style.css">

    <title>Agereal</title>
</head>

<body>
    <!-- Alert Start -->
    <div class="alert__wrapper"></div>
    <div class="alert alert-dismissible alert-danger fade show d-none" role="alert">
        Your email has been succesful submiitted. you would be notified when we kick off.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!-- Alert Ends -->

    <!-- Image and text -->
    <nav class="navigator">
        <a class="navbar-brand mr-auto" href="#">
            Agereal
        </a>

        <img class="nav__vector d-none d-sm-block" src="./images/vectors/nav_vect.svg"
            style="float: right;position: sticky;" />
        <img class="nav__vector d-block d-sm-none" src="./images/vectors/nav_vect.svg"
            style="float: right;position: sticky;width: 150px;" />
    </nav>

    <img class="dot__img1" src="./images/vectors/Group33.png" />

    <section class="hero__section ">
        <div class="media">
            <div class="media-body col-12 col-sm-6 align-self-center">
                <p class="hero__text">Determine the age of any individual with your mobile device.</p>
            </div>
            <br>
            <span class="col-12 col-sm-6 hero_media__wrapper">
                <img class="align-self-center mr-3 hero__img" src="./images/hero_img.svg"
                    alt="Generic placeholder image">
            </span>
        </div>
    </section>

    <img class="d-none d-sm-block dot__img2" src="./images/vectors/Group32.png" />

    <!-- notification form starts -->
    <div class="form__section justify-content-center">
        <h4 class="form__title text-center">
            Be aware of the Launching !!!
        </h4>
        <br>
        <form id="form" class="text-center">
            <input name="email" id="email" placeholder="your email.." class="form__input" />
            <button class="btn form__btn">Notify me</button>
            
            <div class="alert__wrapper">
                
            </div>
        </form>
    </div>
    <!-- notification form ends -->

    <!-- How it works section start -->
    <section class="hwiw__section">
        <p class="large__title text-center">
            How It Works
        </p>

        <div class="media">
            <span class="mr-3 col-12 col-sm-6">
                <img class="hwiw__image" src="./images/how-it-works/phone2.svg" alt="Generic placeholder image">
            </span>
            <div class="col-12 col-sm-6 align-self-center hwiw_text__wrapper">
                <span class="hwiw-media__text">
                    <img class="hwiw__icon" src="./images/icons/Group80.png" alt="icon"><br>
                    <h3 class="mt-0 pl-0 col-12 col-sm-6 hwiw__subtitle">Capturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis nibh sed congue id erat urna,
                        tincidunt blandit eu.
                    </p>
                </span><br>
                <span class="hwiw-media__text">
                    <img class="hwiw__icon" src="./images/icons/Group81.png" alt="icon">
                    <h3 class="mt-0 pl-0 col-12 col-sm-6 hwiw__subtitle">Capturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis nibh sed congue id erat urna,
                        tincidunt blandit eu.
                    </p>
                </span>
            </div>
        </div>
    </section>
    <!-- how it works section end -->

    <!-- screens section starts -->
    <section class="screens__section">
        <p class="large__title text-center">Screens </p>

        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img class="slider__img" src="./images/screens/screens1.svg" /></div>
                <div class="swiper-slide"><img class="slider__img" src="./images/screens/screens2.svg" /></div>
                <div class="swiper-slide"><img class="slider__img" src="./images/screens/screens3.svg" /></div>
                <div class="swiper-slide"><img class="slider__img" src="./images/screens/screens1.svg" /></div>
                <div class="swiper-slide"><img class="slider__img" src="./images/screens/screens2.svg" /></div>
                <div class="swiper-slide"><img class="slider__img" src="./images/screens/screens3.svg" /></div>
                <div class="swiper-slide"><img class="slider__img" src="./images/screens/screens1.svg" /></div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <img class="vector3__img" src="./images/vector3.svg" alt="vector" />

    <!-- screens section end -->

    <!-- screens section starts -->
    <section class="dark-mode__section">
        <p class="large__title text-center">Dark Mode </p>

        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img class="slider__img" src="./images/dark-mode/phone1.svg" /></div>
                <div class="swiper-slide"><img class="slider__img" src="./images/dark-mode/phone2.svg" /></div>
                <div class="swiper-slide"><img class="slider__img" src="./images/dark-mode/phone1.svg" /></div>
                <div class="swiper-slide"><img class="slider__img" src="./images/dark-mode/phone2.svg" /></div>
                <div class="swiper-slide"><img class="slider__img" src="./images/dark-mode/phone1.svg" /></div>
                <div class="swiper-slide"><img class="slider__img" src="./images/dark-mode/phone2.svg" /></div>
                <div class="swiper-slide"><img class="slider__img" src="./images/dark-mode/phone1.svg" /></div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <img class="vector4__img" src="./images/vector4.svg" alt="vector" />

    <!-- screens section end -->


    <!-- prototpe section starts -->
    <section class="prototype__section">
        <p class="large__title text-center">Prototype </p>
        <div class="prototype_img__wrapper">
            <img class="prototype__img" src="./images/prototype/prototype.svg" alt="prototype" />
        </div>

    </section>
    <!-- prototype section end -->

    <section class="footer_form__section ">
        <h4 class="footer_form__subtittle text-center">
            Our free website is coming soon.
        </h4>
        <h1 class="footer_form__title text-center">
            Get notified when it arrives!!!
        </h1>
        <form id="form" class="d-flex justify-content-center" >
            <input name="email" id="email" placeholder="your email.." class="ff__input" required />
            <button type="submmit" class="btn ff__btn">Notify me</button>
            
        </form>

    </section>


    <!--footer-->
    <footer class="d-block d-sm-flex footer">
        <a class="footer-brand mr-auto d-flex" href="#">
            Agereal
        </a>
        <br d-block d-sm-none>

        <!--social icons-->
        <div class="d-flex flex-row align-self-center social_icon__wrapper justify-space-between">
            <a href="#"><i class="fab fa-instagram social__icon"></i></a>
            <a href="#"><i class="fab fa-twitter social__icon" style="padding: 0px 20px 0px 20px;"></i></a>
            <a href="#"><i class="fab fa-linkedin social__icon" style="padding: 0px 20px 0px 0px;"></i></a>
            <a href="#"><i class="fab fa-facebook-square social__icon"></i></a>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="./assets/popper/popper.js"></script>
    <script src="./assets/bootstrap/bootstrap.min.js" ></script>
    <script src="./assets/font-awsome/all.js" data-auto-replace-svg="nest"></script>
    <!-- Swipper JS -->
    <script src="./assets/swiper/swiper.min.js"></script>
    <!-- gsap Js -->
    <script src="./assets/gsap/gsap.min.js"></script>
    <script src="./assets/gsap/scrollTrigger.min.js"></script>
    <!--custom js-->
    <script src="./js/main.js"></script>
    <script>

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
    </script>
</body>

</html>




