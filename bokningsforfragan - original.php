<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Family Dental Care | Priser</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="imgs/favicon.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="plugins/animate/animate.min.css">

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
                    <h1>Boka tid<span>Boka tid</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Body start -->
    <div class="main-body">
        <section>
            <div class="container">
                <div class="row">
                    <!-- <div class="col-md-12 col-lg-5 col-xl-4 mb3-md">
                            <div class="healthcare-container" id="healthcare-container" data-key="89"></div>
                        </div>-->
                    <!--<div class="col-md-12 offset-md-0 col-lg-6 offset-lg-1 col-xl-7 offset-xl-1 order-lg-last order-first mb6-md">-->
                    <div class="col-md-16 personal-description">
                        <h5 class="text-blue mb2">Har du några frågor? Fråga oss!</h5>
                        <div class="muntra-widget without-modal" key="6" muntra_clinic_id="1723" muntra_referral_source="familydental.se" muntra_without_modal="true"></div>

                        <!-- <form class="booking-form mb6"  onsubmit="return validateForm()" id="enquiryForm" 
                                method="POST" action="mailer.php">
                                <div class="row">
                                    <div class="col-sm-6 cols">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control field-req" placeholder="För & efternamn">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 cols">
                                        <div class="form-group">
                                            <input type="text" name="email" id="email" class="form-control field-req" placeholder="E-postadress">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 cols">
                                        <div class="form-group">
                                            <input type="text" name="telephone" id="telephone" class="form-control field-req" placeholder="Telefonnummer">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 cols">
                                        <div class="form-group">
                                            <select name="klinik" id="klinik" class="form-control field-req">
                                                <option value="">Välj klinik</option>
                                                <option value="Kungsholmen">Kungsholmen</option>
                                                <option value="Specialistkliniken">Specialistkliniken</option>
                                                <option value="Degerfors">Degerfors</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 cols">
                                        <div class="form-group">
                                            <select name="services" id="services" class="form-control field-req">
                                                <option value="">Välj behandling</option>
                                                <option value="Basundersökning">Basundersökning</option>
                                                <option value="Akutundersökning">Akutundersökning</option>
                                                <option value="Tandhygienistbesök/Rengöring">Tandhygienistbesök/Rengöring</option> 
                                                <option value="Implantatkonsultation">Implantatkonsultation</option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 cols">
                                        <div class="form-group">
                                            <textarea name="comment" id="comment" class="form-control field-req" placeholder="Lämna ett meddelande och ev. önskemål om tid &amp; datum"></textarea> 
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="submit" id="send" class="btn btn-black">Skicka</button></div>
                                </div>
                            </form> -->
                        <h5 class="text-blue mb1"><br>Avbokning och ombokning</h5>
                        <p class="mb3">Din tandläkartid kan avbokas via mail eller telefon till den klinik du har tid hos.
                            För av- och ombokning gäller 24 timmar innan din bokade behandling, annars utgår 1000 kr per timme bokad.</p>
                        <p class="mb3">Eventuella kostnadsfria erbjudanden faller under samma bokningsvillkor och är således endast kostnadsfria om patienten kommer på sin tid. Notera att avbokningsregeln gäller oavsett anledning. Ej korrekt avbokad tid debiteras per automatik.</p>
                        <p class="mb3">Ovanstående regler finns bland annat till för att vi ska kunna erbjuda någon annan patient akut vård istället för att neka på grund av full beläggning och vi förutsätter att detta är underförstått.</p>
                        <p class="mb3">Tänk på att SMS-påminnelsen är en extra tjänst. Ibland kan någon operatör ha systemfel, vilket gör att SMS:et ej kommer fram. Därför måste du själv ha koll på din tid!</p>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- Main Body ends -->

    <!-- Footer start -->
    <?php include("footer.php"); ?>
    <!-- Footer ends -->

    <!-- jQuery JS -->
    <script type="text/javascript" src="plugins/jquery/jquery-3.3.1.min.js"></script>

    <!-- Left Bar 
    <script type='text/javascript' src='https://www.tandlakare.se/v2/externalbooking/external_client.js?ver=4.6.1'></script>-->

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Form Validations -->
    <script type="text/javascript" src="js/validate.js"></script>

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
    <script type="text/javascript" src="https://muntra-dev.github.io/index.js"></script>
</body>

</html>