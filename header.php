<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                   <center> <img src="img/logo.png" alt="Logo" class="logo"></center>
                    <h1 class="m-0"><span class="text-primary"></span>KIRKDİLİM KÖYÜ</h1>
                </a>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Köyümüz</h6>
                        <small>Kırkdilim Köyü, Çekerek, Yozgat</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Email</h6>
                        <small>yozgatcekerekkirkdilim@gmail.com</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-left">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">İletişim </h6>
                        <small>+012 345 6789</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            
         <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary"></span>KIRKDİLİM KÖYÜ</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">ANASAYFA</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle <?php echo basename($_SERVER['PHP_SELF']) == 'koyHakkinda.php' || basename($_SERVER['PHP_SELF']) == 'dernekHakkinda.php' ? 'active' : ''; ?>" data-toggle="dropdown">HAKKIMIZDA</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="koyHakkinda.php" class="dropdown-item <?php echo basename($_SERVER['PHP_SELF']) == 'koyHakkinda.php' ? 'active' : ''; ?>">KÖYÜMÜZ HAKKINDA</a>
                                    <a href="dernekHakkinda.php" class="dropdown-item <?php echo basename($_SERVER['PHP_SELF']) == 'dernekHakkinda.php' ? 'active' : ''; ?>">DERNEĞİMİZ HAKKINDA</a>
                                </div>
                            </div>
                            <a href="galeri.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'galeri.php' ? 'active' : ''; ?>">GALERİ</a>
                            <a href="teacher.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'teacher.php' ? 'active' : ''; ?>">DÜĞÜN/NİŞAN TAKVİMİ</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle <?php echo basename($_SERVER['PHP_SELF']) == 'blog.php' || basename($_SERVER['PHP_SELF']) == 'single.php' ? 'active' : ''; ?>" data-toggle="dropdown">DUYURULAR</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="genelDuyuru.php" class="dropdown-item <?php echo basename($_SERVER['PHP_SELF']) == 'genelDuyuru.php' ? 'active' : ''; ?>">GENEL DUYURULAR</a>
                                    <a href="vefatDuyuru.php" class="dropdown-item <?php echo basename($_SERVER['PHP_SELF']) == 'vefatDuyuru.php' ? 'active' : ''; ?>">VEFAT DUYURULARI</a>
                                </div>
                            </div>
                            <a href="iletisim.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'iletisim.php' ? 'active' : ''; ?>">İLETİŞİM</a>
                        </div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="">Admin</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->