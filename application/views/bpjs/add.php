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


			 	  <div class="card mb-4 col-md-12">					
						<div class="card-header">Tambah Data BPJS</div>
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
									<form method="post" action="<?php echo base_url(); ?>bpjs/save">
										<div class="form-group">
											<label for="nama">Kepala Keluarga</label>
											<input type="text" class="form-control" id="nama" name="pegawai_id">
										</div>

										<div class="form-group">
											<label for="tempat_lahir">Nama Pemegang BPJS</label>
											<input type="text" class="form-control" id="tempat_lahir" name="nama">
										</div>

										<div class="form-group">
											<label for="tempat_lahir">Nomor BPJS</label>
											<input type="text" class="form-control" id="tempat_lahir" name="nomor_bpjs">
										</div>

										<div class="form-group">
											<label for="keterangan">Hubungan Keluarga</label>
											<select name="keterangan" id="keterangan" class="form-control">
												<option value="Anak">Anak</option>
												<option value="Istri">Istri</option>
												<option value="Suami">Suami</option>
											</select>
										</div>

										

										<div class="form-group">
											<label for="tgl_lahir">Tanggal Lahir</label>
											<input type="text" class="form-control datepicker" data-date-format="yyyy-mm-dd" id="tanggal_lahir" name="tanggal_lahir">
										</div>

										<div class="form-group">
											<label for="no_telp">Pendidikan</label>
											<input type="text" class="form-control" id="pendidikan" name="pendidikan">
										</div>

										<div class="form-group">
											<label for="alamat">Pekerjaan</label>
											<input type="text" class="form-control" name="pekerjaan" id="pekerjaan">
										</div>

										<button type="submit" class="btn btn-primary">Submit</button>
									</form>						
								</div>
					</div>


	</div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>

    <!--file include Bootstrap js dan datepickerbootstrap.js-->



<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

<!-- Fungsi datepickier yang digunakan -->
<script type="text/javascript">
 $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });
</script> 

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>