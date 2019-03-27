        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Jurusan</h4>
              </div>
              <div class="modal-body">
                <!-- form start -->
                <form action="<?php echo base_url('bendahara/jurusan/store'); ?>" method="POST" role="form" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Kode Jurusan *</label>
                      <input type="text" class="form-control" name="kode" required autofocus>
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