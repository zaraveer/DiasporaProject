<?php if($dproject->projectphoto != "none"){ ?>
    <div class="banner">
        <div class="banner-item" 
                style="background-image:url('<?= base_url('');?>assets/photos/<?= $dproject->projectphoto;?>')">
        </div>
    </div>
<?php } ?>
<div class="container mb">
    <div class="col-md-8">
        <?php if($dproject->id == $this->session->userdata('user_id')) { ?>
        <div class="row mt">
            <div class="col-md-12">
                <a class="btn btn-success" href="<?= base_url(''); ?>project/form/<?= $dproject->id_project; ?>">
                    Ubah Proyek
                </a>
            </div>    
        </div>
        <?php } ?>
        <div class="row mt">
            <div class="col-md-12">
                <h2><b><?php echo htmlspecialchars($dproject->name_project,ENT_QUOTES,'UTF-8');?></b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav nav-tabs nav-line">
                    <li class="active"><a href="#details" data-toggle="tab"><strong>Detail</strong></a></li>
                    <li><a href="#summary" data-toggle="tab"><strong>Ringkasan</strong></a></li>
                    <li><a href="#donationlist" data-toggle="tab"><strong>Daftar donasi</strong></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="details">
                        <div class="col-xs-12">
                            <?php echo $dproject->details; ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="summary">
                        <div class="col-xs-12">
                            <?php echo htmlspecialchars($dproject->summary,ENT_QUOTES,'UTF-8');?>
                        </div>
                    </div>
                    <div class="tab-pane" id="donationlist">
                        <div class="col-xs-12">
                            <ul class="nav nav-tabs nav-justified nav-line">
                                <li class="active"><a href="#activity" data-toggle="tab"><strong>Uang</strong></a></li>
                                <li><a href="#photos" data-toggle="tab"><strong>Barang</strong></a></li>
                                <li><a href="#music" data-toggle="tab"><strong>Tenaga</strong></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="activity">
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
                                                    <td class="text-center"><?=$i++; ?></td>
                                                    <td class="text-center"><?=$res->dateadded ?></td>
                                                    <td class="text-right"><?=number_format($res->value, 0, ',', '.') ?></td>
                                                    <td><?php echo $res->username ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="photos">
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
                                                    <td class="text-center"><?php echo $i++; ?></td>
                                                    <td class="text-center"><?php echo $res->dateadded?></td>
                                                    <td><?php echo $res->name_project?></td>
                                                    <td class="text-center"><?php echo $res->value?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="music">
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
                                            <tbody>
                                                <?php $i = 1; foreach($r_tenaga as $res): ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $i++; ?></td>
                                                    <td class="text-center"><?php echo $res->dateadded?></td>
                                                    <td><?php echo $res->name_project?></td>
                                                    <td class="text-center"><?php echo $res->value?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel mt">
            <div class="panel-body">
                <div class="row">
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
                    <div class="col-md-12">
                        <div class="col-md-12">
                            Terkumpul <h2 style="margin: 0"><?= number_format($i , 0, ',', '.'); ?> Won</h2>
                        </div>
                        <div class="col-md-12 mb-1">
                            dari target <?= number_format($dproject->cost, 0, ',', '.'); ?> Won
                        </div>
                        <div class="col-md-12">
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?= $aa; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php if($aa > 100){ echo "100"; }else{ echo $aa; }  ?>%">
                                  <span class="sr-only">
                                  <?php if($aa > 32){ echo $aa."% Complete"; } ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?= base_url(); ?>assets/pp/<?= $dproject->photo; ?>" class="col-xs-3 img-responsive img-circle" />
                        <?php $p_id = str_pad($dproject->id_user, 8, "0", STR_PAD_LEFT ); ?>
                        <div class="col-xs-9">
                            Diasporer:</br>
                            <a href="<?= base_url(); ?>profile/details/<?= $p_id; ?>">
                            <?=!empty($dproject->first_name) ?  htmlspecialchars($dproject->first_name,ENT_QUOTES,'UTF-8')." ".htmlspecialchars($dproject->last_name,ENT_QUOTES,'UTF-8') : "Data belum lengkap!"?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt">
                <?php if($this->ion_auth->logged_in()) { ?>
                    <div class="col-md-12">
                        <a href="<?= base_url(''); ?>project/donate/<?= $dproject->id_project; ?>/join" class="btn btn-block btn-success mb-1">
                            Bergabung
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="<?= base_url(''); ?>project/donate/<?= $dproject->id_project; ?>/donate" class="btn btn-block btn-success">
                            Donasi
                        </a>
                    </div>

                    <?php } else { ?>
                    <div class="col-md-12">
                        <a href="<?= base_url(''); ?>login" class="btn btn-block btn-success mb-1">
                            Bergabung
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a  href="<?= base_url(''); ?>login" class="btn btn-block btn-success">
                            Donasi
                        </a>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <div class="panel mt">
            <div class="panel-body">
                <?php if($dproject->status == 0 || $dproject->status == 2){ ?>
                    <span class="label label-default">Belum Diterima</span>
                <?php } else{?>
                    <div class="row">
                        <h4 class="text-center">Bagikan</h4>
                        <div class="col-md-12">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url(); ?>" class="btn btn-block btn-facebook mb-1">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a target="_blank" href="https://plus.google.com/share?url=<?= current_url(); ?>" class="btn btn-block btn-google mb-1">
                                <i class="fa fa-google"></i> Google
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a target="_blank" href="https://twitter.com/home?status=Social%20Share%20by%20%40supahfunk%20<?= current_url(); ?>" class="btn btn-block btn-twitter">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>