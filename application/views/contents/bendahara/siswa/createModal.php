        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Siswa</h4>
              </div>
              <div class="modal-body">
                <!-- form start -->
                <form action="<?php echo base_url('bendahara/siswa/store'); ?>" method="POST" role="form" enctype="multipart/form-data">
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
                      <label>Jurusan *</label>
                      <select name="jurusan" id="jurusan_id" class="form-control" required autofocus>
                        <option value=""> ----- Pilih Jurusan ----- </option>
                        <?php 
                          foreach ($jurusan as $row) { ?>
                          <option <?php echo $jurusan_selected == $row->id ? 'selected="selected"' : '' ?>
                          value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
                          <?php }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Kelas *</label>
                      <select name="kelas" id="kelas_id" class="form-control" required autofocus>
                        <option value=""> ----- Pilih Kelas ----- </option>
                        <?php 
                          foreach ($kelas as $row) { ?>
                          <option <?php echo $kelas_selected == $row->jurusan_id ? 'selected="selected"' : '' ?>
                          class="<?php echo $row->jurusan_id ?>" value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
                          <?php }
                        ?>
                        </select>
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

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->