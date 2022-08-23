<?php
session_start();
require_once "db.php";
// banner link
$banners = "SELECT * FROM banners WHERE status=1";
$banners_result = mysqli_query($db_connect,$banners);
$banner_assoc = mysqli_fetch_assoc($banners_result);
// logos link
$logos = "SELECT * FROM logos";
$logos_result = mysqli_query($db_connect,$logos);
$logo_assoc = mysqli_fetch_assoc($logos_result);
// socials icon link
$icons = "SELECT * FROM icons WHERE status=1";
$icons_result = mysqli_query($db_connect,$icons);
// address  link
$address = "SELECT * FROM address WHERE status=1";
$address_result = mysqli_query($db_connect,$address);
$after_assoc_address = mysqli_fetch_assoc($address_result);
// about  link
$about = "SELECT * FROM about WHERE status=1";
$about_result = mysqli_query($db_connect,$about);
$after_assoc_about = mysqli_fetch_assoc($about_result);
// education  link
$education = "SELECT * FROM education WHERE status=1";
$education_result = mysqli_query($db_connect,$education);
// Services  link
$services = "SELECT * FROM services WHERE status=1";
$services_result = mysqli_query($db_connect,$services);
// work  link
$works = "SELECT * FROM works WHERE status=1";
$works_result = mysqli_query($db_connect,$works);
// counter  link
$counters = "SELECT * FROM counters WHERE status=1";
$counters_result = mysqli_query($db_connect,$counters);
// clients  link
$clients = "SELECT * FROM clients WHERE status=1";
$clients_result = mysqli_query($db_connect,$clients);
// contact  link
$contacts = "SELECT * FROM contacts WHERE status=1";
$contacts_result = mysqli_query($db_connect,$contacts);
$contact = mysqli_fetch_assoc($contacts_result);



?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img src="uploads/logo/<?=$logo_assoc['logo_image']?>" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="uploads/logo/<?=$logo_assoc['logo_image']?>" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?=$after_assoc_address['office_address']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?=$after_assoc_address['phone']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?=$after_assoc_address['email_address']?></p>
                    </div>
                </div>
                
                <div class="social-icon-right mt-20">
                <?php
                foreach($icons_result as $icon){
                ?>
                    <a href="<?=$icon['icon_link']?>"><i class="<?=$icon['icon']?>"></i></a>
                    <?php }?>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s"><?=$banner_assoc['sub_title']?></h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?=$banner_assoc['title']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$banner_assoc['desp']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <?php
                                        foreach($icons_result as $icon){
                                        ?>
                                          
                                           
                                        <li><a href="<?=$icon['icon_link']?>"><i class="<?=$icon['icon']?>"></i></a></li>
                                        <?php }?>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="uploads/banner/<?=$banner_assoc['banner_image']?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span><?=$after_assoc_about['sub_title']?></span>
                                <h2><?=$after_assoc_about['title']?></h2>
                            </div>
                            <div class="about-content">
                                <p><?=$after_assoc_about['desp']?></p>
                                <h3>Education:</h3>
                            </div>
                            <!-- Education Item -->
                            <?php foreach($education_result as $edu){ ?>
                            <div class="education">
                                <div class="year"><?=$edu['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$edu['title']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$edu['percentage']?>%;" aria-valuenow="<?=$edu['percentage']?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- End Education Item -->
                           
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <?php foreach($services_result as $service){?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="fa <?=$service['icon']?>"></i>
								<h3><?=$service['heading']?></h3>
								<p><?=$service['title']?></p>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach($works_result as $work){?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="uploads/work/<?=$work['work_image']?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span><?=$work['sub_title']?></span>
									<h4><a href="portfolio-single.html"><?=$work['title']?></a></h4>
									<a href="portfolio-single.html" class="arrow-btn"><?=$work['info']?><span></span></a>
								</div>
							</div>
                        </div>
                      <?php }?>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <?php foreach($counters_result as $count){?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$count['icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$count['number']?></span></h2>
                                        <span><?=$count['desp']?></span>
                                    </div>
                                </div>
                            </div>
                         <?php }?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                     
                        <div class="col-xl-9 col-lg-10">
                            
                            <div class="testimonial-active">
                                <?php foreach($clients_result as $client){?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img style="border-radius:50%;width:200px;height:200px;" src="uploads/client/<?=$client['client_image']?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span><?=$client['desp']?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$client['name']?></h5>
                                            <span><?=$client['title']?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/brand/brand_img01.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/brand/brand_img02.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/brand/brand_img03.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/brand/brand_img04.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/brand/brand_img05.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/brand/brand_img03.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                           
                            <div class="contact-content">
                                <p><?=$contact['sub_title']?></p>
                                <h5>OFFICE IN <span><?=$contact['office']?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$contact['office_address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$contact['office_phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$contact['office_email']?></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="/../neptune/backend/contact_form/add_message.php" method="POST">
                                    <input type="hidden" name="id">
                                    <input type="text" name="name" placeholder="your name *">
                                    <?php if(isset($_SESSION['send_error'])){ ?>
                                        <div class="alert alert-danger"><?=$_SESSION['send_error']?></div>
                                    <?php }unset($_SESSION['send_error'])?>

                                    <input type="email"  name="email" placeholder="your email *">

                                    <?php if(isset($_SESSION['send_error_e'])){ ?>
                                        <div class="alert alert-danger"><?=$_SESSION['send_error_e']?></div>
                                    <?php }unset($_SESSION['send_error_e'])?>

                                    <textarea name="message"  name="message" id="message" placeholder="your message *"></textarea>
                                    <?php if(isset($_SESSION['send_error_m'])){ ?>
                                        <div class="alert alert-danger"><?=$_SESSION['send_error_m']?></div>
                                    <?php }unset($_SESSION['send_error_m'])?>


                                 
                                    <?php if(isset($_SESSION['send_sucess'])){ ?>
                                        <div class="alert alert-success"><?=$_SESSION['send_sucess']?></div>
                                    <?php }unset($_SESSION['send_sucess'])?>
                                    <button class="btn" type="submit">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
