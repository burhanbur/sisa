    <section class="content">

      <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <!-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> -->

              <h3 class="profile-username text-center">Detail Periode</h3>

              <!-- <p class="text-muted text-center">Software Engineer</p> -->

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b class="col-md-2">Tahun Ajaran</b> <b class="col-md-0">:</b> <?php echo $data->result()[0]->tahun_ajaran; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Tahun</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->tahun; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Status</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->status; ?>
                </li>             
              </ul>

              <a href="<?php echo base_url('bendahara/periode/edit/'.$data->result()[0]->id) ?>" class="btn btn-primary btn-block"><b>Ubah</b></a>
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