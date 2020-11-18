<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Form Input Data Paket Cukur</h1>
          </div>
    </section>

    <form method="POST" action="<?php echo base_url('admin/data_customer/tambah_customer_aksi') ?>">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
        <?php echo form_error('nama','<span class= "text-small text-danger">','</span>') ?>
     </div>
     <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control">
        <?php echo form_error('username','<span class= "text-small text-danger">','</span>') ?>
     </div>
     <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
        <?php echo form_error('password','<span class= "text-small text-danger">','</span>') ?>
     </div>
     <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
        <?php echo form_error('alamat','<span class= "text-small text-danger">','</span>') ?>
     </div>
     <div class="form-group">
        <label>No.Telepon</label>
        <input type="text" name="no_telepon" class="form-control">
        <?php echo form_error('no_teleon','<span class= "text-small text-danger">','</span>') ?>
     </div>

     <button type="submit" class="btn btn-primary mt-4">SIMPAN</button>
     <button type="reset" class="btn btn-danger mt-4">RESET</button>

     </form>