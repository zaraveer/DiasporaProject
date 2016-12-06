  <div class="mainpanel">

    <!--<div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard</h2>
    </div>-->

    <div class="contentpanel">

      <div class="row profile-wrapper">
        <div class="col-md-12 col-lg-12 dash-left">
			<div class="col-md-12 col-lg-12 profile-none">
				<div class="profile-right-body">
					<?php if(isset($message)) {?>
					  <div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<?php echo $message;?>
					  </div>
					<?php } ?>
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs nav-justified nav-line">
					<li <?php if($profile == "edit") { echo "class='active'"; }else if(empty($profile)){ echo "class='active'"; } ?>><a href="#main" data-toggle="tab"><strong>Edit Profil</strong></a></li>
					<li <?php if($profile == "about") { echo "class='active'"; } ?>><a href="#about" data-toggle="tab"><strong>Tentang Saya</strong></a></li>
					<li <?php if($profile == "picture") { echo "class='active'"; } ?>><a href="#activity" data-toggle="tab"><strong>Foto Profil</strong></a></li>
					<li <?php if($profile == "password") { echo "class='active'"; } ?>><a href="#photos" data-toggle="tab"><strong>Ganti kata kunci</strong></a></li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
					<div class="tab-pane <?php if($profile == "edit") { echo "active"; }else if(empty($profile)){ echo "active"; } ?>" id="main">
						`<div class="col-md-12 col-lg-12">
						<form id="basicForm" method="post" action="profile/update" class="form-horizontal">
						<input type="hidden" name="iduser" class="form-control" value="<?php echo htmlspecialchars($user->id,ENT_QUOTES,'UTF-8');?>" required />
						<div class="col-md-6">
						  <div class="panel">
							  <div class="panel-body">
								  <div class="form-group">
									<label class="col-sm-3 control-label">Nama Pengguna <span class="text-danger">*</span></label>
									<div class="col-sm-8">
									  <input type="text" name="username" class="form-control" placeholder="Tuliskan nama pengguna..." value="<?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?>" required />
									</div>
								  </div>
								  
								  <div class="form-group">
									<label class="col-sm-3 control-label">Nama awal <span class="text-danger">*</span></label>
									<div class="col-sm-8">
									  <input type="text" name="first_name" class="form-control" placeholder="Tuliskan nama awal Anda..." value="<?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?>" required />
									</div>
								  </div>
								  
								  <div class="form-group">
									<label class="col-sm-3 control-label">Nama akhir <span class="text-danger">*</span></label>
									<div class="col-sm-8">
									  <input type="text" name="last_name" class="form-control" placeholder="Tuliskan nama akhir Anda..." value="<?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?>" required />
									</div>
								  </div>

								  <div class="form-group">
									<label class="col-sm-3 control-label">Email <span class="text-danger">*</span></label>
									<div class="col-sm-8">
									  <input type="email" name="email" class="form-control" placeholder="Tuliskan alamat email Anda..." value="<?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?>" required />
									</div>
								  </div>

								  <div class="form-group">
									<label class="col-sm-3 control-label">No. Telepon</label>
									<div class="col-sm-8">
									  <input type="number" name="phone" class="form-control" placeholder="Masukkan no. telepon Anda..." value="<?php echo htmlspecialchars($user->phone,ENT_QUOTES,'UTF-8');?>"/>
									</div>
								  </div>

								  <div class="form-group">
									<label class="col-sm-3 control-label">Tanggal lahir <span class="text-danger">*</span></label>
									<div class="col-sm-8">
									  <div class="input-group">
										<input type="text" name="dob" class="form-control" placeholder="dd/mm/yyyy" id="datepicker" value="<?php echo htmlspecialchars($user->dob,ENT_QUOTES,'UTF-8');?>">
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									  </div>
									  <div class="mb20 invisible"></div>
									</div>
								  </div>
								  
								  <div class="form-group">
									<label class="col-sm-3 control-label">Jenis Kelamin<span class="text-danger">*</span></label>
									<div class="col-sm-8">
										<label class="rdiobox">
											<input name="gender" value="M" type="radio" <?php if($user->gender == 'M') echo 'checked'; ?>>
											<span>Laki-laki</span>
										</label>
										<label class="rdiobox">
											<input name="gender" value="W" type="radio" <?php if($user->gender == 'W') echo 'checked'; ?>>
											<span>Perempuan</span>
										</label>
									</div>
								  </div>

							  </div><!-- panel-body -->
						  </div><!-- panel -->

						</div><!-- col-md-6 -->
						<div class="col-md-6">
						  <div class="panel">
							  <div class="panel-body">
								  <div class="form-group">
									<label class="col-sm-3 control-label">Pekerjaan <span class="text-danger">*</span></label>
									<div class="col-sm-8">
									  <input type="text" name="profession" class="form-control" placeholder="Tulis pekerjaan Anda..." value="<?php echo htmlspecialchars($user->profession,ENT_QUOTES,'UTF-8');?>" required />
									</div>
								  </div>
								  
								  <div class="form-group">
									<label class="col-sm-3 control-label">Alamat <span class="text-danger">*</span></label>
									<div class="col-sm-8">
									  <input type="text" name="address" class="form-control" placeholder="Tuliskan alamat Anda..." value="<?php echo htmlspecialchars($user->address,ENT_QUOTES,'UTF-8');?>" required />
									</div>
								  </div>

								  <div class="form-group">
									<label class="col-sm-3 control-label">Negara <span class="text-danger">*</span></label>
									<div class="col-sm-8">
									  <?php echo form_dropdown("country", array(''=> '', 'indonesia'  => 'Indonesia', 'korsel' => 'Korea Selatan'), htmlspecialchars($user->country,ENT_QUOTES,'UTF-8'),"id='country' class='select2 country' style='width: 100%' data-placeholder='Choose One' required='required'"); ?>
									  <label class="error" for="id_country"></label>
									</div>
								  </div>
								  
								  <div class="form-group" id="indo" <?php if($user->country == "korsel"){ echo "style='display:none'"; } ?>>
									<label class="col-sm-3 control-label">Provinsi <span class="text-danger">*</span></label>
									<div class="col-sm-8" id="ajprovince">
										<?php 
											if(htmlspecialchars($user->province,ENT_QUOTES,'UTF-8') != "") {
												echo form_dropdown("province",$province, htmlspecialchars($user->province,ENT_QUOTES,'UTF-8'),"id='city' class='select2 province' style='width: 100%' data-placeholder='Choose One' required='required'");
											}else{
												echo form_dropdown("province",array(''=>''),'','id="province" class="select2 province" style="width: 100%" data-placeholder="Choose One" required="required" disabled');
											}
										?>
										<label class="error" for="flowers"></label>
									</div>
								  </div>

								  <div class="form-group">
									<label class="col-sm-3 control-label">Kota <span class="text-danger">*</span></label>
									<div class="col-sm-8" id="ajcity">
										<?php 
											if(htmlspecialchars($user->city,ENT_QUOTES,'UTF-8') != "") {
												echo form_dropdown("city",$city, htmlspecialchars($user->city,ENT_QUOTES,'UTF-8'),"id='city' class='select2' style='width: 100%' data-placeholder='Choose One' required='required'");
											}else{
												echo form_dropdown("city",array(''=>''),'','id="city" class="select2" style="width: 100%" data-placeholder="Choose One" required="required" disabled');
											}
										?>
										<label class="error" for="flowers"></label>
									</div>
								  </div>

								  <hr>

								  <div id="logs">
								  </div>
								  <div class="row">
									<div class="col-sm-9 col-sm-offset-3">
									  <button class="btn btn-success btn-quirk btn-wide mr5">Lanjutkan</button>
									</div>
								  </div>

							  </div><!-- panel-body -->
						  </div><!-- panel -->

						</div><!-- col-md-6 -->
						</form>
						</div><!-- col-md-12 -->
					</div>
					<div class="tab-pane <?php if($profile == "about") { echo "active"; } ?>" id="about">
					  <div class="panel">
						<div class="panel-body">
						<form id="basicForm" action="profile/updateabout" method="post" class="form-horizontal">
						  <input type="hidden" name="iduser" class="form-control" value="<?php echo htmlspecialchars($user->id,ENT_QUOTES,'UTF-8');?>" required />
						  <textarea id="wysiwyg" name="aboutme" placeholder="Enter text here..." class="form-control" rows="10"><?php echo htmlspecialchars($user->aboutme,ENT_QUOTES,'UTF-8');?></textarea>
						  <hr>
						  <div class="row">
							<div class="col-sm-12">
							  <button class="btn btn-success btn-quirk btn-wide mr5">Lanjutkan</button>
							  <button type="reset" class="btn btn-quirk btn-wide btn-default">Ulang</button>
							</div>
						  </div>
						</form>
						</div>
					  </div>
					</div>
					<div class="tab-pane <?php if($profile == "picture") { echo "active"; } ?>" id="activity">
						<div class="col-md-12 col-lg-12">
						<div class="col-md-4">
						  <div class="panel">
							  <div class="panel-body">
								  <div class="form-group" id="previews">
									  <!--h4 class="panel-title">Foto profil</h4-->
									  <span class="preview"><img data-dz-thumbnail /></span>
									  <p class="photopp">
										<img src="<?= base_url(); ?>assets/pp/<?= $photo; ?>" width="250"/>
									  </p>
								  </div>
							  </div><!-- panel-body -->
						  </div><!-- panel -->

						</div><!-- col-md-6 -->
						<div class="col-md-8">
						  <div class="panel">
							  <div class="panel-body">
								<div class="form-group">
								  <p>Tarik gambar untuk mengupload</p>
								  <br />
								  <form method="post" id="dzupload" class="dropzone" name="imgpp" enctype="multipart/form-data">
									<input type="hidden" name="iduser" class="form-control" value="<?php echo $id; ?>" required />
									<div class="fallback">
									  <input name="file" type="file" />
									</div>
								  </form>
								</div>
								<hr>
								<div class="dz-success"></div>
								<div class="dz-error"></div>
								<!--div class="row">
								  <button id="btnsubmit" class="btn btn-success btn-quirk btn-wide mr5">Lanjutkan</button>
								</div-->
							  </div><!-- panel-body -->
						  </div><!-- panel -->

						</div><!-- col-md-6 -->
						</div><!-- col-md-12 -->
					</div><!-- tab-pane -->
					<div class="tab-pane <?php if($profile == "password") { echo "active"; } ?>" id="photos">
					  <form id="basicForm" action="auth/change_password" method="post" class="form-horizontal">
						<div class="col-md-6">
						  <div class="panel">
							  <div class="panel-heading">
								  <h4 class="panel-title">Ganti kata kunci</h4>
							  </div>
							  <div class="panel-body">
								  <div class="form-group">
									<label class="col-sm-4 control-label">Kata kunci lama <span class="text-danger">*</span></label>
									<div class="col-sm-8">
									  <input type="password" name="old" class="form-control" placeholder="Type your password..." required />
									</div>
								  </div>
								  
								  <div class="form-group">
									<label class="col-sm-4 control-label">Kata kunci baru <span class="text-danger">*</span></label>
									<div class="col-sm-8">
									  <input type="password" name="new" class="form-control" placeholder="Type your password..." required />
									</div>
								  </div>

								  <div class="form-group">
									<label class="col-sm-4 control-label">Konfirmasi ulang kata kunci <span class="text-danger">*</span></label>
									<div class="col-sm-8">
									  <input type="password" name="new_confirm" class="form-control" placeholder="re-enter your password..." required />
									</div>
								  </div>
								  <hr/>
								  <div class="row">
									<div class="col-sm-9 col-sm-offset-3">
									  <button class="btn btn-success btn-quirk btn-wide mr5">Lanjutkan</button>
									</div>
								  </div>
							  </div>
						  </div>
						</div>
					  </form>
					</div>
				</div>
			  </div>
			</div><!-- col-md-12 -->
        
      </div><!-- row -->

    </div><!-- contentpanel -->

  </div><!-- mainpanel -->