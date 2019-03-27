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

            <form role="form" action="<?php echo base_url('bendahara/guru/store'); ?>" method="POST" enctype="multipart/form-data">
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="form-group">
                    <label>Nomor Induk *</label>
                    <input type="text" class="form-control" name="nip" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Nama *</label>
                    <input type="text" class="form-control" name="nama" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Status *</label>
                    <input type="radio" required autofocus name="status" value="1"> AKTIF  &nbsp; &nbsp; 
                    <input type="radio" name="status" value="0"> NON-AKTIF  &nbsp; &nbsp;
                  </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('bendahara/guru'); ?>" class="btn btn-default">Kembali</a>
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