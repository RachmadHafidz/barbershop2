<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Detail Paket</h1>
          </div>      
    </section>

    <?php foreach($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <table class="table">
                            <tr>
                                <td>Nama Paket</td>
                                <td><?php echo $dt->nama_paket  ?></td>
                            </tr>
                            <tr>
                                <td>Detail Paket</td>
                                <td><?php echo $dt->detail_paket  ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><?php echo $dt->harga  ?></td>
                            </tr>

                        </table>
                        
                        <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/paket_cukur') ?>">KEMBALI</a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/paket_cukur/update_paket/'.$dt->id_paket) ?>">UPDATE DATA</a>
                    </div>
                </div>
            </div>
        </div>


    <?php endforeach; ?>
</div>          