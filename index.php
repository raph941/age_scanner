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
    <!-- Lightbox -->
    <link rel="stylesheet" href="./assets/lightbox/css/lightbox.min.css">
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
            <button class="btn form__btn" id="notify">Notify me</button>
            
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
            <span class="mr-3 col-12 col-sm-6 d-flex justify-content-center align-self-center">
                <img class="hwiw__image" src="./images/how-it-works/phone2.svg" alt="Generic placeholder image">
            </span>
            <div class="col-12 col-sm-6 align-self-center hwiw_text__wrapper">
                <span class="hwiw-media__text">
                    <img class="hwiw__icon" src="./images/icons/Group80.png" alt="icon"><br>
                    <h3 class="mt-0 pl-0 col-12 col-sm-6 hwiw__subtitle">Capturing</h3>
                    <p class="hwiw__text">
                        This stage takes an image of a person whom is in the focus of the camera or and gets the features of the face.
                    </p>
                </span><br>
                <span class="hwiw-media__text">
                    <img class="hwiw__icon" src="./images/icons/Group81.png" alt="icon">
                    <h3 class="mt-0 pl-0 col-12 col-sm-6 hwiw__subtitle">Scanning</h3>
                    <p class="hwiw__text">
                        During this the image taken or an existing image in the gallery is scanned to identfy the age of the individual within the picture.
                    </p>
                </span><br>
                <span class="hwiw-media__text">
                    <img class="hwiw__icon" src="./images/icons/process.png" alt="icon">
                    <h3 class="mt-0 pl-0 col-12 col-sm-6 hwiw__subtitle">Processing</h3>
                    <p class="hwiw__text">
                        This takes into all accounts all the features of the face that tells a persons age starting from the eyes, cheeks and lips and analyses the age from there.
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
                <div class="swiper-slide">
                    <a href="./images/screens/screen1.svg" data-lightbox="Slide1" data-title="Scan Image">
                        <img class="slider__img" src="./images/screens/screen1.svg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./images/screens/screen2.svg" data-lightbox="Slide2" data-title="Agereal Default Splash Screen">
                        <img class="slider__img" src="./images/screens/screen2.svg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./images/screens/screen3.svg" data-lightbox="Slide3" data-title="Face Dectection">
                        <img class="slider__img" src="./images/screens/screen3.svg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./images/screens/screen4.svg" data-lightbox="Slide4" data-title="Unable To Detect Face">
                        <img class="slider__img" src="./images/screens/screen4.svg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./images/screens/screen5.svg" data-lightbox="Slide5" data-title="Scan History">
                        <img class="slider__img" src="./images/screens/screen5.svg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./images/screens/screen6.svg" data-lightbox="Slide6" data-title="Scan Completed">
                        <img class="slider__img" src="./images/screens/screen6.svg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./images/screens/screen7.svg" data-lightbox="Slide7" data-title="Image Selection">
                        <img class="slider__img" src="./images/screens/screen7.svg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./images/screens/screen8.svg" data-lightbox="Slide8" data-title="Facial Scann">
                        <img class="slider__img" src="./images/screens/screen8.svg" />
                    </a>
                </div>
                
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

                <div class="swiper-slide">
                    <a href="./images/dark-mode/phone1.svg" data-lightbox="dark1" data-title="Image Selection">
                        <img class="slider__img" src="./images/dark-mode/phone1.svg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./images/dark-mode/phone2.svg" data-lightbox="dark2" data-title="Image Scann">
                        <img class="slider__img" src="./images/dark-mode/phone2.svg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./images/dark-mode/phone3.svg" data-lightbox="dark3" data-title="Scann History">
                        <img class="slider__img" src="./images/dark-mode/phone3.svg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./images/dark-mode/phone1.svg" data-lightbox="dark4" data-title="Image Selection">
                        <img class="slider__img" src="./images/dark-mode/phone1.svg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./images/dark-mode/phone2.svg" data-lightbox="dark5" data-title="Image Scan">
                        <img class="slider__img" src="./images/dark-mode/phone2.svg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./images/dark-mode/phone3.svg" data-lightbox="dark6" data-title="Scan History">
                        <img class="slider__img" src="./images/dark-mode/phone3.svg" />
                    </a>
                </div>

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
    <section class="prototype__section" id="prototype">
        <p class="large__title text-center">Prototype </p>
        <!-- <div class="prototype_img__wrapper">
            <img class="prototype__img" src="./images/prototype/prototype.svg" alt="prototype" />
        </div> -->

        <video class="prototype_img__wrapper" controls>
            <source src="./video/hng.mp4" type="video/mp4">
        </video>

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
    <!--Light Box-->
    <script src="./assets/lightbox/js/lightbox.min.js"></script>
    <!--custom js-->
    <script src="./js/main.js"></script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'albumLabel': "Agereal App Screens",
            'disableScrolling': true,
            'maxHeight': 500,
            'positiionFromTop': 200
          })
    </script>
</body>

</html>




