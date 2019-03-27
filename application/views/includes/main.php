<!DOCTYPE html>
<html>

<!-- css here -->
<?php $this->load->view('includes/head'); ?>
<!-- /css here -->

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- css here -->
  <?php $this->load->view('includes/header'); ?>
  <!-- /css here -->

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
  <?php $this->load->view('includes/menu'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $sub_judul ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $judul ?></a></li>
        <li class="active"><?php echo $sub_judul ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">      
    <?php $this->load->view($content); ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer here -->
  <?php $this->load->view('includes/footer'); ?>
  <!-- /footer here -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <?php $this->load->view('includes/rightmenu'); ?>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- javascript here -->
<?php $this->load->view('includes/javascript'); ?>
<!-- /javascript here -->

</body>
</html>
