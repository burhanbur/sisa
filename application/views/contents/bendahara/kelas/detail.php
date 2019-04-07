    <section class="content">

      <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <!-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> -->

              <h3 class="profile-username text-center">Detail Kelas</h3>

              <!-- <p class="text-muted text-center">Software Engineer</p> -->

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b class="col-md-2">Nama</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->nama; ?>
                </li><li class="list-group-item">
                    <b class="col-md-2">Kelas</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->tingkat; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Jurusan</b> <b class="col-md-0">:</b> <?php echo $data->result()[0]->jurusan; ?>
                </li>               
              </ul>

              <a href="<?php echo base_url('bendahara/kelas/edit/'.$data->result()[0]->id) ?>" class="btn btn-primary btn-block"><b>Ubah</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <a href="" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-user-plus"></i>&nbsp;Tambah Siswa Kelas</a>
<a href="<?php echo base_url('bendahara/kelas'); ?>" class="btn btn-warning"><i class="fa fa-undo"></i>&nbsp;Kembali</a>

            <?php $this->load->view('contents/bendahara/kelas/createSiswaKelas'); ?>
          <br><br>

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="profile-username text-center">Daftar Siswa Kelas <?php echo $data->result()[0]->nama; ?></h3>
            </div>
            
            <div class="box-body">
              <table id="example1" class="table  table-bordered table-striped">
                <thead>
                <tr>
                  <th class="center" style="width: 5%">No</th>
                  <th class="center" style="width: 15%">Nomor Induk</th>
                  <th class="center" style="width: 30%">Nama Siswa</th>
                  <th class="center" style="width: 10%">Aksi</th>
                </tr>
                </thead>

                <tbody>
                <?php $no = 1; 
                foreach ($siswa->result() as $value) {
                ?> 
                <tr>
                  <td class="center"><?php echo $no++ ?></td>
                  <td class="center"><?php echo $value->nomor_induk ?></td>
                  <td class=""><?php echo $value->siswa ?></td>
                  <td class="center">
                    <a href="<?php echo base_url('bendahara/siswa/detail/'.$value->nomor_induk) ?>" class="btn btn-info btn-xs"><i class="fa fa-info-circle" ></i></a>
                    <a href="<?php echo base_url('bendahara/kelas/deleteSiswaKelas/'.$value->id_kelas_siswa) ?>" class="btn btn-danger btn-xs confirmation"><i class="fa fa-remove" ></i></a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <style type="text/css">
      .center{
        text-align: center;
      }
    </style>