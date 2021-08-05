<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Family Dental Care | Bokningsförfrågan</title>

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
                    <div class="col-md-16 personal-description">
                        <h5 class="text-blue mb2">Skicka en Bokningsförfrågan</h5>
                        <div class="muntra-widget without-modal" key="6" muntra_clinic_id="1723" muntra_referral_source="familydental.se" muntra_without_modal="true">
                        </div>

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
    <script type="text/javascript" src="https://muntra-dev.github.io/index.js"></script>
</body>

</html>