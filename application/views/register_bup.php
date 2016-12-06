<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diaspora</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!-- Core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/extralayers.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/animate.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/carousel.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/owl-carousel.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/et-line.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet">

    <!-- PORTFOLIO AND LIGHTBOX SETTINGS -->
    <link href="<?= base_url('assets/bfassets/css/bootFolio.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/bfassets/css/prettyPhoto.css') ?>" rel="stylesheet">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/extralayers.css') ?>" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/rs-plugin/css/settings.css') ?>" media="screen" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="agencystyle">
    
    <div id="preloader">
        <div id="spinner"></div>
        <img class="preloader" src="<?= base_url(); ?>assets/images/dloader.png" alt="">
    </div><!-- end loader -->
    
    <div class="wrapper">

        <div id="opensearch" class="collapse myform">
            <div class="container-fluid ">
                <div class="topbar">
                    <form role="search" action="#" class="search_form_top" method="get">
                        <input type="text" placeholder="What are you looking for?" name="s" class="form-control" autocomplete="off">
                    </form>
                </div>
            </div>
        </div>

        <header id="home" class="header">
            <div class="menu-wrapper">
                <nav class="navbar yamm navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-bars"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a data-scroll href="#home">Home</a></li>
                                <li><a data-scroll href="#about">About</a></li>
                                <li><a data-scroll href="#clients">Clients</a></li>
                                <li><a data-scroll href="#works">Works</a></li>
                                <li><a data-scroll href="#contact">Contact</a></li>
                                <li>
                                    <div class="social-icons">
                                        <span><a class="border-radius" data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                                        <span><a class="border-radius" data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                                        <span><a title="Search" href="#" class="nav-toggle border-radius" data-toggle="collapse" data-target="#opensearch"><i class="fa fa-search"></i></a></span>
                                    </div><!-- end social icons -->
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
            </div><!-- end menu-wrapper -->
        </header><!-- end header -->
        
		<section id="youtubevideo" class="fullscreen section-parallax" style="" data-stellar-background-ratio="" data-stellar-vertical-offset="">
            <div class="parallax-text">
            <div class="container">
                <div class="general-content">
                    <div class="parallax-text">
                        <a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Play / Pause Video" href="#" id="playvideo" class="videobuttons border-radius"><i class="fa fa-play border-radius"></i></a> 
                        <a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Open / Close Sound" href="#" id="opensound" class="videobuttons border-radius"><i class="fa fa-music border-radius"></i></a>
                        <h2 class="noborder">Diaspora<br>Your Projects Friend<br>
                        How can We help you?</h2>
						<div class="login-box">
							<div id="infoMessage"><?php echo $message;?></div>
							<?php echo form_open("auth/login");?>
							  <div class="input">
								<?php //echo lang('login_identity_label', 'identity');?>
								<span><i class="fa fa-user"></i></span>
								<?php echo form_input($identity, '', "required='required' placeholder='Username / Email'");?>
							  </div>

							  <div class="input">
								<?php //echo lang('login_password_label', 'password');?>
								<span><i class="fa fa-lock"></i></span>
								<?php echo form_input($password, '', "required='required' placeholder='Password'");?>
							  </div>

							  <div class="chk">
								<?php //echo lang('login_remember_label', 'remember');?>
								<div class="roundedTwo">
									<?php echo form_checkbox('remember', '1', FALSE, 'id="roundedTwo"');?>
									<!--input type="checkbox" id="roundedTwo" value="1" name="remember" /-->
									<label for="roundedTwo"></label>
								</div>
								<label for="roundedTwo">Ingat Saya</label>
							  </div>


							  <div class="sbm"><?php echo form_submit('submit', lang('login_submit_btn'));?></div>

							<?php echo form_close();?>

							<p class="forgot"><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
						</div><!-- end login-box -->
                    </div><!-- end text -->
                </div><!-- end general -->
            </div><!-- end container -->
            </div><!-- end parallax-text -->
        </section><!-- end full -->

        <section id="about" class="section-w clearfix">
            <div class="container">
                <div class="section-title text-center">
                    <h3><span class="font-backend">D</span>ABOUT DIASPORA</h3>
                    <p class="lead">We’re The Nation Agency, a small design agency based in United States. We’ve been crafting beautiful websites, launching stunning<br> brands and making clients happy for years.</p>
                </div><!-- end sectiontitle -->

                <div class="section-wrapper">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-box text-center">
                                <span class="service-icon border-radius">01</span>
                                <h3>Web Design</h3>
                                <p>Mauris id viverra augue, eu porttitor diam. Praesent faucibus est a interdum elementum. Nam varius at ipsum id dignissim</p>
                                <div class="backend">
                                    <a href="#" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="Photoshop, Illustrator, Pixels and Vectors. The pretty stuff that makes your heart pound.">
                                    <span class="readmore-icon border-radius">+</span></a>
                                </div><!-- end backend -->
                            </div><!-- end service-box -->
                        </div><!-- end col -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-box text-center">
                                <span class="service-icon border-radius">02</span>
                                <h3>Branding</h3>
                                <p>Mauris id viverra augue, eu porttitor diam. Praesent faucibus est a interdum elementum. Nam varius at ipsum id dignissim</p>
                                <div class="backend">
                                    <a href="#" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="Photoshop, Illustrator, Pixels and Vectors. The pretty stuff that makes your heart pound.">
                                    <span class="readmore-icon border-radius">+</span></a>
                                </div><!-- end backend -->
                            </div><!-- end service-box -->
                        </div><!-- end col -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-box text-center">
                                <span class="service-icon border-radius">03</span>
                                <h3>Photography</h3>
                                <p>Mauris id viverra augue, eu porttitor diam. Praesent faucibus est a interdum elementum. Nam varius at ipsum id dignissim</p>
                                <div class="backend">
                                    <a href="#" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="Photoshop, Illustrator, Pixels and Vectors. The pretty stuff that makes your heart pound.">
                                    <span class="readmore-icon border-radius">+</span></a>
                                </div><!-- end backend -->
                            </div><!-- end service-box -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-box text-center">
                                <span class="service-icon border-radius">04</span>
                                <h3>Graphic Design</h3>
                                <p>Mauris id viverra augue, eu porttitor diam. Praesent faucibus est a interdum elementum. Nam varius at ipsum id dignissim</p>
                                <div class="backend">
                                    <a href="#" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="Photoshop, Illustrator, Pixels and Vectors. The pretty stuff that makes your heart pound.">
                                    <span class="readmore-icon border-radius">+</span></a>
                                </div><!-- end backend -->
                            </div><!-- end service-box -->
                        </div><!-- end col -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-box text-center">
                                <span class="service-icon border-radius">05</span>
                                <h3>Development</h3>
                                <p>Mauris id viverra augue, eu porttitor diam. Praesent faucibus est a interdum elementum. Nam varius at ipsum id dignissim</p>
                                <div class="backend">
                                    <a href="#" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="Photoshop, Illustrator, Pixels and Vectors. The pretty stuff that makes your heart pound.">
                                    <span class="readmore-icon border-radius">+</span></a>
                                </div><!-- end backend -->
                            </div><!-- end service-box -->
                        </div><!-- end col -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-box text-center">
                                <span class="service-icon border-radius">06</span>
                                <h3>Customer Services</h3>
                                <p>Mauris id viverra augue, eu porttitor diam. Praesent faucibus est a interdum elementum. Nam varius at ipsum id dignissim</p>
                                <div class="backend">
                                    <a href="#" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="Photoshop, Illustrator, Pixels and Vectors. The pretty stuff that makes your heart pound.">
                                    <span class="readmore-icon border-radius">+</span></a>
                                </div><!-- end backend -->
                            </div><!-- end service-box -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end section-wrapper -->
                <div class="section-wrapper">
                    <div class="text-center">
                        <a class="btn btn-primary btn-lg" href="#" title="">Sign Up</a>
                    </div>
                </div>
            </div><!-- end container -->
        </section><!-- end section -->

		<section class="section-parallax" style="background-image: url('<?= base_url(); ?>assets/demos/parallax_01.jpg');" data-stellar-background-ratio="" data-stellar-vertical-offset="">
            <div class="container">
                <div class="section-title text-center">
                    <h3><span class="font-backend">F</span> Fun Facts</h3>
                </div><!-- end sectiontitle -->
                <div class="section-wrapper">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="fun-facts text-center">
                                <span class="fun-icon border-radius"><i class="fa fa-lightbulb-o"></i></span>
                                <p class="stat-count">3210</p>
                                <h3>New clients to family</h3>
                            </div><!-- end service-box -->
                        </div><!-- end col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="fun-facts text-center">
                                <span class="fun-icon border-radius"><i class="fa fa-bar-chart-o"></i></span>
                                <p class="stat-count">12000</p>
                                <h3>Project finished</h3>
                            </div><!-- end service-box -->
                        </div><!-- end col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="fun-facts text-center">
                                <span class="fun-icon border-radius"><i class="fa fa-bullseye"></i></span>
                                <p class="stat-count">1200</p>
                                <h3>Pizzas ordered</h3>
                            </div><!-- end service-box -->
                        </div><!-- end col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="fun-facts text-center">
                                <span class="fun-icon border-radius"><i class="fa fa-comments-o"></i></span>
                                <p class="stat-count">2312</p>
                                <h3>New clients to family</h3>
                            </div><!-- end service-box -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div><!-- end page_header -->
        </section><!-- end section -->
		
		<section class="section-w clearfix">
            <div class="container">
                <div class="row animation-wrapper">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src="<?= base_url(); ?>assets/images/goodat2.png" alt="" class="wow slideInLeft img-responsive">
                        <div class="holder1">
                            <a href="#" class="plus-x border-radius button-1" data-toggle="tooltip" data-placement="top" title="Funding"></a>
                        </div>
                        <div class="holder2">
                            <a href="#" class="plus-x border-radius button-2" data-toggle="tooltip" data-placement="top" title="Social Event"></a>
                        </div>
                        <div class="holder3">
                            <a href="#" class="plus-x border-radius button-3" data-toggle="tooltip" data-placement="top" title="Enterpreneur"></a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="section-title text-center">
                            <h3><span class="font-backend">W</span> What We are Good At</h3>
                        </div><!-- end sectiontitle -->

                        <div class="section-wrapper vertical-services">
                            <div class="verticalbox clearfix">
                                <div class="verticalicon wow fadeIn col-md-2">
                                <i class="icon-printer"></i>
                                </div>
                                <div class="desc col-md-10">
                                <h3>Print</h3>
                                <p>We have a unique approach to our work, founded on planning and insight development. We take time out to understand the brand, the business objectives and, most importantly, the customer before making recommendations for how we will execute on our strategy.</p>
                                </div>
                            </div><!-- end vertical box -->

                            <div class="verticalbox clearfix">
                                <div class="verticalicon wow fadeIn col-md-2">
                                <i class="icon-telescope"></i>
                                </div>
                                <div class="desc col-md-10">
                                <h3>Design</h3>
                                <p>We have a unique approach to our work, founded on planning and insight development. We take time out to understand the brand, the business objectives and, most importantly, the customer before making recommendations for how we will execute on our strategy.</p>
                                </div>
                            </div><!-- end vertical box -->

                            <div class="verticalbox clearfix">
                                <div class="verticalicon wow fadeIn col-md-2">
                                <i class="icon-browser"></i>
                                </div>
                                <div class="desc col-md-10">
                                <h3>Development</h3>
                                <p>We have a unique approach to our work, founded on planning and insight development. We take time out to understand the brand, the business objectives and, most importantly, the customer before making recommendations for how we will execute on our strategy.</p>
                                </div>
                            </div><!-- end vertical box -->

                            <div class="verticalbox clearfix">
                                <div class="verticalicon wow fadeIn col-md-2">
                                <i class="icon-chat"></i>
                                </div>
                                <div class="desc col-md-10">
                                <h3>Support</h3>
                                <p>We have a unique approach to our work, founded on planning and insight development. We take time out to understand the brand, the business objectives and, most importantly, the customer before making recommendations for how we will execute on our strategy.</p>
                                </div>
                            </div><!-- end vertical box -->
                        </div><!-- end vertical-services -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
		
        <section class="bg-image section-g clearfix">
            <div class="image-wrapper col-md-6 col-sm-3 pull-left">
                <div class="background-image-wrapper wow slideInLeft">
                    <img class="background-image" alt="" src="<?= base_url(); ?>assets/demos/bg_01.jpg">
                    <div class="mini-title">
                        <a href="http://www.youtube.com/watch?v=ePWUeVWy3Sw" data-gal="prettyPhoto" title=""><i class="icon-video"></i></a>
                        <h2>OUR PROFILE</h2>
                    </div><!-- end mini-title -->
                </div>
            </div>
                
            <div class="container">
                <div class="row">
                    <div class="content col-md-6 col-md-offset-7 col-sm-6 col-sm-offset-4 clearfix">
                        <div class="section-title text-left">
                            <h3><span class="font-backend">C</span> Company Milestone</h3>
                        </div>
                        <div class="section-wrapper">
                            <div class="textrotate">
                            <ul class="bxslider">
                                <li>
                                    <h3>Funding Project </h3>
                                    <h4>Posted : 20 - Jan - 2015</h4>
                                    <p>Etiam sit amet fringilla lacus. Nam dictum sem, eu aliquam. Maecenas volutpat, diam enim sagittis quam, id porta quam. d id       fermentum nibh volutpat, accumsan purus. Etiam sit amet fringilla lacus. </p>
                                </li>
                                <li>
                                    <h3>Worked 20 Day & Night for The Nation Template </h3>
                                    <h4>Posted : 22 - Feb - 2015</h4>
                                    <p>Nam dictum sem, eu aliquam. Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus. Etiam sit amet fringilla lacus. </p>
                                </li>
                                <li>
                                    <h3>Started The Nation Agency in 1999  </h3>
                                    <h4>Posted : 20 - Jan - 2015</h4>
                                    <p>Etiam sit amet fringilla lacus. Nam dictum sem, eu aliquam. Maecenas volutpat, diam enim sagittis quam, id porta quam. d id       fermentum nibh volutpat, accumsan purus. Etiam sit amet fringilla lacus. </p>
                                </li>
                                <li>
                                    <h3>National Scholarship 2016</h3>
                                    <h4>Posted : 22 - Feb - 2015</h4>
                                    <p>Nam dictum sem, eu aliquam. Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus. Etiam sit amet fringilla lacus. </p>
                                </li>
                            </ul>
                            </div><!-- end textrotate -->
                        </div>
                    </div>
                </div><!--end of row-->
            </div>
        </section>

        <section id="clients" class="section-d clearfix">
            <div class="container">
                <div class="section-title text-center">
                    <h3><span class="font-backend">C</span> WHo We Work With</h3>
                </div><!-- end sectiontitle -->
            </div>
        </section><!-- end section -->

        <section class="section-parallax" style="background-image: url('<?= base_url(); ?>assets/demos/parallax_02.jpg');" data-stellar-background-ratio="" data-stellar-vertical-offset="">
            <div class="container">
                <div class="section-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-0">
                            <div id="testimonial" class="text-center clearfix">
                                <div class="owl-item">
                                    <img src="<?= base_url(); ?>assets/demos/testimonial_01.jpg" alt="" class="img-circle">
                                    <h3>Dravid Corner</h3>
                                    <p class="lead"> Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar<br>
                                    neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet,<br>
                                    iaculis libero.</p>
                                </div><!-- end owl -->
                                        
                                <div class="owl-item">
                                    <img src="<?= base_url(); ?>assets/demos/testimonial_01.jpg" alt="" class="img-circle">
                                    <h3>Dravid Corner</h3>
                                    <p class="lead"> Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar<br>
                                    neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet,<br>
                                    iaculis libero.</p>
                                </div><!-- end owl -->

                                <div class="owl-item">
                                    <img src="<?= base_url(); ?>assets/demos/testimonial_01.jpg" alt="" class="img-circle">
                                    <h3>Dravid Corner</h3>
                                    <p class="lead"> Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar<br>
                                    neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet,<br>
                                    iaculis libero.</p>
                                </div><!-- end owl -->
                            </div><!-- end testimonials -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end section-wrapper -->

                <div class="section-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-0">
                            <div class="section-wrapper">
                                <div class="image-center wow bounceInUp">
                                    <img src="<?= base_url(); ?>assets/images/clientss.png" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end section-wrapper -->
            </div><!-- end page_header -->
        </section><!-- end section -->

        <section id="works" class="section-g clearfix">
            <div class="container">
                <div class="section-title text-center">
                    <h3><span class="font-backend">P</span> Portfolio</h3>
                    <p class="lead">We’re The Nation Agency, a small design agency based in United States. We’ve been crafting beautiful websites, launching stunning<br> brands and making clients happy for years.</p>
                </div><!-- end sectiontitle -->
            </div><!-- end container -->
            <div id="second" class="bf fullwidth row">
                <!-- bootFolio category filter -->
                <div class="section-wrapper">
                    <ul class="filter">
                        <li><a data-cat="all" href="#" class="active">Show All</a></li>
                        <li><a data-cat="cat1" href="#">Web Design</a></li>
                        <li><a data-cat="cat2" href="#">Photography</a></li>
                        <li><a data-cat="cat3" href="#">Graphic Design</a></li>
                    </ul>
                </div>
                <!-- bootFolio Items -->
                <ul id="grid-four-col-portfolio" class="items">
                    <!-- single item -->
                    <li class="cat1">
                        <div class="bf-single-item wow fadeIn">
                            <img src="<?= base_url(); ?>assets/demos/portfolio_01.jpg" alt="">
                            <div class="caption">
                                <div class="cap-in">
                                    <p><a href="#">Branding, Web design</a></p>
                                    <h3><a href="#" title="">Light Box gallery</a></h3>
                                    <span class="bubble"><i class="fa fa-play-circle-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat2 cat1">
                        <div class="bf-single-item wow fadeIn">
                            <img src="<?= base_url(); ?>assets/demos/portfolio_02.jpg" alt="">
                            <div class="caption">
                                <div class="cap-in">
                                    <p><a href="#">Branding, Web design</a></p>
                                    <h3><a href="#" title="">Light Box gallery</a></h3>
                                    <span class="bubble"><i class="fa fa-picture-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->          
                    <li class="cat3">
                        <div class="bf-single-item wow fadeIn">
                            <img src="<?= base_url(); ?>assets/demos/portfolio_03.jpg" alt="">
                            <div class="caption">
                                <div class="cap-in">
                                    <p><a href="#">Branding, Web design</a></p>
                                    <h3><a href="#" title="">Light Box gallery</a></h3>
                                    <span class="bubble"><i class="fa fa-picture-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->     
                    <li class="cat1 cat3">
                        <div class="bf-single-item wow fadeIn">
                            <img src="<?= base_url(); ?>assets/demos/portfolio_04.jpg" alt="">
                            <div class="caption">
                                <div class="cap-in">
                                    <p><a href="#">Branding, Web design</a></p>
                                    <h3><a href="#" title="">Light Box gallery</a></h3>
                                    <span class="bubble"><i class="fa fa-picture-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->   
                    <li class="cat3">
                        <div class="bf-single-item wow fadeIn">
                            <img src="<?= base_url(); ?>assets/demos/portfolio_05.jpg" alt="">
                            <div class="caption">
                                <div class="cap-in">
                                    <p><a href="#">Branding, Web design</a></p>
                                    <h3><a href="#" title="">Light Box gallery</a></h3>
                                    <span class="bubble"><i class="fa fa-picture-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat3">
                        <div class="bf-single-item wow fadeIn">
                            <img src="<?= base_url(); ?>assets/demos/portfolio_06.jpg" alt="">
                            <div class="caption">
                                <div class="cap-in">
                                    <p><a href="#">Branding, Web design</a></p>
                                    <h3><a href="#" title="">Light Box gallery</a></h3>
                                    <span class="bubble"><i class="fa fa-picture-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat1">
                        <div class="bf-single-item wow fadeIn">
                            <img src="<?= base_url(); ?>assets/demos/portfolio_07.jpg" alt="">
                            <div class="caption">
                                <div class="cap-in">
                                    <p><a href="#">Branding, Web design</a></p>
                                    <h3><a href="#" title="">Light Box gallery</a></h3>
                                    <span class="bubble"><i class="fa fa-picture-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat2">
                        <div class="bf-single-item wow fadeIn">
                            <img src="<?= base_url(); ?>assets/demos/portfolio_08.jpg" alt="">
                            <div class="caption">
                                <div class="cap-in">
                                    <p><a href="#">Branding, Web design</a></p>
                                    <h3><a href="#" title="">Light Box gallery</a></h3>
                                    <span class="bubble"><i class="fa fa-picture-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                </ul>
            </div>
            <!-- //bootFolio content -->
            <div class="section-wrapper">
                <div class="text-center">
                    <a class="btn btn-primary btn-lg" data-scroll href="#contact" title="">CONTACT US</a>
                </div>
            </div>
        </section><!-- end section white -->

        <section id="contact" class="section-parallax" style="background-image: url('<?= base_url(); ?>assets/demos/parallax_04.jpg');" data-stellar-background-ratio="" data-stellar-vertical-offset="">
            <div class="container">
                <div class="section-title text-center">
                    <h3><span class="font-backend">S</span> Say Hello</h3>
                    <p class="lead">We deliver considered branding products that evokeengaging emotional responses. Innovative thinking and<br> attention to detail are the hallmark of our craft.</p>
                </div><!-- end sectiontitle -->

                <div class="section-wrapper row">
                    <div class="contact_form col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                    <div id="message"></div>
                        <form id="contactform" action="http://e-bootstrap.com/html/nation/contact.php" name="contactform" method="post">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name"> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email"> 
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Message Below"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" value="SEND" id="submit" class="btn btn-default btn-lg">SEND MESSAGE</button>
                            </div>
                        </form> 
                    </div> <!-- end contact_widget -->
                </div><!-- end section-wrapper -->

                <div class="text-center">
                <h2><a href="#">Click here to view</a></h2>
                </div>
            </div><!-- end container -->
        </section><!-- end section -->
        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="widget">
                            <div class="about-widget">
                                <img src="<?= base_url(); ?>assets/images/ddlogo.png" alt="">
                                <p>We’re The Nation Agency, a small design agency based in United States. We’ve been crafting beautiful websites, launching stunning brands and making clients happy for years.</p>
                                <div class="social-icons">
                                    <span><a class="border-radius" data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                                    <span><a class="border-radius" data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                                    <span><a class="border-radius" data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Google+" href="#"><i class="fa fa-google-plus"></i></a></span>
                                    <span><a class="border-radius" data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Skype" href="#"><i class="fa fa-skype"></i></a></span>
                                </div><!-- end social icons -->
                            </div><!-- end about-widget -->

                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">
                            <div class="section-title">
                                <h3>Useful Links</h3>
                            </div><!-- title -->
                            <ul>
                                <li><a href="#">Works</a></li>
                                <li><a href="#">About Company</a></li>
                                <li><a href="#">Enquires</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">What we do?</a></li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">
                            <div class="section-title">
                                <h3>Contact Us</h3>
                            </div><!-- title -->

                            <div class="contact-widget">
                                <div class="box">
                                    <p>Allison Brislin</p>
                                    <p>+45 (0)4 79 25 37 98</p>
                                    <p>allison@nation.com</p>
                                </div>
                                <hr>
                                <div class="box">
                                    <p>Martin Greenwood</p>
                                    <p>+45 (0)4 79 25 37 99</p>
                                    <p>martin@nation.com</p>
                                </div>
                            </div><!-- end contact-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->
        
        <div class="copyrights">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>Copyright 2015 ©  The Nation | All Rights Reserved</p>
                </div><!-- end col-lg-4 -->
            </div><!-- end container -->
        </div><!-- end copyrights -->

        <div class="dmtop">Scroll to Top</div>
    </div><!-- end wrapper -->
    
    <!-- jQuery -->
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>    
    <!-- Menu Display -->
    <script src="<?= base_url('assets/js/menu.js') ?>"></script>
    <!-- Retina Display -->
    <script src="<?= base_url('assets/js/retina.js') ?>"></script>
    <!-- CSS3 Animations -->
    <script src="<?= base_url('assets/js/wow.js') ?>"></script>
    <!-- Parallax -->
    <script src="<?= base_url('assets/js/jquery.stellar.js') ?>"></script>
    <!-- Contact Form -->
    <script src="<?= base_url('assets/js/jquery.jigowatt.js') ?>"></script>
    <!-- Parallax -->
    <script src="<?= base_url('assets/js/smooth-scroll.js') ?>"></script>
    <!-- Carousel -->
    <script src="<?= base_url('assets/js/owl.carousel.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl-scripts.js') ?>"></script>
    <!-- Verttical Carousel -->
    <script src="<?= base_url('assets/js/jquery.bxslider.js') ?>"></script>
    <!-- Skills Bar -->
    <script src="<?= base_url('assets/js/progressbar.js') ?>"></script>
    <!-- Lightbox Scripts -->
    <script src="<?= base_url('assets/bfassets/js/jquery.prettyPhoto.js') ?>"></script>
    <!-- Onepage Scripts -->
    <script src="<?= base_url('assets/js/onepage-scripts.js') ?>"></script>
    <!-- Bfassets Portfolio and Lightbox -->
    <script src="<?= base_url('assets/bfassets/js/jquery.bootFolio.js') ?>"></script>
    <script type="text/javascript">
    $(document) .ready(function () {
        $("#second").bootFolio({
            bfLayout: "bflayhover",
            bfFullWidth:"box", 
            bfHover: "bfhover4",
            bfAnimation: "scale",
            bfSpace: "space",
            bfAniDuration: 500,
            bfCaptioncolor: "#020202",
            bfTextcolor:"#ffffff",
            bfTextalign:"center",
            bfNavalign:"center"
        });
        });
    </script>
	
	<!-- Video Player SCRIPTS  -->
    <script type="text/javascript" src="<?= base_url('assets/js/libs/swfobject.js') ?>"></script> 
    <script type="text/javascript" src="<?= base_url('assets/js/libs/modernizr.video.js') ?>"></script> 
    <script type="text/javascript" src="<?= base_url('assets/js/video_background.js') ?>"></script> 
    <script>
        jQuery(document).ready(function($) {
            var Video_back = new video_background($("body #youtubevideo"), { 
                "position": "fixed",    //Follow page scroll
                "z-index": "-1",        //Behind everything
                "loop": true,           //Loop when it reaches the end
                "autoplay": true,       //Autoplay at start
                "muted": true,         //Muted at start
                "youtube": "ePWUeVWy3Sw",   //Youtube video id
                "start": 25,                 //Start with 6 seconds offset (to pass black introduction in this case for example)
                "stop": 27,
				"video_ratio": 1.7778,      // width/height -> If none provided sizing of the video is set to adjust
                "fallback_image": "videos/main.jpg",    //Fallback image path
            });
            //Toggle play status
            $("#playvideo").click(function(){
                Video_back.toggle_play();
            });
            //Toggle mute
            $("#opensound").click(function(){
                Video_back.toggle_mute();
            });
        });
    </script>
	
    <!-- SuperSlides SCRIPTS  -->
    <script src="<?= base_url('assets/js/jquery.superslides.min.js') ?>"></script>   
    <script>
    (function($) {
        $('.general-section').height();
    })(jQuery);
    </script>

</body>
</html>