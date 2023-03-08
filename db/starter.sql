-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 02:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starter`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_dosen`
--

CREATE TABLE `master_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nip_dosen` varchar(25) NOT NULL,
  `nama_dosen` varchar(150) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto_dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_dosen`
--

INSERT INTO `master_dosen` (`id_dosen`, `nip_dosen`, `nama_dosen`, `jabatan`, `foto_dosen`) VALUES
(2, '19960329.201909.1.034', 'Mohammad Iqbal Bachtiar, S.T., M.T.', 'Wakil Dekan FST', 'iqbal.png'),
(4, '19960306.202108.1.061', 'Zeinor Rahman, S.Pd., M.Pd.', 'Kepala Departemen', 'zeinor.png'),
(5, '19890330.202203.1.079', 'Akhmad Tajuddin Tholaby MS, S.Kom., M.Kom.', 'Dosen', 'WhatsApp_Image_2023-03-03_at_13_43_23-removebg-preview-modified.png'),
(6, '19770618.202009.1.052', 'Mustain, S.pd., M.Pd.', 'Dosen', 'mustain.png'),
(7, '19910320.202207.1.089', 'Muhammad Najib, S.Kom., M.T.I', 'Dosen', 'najib.png'),
(8, '19930817.202208.2.090', 'Aulia Khoirunnita, S.Kom., M.Kom.', 'Dosen', '8FE3156D-CCF0-4E7D-B4F1-1426860C2052_-_Aulia_Khoirunnita-modified.png');

-- --------------------------------------------------------

--
-- Table structure for table `master_informasi`
--

CREATE TABLE `master_informasi` (
  `id_informasi` int(11) NOT NULL,
  `token_informasi` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_informasi` text NOT NULL,
  `lokasi_informasi` text NOT NULL,
  `deskripsi_informasi` text NOT NULL,
  `isi_informasi` text NOT NULL,
  `tgl_informasi` date NOT NULL,
  `id_akses` smallint(11) NOT NULL,
  `status_informasi` smallint(11) NOT NULL,
  `file_informasi` varchar(100) NOT NULL,
  `tipefile_informasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_informasi`
--

INSERT INTO `master_informasi` (`id_informasi`, `token_informasi`, `id_kategori`, `judul_informasi`, `lokasi_informasi`, `deskripsi_informasi`, `isi_informasi`, `tgl_informasi`, `id_akses`, `status_informasi`, `file_informasi`, `tipefile_informasi`) VALUES
(1, '5c9f4a6d18a0fa2369e16971d559d99c', 37, 'Mohammad Iqbal Bachtiar, S.T., M.T.', 'Uniba Madura', 'iqbal@unibamadura.ac.id', '<p>Dosen</p>\r\n', '2008-03-23', 1, 1, 'iqbal.png', '.png'),
(2, 'e7cbc991a873b52fd1f472a08ca50b35', 37, 'Zeinor Rahman, S.Pd., M.Pd.', 'Uniba Madura', 'zeinor@unibamadura.ac.id', '<p>Dosen</p>\r\n', '2008-03-23', 1, 1, 'zeinor.png', '.png'),
(3, '8648cb3f35ae8bf64a9a0a6a07eb7af3', 37, 'Akhmad Tajuddin Tholaby MS, S.Kom., M.Kom.', '', 'tajuddin@unibamadura.ac.id', '<p>Dosen</p> ', '2008-03-23', 1, 1, 'tajudin.png', '.png'),
(4, '82a4665e6fe52892198f4f4cf7d69776', 37, 'Mustain, S.pd., M.Pd.', '', 'mustain@unibamadura.ac.id', '<p>Dosen</p> ', '2008-03-23', 1, 1, 'mustain.png', '.png'),
(5, '29add21cd0ccb090740323686f439b5a', 37, 'Muhammad Najib, S.Kom., M.T.I', 'Uniba Madura', 'najib@unibamadura.ac.id', '<p>Dosen</p>\r\n', '2008-03-23', 1, 1, 'najib.png', '.png'),
(6, '41788dae306c1d83247618d1e70c2aac', 37, 'Aulia Khoirunnita, S.Kom., M.Kom.', 'Uniba Madura', 'aulia@unibamadura.ac.id', '<p>Dosen</p>\r\n', '2008-03-23', 1, 1, 'aulia.png', '.png');

-- --------------------------------------------------------

--
-- Table structure for table `master_kategori`
--

CREATE TABLE `master_kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `kode_kategori` varchar(100) NOT NULL,
  `nama_kategori` text NOT NULL,
  `keterangan_kategori` text NOT NULL,
  `deskripsi_kategori` text NOT NULL,
  `status_kategori` smallint(11) NOT NULL,
  `url` text NOT NULL,
  `tgl_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_kategori`
--

INSERT INTO `master_kategori` (`id_kategori`, `id_menu`, `kode`, `kode_kategori`, `nama_kategori`, `keterangan_kategori`, `deskripsi_kategori`, `status_kategori`, `url`, `tgl_create`) VALUES
(18, 3, 'M01', '03c4ed00c28708b7fa1a06de76777a34', 'Informasi', '', '', 0, 'informasi', '2023-03-08 00:31:27'),
(19, 3, 'M02', 'a103b8540435c93a9e4a5be4980d25e0', 'Pengumuman', '', '', 1, 'informasi', '2023-03-08 00:53:16'),
(20, 3, 'M03', 'd3804917619799f084452f0243b95fa1', 'Surat Edaran', '', '', 0, 'informasi', '2023-03-08 00:31:27'),
(23, 2, 'M04', '08933735f46853255ac5758a63cbe291', 'Fasilitas', 'Fasilitas Informatika Uniba Madura', '', 1, 'profil/fasilitas', '2023-03-08 00:31:27'),
(24, 3, 'M05', 'aad832cdcc6e1c764e8efc1653d975f6', 'Event', 'Event Informatika Uniba Madura', '', 0, 'Informasi', '2023-03-08 00:31:27'),
(25, 4, 'M06', '1998c9616ed9cb0eb2472b8703fa6122', 'Merdeka Belajar Kampus Merdeka (MBKM)', 'Program Merdeka Belajar Kampus Merdeka adalah kebijakan dari Kementrian Pendidikan dan Kebudayaan Indonesia yang dituangkan dalam Peraturan Menteri Pendidikan dan Kebudayaan RI Nomor 3 Tahun 2020 yang memberikan kesempatan kepada mahasiswa melakukan aktifitas pembelajaran sebanyak 3 semester di luar Program Studi asal. Ada 8 kegiatan yang ditentukan sebagai aktifitas merdeka belajar yang dapat dipilih oleh mahasiswa untuk dilakukan selama 1 semester penuh Berikut ini adalah Dokumen dan Panduan terkait Program Merdeka Belajar Kampus Merdeka (MBKM) di lingkungan Fakultas Ilmu Komputer Universitas Brawijaya', '', 1, 'akademik/pendidikan/mbkm', '2023-03-08 00:31:27'),
(26, 4, 'M07', 'f81a7e8326aeeb4e95196945ca004a33', 'Transkrip Akademik, Legalisir & Surat Keterangan', 'Berikut adalah rekap acuan referensi terkait proses pengajuan surat keterangan, transkrip akademik dan legalisir dokumen di Lingkungan Program Studi Informatika. ', '', 1, 'akademik/prosedur/transkip_akademik', '2023-03-08 00:31:27'),
(27, 4, 'M08', '1987f5b76fd20e6a8746257c7b01eaf0', 'Praktek Kerja Lapangan', 'Proses PKL meliputi pendaftaran, pemberkasan, pelaksaan, pelaporan dan pelaksanaan seminar hasil. Berikut adalah rekap acuan referensi terkait proses Praktek Kerja di Lingkungan Fakultas Ilmu Komputer. ', '', 1, 'akademik/prosedur/pkl', '2023-03-08 00:31:27'),
(28, 4, 'M09', 'c7738b475dd4770dd2d60f0780089b2f', 'Seminar Proposal & Skripsi', 'Berikut adalah rekap acuan referensi terkait proses skripsi di Lingkungan Program Studi Informatika', '', 1, 'akademik/prosedur/sempro_skripsi', '2023-03-08 00:31:27'),
(31, 4, 'M10', 'b05c22bc2cdffa16b67a200789818255', 'SOP Praktikum', 'Strandart Operasional Praktikum Informatika Uniba Madura', '', 1, 'akademik/pendidikan/sop_praktikum', '2023-03-08 00:31:27'),
(32, 2, 'M11', '0a2df3ab30d0a474fb64d6c5ad0d3617', 'Akreditasi', 'Akreditasi Uniba Madura', '', 1, 'profil/akreditasi', '2023-03-08 00:31:27'),
(33, 2, 'M12', '04659ab1f460df837b55b2f818714d17', 'Tendik', 'Tenaga Kependidikan', '', 0, '', '2023-03-08 00:31:27'),
(36, 7, 'M13', 'ba65f764757faa602db7d2bdc01d5b97', 'Data Mahasiswa', 'Mahasiswa Informatika Uniba Madura', '', 1, 'akademik/sdm/data_mahasiswa', '2023-03-08 00:31:27'),
(37, 2, 'M14', 'f3519325190a22b39de7d67aa6950e9c', 'Data Dosen', 'Dosen Informatika', '1. Isi Judul dengan Nama Dosen\n2. Isi deskripsi dengan email Dosen\n3. Kolom word isi dengan jabatan', 1, 'profil/sdm/dosen', '2023-03-08 01:04:43'),
(38, 7, 'M15', '098be42847839051ec3a01f695d761f2', 'Data Alumni', 'Jumlah Alumni', '', 1, 'akademik/sdm/data_alumni', '2023-03-08 00:31:27'),
(39, 4, 'M16', '3973e0ae2455d311db10906f04fb525f', 'Cuti', 'Prosedur Cuti', '', 1, 'akademik/prosedur/cuti', '2023-03-08 00:31:27'),
(40, 4, 'M17', 'cc6d3c94cafb1a4d928dc1f9194a04ba', 'Yudisium', 'Prosedur Yudisium', '', 1, 'akademik/prosedur/yudisium', '2023-03-08 00:31:27'),
(41, 4, 'M18', 'b992c6059af5c089bcb158d5a8c163b8', 'Wisuda', 'Prosedur Wisuda', '', 1, 'akademik/prosedur/wisuda', '2023-03-08 00:31:27'),
(42, 5, 'M19', '002633923e017cbd38bc6eaf4dd4fc6f', 'Panduan Penelitian & Pengabdian', 'Panduan Penelitian & Pengabdian', '', 0, 'penelitian_pengabdian/panduan_penelitian', '2023-03-08 00:31:27'),
(43, 5, 'M20', 'd9d60d4a8e5229806cf19b426be1c800', 'Hasil Penelitian & Pengabdian', 'Hasil Penelitian & Pengabdian', '', 0, 'penelitian_pengabdian/hasil_penelitian', '2023-03-08 00:31:27'),
(44, 6, 'M21', '6263241862a874816c72b5157efb7117', 'Informasi Beasiswa', 'Informasi Beasiswa Uniba Madura', '', 0, 'kemahasiswaan/informasi/info_beasiswa', '2023-03-08 00:31:27'),
(45, 6, 'M22', 'f521e2c656541ea498babec0afb3d76f', 'Informasi Yudisium', 'Info Yudisium', '', 1, 'kemahasiswaan/informasi/info_yudisium', '2023-03-08 00:31:27'),
(46, 6, 'M23', '14e7c264de00e3488f41cb1ceb2c07f3', 'Informasi Wisuda', 'Informasi Wisuda', '', 1, 'kemahasiswaan/informasi/info_wisuda', '2023-03-08 00:31:27'),
(47, 6, 'M24', '29bd8466a055f706ff34b175c3e43afe', 'Prestasi Mahasiswa', 'Prestasi Mahasiswa Informatika', '', 1, 'kemahasiswaan/prestasi/prestasi_mahasiswa', '2023-03-08 00:31:27'),
(48, 6, 'M25', '1d6ce6dfd84254ec1febdebb0a396550', 'Kegiatan Mahasiswa', 'Kegiatan Mahasiswa Informatika', '', 0, 'kemahasiswaan/ormawa/kegiatan_mahasiswa', '2023-03-08 00:31:27'),
(49, 6, 'M26', 'f7ac5ce7754592d9699941a9c9415a0c', 'Himpunan Mahasiswa Informatika', 'HIMATIF UNIBA MADURA', '', 0, 'kemahasiswaan/ormawa/himatif', '2023-03-08 00:31:27'),
(50, 2, 'M27', 'ea9412ee0bcdc0f51ef284c572c48bc6', 'Sejarah', 'Sejarah Program Studi', '', 1, 'profil/sejarah', '2023-03-08 00:31:27'),
(51, 2, 'M28', '08231b3fe2ec488f52c91f8d4e39215b', 'Struktur Organisasi', 'Struktur Organisasi Program Studi', 'Silahkan isi menu sesuaikan dengan kebutuhan : 1. Judul isikan dengan Nama 2. Deskripsi isikan dengan jabatan', 1, 'profil/struktur_organisasi', '2023-03-08 00:31:27'),
(52, 4, 'M29', '50c1c7b8c0c0640a613b62d69fe89abd', 'Sistem Pendidikan', 'Sistem Pendidikan Program Studi', '', 1, 'akademik/pendidikan/sistem_pendidikan', '2023-03-08 00:31:27'),
(53, 4, 'M30', '05ac6314c969dfcd049bf9f3f9069e2c', 'Kalender Akademik', 'Kalender Akademik Program Studi', '', 1, 'akademik/pendidikan/kalender_akademik', '2023-03-08 00:31:27'),
(54, 4, 'M31', 'cb11eb8e334ce75fdfe139079c786059', 'Kurikulum', 'Kurikulum', '', 1, 'akademik/pendidikan/kurikulum', '2023-03-08 00:31:27'),
(55, 4, 'M32', 'edd8f786238df0bfbf18d0c3fb55e890', 'Daftar Ulang & KRS', 'Daftar Ulang & KRS', '', 1, 'akademik/prosedur/daftar_ulang_krs', '2023-03-08 00:31:27'),
(56, 4, 'M33', '34e8588b2e5c821fda2a3a682bef1db8', 'Dokumen Akademik', 'Dokumen Akademik', '', 1, 'akademik/prosedur/dokumen_akademik', '2023-03-08 00:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `master_menu`
--

CREATE TABLE `master_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_menu`
--

INSERT INTO `master_menu` (`id_menu`, `nama_menu`, `icon`) VALUES
(2, 'Profil', 'user'),
(3, 'Informasi', 'info'),
(4, 'Akademik', 'home'),
(5, 'Penelitian & Pengabdian', 'layers'),
(6, 'Kemahasiswaan', 'globe'),
(7, 'Lainnya', 'book');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` int(11) NOT NULL,
  `posisi_akses` varchar(10) NOT NULL COMMENT 'dosen/mahasiswa',
  `level_akses` varchar(10) NOT NULL COMMENT 'pengguna/admin',
  `username` varchar(50) NOT NULL,
  `password_akses` varchar(255) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `posisi_akses`, `level_akses`, `username`, `password_akses`, `last_login`) VALUES
(1, 'mahasiswa', 'admin', 'yosibagus', '454b43c37b5945311275d31b24c9aaa4', '2023-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaturan`
--

CREATE TABLE `tb_pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `nama_header` varchar(20) NOT NULL,
  `sub_header` varchar(30) NOT NULL,
  `logo_header` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_dosen`
--
ALTER TABLE `master_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `master_informasi`
--
ALTER TABLE `master_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `master_kategori`
--
ALTER TABLE `master_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `master_menu`
--
ALTER TABLE `master_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_dosen`
--
ALTER TABLE `master_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `master_informasi`
--
ALTER TABLE `master_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_kategori`
--
ALTER TABLE `master_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `master_menu`
--
ALTER TABLE `master_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_akses`
--
ALTER TABLE `tb_akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
