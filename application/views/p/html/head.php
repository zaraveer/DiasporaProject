<!--**view for head*-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Sahabat Diaspora</title>

    <!-- Favicons
      ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

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
    
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css'); ?>/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/css/custom.css">
    
    <script src="<?= base_url('assets/dashboard'); ?>/lib/modernizr/modernizr.js"></script>
    <script src="<?= base_url('assets/dashboard'); ?>/js/prefixfree.min.js"></script>

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