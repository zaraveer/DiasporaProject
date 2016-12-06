  <div class="leftpanel col-md-2 col-lg-2">
    <div class="leftpanelinner">

      <!-- ################## LEFT PANEL PROFILE ################## -->

      <div class="media leftpanel-profile">
        <?php if(!$this->ion_auth->is_admin()){ ?>
		<div class="media-left">
          <a href="#">
			<?php if($this->ion_auth->logged_in()){ ?>
				<?php if($photo != ""){ ?>
					<img src="<?= base_url(); ?>assets/pp/<?= $photo; ?>" class="media-object img-circle"/>
				<?php } ?>
			<?php }else{ ?>
				<img src="<?= base_url(); ?>assets/pp/<?= $dproject->photo; ?>" class="media-object img-circle"/>
			<?php } ?>
          </a>
        </div>
		<?php } ?>
        <div class="media-body">
		<?php $p_id = str_pad($this->session->userdata('user_id'), 8, "0", STR_PAD_LEFT ); ?>
          <h4 class="media-heading">
			<a href="<?= base_url(); ?>profile/details/<?= $p_id; ?>"><?php if(!empty($user->first_name)){ echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8')." ".htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8'); }else{ echo "Data belum lengkap!"; } ?> </a>
			<a data-toggle="collapse" data-target="#loguserinfo" class="pull-right"><i class="fa fa-angle-down"></i></a></h4>
          <span>Diasporer</span>
        </div>
      </div><!-- leftpanel-profile -->

      <div class="leftpanel-userinfo collapse" id="loguserinfo">
        <h5 class="sidebar-title">Alamat</h5>
        <address>
          <?php echo htmlspecialchars($user->address,ENT_QUOTES,'UTF-8'); ?>
        </address>
        <h5 class="sidebar-title">Kontak</h5>
        <ul class="list-group">
          <li class="list-group-item">
            <label class="pull-left">Email</label>
            <span class="pull-right"><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8'); ?></span>
          </li>
          <li class="list-group-item">
            <label class="pull-left">Telepon </label>
            <span class="pull-right"><?php echo htmlspecialchars($user->phone,ENT_QUOTES,'UTF-8'); ?></span>
          </li>
        </ul>
      </div><!-- leftpanel-userinfo -->

      <ul class="nav nav-tabs nav-justified nav-sidebar">
        <li class="tooltips active" data-toggle="tooltip" title="Main Menu"><a data-toggle="tab" data-target="#mainmenu"><i class="tooltips fa fa-ellipsis-h"></i></a></li>
        <li class="tooltips" data-toggle="tooltip" title="Log Out"><a href="<?= base_url(); ?>auth/logout"><i class="fa fa-sign-out"></i></a></li>
      </ul>

      <div class="tab-content">

        <!-- ################# MAIN MENU ################### -->

        <div class="tab-pane active" id="mainmenu">
          <!--h5 class="sidebar-title">Favorites</h5-->
          <ul class="nav nav-pills nav-stacked nav-quirk">
            <li class="<?=(current_url()==base_url('dashboard')) ? 'active':''?>"><a href="<?= base_url(''); ?>dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="<?=(current_url()==base_url('project')) ? 'active':''?>"><a href="<?= base_url(''); ?>project"><i class="fa fa-cube"></i> <span>Proyek</span></a></li>
            <li class="<?=(current_url()==base_url('donate')) ? 'active':''?>"><a href="<?= base_url(''); ?>donate"><i class="fa fa-map-marker"></i> <span>Donasi</span></a></li>
            <li class="<?=(current_url()==base_url('profile')) ? 'active':''?>"><a href="<?= base_url(''); ?>profile"><i class="fa fa-user"></i> <span>Profil</span></a></li>
            <!-- add user list panel -->
            <?php 
              if ($this->ion_auth->is_admin()) {
            ?>

            <li class="<?=(current_url()==base_url('userlist')) ? 'active':''?>"><a href="<?= base_url(''); ?>userlist"><i class="fa fa-user"></i> <span>Daftar Pengguna</span></a></li>
            <?php 
              }
            ?>
            <!-- end add user list panel -->

          </ul>
        </div><!-- tab-pane -->

      </div><!-- tab-content -->

    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->