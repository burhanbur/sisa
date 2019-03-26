    <section class="content">

      <div class="row">
        <div class="col-md-12">

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
                    <b class="col-md-2">Kelas</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->kelas; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Jurusan</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->jurusan; ?>
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

          
          <!-- <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            
          </div> -->
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>