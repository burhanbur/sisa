    <section class="content">

      <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <!-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> -->

              <h3 class="profile-username text-center">Biodata Akun</h3>

              <!-- <p class="text-muted text-center">Software Engineer</p> -->

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b class="col-md-2">Nama</b> <b class="col-md-0">:</b> <?php echo $data->result()[0]->nama; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Username</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->username; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Role</b><b class="col-md-0">:</b> <?php echo $data->result()[0]->role; ?>
                </li>
                
              </ul>

              <a href="<?php echo base_url('bendahara/akun/edit/'.$data->result()[0]->id) ?>" class="btn btn-primary btn-block"><b>Ubah</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>