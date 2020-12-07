<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Form Input Data Bank</h1>
          </div>

          <div class="card">
            <div class="card-body">


                <form method="POST" action="<?php echo base_url('admin/rekening/tambah_bank_aksi') ?>">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Bank</label>
                        <input type="text" name="nama_bank" class="form-control">
                        <?php echo form_error('nama_bank','<div class= "text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>No. Rekening</label>
                        <input type="text" name="no_rekening" class="form-control">
                        <?php echo form_error('no_rekening','<div class= "text-small text-danger">','</div>') ?>
                    </div>
                   
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Atas Nama</label>
                        <input type="text" name="atas_nama" class="form-control">
                        <?php echo form_error('atas_nama','<div class= "text-small text-danger">','</div>') ?>
                    </div>                   
                  
                    <button type="submit" class="btn btn-primary mt-4">SIMPAN</button>
                    <button type="reset" class="btn btn-danger mt-4">RESET</button>

                    </div>
                </div>
                </form>
            </div>          
          </div>
    </section>
</div>