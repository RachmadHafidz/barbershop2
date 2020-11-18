<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Data Customer</h1>
          </div>

          <a href ="<?php echo base_url('admin/data_customer/tambah_customer')   ?>" class="btn btn-primary mb-3">Tambah Customer</a>

          <?php echo $this->session->flashdata('pesan') ?>
          <table class="table table-striped table-responsive table-bordered">
          <tr>
          <thead>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Username</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>No.Telepon</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
                <?php
                $no=1;
                foreach($customer as $cs) :  ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $cs->nama ?></td>
                    <td><?php echo $cs->username ?></td>
                    <td><?php echo $cs->password ?></td>
                    <td><?php echo $cs->alamat ?></td>
                    <td><?php echo $cs->no_telepon ?></td>
                    <td>
                        <a href="<?php echo base_url('admin/data_customer/delete_paket/').$cs->id_customer ?>" class="btn btn-sm btn-danger"><i class=" fas fa-trash"></i></a>
                        <a href="<?php echo base_url('admin/data_customer/update_paket/').$cs->id_customer ?>" class="btn btn-sm btn-primary"><i class=" fas fa-edit"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            
            </tbody>
          
          
          
          
          
          </table>
























</div>