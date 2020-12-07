
<div class="container">
    <div class="card mx-auto" style="margin-top: 180px; width: 80%">
        <div class="card-header">
            Data Tansaksi Anda
        </div>
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
            </tr>

            <?php $no=1; foreach($transaksi as $tr) :   ?>
            <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $tr->nama ?></td>
            <td><?php echo $tr->nama_paket ?></td>
            <td><?php echo $tr->detail_paket ?></td>
            <td>Rp. <?php echo number_format($tr->harga,0,',','.')  ?></td>
            <td><?php echo date('d/m/y', strtotime($tr->tanggal_order));  ?></td>
            <td><?php echo $tr->alamat_order ?></td>


            </tr>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>