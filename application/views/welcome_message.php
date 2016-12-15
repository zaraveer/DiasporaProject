<!--**This is view for homepage or welcome*-->

<!-- maulida add edit custom css-->
  <style type="text/css">
    .thumbnail_at {
      position: relative;
      height: 400px;
      overflow: hidden;
      }
    .thumbnail_at img {
      max-width: 100%;
      max-height: 100%;
      margin:auto;
      display:block;
    }
  }
  </style>


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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diaspora Project</title>

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
	<link href="<?= base_url('assets/css/jquery.modal.css') ?>" rel="stylesheet" type="text/css" media="screen" />

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

        <header>
            <div class="header-menu">
                <div class="container">
                    <div class="left-menu">
                        <a class="item-menu hidden-xs" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="item-menu hidden-xs" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="item-menu" href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="right-menu">
                        <?php if(!$lgn){ ?>
                        <a class="item-menu" href="<?= base_url(''); ?>register">Daftar</a>
                        <a class="item-menu" href="<?= base_url(''); ?>login">Masuk</a>
                        <?php } else {?>
                        <a class="item-menu" href="<?= base_url('dashboard') ?>">Dashboard</a>
                        <a class="item-menu" href="<?= base_url('/auth/logout') ?>">Logout</a>
                        <?php } ?>
                        <a class="item-menu" href="<?= base_url(''); ?>project/all"><span class="hidden-xs">Daftar</span> Proyek</a>
                    </div>
                </div>
            </div>
            <div class="header-help">
                <div class="container">
                    <div class="left-menu">
                        <a class="header-brand" href="http://sahabatdiaspora.com/">
                            <h3>SAHABAT</h3>
                            <h4>DIASPORA</h5>
                        </a>
                    </div>
                    <div class="right-menu">
                        <div class="header-block hidden-sm hidden-xs">
                            <div class="icon"><img src="<?= base_url('assets/flags')?>/sk.png" /></div>
                            <div class="desc">
                                <div class="country">Korea Selatan</div>
                                <div class="address">
                                    서울특별시 강남구 역삼로17길 60, 3층 316-7호 (역삼동)
                                </div>
                                <div class="phone">+8210 59525 2349</div>
                            </div>
                        </div>
                        <div class="header-block hidden-sm hidden-xs">
                            <div class="icon"><img src="<?= base_url('assets/flags') ?>/ina.png" /></div>
                            <div class="desc">
                                <div class="country">Indonesia</div>
                                <div class="address">
                                    Jl. HR Rasuna Said, Karet Kuningan, Setiabudi Jakarta Selatan 12940
                                </div>
                                <div class="phone">+6221 37530629</div>
                            </div>
                        </div>
                        <div class="header-block">
                            <a href="<?= base_url(''); ?>project/all" class="btn btn-donasi">DONASI <span class="hidden-xs">SEKARANG</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
		<div class="banner">
            <?php 
                $item_banner = $results[0];
            ?>
            <div class="banner-item" 
                style="background-image:url('<?= base_url('');?>assets/photos/<?= $item_banner->projectphoto;?>')">
                <div class="banner-box">
                    <div class="time">
                    <?php 
                        $to = explode('/',$item_banner->dateto);
                        $dateto = $to[2]."-".$to[0]."-".$to[1];
                        
                        $date=strtotime($dateto);//Converted to a PHP date (a second count)

                        $diff=$date-time();//time returns current time in seconds
                        $days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day);
                        
                        if($days <= 0){ 
                            echo "$days hari";
                        }else{
                            echo "$days hari";
                        }
                    ?>
                    </div>
                    <div class="title"><?=htmlspecialchars($item_banner->name_project)?></div>
                    <div class="desc"><?=htmlspecialchars($item_banner->summary)?></div>
                    <div class="raise">
                        <span class="label">Terkumpul</span>
                        <span class="value">
                            <?php 
                                $i = 0;
                                foreach($money as $m){ 
                                    if($item_banner->id_project == $m->id_project){
                                        $i = $i + $m->value;
                                    } 
                                } 
                                echo htmlspecialchars(number_format($i, 0 , ",", "."),ENT_QUOTES,'UTF-8');
                            ?>
                        </span>
                    </div>
                    <div class="goal">
                        <span class="label">Target</span>
                        <span class="value">
                            <?= htmlspecialchars(number_format($item_banner->cost, 0 , ",", ".")) ?>
                        </span>
                    </div>
                    <div class="action">
                        <a href="#" class="btn">Donasi</a>
                    </div>
                </div>
            </div>      
        </div>
		
        <section id="about" class="section-w clearfix">
            <div class="container">
                <div class="section-title text-center">
                    <h3><b>DIASPORA PROJECT</b></h3>
                    <p class="lead">Platform Ruang Berkolaborasi Sesama Diaspora</p>
                </div>

                <div class="section-wrapper">
                    <div class="row">
                        <div class="col-lg-2-4 col-md-2-4 col-sm-6 col-xs-12 sd-icon">
                            <img class="img-responsive" src="<?= base_url('assets/images')?>/sd-icon-click.png"/>
                            <p class="col-xs-12">Klik "Mulai Proyek"</p>
                        </div>
                        <div class="col-lg-2-4 col-md-2-4 col-sm-6 col-xs-12 sd-icon">
                            <img class="img-responsive" src="<?= base_url('assets/images')?>/sd-icon-describe.png"/>
                            <p>Deskripsikan Proyek Kamu</p>
                        </div>
                        <div class="col-lg-2-4 col-md-2-4 col-sm-6 col-xs-12 sd-icon">
                            <img class="img-responsive" src="<?= base_url('assets/images')?>/sd-icon-share.png"/>
                            <p>Sebarkan link proyek kamu ke diaspora lainnya</p>
                        </div>
                        <div class="col-lg-2-4 col-md-2-4 col-sm-6 col-xs-12 sd-icon">
                            <img class="img-responsive" src="<?= base_url('assets/images')?>/sd-icon-join.png"/>
                            <p>Diaspora bergabung dan berdonasi</p>
                        </div>
                        <div class="col-lg-2-4 col-md-2-4 col-sm-6 col-xs-12 sd-icon">
                            <img class="img-responsive" src="<?= base_url('assets/images')?>/sd-icon-project.png"/>
                            <p>Jalankan proyekmu!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>        

        <section id="works" class="section-g clearfix">
            <div class="container">
                <div class="section-title text-center">
                    <h3><b>PROJECT TERBARU</b></h3>
                </div>

                <?php foreach($results as $res): ?>
                <div class="col-md-4">
                    <?php 
                        $s_id = str_pad( $res->id, 8, "0", STR_PAD_LEFT );
                        $p_id = str_pad( $res->id_user, 8, "0", STR_PAD_LEFT );
                        $str = $res->summary;
                        eval("\$str = \"$str\";");
                        
                        $i = 0;
                        $terkumpul = 0;
                        foreach($money as $m){ 
                            if($res->id_project == $m->id_project){
                                $i = $i + $m->value;
                                $terkumpul = $terkumpul + $m->value;
                            } 
                        } 
                        $per = ($i / $res->cost) * 100;
                        $aa = round($per, 1);

                        $to = explode('/',$res->dateto);
                        $dateto = $to[2]."-".$to[0]."-".$to[1];
                        $date=strtotime($dateto);//Converted to a PHP date (a second count)
                        $diff=$date-time();//time returns current time in seconds
                        $days=floor($diff/(60*60*24));
                    ?>
                    <a href="<?= base_url(''); ?>project/details/<?= $res->slug; ?>/<?= $s_id; ?>" class="project">
                        <div class="project-image">
                            <img onError="this.src='<?= base_url('assets/photos')?>/base.png'" src="<?= base_url('assets/photos')?>/<?= $res->projectphoto; ?>"/>
                        </div>
                        <div class="project-title">
                            <?= htmlspecialchars($res->name_project,ENT_QUOTES,'UTF-8')?>
                        </div>
                        <div class="project-category">
                            <i class="glyphicon glyphicon-bookmark"></i> <?= htmlspecialchars($res->name_category,ENT_QUOTES,'UTF-8')?>
                        </div>
                        <div class="project-location">
                            <i class="glyphicon glyphicon-map-marker"></i> <?= htmlspecialchars($res->name_province,ENT_QUOTES,'UTF-8')?>
                        </div>
                        <div class="project-desc">
                            <?= $str ?>
                        </div>
                        <div class="project-maker">
                            <div class="avatar">
                                <?= substr($res->username, 0, 1)?>
                            </div>
                            <div class="name">
                                oleh : <?= htmlspecialchars($res->username,ENT_QUOTES,'UTF-8');?>
                            </div>
                        </div>
                        <div class="project-progress">
                            <div class="terkumpul">
                                <b>
                                    ₩<?= htmlspecialchars(number_format($terkumpul, 0 , ",", "."),ENT_QUOTES,'UTF-8');?>
                                </b> 
                                terkumpul
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?=$aa?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$aa > 100 ? 100 : $aa ?>%">
                                  <span class="sr-only">
                                  <?php if($aa > 32){ echo $aa."% Complete"; } ?></span>
                                </div>
                            </div>
                            <div class="status">
                                <div class="pull-left">
                                    <b><?=$aa?>%</b>
                                </div>
                                <div class="pull-right">
                                    <i class="glyphicon glyphicon-time"></i>
                                    <b><?=$days?></b> 
                                    Hari
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
                </div>
                    <center>
                        <a href="<?= base_url(''); ?>project/all" class="btn btn-success">Lihat proyek lainnya</a>
                    </center>
                </div>
            </div>
        </section>

        <section id="clickbait" class="section-w clearfix">
            <div class="container">
                <div class="col-lg-10">
                    Buat project Anda sekarang juga dan berkolaborasi dengan sahabat diaspora lainnya.
                </div>
                <div class="col-lg-2">
                    <?php if(!$lgn){ ?>
                    <a href="<?= base_url(''); ?>register" class="btn">Mulai Proyek</a>
                    <?php } else { ?>
                    <a href="<?= base_url(''); ?>project/form" class="btn">Mulai Proyek</a>
                    <?php } ?>
                </div>
            </div>
        </section>
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h4><b>Tentang Kami</b></h4>
                        <ul>
                            <li><a href="<?= base_url(''); ?>Apaitu">Apa itu Diaspora Project?</a></li>
                            <li><a href="<?= base_url(''); ?>Carakerja">Cara Kerja</a></li>
                    	</ul>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h4><b>Menggalang Dana</b></h4>
                        <ul>
                            <li><a href="<?=base_url('')?>register">Buat Project</a></li>
                            <li><a href="<?=base_url('')?>Syaratketentuan">Syarat dan Ketentuan</a></li>
                            <li><a href="<?=base_url('')?>Kebijakanprivasi">Kebijakan Privasi</a></li>
                            <!--li><a href="<?=base_url('')?>Dukungan">Dukungan</a></li-->
                        </ul>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h4><b>Kontak Kami</b> (Yayasan Diaspora Berdaya Bersama)</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Indonesia</h6>
                                <p class="col-xs-12">
                                    Jl. HR Rasuna Said, Karet Kuningan, Setiabudi Jakarta Selatan 12940
                                    </br>
                                    +6221 37530629
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6>Korea Selatan</h6>
                                <p class="col-xs-12">
                                    서울특별시 강남구 역삼로17길 60, 3층 316-7호 (역삼동)
                                    </br>
                                    +8210 59525 2349
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <div class="copyrights">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>Copyright <?php echo date('Y');?> ©  Diaspora Project | All Rights Reserved</p>
                </div><!-- end col-lg-4 -->
            </div><!-- end container -->
        </div><!-- end copyrights -->

        <div class="dmtop">Scroll to Top</div>
    </div><!-- end wrapper -->
	
	<!-- Modal HTML embedded directly into document -->
	<form action="register" method="post" class="regis_form modal" id="register" style="display:none;">
	  <h3>Registration</h3>
	  <p><label>Username:</label><input type="text" name="usernamereg" class="txt" required/></p>
	  <p><label>Email:</label><input type="text" name="emailreg" class="txt" required/></p>
	  <p><label>Password:</label><input type="password" name="passwordreg" class="txt" required/></p>
	  <p><input type="submit" value="Submit" class="sb"/></p>
	</form>
	
	<!-- Modal HTML embedded directly into document -->
	<div class="forgot_pass modal" id="forgotpassword"  style="display:none;">
		<form action="auth/forgot_password" method="post">
		  <h3>Forgot Password</h3>
		  <p><label>Username:</label><input type="text" name="identity" class="txt" placeholder="Input your username" required/></p>
		  <p><input type="submit" value="Submit" class="sb"/></p>
		</form>
	</div>
    
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
	
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="<?= base_url('assets/rs-plugin/js/jquery.themepunch.tools.min.js') ?>"></script>   
    <script type="text/javascript" src="<?= base_url('assets/rs-plugin/js/jquery.themepunch.revolution.min.js') ?>"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.tp-banner').show().revolution(
                {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:470,
                hideThumbs:200,
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:4,
                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview4",
                touchenabled:"on",
                onHoverStop:"on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax:"scroll",
                parallaxBgFreeze:"on",
                parallaxLevels:[10,20,30,40,50,60,70,80,90,100],
                keyboardNavigation:"off",
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,
                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,
                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                shadow:0,
                fullWidth:"off",
                fullScreen:"off",
                spinner:"spinner4",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",                       
                forceFullWidth:"off",                        
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,                      
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0    
            });                           
        }); //ready
    </script>
	
    <!-- SuperSlides SCRIPTS  -->
    <script src="<?= base_url('assets/js/jquery.superslides.min.js') ?>"></script>   
    <script>
    (function($) {
        $('.general-section').height();
    })(jQuery);
    </script>
	
	<script src="<?= base_url('assets/js/jquery.modal.js') ?>"></script>

</body>
</html>