<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="margin-top: 150px">
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Order Anda
                </div>

                <div class="card-body">
                    <table class="table">
                        <?php foreach($transaksi as $tr) : ?>
                        <tr>
                            <th>Nama Customer</th>
                            <td>:</td>
                            <td><?php echo $tr->nama ?></td>
                        </tr>
                        <tr>
                            <th>Nama Paket</th>
                            <td>:</td>
                            <td><?php echo $tr->nama_paket ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Order</th>
                            <td>:</td>
                            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_order));  ?></td>
                        </tr>
                        <tr>
                            <th>Alamat Order</th>
                            <td>:</td>
                            <td><?php echo $tr->alamat_order ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($tr->harga,0,',','.')  ?></td>
                        </tr>
                        <tr class="text-success">
                            <th>TOTAL PEMBAYARAN</th>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($tr->harga,0,',','.')  ?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td><a href="<?php echo base_url('customer2/transaksi/invoice/'. $tr->id_order)  ?>" class="btn btn-sm btn-secondary">Print Invoice Pembayaran</td>
                        </tr>

                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="margin-top: 150px">
                <div class="card-header alert alert-primary" >
                    Konfirmasi Pembayaran Anda
                </div>

                <div class="card-body">
                    <p class="text-success mb-3">Silahkan Melakukan Pembayaran</p>
                </div>
                <?php foreach($bank as $bk) : ?>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $bk->nama_bank ?>  <?php echo $bk->no_rekening ?> ( <?php echo $bk->atas_nama ?> )</li>                                                         
                </ul>
                <?php endforeach; ?>

                <?php   

                    if(empty($tr->bukti_pembayaran)) { ?>
                        <button style="width: 100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">
                            Upload Bukti Pembayaran
                        </button>
                    <?php }elseif($tr->status_pembayaran == '0'){ ?>
                        <button style="width: 100%" class="btn btn-sm btn-primary mt-3">
                        <i class="fa fa-clock-o"></i> Menunggu Konfirmasi Admin</button>
                    <?php }elseif($tr->status_pembayaran == '1'){ ?>
                        <button style="width: 100%" class="btn btn-sm btn-success mt-3">
                        <i class="fa fa-check"></i> Pembayaran Selesai</button>
                    <?php } ?> 
            </div>
        </div>
    </div>
</div>

<!-- Upload -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form method="post" action="<?php echo base_url('customer2/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data" >
      <div class="modal-body">
        <div class="form-group">
         <label>Upload Bukti Pembayaran</label>
         <input type="hidden" name="id_order" class="form-control" value="<?php echo $tr->id_order ?>">
         <input type="file" name="bukti_pembayaran" class="form-control">
        </div>
      </div>
      <div class="modal-footer">        
        <button type="submit" class="btn btn-sm btn-primary">Kirim</button>
      </div>
    </form>
    </div>
  </div>
</div>