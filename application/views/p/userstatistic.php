<div class="mainpanel">
	<div class="contentpanel">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title" style="text-align:center"><b>Ringkasan</b></h3>
			</div>
			<div class="panel-body">
				<div class="col-md-8 col-lg-8">
				<div>
			  		<h2>Selamat Datang <?php echo htmlspecialchars($user->first_name." ".$user->last_name,ENT_QUOTES,'UTF-8');?>,</h2>
				</div>
			</div><!-- panel-body -->

			<table class="table table-striped-col">
			  <tr>
			    <th style="text-align:center;"><h3>Jumlah Proyek di inisiasi</h3></th>
			    <th style="text-align:center;"><h3>Jumlah Proyek di ikuti</h3></th>
			    <th style="text-align:center;"><h3>Jumlah uang yang dikumpulkan</h3></th>
			    <th style="text-align:center;"><h3>Jumlah uang yang didonasi</h3></th>
			  </tr>
			  <tr>
			    <td style="text-align:center;"><img class="preloader" src="<?= base_url(); ?>assets/images/userstat1.png" alt=""></td>
			    <td style="text-align:center;"><img class="preloader" src="<?= base_url(); ?>assets/images/userstat2.png" alt=""></td>
			    <td style="text-align:center;"><img class="preloader" src="<?= base_url(); ?>assets/images/userstat3.png" alt=""></td>
			    <td style="text-align:center;"><img class="preloader" src="<?= base_url(); ?>assets/images/userstat4.png" alt=""></td>
			  </tr>
			  <tr>
			    <td style="text-align:center;"><h3><?php echo htmlspecialchars($num_project,ENT_QUOTES,'UTF-8');?> Proyek</h3></td>
			    <td style="text-align:center;"><h3><?php echo htmlspecialchars($num_donated_project,ENT_QUOTES,'UTF-8');?> Proyek</h3></td>
			    <td style="text-align:center;"><h3> KRW <?php echo htmlspecialchars(number_format($collected_donation, 0 , ",", "."),ENT_QUOTES,'UTF-8');?></h3></td>
			    <td style="text-align:center;"><h3> KRW <?php echo htmlspecialchars(number_format($total_donation, 0 , ",", "."),ENT_QUOTES,'UTF-8');?></h3></td>
			  </tr>
			</table>
		</div>
	</div>
</div>