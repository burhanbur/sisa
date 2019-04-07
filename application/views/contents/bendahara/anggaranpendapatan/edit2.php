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
              <h2 class="box-title">UBAH DATA</h2>
            </div>            

            <form role="form" action="<?php echo base_url('bendahara/anggaranpendapatan/update'); ?>" method="POST" enctype="multipart/form-data">
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="hidden form-group">
                    <input type="text" class="form-control" name="id" value="<?php echo $data->id; ?>" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Nama *</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $data->nama; ?>" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Kode *</label>
                    <input type="text" class="form-control" name="kode" value="<?php echo $data->kode; ?>" required autofocus>
                  </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('bendahara/anggaranpendapatan') ?>" class="btn btn-default">Kembali</a>
                  <button type="submit" class="btn btn-primary">Ubah</button>
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