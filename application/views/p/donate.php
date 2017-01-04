    <div class="container">
    	<div class="section-title text-center dm">
	        <h3><b>Daftar Donasi</b></h3>
	        <!-- <p class="lead">Platform Ruang Berkolaborasi Sesama Diaspora</p> -->
	    </div>

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
									  <th>Nama Proyek</th>
									  <th>Nilai (Won)</th>
									  <th>Nama Pengguna</th>
									  <th>Atas Nama</th>
									  <th>Bank</th>
									  <?php if(!$this->ion_auth->is_admin()){ ?>
									  <th>Status</th>
									  <?php }else{ ?>
									  <th>Aksi</th>
									  <?php } ?>
									</tr>
								  </thead>

								  <tbody>
									<?php $i = 1; foreach($r_uang as $res): ?>
									<tr>
									  <td><?php echo $i++; ?></td>
									  <td><?php echo $res->dateadded ?></td>
									  <td><?php echo $res->name_project ?></td>
									  <td><?php echo $res->value ?></td>
									  <td><?php echo $res->username ?></td>
									  <td><?php echo $res->atasnama ?></td>
									  <td><?php echo $res->bank ?></td>
									  <?php if(!$this->ion_auth->is_admin()){ ?>
									  <td>
										<?php if($res->donationstatus == "0"){ echo "Pending"; }else{ echo "Approved"; } ?>
									  </td>
									  <?php }else{ ?>
									  <td>
										<?php if($res->donationstatus == 0){ ?>
											<a href="<?= base_url(''); ?>donate/status/<?= $res->id_donate; ?>/acc" class="btn btn-success">Terima</a>
											<a href="<?= base_url(''); ?>donate/status/<?= $res->id_donate; ?>/dec" class="btn btn-warning">Batalkan</a>
										<?php }else if($res->donationstatus == 1){ ?>
											<a href="<?= base_url(''); ?>donate/status/<?= $res->id_donate; ?>/dec" class="btn btn-warning">Batalkan</a>
										<?php }else if($res->donationstatus == 2){ ?>
											<a href="<?= base_url(''); ?>donate/status/<?= $res->id_donate; ?>/acc" class="btn btn-success">Terima</a>
										<?php } ?>
									  </td>
									  <?php } ?>
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

								  <!-- <tfoot>
									<tr>
									  <th>No</th>
									  <th>Tanggal</th>
									  <th>Proyek</th>
									  <th>Keterangan</th>
									</tr>
								  </tfoot> -->

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

								  <!-- <tfoot>
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

    </div><!-- contentpanel -->