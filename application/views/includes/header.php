<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SISA</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SISA SMK GRAFIKA</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-education"></span> &nbsp;
              <?php 
                $query = $this->db->select('*')->from('ref_periode')->where('status_id', 1)->get()->row();
                echo '<b>TAHUN AJARAN: '.$query->tahun_ajaran.'</b>';
              ?>&nbsp;              
              <span class="glyphicon glyphicon-menu-down"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">
                <p style="text-align: center;">Tahun Ajaran:</p>

                <form role="form" action="<?php echo base_url('bendahara/periode/periodeAktif'); ?>" method="POST">
                  <div class="box-body">                    
                     <div class="form-group">
                        <select name="id" class="form-control" required autofocus>
                          <?php
                            $periode   = $this->crud->getTable('ref_periode')->result();
                            foreach ($periode as $row) { ?>
                            <option <?php if($query->id == $row->id){echo "selected";} ?> value="<?php echo $row->id;?>"><?php echo $row->tahun_ajaran ?></option>
                            <?php }
                          ?>
                          </select>
                      </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <div class="pull-right">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                 </div>
                </form>
              </li>
            </ul>
          </li>

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Burhan Mafazi</span> &nbsp;
              <span class="glyphicon glyphicon-triangle-bottom"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Burhan Mafazi
                  <small>Member since 2019</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('auth/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
          </li>
        </ul>
      </div>
    </nav>
  </header>