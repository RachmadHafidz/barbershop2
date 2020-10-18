<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Paket Cukur</h1>
          </div>
        
        
          <a href ="#" class="btn btn-primary mb-3">Tambah Paket</a>
          <table class="table table-hover table-striped table-bordered">
            <thead>
                <th>No</th>
                <th>Nama Paket</th>
                <th>Detail Paket</th>
                <th>Harga Paket</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach($paket as $pk) :  ?>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pk->nama_paket ?></td>
                    <td><?php echo $pk->detail_paket ?></td>
                    <td><?php echo $pk->harga ?></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-success"><i class=" fas fa-eye"></i></a>
                        <a href="#" class="btn btn-sm btn-danger"><i class=" fas fa-trash"></i></a>
                        <a href="#" class="btn btn-sm btn-primary"><i class=" fas fa-edit"></i></a>



                    

                    </td>
                <?php endforeach; ?>
            
            </tbody>
          </table>
    </section>
</div>          