

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo base_url('assets/assets_customer2/') ?>" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">                        
                        <li class="nav-item"><a class="nav-link <?php echo base_url('assets/assets_customer2/') ?> js-scroll-trigger" href="#portfolio">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo base_url('assets/assets_customer2/') ?> js-scroll-trigger" href="#about">Baberman</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo base_url('assets/assets_customer2/') ?> js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-link"><a href="<?php echo base_url('customer2/login') ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container mt-4">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pengisian Data</h2>
                    <h3 class="section-subheading text-muted">Silahkan Mengisi Data Order</h3>
                </div>
                <div class="card" style="margin top: 200px">
                    <div class="card-header">
                        <div class="card-body">
                            <?php foreach ($detail as $dt) : ?>
                            <form method="POST" action="<?php echo base_url('customer2/pengisian_data/tambah_order_aksi') ?>">
                            <div class="form-group">
                                <label>Nama Paket</label>
                                <input type="hidden" name="id_paket" value="<?php echo $dt->id_paket ?>">
                                <input type="text" name="nama_paket" class="form-control" value="<?php echo $dt->nama_paket ?>" readonly>                    
                            </div>

                            <div class="form-group">
                                <label>Detail Paket</label>
                                <input type="hidden" name="id_paket" value="<?php echo $dt->id_paket ?>">
                                <input type="text" name="detail_paket" class="form-control" value="<?php echo $dt->detail_paket ?>" readonly>                    
                            </div>

                            <div class="form-group">
                                <label>Harga Paket</label>
                                <input type="hidden" name="id_paket" value="<?php echo $dt->id_paket ?>">
                                <input type="text" name="harga" class="form-control" value="<?php echo $dt->harga ?>" readonly>                    
                            </div>

                            <div class="form-group">
                                <label>Tanggal Order</label>                        
                                <input type="date" name="tanggal_order" class="form-control">                    
                            </div>

                            <div class="form-group">
                                <label>Alamat Lengkap</label>                        
                                <input type="text" name="alamat" class="form-control">                    
                            </div>

                            <button type="submit" class="btn btn-warning">Order</button>
                            
                            </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
        
    </body> 

    
               