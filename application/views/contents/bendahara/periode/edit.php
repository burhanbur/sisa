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

            <form role="form" action="<?php echo base_url('bendahara/periode/update'); ?>" method="POST" enctype="multipart/form-data">
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="hidden form-group">
                    <input type="text" class="form-control" name="id" value="<?php echo $data->id; ?>" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Tahun Ajaran *</label>
                    <input type="text" class="form-control" name="tahun_ajaran" value="<?php echo $data->tahun_ajaran; ?>" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Tahun *</label>
                    <input type="text" class="form-control" name="tahun" value="<?php echo $data->tahun; ?>" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Status *</label>
                    <input <?php if($data->status_id == 1){echo 'checked';}?> type="radio" required autofocus name="status" value="1"> AKTIF  &nbsp; &nbsp; 
                    <input <?php if($data->status_id == 0){echo 'checked';}?> type="radio" name="status" value="0"> NON-AKTIF  &nbsp; &nbsp;
                  </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('bendahara/periode') ?>" class="btn btn-default">Kembali</a>
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