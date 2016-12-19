<div class="row login">
    <div class="container">
    	<form action="auth/login" class="row" method="post">
    		<div class="row">
	    		<div class="col-md-6 col-md-offset-3">
	    			<h3 class="col-xs-12">Masuk</h3>
	    		</div>
	    	</div>
			<?php if($message){?>
				<div id="infoMessage" class="col-md-6 col-md-offset-3 alert alert-danger"><?=$message;?></div>
			<?php } ?>
			<div class="form-box col-md-6 col-md-offset-3">
				<div class="form-group">
					<?php echo form_input($identity, '', "required='required' placeholder='Username' class='form-control'");?>
			  	</div>
			  	<div class="form-group">
					<?php echo form_input($password, '', "required='required' placeholder='Password' class='form-control'");?>
			  	</div>
			  	<div class="form-group">
					<?php echo form_checkbox('remember', '1', FALSE, 'id="roundedTwo"');?>
					<label for="roundedTwo">Ingat Saya</label>
			  	</div>
			  	<div class="form-group">
			  		<?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-success"');?>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 text-right">
			  			<a  href="#forgotpassword" rel="modal:open"><?php echo lang('login_forgot_password');?></a>
			  		</div>
		  		</div>
		  	</div>
		</form>
	</div>
</div>