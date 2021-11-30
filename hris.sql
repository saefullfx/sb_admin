-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 09:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `bpjs_keluarga`
--

CREATE TABLE `bpjs_keluarga` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nomor_bpjs` varchar(30) NOT NULL,
  `keterangan` enum('Anak','Istri','Suami') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bpjs_keluarga`
--

INSERT INTO `bpjs_keluarga` (`id`, `id_pegawai`, `nama`, `nomor_bpjs`, `keterangan`, `tanggal_lahir`, `pendidikan`, `pekerjaan`, `created_at`) VALUES
(1, 1, 'Anak 1', '098765232311', 'Anak', '2020-01-01', 'SD', 'Pelajar', '2020-10-10 17:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_dept` int(11) NOT NULL,
  `nama_departemen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_dept`, `nama_departemen`) VALUES
(1, 'HRGA'),
(3, 'Teknisi'),
(6, 'Finance'),
(9, 'Inventory');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_dept` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `status_perkawinan` enum('Lajang (Single)','Nikah (Married)','Cerai (Divorced)','Janda (Widow)','Duda (Widower)') NOT NULL,
  `suku_bangsa` varchar(10) NOT NULL,
  `tinggi_badan` varchar(3) NOT NULL,
  `berat_badan` varchar(3) NOT NULL,
  `sim` varchar(10) NOT NULL,
  `hobby` text NOT NULL,
  `kendaraan` varchar(20) NOT NULL,
  `alamat_saat_ini` varchar(50) NOT NULL,
  `rt_rw_saat_ini` varchar(10) NOT NULL,
  `kelurahan_saat_ini` varchar(20) NOT NULL,
  `kecamatan_saat_ini` varchar(20) NOT NULL,
  `kota_saat_ini` varchar(30) NOT NULL,
  `status_rumah` varchar(20) NOT NULL,
  `no_telepon_rumah` varchar(15) DEFAULT NULL,
  `alamat_sesuai_ktp` varchar(200) DEFAULT NULL,
  `rt_rw_sesuai_ktp` varchar(20) DEFAULT NULL,
  `kelurahan_sesuai_ktp` varchar(20) DEFAULT NULL,
  `kecamatan_sesuai_ktp` varchar(20) DEFAULT NULL,
  `kota_sesuai_ktp` varchar(30) DEFAULT NULL,
  `provinsi_sesuai_ktp` varchar(20) DEFAULT NULL,
  `nama_bank_no_rek` varchar(100) DEFAULT NULL,
  `bpjs_ketenagakerjaan` varchar(20) DEFAULT NULL,
  `bpjs_kesehatan` varchar(20) DEFAULT NULL,
  `golongan_darah` varchar(2) DEFAULT NULL,
  `pendidikan_terakhir` varchar(30) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `sekolah_univ` varchar(150) DEFAULT NULL,
  `ipk_nilai_ijasah` varchar(5) DEFAULT NULL,
  `tanggal_mulai_kerja` date DEFAULT NULL,
  `nama_atasan` varchar(100) DEFAULT NULL,
  `jabatan_awal` varchar(50) DEFAULT NULL,
  `jabatan_akhir` varchar(50) DEFAULT NULL,
  `kegiatan_sosial` varchar(250) DEFAULT NULL,
  `nama_nohp_kerabat` varchar(15) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `saudara1` varchar(100) DEFAULT NULL,
  `saudara2` varchar(100) DEFAULT NULL,
  `saudara3` varchar(100) DEFAULT NULL,
  `saudara4` varchar(100) DEFAULT NULL,
  `saudara5` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_dept`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `agama`, `nomor_telepon`, `email`, `foto`, `nik`, `status_perkawinan`, `suku_bangsa`, `tinggi_badan`, `berat_badan`, `sim`, `hobby`, `kendaraan`, `alamat_saat_ini`, `rt_rw_saat_ini`, `kelurahan_saat_ini`, `kecamatan_saat_ini`, `kota_saat_ini`, `status_rumah`, `no_telepon_rumah`, `alamat_sesuai_ktp`, `rt_rw_sesuai_ktp`, `kelurahan_sesuai_ktp`, `kecamatan_sesuai_ktp`, `kota_sesuai_ktp`, `provinsi_sesuai_ktp`, `nama_bank_no_rek`, `bpjs_ketenagakerjaan`, `bpjs_kesehatan`, `golongan_darah`, `pendidikan_terakhir`, `jurusan`, `sekolah_univ`, `ipk_nilai_ijasah`, `tanggal_mulai_kerja`, `nama_atasan`, `jabatan_awal`, `jabatan_akhir`, `kegiatan_sosial`, `nama_nohp_kerabat`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `saudara1`, `saudara2`, `saudara3`, `saudara4`, `saudara5`, `created_at`) VALUES
(1, 1, 'Mark Doe', 'Doe', 'Depok', '2020-11-13', 'Islam', '023589654778', 'email@doe.com', 'foto', '321099882334', 'Lajang (Single)', 'Sunda', '180', '80', 'A', 'Banyak', 'Motor', 'qwerty', '12/02', 'ertyui', 'yyrtgg', 'depok', 'sewa', '098232321', 'fdfd', 'dvdv', 'vfvf', 'fvfvf', 'ffvvf', 'fff', 'eerer', 'vfv', 'vfvfdd', 'A', 'efefev', 'vdvdfef', 'frfr', 'rgrb', '2020-11-13', 'dfdf', 'vrvr', 'brr', 'frfe', 'fefef', 'efefe', 'efefe', 'fefe', 'ffef', 'efef', 'fvf', 'brr', 'frfr', 'fffr', '2020-11-13 02:04:13'),
(2, 6, 'Mark Weel', 'Doe', 'Depok', '2020-11-13', 'Islam', '023589654778', 'email@doe.com', 'foto', '321099882334', 'Lajang (Single)', 'Sunda', '180', '80', 'A', 'Banyak', 'Motor', 'qwerty', '12/02', 'ertyui', 'yyrtgg', 'depok', 'sewa', '098232321', 'fdfd', 'dvdv', 'vfvf', 'fvfvf', 'ffvvf', 'fff', 'eerer', 'vfv', 'vfvfdd', 'A', 'efefev', 'vdvdfef', 'frfr', 'rgrb', '2020-11-13', 'dfdf', 'vrvr', 'brr', 'frfe', 'fefef', 'efefe', 'efefe', 'fefe', 'ffef', 'efef', 'fvf', 'brr', 'frfr', 'fffr', '2020-11-13 02:04:13'),
(3, 1, 'Mark Doe', 'Doe', 'Depok', '2020-11-13', 'Islam', '023589654778', 'email@doe.com', 'foto', '321099882334', 'Lajang (Single)', 'Sunda', '180', '80', 'A', 'Banyak', 'Motor', 'qwerty', '12/02', 'ertyui', 'yyrtgg', 'depok', 'sewa', '098232321', 'fdfd', 'dvdv', 'vfvf', 'fvfvf', 'ffvvf', 'fff', 'eerer', 'vfv', 'vfvfdd', 'A', 'efefev', 'vdvdfef', 'frfr', 'rgrb', '2020-11-13', 'dfdf', 'vrvr', 'brr', 'frfe', 'fefef', 'efefe', 'efefe', 'fefe', 'ffef', 'efef', 'fvf', 'brr', 'frfr', 'fffr', '2020-11-13 02:04:13'),
(5, 1, 'Mark Doe', 'Doe', 'Depok', '2020-11-13', 'Islam', '023589654778', 'email@doe.com', 'foto', '321099882334', 'Lajang (Single)', 'Sunda', '180', '80', 'A', 'Banyak', 'Motor', 'qwerty', '12/02', 'ertyui', 'yyrtgg', 'depok', 'sewa', '098232321', 'fdfd', 'dvdv', 'vfvf', 'fvfvf', 'ffvvf', 'fff', 'eerer', 'vfv', 'vfvfdd', 'A', 'efefev', 'vdvdfef', 'frfr', 'rgrb', '2020-11-13', 'dfdf', 'vrvr', 'brr', 'frfe', 'fefef', 'efefe', 'efefe', 'fefe', 'ffef', 'efef', 'fvf', 'brr', 'frfr', 'fffr', '2020-11-13 02:04:13'),
(6, 1, 'Mark Doe', 'Doe', 'Depok', '2020-11-13', 'Islam', '023589654778', 'email@doe.com', 'foto', '321099882334', 'Lajang (Single)', 'Sunda', '180', '80', 'A', 'Banyak', 'Motor', 'qwerty', '12/02', 'ertyui', 'yyrtgg', 'depok', 'sewa', '098232321', 'fdfd', 'dvdv', 'vfvf', 'fvfvf', 'ffvvf', 'fff', 'eerer', 'vfv', 'vfvfdd', 'A', 'efefev', 'vdvdfef', 'frfr', 'rgrb', '2020-11-13', 'dfdf', 'vrvr', 'brr', 'frfe', 'fefef', 'efefe', 'efefe', 'fefe', 'ffef', 'efef', 'fvf', 'brr', 'frfr', 'fffr', '2020-11-13 02:04:13'),
(7, 1, 'Mark Doe', 'Doe', 'Depok', '2020-11-13', 'Islam', '023589654778', 'email@doe.com', 'foto', '321099882334', 'Lajang (Single)', 'Sunda', '180', '80', 'A', 'Banyak', 'Motor', 'qwerty', '12/02', 'ertyui', 'yyrtgg', 'depok', 'sewa', '098232321', 'fdfd', 'dvdv', 'vfvf', 'fvfvf', 'ffvvf', 'fff', 'eerer', 'vfv', 'vfvfdd', 'A', 'efefev', 'vdvdfef', 'frfr', 'rgrb', '2020-11-13', 'dfdf', 'vrvr', 'brr', 'frfe', 'fefef', 'efefe', 'efefe', 'fefe', 'ffef', 'efef', 'fvf', 'brr', 'frfr', 'fffr', '2020-11-13 02:04:13'),
(8, 1, 'Mark Doe', 'Doe', 'Depok', '2020-11-13', 'Islam', '023589654778', 'email@doe.com', 'foto', '321099882334', 'Lajang (Single)', 'Sunda', '180', '80', 'A', 'Banyak', 'Motor', 'qwerty', '12/02', 'ertyui', 'yyrtgg', 'depok', 'sewa', '098232321', 'fdfd', 'dvdv', 'vfvf', 'fvfvf', 'ffvvf', 'fff', 'eerer', 'vfv', 'vfvfdd', 'A', 'efefev', 'vdvdfef', 'frfr', 'rgrb', '2020-11-13', 'dfdf', 'vrvr', 'brr', 'frfe', 'fefef', 'efefe', 'efefe', 'fefe', 'ffef', 'efef', 'fvf', 'brr', 'frfr', 'fffr', '2020-11-13 02:04:13'),
(9, 1, 'Mark Doe', 'Doe', 'Depok', '2020-11-13', 'Islam', '023589654778', 'email@doe.com', 'foto', '321099882334', 'Lajang (Single)', 'Sunda', '180', '80', 'A', 'Banyak', 'Motor', 'qwerty', '12/02', 'ertyui', 'yyrtgg', 'depok', 'sewa', '098232321', 'fdfd', 'dvdv', 'vfvf', 'fvfvf', 'ffvvf', 'fff', 'eerer', 'vfv', 'vfvfdd', 'A', 'efefev', 'vdvdfef', 'frfr', 'rgrb', '2020-11-13', 'dfdf', 'vrvr', 'brr', 'frfe', 'fefef', 'efefe', 'efefe', 'fefe', 'ffef', 'efef', 'fvf', 'brr', 'frfr', 'fffr', '2020-11-13 02:04:13'),
(10, 1, 'Mark Doe', 'Doe', 'Depok', '2020-11-13', 'Islam', '023589654778', 'email@doe.com', 'foto', '321099882334', 'Lajang (Single)', 'Sunda', '180', '80', 'A', 'Banyak', 'Motor', 'qwerty', '12/02', 'ertyui', 'yyrtgg', 'depok', 'sewa', '098232321', 'fdfd', 'dvdv', 'vfvf', 'fvfvf', 'ffvvf', 'fff', 'eerer', 'vfv', 'vfvfdd', 'A', 'efefev', 'vdvdfef', 'frfr', 'rgrb', '2020-11-13', 'dfdf', 'vrvr', 'brr', 'frfe', 'fefef', 'efefe', 'efefe', 'fefe', 'ffef', 'efef', 'fvf', 'brr', 'frfr', 'fffr', '2020-11-13 02:04:13'),
(11, 1, 'Mark Doe', 'Doe', 'Depok', '2020-11-13', 'Islam', '023589654778', 'email@doe.com', 'foto', '321099882334', 'Lajang (Single)', 'Sunda', '180', '80', 'A', 'Banyak', 'Motor', 'qwerty', '12/02', 'ertyui', 'yyrtgg', 'depok', 'sewa', '098232321', 'fdfd', 'dvdv', 'vfvf', 'fvfvf', 'ffvvf', 'fff', 'eerer', 'vfv', 'vfvfdd', 'A', 'efefev', 'vdvdfef', 'frfr', 'rgrb', '2020-11-13', 'dfdf', 'vrvr', 'brr', 'frfe', 'fefef', 'efefe', 'efefe', 'fefe', 'ffef', 'efef', 'fvf', 'brr', 'frfr', 'fffr', '2020-11-13 02:04:13');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pegawairead`
-- (See below for the actual view)
--
CREATE TABLE `pegawairead` (
`id_pegawai` int(11)
,`nama_lengkap` varchar(200)
,`nama_departemen` varchar(100)
,`jabatan_akhir` varchar(50)
,`email` varchar(50)
,`nomor_telepon` varchar(15)
,`alamat_saat_ini` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat_pelatihan`
--

CREATE TABLE `sertifikat_pelatihan` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `nama_pelatihan` varchar(250) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikat_pelatihan`
--

INSERT INTO `sertifikat_pelatihan` (`id`, `id_pegawai`, `nama_pelatihan`, `keterangan`, `created_at`) VALUES
(1, 1, 'sxcfghdd', 'asasdd', '2020-11-13 02:06:17'),
(2, 1, 'qwqer', 'asasdd', '2020-11-13 02:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `unggah`
--

CREATE TABLE `unggah` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `file1` varchar(250) NOT NULL,
  `file2` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unggah`
--

INSERT INTO `unggah` (`id`, `keterangan`, `file1`, `file2`, `date`) VALUES
(1, 'testing', 'bb76ac8556f63f247d79016a1ccf232d.JPG', '833b78bc3068ff96eba85013c7227439.JPG', '2020-10-09 15:37:57'),
(2, 'cucian nih', '4ce7550540fc71d991156e7ac33640ab.JPG', '42bce47940fca7670a5873761b1a4b94.JPG', '2020-10-09 15:40:03'),
(3, 'dimensi besar', '865e537854dde3bfc3a98f8c39c446c2.jpg', 'ad73b119915e5322e580c5d021b07a4a.jpg', '2020-10-12 09:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'enryu', '2850debf4bf3cf62bb94b47abe75bedd', 'admin'),
(2, 'selena', '684a25872175666aacc23c756d67c21e', 'user');

-- --------------------------------------------------------

--
-- Structure for view `pegawairead`
--
DROP TABLE IF EXISTS `pegawairead`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pegawairead`  AS  select `pegawai`.`id_pegawai` AS `id_pegawai`,`pegawai`.`nama_lengkap` AS `nama_lengkap`,`departemen`.`nama_departemen` AS `nama_departemen`,`pegawai`.`jabatan_akhir` AS `jabatan_akhir`,`pegawai`.`email` AS `email`,`pegawai`.`nomor_telepon` AS `nomor_telepon`,`pegawai`.`alamat_saat_ini` AS `alamat_saat_ini` from (`pegawai` join `departemen` on((`pegawai`.`id_dept` = `departemen`.`id_dept`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpjs_keluarga`
--
ALTER TABLE `bpjs_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `departemen_id` (`id_dept`);

--
-- Indexes for table `sertifikat_pelatihan`
--
ALTER TABLE `sertifikat_pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unggah`
--
ALTER TABLE `unggah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpjs_keluarga`
--
ALTER TABLE `bpjs_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_dept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sertifikat_pelatihan`
--
ALTER TABLE `sertifikat_pelatihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unggah`
--
ALTER TABLE `unggah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_dept`) REFERENCES `departemen` (`id_dept`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
