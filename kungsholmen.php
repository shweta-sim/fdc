<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Family Dental Care | Kungsholmen</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="imgs/favicon.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="plugins/animate/animate.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="plugins/swiper/css/swiper.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header start -->
    <?php include("header.php"); ?>
    <!-- Header ends -->

    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Kungsholmen<span>Kungsholmen</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Body start -->
    <div class="main-body">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5 col-xl-4 mb3-md">
                        <div class="kungsholmen-img shadow">
                            <img src="imgs/image_kungsholmen.png">
                        </div>
                    </div>
                    <div class="col-md-12 offset-md-0 col-lg-6 offset-lg-1 col-xl-7 offset-xl-1 order-lg-last order-first mb6-md">
                        <h5 class="text-blue mb1-5">Välkommen till Family Dental Care <br> Kungsholmen!</h5>
                        <p class="mb3">På Famili Dental Care erbjuder vi vuxentandvård av högsta kvalitet i en modern och kundinriktad miljö. Vi värdesätter tillgänglighet, kompetens samt respekt för individen.</p>
                        <p class="mb5">Hos oss besitter personalen mångårig erfarenhet från både offentlig och privat tandvård. Denna klinik är den första som företaget öppnade 2012. </p>
                        <div class="contact-details">
                            <ul>
                                <li class="mb6"><i class="fas fa-map-marker-alt"></i>Franzéngatan 18, 112 17<br>
                                    Stockholm</li>
                                <h5 class="text-blue mb1">Kontakta oss</h5>
                                <li class="mb2"><i class="fas fa-phone-alt"></i>08 – 50 08 08 50</li>
                                <li class="mb6"><i class="fas fa-envelope"></i><a href="mailto:info@familydentalcare.se">info@familydentalcare.se</a></li>
                                <h5 class="text-blue mb1">Öppettider</h5>
                                <li class="mb6"><i class="far fa-clock"></i> Vardagar: 08.00 – 17.00<br>
                                    Lunchstängt: 12.00 – 13.00</li>
                            </ul>
                        </div>
                        <button type="submit" name="send" id="send" class="btn btn-black" onclick="location.href='bokningsforfragan.php'">Boka Tid</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Personal start -->
        <section class="personal clinkPage">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-5 mb6-md">
                        <h1 class="text-bold mb3">Personal på Kungsholmen</h1>
                        <!--<h5 class="text-blue mb2">Till höger kan du läsa mer om några av de behandlingar vi kan erbjuda dig.</h5>-->
                        <a href="personal.php" class="btn">Träffa vårt team</a>
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-2">
                        <div class="personal-swiper shadow">
                            <div class="swiper-container swiper-personal">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                        <div class="img mb3"><img src="imgs/img-sia.jpg" class="img-fluid shadow"></div>
                                        <h4>Sia</h4>
                                        <h6>Leg. Tandläkare</h6>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="img mb3"><img src="imgs/img-rebecca.jpg" class="img-fluid shadow"></div>
                                        <h4>Rebecca</h4>
                                        <h6>Tandsköterska</h6>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="img mb3"><img src="imgs/img-markus.jpg" class="img-fluid shadow"></div>
                                        <h4>Markus</h4>
                                        <h6>Leg.Tandhygienist</h6>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="img mb3"><img src="imgs/img-lumin.jpg" class="img-fluid shadow"></div>
                                        <h4>Lumin</h4>
                                        <h6>Tandsköterska</h6>
                                    </div>
                                    
                                    <div class="swiper-slide">
                                        <div class="img mb3"><img src="imgs/img-alex.jpg" class="img-fluid shadow"></div>
                                        <h4>Alex</h4>
                                        <h6>Leg. Tandläkare, Klinikchef</h6>
                                    </div>
                           
                                    <div class="swiper-slide">
                                        <div class="img mb3"><img src="imgs/img_felicia.png" class="img-fluid shadow"></div>
                                        <h4>Felicia</h4>
                                        <h6>Receptionist</h6>
                                    </div>
                                   
                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Personal ends -->
        <section class="contact-map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2034.5671712050064!2d18.008119316154854!3d59.340179817194446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d90aa5fb025%3A0x430736fdcc7e83df!2sFamily%20Dental%20Care!5e0!3m2!1sen!2sse!4v1597062882128!5m2!1sen!2sse" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
    </div>

    <!-- Main Body ends -->

    <!-- Footer start -->
    <?php include("footer.php"); ?>
    <!-- Footer ends -->

    <!-- jQuery JS -->
    <script type="text/javascript" src="plugins/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Animate JS -->
    <script type="text/javascript" src="plugins/animate/animate.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
        if ($(window).width() <= 767) {
            $(".wow").removeClass("wow");
        }
    </script>

    <!-- Navbar JS -->
    <script type="text/javascript">
        // Dropdown Menu on Hover
        $('ul.navbar-nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
        });

        // Navbar Fixed on Scroll
        window.onscroll = function() {
            myFunction()
        };
        var header = document.getElementById("navbar-fixed-on-scroll");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>

    <!-- Back To Top JS -->
    <script type="text/javascript">
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
    <script src="plugins/swiper/js/swiper.min.js"></script>
    <script type="text/javascript">
        var swiper = new Swiper('.swiper-location', {
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        var swiper = new Swiper('.swiper-services', {
            slidesPerView: 'auto',
            centeredSlides: true,
            spaceBetween: 30,
            grabCursor: true,
        });

        var swiper = new Swiper('.swiper-personal', {
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>

</body>

</html>