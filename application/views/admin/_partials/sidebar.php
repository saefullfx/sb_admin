<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(1) == 'welcome' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('welcome') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'pegawai' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-user"></i>
            <span>Pegawai</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('pegawai/add') ?>">Tambah Pegawai</a>
            <a class="dropdown-item" href="<?php echo site_url('pegawai/index') ?>">List Pegawai</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'departemen' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Departemen</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('departemen/add') ?>">Tambah Departemen</a>
            <a class="dropdown-item" href="<?php echo site_url('departemen') ?>">List Departemen</a>
        </div>
    </li>

    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'bpjs' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-medkit"></i>
            <span>Data BPJS</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('bpjs/add') ?>">Tambah BPJS</a>
            <a class="dropdown-item" href="<?php echo site_url('bpjs') ?>">List BPJS</a>
        </div>
    </li>

    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'sertifikat' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-file"></i>
            <span>Data Sertifikat</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('sertifikat/add') ?>">Tambah Sertifkat</a>
            <a class="dropdown-item" href="<?php echo site_url('sertifikat') ?>">List Sertifikat</a>
        </div>
    </li>
   <!--  <li class="nav-item <?php echo $this->uri->segment(1) == 'contoh' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('contoh')?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li> -->

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>
</ul>