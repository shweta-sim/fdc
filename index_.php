<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Family Dental Care | Home</title>

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

  <!-- Main Body start -->
  <div class="main-body">
    <!--Video-->
    <section class="testimonial-video">
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="videos/all.mp4">
                    <source src="videos/all.webm">
                    <source src="videos/all.ogv">
                </video>
            </section>
            <!--Video ends-->
            
            <!-- Locations start -->
    <section class="locations">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-4 p0">
            <div class="klinik kungsholmen"> <a href="kungsholmen.php">
                <div class="arrow"><i class="fa fa-angle-right"></i></div>
              </a>
              <div class="location-text">
                <h4 class="mb1 text-bold">Kungsholmen</h4>
                <ul>
                  <li><i class="fas fa-map-marker-alt"></i>Franzéngatan 18, 112 17<br>
                    Stockholm</li>
                  <li><i class="fas fa-phone-alt"></i>08 – 50 08 08 50</li>
                  <li><i class="fas fa-envelope"></i><a href="mailto:info@familydentalcare.se">info@familydentalcare.se</a></li>
                </ul>
              </div>
              <video width="100%" height="100%" autoplay loop autobuffer muted playsinline>
                <source src="videos/kungsholmen.mp4">
                <source src="videos/kungsholmen.webm">
                <source src="videos/kungsholmen.ogv">
              </video>
            </div>
          </div>
          <div class="col-md-12 col-lg-4 p0">
            <div class="klinik specialistkliniken"> <a href="specialistkliniken.php">
                <div class="arrow"><i class="fa fa-angle-right"></i></div>
              </a>
              <div class="location-text">
                <h4 class="mb1 text-bold">Specialistkliniken</h4>
                <ul>
                  <li><i class="fas fa-map-marker-alt"></i>Franzéngatan 67, 112 15<br>
                    Stockholm</li>
                  <li><i class="fas fa-phone-alt"></i>08 – 30 50 35</li>
                  <li><i class="fas fa-envelope"></i><a href="mailto:specialistkliniken@familydentalcare.se">specialistkliniken@familydentalcare.se</a></li>
                </ul>
              </div>
              <video width="100%" height="100%" autoplay loop autobuffer muted playsinline>
                <source src="videos/specialistkliniken.mp4">
                <source src="videos/specialistkliniken.webm">
                <source src="videos/specialistkliniken.ogv">
              </video>
            </div>
          </div>
          <div class="col-md-12 col-lg-4 p0">
            <div class="klinik degerfors"> <a href="degerfors.php">
                <div class="arrow"><i class="fa fa-angle-right"></i></div>
              </a>
              <div class="location-text">
                <h4 class="mb1 text-bold">Degerfors</h4>
                <ul>
                  <li><i class="fas fa-map-marker-alt"></i>Medborgargatan 17, 693 30<br>
                    Degerfors</li>
                  <li><i class="fas fa-phone-alt"></i>0586-424 24</li>
                  <li><i class="fas fa-envelope"></i><a href="mailto:degerfors@familydentalcare.se">degerfors@familydentalcare.se</a></li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Locations ends -->
    <!-- Welcome start -->
    <!-- <section class="welcome bg-light">
    <div class="container">
      <div class="row booking-request">
        <div class="col-lg-5 col-xl-4 mb6-md">
          <div class="swiper-container swiper-location shadow">
            <div class="swiper-wrapper">
              <div class="swiper-slide kungsholmen">
                <div class="mb6 mb3-md"><img src="imgs/icon-location.png"></div>
                <h5 class="mb1">Kungsholmen</h5>
                <p>Franzéngatan 18, 112 17 Stockholm</p>
                <p>08 – 50 08 08 50</p>
                <p><a href="mailto:info@familydentalcare.se">info@familydentalcare.se</a></p>
              </div>
              <div class="swiper-slide specialistkliniken">
                <div class="mb6 mb3-md"><img src="imgs/icon-location.png"></div>
                <h5 class="mb1">Specialistkliniken</h5>
                <p>Franzéngatan 67, 112 15 Stockholm</p>
                <p>08 – 30 50 35</p>
                <p><a href="mailto:specialistkliniken@familydentalcare.se">specialistkliniken@familydentalcare.se</a></p>
              </div>
              <div class="swiper-slide degerfors">
                <div class="mb6 mb3-md"><img src="imgs/icon-location.png"></div>
                <h5 class="mb1">Degerfors</h5>
                <p>Medborgargatan 17, 693 30 Degerfors</p>
                <p>0586-424 24</p>
                <p><a href="mailto:degerfors@familydentalcare.se">degerfors@familydentalcare.se</a></p>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="col-lg-7 col-xl-8">
          <div class="booking shadow">
            <h5 class="text-bold mb2">Har du några frågor? Fråga oss!</h5>
            <form class="booking-form" name="inquiryForm" id="enquiryForm" onsubmit="return validateForm()"
              method="POST" action="mailer.php">
              <div class="row">
                <div class="col-sm-12 col-md-4 cols">
                  <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control field-req" placeholder="För & efternamn">
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 cols">
                  <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control field-req" placeholder="E-postadress">
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 cols">
                  <div class="form-group">
                    <input type="text" name="telephone" id="telephone" class="form-control field-req" placeholder="Telefonnummer">
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 cols">
                  <div class="form-group">
                    <select name="klinik" id="klinik" class="form-control field-req">
                      <option value="">Välj klinik</option>
                      <option value="Kungsholmen">Kungsholmen</option>
                      <option value="Specialistkliniken">Specialistkliniken</option>
                      <option value="Degerfors">Degerfors</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-md-8 cols">
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
                <div class="col-sm-12 col-md-12 cols">
                  <div class="form-group">
                    <textarea name="comment" id="comment" class="form-control field-req" placeholder="Lämna ett meddelande och ev. önskemål om tid &amp; datum"></textarea>
                  </div>
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit" name="submit" id="send" class="btn btn-black">Skicka</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="aboutus">
        <div class="row d-flex align-items-center">
          <div class="col-md-12 col-lg-6 col-xl-5">
            <div class="img">
              <div class="img-front"><img src="imgs/img-alex.jpg" class="img-fluid shadow"></div>
              <img src="imgs/img-welcome-back.png" class="img-fluid shadow"> </div>
          </div>
          <div class="col-md-12 offset-md-0 col-lg-5 offset-lg-1 col-xl-6 offset-xl-1 order-lg-last order-first mb6-md">
            <h1 class="text-bold mb3">Välkommen till<br>
              Family Dental Care</h1>
            <h5 class="text-blue mb2">"Vi erbjuder dig tandvård av högsta kvalité 365 dagar om året och 24 timmar om dygnet."</h5>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <!-- Welcome ends -->
    <!-- Services start -->
    <section class="services">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-4 mb6-md">
            <h1 class="text-bold mb3">Behandlingar</h1>
            <h5 class="text-blue mb2">Till höger kan du läsa mer om några av de behandlingar vi kan erbjuda dig.</h5>
          </div>
          <div class="col-md-12 offset-md-0 col-lg-7 offset-lg-1 swiper-services-wrap">
            <div class="swiper-container swiper-services">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <h5 class="mb1">Fyllningar</h5>
                  <p class="mb6">När en tand har skadats av ett kariesangrepp så föreligger det risk för infektion. Då är det nödvändigt att avlägsna alla bakterier och förhindra fortsatt kariesprogression.</p>
                  <a href="fyllningar.php" class="btn">Läs mer</a>
                </div>
                <div class="swiper-slide">
                  <h5 class="mb1">Kronor och broar</h5>
                  <p class="mb6">Tänder som till hög grad blivit skadade på ett eller annat sätt går inte att hållbart reparera med hjälp av en vanlig plastfyllning.</p>
                  <a href="kronorochbroar.php" class="btn">Läs mer</a>
                </div>
                <div class="swiper-slide">
                  <h5 class="mb1">Tandimplantat</h5>
                  <p class="mb6">Avsaknaden av tänder kan få vem som helst att känna sig osäker och självmedveten. Kanske letar Du efter en lösning till tandluckorna och önskar återfå ditt vackra leende? Vi kan hjälpa Dig med detta!</p>
                  <a href="tandimplantat.php" class="btn">Läs mer</a>
                </div>
                <div class="swiper-slide">
                  <h5 class="mb1">Tandhygienist</h5>
                  <p class="mb6">Målet för våra tandhygienister är att du ska få en friskare mun, förebygga kariesangrepp och parodontit (tandlossning) med hjälp av vår behandling samt ge noggrann information om hur du kan ta hand om din munhälsa på bästa sätt.</p>
                  <a href="tandhygienist.php" class="btn">Läs mer</a>
                </div>
                <div class="swiper-slide">
                  <h5 class="mb1">Rotbehandling</h5>
                  <p class="mb6">I tandens mitt finner man pulpan, tandens nerv. Denna nerv sträcker sig ned genom tandens rötter och ut i käkbenet.</p>
                  <a href="rotbehandling.php" class="btn">Läs mer</a>
                </div>
                <div class="swiper-slide">
                  <h5 class="mb1">Osynlig tandställning</h5>
                  <p class="mb6">Osynlig tandställning har fångat USA med storm genom att erbjuda det perfekta leendet du alltid önskat minus obehaget av vanlig fast räls. Du slipper ha munnen full av metallfästen, vajrar, band och så vidare.</p>
                  <a href="osynlig-tandställning.php" class="btn">Läs mer</a>
                </div>
                <div class="swiper-slide">
                  <h5 class="mb1">Fillers och rynkbehandling</h5>
                  <p class="mb6">I ansikte och halsområde är musklerna i ständig rörelse, vilket med tiden leder till att rynkor uppstår. Dessa rynkor är till en början dynamiska, det vill säga, syns bara när muskeln arbetar.</p>
                  <a href="fillers.php" class="btn">Läs mer</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services ends -->
    <!-- Before After start -->
    <section class="before-after bg-light">
      <div class="container">
        <div class="row mb3">
          <div class="col-md-6">
            <h4 class="text-blue text-bold mb1">Tandblekning</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="ba-slider">
              <img src="imgs/teeth-whitening-after.jpg" alt="">
              <div class="resize"> <img src="imgs/teeth-whitening-before.jpg" alt=""> </div>
              <span class="handle"></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Before After ends -->
    <!-- Personal start -->
    <section class="personal">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-6 col-xl-5 mb6-md">
            <h1 class="text-bold mb3">Personal</h1>
            <h5 class="text-blue mb2">Till höger kan du läsa mer om några av de behandlingar vi kan erbjuda dig.</h5>
            <a href="personal.php" class="btn">Träffa vårt team</a>
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-2">
            <div class="personal-swiper shadow">
              <div class="swiper-container swiper-personal">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="img mb3"><img src="imgs/img-alex.jpg" class="img-fluid shadow"></div>
                    <h4>Alex</h4>
                    <h6>Leg. Tandläkare, Klinikchef</h6>
                  </div>
                  <div class="swiper-slide">
                    <div class="img mb3"><img src="imgs/img-markus.jpg" class="img-fluid shadow"></div>
                    <h4>Markus</h4>
                    <h6>Leg.Tandhygienist</h6>
                  </div>
                  <div class="swiper-slide">
                    <div class="img mb3"><img src="imgs/img-angelica.jpg" class="img-fluid shadow"></div>
                    <h4>Angelica</h4>
                    <h6>Leg. Tandläkare</h6>
                  </div>
                  <div class="swiper-slide">
                    <div class="img mb3"><img src="imgs/img-ada.jpg" class="img-fluid shadow"></div>
                    <h4>Ada</h4>
                    <h6>Leg. Tandläkare</h6>
                  </div>
                  <div class="swiper-slide">
                    <div class="img mb3"><img src="imgs/img-lumin.jpg" class="img-fluid shadow"></div>
                    <h4>Lumin</h4>
                    <h6>Tandsköterska</h6>
                  </div>
                  <div class="swiper-slide">
                    <div class="img mb3"><img src="imgs/img-rebecca.jpg" class="img-fluid shadow"></div>
                    <h4>Rebecca</h4>
                    <h6>Tandsköterska</h6>
                  </div>

                  <div class="swiper-slide">
                    <div class="img mb3"><img src="imgs/img-rebecca.jpg" class="img-fluid shadow"></div>
                    <h4>Erna</h4>
                    <h6>Tandsköterska</h6>
                  </div>

                  <div class="swiper-slide">
                    <div class="img mb3"><img src="imgs/img-rebecca.jpg" class="img-fluid shadow"></div>
                    <h4>Sia</h4>
                    <h6>Leg, Tandläkare</h6>
                  </div>

                  <div class="swiper-slide">
                    <div class="img mb3"><img src="imgs/img_felicia.png" class="img-fluid shadow"></div>
                    <h4>Felicia</h4>
                    <h6>Receptionist</h6>
                  </div>
                  <div class="swiper-slide">
                    <div class="img mb3"><img src="imgs/img_hares.jpg" class="img-fluid shadow"></div>
                    <h4>Hares</h4>
                    <h6>Leg. Tandläkare</h6>
                  </div>

                  <div class="swiper-slide">
                    <div class="img mb3"><img src="imgs/img_ahline.jpg" class="img-fluid shadow"></div>
                    <h4>Ahline</h4>
                    <h6>Tandsköterska</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Personal ends -->
    <!-- Testimonials start -->
    <section class="testimonials">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="wmg-container my-grid">
              <!-- item start -->
              <div class="wmg-item">
                <div class="wmg-thumbnail">
                  <div class="wmg-thumbnail-content"> <img src="imgs/testimonials/001.png" alt="image"> </div>
                </div>

              </div>
              <!-- item end -->
              <!-- item start -->
              <div class="wmg-item">
                <div class="wmg-thumbnail">
                  <div class="wmg-thumbnail-content"> <img src="imgs/testimonials/002.png" alt="image"> </div>
                </div>

              </div>
              <!-- item end -->
              <!-- item start -->
              <div class="wmg-item">
                <div class="wmg-thumbnail">
                  <div class="wmg-thumbnail-content"> <img src="imgs/testimonials/003.png" alt="image"> </div>
                </div>

              </div>
              <!-- item end -->
              <!-- item start -->
              <div class="wmg-item">
                <div class="wmg-thumbnail">
                  <div class="wmg-thumbnail-content"> <img src="imgs/testimonials/004.png" alt="image"> </div>
                </div>

              </div>
              <!-- item end -->
              <!-- item start -->
              <div class="wmg-item">
                <div class="wmg-thumbnail">
                  <div class="wmg-thumbnail-content"> <img src="imgs/testimonials/005.png" alt="image"> </div>
                </div>

              </div>
              <!-- item end -->

              <!-- item start -->
              <div class="wmg-item">
                <div class="wmg-thumbnail">
                  <div class="wmg-thumbnail-content"> <img src="imgs/testimonials/006.png" alt="image"> </div>
                </div>

              </div>
              <!-- item end -->
              <!-- item start -->
              <div class="wmg-item">
                <div class="wmg-thumbnail">
                  <div class="wmg-thumbnail-content"> <img src="imgs/testimonials/007.png" alt="image"> </div>
                </div>

              </div>
              <!-- item end -->

              <!-- item start -->
              <div class="wmg-item">
                <div class="wmg-thumbnail">
                  <div class="wmg-thumbnail-content"> <img src="imgs/testimonials/008.png" alt="image"> </div>
                </div>

              </div>
              <!-- item end -->
              <!-- item start -->
              <div class="wmg-item">
                <div class="wmg-thumbnail">
                  <div class="wmg-thumbnail-content"> <img src="imgs/testimonials/009.png" alt="image"> </div>
                </div>

              </div>
              <!-- item end -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials ends -->
  </div>
  <!-- Main Body ends -->

  <!-- Footer start -->
  <?php
  include 'footer.php';
  include 'cookie.php';
  ?>

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

  <!-- Swiper JS -->
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
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper('.swiper-personal', {
      spaceBetween: 30,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  </script>

  <!-- Before/After Slider JS -->
  <script type="text/javascript">
    // Call & init
    $(document).ready(function() {
      $('.ba-slider').each(function() {
        var cur = $(this);
        // Adjust the slider
        var width = cur.width() + 'px';
        cur.find('.resize img').css('width', width);
        // Bind dragging events
        drags(cur.find('.handle'), cur.find('.resize'), cur);
      });
    });
    // Update sliders on resize. 
    // Because we all do this: i.imgur.com/YkbaV.gif
    $(window).resize(function() {
      $('.ba-slider').each(function() {
        var cur = $(this);
        var width = cur.width() + 'px';
        cur.find('.resize img').css('width', width);
      });
    });

    function drags(dragElement, resizeElement, container) {
      // Initialize the dragging event on mousedown.
      dragElement.on('mousedown touchstart', function(e) {

        dragElement.addClass('draggable');
        resizeElement.addClass('resizable');

        // Check if it's a mouse or touch event and pass along the correct value
        var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

        // Get the initial position
        var dragWidth = dragElement.outerWidth(),
          posX = dragElement.offset().left + dragWidth - startX,
          containerOffset = container.offset().left,
          containerWidth = container.outerWidth();

        // Set limits
        minLeft = containerOffset + 10;
        maxLeft = containerOffset + containerWidth - dragWidth - 10;

        // Calculate the dragging distance on mousemove.
        dragElement.parents().on("mousemove touchmove", function(e) {

          // Check if it's a mouse or touch event and pass along the correct value
          var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

          leftValue = moveX + posX - dragWidth;

          // Prevent going off limits
          if (leftValue < minLeft) {
            leftValue = minLeft;
          } else if (leftValue > maxLeft) {
            leftValue = maxLeft;
          }

          // Translate the handle's left value to masked divs width.
          widthValue = (leftValue + dragWidth / 2 - containerOffset) * 100 / containerWidth + '%';

          // Set the new values for the slider and the handle. 
          // Bind mouseup events to stop dragging.
          $('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function() {
            $(this).removeClass('draggable');
            resizeElement.removeClass('resizable');
          });
          $('.resizable').css('width', widthValue);
        }).on('mouseup touchend touchcancel', function() {
          dragElement.removeClass('draggable');
          resizeElement.removeClass('resizable');
        });
        e.preventDefault();
      }).on('mouseup touchend touchcancel', function(e) {
        dragElement.removeClass('draggable');
        resizeElement.removeClass('resizable');
      });
    }
  </script>

  <!-- Cookie -->

  <script type="text/javascript">
    window.onload = function() {
      if (!document.cookie.split('; ').find(row => row.startsWith('openThisOnce'))) {
        let cookieModal = document.getElementById('cookieModal');
        cookieModal.style.display = "block";
        document.cookie = "openThisOnce=true; expires=Fri, 31 Dec 9999 23:59:59 GMT";
      }
    };

    function cookieModalClose() {
      let cookieModal = document.getElementById('cookieModal');
      cookieModal.style.display = "none";
      covidBar.classList.add('covid-19-strip-show');
    }
  </script>


  <!-- Cookie Ends -->

  <!-- Testimonials JS -->
  <script type="text/javascript" src="plugins/grid/grid.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.my-grid').WMGridfolio();
    });
  </script>
</body>

</html>