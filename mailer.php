<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes"/>
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Family Dental Care</title>

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
  <!-- Start Header -->
<?php include ("header.php"); ?>
<!-- End Header -->
<?php
    if(isset($_POST['submit'])){
        $to = "info@familydentalcare.se";
        $from = $_POST['email'];
        $name = $_POST['name'];
        $telephone = $_POST['telephone'];
        $klinik = $_POST['klinik'];
		if($klinik == "Degerfors")
		{
			$to = "degerfors@familydentalcare.se";
		}
		else if($klinik == "Kungsholmen")
		{
			$to = "info@familydentalcare.se";
		}
		else if($klinik == "Specialistkliniken")
		{
			$to = "specialistkliniken@familydentalcare.se";
		}
		
        $services = $_POST['services'];
        $comment = $_POST['comment'];

        $message =  "Dear Admin<br><br><strong>".$name . "</strong> is requesting an appointment at <strong>" . $klinik . "</strong> for <strong>" . $services . "</strong><br><br>" ;
        $message .= "<strong>Contact Details:</strong> <br>" ;
        $message .= "Phone No.: ". $telephone . "<br>";
        $message .= "Email: " . $from . "<br>";
        $message .= "Message: ". $comment;

        $subject = "Received a message from the website";
        require_once('lib/phpmailer/class.phpmailer.php');
		$mail = new PHPMailer(true);
		$mail->CharSet = "UTF-8";
		$mail->IsHTML(true);
		$mail->AddReplyTo($from,$name);
			
			$mail->From = "info@familydental.se";
			$mail->FromName = "Family Dental Care";
			$mail->Subject = $subject;
			$mail->MsgHTML($message);
			$mail->AddAddress($to);
			if(!$mail->Send())
			{
				die("Email not Sent: ".$mail->ErrorInfo);
					
			}

    }

?>
<section class="banner thanks">
  <div class="banner-inner">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
        <h1 class="text-bold text-center text-highlight wow fadeInUp margin-btm30" data-wow-delay="800ms">Tack för din förfrågan.</h1>
          <h5 class="text-center mb-1 wow fadeInUp" data-wow-delay="1200ms">Vi svarar dig så snart som möjligt.</h5>
          <div class="text-center wow fadeInUp" data-wow-delay="1200ms"><a href="index.php" class="btn">Tillbaka till hemsidan</a></div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Start Header -->
  <?php include ("footer.php"); ?>
<!-- End Header -->


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