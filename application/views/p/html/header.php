<body>
  <div id="preloader">
    <div id="spinner"></div>
    <img class="preloader" src="<?= base_url(); ?>assets/images/dloader.png" alt="">
  </div>
  <header>
    <div class="header-menu">
        <div class="container">
            <div class="left-menu">
                <a class="item-menu hidden-xs" href="#"><i class="fa fa-facebook"></i></a>
                <a class="item-menu hidden-xs" href="#"><i class="fa fa-twitter"></i></a>
                <a class="item-menu" href="#"><i class="fa fa-search"></i></a>
            </div>
            <div class="right-menu">
                <?php if(!$this->ion_auth->logged_in()){ ?>
                <a class="item-menu" href="<?= base_url(''); ?>register">Daftar</a>
                <a class="item-menu" href="<?= base_url(''); ?>login">Masuk</a>
                <?php } else {?>
                <a class="item-menu" href="<?= base_url('dashboard') ?>">Dashboard</a>
                <a class="item-menu" href="<?= base_url('/auth/logout') ?>">Logout</a>
                <?php } ?>
                <a class="item-menu" href="<?= base_url(''); ?>project/all"><span class="hidden-xs">Daftar</span> Proyek</a>
            </div>
        </div>
    </div>
    <div class="header-help">
        <div class="container">
            <div class="left-menu">
                <a class="header-brand" href="http://sahabatdiaspora.com/">
                    <h3>SAHABAT</h3>
                    <h4>DIASPORA</h5>
                </a>
            </div>
            <div class="right-menu">
                <div class="header-block hidden-sm hidden-xs">
                    <div class="icon"><img src="<?= base_url('assets/flags')?>/sk.png" /></div>
                    <div class="desc">
                        <div class="country">Korea Selatan</div>
                        <div class="address">
                            서울특별시 강남구 역삼로17길 60, 3층 316-7호 (역삼동)
                        </div>
                        <div class="phone">+8210 59525 2349</div>
                    </div>
                </div>
                <div class="header-block hidden-sm hidden-xs">
                    <div class="icon"><img src="<?= base_url('assets/flags') ?>/ina.png" /></div>
                    <div class="desc">
                        <div class="country">Indonesia</div>
                        <div class="address">
                            Jl. HR Rasuna Said, Karet Kuningan, Setiabudi Jakarta Selatan 12940
                        </div>
                        <div class="phone">+6221 37530629</div>
                    </div>
                </div>
                <div class="header-block">
                    <a href="<?= base_url(''); ?>project/all" class="btn btn-donasi">DONASI <span class="hidden-xs">SEKARANG</span></a>
                </div>
            </div>
        </div>
    </div>
  </header>
  <section class="main-wrapper">