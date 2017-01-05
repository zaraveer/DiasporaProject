    <div class="container">
    	<div class="section-title text-center dm">
	        <h3><b>New Project</b></h3>
	        <!-- <p class="lead">Platform Ruang Berkolaborasi Sesama Diaspora</p> -->
	    </div>
		
		<?php if(!empty($user->first_name) || !empty($user->last_name) || !empty($user->dob) || !empty($user->gender) || !empty($user->address) || !empty($user->country) || !empty($user->province) || !empty($user->city)){ ?>
      <div class="row profile-wrapper dm">
        
					<form id="wizard-basic2" class="wizard-style2 form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo site_url('project/submit'); ?>" onsubmit="return postForm()">
						<input type="hidden" name="action" value="<?php echo $action;?>" required />
						<h3>Project Information <small>Enter your project initial information.</small></h3>
						<div>
						<?php if($action == 'update') { ?>
						  <input type="hidden" name="idproj" value="<?php echo $dproject->id_project;?>"/>
						<?php } ?>
						  <input type="hidden" name="iduser" class="form-control" value="<?php echo $id;?>" required />
						  <div class="form-group mt10">
							<label class="col-sm-2 control-label"><span class="text-danger">*</span> Project Name:</label>
							<div class="col-sm-8">
							  <input name="projectname" type="text" class="form-control required" placeholder="Enter your project name" value="<?php echo isset($dproject->name_project) ? set_value("Project Name", $dproject->name_project) : set_value("Project Name"); ?>">
							</div>
						  </div>
						  <div class="form-group">
							<label class="col-sm-2 control-label">Category <span class="text-danger">*</span></label>
							<div class="col-sm-8">
							  <?php echo form_dropdown("category",$category, isset($dproject->category) ? set_value("Category", $dproject->category) : set_value("Category") ,"id='category' class='select2 category' style='width: 100%' data-placeholder='Choose One' required='required'"); ?>
							  <label class="error" for="id_category"></label>
							</div>
						  </div>
						  <div class="form-group">
							<label class="col-sm-2 control-label">Date from<span class="text-danger">*</span></label>
							<div class="col-sm-3">
							  <div class="input-group">
								<input type="text" name="datefrom" class="form-control required" placeholder="dd/mm/yyyy" id="datepickerfrom" value="<?php echo isset($dproject->datefrom) ? set_value("Date From", $dproject->datefrom) : set_value("Date From"); ?>">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							  </div>
							</div>
							<label class="col-sm-1 control-label">Date to<span class="text-danger">*</span></label>
							<div class="col-sm-3">
							  <div class="input-group">
								<input type="text" name="dateto" class="form-control required" placeholder="dd/mm/yyyy" id="datepickerto" value="<?php echo isset($dproject->dateto) ? set_value("dateto", $dproject->dateto) : set_value("dateto"); ?>">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							  </div>
							</div>
						  </div>
						  <div class="form-group">
							<label class="col-sm-2 control-label"><span class="text-danger">*</span> Cost:</label>
							<div class="col-sm-8">
							  <div class="input-group mb15">
								<span class="input-group-addon">Won</span>
								<input id="am" placeholder="Project cost" class="form-control required" type="number" name="cost" value="<?php echo isset($dproject->cost) ? set_value("Cost", $dproject->cost) : set_value("Cost"); ?>">
							  </div>
							</div>
						  </div>

								  <div class="form-group">
									<label class="col-sm-2 control-label">Country <span class="text-danger">*</span></label>
									<div class="col-sm-3">
										<?php 
											if($action == 'update') {
												echo form_dropdown("country", array(''=> '', 'indonesia'  => 'Indonesia', 'korsel' => 'Korea Selatan'), htmlspecialchars($dproject->country,ENT_QUOTES,'UTF-8'),"id='country' class='select2 country' style='width: 100%' data-placeholder='Choose One' required='required'");
												}else{
												echo form_dropdown("country", array(''=> '', 'indonesia'  => 'Indonesia', 'korsel' => 'Korea Selatan'),'','id="city" class="select2" style="width: 100%" data-placeholder="Choose One" required="required"');
											}
											echo "Please select 'korsel' in province if you pick Korea Selatan";
										?>
									  <label class="error" for="id_country"></label>
									</div>
									<label class="col-sm-2 control-label">Province <span class="text-danger">*</span></label>
									<div class="col-sm-3">
							  			<?php //echo form_dropdown("province",$province, "","id='province' class='select2 province' style='width: 100%' data-placeholder='Choose One' required='required'"); ?>
							  				<?php 
											if($action == 'update') {
												echo form_dropdown("province",$province, isset($dproject->province) ? set_value("Province", $dproject->province) : set_value("Province"),"id='province' class='select2 province' style='width: 100%' data-placeholder='Choose One' required='required'");
											}else{
												echo form_dropdown("province",$province,'','id="province" class="select2 province" style="width: 100%" data-placeholder="Choose One" required="required"');
											}
										?>
							  		<label class="error" for="id_province"></label>
									</div>
								  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">City <span class="text-danger">*</span></label>
							<div class="col-sm-8" id="ajcity">
								<?php //echo form_dropdown("city",array(''=>''),'','id="city" class="select2" style="width: 100%" data-placeholder="Choose One" required="required" disabled'); ?>
								<?php 
									if($action == 'update') {
										echo form_dropdown("city",$city, isset($dproject->city) ? set_value("City", $dproject->city) : set_value("City"),"id='city' class='select2' style='width: 100%' data-placeholder='Choose One' required='required'");
									}else{
										echo form_dropdown("city",array(''=>''),'','id="city" class="select2" style="width: 100%" data-placeholder="Choose One" required="required"');
									}
								?>
								<label class="error" for="flowers"></label>
							</div>
						  </div>
						</div>


						
						<h3>Project Purpose <small>Fill your project summary, purpose, and reason.</small></h3>
						<div>
							<div class="form-group mt10">
								<label class="col-sm-2 control-label"><span class="text-danger">*</span> Summary:</label>
								<div class="col-sm-8">
								  <textarea name="projectsummary" type="text" class="form-control required" placeholder="Summary"><?php echo isset($dproject->summary) ? set_value("Summary", $dproject->summary) : set_value("Summary"); ?></textarea>
								</div>
							</div>
							<!-- 
							<div class="form-group">
								<label class="col-sm-2 control-label"><span class="text-danger">*</span> Objective:</label>
								<div class="col-sm-8">
								  <textarea name="projectobjective" type="text" class="form-control" placeholder="Objective"><?php echo isset($dproject->objective) ? set_value("Objective", $dproject->objective) : set_value("Objective"); ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"><span class="text-danger">*</span> Main Reason:</label>
								<div class="col-sm-8">
								  <textarea name="projectreason" type="text" class="form-control" placeholder="Main Reason"><?php echo isset($dproject->reason) ? set_value("Reason", $dproject->reason) : set_value("Reason"); ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"><span class="text-danger">*</span> Goal Measurement:</label>
								<div class="col-sm-8">
								  <textarea name="projectgoal" type="text" class="form-control" placeholder="Goal Measurement"><?php echo isset($dproject->goal) ? set_value("Goal", $dproject->goal) : set_value("Goal"); ?></textarea>
								</div>
							</div>
							-->
						</div>
						
						<h3>Project Details <small>Enter your project detail and confirmation</small></h3>
						<div>
						  <?php /* <textarea id="wysiwyg" name="projectdetail" placeholder="Enter text here..." class="form-control" rows="10"><?php echo isset($dproject->details) ? set_value("Details", $dproject->details) : set_value("Details"); ?></textarea> */ ?>
						  <textarea id="summernote" name="projectdetail" placeholder="Enter text here..." class="form-control" rows="10"><?php echo isset($dproject->details) ? set_value("Details", $dproject->details) : set_value("Details"); ?></textarea>
						  
						  <?php if($action == 'update') { ?>
							<div style="line-height: 40px;">Update Project Picture? <input type="checkbox" name="potonya" id="isAgeSelected" value="sip"/></div>
							<div id="txtAge" style="display:none">
								<hr>
								  <h3>Project Photo : </h3><input type="file" name="fileproject"/>
								<hr>
							</div>
						  <?php }else{ ?>
							    <hr>
								  <h3>Project Photo : </h3><input type="file" name="fileproject"/>
								<hr>
						  <?php } ?>
						  
						   <p>I hereby responsible for all about this project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et nulla lacus. Etiam vel ex odio. Donec tellus est, pharetra ut faucibus sit amet, iaculis in quam. Sed a luctus ligula. Phasellus id ullamcorper purus, eget sagittis nisi. Fusce arcu dui, laoreet eget orci nec, ornare consequat urna. Nullam mattis suscipit iaculis.</p>
						  <hr>
						</div>
						
					</form>

        
      </div><!-- row -->
		<?php }else{ ?>
			<div class="panel">
				<div class="panel-body">
					Data Anda Belum Lengkap, silakan isi dan lengkapi <a href="<?= base_url(); ?>profile">Profil</a> anda!
				</div>
			</div>
		<?php } ?>
    </div><!-- contentpanel -->