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
			<div class="card-header">Edit Departemen</div>
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
			<form method="post" action="<?php echo base_url(); ?>departemen/update">
				<input type="hidden" name="id_dept" id="id_dept" value="<?php echo $departemen->id_dept; ?>"/>
				<div class="form-group">
					<label for="nama">Nama Departemen</label>
					<input type="text" value="<?php echo $departemen->nama_departemen; ?>" class="form-control" id="nama" name="nama_departemen">
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