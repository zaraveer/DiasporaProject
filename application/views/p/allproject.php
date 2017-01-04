<div class="container dm">
	<div class="section-title text-center">
        <h3><b>Semua Project</b></h3>
        <p class="lead">Platform Ruang Berkolaborasi Sesama Diaspora</p>
    </div>
    <div class="row">
    	<div class="col-xs-12">
    		<form id="basicForm" method="post" action="all" class="form-inline text-center">
				<div class="form-group">
					<input type="text" name="katakunci" class="form-control" placeholder="Kata Kunci"/>
				</div>
				<div class="form-group">
					<?php echo form_dropdown("category", $category, "","id='category' class='form-control select2 category' data-placeholder='Kategori'"); ?>
				</div>
				<button type="submit" class="btn btn-success btn-def-size">Cari</button>
		  	</form>
    	</div>
    </div>
    <div class="row dm">
    	<div class="col-xs-12">
			<?php if(!empty($kunc)){ ?>
			<span>Kata kunci : <div class="label label-default"><?=$kunc; ?></div></span>
			<?php } ?>
			<?php if(!empty($kate)){ ?>
			<span>Kategori : <div class="label label-default"><?=$kate; ?></div></span>
			<?php } ?>
		</div>
	</div>
    <div class="row dm">
		<?php foreach($results as $res){ ?>
		<div class="col-md-4">
	        <?php 
	            $s_id = str_pad( $res->id, 8, "0", STR_PAD_LEFT );
	            $p_id = str_pad( $res->id_user, 8, "0", STR_PAD_LEFT );
	            $str = $res->summary;
	            eval("\$str = \"$str\";");
	            
	            $i = 0;
	            $terkumpul = 0;
	            foreach($money as $m){ 
	                if($res->id_project == $m->id_project){
	                    $i = $i + $m->value;
	                    $terkumpul = $terkumpul + $m->value;
	                } 
	            } 
	            $per = ($i / $res->cost) * 100;
	            $aa = round($per, 1);

	            $to = explode('/',$res->dateto);
	            $dateto = $to[2]."-".$to[0]."-".$to[1];
	            $date=strtotime($dateto);//Converted to a PHP date (a second count)
	            $diff=$date-time();//time returns current time in seconds
	            $days=floor($diff/(60*60*24));
	        ?>
	        <a href="<?= base_url(''); ?>project/details/<?= $res->slug; ?>/<?= $s_id; ?>" class="project">
	            <div class="project-image">
	                <img onError="this.src='<?= base_url('assets/photos')?>/base.png'" src="<?= base_url('assets/photos')?>/<?= $res->projectphoto; ?>"/>
	            </div>
	            <div class="project-title">
	                <?= htmlspecialchars($res->name_project,ENT_QUOTES,'UTF-8')?>
	            </div>
	            <div class="project-category">
	                <i class="glyphicon glyphicon-bookmark"></i> <?= htmlspecialchars($res->name_category,ENT_QUOTES,'UTF-8')?>
	            </div>
	            <div class="project-location">
	                <i class="glyphicon glyphicon-map-marker"></i> <?= htmlspecialchars($res->name_province,ENT_QUOTES,'UTF-8')?>
	            </div>
	            <div class="project-desc">
	                <?= $str ?>
	            </div>
	            <div class="project-maker">
	                <div class="avatar">
	                    <?= substr($res->username, 0, 1)?>
	                </div>
	                <div class="name">
	                    oleh : <?= htmlspecialchars($res->username,ENT_QUOTES,'UTF-8');?>
	                </div>
	            </div>
	            <div class="project-progress">
	                <div class="terkumpul">
	                    <b>
	                        ₩<?= htmlspecialchars(number_format($terkumpul, 0 , ",", "."),ENT_QUOTES,'UTF-8');?>
	                    </b> 
	                    terkumpul
	                </div>
	                <div class="progress">
	                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?=$aa?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$aa > 100 ? 100 : $aa ?>%">
	                      <span class="sr-only">
	                      <?php if($aa > 32){ echo $aa."% Complete"; } ?></span>
	                    </div>
	                </div>
	                <div class="status">
	                    <div class="pull-left">
	                        <b><?=$aa?>%</b>
	                    </div>
	                    <div class="pull-right">
	                        <i class="glyphicon glyphicon-time"></i>
	                        <b><?=$days?></b> 
	                        Hari
	                    </div>
	                </div>
	            </div>
	        </a>
	    </div>
		<?php } ?>
    </div>
</div>