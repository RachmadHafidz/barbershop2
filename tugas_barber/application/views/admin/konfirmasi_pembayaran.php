<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Halaman Konfirmasi Pembayaran</h1>
          </div>

          <div class="card" style="width: 55%">
            <div class="card-header">
            Konfirmasi Pembayaran Customer
            </div>
            
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_transaksi/cek_pembayaran/') ?>">
                <?php foreach($pembayaran as $byr) : ?>
                    <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/data_transaksi/download_bayar/'. $byr->id_order) ?>">
                    <i class="fas fa-download ml-3">Download Bukti Pembayaran Customer</i></a>

                    <div class="form-check mt-3">
                        <input type="hidden" class="form-check-input" name="id_order" value="<?php echo $byr->id_order ?>">
                        <input class="form-check-input" type="checkbox" value="1" name="status_pembayaran" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Centang Untuk Mengkonfirmasi Pembayaran
                        </label>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

                <?php endforeach; ?>
                
                </form>

          </div>
    </section>
</div>