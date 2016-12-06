<!--**view for head*-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="<?= base_url('assets/dashboard'); ?>/images/favicon.png" type="image/png">-->

  <title>Diaspora Dashboard</title>

  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/Hover/hover.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/weather-icons/css/weather-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/jquery-toggles/toggles-full.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/jquery.steps/jquery.steps.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/ionicons/css/ionicons.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/jquery-toggles/toggles-full.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/morrisjs/morris.css">
  
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/jquery-ui/jquery-ui.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/select2/select2.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/dropzone/dropzone.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/lib/summernote/summernote.css">
  
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/css/quirk.css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/css/custom-login.css">
  
  <script src="<?= base_url('assets/dashboard'); ?>/lib/modernizr/modernizr.js"></script>
  <script src="<?= base_url('assets/dashboard'); ?>/js/prefixfree.min.js"></script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="<?= base_url('assets/dashboard'); ?>/lib/html5shiv/html5shiv.js"></script>
  <script src="<?= base_url('assets/dashboard'); ?>/lib/respond/respond.src.js"></script>
  <![endif]<?php echo $this->router->fetch_method();; ?>-->

  <!-- athoya edit custom css-->
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
	if($this->router->fetch_class() == 'project' && $this->router->fetch_method() == 'details') {
		//if($_ci_view == 'p/projectdetails'){
  ?>
	<meta property='og:title' content='<?php echo $dproject->name_project; ?>' />
	<meta property="og:image" content=" />
	<meta property="og:description" content=""/>
	<meta property='og:url' content='' />
  <?php } ?>
</head>