<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Laporan Transaksi</h1>
          </div>
    </section>
    
    <form method="POST" action="<?php echo base_url('admin/laporan') ?>">
        <div class="form-group">
            <label>Dari Tanggal ( Transaksi )</label>
            <input type="date" name="dari" class="form-control">
            <?php echo form_error('dari','<span class= "text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Sampai Tanggal ( Transaksi )</label>
            <input type="date" name="sampai" class="form-control">
            <?php echo form_error('sampai','<span class= "text-small text-danger">','</span>') ?>
        </div>

        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Tampilkan Data Transaksi</button>
    </form>
    <div class="table-responsive mt-3">
          <table class="table table-bordered table-striped">
            <tr>
              <th>No</th>
              <th>Nama Customer</th>
              <th>Nama Paket</th>
              <th>Detail Paket</th>
              <th>Harga Paket</th>
              <th>Alamat</th>
              <th>Tanggal Order</th>
              <th>Status Order</th>              
            </tr>
          
          <?php $no=1;
          foreach($laporan as $tr) :   ?>

          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $tr->nama ?></td>
            <td><?php echo $tr->nama_paket ?></td>
            <td><?php echo $tr->detail_paket ?></td>
            <td>Rp. <?php echo number_format($tr->harga,0,',','.')  ?></td>
            <td><?php echo $tr->alamat_order ?></td>
            <td><?php echo date('d/m/y', strtotime($tr->tanggal_order));  ?></td>
            <td><?php echo $tr->status_order ?></td>
           
          </tr>

          <?php endforeach; ?>
          </table>
        </div>
</div>