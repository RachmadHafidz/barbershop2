
<div class="container">
    <div class="card mx-auto" style="margin-top: 180px; width: 90%">
        <div class="card-header">
            Data Tansaksi Anda
        </div>

        
        <span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan') ?></span>
        <div class="card-body">
            <table class="table table-bordered table-striped">
            <tr>
                <th>NO</th>
                <th>Nama Customer</th>
                <th>Nama Paket</th>
                <th>Detail Paket</th>
                <th>Harga Paket</th>
                <th>Tangal Order</th>
                <th>Alamat</th>
                <th>Action</th>
                <th>Batal</th>
            </tr>

            <?php $no=1; foreach($transaksi as $tr) :   ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $tr->nama ?></td>
                <td><?php echo $tr->nama_paket ?></td>
                <td><?php echo $tr->detail_paket ?></td>
                <td>Rp. <?php echo number_format($tr->harga,0,',','.')  ?></td>
                <td><?php echo date('d/m/Y', strtotime($tr->tanggal_order));  ?></td>
                <td><?php echo $tr->alamat_order ?></td>
                <td>
                    <?php if($tr->status_order == "Selesai") { ?>
                        <button class="btn btn-sm btn-success">Order Selesai</button>           
                    <?php }else{ ?>
                        <a href="<?php echo base_url('customer2/transaksi/pembayaran/' .$tr->id_order) ?>" class="btn btn-sm btn-danger">Cek Pembayaran</a>
                    <?php } ?>
                </td>
                <td>
                 
                 <?php
                    if($tr->status_order == 'Belum Selesai') { ?>
                       
                        <a onclick="return confirm('Yakin Membatalkan Orderan?')" class="btn btn-sm btn-danger" 
                        href="<?php echo base_url('customer2/transaksi/batal_transaksi/'.$tr->id_order) ?>">
                        Batal Order
                        </a>
                    <?php }else{ ?>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                        Batal Order
                        </button>
                    <?php } ?>
                 
                </td>
            </tr>
            
                

            <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Batal Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Mohon Maaf, transaksi order ini sudah selesai dan tidak bisa anda batalkan!
      </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Siap</button>
      </div>
    </div>
  </div>
</div>

