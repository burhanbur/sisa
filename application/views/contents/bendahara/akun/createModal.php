        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Akun</h4>
              </div>
              <div class="modal-body">
                <!-- form start -->
                <form action="<?php echo base_url('bendahara/akun/store'); ?>" method="POST" role="form" enctype="multipart/form-data">
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