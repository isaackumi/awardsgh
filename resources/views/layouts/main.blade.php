

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>HillTop Radio | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="../../public/img/core-img/hilltoplogo.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../../public/css/style.css">

</head>

<body>


    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex flex-wrap align-items-center justify-content-between">
                            <!-- Top Header Meta -->
                            <div class="top-header-meta d-flex flex-wrap">
                                <a href="#" class="open" data-toggle="tooltip" data-placement="bottom" title="10 Am to 6 PM"><i class="fa fa-clock-o" aria-hidden="true"></i> <span>Opening Hours - 10 Am to 6 PM</span></a>
                                <!-- Social Info -->
                                <div class="top-social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-snapchat" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Top Header Meta -->
                            <div class="top-header-meta">
                                <a href="mailto:visionhilltop@gmail.com" class="email-address"><i class="fa fa-envelope" aria-hidden="true"></i> <span>visionhilltop@gmail.com</span></a>
                                <a href="#" class="phone"><i class="fa fa-phone" aria-hidden="true"></i> <span>+233 27 344 3843</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Top Header Area ***** -->

        <!-- ***** Navbar Area ***** -->
        <div class="crose-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="croseNav">

                        <!-- Nav brand -->
                        <a href="/" class="nav-brand"><img src="../../public/img/core-img/hilltoplogo.png" width='80px'height='40px' alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a>

                                    </li>

                                    {{!-- <li><a target="_blank" href="http://mixlr.com/hilltop_radio/">Radio</a></li> --}}
                                    <li><a href="/blog">Blog</a></li>

                                    <li><a href="/contact">Contact</a></li>
                                </ul>

                                <!-- Search Button -->
                                <div id="header-search"><i class="fa fa-search" aria-hidden="true"></i></div>

                                <!-- Donate Button -->
                                <a href="mailto:visionhilltop@gmail.com?subject=Donate to HillTop&body=Dear HillTopVision Radio, I have seen your amazing work and would like to donate to support you." target="_blank"class="btn crose-btn header-btn">Donate</a>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>

            <!-- ***** Search Form Area ***** -->
            <div class="search-form-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="searchForm">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Enter keywords &amp; hit enter...">
                                    <button type="submit" class="d-none"></button>
                                </form>
                                <div class="close-icon" id="searchCloseIcon"><i class="fa fa-close" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Navbar Area ***** -->
    </header>


        @yield('content')




    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <a href="#" class="footer-logo"><img src="../../public/img/core-img/hilltoplogo.png" width='70px' height='40px' alt=""></a>

                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">Quick Link</h5>
                            <nav class="footer-menu">
                                <ul>
                                    <li><a href="/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
                                    <li><a href="/about"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Us</a></li>
                                    <li><a href="/contact"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact</a></li>
                                    <li><a href="/blog"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Blogs</a></li>
                                    <li><a href="mailto:visionhilltop@gmail.com"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Donate</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">News Latest</h5>

                            <!-- Single Latest News -->
                            <div class="single-latest-news">
                                <a href="/single-post"></a>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> November 11, 2017</p>
                            </div>

                            <!-- Single Latest News -->
                            <div class="single-latest-news">
                                <a href="#">University league tables 2018</a>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> November 11, 2017</p>
                            </div>

                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">Contact Us</h5>

                            <div class="contact-information">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 1 University Avenue,   Berekuso, Ghana</p>
                                <a href="callto:001-1234-88888"><i class="fa fa-phone" aria-hidden="true"></i> +233 27 344 3843</a>
                                <a href="mailto:visionhilltop@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> visionhilltop@gmail.com</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copwrite Area -->
        <div class="copywrite-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center flex-wrap">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script>  | HillTop Vision
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </p>
                        </div>
                    </div>

                    <!-- Footer Social Icon -->
                    <div class="col-12 col-md-6">
                        <div class="footer-social-icon">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-snapchat" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->



    <script>
    document.addEventListener('DOMContentLoaded', function ()
    {


      if (Notification.permission !== "granted")
    {
    Notification.requestPermission();
    }


    window.setTimeout(function(e)
    {
    var x = Math.floor((Math.random() * 5) + 1);
    var title='HillTopRadio';
    var desc='Tune in to listen to Vaha';
    var url='ashesi.edu.gh';
    notifyBrowser(title,desc,url);
    e.preventDefault();
    },5000);





    function notifyBrowser(title,desc,url)
    {

      if (!Notification) {
      console.log('Desktop notifications not available in your browser..');
      return;
      }


      if (Notification.permission !== "granted")
      {
      Notification.requestPermission();
      }


      else {
      var notification = new Notification(title, {
      icon:'img/core-img/hilltoplogo.png',
      body: desc,
    })
      }

    };

    });
    </script>


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../../public/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../../public/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../../public/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../../public/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../../public/js/active.js"></script>
    <script src="../../public/js/timer.js"></script>
    </body>

    </html>
