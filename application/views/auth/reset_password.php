<html>
<head>
<title>Diaspora Dashboard</title>
<link rel="stylesheet" href="<?= base_url('assets/dashboard'); ?>/css/quirk.css">
</head>
<body>
<div class="headerpanel">

    <div class="logopanel" style="margin-left: 0px;">
      <h2><a href="home"><img src="http://diaspora.esharamady.com/assets/images/ddlogo.png" width="140px"></a></h2>
    </div><!-- logopanel -->
    <div class="headerbar"><h1 style="color:#FFF;"><?php echo lang('reset_password_heading');?></h1></div>
  
</div>
<center style="margin:100px auto; min-width: 240px; max-width: 350px; width: auto;">
<div id="infoMessage" style=""><?php echo $message;?></div>

<?php echo form_open('auth/reset_password/' . $code);?>

<div class="form-group">
	<p>
		<label for="new_password" style="font-size:18px;"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
		<?php echo form_input($new_password);?>
	</p>
</div>
<div class="form-group">
	<p>
		<label style="font-size:18px;"><?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?></label> <br />
		<?php echo form_input($new_password_confirm);?>
	</p>
</div>
	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

	<p><?php echo form_submit('submit', lang('reset_password_submit_btn'), 'class="btn btn-primary btn-quirk"');?></p>

<?php echo form_close();?>
</center>
</body>
</html>