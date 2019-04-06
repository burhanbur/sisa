		<a class="btn btn-success" data-toggle="modal" data-target="#modal-default" href=""><i class="fa fa-user-plus"></i>&nbsp;Tambah Anggaran Pendapatan</a>

      <?php $this->load->view('contents/bendahara/anggaranpendapatan/createModal'); ?>
    <!-- <a class="btn btn-success" href="<?php //echo base_url('bendahara/anggaranpendapatan/create'); ?>"><i class="fa fa-user-plus"></i>&nbsp;Tambah anggaranpendapatan</a> -->
      <br><br>
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Anggaran Pendapatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="center" style="width: 5%">No</th>
                  <th class="center" style="width: 15%">Nama Anggaran</th>
                  <th class="center" style="width: 15%">Biaya</th>
                  <th class="center" style="width: 30%">Kategori</th>
                  <th class="center" style="width: 15%">Aksi</th>
                </tr>
                </thead>
                <tbody>
               	<?php $no = 1; 
                foreach ($data->result() as $data) {
                ?>  
                <tr>
                	<td class="center"><?php echo $no++; ?></td>
                  <td class="center"><?php echo $data->nama ?></td>
                  <td class="center"><?php echo "Rp. ".number_format($data->biaya,2,',','.'); ?></td>
                  <td class="center"><?php echo $data->anggaran ?></td>
                	<td class="center">
		                <a href="<?php echo base_url('bendahara/anggaranpendapatan/detail/'.$data->id) ?>" class="btn btn-info btn-xs"><i class="fa fa-info-circle" ></i></a>
                    <a href="<?php echo base_url('bendahara/anggaranpendapatan/edit/'.$data->id) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil" ></i></a>
                    <a href="<?php echo base_url('bendahara/anggaranpendapatan/delete/'.$data->id) ?>" class="btn btn-danger btn-xs confirmation"><i class="fa fa-remove" ></i></a>
                	</td>
                </tr>
	              <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        <style type="text/css">
		  .center{
		  	text-align: center;
		  }
		</style>