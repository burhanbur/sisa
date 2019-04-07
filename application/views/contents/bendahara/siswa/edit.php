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

            <form role="form" action="<?php echo base_url('bendahara/siswa/update'); ?>" method="POST" enctype="multipart/form-data">
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="hidden form-group">
                    <input type="text" class="form-control" name="id" value="<?php echo $data->id; ?>" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Nomor Induk *</label>
                    <input type="text" class="form-control" name="nis" value="<?php echo $data->nomor_induk; ?>" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Nomor Induk Nasional</label>
                    <input type="text" class="form-control" name="nisn" value="<?php echo $data->nomor_induk_nasional; ?>">
                  </div>
                  <div class="form-group">
                    <label>Nama *</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $data->nama; ?>" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat"><?php echo $data->alamat; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir *</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $data->tempat_lahir; ?>" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir *</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" id="datepicker" class="form-control" name="tgl_lahir" value="<?php echo $data->tgl_lahir; ?>" required autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin *</label>
                    <input <?php if($data->jenis_kelamin == 'Laki-Laki'){echo 'checked';}?> type="radio" required autofocus name="jenis_kelamin" value="Laki-Laki"> Laki-Laki  &nbsp; &nbsp; 
                    <input <?php if($data->jenis_kelamin == 'Perempuan'){echo 'checked';}?> type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan  &nbsp; &nbsp;
                  </div>
                 <div class="form-group">
                    <label>Agama *</label>
                    <select name="agama" class="form-control" required autofocus>
                      <option value=""> ----- Pilih Agama ----- </option>
                      <?php 
                        foreach ($agama as $row) { ?>
                        <option <?php if($data->agama_id == $row->id){echo "selected";} ?> value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
                        <?php }
                      ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>No. Handphone</label>
                    <input type="text" class="form-control" name="no_hp" value="<?php echo $data->no_hp; ?>">
                  </div>
                  <div class="form-group">
                    <label>Email *</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $data->email; ?>" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah" value="<?php echo $data->asal_sekolah; ?>">
                  </div>
                  <div class="form-group">
                    <label>Tahun Masuk *</label>
                    <input type="text" class="form-control" name="tahun_masuk" value="<?php echo $data->tahun_masuk; ?>" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Status *</label>
                    <input <?php if($data->status_id == 1){echo 'checked';}?> type="radio" required autofocus name="status" value="1"> AKTIF  &nbsp; &nbsp; 
                    <input <?php if($data->status_id == 0){echo 'checked';}?> type="radio" name="status" value="0"> NON-AKTIF  &nbsp; &nbsp;
                  </div>
                  <div class="form-group">
                    <label>Nama Ayah</label>
                    <input type="text" class="form-control" name="nama_ayah" value="<?php echo $data->nama_ayah; ?>">
                  </div>
                  <div class="form-group">
                    <label>Nama Ibu *</label>
                    <input type="text" class="form-control" name="nama_ibu" value="<?php echo $data->nama_ibu; ?>" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Unggah Foto</label>
                    <input type="file" name="foto" accept="image/*">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="foto2">
                    <!-- <img class="img-responsive photo" src=""> -->
                  </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('bendahara/siswa') ?>" class="btn btn-default">Kembali</a>
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