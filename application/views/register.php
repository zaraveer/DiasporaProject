<div class="login-box">
        <div class="container">
              <div class="sbm"><a href="<?= base_url(''); ?>login" class="btn btn-success btn-quirk" style="font-size:26px; padding:6px 20px;">Masuk</a></div>
              <div class="sbm"><a href="<?= base_url(''); ?>register" class="btn btn-success btn-quirk" style="font-size:26px; padding:6px 20px;">Daftar</a></div>
        </div>

        <div class="container">
        <div id="infoMessage"><?php echo $message;?></div>
        <div id="infoMessage"><h2>Pendaftaran</h2></div>
        <?php echo form_open("register");?>
              <div class="input">
                <?php //echo lang('login_identity_label', 'identity');?>
                <span><i class="fa fa-user"></i></span>
                <?php echo form_input($usernamereg, '', "required='required' placeholder='Username'");?>
              </div>
                <div class="input">
                <?php //echo lang('login_identity_label', 'identity');?>
                <span><i class="fa fa-user"></i></span>
                <?php echo form_input($emailreg, '', "required='required' placeholder='Email'");?>
              </div>
              <div class="input">
                <?php //echo lang('login_password_label', 'password');?>
                <span><i class="fa fa-lock"></i></span>
                <?php echo form_input($passwordreg, '', "required='required' placeholder='Password'");?>
              </div>
              <div class="sbm"><?php echo form_submit('submit', 'Daftar');?></div>
            <?php echo form_close();?>
        </div>
</div><!-- end login-box -->