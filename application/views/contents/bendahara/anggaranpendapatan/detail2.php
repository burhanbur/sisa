    <section class="content">

      <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <!-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> -->

              <h3 class="profile-username text-center">Detail Anggaran Pendapatan</h3>

              <!-- <p class="text-muted text-center">Software Engineer</p> -->

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b class="col-md-2">Nama</b> <b class="col-md-0">:</b> <?php echo $data->result()[0]->nama; ?>
                </li>
                <li class="list-group-item">
                    <b class="col-md-2">Kode</b> <b class="col-md-0">:</b> <?php echo $data->result()[0]->kode; ?>
                </li>
                
              </ul>

              <a href="<?php echo base_url('bendahara/anggaranpendapatan/edit/'.$data->result()[0]->id) ?>" class="btn btn-primary btn-block"><b>Ubah</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <a href="" class="btn btn-success" data-toggle="modal" data-target="#modal-default" href=""><i class="fa fa-user-plus"></i>&nbsp;Tambah Anggaran Pendapatan</a>

            <?php $this->load->view('contents/bendahara/anggaranpendapatan/createAnggaran'); ?>
          <br><br>

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="profile-username text-center">ANGGARAN <?php echo $data->result()[0]->nama; ?></h3>
            </div>
            
            <div class="box-body">
              <table id="example1" class="table  table-bordered table-striped">
                <thead>
                <tr>
                  <th class="center" style="width: 5%">No</th>
                  <th class="center" style="width: 45%">Anggaran</th>
                  <th class="center" style="width: 35%">Biaya</th>
                  <th class="center" style="width: 15%">Aksi</th>
                </tr>
                </thead>

                <tbody>
                <?php $no = 1; 
                foreach ($pendapatan->result() as $value) {
                ?> 
                <tr>
                  <td class="center"><?php echo $no++; ?></td>
                  <td class="center"><?php echo $value->nama ?></td>
                  <td class=""><?php echo "Rp. ".number_format($value->biaya,2,',','.'); ?></td>
                  <td class="center">
                    <a href="<?php echo base_url('bendahara/anggaranpendapatan/editAnggaran/'.$value->id) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil" ></i></a>
                    <a href="<?php echo base_url('bendahara/anggaranpendapatan/deleteAnggaran/'.$value->id.'/'.$value->ref_anggaran) ?>" class="btn btn-danger btn-xs confirmation"><i class="fa fa-remove" ></i></a>
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