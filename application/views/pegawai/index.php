<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">
<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

  <?php $this->load->view("admin/_partials/sidebar.php") ?>

  <div id="content-wrapper">

    <div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
     
    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

    <!-- Icon Cards-->
   

     <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
     </div> -->

      <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Pegawai
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>Departemen</th>
                                                <th>Jabatan / Posisi</th>
                                                <th>Email</th>
                                                <th>No telepon</th>
                                                <th>Alamat</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                       <tbody>
                                        <?php 
                                                $no = 1;
                                                foreach($pegawai as $row)
                                                {
                                                  ?>
                                            <tr>
                                                <td><?php echo $row['nama_lengkap'];?></td>                                                
                                                <td><?php echo $row['nama_departemen'];?></td>
                                                <td><?php echo $row['jabatan_akhir'];?></td>
                                                <td><?php echo $row['email'];?></td>
                                                <td><?php echo $row['nomor_telepon'];?></td>
                                                <td><?php echo $row['alamat_saat_ini'];?></td>
                                                <td><a href="<?php base_url().'pegawai/index/'.$row['id_pegawai'] ?>">
                                                	<i class="fas fa-fw fa-eye"></i>
                                                </a>	<a href="#">
                                                	<i class="fas fa-fw fa-trash"></i>
                                                </a> <a href="#">
                                                	<i class="fas fa-fw fa-edit"></i>
                                                </a>						          
										        </td>
                                            </tr>
                                            <?php
                                                }
                                            ?>                                              
                                        </tbody>
                                    </table>
    							</div>
    						</div>
    	</div>

    <!-- Area Chart Example-->
    <!-- <div class="card mb-3">
      <div class="card-header">
      <i class="fas fa-chart-area"></i>
      Visitor Stats</div>
      <div class="card-body">
      <canvas id="myAreaChart" width="100%" height="30"></canvas>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div> -->

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>