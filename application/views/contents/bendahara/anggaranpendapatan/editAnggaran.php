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

            <form role="form" action="<?php echo base_url('bendahara/anggaranpendapatan/updateAnggaran'); ?>" method="POST" enctype="multipart/form-data">
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
                    <label>Biaya *</label>
                    <input type="text" class="form-control" name="biaya" value="<?php echo $data->biaya; ?>" required autofocus>
                  </div>                  
                  <div class="form-group">
                    <label>Kelas *</label>
                    <input <?php if($data->tingkat == 10){echo 'checked';}?> type="radio" required autofocus name="tingkat" value="10"> KELAS X  &nbsp; &nbsp; 
                    <input <?php if($data->tingkat == 11){echo 'checked';}?> type="radio" name="tingkat" value="11"> KELAS XI  &nbsp; &nbsp;
                    <input <?php if($data->tingkat == 12){echo 'checked';}?> type="radio" name="tingkat" value="12"> KELAS XII  &nbsp; &nbsp;
                  </div>
                 <div class="form-group">
                    <label>Anggaran *</label>
                    <select class="form-control" required autofocus disabled>
                      <?php 
                        foreach ($anggaran as $row) { ?>
                        <option <?php if($data->ref_anggaran == $row->id){echo "selected";} ?> value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
                        <?php }
                      ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Periode *</label>
                    <select class="form-control" required autofocus disabled>
                      <?php 
                        foreach ($periode as $row) { ?>
                        <option <?php if($data->periode_id == $row->id){echo "selected";} ?> value="<?php echo $row->id;?>"><?php echo $row->tahun_ajaran;?></option>
                        <?php }
                      ?>
                      </select>
                  </div>
                  <!-- hidden -->
                  <div class="hidden">
                    <select name="anggaran" class="form-control" required autofocus>
                      <?php 
                        foreach ($anggaran as $row) { ?>
                        <option <?php if($data->ref_anggaran == $row->id){echo "selected";} ?> value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
                        <?php }
                      ?>
                      </select>
                    <select name="periode" class="form-control" required autofocus>
                      <?php 
                        foreach ($periode as $row) { ?>
                        <option <?php if($data->periode_id == $row->id){echo "selected";} ?> value="<?php echo $row->id;?>"><?php echo $row->tahun_ajaran;?></option>
                        <?php }
                      ?>
                      </select>
                  </div>
                  <!-- /.hidden -->
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