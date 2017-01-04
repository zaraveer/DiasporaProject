<div class="row login">
  <div class="container">
    <form class="row" method="post">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h3 class="col-xs-12">Pendaftaran</h3>
        </div>
      </div>
      <?php if($message){?>
        <div id="infoMessage" class="col-md-6 col-md-offset-3 alert alert-danger"><?=$message;?></div>
      <?php } ?>
      <div class="form-box col-md-6 col-md-offset-3">
        <div class="form-group">
          <?php echo form_input($usernamereg, '', "required='required' placeholder='Username' class='form-control'");?>
        </div>
        <div class="form-group">
          <?php echo form_input($emailreg, '', "required='required' placeholder='Email' class='form-control'");?>
        </div>
        <div class="form-group">          <?php echo form_input($passwordreg, '', "required='required' placeholder='Password' class='form-control'");?>
        </div>
        <div class="form-group">
          <?php echo form_submit('submit', 'Daftar', 'class="btn btn-success"');?>
        </div>
      </div>
    </form>
  </div>
</div>