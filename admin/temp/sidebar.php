<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">RS. Betha Medika</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="?hal=home">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <hr>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Master
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="?hal=stokBarang">Barang</a>
                                    <a class="nav-link" href="?hal=barangMasuk">Barang Masuk</a>
                                    <a class="nav-link" href="?hal=barangKeluar">Barang Keluar</a>
                                    <a class="nav-link" href="?hal=supplier">Supplier</a>
                                    <a class="nav-link" href="?hal=unitPermintaan">Unit Permintaan</a> 
                                </nav>
                            </div>
                            <hr>
                            <a class="nav-link" href="?hal=laporanBarangMasuk">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Laporan Barang Masuk
                            </a>
                            <hr>
                            <a class="nav-link" href="?hal=laporanBarangKeluar">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Laporan Barang Keluar
                            </a>
                            <hr>
                            <a class="nav-link" href="logout.php" onclick=" return confirm('apakah anda yakin ingin Keluar?');">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Logout
                            </a>
                           
                        </div>
                    </div>
                  
                </nav>
            </div>