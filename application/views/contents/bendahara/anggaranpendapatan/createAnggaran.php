        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Anggaran Pendapatan</h4>
              </div>
              <div class="modal-body">
                <!-- form start -->
                <form action="<?php echo base_url('bendahara/anggaranpendapatan/storeAnggaran'); ?>" method="POST" role="form" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama *</label>
                      <input type="text" class="form-control" name="nama" required autofocus>
                    </div>
                    <div class="form-group">
                      <label>Biaya *</label>
                      <input type="text" class="form-control" name="biaya" required autofocus>
                    </div>                                       
                    <div class="form-group">
                      <label>Kelas *</label>
                      <input type="radio" required autofocus name="tingkat" value="10"> Kelas X  &nbsp; &nbsp; 
                      <input type="radio" name="tingkat" value="11"> Kelas XI  &nbsp; &nbsp;
                      <input type="radio" name="tingkat" value="12"> Kelas XII  &nbsp; &nbsp;
                    </div>                
                   <div class="form-group">
                      <label>Anggaran *</label>
                      <select class="form-control" required autofocus disabled>
                        <?php 
                          foreach ($anggaran as $row) { ?>
                          <option <?php if($data->result()[0]->id == $row->id){echo "selected";};?> value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
                          <?php }
                        ?>
                        </select>
                    </div>                    
                    <div class="form-group">
                      <label>Tahun Ajaran *</label>
                      <select class="form-control" required autofocus disabled>
                        <?php 
                          $aktifPeriode = $this->db->select('id')->from('ref_periode')->where('status_id', 1)->get()->row();
                          foreach ($periode as $row) { ?>
                          <option <?php if($aktifPeriode->id == $row->id){echo "selected";} ?> value="<?php echo $row->id;?>"><?php echo $row->tahun_ajaran;?></option>
                          <?php }
                        ?>
                        </select>
                    </div>

                    <!-- hidden -->
                    <div class="hidden">
                    <select name="anggaran" class="form-control" required autofocus>
                      <?php 
                        foreach ($anggaran as $row) { ?>
                        <option <?php if($data->result()[0]->id == $row->id){echo "selected";};?> value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
                        <?php }
                      ?>
                      </select>
                      <select name="periode" class="form-control" required autofocus>
                      <?php 
                        $aktifPeriode = $this->db->select('id')->from('ref_periode')->where('status_id', 1)->get()->row();
                        foreach ($periode as $row) { ?>
                        <option <?php if($aktifPeriode->id == $row->id){echo "selected";} ?> value="<?php echo $row->id;?>"><?php echo $row->tahun_ajaran;?></option>
                        <?php }
                      ?>
                      </select>
                    </div>
                    <!-- ./hidden -->
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