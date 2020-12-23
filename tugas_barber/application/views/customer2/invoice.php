<div class="card-body">    
        <table style="width: 60%">
            <center><h2>Invoice Pembayaran Anda<h2></center>
                    <?php foreach($transaksi as $tr) : ?>
                    <tr>
                        <td>Nama Customer</td>
                        <td>:</td>
                        <td><?php echo $tr->nama ?></td>
                    </tr>
                    <tr>
                        <td>Nama Paket</td>
                        <td>:</td>
                        <td><?php echo $tr->nama_paket ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Order</td>
                        <td>:</td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_order));  ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Order</td>
                        <td>:</td>
                        <td><?php echo $tr->alamat_order ?></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td>Rp. <?php echo number_format($tr->harga,0,',','.')  ?></td>
                    </tr>
                    <tr>
                        <td>STATUS PEMBAYARAN</td>
                        <td>:</td>
                        <td>
                            <?php if($tr->status_pembayaran == '0') {
                                    echo "Belum Lunas"; 
                                }else{
                                    echo "Lunas";
                                }
                            ?>                        
                        </td>
                    
                    </tr>
                    <tr style="font-weight: bold; color: red">
                        <td>TOTAL PEMBAYARAN</td>
                        <td>:</td>
                        <td>Rp. <?php echo number_format($tr->harga,0,',','.')  ?></td>
                    </tr>
                    
            <?php endforeach; ?>
        </table>
    </div>                          
        <script type="text/javascript">
            window.print();
        </script>