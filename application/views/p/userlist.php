
  <div class="mainpanel">

    <!--<div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard</h2>
    </div>-->

    <div class="contentpanel">

      <div class="row profile-wrapper">
        <div class="col-md-12 col-lg-12 dash-left">
			<div class="col-md-12 col-lg-12 profile-none">
				<div class="profile-right-body">
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs nav-justified nav-line">
					<li class="active"><a href="#activity" data-toggle="tab"><strong>User List</strong></a></li>
					<li><a href="#photos" data-toggle="tab"><strong>Admin List</strong></a></li>
					<!--li><a href="#music" data-toggle="tab"><strong>Tenaga</strong></a></li-->
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
									  <th>Username</th>
									  <th>Full Name</th>
									  <th>Phone</th>
									  <?php if(!$this->ion_auth->is_admin()){ ?>
									  <th>Status</th>
									  <?php }else{ ?>
									  <th>Aksi</th>
									  <?php } ?>
									</tr>
								  </thead>

								  <tfoot>
									<tr>
									  <th>No</th>
									  <th>Tanggal</th>
									  <th>Project Name</th>
									  <th>Nilai (Rp)</th>
									  <?php if(!$this->ion_auth->is_admin()){ ?>
									  <th>Status</th>
									  <?php }else{ ?>
									  <th>Aksi</th>
									  <?php } ?>
									</tr>
								  </tfoot>

								  <tbody>
									<?php $i = 1; foreach($r_users as $res): ?>
									<tr>
									  <td><?php echo $i++; ?></td>
									  <td><?php echo $res->username ?></td>
									  <td><?php echo $res->first_name ." " .$res->last_name ?></td>
									  <td><?php echo $res->phone ?></td>
									  <td>
									  <?php if($res->active == 0){ ?>
											<a href="<?= base_url(''); ?>userlist/status/<?= $res->id; ?>/acc" class="btn btn-primary btn-quirk">Aktivasi</a>
										<?php }else { ?>
										<?php echo 'Telah Aktif';?>
										<?php } ?>
									  </td>
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

								  <tfoot>
									<tr>
									  <th>No</th>
									  <th>Tanggal</th>
									  <th>Proyek</th>
									  <th>Keterangan</th>
									</tr>
								  </tfoot>

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
					<!--div class="tab-pane" id="music">
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

								  <tfoot>
									<tr>
									  <th>No</th>
									  <th>Tanggal</th>
									  <th>Proyek</th>
									  <th>Kontribusi</th>
									</tr>
								  </tfoot>

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
							</div-->
						</div><!-- panel -->
					</div>
				  </div>
				</div>
			  </div>
        </div><!-- col-md-9 -->
        
      </div><!-- row -->

    </div><!-- contentpanel -->

  </div><!-- mainpanel -->