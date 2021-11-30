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

     <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data BPJS Keluarga
                            </div>
                            <div class="card-body">
                              <?php if($this->session->flashdata('simpan')){ ?>  
                                 <div class="alert alert-success">  
                                   <a href="#" class="close" data-dismiss="alert">&times;</a>  
                                   <strong>OK!</strong> <?php echo $this->session->flashdata('simpan'); ?>  
                                 </div>  
                               <?php } else if($this->session->flashdata('delete')){ ?>  
                                 <div class="alert alert-danger">  
                                   <a href="#" class="close" data-dismiss="alert">&times;</a>  
                                   <strong>Ok!</strong> <?php echo $this->session->flashdata('delete'); ?>  
                                 </div>  
                               <?php } else if($this->session->flashdata('update')){ ?>  
                                 <div class="alert alert-warning">  
                                   <a href="#" class="close" data-dismiss="alert">&times;</a>  
                                   <strong>Warning!</strong> <?php echo $this->session->flashdata('update'); ?>  
                                 </div>  
                               <?php } else if($this->session->flashdata('info')){ ?>  
                                 <div class="alert alert-info">  
                                   <a href="#" class="close" data-dismiss="alert">&times;</a>  
                                   <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>  
                                 </div>  
                              <?php } ?>  
                              <a href="<?php echo base_url(); ?>bpjs/add" class="btn btn-success">Tambah</a>
                              <br/>
                              <br/>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                                                <th>Kepala Keluarga</th>
                                                <th>Nomor BPJS</th>
                                                <th>Nama Terdaftar BPJS</th>
                                                <th>Keterangan Keluarga</th>                                              
                                                <th>Tanggal Lahir</th>                                              
                                                <th>Pendidikan</th>  
                                                <th>Pekerjaan</th>                                           

                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                       <tbody>
                                          <?php 
                                                $no = 1;
                                                foreach($bpjs_keluarga as $row)
                                                {
                                                  ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>                                              
                                                <td><?php echo $row->pegawai_id?></td>
                                                <td><?php echo $row->nomor_bpjs?></td>
                                                <td><?php echo $row->nama?></td>
                                                <td><?php echo $row->keterangan?></td>
                                                <td><?php echo $row->tanggal_lahir?></td>
                                                <td><?php echo $row->pendidikan?></td>
                                                <td><?php echo $row->pekerjaan?></td>

                                                <td><a href="#">
                                                  <a href="<?php echo base_url(); ?>bpjs/edit/<?php echo $row->id;?>">
                                                  <i class="fas fa-fw fa-edit"></i>
                                                  </a>  
                                                  <a href="<?php echo base_url(); ?>bpjs/delete/<?php echo $row->id; ?>">
                                                  <i class="fas fa-fw fa-trash"></i> </a>
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

<script type="application/javascript">  
     /** After windod Load */  
     $(window).bind("load", function() {  
       window.setTimeout(function() {  
         $(".alert").fadeTo(1500, 0).slideUp(1500, function() {  
           $(this).remove();  
         });  
       }, 1500);  
     });  
   </script>
</body>
</html>