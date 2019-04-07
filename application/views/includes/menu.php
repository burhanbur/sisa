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

        <?php if ($role == 2) { 

          $masterUri = array();
          array_push($masterUri, $uri);
          $menuMaster = array('siswa', 'guru', 'kelas', 'jurusan', 'anggaranpendapatan', 'anggaranpengeluaran');
        ?>
          <li class="<?php foreach ($masterUri as $master) if (in_array($master, $menuMaster)) echo 'treeview active menu-open'; else echo 'treeview'; ?>">
            <a href="#">
              <i class="fa fa-database"></i>
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
          $transaksi = array();
          array_push($transaksi, $uri);
          $menuTransaksi = array('kelas_siswa', 'tes');
          ?>
          <li class="<?php foreach ($transaksi as $tran) if (in_array($tran, $menuTransaksi)) echo 'treeview active menu-open'; else echo 'treeview'; ?>">
            <a href="#">
              <i class="fa fa-sheqel"></i>
              <span>Data Transaksi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <!-- <li class="<?php if ($uri == 'akun') echo 'active' ?>"><a href="<?php echo base_url('bendahara/akun'); ?>"><i class="fa fa-circle-o"></i> Akun </a></li> -->
            </ul>
          </li>

          <?php 
          $laporan = array();
          array_push($laporan, $uri);
          $menuLaporan = array('tes', 'tes');
          ?>
          <li class="<?php foreach ($laporan as $report) if (in_array($report, $menuLaporan)) echo 'treeview active menu-open'; else echo 'treeview'; ?>">
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Data Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <!-- <ul class="treeview-menu">
              <li class="<?php if ($uri == 'akun') echo 'active' ?>"><a href="<?php echo base_url('bendahara/akun'); ?>"><i class="fa fa-circle-o"></i> Akun </a></li>
            </ul> -->
          </li>

          <?php
            $refUri = array();
            array_push($refUri, $uri);
            $menuRef = array('ref_status', 'ref_role', 'ref_agama', 'ref_bulan', 'ref_pendapatan', 'ref_pengeluaran', 'periode');
          ?>
          <li class="<?php foreach ($refUri as $ref) if (in_array($ref, $menuRef)) echo 'treeview active menu-open'; else echo 'treeview'; ?>">
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Data Referensi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php if ($uri == 'ref_role') echo 'active' ?>"><a href="<?php echo base_url('bendahara/ref_role'); ?>"><i class="fa fa-circle-o"></i> Peran </a></li>
              <li class="<?php if ($uri == 'ref_status') echo 'active' ?>"><a href="<?php echo base_url('bendahara/ref_status'); ?>"><i class="fa fa-circle-o"></i> Status </a></li>
              <li class="<?php if ($uri == 'ref_agama') echo 'active' ?>"><a href="<?php echo base_url('bendahara/ref_agama'); ?>"><i class="fa fa-circle-o"></i> Agama </a></li>
              <li class="<?php if ($uri == 'periode') echo 'active' ?>"><a href="<?php echo base_url('bendahara/periode'); ?>"><i class="fa fa-circle-o"></i> Periode </a></li>

              <!-- <?php 
              $subUri = array();
              array_push($subUri, $uri);
              $subMenu = array('ref_pendapatan', 'ref_pengeluaran');
              ?>
              <li class="<?php foreach ($subUri as $subArr) if (in_array($subArr, $subMenu)) echo 'treeview active menu-open'; else echo 'treeview'; ?>">
              <a href="#"><i class="fa fa-circle-o"></i> Anggaran
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if ($uri == 'anggaranpendapatan') echo 'active' ?>"><a href="<?php echo base_url('bendahara/ref_pendapatan'); ?>"><i class="fa fa-circle-o"></i> Pendapatan </a></li>
                <li class="<?php if ($uri == 'anggaranpengeluaran') echo 'active' ?>"><a href="<?php echo base_url('bendahara/ref_pengeluaran'); ?>"><i class="fa fa-circle-o"></i> Pengeluaran </a></li>
              </ul>
            </li> -->
            </ul>
          </li>

          <?php 
          $settings = array();
          array_push($settings, $uri);
          $menuSetting = array('akun');
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