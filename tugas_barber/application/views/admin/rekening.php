<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Data Rekening</h1>
          </div>

          <a href ="<?php echo base_url('admin/rekening/tambah_bank')   ?>" class="btn btn-primary mb-3">Tambah Bank</a>

          <?php echo $this->session->flashdata('pesan') ?> 
          <table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Bank</th>
                <th>No. Rekening</th>
                <th>Atas Nama</th>                
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach($bank as $bk) :  ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $bk->nama_bank ?></td>
                    <td><?php echo $bk->no_rekening ?></td>                    
                    <td><?php echo $bk->atas_nama ?></td>
                    <td>
                        
                        <a href="<?php echo base_url('admin/rekening/delete_rekening/').$bk->id_bank ?>" class="btn btn-sm btn-danger"><i class=" fas fa-trash"></i></a>
                        <a href="<?php echo base_url('admin/rekening/update_rekening/').$bk->id_bank ?>" class="btn btn-sm btn-primary"><i class=" fas fa-edit"></i></a>

                    </td>
                </tr>
                <?php endforeach; ?>
            
            </tbody>
          </table>







    </section>
</div>   
        
         
          
         