<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Form Balas Pesan Customer</h1>
          </div>    

        <?php foreach($hubungi as $hub): ?>
            <form method="POST" action="<?php echo base_url('admin/hubungi_kami/kirim_email_aksi') ?>">

            <div class="form-group">
                <label>E-mail</label>
                <input type="hidden" name="id_hubungi" value="<?php echo $hub->id_hubungi ?>">
                <input type="text" name="email" class="form-control" value="<?php echo $hub->email ?>" readonly>
            </div>
            <div class="form-group">
                <label>Subject</label>            
                <input type="text" name="subject" class="form-control" >
            </div>
            <div class="form-group">
                <label>Pesan</label>            
                <textarea type="text" name="pesan" class="form-control" rows="5" ></textarea>
            </div>        
        
            <button type="submit" class="btn btn-primary">KIRIM</button>
            </form>
        <?php endforeach; ?>
    </section>
</div>