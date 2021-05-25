<html>
    <head>
            <link rel="shortcut icon" href="assets/img/favicon.ico">

            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    
            <!-- Plugin Css -->
            <link rel="stylesheet" href="assets/css/plugins.css">
            <!-- Colors Css -->
            <link rel="stylesheet" href="assets/css/color/blue-color.css" id="option-color">
            <!--  Custom Style CSS  -->
            <link rel="stylesheet" href="assets/css/main.css">
            <link rel="stylesheet" href="assets/css/color/colorfull-main.css">
    </head>
    <style>
         button {
        align-self: center;
        border: none;
        background: none;
        padding: 10px 20px;
        color: #eee;
        background: rgb(81, 129, 218);
        border-radius: 5px;
        }

        button:hover {
            background: rgb(32, 101, 230);
        }
     </style>

<body>

    <main id="main">

        <!--   Header Start -->
        <header>
            <div class="header-navbar h-100">
                <a class="navbar-brand" href="#"><b>B</b><span>Blue Bus</span></a>
                <ul class="list-group menu text-center" id="menu">
                    <li class="list-group-item"><a class="active" href="#hero"><i class="lni-home"></i><span>home</span></a></li>
                    <?php
                        session_start();
                        if(empty($_SESSION['username'])){
                            echo "<li class='list-group-item'><a href='login.php'><i class='lni-user'></i><span>Log in</span></a></li>";
                        }else{
                            echo "<li class='list-group-item'><a href='logout.php'><i class='lni-user'></i><span>Log Out</span></a></li>";
                        }
                    ?>
                    <li class="list-group-item"><a href="#about"><i class="lni-certificate"></i><span>about</span></a></li>
                    
                    <li class="list-group-item"><a href="cancel.php"><i class="lni-write"></i><span>Reserve seat</span></a></li>
                    <li class="list-group-item"><a href="#contact"><i class="lni-envelope"></i><span>contact</span></a></li>
                </ul>
                <div class="menu-toggler">
                    <span>
                        <i class="text-white lni-menu"></i>
                    </span>
                </div>
            </div>
        </header>
        <!--  Hero Start  -->
        <section id="hero" class="hero-06 active">
                <div class="display-table">
                    <div class="display-content">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-2 order-lg-1">
                                    <div class="hero-content">
                                        <h1 class="mb-3">Blue Bus</h1>
                                        <h4 class="text-capitalize mb-0"><span class="base-color">A Best Apllication to Reserve a Seat </span></h4>
                                        <p class="max-width-450 mx-0 my-4">This Website is ensure that your all private informations are safe on this Website. Here all transections are Safe and after cancellation you got your refund in 24 couple of hours.Thanks for being Here</p>
                                        <ul class="list-inline hero-social">
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);">
                                                    <img src="assets/img/facebook.svg" alt="">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);">
                                                    <img src="assets/img/twitter.svg" alt="">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);">
                                                    <img src="assets/img/github.svg" alt="">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);">
                                                    <img src="assets/img/linkedin.svg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                        <form action="ticketbook.php">
                                      
                                            <button type="submit">
                                                    Start Booking
                                                </button>
                                    
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="hero-images">
                                        <div class="square">
                                            <img src="assets/img/element_square.png" alt="/">
                                        </div>
                                        <div class="circle"></div>
                                        <div class="circle-2"></div>
                                        <div class="circle-3"></div>
                                        <div class="floating"></div>
                                        <div class="rounded-circle">
                                            <img src="assets/img/aa.jpg" alt="/" class="rounded-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!--  Hero End  -->
         

        <!-- End Color Pallet -->

        <section id="about" class="about">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center title">
                                    <h2 class="text-
									">About <span class="base-color">Us</span></h2>
                                    <p class="text-muted max-width-450 mb-5">About Of Our Team And If You Want Any Devloper Then You Can Hire Them From Here.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image-border">
                                    <img src="assets/img/akash.jpg" alt="/">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="personal-item ">
                                    <h3 class="text-dark mt-4 mt-lg-0"><span class="base-color">Backend</span> Designer</h3>
                                    <div class="row">
                                        <div class="col-6 personal-info">
                                            <ul class="list-unstyled pt-4">
                                                <li>
                                                    <p>Name : <span> Lukhi Akash K.</span></p>
                                                </li>
                                                <li>
                                                    <p>Birthday : <span> 5 January 2001</span></p>
                                                </li>
                                                <li>
                                                    <p>Phone : <span> 63530 01311</span></p>
                                                </li>
                                                <li>
                                                    <p>City : <span> Surat, Gujarat</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 personal-info">
                                            <ul class="list-unstyled pt-4">
                                                <li>
                                                    <p>Age : <span> 19</span></p>
                                                </li>
                                                <li>
                                                    <p>Degree : <span> B-Tech</span></p>
                                                </li>
                                                <li>
                                                    <p>Mail : <span> aklukhi@gmail.com</span></p>
                                                </li>
                                                <li>
                                                    <p>Freelance : <span> Available</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-border mt-3 mb-lg-0">
                                    <a href="javascript:void(0);" class="pill-button">Hire Me</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image-border">
                                    <img src="assets/img/jemis.jpeg" alt="/">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="personal-item ">
                                    <h3 class="text-dark mt-4 mt-lg-0"><span class="base-color">Frontend</span> Designer</h3>
                                    <div class="row">
                                        <div class="col-6 personal-info">
                                            <ul class="list-unstyled pt-4">
                                                <li>
                                                    <p>Name : <span>Lakhani Jemis B.</span></p>
                                                </li>
                                                <li>
                                                    <p>Birthday : <span>20 february 2001</span></p>
                                                </li>
                                                <li>
                                                    <p>Phone : <span>63512 79536</span></p>
                                                </li>
                                                <li>
                                                    <p>City : <span>Surat,Gujarat</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 personal-info">
                                            <ul class="list-unstyled pt-4">
                                                <li>
                                                    <p>Age : <span> 19</span></p>
                                                </li>
                                                <li>
                                                    <p>Degree : <span> B-Tech</span></p>
                                                </li>
                                                <li>
                                                    <p>Mail : <span> jemislakhani@gmail.com</span></p>
                                                </li>
                                                <li>
                                                    <p>Freelance : <span> Available</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-border mt-3 mb-lg-0">
                                    <a href="javascript:void(0);" class="pill-button">Hire Me</a>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="image-border">
                                    <img src="assets/img/nikul.jpeg" alt="/">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="personal-item ">
                                    <h3 class="text-dark mt-4 mt-lg-0"><span class="base-color">Database</span> Designer</h3>
                                    <div class="row">
                                        <div class="col-6 personal-info">
                                            <ul class="list-unstyled pt-4">
                                                <li>
                                                    <p>Name : <span>Lakum Nikul .</span></p>
                                                </li>
                                                <li>
                                                    <p>Birthday : <span> 3 july 2001</span></p>
                                                </li>
                                                <li>
                                                    <p>Phone : <span> 82387 96749</span></p>
                                                </li>
                                                <li>
                                                    <p>City : <span> Surendranagar, Gujarat</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 personal-info">
                                            <ul class="list-unstyled pt-4">
                                            <li>
                                                    <p>Age : <span> 19</span></p>
                                                </li>
                                                <li>
                                                    <p>Degree : <span> B-Tech</span></p>
                                                </li>
                                                <li>
                                                    <p>Mail : <span> nikullakum464@gmail.com</span></p>
                                                </li>
                                                <li>
                                                    <p>Freelance : <span> Available</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-border mt-3 mb-lg-0">
                                    <a href="javascript:void(0);" class="pill-button">Hire Me</a>
                                </div>
                            </div>
                        </div>
                        <!--   Service End   -->
                       </div>
                </div>
            </div>
        </section>
        <!--    About End    -->
         <!-- Contact Start -->
       <section id="contact" class="contact">
        <div class="display-table">
            <div class="display-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center title">
                                <h2 class="text-dark">Get <span class="base-color">in Touch</span></h2>
                                </div>
                        </div>
                    </div>
                    <div class="row contact-info">
                        <div class="col-lg-4 mt-5">
                            <div class="text-center">
                                <div class="base-color">
                                    <img src="assets/img/phone.svg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h5 class="text-dark mb-0">Call Us On</h5>
                                    <small class="text-muted">+91 63530 01311</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-5">
                            <div class="text-center">
                                <div class="base-color">
                                    <img src="assets/img/location.svg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h5 class="text-dark mb-0 contact_detail-title">Visit Office</h5>
                                    <small class="text-muted">DDU,Nadiad,Gujarat,India.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-5">
                            <div class="text-center">
                                <div class="base-color">
                                    <img src="assets/img/send.svg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h5 class="text-dark mb-0">Email Us At</h5>
                                    <small class="text-muted">aklukhi@gmail.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-5 contact-form">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 form-item">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" required >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-item">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" required >
                                        </div>
                                    </div>
                                    <div class="col-12 form-item">
                                        <div class="form-group">
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Your Subject*" required >
                                        </div>
                                    </div>
                                    <div class="col-12 form-item">
                                        <div class="form-group">
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-4 text-left">
                                        <div class="button-border">
                                            <a href="javascript:void(0)" class="pill-button" id="submit-btn" onclick="sendEmail()">Send Message</a>
                                        </div>
                                        <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" >
                                            <div class="toast-body d-inline-block"></div>
                                            <button type="button" class="pr-3 close" data-dismiss="toast" aria-label="Close">
                                                <span aria-hidden="true" class="lni-close size-xs "></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row copy-right">
                        <div class="col-12 text-center">
                            <p>Copyright © 2019. Template has been designed by <span class="base-color">Our Team</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Contact End  -->



    </main>


    <!--  JavaScripts  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!--  Plugin Js  -->
    <script src="assets/js/plugins.js"></script>
    <!--  Particle App Js  -->
    <script src="assets/js/particles.app.js"></script>
    <!--  Custom JS  -->
    <script src="assets/js/arshia.js"></script>
           


    </body>
    </html>