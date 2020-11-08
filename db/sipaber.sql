-- phpMyAdmin SQL Dump
-- version 2.8.0.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 07, 2020 at 12:34 AM
-- Server version: 5.0.20
-- PHP Version: 5.1.2
-- 
-- Database: `sipaber`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `skpd`
-- 

CREATE TABLE `skpd` (
  `id_skpd` int(6) NOT NULL auto_increment,
  `nama_skpd` varchar(200) NOT NULL,
  `alamat_skpd` text NOT NULL,
  `telp_skpd` varchar(20) NOT NULL,
  `email_skpd` varchar(30) NOT NULL,
  `singkat` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_skpd`),
  UNIQUE KEY `nama_skpd` (`nama_skpd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

-- 
-- Dumping data for table `skpd`
-- 

INSERT INTO `skpd` VALUES (1, 'INSPEKTORAT  ', '', '', '-', '');
INSERT INTO `skpd` VALUES (2, 'BADAN PERENCANAAN PEMBANGUNAN, PENELITIAN DAN PENGEMBANGAN DAERAH', '', '', '-', 'BAPPEDA');
INSERT INTO `skpd` VALUES (3, 'BADAN KEPEGAWAIAN, PENDIDIKAN DAN PELATIHAN ', '', '', '-', 'BKPP');
INSERT INTO `skpd` VALUES (4, 'SEKRETARIAT DAERAH ', '', '', '-', '');
INSERT INTO `skpd` VALUES (5, 'SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH', '', '', '-', 'SEKRETARIAT DPRD');
INSERT INTO `skpd` VALUES (6, 'BADAN KESATUAN BANGSA DAN POLITIK ', '', '', '-', 'BAKESBANGPOL');
INSERT INTO `skpd` VALUES (7, 'BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH', '', '', '-', 'BPKAD');
INSERT INTO `skpd` VALUES (8, 'BADAN PENGELOLAAN PAJAK DAN RETRIBUSI DAERAH ', '', '', '-', 'BPPRD');
INSERT INTO `skpd` VALUES (9, 'BADAN PENANGGULANGAN BENCANA DAERAH', '', '', '-', 'BPBD');
INSERT INTO `skpd` VALUES (10, 'DINAS SOSIAL ', '', '', '-', 'DINSOS');
INSERT INTO `skpd` VALUES (11, 'DINAS KEPENDUDUKAN DAN  PENCATATAN SIPIL ', '', '', '-', 'DISDUKCAPIL');
INSERT INTO `skpd` VALUES (12, 'DINAS PERHUBUNGAN', '', '', '-', '');
INSERT INTO `skpd` VALUES (13, 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG ', '', '', '-', 'DPUPR');
INSERT INTO `skpd` VALUES (14, 'DINAS PEMUDA OLAHRAGA, KEBUDAYAAN DAN PARIWISATA', '', '', '-', 'DISPORABUDPAR');
INSERT INTO `skpd` VALUES (15, 'DINAS KETAHANAN PANGAN, PERTANIAN  DAN PERIKANAN ', '', '', '-', 'DKP3');
INSERT INTO `skpd` VALUES (16, 'DINAS PERDAGANGAN', '', '', '-', '');
INSERT INTO `skpd` VALUES (17, 'DINAS PENDIDIKAN ', '', '', '-', '');
INSERT INTO `skpd` VALUES (18, 'DINAS KESEHATAN ', '', '', '-', '');
INSERT INTO `skpd` VALUES (19, 'DINAS LINGKUNGAN HIDUP ', '', '', '-', 'DLH');
INSERT INTO `skpd` VALUES (20, 'DINAS KOMUNIKASI DAN INFORMATIKA ', '', '', '-', '');
INSERT INTO `skpd` VALUES (21, 'DINAS PERUMAHAN DAN PERMUKIMAN ', '', '', '-', 'DINAS PERUMAHAN & PERMUKIMAN');
INSERT INTO `skpd` VALUES (22, 'DINAS PENGENDALIAN PENDUDUK, KELUARGA BERENCANA,  PEMBERDAYAAN MASYARAKAT, PEREMPUAN DAN PERLINDUNGAN ANAK', '', '', '-', 'DP2KBPM DAN PA');
INSERT INTO `skpd` VALUES (23, 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', '', '', '-', 'DINAS PM DAN PTSP');
INSERT INTO `skpd` VALUES (24, 'DINAS ARSIP DAN PERPUSTAKAAN DAERAH ', '', '', '-', '');
INSERT INTO `skpd` VALUES (25, 'SATUAN POLISI PAMONG PRAJA', '', '', '-', 'SATPOL PP');
INSERT INTO `skpd` VALUES (26, 'RUMAH SAKIT DAERAH IDAMAN', '', '', '-', '');
INSERT INTO `skpd` VALUES (27, 'KECAMATAN BANJARBARU SELATAN', '', '', '-', '');
INSERT INTO `skpd` VALUES (28, 'KECAMATAN BANJARBARU UTARA', '', '', '-', '');
INSERT INTO `skpd` VALUES (29, 'KECAMATAN CEMPAKA', '', '', '-', '');
INSERT INTO `skpd` VALUES (30, 'KECAMATAN LANDASAN ULIN', '', '', '-', '');
INSERT INTO `skpd` VALUES (31, 'KECAMATAN LIANG ANGGANG', '', '', '-', '');
INSERT INTO `skpd` VALUES (32, 'KELURAHAN CEMPAKA', '', '', '-', '');
INSERT INTO `skpd` VALUES (33, 'KELURAHAN GUNTUNG MANGGIS', '', '', '-', '');
INSERT INTO `skpd` VALUES (34, 'KELURAHAN GUNTUNG PAIKAT', '', '', '-', '');
INSERT INTO `skpd` VALUES (35, 'KELURAHAN GUNTUNG PAYUNG', '', '', '-', '');
INSERT INTO `skpd` VALUES (36, 'KELURAHAN KEMUNING', '', '', '-', '');
INSERT INTO `skpd` VALUES (37, 'KELURAHAN KOMET', '', '', '-', '');
INSERT INTO `skpd` VALUES (38, 'KEL. LANDASAN ULIN BARAT', '', '', '-', '');
INSERT INTO `skpd` VALUES (39, 'KELURAHAN LANDASAN ULIN SELATAN', '', '', '-', '');
INSERT INTO `skpd` VALUES (40, 'KELURAHAN LANDASAN ULIN TENGAH', '', '', '-', '');
INSERT INTO `skpd` VALUES (41, 'KELURAHAN LANDASAN ULIN TIMUR', '', '', '-', '');
INSERT INTO `skpd` VALUES (42, 'KELURAHAN LANDASAN ULIN UTARA ', '', '', '-', '');
INSERT INTO `skpd` VALUES (43, 'KELURAHAN LOKTABAT SELATAN', '', '', '-', '');
INSERT INTO `skpd` VALUES (44, 'KELURAHAN LOKTABAT  UTARA', '', '', '-', '');
INSERT INTO `skpd` VALUES (45, 'KELURAHAN MENTAOS', '', '', '-', '');
INSERT INTO `skpd` VALUES (46, 'KELURAHAN PALAM', '', '', '-', '');
INSERT INTO `skpd` VALUES (47, 'KELURAHAN SUNGAI BESAR', '', '', '-', '');
INSERT INTO `skpd` VALUES (48, 'KELURAHAN SUNGAI TIUNG', '', '', '-', '');
INSERT INTO `skpd` VALUES (49, 'KELURAHAN SUNGAI ULIN', '', '', '-', '');
INSERT INTO `skpd` VALUES (50, 'KELURAHAN SYAMSUDDIN NOOR', '', '', '-', '');
INSERT INTO `skpd` VALUES (51, 'KELURAHAN BANGKAL', '', '', '-', '');
INSERT INTO `skpd` VALUES (52, 'PUSKESMAS BANJARBARU UTARA', '', '', '-', '');
INSERT INTO `skpd` VALUES (53, 'PUSKESMAS GUNTUNG PAYUNG', '', '', '-', '');
INSERT INTO `skpd` VALUES (54, 'PUSKESMAS GUNTUNG MANGGIS', '', '', '-', '');
INSERT INTO `skpd` VALUES (55, 'PUSKESMAS LANDASAN ULIN', '', '', '-', '');
INSERT INTO `skpd` VALUES (56, 'PUSKESMAS LIANG ANGGANG', '', '', '-', '');
INSERT INTO `skpd` VALUES (57, 'PUSKESMAS RAWAT INAP CEMPAKA  ', '', '', '-', '');
INSERT INTO `skpd` VALUES (58, 'PUSKESMAS SUNGAI BESAR', '', '', '-', '');
INSERT INTO `skpd` VALUES (59, 'PUSKESMAS SUNGAI ULIN', '', '', '-', '');
INSERT INTO `skpd` VALUES (60, 'PUSKESMAS BANJARBARU SELATAN', '', '', '-', '');
INSERT INTO `skpd` VALUES (61, 'SEKOLAH MENENGAH PERTAMA NEGERI 1 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (62, 'SEKOLAH MENENGAH PERTAMA NEGERI 2 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (63, 'SEKOLAH MENENGAH PERTAMA NEGERI 3 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (64, 'SEKOLAH MENENGAH PERTAMA NEGERI 4 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (65, 'SEKOLAH MENENGAH PERTAMA NEGERI 5 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (66, 'SEKOLAH MENENGAH PERTAMA NEGERI 6 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (67, 'SEKOLAH MENENGAH PERTAMA NEGERI 8 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (68, 'SEKOLAH MENENGAH PERTAMA NEGERI 9 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (69, 'SEKOLAH MENENGAH PERTAMA NEGERI 10 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (70, 'SEKOLAH MENENGAH PERTAMA NEGERI 11 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (71, 'SEKOLAH MENENGAH PERTAMA NEGERI 12 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (72, 'SEKOLAH MENENGAH PERTAMA NEGERI 13 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (73, 'SEKOLAH MENENGAH PERTAMA NEGERI 14 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (74, 'SEKOLAH MENENGAH PERTAMA NEGERI 15 BANJARBARU', '', '', '-', '');
INSERT INTO `skpd` VALUES (75, 'STAF AHLI', '', '', '-', '');
INSERT INTO `skpd` VALUES (76, 'DINAS KOPERASI USAHA KECIL MENENGAH DAN  TENAGA KERJA ', '', '', '-', 'DISKOP, UKM DAN TENAGA KERJA');
INSERT INTO `skpd` VALUES (79, 'KOMISI PEMILIHAN UMUM', '', '', '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `surat_pengajuan`
-- 

CREATE TABLE `surat_pengajuan` (
  `id_surat` int(6) NOT NULL auto_increment,
  `id_skpd` varchar(6) collate latin1_general_ci NOT NULL,
  `no_surat` varchar(100) collate latin1_general_ci NOT NULL,
  `tahun` int(6) NOT NULL,
  `keterangan` text collate latin1_general_ci NOT NULL,
  `lokasi` varchar(500) collate latin1_general_ci NOT NULL,
  `admin` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_input` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `surat_pengajuan`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(10) NOT NULL auto_increment,
  `nama` varchar(30) NOT NULL,
  `pswd` varchar(1000) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pertanyaan` varchar(1000) NOT NULL,
  `telp` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `lokasi_ad` varchar(200) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `id_skpd` varchar(15) NOT NULL,
  `tgl` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (34, 'RENDHI ANDARTHA PUTRA', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '123456', '', 'Aktif', 'files/e10adc3949ba59abbe56e057f20f883eAdmin.jpg', 'Admin', '', '07-11-2020, 12:26 am');

-- --------------------------------------------------------

-- 
-- Table structure for table `usulan_perubahan`
-- 

CREATE TABLE `usulan_perubahan` (
  `id_usulan` int(6) NOT NULL auto_increment,
  `id_surat` int(6) NOT NULL,
  `id_skpd` int(6) NOT NULL,
  `kd_rekening` varchar(100) collate latin1_general_ci NOT NULL,
  `program` varchar(500) collate latin1_general_ci NOT NULL,
  `kegiatan` varchar(500) collate latin1_general_ci NOT NULL,
  `objek_belanja` varchar(500) collate latin1_general_ci NOT NULL,
  `uraian` text collate latin1_general_ci NOT NULL,
  `anggaran_awal` varchar(500) collate latin1_general_ci NOT NULL,
  `anggaran_susulan` varchar(500) collate latin1_general_ci NOT NULL,
  `keterangan` text collate latin1_general_ci NOT NULL,
  `admin` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_input` varchar(100) collate latin1_general_ci NOT NULL,
  `tahun` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_usulan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `usulan_perubahan`
-- 

