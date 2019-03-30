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

            <form role="form" action="<?php echo base_url('bendahara/siswa/store'); ?>" method="POST" enctype="multipart/form-data">
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="form-group">
                    <label>Nomor Induk *</label>
                    <input type="text" class="form-control" name="nis" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Nomor Induk Nasional</label>
                    <input type="text" class="form-control" name="nisn">
                  </div>
                  <div class="form-group">
                    <label>Nama *</label>
                    <input type="text" class="form-control" name="nama" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir *</label>
                    <input type="text" class="form-control" name="tempat_lahir" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir *</label>
                    <input type="text" class="form-control" name="tgl_lahir" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin *</label>
                    <input type="radio" class="minimal" required autofocus name="jenis_kelamin" value="Laki-Laki" checked> Laki-Laki  &nbsp; &nbsp; 
                    <input type="radio" class="minimal" name="jenis_kelamin" value="Perempuan"> Perempuan  &nbsp; &nbsp;
                  </div>
                 <div class="form-group">
                    <label>Agama *</label>
                    <select name="agama" class="form-control" required autofocus>
                      <option value=""> ----- Pilih Agama ----- </option>
                      <?php 
                        foreach ($agama as $row) { ?>
                        <option value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
                        <?php }
                      ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>No. Handphone</label>
                    <input type="text" class="form-control" name="no_hp">
                  </div>
                  <div class="form-group">
                    <label>Email *</label>
                    <input type="email" class="form-control" name="email" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah">
                  </div>
                  <div class="form-group">
                    <label>Tahun Masuk *</label>
                    <input type="text" class="form-control" name="tahun_masuk" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Status *</label>
                    <input type="radio" required autofocus name="status" value="1"> AKTIF  &nbsp; &nbsp; 
                    <input type="radio" name="status" value="0"> NON-AKTIF  &nbsp; &nbsp;
                  </div>
                  <div class="form-group">
                    <label>Nama Ayah</label>
                    <input type="text" class="form-control" name="nama_ayah">
                  </div>
                  <div class="form-group">
                    <label>Nama Ibu *</label>
                    <input type="text" class="form-control" name="nama_ibu" required autofocus>
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
                  <a href="<?php echo base_url('bendahara/siswa'); ?>" class="btn btn-default">Kembali</a>
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