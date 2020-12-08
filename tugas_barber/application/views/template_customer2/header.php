<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HALAMAN CUSTOMER 2</title>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/assets_customer2/') ?>assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('assets/assets_customer2/') ?>css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo base_url('assets/assets_customer2/') ?>" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link <?php echo base_url('assets/assets_customer2/') ?> js-scroll-trigger" href="<?php echo base_url('customer2/fitur') ?>">Fitur Kami</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo base_url('assets/assets_customer2/') ?> js-scroll-trigger" href="#portfolio">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo base_url('assets/assets_customer2/') ?> js-scroll-trigger" href="#about">Baberman</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo base_url('assets/assets_customer2/') ?> js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo base_url('assets/assets_customer2/') ?> js-scroll-trigger" href="#map">Map</a></li>
                        <li class="nav-item">                        
                        <?php if ($this->session->userdata('nama')) { ?>                                                                     
                        <li class="nav-item"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">            
                            <div class="d-sm-none d-lg-inline-block">Hallo <?php echo $this->session->userdata('nama') ?>  
                            <?php } else { ?>
                            <a class="nav-link" href="<?php echo base_url('customer2/login/index') ?>"><span class="btn btn-sm btn-warning">Login</span></a>    
                            <?php } ?> </div></a>
                            <div class="dropdown-menu dropdown-menu-right">            
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="<?php echo base_url('customer2/fitur') ?>" class="dropdown-item has-icon">
                                <i class="fas fa-database"></i> Fitur Kami
                            </a>
                            <a href="<?php echo base_url('customer2/transaksi') ?>" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Transaksi
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo base_url('customer2/login/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </body>