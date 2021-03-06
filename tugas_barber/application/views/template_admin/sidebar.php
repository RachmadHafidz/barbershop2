<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">                    
          <li class="nav-link"><a class="nav-link  nav-link-lg nav-link-user">            
            <div class="d-sm-none d-lg-inline-block">Hallo <?php echo $this->session->userdata('nama') ?> </div></a>            
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Barbershop</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">BS</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="#">
                <a href="<?php echo base_url('admin/dashboard_admin') ?>" class="#"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a class="nav-link" href="#">General Dashboard</a></li>
                  <li><a class="nav-link" href="#">Ecommerce Dashboard</a></li>
                </ul>
              </li>              
              
              <li>
              <a class="nav-link" href="<?php echo base_url('admin/paket_cukur') ?>"><i class="fas fa-cut"></i> <span>Paket Cukur</span></a>
              </li>
              <li>
              <a class="nav-link" href="<?php echo base_url('admin/data_customer') ?>"><i class="fas fa-id-card"></i> <span>Data Customer</span></a>
              </li>
              <li>
              <a class="nav-link" href="<?php echo base_url('admin/data_transaksi') ?>"><i class="fas fa-database"></i> <span>Data Transaksi</span></a>
              </li>
              <li>
              <a class="nav-link" href="<?php echo base_url('admin/rekening') ?>"><i class="fas fa-credit-card"></i> <span>Rekening Bank</span></a>
              </li>
              <li>
              <a class="nav-link" href="<?php echo base_url('admin/laporan') ?>"><i class="fas fa-money-check"></i> <span>Laporan Transaksi</span></a>
              </li>
              <li>
              <a class="nav-link" href="<?php echo base_url('admin/hubungi_kami') ?>"><i class="fas fa-envelope-open-text"></i> <span>Pesan Customer</span></a>
              </li>
              <li>
              <a class="nav-link dropdown-item has-icon text-danger"  href="<?php echo base_url('customer2/login/logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
              </li>
            </ul>

           
        </aside>
      </div>