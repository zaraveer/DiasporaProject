  <div class="mainpanel">

    <!--<div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard</h2>
    </div>-->

    <div class="contentpanel">
	<div class="panel panel-primary">
		<div class="panel-heading">
		  <h3 class="panel-title" style="text-align:center"><b>Dashboard</b></h3>
		</div>
	  <div class="panel-body">
      <div class="row profile-wrapper">
        <div class="col-md-12 col-lg-12 dash-left">
			<div class="col-md-12 col-lg-12 people-list">
				<div class="people-options clearfix">
				  <!--div class="btn-group pull-right people-pager">
					<button class="btn btn-default-active"><i class="fa fa-th"></i></button>
					<a href="people-directory.html" class="btn btn-default"><i class="fa fa-th-list"></i></a>
				  </div-->
				  <form id="basicForm" method="post" action="dashboard" class="f
				  orm-horizontal">
					<div class="pull-left searchfrm col-md-3 col-lg-3">
						<input type="text" name="katakunci" class="form-control" placeholder="Kata Kunci"/>
					</div>
					<div class="pull-left searchfrm col-md-3 col-lg-3">
						<?php echo form_dropdown("category", $category, "","id='category' class='select2 category' style='width: 100%' data-placeholder='Kategori'"); ?>
					</div>
					<div class="pull-left searchfrm col-md-2 col-lg-2">
						<button class="btn btn-success btn-quirk btn-wide mr5">Lanjutkan</button>
					</div>
				  </form>

				  <div class="btn-group pull-right people-pager">
					<button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
					<button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
				  </div>
				  <span class="people-count pull-right">Menampilkan <strong>1-10</strong> dari <strong>34,404</strong> jumlah pengguna</span>
				</div><!-- people-options -->
				
				
				<div class="srcq">
					<?php if(!empty($kunc)){ ?>
					<span style="margin:10px;line-height:35px;">Kata kunci : "<?php echo $kunc; ?>"</span>
					<?php } ?>
					<?php if(!empty($kate)){ ?>
					<span style="margin:10px;line-height:35px;">Kategori : "<?php echo $kate; ?>"</span>
					<?php } ?>
				</div>
				<div class="row">
							
				<?php foreach($results as $res): ?>
				  <div class="col-md-4 col-lg-4">
					<div class="panel panel-profile grid-view">
					  <div class="panel-heading">
						<div class="text-center">
						  <!--a href="#" class="panel-profile-photo">
							<img class="img-circle" src="../images/photos/user1.png" alt="">
						  </a-->
						  <h4 class="panel-profile-name">
							<?php $s_id = str_pad( $res->id, 8, "0", STR_PAD_LEFT ); ?>
							<a href="<?= base_url(''); ?>project/details/<?= $res->slug; ?>/<?= $s_id; ?>">
								<?php echo htmlspecialchars($res->name_project,ENT_QUOTES,'UTF-8');?>
							</a>
						  </h4>
						 
										<i class="glyphicon glyphicon-user"></i>
										<?php $p_id = str_pad( $res->id_user, 8, "0", STR_PAD_LEFT ); ?>
										By <a href="<?= base_url(''); ?>profile/details/<?= $p_id; ?>">
											<?php echo htmlspecialchars($res->username,ENT_QUOTES,'UTF-8');?>
										</a>
						</div>
						<!--ul class="panel-options">
						  <li><a class="tooltips" href="" data-toggle="tooltip" title="View Options"><i class="glyphicon glyphicon-option-vertical"></i></a></li>
						</ul-->
					  </div><!-- panel-heading -->
					  <div class="panel-body people-info">

						<div class="info-group">
						  <label>Kategori</label>
						  <?php echo htmlspecialchars($res->name_category,ENT_QUOTES,'UTF-8');?>
						</div>
						<div class="info-group">
						  <label>Lokasi</label>
						  <?php echo htmlspecialchars($res->name_province,ENT_QUOTES,'UTF-8');?>
						</div>
						<div class="info-group">
						  <label>Deskripsi</label>
						  <p class="desc"><?php echo htmlspecialchars($res->details,ENT_QUOTES,'UTF-8');?></p>
						</div>
						<div class="row">
						  <div class="col-xs-6">
							<div class="info-group">
							  <label>Biaya</label>
							  <h4><?php echo htmlspecialchars($res->cost,ENT_QUOTES,'UTF-8');?></h4>
							</div>
						  </div>
						  <div class="col-xs-6">
							<div class="info-group">
							  <label>Sisa Waktu</label>
							  <h4>
								<?php 
									$to = explode('/',$res->dateto);
									$dateto = $to[2]."-".$to[0]."-".$to[1];
									
									$date=strtotime($dateto);//Converted to a PHP date (a second count)

									$diff=$date-time();//time returns current time in seconds
									$days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day);
									
									if($days <= 0){ 
										echo "$days hari";
									}else{
										echo "$days hari";
									}
								?>
							  </h4>
							</div>
						  </div>
						</div>

						<div class="info-group last">
							<?php $i = 0;
								foreach($money as $m){ 
									if($res->id_project == $m->id_project){
										$i = $i + $m->value;
									} 
								} 
								
								$per = ($i / $res->cost) * 100; 
								$aa = round($per, 1); ?>
								
							<label>Proses : <?= $aa; ?>%</label>
						 
						 <div class="progress progress-striped">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?= $aa; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php if($aa > 100){ echo "100"; }else{ echo $aa; }  ?>%">
							  <span class="sr-only">
							  <?php if($aa > 32){ echo $aa."% Complete"; } ?></span>
							</div>
						 </div>
						  
						</div>
									
						<div class="info-group" style="text-align:center">
							<div class="btn-group">
							  <a href="<?= base_url(''); ?>project/donate/<?= $res->id_project; ?>/join" class="btn btn-primary btn-quirk">Join</a>
							  <a href="<?= base_url(''); ?>project/donate/<?= $res->id_project; ?>/donate" class="btn btn-primary btn-quirk">Donate</a>
							</div>
						</div>
					  </div><!-- panel-body -->
					</div><!-- panel -->
				  </div><!-- col-md-6 -->
				<?php endforeach; ?>
				
				</div><!-- row -->
			</div>
        </div><!-- col-md-9 -->
        
      </div><!-- row -->
      </div><!-- panel-body -->

    </div><!-- contentpanel -->
    </div><!-- contentpanel -->

  </div><!-- mainpanel -->