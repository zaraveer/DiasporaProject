<div class="login-box">
        <div class="container">
              <div class="sbm"><a href="<?= base_url(''); ?>login" class="btn btn-success btn-quirk" style="font-size:26px; padding:6px 20px;">Masuk</a></div>
              <div class="sbm"><a href="<?= base_url(''); ?>register" class="btn btn-success btn-quirk" style="font-size:26px; padding:6px 20px;">Daftar</a></div>
        </div>

		<div class="container">
		<div id="infoMessage"><?php echo $message;?></div>
        <div id="infoMessage"><h2>Masuk</h2></div>
		<?php echo form_open("auth/login");?>
			  <div class="input">
				<?php //echo lang('login_identity_label', 'identity');?>
				<span><i class="fa fa-user"></i></span>
				<?php echo form_input($identity, '', "required='required' placeholder='Username'");?>
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
			<p class="forgot"><a  href="#forgotpassword" rel="modal:open"><?php echo lang('login_forgot_password');?></a></p>
		</div>
</div><!-- end login-box -->