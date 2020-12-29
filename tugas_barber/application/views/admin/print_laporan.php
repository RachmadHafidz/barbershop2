<h3 style="text-align: center">Laporan Transaksi Barbershop Lareoz</h3>
<table>
<tr>
    <td>Dari Tanggal</td>
    <td>:</td>
    <td><?php echo date('d-M-Y',strtotime($_GET['dari'])); ?></td>
</tr>
<tr>
    <td>Sampai Tanggal</td>
    <td>:</td>
    <td><?php echo date('d-M-Y',strtotime($_GET['sampai'])); ?></td>
</tr>
</table>

<div class="table-responsive mt-4">
<table class="table table-bordered table-striped ">
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

<script type="text/javascript">
    window.print();
</script>