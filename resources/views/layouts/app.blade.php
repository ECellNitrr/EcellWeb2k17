<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-summit '17</title>
    <link rel="shortcut icon" href="/images/logo-final.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="/css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,700" rel="styesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!-- Responsive -->
    <link href="/css/responsive.css" rel="stylesheet">
    <!-- Login Modal -->
    <link href="/css/login.css" rel="stylesheet">
    <!--Font awesome -->
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
    <script src="/js/jquery-1.11.1.min.js"></script>
</head>

<body>
    <div class="preloader">
        <img src="/images/loader.png" alt="E-Cell NIT Raipur" height="200px" width="200px">
    </div>
    <!-- NavBar -->
    <nav class="navbar sidebar" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color:white;"></span>
                    <span class="icon-bar" style="background-color:red;"></span>
                    <span class="icon-bar" style="background-color:white;"></span>
                </button>
                <img class="logo" src="/images/logo-final.png" style="padding-top:10px;">
                <a class="navbar-brand" href="#" style="padding-right:40px;">       E-Cell NIT Raipur</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li id="home_navbar"><a href="#">Home<span style="font-size:16px;color:white" class="pull-right hidden-xs showopacity glyphicon glyphicon-home red"></span></a></li>
                    <li id="vision_navbar"><a href="/vision" >Vision<span style="font-size:16px;" class="pull-right hidden-xs showopacity 	glyphicon glyphicon-education"></span></a></li>
                    <li id="events_navbar"><a href="/events" >Events<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></span></a></li>
                    <li id="team_navbar"><a href="/team" >Team<span style="font-size:16px;" class="pull-right hidden-xs showopacity 	glyphicon glyphicon-user"></span></a></li>
                    <li id="blogs_navbar"><a href="/blogs">Blogs<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></span></a></li>
                    <li id="home_navbar"><a class="btn login" role="button" data-target="#login-modal" data-toggle="modal">Login/Sign-Up<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon glyphicon-log-in"></span></a></li>

                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Main Content starts-->
    <div class="main">
        @section('content')
        @show
        <section id="contact">
            <div class="row text-center title">
                <h2><br>Let's talk start-up</h2>
                <hr style="width:20%;">
                <br>
                <br>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-7">
                    <div class="contact-info-box address clearfix">
                        <h3><i class=" icon-map-marker"></i>Address:</h3>
                        <span>NIT Raipur,G.E. Road<br>Raipur, C.G. 492010.</span>
                    </div>
                    <div class="contact-info-box phone clearfix">
                        <h3><i class="fa-phone"></i>Phone:</h3>
                        <span>94063-21248</span>
                    </div>
                    <div class="contact-info-box email clearfix">
                        <h3><i class="fa-pencil"></i>email:</h3>
                        <span>ecell@nitrr.ac.in</span>
                    </div>
                    <div class="contact-info-box hours clearfix">
                        <h3><i class="fa-clock-o"></i>Hours:</h3>
                        <span><strong>Monday - Thursday:</strong>10AM-5PM</span>
                    </div>
                    <ul class="social-link">
                        <li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                        <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                    <div class="form">

                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="input-btn">Send Message</button>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <center>
                <h5><strong>© E-Cell, NIT Raipur</strong></h5>
            </center>
        </section>
    </div>
    <!-- Scripts -->
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/typed.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/jquery.onepagenav.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/login.js"></script>
</body>
<script>
</script>
</html>