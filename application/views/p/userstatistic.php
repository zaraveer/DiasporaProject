<div class="container">
    <div class="section-title text-center">
        <h3><b>Ringkasan</b></h3>
        <!-- <p class="lead">Platform Ruang Berkolaborasi Sesama Diaspora</p> -->
    </div>

    <div class="section-wrapper">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 sd-icon">
                <img class="img-responsive" src="<?= base_url('assets/images')?>/userstat1.png">
                <p>
                	<h3><?=htmlspecialchars($num_project,ENT_QUOTES,'UTF-8');?></h3>
                	Proyek di inisiasi
            	</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 sd-icon">
                <img class="img-responsive" src="<?= base_url('assets/images')?>/userstat2.png">
                <p>
                	<h3><?=htmlspecialchars($num_donated_project,ENT_QUOTES,'UTF-8');?></h3>
                	Proyek di ikuti
            	</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 sd-icon">
                <img class="img-responsive" src="<?= base_url('assets/images')?>/userstat3.png">
                <p>
                	<h3>
                		₩<?=htmlspecialchars(number_format($collected_donation, 0 , ",", "."),ENT_QUOTES,'UTF-8');?>
                	</h3>
                	Dikumpulkan
            	</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 sd-icon">
                <img class="img-responsive" src="<?= base_url('assets/images')?>/userstat4.png">
                <p>
                	<h3>
                		₩<?=htmlspecialchars(number_format($total_donation, 0 , ",", "."),ENT_QUOTES,'UTF-8');?>
            		</h3>
                	Didonasi
            	</p>
            </div>
        </div>
    </div>
</div>