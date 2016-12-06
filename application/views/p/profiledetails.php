<div class="mainpanel" <?php if(!$this->ion_auth->logged_in()){ echo "style='margin-left:0'"; } ?>>
	<div class="contentpanel">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title" style="float: left;"><a href="javascript:history.back()"><b><i class="fa fa-arrow-left"></i></b></a></h3>
			  <h3 class="panel-title" style="text-align:center"><b>Detail Profil Pengguna</b></h3>
			</div>
			<div class="panel-body">
				<div class="col-md-4 col-lg-4"><img src="<?= base_url('assets/pp'); ?>/<?php echo htmlspecialchars($duser->photo,ENT_QUOTES,'UTF-8');?>" style="width:100%;"/></div>
				<div class="col-md-8 col-lg-8">
					<div class="terkumpul">
						<h1><?php echo htmlspecialchars($duser->first_name." ".$duser->last_name,ENT_QUOTES,'UTF-8');?></h1>
						<h3><?php echo htmlspecialchars($duser->profession,ENT_QUOTES,'UTF-8'); ?></h3>
						<h4><?php echo htmlspecialchars($duser->address." ".$duser->name_city." ".$duser->name_province,ENT_QUOTES,'UTF-8'); ?></h4>
					</div>
					<h4><?php echo htmlspecialchars($duser->aboutme,ENT_QUOTES,'UTF-8'); ?></h4>
				</div>
			</div><!-- panel-body -->
		</div>
	</div>
</div>