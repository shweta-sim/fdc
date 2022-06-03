<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes"/>
<meta name="description" content="">
<meta name="author" content="">
<title>Family Dental Care | Av/ombokningsvillkor</title>

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
        <h1>Av/ombokningsvillkor<span>Av/ombokningsvillkor</span></h1>
      </div>
    </div>
  </div>
</section>

<!-- Main Body start -->
<div class="main-body"> 
<section class="personal-main">
  <div class="container">
      <div class="col-md-10 personal-description animated fadeInRight delay-3s">
          <p class="mb2">Var god att av- eller omboka ditt besök hos oss senast 24 timmar innan din tid. Av- eller ombokning samt uteblivna besök inom 24 timmar debiteras med 1 000 kr per timme oavsett anledning. Detta faktureras via Payzmart med tillhörande kreditprövning per automatik.<br><br>

Ovanstående regler finns bland annat till för att vi ska kunna erbjuda alla våra patienter vård istället för att neka andra patienter på grund av full beläggning och vi förutsätter att detta är underförstått. Vi har förståelse att akuta och oförutsedda sjukdomar kan uppstå, men våra av och ombokningsregler består sig med undantag vid uppvisande av sjukintyg för din sjukdom eller olycka som är utfärdad senast 24 timmar innan ditt bokade besök.<br><br>

Eventuella kostnadsfria erbjudanden faller under samma bokningsvillkor och är således endast kostnadsfria om patienten kommer på sin tid. Notera att avbokningsregeln gäller oavsett anledning. Ej korrekt avbokad tid debiteras per automatik.<br><br>

Tänk på att SMS-påminnelsen för din tid är en extra tjänst. Ibland kan någon operatör ha systemfel, vilket gör att SMS:et ej kommer fram. Därför måste du själv ha koll på din tid!</p>
        
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
