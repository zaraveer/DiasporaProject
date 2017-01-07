<?php if(!$this->ion_auth->is_admin()){ ?>

    <div class="container">
    	<div class="section-title text-center dm">
	        <h3><b>Daftar Project</b></h3>
	        <!-- <p class="lead">Platform Ruang Berkolaborasi Sesama Diaspora</p> -->
	    </div>

      <div class="row profile-wrapper">
        <div class="col-md-12 col-lg-12 dash-left">
			<div class="col-md-12 col-lg-12 profile-none">
				<div class="profile-right-body">
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs nav-justified nav-line">
					<li class="active"><a href="#activity" data-toggle="tab"><strong>Proyek Saya</strong></a></li>
					<li><a href="#photos" data-toggle="tab"><strong>Proyek yang Anda Donasi</strong></a></li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
					<div class="tab-pane active" id="activity">
						<div class="row">
						  <div class="col-sm-12 col-md-12 col-lg-12 people-list">

							<div class="people-options clearfix" style="margin-bottom: 20px;">
							  <div class="btn-toolbar col-md-12">
								<a href="<?= base_url(''); ?>project/form" class="btn btn-success btn-quirk">Buat Proyek Baru</a>
							  </div>

							  <!--div class="btn-group pull-right people-pager">
								<button class="btn btn-default-active"><i class="fa fa-th"></i></button>
								<a href="people-directory.html" class="btn btn-default"><i class="fa fa-th-list"></i></a>
							  </div-->

							  <div class="btn-group pull-right people-pager">
								<button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
								<button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
							  </div>
							  <span class="people-count pull-right">Menampilkan <strong>1-10</strong> dari<strong>34,404</strong> pengguna</span>
							</div><!-- people-options -->

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
									  <?php if($res->status == 0){ ?>
											<span class="label label-default">Belum Diterima</span>
										<?php }else if($res->status == 1){ ?>
											<span class="label label-primary">Diterima</span>
										<?php }else if($res->status == 2){ ?>
											<span class="label label-danger">Dibatalkan</span>
										<?php } ?>
									  <p class="media-usermeta">
										<i class="glyphicon glyphicon-user"></i>
										<?php $p_id = str_pad( $res->id_user, 8, "0", STR_PAD_LEFT ); ?>
										oleh <a href="<?= base_url(''); ?>profile/details/<?= $p_id; ?>">
											<?php echo htmlspecialchars($res->username,ENT_QUOTES,'UTF-8');?>
										</a>
									  </p>
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
									  <p class="desc"><?php echo htmlspecialchars($res->summary,ENT_QUOTES,'UTF-8');?></p>
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
										<?php 
											if(!empty($money)){												
												$i = 0;
												foreach($money as $m){ 
													if($res->id_project == $m->id_project){
														$i = $i + $m->value;
													} 
												} 
												
												$per = ($i / $res->cost) * 100; 
												$aa = round($per, 1); 
											} 
										?>
											
										<label>Proses : <?= $aa; ?>%</label>
									 
									 <div class="progress progress-striped">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?= $aa; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php if($aa > 100){ echo "100"; }else{ echo $aa; }  ?>%">
										  <span class="sr-only">
										  <?php if($aa > 32){ echo $aa."% Selesai"; } ?></span>
										</div>
									 </div>
									  
									</div>
									<div class="info-group" style="text-align:center">
										<div class="btn-group">
										  <a href="<?= base_url(''); ?>project/donate/<?= $res->id_project; ?>/join" class="btn btn-primary btn-quirk">Bergabung</a>
										  <a href="<?= base_url(''); ?>project/donate/<?= $res->id_project; ?>/donate" class="btn btn-primary btn-quirk">Donasi</a>
										</div>
									</div>
								  </div><!-- panel-body -->
								</div><!-- panel -->
							  </div><!-- col-md-6 -->
							<?php endforeach; ?>
							
							</div><!-- row -->

						  </div><!-- col-sm-8 -->
						  
						</div><!-- row -->

					</div><!-- tab-pane-->
					<div class="tab-pane" id="photos">
						<div class="row">
						  <div class="col-sm-12 col-md-12 col-lg-12 people-list">

							<div class="people-options clearfix" style="margin-bottom: 20px;">
							  <div class="btn-toolbar col-md-12">
								<a href="<?= base_url(''); ?>project/add" class="btn btn-success btn-quirk">Buat Proyek Baru</a>
							  </div>

							  <!--div class="btn-group pull-right people-pager">
								<button class="btn btn-default-active"><i class="fa fa-th"></i></button>
								<a href="people-directory.html" class="btn btn-default"><i class="fa fa-th-list"></i></a>
							  </div-->

							  <div class="btn-group pull-right people-pager">
								<button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
								<button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
							  </div>
							  <span class="people-count pull-right">Menampilkan<strong>1-10</strong> dari <strong>34,404</strong> pengguna</span>
							</div><!-- people-options -->

							<div class="row">
							
							<?php foreach($myresults as $res): ?>
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
									  <p class="media-usermeta">
										<i class="glyphicon glyphicon-user"></i>
										<?php $p_id = str_pad( $res->id_user, 8, "0", STR_PAD_LEFT ); ?>
										oleh<a href="<?= base_url(''); ?>profile/details/<?= $p_id; ?>">
											<?php echo htmlspecialchars($res->username,ENT_QUOTES,'UTF-8');?>
										</a>
									  </p>
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
									  <p class="desc"><?php echo htmlspecialchars($res->summary,ENT_QUOTES,'UTF-8');?></p>
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
										<?php 
											if(!empty($money)){												
												$i = 0;
												foreach($money as $m){ 
													if($res->id_project == $m->id_project){
														$i = $i + $m->value;
													} 
												} 
												
												$per = ($i / $res->cost) * 100; 
												$aa = round($per, 1); 
											} 
										?>
											
										<label>Proses : <?= $aa; ?>%</label>
									 
									 <div class="progress progress-striped">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?= $aa; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php if($aa > 100){ echo "100"; }else{ echo $aa; }  ?>%">
										  <span class="sr-only">
										  <?php if($aa > 32){ echo $aa."% Selesai"; } ?></span>
										</div>
									 </div>
									  
									</div>
									<div class="info-group" style="text-align:center">
										<div class="btn-group">
										  <a href="<?= base_url(''); ?>project/donate/<?= $res->id_project; ?>/join" class="btn btn-primary btn-quirk">Bergabung</a>
										  <a href="<?= base_url(''); ?>project/donate/<?= $res->id_project; ?>/donate" class="btn btn-primary btn-quirk">Donasi</a>
										</div>
									</div>
								  </div><!-- panel-body -->
								</div><!-- panel -->
							  </div><!-- col-md-6 -->
							<?php endforeach; ?>
							
							</div><!-- row -->

						  </div><!-- col-sm-8 -->
						  
						</div><!-- row -->

					</div>
				  </div>
				</div>
			  </div>
        </div><!-- col-md-9 -->
        
      </div><!-- row -->

    </div><!-- contentpanel -->
<?php }else{ ?>

    <div class="container">
    	<div class="section-title text-center dm">
	        <h3><b>Daftar Project</b></h3>
	        <!-- <p class="lead">Platform Ruang Berkolaborasi Sesama Diaspora</p> -->
	    </div>

      <div class="row profile-wrapper">
        <div class="col-md-12 col-lg-12 dash-left">
			<div class="col-md-12 col-lg-12 profile-none">
				<div class="profile-right-body">
					<div class="panel">
							<div class="panel-body">
							  <div class="table-responsive">
								<table id="dataTable1" class="table table-bordered table-striped-col">
								  <thead>
									<tr>
									  <th>Nama Proyek</th>
									  <th>Pemilik</th>
									  <th>Kategori</th>
									  <th>Nilai (Rp)</th>
									  <th>Provinsi</th>
									  <th>Aksi</th>
									</tr>
								  </thead>

								  <tfoot>
									<tr>
									  <th>Nama Proyek</th>
									  <th>Pemilik</th>
									  <th>Kategori</th>
									  <th>Nilai (Rp)</th>
									  <th>Provinsi</th>
									  <th>Aksi</th>
									</tr>
								  </tfoot>

								  <tbody>
									<?php foreach($results as $res): ?>
									<tr>
									  <td >
										<?php $s_id = str_pad( $res->id, 8, "0", STR_PAD_LEFT ); ?>
										<a href="<?= base_url(''); ?>project/details/<?= $res->slug; ?>/<?= $s_id; ?>">
											<?php echo htmlspecialchars($res->name_project,ENT_QUOTES,'UTF-8');?>
										</a>
									  </td>
									  <td class="text-center">
										<?php $p_id = str_pad( $res->id_user, 8, "0", STR_PAD_LEFT ); ?>
										<a href="<?= base_url(''); ?>profile/details/<?= $p_id; ?>">
											<?php echo htmlspecialchars($res->username,ENT_QUOTES,'UTF-8');?>
										</a>
									  </td>
									  <td class="text-center"><?php echo htmlspecialchars($res->name_category,ENT_QUOTES,'UTF-8');?></td>
									  <td class="text-right"><?=number_format($res->cost,0,',','.');?></td>
									  <td class="text-center"><?php echo htmlspecialchars($res->name_province,ENT_QUOTES,'UTF-8');?></td>
									  <td class="text-center">
										<div class="btn-group">
											<?php if($res->status == 0){ ?>
												<a href="<?= base_url(''); ?>project/status/<?= $res->id_project; ?>/acc" class="btn btn-success">Terima</a>
												<a href="<?= base_url(''); ?>project/status/<?= $res->id_project; ?>/dec" class="btn btn-warning">Batalkan</a>
											<?php }else if($res->status == 1){ ?>
												<a href="<?= base_url(''); ?>project/status/<?= $res->id_project; ?>/dec" class="btn btn-warning">Batalkan</a>
											<?php }else if($res->status == 2){ ?>
												<a href="<?= base_url(''); ?>project/status/<?= $res->id_project; ?>/acc" class="btn btn-success">Terima</a>
											<?php } ?>
										</div>
									  </td>
									</tr>
									<?php endforeach; ?>
								  </tbody>
								</table>
							  </div>
							</div>
						</div><!-- panel -->
				</div>
			</div>
        </div><!-- col-md-12 -->
        
      </div><!-- row -->

    </div><!-- contentpanel -->
<?php } ?>