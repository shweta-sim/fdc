<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Family Dental Care | Garanti</title>

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
          <h1>Garanti<span>Garanti</span></h1>
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
          <h5 class="text-blue mb1">Hos oss på Family Dental Care får du garanterad bra vård. Om du mot förmodan behöver göra om en behandling gäller följande garantier och villkor. </h5><br><br>
          <p><strong>Villkor</strong></p><br>
      <ul class="list">
      <li>Garantierna gäller endast då behandlingen utförts av Family Dental Care</li>
<li>För att garantin ska gälla behöver du komma på de undersökningar och behandlingar som din tandläkare eller tandhygienist bedömer nödvändiga och kallar dig till</li>
<li>Du måste bibehålla acceptabel nivå avseende munhygieniska åtgärder under hela garantitiden</li>
<li>Du måste snabbt kontakta din tandläkare om du upptäcker att något inte känns bra med dina nya tänder</li>
<li>Behandling skall vara betald i sin helhet för att garantin skall gälla</li>
<li>Garantin gäller inom ramen för den ursprungliga behandlingskostnaden och inte för tillkommande behandling</li>
</ul><br><br><br>

<p><strong>Garantin gäller inte</strong></p><br>
<ul class="list">
<li>om protes utförts i immediatteknik,</li>
<li>vid behov av rebasering av plattprotetik,</li>
<li>om konstruktion är avsedd endast för tillfälligt bruk,</li>
<li>om patienten kan lastas för behovet av omgörning,</li>
<li>om konstruktion utsatts för yttre våld.</li>
<li>för riskpatienter med underliggande sjukdomar</li>
</ul><br><br><br>

<h5 class="text-blue mb1">Garanti</h5>

<p class="mb4"><strong>Garantiperioden gäller från det första behandlingsdatumet och framåt</strong></p>
<strong>Fyllning:	1 år</strong><br>
Endast frakturer, omfattar ej sekundärkaries<br><br>

<strong>Bettskena:	1 år</strong><br>
Material eller produktfel<br><br>

<strong>Protes:		1 år</strong><br>
Material eller produktfel<br><br>

<strong>Krona/bro:	3 år</strong><br>
Endast frakturer, omfattar ej sekundärkaries<br><br>

<strong>Implantat:	3 år</strong><br>
Garanti gäller ej för riskpatienter, såsom rökare, gnisslare, diabetiker och andra underliggande sjukdomar<br><br>

<strong>Retainertråd:	6 månader</strong><br>
Fäste som lossnat
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