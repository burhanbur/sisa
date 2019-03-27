<style type="text/css">
  .photo{
    width: 300px;
    height: 400px;
  }
</style>
  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h2 class="box-title">TAMBAH DATA</h2>
            </div>            

            <form role="form" action="<?php echo base_url('bendahara/akun/store'); ?>" method="POST" enctype="multipart/form-data">
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="form-group">
                    <label>Nama *</label>
                    <input type="text" class="form-control" name="nama" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Username *</label>
                    <input type="text" class="form-control" name="username" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" class="form-control" name="password" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Role *</label>
                    <select name="role" class="form-control" required autofocus>
                      <option value=""> ----- Pilih Role ----- </option>
                      <?php 
                        foreach ($roles as $row) { ?>
                        <option value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
                        <?php }
                      ?>
                      </select>
                  </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('bendahara/akun'); ?>" class="btn btn-default">Kembali</a>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
             </div>
          </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->