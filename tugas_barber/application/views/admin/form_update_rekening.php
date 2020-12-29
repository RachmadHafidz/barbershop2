<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Form Update Data Rekening</h1>
          </div>

          <div class="card">
            <div class="card-body">

            <?php foreach($rekening as $rk) : ?>

                <form method="POST" action="<?php echo base_url('admin/rekening/update_rekening_aksi') ?>">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Bank</label>
                        <input type="text" name="nama_bank" class="form-control" value="<?php echo $rk->nama_bank ?>" >
                        <input type="hidden" name="id_bank"  value="<?php echo $rk->id_bank ?>" >
                        <?php echo form_error('nama_paket','<div class= "text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>No.Rekening</label>
                        <input type="text" name="no_rekening" class="form-control" value="<?php echo $rk->no_rekening ?>">
                        <?php echo form_error('no_rekening','<div class= "text-small text-danger">','</div>') ?>
                    </div>
                    
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Atas Nama</label>
                        <input type="text" name="atas_nama" class="form-control" value="<?php echo $rk->atas_nama ?>">
                        <?php echo form_error('atas_nama','<div class= "text-small text-danger">','</div>') ?>
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