<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Family Dental Care | Skicka remiss</title>

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
          <h1>Skicka remiss<span>Skicka remiss</span></h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Body start -->
  <div class="main-body">
    <section>
      <div class="container">
        <div class="row">
         
        </div>
        <div class="col-md-10 personal-description animated fadeInRight delay-3s">
          <h5 class="text-blue mb1">Är du tandläkare? </h5>
          <p class="mb6">Remittera din patient för implantatkirurgi, ortodonti, panoramaröntgen eller CBCT hos oss via vår digitala remitteringstjänst</p>
          <script type="text/javascript" src="https://muntra-dev.github.io/referral-page/index.js"></script>
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