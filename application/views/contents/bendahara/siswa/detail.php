    <section class="content">

      <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="profile-username text-center">Riwayat Kelas Siswa</h3>
            </div>
            
            <div class="box-body">
              <table class="table table-striped">
                <thead>
                <tr>
                  <th class="center" style="width: 5%">No</th>
                  <th class="center" style="width: 15%">Nomor Induk</th>
                  <th class="center" style="width: 30%">Kelas</th>
                  <th class="center" style="width: 30%">Jurusan</th>
                  <th class="center" style="width: 10%">Tahun Ajaran</th>
                  <th class="center" style="width: 10%">Detail</th>
                </tr>
                </thead>

                <tbody>
                <?php $no = 1; 
                foreach ($akademik->result() as $value) {
                ?> 
                  <td class="center"><?php echo $no++ ?></td>
                  <td class="center"><?php echo $value->nomor_induk ?></td>
                  <td class="center"><?php echo $value->kelas ?></td>
                  <td class="center"><?php echo $value->jurusan ?></td>
                  <td class="center"><?php echo $value->tahun_ajaran ?></td>
                  <td class="center">
                    <a href="<?php echo base_url('bendahara/kelas/detail/'.$value->kelas_id) ?>" class="btn btn-info btn-xs"><i class="fa fa-eye" ></i></a>
                  </td>
                <?php } ?>
                </tbody>
              </table>
            </div>
            
          </div>

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <!-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> -->

              <h3 class="profile-username text-center">Biodata Siswa</h3>

              <!-- <p class="text-muted text-center">Software Engineer</p> -->

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b class="col-md-2">Nama</b> <b class="col-md-0">:</b> <?php echo $data->result()[0]->nama; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Nomor Induk</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->nomor_induk; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Nomor Induk Nasional</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->nomor_induk_nasional; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Alamat</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->alamat; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Tempat Lahir</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->tempat_lahir; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Tanggal Lahir</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->tgl_lahir; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Jenis Kelamin</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->jenis_kelamin; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Agama</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->agama; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">No. Handphone</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->no_hp; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Email</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->email; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Asal Sekolah</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->asal_sekolah; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Tahun Masuk</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->tahun_masuk; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Status</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->status; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Nama Ayah</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->nama_ayah; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Nama Ibu</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->nama_ibu; ?>
                </li>
                
              </ul>

              <a href="<?php echo base_url('bendahara/siswa/edit/'.$data->result()[0]->nomor_induk) ?>" class="btn btn-primary btn-block"><b>Ubah</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
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