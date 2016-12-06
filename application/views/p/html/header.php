/**view for header**/

<body>

<header>
  <div class="headerpanel">

		<div class="logopanel">
		  <h2><a class="navbar-brand" href="<?= base_url('') ?>">Diaspora Project</a></h2>
		</div><!-- logopanel -->
    <div class="headerbar">
		
	  <?php if($this->ion_auth->logged_in()){ ?>
      <!--a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a-->
	  
	  <div class="header-right">
        <ul class="headermenu">
          <li><a href="<?= base_url('') ?>">Dashboard</a></li>
          <li><a href="<?= base_url('/project/all') ?>">Daftar Proyek</a></li>
          <li><a href="<?= base_url('/auth/logout') ?>">Keluar</a></li>
          <li>
			<div class="social-icons">
				<span><a class="border-radius" data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
				<span><a class="border-radius" data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
			</div><!-- end social icons -->
		  </li>
        </ul>
      </div><!-- header-right -->
	  <?php } else { ?>
      <!--a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a-->
	  <div class="header-right">
        <ul class="headermenu">
          <li><a href="<?= base_url('') ?>">Dashboard</a></li>
          <li><a href="<?= base_url('/project/all') ?>">Daftar Proyek</a></li>
          <li><a href="<?= base_url('') ?>register">Daftar</a></li>
        </ul>
      </div><!-- header-right -->
	  <?php } ?>
      </div><!-- headerbar -->
  </div><!-- header-->
</header>

<section>