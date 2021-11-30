<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
	<h3><?php echo $title; ?></h3>

	<div class="row">
		<div>
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/tutorial/create">
			<div>Keterangan : </div>
        	<div><input type="text" name="keterangan"></div>
            
            <div>File 1 </div>
        	<div><input type="file" name="file1"></div>
        	<div>File 2: </div>
            <div><input type="file" name="file2"></div>   <br/>
            <div><button type="submit" name="submit">Simpan          	
            </button>  </div>       
			</form>
		</div>



<br/>
		<div>
			<table border="2px">
				<tr>
					<th>#</th>
					<th>Keterangan Gambar</th>
					<th>File 1</th>
					<th>File 2</th>
				</tr>
				<?php if(!empty($data)): ?>
					<?php foreach ($data as $key): 
					$no = 1	?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $key->keterangan ?></td>
							<td><img width="250" src="<?php echo base_url("uploads/images/".$key->file1) ?>"></td>
							<td><img width="250" src="<?php echo base_url("uploads/images/".$key->file2) ?>"></td>
						</tr>
					<?php endforeach ?>
				<?php else: ?>
					<tr><td colspan="4" align="center">Tidak ada data</td></tr>
				<?php endif ?>	

				
			</table>
		</div>

		<br/>
		<br/>


	</div>

</body>
</html>