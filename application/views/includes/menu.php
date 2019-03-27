<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Burhan Mafazi</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="GET" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php 
        $uri = $this->uri->segment(2);
        ?>
        <li class="<?php if($uri == '' || $uri == 'home') echo 'active' ?>">
          <a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> <span>Beranda</span></a>
        </li>

        <?php 
        $arrUri = array();
        array_push($arrUri, $uri);
        $menu = array('siswa', 'guru', 'kelas', 'jurusan', 'anggaranpendapatan', 'anggaranpengeluaran');

        if ($role == 2) { ?>
          <li class="<?php foreach ($arrUri as $arr) if (in_array($arr, $menu)) echo 'treeview active menu-open'; else echo 'treeview'; ?>">
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Data Master</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php if ($uri == 'siswa') echo 'active' ?>"><a href="<?php echo base_url('bendahara/siswa'); ?>"><i class="fa fa-circle-o"></i> Siswa </a></li>
              <li class="<?php if ($uri == 'guru') echo 'active' ?>"><a href="<?php echo base_url('bendahara/guru'); ?>"><i class="fa fa-circle-o"></i> Guru </a></li>
              <li class="<?php if ($uri == 'jurusan') echo 'active' ?>"><a href="<?php echo base_url('bendahara/jurusan'); ?>"><i class="fa fa-circle-o"></i> Jurusan </a></li>
              <li class="<?php if ($uri == 'kelas') echo 'active' ?>"><a href="<?php echo base_url('bendahara/kelas'); ?>"><i class="fa fa-circle-o"></i> Kelas </a></li>

              <?php 
              $subUri = array();
              array_push($subUri, $uri);
              $subMenu = array('anggaranpendapatan', 'anggaranpengeluaran');
              ?>
              <li class="<?php foreach ($subUri as $subArr) if (in_array($subArr, $subMenu)) echo 'treeview active menu-open'; else echo 'treeview'; ?>">
              <a href="#"><i class="fa fa-circle-o"></i> Anggaran
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if ($uri == 'anggaranpendapatan') echo 'active' ?>"><a href="<?php echo base_url('bendahara/anggaranpendapatan'); ?>"><i class="fa fa-circle-o"></i> Pendapatan </a></li>
                <li class="<?php if ($uri == 'anggaranpengeluaran') echo 'active' ?>"><a href="<?php echo base_url('bendahara/anggaranpengeluaran'); ?>"><i class="fa fa-circle-o"></i> Pengeluaran </a></li>
              </ul>
            </li>
            </ul>
          </li>

          <?php 
          $settings = array();
          array_push($settings, $uri);
          $menuSetting = array('akun', 'periode');
          ?>
          <li class="<?php foreach ($settings as $setting) if (in_array($setting, $menuSetting)) echo 'treeview active menu-open'; else echo 'treeview'; ?>">
            <a href="#">
              <i class="fa fa-wrench"></i>
              <span>Pengaturan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php if ($uri == 'akun') echo 'active' ?>"><a href="<?php echo base_url('bendahara/akun'); ?>"><i class="fa fa-circle-o"></i> Akun </a></li>
              <li class="<?php if ($uri == 'periode') echo 'active' ?>"><a href="<?php echo base_url('bendahara/periode'); ?>"><i class="fa fa-circle-o"></i> Periode </a></li>
            </ul>
          </li>
        <?php } else { ?>

        <?php } ?>

        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li> -->
      </ul>
    </section>