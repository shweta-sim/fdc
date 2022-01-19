<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes"/>
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Family Dental Care | Rotbehandling</title>

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
                        <h1>Rotbehandling<span>Rotbehandling</span></h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Body start -->
        <div class="main-body"> 
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-xl-4 mb3-md">
                            <div class="left-link fontGayathri mb10">
                                <ul>                                                                        
                                    <a href="fyllningar.php">
                                        <li>Fyllningar 
                                            <span>
                                                <img src="imgs/behandlingar/icon_fyllningar.png" class="link-icon-show" alt="">
                                                <img src="imgs/behandlingar/icon_fyllningar_white.png" class="link-icon-hidden" alt="">
                                            </span>
                                        </li>
                                    </a>
                                    <a href="kronorochbroar.php">
                                        <li>Kronor och broar 
                                            <span>
                                                <img src="imgs/behandlingar/icon_kronor_och_broar.png" class="link-icon-show" alt="">
                                                <img src="imgs/behandlingar/icon_kronor_och_broar_white.png" class="link-icon-hidden" alt="">
                                            </span>
                                        </li>
                                    </a>
                                    <a href="tandimplantat.php">
                                        <li>Tandimplantat 
                                            <span>
                                                <img src="imgs/behandlingar/icon_tandimplantat.png" class="link-icon-show" alt="">
                                                <img src="imgs/behandlingar/icon_tandimplantat_white.png" class="link-icon-hidden" alt="">
                                            </span>
                                        </li>
                                    </a>
                                    <a href="tandhygienist.php">
                                        <li>Tandhygienist 
                                            <span>
                                                <img src="imgs/behandlingar/icon_tandhygienist.png" class="link-icon-show" alt="">
                                                <img src="imgs/behandlingar/icon_tandhygienist_white.png" class="link-icon-hidden" alt="">
                                            </span>
                                        </li>
                                    </a>

                                   <a href="blekning.php">
                                        <li>Blekning 
                                            <span>
                                                <img src="imgs/behandlingar/icon_blekning.png" class="link-icon-show" alt="">
                                                <img src="imgs/behandlingar/icon_blekning_white.png" class="link-icon-hidden" alt="">
                                            </span>
                                        </li>
                                    </a>

                                    <a href="air-flow.php">
                                        <li>Air Flow 
                                            <span>
                                                <img src="imgs/behandlingar/icon_air-flow.png" class="link-icon-show" alt="">
                                                <img src="imgs/behandlingar/icon_air-flow_white.png" class="link-icon-hidden" alt="">
                                            </span>
                                        </li>
                                    </a>
                                    <a href="rotbehandling.php">
                                        <li class="left-link-active">Rotbehandling 
                                            <span>
                                                <img src="imgs/behandlingar/icon_rotbehandling_white.png" alt="">
                                            </span>
                                        </li>
                                    </a>
                                    <a href="osynlig-tandställning.php">
                                        <li>Osynlig tandställning 
                                            <span>
                                                <img src="imgs/behandlingar/icon_invisalign.png" class="link-icon-show" alt="">
                                                <img src="imgs/behandlingar/icon_invisalign_white.png" class="link-icon-hidden" alt="">
                                            </span>
                                        </li>
                                    </a>
                                    <a href="fillers.php">
                                        <li>Fillers 
                                            <span>
                                                <img src="imgs/behandlingar/icon_fillers.png" class="link-icon-show" alt="">
                                                <img src="imgs/behandlingar/icon_fillers_white.png" class="link-icon-hidden" alt="">
                                            </span>
                                        </li>
                                    </a>
                                </ul>
                            </div>
                            <div class="booking shadow mb6">
                                <h5 class="text-bold mb2">Har du några frågor? Fråga oss!</h5>
                                <?php
                                    include "form.php";
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-1 col-lg-6 offset-lg-1 col-xl-7 offset-xl-1 order-lg-last mb6-md">
                            <p class="mb6">I tandens mitt finner man pulpan, tandens nerv. Denna nerv sträcker sig ned genom tandens rötter och ut i käkbenet. Om en tand utav någon anledning dött ut eller om karies nått sig in till pulpan och orsakat inflammation eller infektion behöver nerven tas bort och tanden rotfyllas.
                                Detta för att man ska kunna behålla tanden utan att infektionen sprider sig vidare.</p>
                            <div class="mb6 rotbehandling-video content-video">                                
                                <img src="imgs/behandlingar/icon-youtube.png" onclick="lightboxSecond_open();" alt=""/>
                            </div>
                            <h5 class="text-blue mb1">Hur går behandlingen till?</h5>
                            <p class="mb3">En rotbehandling brukar oftast vara cirka 2timmar. Man börjar med att rengöra tandkronan genom att borra bort den infekterade tandsubstansen. Sedan öppnar man upp tanden för att rengöra rotkanalerna med smala filar och spola rent med bakteriedödande vätska.</p>
                            <p class="mb3">Tandläkaren har kontroll med hjälp av att ta nya röntgenbilder under behandlingens gång för att vara säker påatt hela rotkanalen blir ren och fri från bakterier.</p>
                            <p class="mb6">När rengöringen är klar fylls rotkanalen med speciella gummispetsar och rotfyllningscement.</p>
                            <h5 class="text-blue mb1">Hur mår man efteråt?</h5>
                            <p class="mb6">Det är vanligt med övergående smärta efter behandlingen men det brukar oftast räcka med vanliga värktabletter för att lindra smärtan. Hjälper inte de vanliga värktabletterna får man kontakta sin tandläkare.</p>
                            <h5 class="text-blue mb1">Vad är nästa steg?</h5>
                            <p class="mb6 behand">Efter en rotfyllning måste man reparera den tandsubstans som förvunnit när nerven togs bort. Det finns olika alternativ för detta som diskuteras med din tandläkare. Vanligtvis rekommenderar vi att man sätter dit en porslinskrona med en pelare för att stärka tanden. <a href="kronorochbroar.php">Du kan läsa mer om porslinskronor och broar här.</a></p>
                        </div>
                    </div>
                </div>
            </section>  

            <!--Video-->
            <section class="testimonial-video">
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="videos/all.mp4">
                    <source src="videos/all.webm">
                    <source src="videos/all.ogv">
                </video>
                <div class="overlay-black"></div>
                <div class="testimonial-video-content">
                    <h5 class="mb6 tvc-heading">
                        Supernöjd med mitt besök! Lugn och pålitlig tandläkare.
                        Superbra service genom hela besöket. Rena och fina lokaler.
                        Rekommenderas!</h5>
                    <div class="mb3 mb-15-sm">
                        <span class="play-icon" onclick="lightbox_open();">
                            <img src="imgs/behandlingar/icon-video.jpg">
                        </span>
                    </div>
                    <p class="text-white fontGayathri"><span class="play-icon" onclick="lightbox_open();">Play for Sound</span></p>
                </div>
            </section>
            <!--Video ends-->
        </div>
        <!-- Main Body ends --> 

        <!-- Footer start -->
        <?php include("footer.php"); ?>
        <!-- Footer ends --> 

        <!-- Video Popup Box-->
        <div id="light">
            <a class="boxclose" id="boxclose" onclick="lightbox_close();">Close | X</a>
            <video width="100%" height="100%" id="VisaChipCardVideo" controls autoplay loop autobuffer muted playsinline>
                <source src="videos/all.mp4">
                <source src="videos/all.webm">
                <source src="videos/all.ogv">
            </video>
        </div>
        <div id="lightSecond">
            <a class="boxclose" id="boxSecondClose" onclick="lightbox_close();">Close | X</a>
           <iframe width="800" height="400" src="https://www.youtube.com/embed/AATnG9BdIMg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div id="fade" onClick="lightbox_close();"></div>        
        <!-- Video Popup Box ends-->


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

        <!-- Form Validations -->
        <script type="text/javascript" src="js/validate.js"></script>

        <!-- Navbar JS --> 
        <script type="text/javascript">
            // Dropdown Menu on Hover
            $('ul.navbar-nav li.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
            });

            // Navbar Fixed on Scroll
            window.onscroll = function () {
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
            $(document).ready(function () {
                // Add smooth scrolling to all links
                $("a").on('click', function (event) {

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
                        }, 800, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            });
        </script> 
        <!-- Before/After Slider JS --> 
        <script type="text/javascript">
            // Call & init
            $(document).ready(function () {
                $('.ba-slider').each(function () {
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
            $(window).resize(function () {
                $('.ba-slider').each(function () {
                    var cur = $(this);
                    var width = cur.width() + 'px';
                    cur.find('.resize img').css('width', width);
                });
            });

            function drags(dragElement, resizeElement, container) {
                // Initialize the dragging event on mousedown.
                dragElement.on('mousedown touchstart', function (e) {

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
                    dragElement.parents().on("mousemove touchmove", function (e) {

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
                        $('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function () {
                            $(this).removeClass('draggable');
                            resizeElement.removeClass('resizable');
                        });
                        $('.resizable').css('width', widthValue);
                    }).on('mouseup touchend touchcancel', function () {
                        dragElement.removeClass('draggable');
                        resizeElement.removeClass('resizable');
                    });
                    e.preventDefault();
                }).on('mouseup touchend touchcancel', function (e) {
                    dragElement.removeClass('draggable');
                    resizeElement.removeClass('resizable');
                });
            }
        </script> 
        <!-- Video popup box Js -->
        <script type="text/javascript">
            window.document.onkeydown = function (e) {
                if (!e) {
                    e = event;
                }
                if (e.keyCode == 27) {
                    lightbox_close();
                }
            }

            function lightbox_open() {
                var lightBoxVideo = document.getElementById("VisaChipCardVideo");
                window.scrollTo(0, 0);
                document.getElementById('light').style.display = 'block';
                document.getElementsByTagName('body')[0].style.overflow = 'hidden';
                document.getElementById('fade').style.display = 'block';
                lightBoxVideo.play();
            }

            function lightboxSecond_open() {
                window.scrollTo(0, 0);
                document.getElementById('lightSecond').style.display = 'block';
                document.getElementsByTagName('body')[0].style.overflow = 'hidden';
                document.getElementById('fade').style.display = 'block';
            }

            function lightbox_close() {
                var lightBoxVideo = document.getElementById("VisaChipCardVideo");
                document.getElementsByTagName('body')[0].style.overflow = 'visible';
                document.getElementById('light').style.display = 'none';
                document.getElementById('lightSecond').style.display = 'none';
                document.getElementById('fade').style.display = 'none';
                lightBoxVideo.pause();
            }

        </script>
    </body>
</html>
