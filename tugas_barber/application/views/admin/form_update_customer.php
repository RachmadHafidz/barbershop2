<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Form Update Data Customer</h1>
          </div>

          <div class="card">
            <div class="card-body">

            <?php foreach($customer as $cs) : ?>

                <form method="POST" action="<?php echo base_url('admin/data_customer/update_data_aksi') ?>">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $cs->nama ?>" >
                        <input type="hidden" name="id_customer"  value="<?php echo $cs->id_customer ?>" >
                        <?php echo form_error('nama','<div class= "text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $cs->username ?>">
                        <?php echo form_error('username','<div class= "text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $cs->password ?>">
                        <?php echo form_error('password','<div class= "text-small text-danger">','</div>') ?>
                    </div>
                    
                    </div>
                    <div class="col-md-6">                    
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $cs->alamat ?>">
                        <?php echo form_error('alamat','<div class= "text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>NO.Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" value="<?php echo $cs->no_telepon ?>">
                        <?php echo form_error('no_telepon','<div class= "text-small text-danger">','</div>') ?>
                    </div>
                    

                  <button type="submit" class="btn btn-primary mt-4">SIMPAN</button>
                  <button type="reset" class="btn btn-danger mt-4">RESET</button>


                    </div>
                </div>
                </form>
            <?php endforeach; ?>
            </div>          
          </div>
    </section>
</div>