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


			 	  <div class="card mb-4 col-md-4">					
						<div class="card-header">Tambah Departemen</div>
							<div class="card-body">
								<?php 
								if(validation_errors() != false)
								{
									?>
									<div class="alert alert-danger" role="alert">
										<?php echo validation_errors(); ?>
									</div>
									<?php
								}
								?>
									<form method="post" action="<?php echo base_url(); ?>departemen/save">
										<div class="form-group">
											<label for="nama">Nama Departemen</label>
											<input type="text" class="form-control" id="nama" name="nama_departemen">
										</div>

										<!-- <div class="form-group">
											<label for="jenis_kelamin">Jenis Kelamin</label>
											<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
												<option value="pria">Pria</option>
												<option value="wanita">Wanita</option>
											</select>
										</div>

										<div class="form-group">
											<label for="tempat_lahir">Tempat Lahir</label>
											<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
										</div>

										<div class="form-group">
											<label for="tgl_lahir">Tanggal Lahir</label>
											<input type="text" class="form-control datepicker" id="tanggal_lahir" name="tanggal_lahir">
										</div>

										<div class="form-group">
											<label for="no_telp">No Telp</label>
											<input type="number" class="form-control" id="no_telp" name="no_telp">
										</div>

										<div class="form-group">
											<label for="alamat">Alamat</label>
											<textarea class="form-control" name="alamat" id="alamat"></textarea>
										</div> -->

										<button type="submit" class="btn btn-primary">Submit</button>
									</form>						
								</div>
					</div>


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