	<div class="container dm">
		<div class="col-md-2">
			<img src="<?= base_url('assets/pp'); ?>/<?=htmlspecialchars($duser->photo,ENT_QUOTES,'UTF-8');?>" class="img-circle img-reponsive col-xs-12"/>
		</div>
		<div class="col-md-10">
			<div class="panel">
				<div class="panel-body">
					<h3 class="col-xs-12"><?=htmlspecialchars($duser->first_name." ".$duser->last_name,ENT_QUOTES,'UTF-8');?></h3>
					<span class="col-xs-12">
						<i class="fa fa-user"></i> <?=htmlspecialchars($duser->profession,ENT_QUOTES,'UTF-8'); ?>
					</span>
					<span class="col-xs-12">
						<i class="fa fa-map-marker"></i> <?=htmlspecialchars($duser->address." ".$duser->name_city." ".$duser->name_province,ENT_QUOTES,'UTF-8'); ?>
					</span>
					<div class="col-xs-12 dm">
						<?=html_entity_decode($duser->aboutme,ENT_QUOTES,'UTF-8'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>