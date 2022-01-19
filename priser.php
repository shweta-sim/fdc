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
          <h1>Priser<span>Priser</span></h1>
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
            <div class="booking shadow">
              <h5 class="text-bold mb2">Har du några frågor? Fråga oss!</h5>
              <form class="booking-form" onsubmit="return validateForm()" id="enquiryForm" method="POST" action="mailer.php">
                <div class="row">
                  <div class="col-sm-12 cols">
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control field-req" placeholder="För & efternamn">
                    </div>
                  </div>
                  <div class="col-sm-12 cols">
                    <div class="form-group">
                      <input type="text" name="email" id="email" class="form-control field-req" placeholder="E-postadress">
                    </div>
                  </div>
                  <div class="col-sm-12 cols">
                    <div class="form-group">
                      <input type="text" name="telephone" id="telephone" class="form-control field-req" placeholder="Telefonnummer">
                    </div>
                  </div>
                  <div class="col-sm-12 cols">
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
                  <div class="col-md-12 text-center"><button type="submit" name="submit" id="send" class="btn btn-black">Skicka</button></div>
                </div>
              </form>
            </div> -->
        </div>
        <div class="col-md-10 personal-description animated fadeInRight delay-3s">
          <!-- <div class="col-md-12 offset-md-0 col-lg-6 offset-lg-1 col-xl-7 offset-xl-1 order-lg-last order-first mb6-md"> -->
          <h5 class="text-blue mb1">Debitering vi sen av/ombokning</h5>
          <p class="mb6">Var god av- eller omboka din tid senast 24 timmar innan ditt bokade besök, av- eller ombokning inom 24 timmar debiteras med 1 000 kr per timme oavsett anledning. Detta faktureras via Payzmart med tillhörande kreditprövning.</p>
          <ul class="pricing-table">
            <li class="shadow">
              <div id="accordion">
                <div class="card">
                  <div id="headingOne" data-toggle="collapse" data-target="#collapseOne" 
                        aria-expanded="true" aria-controls="collapseOne">            
                      <h5 class="text-blue mb1" >
                        Tandläkare
                      </h5>
                      <i class="fas fa-caret-down text-blue r180"></i>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="display-flex">
                      <div class="pricing-info">
                        <h5 class="text-bold mb1">Undersökning</h5>
                        <ul class="list">
                          <li>Grundlig undersökning. 4 st röntgenbilder. Terapiplan och kostnadsförslag.</li>
                        </ul>
                      </div>
                      <h1 class="price">
                        <span>SEK</span>895
                      </h1>
                    </div>

                    <div class="display-flex">
                      <div class="pricing-info">
                        <h5 class="text-bold mb1">Akutundersökning</h5>
                        <ul class="list">
                          <li>Priset är endast ett startpris. Vid eventuell behandling och röntgenbilder tillkommer kostnad.</li>
                        </ul>
                      </div>
                      <h1 class="price">
                        <span>SEK</span>450
                      </h1>
                    </div>
                    
                    <div class="display-flex">
                      <div class="pricing-info">
                        <h5 class="text-bold mb1">Tandreglering konsultation</h5>
                        <ul class="list">
                          <li>Konsultationkostnaden dras av vid start av behandling.</li>
                        </ul>
                      </div>
                      <h1 class="price">
                        <span>SEK</span>500 
                      </h1>
                    </div>

                    <div class="display-flex">
                      <div class="pricing-info">
                        <h5 class="text-bold mb1">Implantatkonsultation</h5>
            
                      </div>
                      <h1 class="price">
                        <span>SEK</span>0
                      </h1>
                    </div>
                  </div>
                </div>
            </li>
            <li class="shadow">
              <div id="accordion2">
              <div class="card">
                <div id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">            
                    <h5 class="text-blue mb1">
                      Tandhygienist
                    </h5>
                      <i class="fas fa-caret-down text-blue"></i>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                  <div class="display-flex">
                    <div class="pricing-info">
                      <h5 class="text-bold mb1">Tandhygienistbehadnling</h5>
                      <ul class="list">
                        <li>Parodontal undersökning, egenvårdsinstruktion och djup tandstensborttagning.</li>
                      </ul>
                    </div>
                    <h1 class="price">
                      <span>Från SEK</span>1.580 
                    </h1>
                  </div>
                  <div class="display-flex">
                    <div class="pricing-info">
                      <h5 class="text-bold mb1">Airflow</h5>
                      <ul class="list">
                        <li>Missfärgningsborttagning med salt, vatten och luft.</li>
                      </ul>
                    </div>
                    <h1 class="price">
                      <span>SEK</span>600
                    </h1>
                  </div>
                </div>
              </div>
            </li>
            <li class="shadow">
              <div id="accordion3">
              <div class="card">
                <div id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" 
                    aria-controls="collapseThree">            
                    <h5 class="text-blue mb1">
                      Estetiska behandlingar  
                    </h5>
                      <i class="fas fa-caret-down text-blue"></i>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                  <div class="display-flex">
                    <div class="pricing-info">
                      <h5 class="text-bold mb1">Blekningskit </h5>
                      <ul class="list">
                        <li>Information, skenor samt 4st bleknings gel från Healthy smile.</li>
                      </ul>
                    </div>
                    <h1 class="price">
                      <span>SEK</span>3.995
                    </h1>
                  </div>
                  
                  <div class="display-flex">
                    <div class="pricing-info">
                      <h5 class="text-bold mb1">Fillers</h5>
                      <ul class="list">
                        <li>2.500 kr/ml för extra ml vid samma besök</li>  
                        <li>Det ingår bedövning, information samt konsultation.</li>
                      </ul>
                    </div>
                    <h1 class="price">
                      <span>SEK</span>3.500 kr/ml
                    </h1>
                  </div>

                  <div class="display-flex">
                    <div class="pricing-info">
                      <h5 class="text-bold mb1">Rynkbehandlingar </h5>
                      <ul class="list">
                        <li>1/2/3 områden 2.500kr/3.000kr/3.500kr</li>  
                        <li>Det ingår bedövning, information samt konsultation.</li>
                      </ul>
                    </div>
                    <!-- <h1 class="price">
                      <span>SEK</span>3.500 kr/ml
                    </h1> -->
                  </div>
                </div>
              </div>
            </li>
            <br><br>
            <div class="priser-flex">
              <h6 class="behand">Vi är en kontantfri klinik och fakturerar ej. Vi samarbetar med <a href="http://www.payzmart.se" target="_blank">Payzmart</a> och <a href="http://www.wasakredit.se" target="_blank">Wasa Kredit</a> för eventuell avbetalningsplan, med tillhörande kreditprövning.</h6>
              <button type="submit" name="send" id="send" class="btn btn-black" onclick="location.href='bokningsforfragan.php'">Boka Tid</button>
            </div>
            <!-- <li>
            <div class="pricing-info">            
              <h5 class="text-bold mb1">Implantatkonsultation</h5>
              <ul class="list">
                <li>Utredning av kirurg inför eventuellt implantat. Panoramaröntgen. Terapiplan och kostnadsförslag.</li>
              </ul>
            </div>
            <h1 class="price">
              <span>SEK</span>0
            </h1>
          </li>
          <li>
            <div class="pricing-info">            
              <h5 class="text-bold mb1">Invisalignkonsultation</h5>
              <ul class="list">
                <li>Utredning av tandläkare inför eventuell tandreglering. Panoramaröntgen. Terapiplan och kostnadsförslag.</li>
              </ul>
            </div>
            <h1 class="price">
              <span>SEK</span>0
            </h1>
          </li>
          <li>
            <div class="pricing-info">            
              <h5 class="text-bold mb1">Botox och fillers konsultation</h5>
              <ul class="list">
                <li>Information och instruktion inför eventuell behandling. Konsultationspriset dras av på den totala kostnaden.</li>
              </ul>
            </div>
            <h1 class="price">
              <span>SEK</span>0
            </h1>
          </li>           -->
          </ul>
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

  <script>
     $('#collapseOne, #collapseTwo, #collapseThree').on('show.bs.collapse', function (e) {
        let card = e.target.parentElement
        card.querySelector('.fa-caret-down').classList.add('r180')
    })
    $('#collapseOne, #collapseTwo, #collapseThree').on('hide.bs.collapse', function (e) {
        let card = e.target.parentElement
        card.querySelector('.fa-caret-down').classList.remove('r180')
    })
  </script>

</body>

</html>