<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Data Transaksi</h1>
          </div>

        <div class="table-responsive">
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
              <th>Cek Pembayaran</th>
              <th>Action</th>
            </tr>
          
          <?php $no=1;
          foreach($transaksi as $tr) :   ?>

          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $tr->nama ?></td>
            <td><?php echo $tr->nama_paket ?></td>
            <td><?php echo $tr->detail_paket ?></td>
            <td>Rp. <?php echo number_format($tr->harga,0,',','.')  ?></td>
            <td><?php echo $tr->alamat_order ?></td>
            <td><?php echo date('d/m/y', strtotime($tr->tanggal_order));  ?></td>
            <td><?php echo $tr->status_order ?></td>
            <td>
              <center>
                <?php
                if(empty($tr->bukti_pembayaran)) { ?>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                <?php }else{ ?>
                  <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/data_transaksi/pembayaran/'. $tr->id_order) ?>">
                  <i class="fas fa-check-circle"></i></a>
                <?php } ?>
              </center>
            </td>
            <td>
            <?php 
            if($tr->status_order == "1"){
              echo "-";
            }else { ?>
            
              <div class="row">
                <a class="btn btn-sm btn-success mr-2" href="<?php echo base_url('admin/data_transaksi/transaksi_selesai/'.$tr->id_order)?>">
                <i class='fas fa-check'></i></a>
                <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_transaki/transaksi_batal/'.$tr->id_order)?>">
                <i class='fas fa-times'></i></a>
              </div>
            <?php } ?>
            
                     
            </td>
          </tr>

          <?php endforeach; ?>
          </table>
        </div>
    </section>
</div>