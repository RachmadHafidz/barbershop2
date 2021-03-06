<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Form Update Data Paket Cukur</h1>
          </div>

          <div class="card">
            <div class="card-body">

            <?php foreach($paket as $pk) : ?>

                <form method="POST" action="<?php echo base_url('admin/paket_cukur/update_paket_aksi') ?>">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Paket Cukur</label>
                        <input type="text" name="nama_paket" class="form-control" value="<?php echo $pk->nama_paket ?>" >
                        <input type="hidden" name="id_paket"  value="<?php echo $pk->id_paket ?>" >
                        <?php echo form_error('nama_paket','<div class= "text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Detail Paket</label>
                        <input type="text" name="detail_paket" class="form-control" value="<?php echo $pk->detail_paket ?>">
                        <?php echo form_error('detail_paket','<div class= "text-small text-danger">','</div>') ?>
                    </div>
                    
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Harga Paket</label>
                        <input type="text" name="harga" class="form-control" value="<?php echo $pk->harga ?>">
                        <?php echo form_error('harga','<div class= "text-small text-danger">','</div>') ?>
                    </div>

                  <button type="submit" class="btn btn-primary mt-4">SIMPAN</button>
                  <button type="reset" class="btn btn-danger mt-4">RESET</button>


                    </div>
                </div>
                </form>
            <?php endforeach; ?>
            </div>          
          </div>
    </section>
</div>