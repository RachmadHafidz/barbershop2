<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Paket Cukur</h1>
          </div>
        
        
          <a href ="<?php echo base_url('admin/paket_cukur/tambah_paket')   ?>" class="btn btn-primary mb-3">Tambah Paket</a>
          
          <?php echo $this->session->flashdata('pesan') ?>
          <table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Paket</th>
                <th>Detail Paket</th>
                <th>Harga Paket</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach($paket as $pk) :  ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pk->nama_paket ?></td>
                    <td><?php echo $pk->detail_paket ?></td>
                    <td><?php echo $pk->harga ?></td>
                    <td>
                        <a href="<?php echo base_url('admin/paket_cukur/detail_paket/').$pk->id_paket ?>" class="btn btn-sm btn-success"><i class=" fas fa-eye"></i></a>
                        <a href="<?php echo base_url('admin/paket_cukur/delete_paket/').$pk->id_paket ?>" class="btn btn-sm btn-danger"><i class=" fas fa-trash"></i></a>
                        <a href="<?php echo base_url('admin/paket_cukur/update_paket/').$pk->id_paket ?>" class="btn btn-sm btn-primary"><i class=" fas fa-edit"></i></a>

                    </td>
                </tr>
                <?php endforeach; ?>
            
            </tbody>
          </table>
    </section>
</div>          