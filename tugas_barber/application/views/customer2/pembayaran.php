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
                            <th>ALamat Order</th>
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
                            <td><a href="" class="btn btn-sm btn-secondary">Print Invoice Pembayaran</td>
                        </tr>

                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="margin-top: 150px">
                <div class="card-header alert alert-primary" ">
                    Konfirmasi Pembayaran Anda
                </div>

                <div class="card-body">
                    <p>Silahkan Melakukan Pembayaran</p>
                </div>
                <?php foreach($bank as $bk) : ?>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $bk->nama_bank ?>  <?php echo $bk->no_rekening ?> ( <?php echo $bk->atas_nama ?> )</li>                                                         
                </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>