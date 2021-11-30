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

		<div class="card">
			<div class="card-header">Edit Bpjs Keluarga</div>
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
			<form method="post" action="<?php echo base_url(); ?>bpjs/update">
				<input type="hidden" name="id" id="id" value="<?php echo $bpjs_keluarga->id; ?>"/>

				<div class="form-group">
					<label for="nama">Kepala Keluarga</label>
					<input type="text" value="<?php echo $bpjs_keluarga->pegawai_id; ?>" class="form-control" id="nama" name="pegawai_id">
				</div>

				<div class="form-group">
					<label for="nama">Nomor BPJS</label>
					<input type="text" value="<?php echo $bpjs_keluarga->nomor_bpjs; ?>" class="form-control" id="nama" name="nomor_bpjs">
				</div>

				<div class="form-group">
					<label for="nama">Nama Terdaftar BPJS</label>
					<input type="text" value="<?php echo $bpjs_keluarga->nama; ?>" class="form-control" id="nama" name="nama">
				</div>

				<div class="form-group">
					<label for="keterangan">Keterangan Keluarga</label>
					<select name="keterangan" id="keterangan" class="form-control">
						<option value="Anak" <?php echo ($bpjs_keluarga->keterangan ? 'Anak' : 'selected' ); ?> >Anak</option>
						<option value="Istri" <?php echo ($bpjs_keluarga->keterangan ? 'Istri' : 'selected' ); ?>>Istri</option>
						<option value="Suami" <?php echo ($bpjs_keluarga->keterangan ? 'Suami' : 'selected' ); ?>>Suami</option>
					</select>
				</div>

				<div class="form-group">
					<label for="tanggal_lahir">Tanggal Lahir</label>
					<input type="text" value="<?php echo $bpjs_keluarga->tanggal_lahir; ?>" class="form-control" id="nama" name="tanggal_lahir">
				</div>

				<div class="form-group">
					<label for="pendidikan">Pendidikan</label>
					<input type="text" value="<?php echo $bpjs_keluarga->pendidikan; ?>" class="form-control" id="nama" name="pendidikan">
				</div>

				<div class="form-group">
					<label for="pekerjaan">Pekerjaan</label>
					<input type="text" value="<?php echo $bpjs_keluarga->pekerjaan; ?>" class="form-control" id="nama" name="pekerjaan">
				</div>


				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
</div>
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