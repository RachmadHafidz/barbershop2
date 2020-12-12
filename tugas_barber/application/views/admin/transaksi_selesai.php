<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Transaksi Selesai</h1>
          </div>
        </section>

    <?php foreach($transaksi as $tr) : ?>
    <form method="post" action="<?php echo base_url('admin/data_transaksi/transaksi_selesai_aksi') ?>">
    <input type="hidden" name="id_order" value="<?php echo $tr->id_order ?>">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama Customer</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $tr->nama ?>" readonly>
            </div>

            <div class="form-group">
                <label>Status Order</label>
                <select name="status_order" class="form-control">  
                    <option value="<?php echo $tr->status_order ?>"><?php echo $tr->status_order ?></option>
                    <option value="Selesai">Selesai</option>        
                    <option value="Belum Selesai">Belum Selesai</option>       
                
                </select>
            </div>
        </div>
    </div>
        <button type="submit" class="btn btn-primary mt-4">SIMPAN</button>
    </form>
    <?php endforeach; ?>
</div>