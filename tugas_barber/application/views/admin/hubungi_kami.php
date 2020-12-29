<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Pesan Customer</h1>
          </div>


          <?php echo $this->session->flashdata('pesan') ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <tr>
              <th width="20px">No</th>
              <th>Nama Customer</th>
              <th >E-Mail</th>
              <th>Pesan</th>
              <th colspan="2" width="20px">Aksi</th>              
            </tr>
          
          <?php $no=1;
          foreach($hubungi as $hub) :   ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $hub->nama ?></td>
            <td><?php echo $hub->email ?></td>
            <td><?php echo $hub->pesan ?></td>
            <td width="20px"><?php echo anchor('admin/hubungi_kami/kirim_email/'.$hub->id_hubungi, '<div class="btn btn-sm btn-primary">
            <i class="fas fa-comment-dots"></i></div>')  ?></td>
            <td width="20px"><?php echo anchor('admin/hubungi_kami/delete_pesan/'.$hub->id_hubungi, '<div class="btn btn-sm btn-danger">
            <i class="fa fa-trash"></i></div>')  ?></td>
        </tr>
          <?php endforeach; ?>
          </table>
        </div>
    </section>
</div>