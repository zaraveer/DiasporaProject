<div class="mainpanel" <?php if(!$this->ion_auth->logged_in()){ echo "style='margin-left:0'"; } ?>>
	<div class="contentpanel">
		<div class="panel panel-primary">
			<div class="panel-heading" style="text-align:center">
			  <h2 class="panel-title" style="display:inline-block"><b><?php echo htmlspecialchars($dproject->name_project,ENT_QUOTES,'UTF-8');?></b></h2>
			  <?php if($dproject->id == $this->session->userdata('user_id')) { ?>
			  <span style="float:right"><a href="<?= base_url(''); ?>project/form/<?= $dproject->id_project; ?>" style="color:#fff">Ubah Proyek</a></span>
			  <?php } ?>
			</div>
			<div class="panel-body">
				<div class="col-md-6 col-lg-6" style="text-align:center">
					<?php if($dproject->projectphoto == "none"){ ?>
					<img src="<?= base_url(''); ?>assets/images/default-img-placeholder.png" style="width:100%;"/>
					<?php }else{ ?>
					<img src="<?= base_url(''); ?>assets/photos/<?= $dproject->projectphoto; ?>" style="max-height:250px;margin:10px auto;display:block;"/>
					<?php } ?>
					<?php if($dproject->status == 0 || $dproject->status == 2){ ?>
						<span class="label label-default">Belum Diterima</span>
					<?php }else if($dproject->status == 1){ ?>
						<div class="share">
						  <a href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url(); ?>" target="_blank" class="ico fb"><i class="fa fa-facebook"></i></a>
						  <a href="https://twitter.com/home?status=Social%20Share%20by%20%40supahfunk%20<?= current_url(); ?>" target="_blank" class="ico tw"><i class="fa fa-twitter"></i></a>
						  <a href="https://plus.google.com/share?url=<?= current_url(); ?>" target="_blank" class="ico gp"><i class="fa fa-google-plus"></i></a>
						  <span class="text"><em>Bagikan</em></span>
						  <svg class="ico-share"><use xlink:href="#ico-share"></use></svg>
						</div>
						<div class="share">
						  <a href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url(); ?>" target="_blank" class="ico fb"><i class="fa fa-facebook"></i></a>
						  <a href="https://twitter.com/home?status=Social%20Share%20by%20%40supahfunk%20<?= current_url(); ?>" target="_blank" class="ico tw"><i class="fa fa-twitter"></i></a>
						  <a href="https://plus.google.com/share?url=<?= current_url(); ?>" target="_blank" class="ico gp"><i class="fa fa-google-plus"></i></a>
						  <span class="text"><em>Bagikan</em></span>
						  <svg class="ico-share"><use xlink:href="#ico-share"></use></svg>
						</div>

						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
						<symbol id="ico-share" x="0px" y="0px"
						 viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
						  <g>
						<path fill="#FFFFFF" d="M13.26,10.387c-0.781,0-1.484,0.328-1.982,0.854L5.445,8.385c0.02-0.133,0.034-0.27,0.034-0.41
								c0-0.136-0.013-0.269-0.032-0.399l5.823-2.824c0.5,0.529,1.205,0.861,1.99,0.861c1.514,0,2.74-1.227,2.74-2.74
								s-1.227-2.74-2.74-2.74c-1.513,0-2.739,1.227-2.739,2.74c0,0.136,0.013,0.269,0.032,0.399L4.73,6.097
								c-0.5-0.529-1.205-0.861-1.99-0.861C1.227,5.236,0,6.462,0,7.976c0,1.513,1.227,2.739,2.74,2.739c0.781,0,1.484-0.328,1.983-0.854
								l5.832,2.855c-0.021,0.134-0.035,0.27-0.035,0.41c0,1.514,1.227,2.739,2.74,2.739S16,14.641,16,13.127S14.773,10.387,13.26,10.387z
								"/></g>
						  </symbol></svg>
					<?php } ?>
				</div>
				<div class="col-md-6 col-lg-6">
					<?php
						if(!empty($money)){												
							$i = 0;
							foreach($money as $m){ 
								if($dproject->id_project == $m->id_project){
									$i = $i + $m->value;
								} 
							} 
							
							$per = ($i / $dproject->cost) * 100;
							$aa = round($per, 1); 
						}
					?>
					<div class="terkumpul">
						<h1>Terkumpul <?php echo number_format($i , 0, ',', '.'); ?> Won</h1>
						<h3>dari target <?php echo number_format($dproject->cost, 0, ',', '.'); ?> Won</h3>
						<h4>Proses : <?= $aa; ?>%</h4>
					</div>
					<div class="progress progress-striped">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?= $aa; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php if($aa > 100){ echo "100"; }else{ echo $aa; }  ?>%">
						  <span class="sr-only">
						  <?php if($aa > 32){ echo $aa."% Complete"; } ?></span>
						</div>
					</div>
					<div class="info-group" style="text-align:center">
						<div class="btn-group" style="display:block;">
						  <a href="<?= base_url(''); ?>project/donate/<?= $dproject->id_project; ?>/join" class="btn btn-primary btn-quirk" style="width:50%;">Bergabung</a>
						  <a href="<?= base_url(''); ?>project/donate/<?= $dproject->id_project; ?>/donate" class="btn btn-primary btn-quirk" style="width:50%;">Donasi</a>
						</div>
					</div>
					<?php $p_id = str_pad($dproject->id_user, 8, "0", STR_PAD_LEFT ); ?>
					<div class="media leftpanel-profile" style="background-color: transparent;">
						<div class="media-left">
						  <img src="<?= base_url(); ?>assets/pp/<?= $dproject->photo; ?>" class="media-object img-circle"/>
						</div>
						<div class="media-body">
						  <h4>Diasporer</h4>
						  <h4><a href="<?= base_url(); ?>profile/details/<?= $p_id; ?>"><?php if(!empty($dproject->first_name)){ echo htmlspecialchars($dproject->first_name,ENT_QUOTES,'UTF-8')." ".htmlspecialchars($dproject->last_name,ENT_QUOTES,'UTF-8'); }else{ echo "Data belum lengkap!"; } ?></a></h4>
						</div>
					</div><!-- leftpanel-profile -->
				</div>
			</div><!-- panel-body -->
		</div>
		<div class="panel panel-primary">
			<div class="panel-body">
				<div class="col-md-12 col-lg-12">
					<ul class="nav nav nav-tabs nav-line">
						<li class="active"><a href="#details" data-toggle="tab"><strong>Detail</strong></a></li>
						<li><a href="#summary" data-toggle="tab"><strong>Ringkasan</strong></a></li>
						<li><a href="#donationlist" data-toggle="tab"><strong>Daftar donasi</strong></a></li>
					</ul>
					<div class="tab-content mb20">
						<div class="tab-pane active" id="details">
							<?php 
							//$str = $dproject->details;
						  	//eval("\$str = \"$str\";");
						  	//echo $str;
						  	?>
							<?php echo $dproject->details; ?>
						</div>
						<div class="tab-pane" id="summary">
						  <?php echo htmlspecialchars($dproject->summary,ENT_QUOTES,'UTF-8');?>
						</div>
						<div class="tab-pane" id="donationlist">
						  
	<!-- doantion list -->
    <div>

      <div class="row profile-wrapper">
        <div class="col-md-12 col-lg-12 dash-left">
			<div class="col-md-12 col-lg-12 profile-none">
				<div class="profile-right-body">
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs nav-justified nav-line">
					<li class="active"><a href="#activity" data-toggle="tab"><strong>Uang</strong></a></li>
					<li><a href="#photos" data-toggle="tab"><strong>Barang</strong></a></li>
					<li><a href="#music" data-toggle="tab"><strong>Tenaga</strong></a></li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
					<div class="tab-pane active" id="activity">
						<div class="panel">
							<div class="panel-body">
							  <div class="table-responsive">
								<table id="dataTable1" class="table table-bordered table-striped-col">
								  <thead>
									<tr>
									  <th>No</th>
									  <th>Tanggal</th>
									  <th>Nilai (Rp)</th>
									  <th>Nama Pengguna</th>
									</tr>
								  </thead>

								  <tbody>
									<?php $i = 1; foreach($r_uang as $res): ?>
									<tr>
									  <td><?php echo $i++; ?></td>
									  <td><?php echo $res->dateadded ?></td>
									  <td><?php echo $res->value ?></td>
									  <td><?php echo $res->username ?></td>
									</tr>
									<?php endforeach; ?>
								  </tbody>
								</table>
							  </div>
							</div>
						</div><!-- panel -->
					</div><!-- tab-pane -->
					<div class="tab-pane" id="photos">
						<div class="panel">
							<div class="panel-body">
							  <div class="table-responsive">
								<table id="dataTable2" class="table table-bordered table-striped-col">
								  <thead>
									<tr>
									  <th>No</th>
									  <th>Tanggal</th>
									  <th>Proyek</th>
									  <th>Keterangan</th>
									</tr>
								  </thead>

								  <tbody>
									<?php $i = 1; foreach($r_barang as $res): ?>
									<tr>
									  <td><?php echo $i++; ?></td>
									  <td><?php echo $res->dateadded?></td>
									  <td><?php echo $res->name_project?></td>
									  <td><?php echo $res->value?></td>
									</tr>
									<?php endforeach; ?>
								  </tbody>
								</table>
							  </div>
							</div>
						</div><!-- panel -->
					</div>
					<div class="tab-pane" id="music">
						<div class="panel">
							<div class="panel-body">
							  <div class="table-responsive">
								<table id="dataTable3" class="table table-bordered table-striped-col">
								  <thead>
									<tr>
									  <th>No</th>
									  <th>Tanggal</th>
									  <th>Proyek</th>
									  <th>Kontribusi</th>
									</tr>
								  </thead>

								  <!--<tfoot>
									<tr>
									  <th>No</th>
									  <th>Tanggal</th>
									  <th>Proyek</th>
									  <th>Kontribusi</th>
									</tr>
								  </tfoot> -->

								  <tbody>
									<?php $i = 1; foreach($r_tenaga as $res): ?>
									<tr>
									  <td><?php echo $i++; ?></td>
									  <td><?php echo $res->dateadded?></td>
									  <td><?php echo $res->name_project?></td>
									  <td><?php echo $res->value?></td>
									</tr>
									<?php endforeach; ?>
								  </tbody>
								</table>
							  </div>
							</div>
						</div><!-- panel -->
					</div>
				  </div>
				</div>
			  </div>
        </div><!-- col-md-9 -->
        
      </div><!-- row -->

    </div><!-- doantion list -->

						</div>
					</div>
				</div>
			</div><!-- panel-body -->
		</div>
	</div>
</div>