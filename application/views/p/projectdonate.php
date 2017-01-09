<div class="container">
	<div class="section-title text-center dm">
        <h3><b>Donasi Proyek</b></h3>
        <p class="lead"><?php echo htmlspecialchars($dproject->name_project,ENT_QUOTES,'UTF-8');?></p>
    </div>
	<div class="col-md-12">
	  	<ul class="nav nav-tabs nav-success">
			<li <?php if($type == "donate") { echo "class='active'"; } ?>><a href="#popular6" data-toggle="tab"><strong>Uang</strong></a></li>
			<li><a href="#recent6" data-toggle="tab"><strong>Barang</strong></a></li>
			<li <?php if($type == "join") { echo "class='active'"; } ?>><a href="#comments6" data-toggle="tab"><strong>Tenaga</strong></a></li>
	  	</ul>
	  	<div class="tab-content mb20">
			<div class="tab-pane <?php if($type == "donate") { echo "active"; } ?>" id="popular6">
				<form id="basicForm" method="post" action="<?= base_url(''); ?>project/savedonation" class="form-horizontal col-md-12">
					<input name="typ" type="hidden" value="uang">
					<input name="idproject" type="hidden" value="<?php echo htmlspecialchars($dproject->id_project,ENT_QUOTES,'UTF-8');?>">
					<div class="form-group">
						<label class="col-sm-3 control-label">Nilai (Won)<span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <input id="amount" name="nilai" class="form-control" type="number">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Bank <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <input name="bank" class="form-control" type="text" placeholder="Bank">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Atas Nama<span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <input name="an" class="form-control" type="text" placeholder="Atas Nama">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Catatan </label>
						<div class="col-sm-8">
						  <input name="catatan" class="form-control" type="text" placeholder="Catatan">
						</div>
					</div>
					<div class="form-group">						
						<label class="col-md-8 col-md-offset-3">Saya bersedia dengan ikhlas mendonasikan uang untuk mendukung pelaksanaan proyek. Semoga cepat berguna dan bermanfaat.</label>
					</div>
					<hr>
					<div class="form-group">
						<div class="col-md-12 text-center">
							<button class="btn btn-success">Lanjutkan</button>
						</div>
					</div>
				</form>	
			</div>
			
			<div class="tab-pane" id="recent6">
				<form id="basicForm" method="post" action="<?= base_url(''); ?>project/savedonation" class="form-horizontal">
					<input name="typ" type="hidden" value="barang">
					<input name="idproject" type="hidden" value="<?php echo htmlspecialchars($dproject->id_project,ENT_QUOTES,'UTF-8');?>">
					<div class="input-group mb">
						<div class="col-sm-9">
							<input placeholder="Barang" name="nilai" class="form-control" type="text">
						</div>
						<div class="col-sm-3">
							<button class="btn btn-success mr5">Lanjutkan</button>
						</div>
					</div>
					<p class="col-md-12">Saya bersedia dengan ikhlas mendonasikan barang untuk mendukung pelaksanaan proyek. Semoga cepat berguna dan bermanfaat.</p>	
				</form>
			</div>
			
			<div class="tab-pane <?php if($type == "join") { echo "active"; } ?>" id="comments6">
				<form id="basicForm" method="post" action="<?= base_url(''); ?>project/savedonation" class="form-horizontal">
					<input name="typ" type="hidden" value="tenaga">
					<input name="idproject" type="hidden" value="<?php echo htmlspecialchars($dproject->id_project,ENT_QUOTES,'UTF-8');?>">
					<p class="col-md-12">Saya bersedia dengan ikhlas bergabung dalam pelaksanaan proyek dengan keahlian dan kemampuan yang saya miliki sebagai berikut :</p>	
					<div class="input-group">
						<div class="col-sm-9">
							<input placeholder="Tenaga" name="nilai" class="form-control" type="text">
						</div>
						<div class="col-sm-3">
							<button class="btn btn-success">Lanjutkan</button>
						</div>
					</div>
				</form>
			</div>
	  	</div>
	</div>
</div>