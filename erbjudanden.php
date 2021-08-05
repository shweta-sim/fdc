<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes"/>
<meta name="description" content="">
<meta name="author" content="">
<title>Family Dental Care | Erbjudanden</title>

<!-- Favicon -->
<link rel="shortcut icon" href="imgs/favicon.png" type="image/png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

<!-- Animate CSS -->
<link rel="stylesheet" href="plugins/animate/animate.min.css">

<!-- Style CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/erbjudanden.css">
</head>

<body>
<!-- Header start -->
<?php include("header.php"); ?>
<!-- Header ends --> 

<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Erbjudanden<span>Erbjudanden</span></h1>
      </div>
    </div>
  </div>
</section>

<!-- Main Body start -->
<div class="main-body"> 
<section class="personal-main">
  <div class="container">
      <div class="col-md-10 personal-description animated fadeInRight delay-3s">
       <h5 class="text-blue mb1-5"><strong>Halva priset på tandimplantat för nya patienter</strong></h5>
          <p class="mb2">Anledningarna till tandimplantat kan variera, arvsanlag för tandlossning eller kanske en fallolycka. Oavsett så vill du åtgärda problemet snarast och med detta erbjudande får du det till halva priset.<br><br></p>
          <h6 class="text-blue "><strong>Erbjudandet inkluderar</strong></h6>
          <p class="mb2"><strong>Undersökning/konsultation, operation, tandimplantat och porslinskrona.</strong><br><br></p>
          <h6 class="text-blue "><strong>Ordinarie pris</strong></h6>
          <p class="mb2"><strong>28 500 kr</strong> <br><br></p>
          <h6 class="text-blue "><strong>Ditt erbjudande</strong></h6>
          <p class="mb2"><strong>14 250 kr</strong> <br><br><br><br>
          <strong>Observera att tandvårdsersättning från försäkringskassan redan är inräknat i det rabatterade priset.</strong><br><br>
          Detta erbjudande gäller (1) av de 10 fram och sidotänderna. <strong>För stora tuggtänder tillkommer en kostnad på 3000 kr.</strong><br><br>
          Behandlingen utförs av legitimerad tandläkare med mångårig erfarenhet inom estetisk tandvård. För din trygghets skull ges alltid 2 års garanti på varje ny tand. Vid frågor, kontakta gärna kliniken.<br><br><br><br>

          <strong> Ordinarie priser hämtade från vår prislista med åtgärder:</strong>
          </p> 

          <ol class="erbjudanden">
            <li><span class="number">107</span><p>Omfattande undersökning, utförd av tandläkare <span class="price">1 095 kr</span></p></li>
            <li><span class="number">124</span><p>Panoramaröntgenundersökning <span class="price">695 kr</span></p></li>
            <li><span class="number">420</span><p>Implantat, per styck, tilläggsåtgärd <span class="price">4 750 kr</span></p></li>
            <li><span class="number">421</span><p>Operation avseende käkbensförankrade implantat, ett implantat <span class="price">8 990 kr</span></p></li>
            <li><span class="number">850</span><p>Implantatstödd krona, en per käke <span class="price">10 990 kr</span></p></li>
            <li><span class="number">859</span><p>Integrerad distans/kopplingskomponent vid separat implantatstödd krona, per styck, tilläggsåtgärd <span class="price">1 990 kr</span></p></li>
          </ol>
          <br><br><br>
          <h6 class="text-blue"><a href="bokningsforfragan.php">Boka tid för konsultation i vår bokningsförfrågan.</a></h6>
          <em>Erbjudande gäller endast för nya patienter på klinikerna i Stockholm.<em>
    </div>
  </div>
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
  if ($(window).width() <= 767){ 
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
window.onscroll = function() {myFunction()};
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
$(document).ready(function(){
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
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $('.team-item:odd .col-xl-4').addClass('order-md-last offset-xl-1 offset-lg-1 offset-md-1');
  $('.team-item:odd .personal-description').removeClass('offset-xl-1 offset-lg-1 offset-md-1');
  if ($(window).width() >= 767){ 
    $('.team-item:odd .personal-description').addClass('offset-xl-2 text-right');
  }
  $('.team-item:odd .col-xl-4 .team').addClass('reverse');
});
</script> 

</body>
</html>
