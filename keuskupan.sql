-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 08:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuskupan`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `agama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Khonghucu'),
(7, 'Lainnya'),
(8, 'Kato -> Non Kato'),
(9, 'Kato -> Kristen'),
(10, 'Katekumen');

-- --------------------------------------------------------

--
-- Table structure for table `golongan_darah`
--

CREATE TABLE `golongan_darah` (
  `id` int(11) NOT NULL,
  `golongan_darah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan_darah`
--

INSERT INTO `golongan_darah` (`id`, `golongan_darah`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'O'),
(4, 'AB'),
(5, 'Tidak Tahu');

-- --------------------------------------------------------

--
-- Table structure for table `hub_dngn_kepala_rt`
--

CREATE TABLE `hub_dngn_kepala_rt` (
  `id` int(11) NOT NULL,
  `hub_dngn_kepala_rt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hub_dngn_kepala_rt`
--

INSERT INTO `hub_dngn_kepala_rt` (`id`, `hub_dngn_kepala_rt`) VALUES
(1, 'Kepala Rumah Tangga'),
(2, 'Pasangan'),
(3, 'Anak'),
(4, 'Kakak-Adik'),
(5, 'Anak Adopsi/Anak Tiri'),
(6, 'Cucu'),
(7, 'Orang Tua/Mertua (single)'),
(8, 'Famili Lain'),
(9, 'Pembantu/Sopir/Tukang Kebun'),
(10, 'Lain - Lain');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_sosial`
--

CREATE TABLE `jabatan_sosial` (
  `id` int(11) NOT NULL,
  `jabatan_sosial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_sosial`
--

INSERT INTO `jabatan_sosial` (`id`, `jabatan_sosial`) VALUES
(1, 'RT/RW/Kelurahan'),
(2, 'Pengurus LSM'),
(3, 'Pengurus Ormas/Partai/Politik'),
(4, 'Warga Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `jenis_kelamin`) VALUES
(1, 'Laki Laki'),
(2, 'perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `keterlibatan`
--

CREATE TABLE `keterlibatan` (
  `id` int(11) NOT NULL,
  `keterlibatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterlibatan`
--

INSERT INTO `keterlibatan` (`id`, `keterlibatan`) VALUES
(1, 'Anggota Dewan Paroki'),
(2, 'Pengurus Tim Kerja'),
(3, 'Pengurus Lingkungan'),
(4, 'Pengurus Kelompok Kategorial'),
(5, 'Pengurus Ormas Kablik'),
(6, 'Warga Umat '),
(7, 'Anggota Dewan Paroki'),
(8, 'Pengurus Tim Kerja'),
(9, 'Pengurus Lingkungan'),
(10, 'Pengurus Kelompok Kategorial'),
(11, 'Pengurus Ormas Kablik'),
(12, 'Warga Umat Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `kode_bidang_studi`
--

CREATE TABLE `kode_bidang_studi` (
  `kode` int(11) NOT NULL,
  `bidang_studi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_bidang_studi`
--

INSERT INTO `kode_bidang_studi` (`kode`, `bidang_studi`) VALUES
(1, 'Adminsitrasi'),
(2, 'Agribisnis/Perikanan'),
(3, 'Akuntansi'),
(4, 'Akupuntur'),
(5, 'Analis Kesehatan'),
(6, 'Analis Lingkungan'),
(7, 'Antropoligi/Sejarah'),
(8, 'Arsitektur'),
(9, 'Asuransi'),
(10, 'Bimbingan Konseling'),
(11, 'Biologi'),
(12, 'Desain'),
(13, 'Ekonomi'),
(14, 'Farmasi'),
(15, 'Film, Televisi, Radio'),
(16, 'Filsafat/Agama/Teologi'),
(17, 'Fisika'),
(18, 'Fisioterapi'),
(19, 'Fotografi/Grafika/Seni'),
(20, 'Gegrafi/Geofisika/Geologi'),
(21, 'Gizi'),
(22, 'Hubungan Internasional'),
(23, 'Hukum'),
(24, 'Humaniora'),
(25, 'Jurnalistik'),
(26, 'Kajian Kepolisian'),
(27, 'Kajian Ketahanan/Tentara'),
(28, 'Kajian Budaya/Wanita'),
(29, 'Kearsipan'),
(30, 'Kebidanan'),
(31, 'Kedokteran Gigi'),
(32, 'Kedokteran Spesialis'),
(33, 'Kedokteran Umum'),
(34, 'Keperawatan/Kesehatan'),
(35, 'Keuangan dan Perbankan'),
(36, 'Kimia'),
(37, 'Komputer'),
(38, 'Kriminologi'),
(39, 'Manajemen'),
(40, 'Matamatika'),
(41, 'Pekerja Sosial'),
(42, 'Pemandu Wisata'),
(43, 'Penata Tari'),
(44, 'Pendidikan'),
(45, 'Pendidikan Dasar'),
(46, 'Pendidikan Fisika'),
(47, 'Pendidikan Guru Sekolah Dasar'),
(48, 'Pendidikan Luar Biasa'),
(49, 'Pendidikan Luar Sekolah'),
(50, 'Perencanaan Wilayah dan Kota'),
(51, 'Perhotelan/Pariwisata'),
(52, 'Pertambangan/Gas/Minyak'),
(53, 'Perpajakan'),
(54, 'Perpustakaan'),
(55, 'Pertanian/Perkebunan'),
(56, 'Politik / Pemerintahan'),
(57, 'Psikologi'),
(58, 'Sosiologi'),
(59, 'Statistika'),
(60, 'Teknik'),
(61, 'Teknik Kimia'),
(62, 'Lingkungan/Kehutanan/Kelautan'),
(63, 'Teknik Sipil'),
(64, 'Ternak/Kedokteran Hewan'),
(65, 'Transportasi/Pelayaran/ Penerbangan'),
(66, 'Sastra/Bahasa'),
(67, 'Ketrampilan Kain/Keramik/Kayu/Boga'),
(68, 'Pertahanan'),
(69, 'Sekretaris'),
(70, 'Komunikasi');

-- --------------------------------------------------------

--
-- Table structure for table `kode_keuskupan`
--

CREATE TABLE `kode_keuskupan` (
  `id` int(11) NOT NULL,
  `kode` int(5) NOT NULL,
  `nama_keuskupan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_keuskupan`
--

INSERT INTO `kode_keuskupan` (`id`, `kode`, `nama_keuskupan`) VALUES
(1, 301, 'Agats-Asmats'),
(2, 302, 'Ambon'),
(3, 303, 'Atambus'),
(4, 304, 'Bandung'),
(5, 305, 'Banjarmasin'),
(6, 306, 'Bogor'),
(7, 307, 'Denpasar'),
(8, 308, 'Ende'),
(9, 309, 'Jakarta'),
(10, 310, 'Jayapura'),
(11, 311, 'Ketapang'),
(12, 312, 'Kupang'),
(13, 313, 'Larantuka'),
(14, 314, 'Makasar'),
(15, 315, 'Malang'),
(16, 316, 'Manado'),
(17, 317, 'Manukwari-Sorong'),
(18, 318, 'Maumere'),
(19, 319, 'Medan'),
(20, 320, 'Merauke'),
(21, 321, 'Padang'),
(22, 322, 'Palangkaraya'),
(23, 323, 'Palembang'),
(24, 324, 'Pangkalpinang'),
(25, 325, 'Pontianak'),
(26, 326, 'Purwokerto'),
(27, 327, 'Ruteng'),
(28, 328, 'Samarinda'),
(29, 329, 'Sanggau'),
(30, 330, 'Semarang'),
(31, 331, 'Sibolga'),
(32, 332, 'Sintang'),
(33, 333, 'Surabaya'),
(34, 334, 'Tanjungkarang'),
(35, 335, 'Tanjung Selor'),
(36, 336, 'Timika'),
(37, 337, 'Weetebuta'),
(38, 338, 'TNI/POLRI'),
(39, 339, 'Luar Negeri');

-- --------------------------------------------------------

--
-- Table structure for table `kode_pekerjaan`
--

CREATE TABLE `kode_pekerjaan` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `jenis_pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_pekerjaan`
--

INSERT INTO `kode_pekerjaan` (`id`, `kode`, `jenis_pekerjaan`) VALUES
(1, 3, 'Ahli (spesial - lainnya)'),
(2, 1, 'Ahli Ekonomi'),
(3, 2, 'Ahli Hukum: Pengacara, Hakim, Jaksa, Notaris'),
(4, 0, 'Anak Berusia Kurang dari 6 th'),
(5, 4, 'Apoteker'),
(6, 5, 'Bidan'),
(7, 70, 'Buruh Pabrik'),
(8, 72, 'Buruh Perusahaan'),
(9, 71, 'Buruh Tambang'),
(10, 6, 'Buruh Tani Dan Ternak'),
(11, 7, 'Dokter Gigi'),
(12, 8, 'Dokter Hewan'),
(13, 9, 'Dokter Umum/Ahli'),
(14, 10, 'Guide Turis'),
(15, 67, 'Guru Agama di Sekolah'),
(16, 62, 'Ibu Rumah Tangga'),
(17, 53, 'Jasa ''Uang'': Penggandaan Uang'),
(18, 11, 'Juru Masak, Pengolahan Makanan'),
(19, 66, 'Katekis/Tenaga Pastoral'),
(20, 75, 'Konsultan'),
(21, 12, 'Kontraktor'),
(22, 65, 'Mahasiswa'),
(23, 59, 'Manager'),
(24, 69, 'Nelayan'),
(25, 13, 'Olahragawan'),
(26, 14, 'Pandai Besi'),
(27, 24, 'Pedagang/Usaha Besar'),
(28, 15, 'Pedagang/Usaha Kecil'),
(29, 57, 'Pedagang/Usaha Sedang'),
(30, 16, 'Pejabat DPR'),
(31, 17, 'Pejabat Pelaksana: Tata Usaha, Administrasi'),
(32, 18, 'Pekerja Kasar/Buruh'),
(33, 20, 'Pekerja Rumah Tangga'),
(34, 33, 'Pekerja Sosial'),
(35, 64, 'Pelajar'),
(36, 19, 'Pemahat, Pelukis, Seniman'),
(37, 21, 'Pemborong'),
(38, 22, 'Pemegang Kas, Bendaharawan'),
(39, 73, 'Peneliti'),
(40, 23, 'Pemelihara/Tenaga Gedung'),
(41, 25, 'Penerbangan/Pelayaran (Pilot, Pramugari)'),
(42, 26, 'Pengajar Prasekolah'),
(43, 27, 'Pengajar SD'),
(44, 28, 'Pengajar SLB'),
(46, 29, 'Pengajar SLTA'),
(47, 29, 'Pengajar SLTP'),
(48, 31, 'Pengajar Universitas'),
(49, 32, 'Pengarang, Wartawan, Penulis'),
(50, 54, 'Pengrajin: Kulit, Tembaga'),
(51, 52, 'Penjual Jasa: Tukang Pijat, Tukang Salon, Courir'),
(52, 34, 'Pensiun (pernah pegawai)'),
(53, 35, 'Perawat'),
(54, 36, 'Petani dan Peternak'),
(55, 63, 'PHK'),
(56, 37, 'PNS/Pegawai/Karyawan'),
(57, 38, 'Polisi, TNI'),
(58, 39, 'Psikolog'),
(59, 40, 'Satpam/Security'),
(60, 61, 'Sedang Mencari Kerja'),
(61, 58, 'Serabutan/Tenaga Lepas'),
(62, 41, 'Sopir'),
(63, 55, 'Suster/Br/Rm'),
(64, 56, 'Swasta'),
(65, 42, 'Teknisi, Operator/Ahli Mesin'),
(66, 74, 'Tenaga Administrasi'),
(67, 68, 'Tenaga Jasa: Pelayanan Toko, dkk'),
(68, 43, 'Tenaga Management'),
(69, 44, 'Tenaga Pemasaran, Penjualan, Sales'),
(70, 60, 'Tidak Bekerja'),
(71, 45, 'Tidak Dapat Bekerja'),
(72, 46, 'Tukang Batu'),
(73, 47, 'Tukang Cat'),
(74, 48, 'Tukang Jahit'),
(75, 49, 'Tukang Kayu'),
(76, 50, 'Tukang Las'),
(77, 51, 'Tukang Listrik, Bengkel');

-- --------------------------------------------------------

--
-- Table structure for table `kode_suku_bangsa`
--

CREATE TABLE `kode_suku_bangsa` (
  `id` int(11) NOT NULL,
  `etnis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_suku_bangsa`
--

INSERT INTO `kode_suku_bangsa` (`id`, `etnis`) VALUES
(1, 'Ambon'),
(2, 'Bali'),
(3, 'Batak'),
(4, 'Betawi'),
(5, 'Bugis'),
(6, 'Dayak'),
(7, 'Flores'),
(8, 'Papua'),
(9, 'Jawa'),
(10, 'Madura'),
(11, 'Makasar'),
(12, 'Minangkabau'),
(13, 'Nias'),
(14, 'Sumbawa'),
(15, 'Sunda'),
(16, 'Timor'),
(17, 'Tionghoa'),
(18, 'Toraja'),
(19, 'Non Indonesia'),
(20, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `komuni_pertama`
--

CREATE TABLE `komuni_pertama` (
  `id` int(11) NOT NULL,
  `komuni_pertama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komuni_pertama`
--

INSERT INTO `komuni_pertama` (`id`, `komuni_pertama`) VALUES
(1, 'Sudah'),
(2, 'Belim');

-- --------------------------------------------------------

--
-- Table structure for table `list_anggota_keluarga`
--

CREATE TABLE `list_anggota_keluarga` (
  `id` int(11) NOT NULL,
  `id_anggota_keluarga` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tempat_dan_tgl_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `hub_dngn_kepala_rt` varchar(50) NOT NULL,
  `suku_bangsa` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `bidang_studi` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `golongan_darah` varchar(5) NOT NULL,
  `status_kesehatan` varchar(50) NOT NULL,
  `waktu_baptis` varchar(50) NOT NULL,
  `tempat_dan_tgl_baptis` varchar(50) NOT NULL,
  `tempat_dan_tahun_penguatan` varchar(50) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `jabatan_sosial` varchar(50) NOT NULL,
  `tempat_tinggal` varchar(50) NOT NULL,
  `komuni_pertama` varchar(50) NOT NULL,
  `status_gerejawi` varchar(50) NOT NULL,
  `keterlibatan` varchar(50) NOT NULL,
  `liber_baptizatorum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_anggota_keluarga`
--

INSERT INTO `list_anggota_keluarga` (`id`, `id_anggota_keluarga`, `nama`, `agama`, `tempat_dan_tgl_lahir`, `jenis_kelamin`, `hub_dngn_kepala_rt`, `suku_bangsa`, `pendidikan`, `bidang_studi`, `pekerjaan`, `golongan_darah`, `status_kesehatan`, `waktu_baptis`, `tempat_dan_tgl_baptis`, `tempat_dan_tahun_penguatan`, `status_perkawinan`, `jabatan_sosial`, `tempat_tinggal`, `komuni_pertama`, `status_gerejawi`, `keterlibatan`, `liber_baptizatorum`) VALUES
(369, 8107604, 'adsfasfa', 'Kristen', 'sdfsdf', 'Laki Laki', 'Pasangan', '', '', '', 'Buruh Pabrik', 'A', 'Normal', 'Dewasa dari budha', 'sdfsf', 'sdfsdf', 'Sah Katolik', 'Pengurus LSM', 'Kupang', 'Sudah', 'Misa di gereja setempat, aktif di lingkungan', 'Pengurus Lingkungan', '5454'),
(370, 8107604, 'adsfasfa', 'Kristen', 'sdfsdf', 'Laki Laki', 'Pasangan', '', '', '', 'Buruh Pabrik', 'A', 'Normal', 'Dewasa dari budha', 'sdfsf', 'sdfsdf', 'Sah Katolik', 'Pengurus LSM', 'Kupang', 'Sudah', 'Misa di gereja setempat, aktif di lingkungan', 'Pengurus Lingkungan', '5454');

-- --------------------------------------------------------

--
-- Table structure for table `list_kepala_keluarga`
--

CREATE TABLE `list_kepala_keluarga` (
  `id` int(11) NOT NULL,
  `id_anggota_keluarga` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` int(11) NOT NULL,
  `wilayah_atau_lingkungan` varchar(50) NOT NULL,
  `status_nikah` varchar(50) NOT NULL,
  `tempat_atau_tgl_nikah` varchar(50) NOT NULL,
  `liber_matrimonium` varchar(50) NOT NULL,
  `kondisi_ekonomi` varchar(50) NOT NULL,
  `jenis_rumah_tangga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_kepala_keluarga`
--

INSERT INTO `list_kepala_keluarga` (`id`, `id_anggota_keluarga`, `nama`, `agama`, `alamat`, `telp`, `wilayah_atau_lingkungan`, `status_nikah`, `tempat_atau_tgl_nikah`, `liber_matrimonium`, `kondisi_ekonomi`, `jenis_rumah_tangga`) VALUES
(4, 8107604, 'fsdfsd', 'budha', 'sdfsfdsf', 2147483647, 'sfsdfdssdfs', 'dfsfssdfs', 'fsdfsd', 'fsdfsdfsdfs', 'bisa_membantu', 'dfsfssdfsf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `id_anggota_keluarga` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `session`, `id_anggota_keluarga`) VALUES
(3, 'user1', 'user1', 'list_kepala_keluarga', 8107604),
(4, 'admin', 'admin', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_gerejawi`
--

CREATE TABLE `status_gerejawi` (
  `id` int(11) NOT NULL,
  `status_gerejawi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_gerejawi`
--

INSERT INTO `status_gerejawi` (`id`, `status_gerejawi`) VALUES
(1, 'Misa di gereja setempat, aktif di lingkungan'),
(2, 'Misa di gereja setempat, aktif di paroki lain'),
(3, 'Misa & aktif gereja paroki lain'),
(4, 'Misa di luar gereja setempat, aktif di lingkungan paroki'),
(5, 'kadang kadang misa ekaristi'),
(6, 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `status_kesehatan`
--

CREATE TABLE `status_kesehatan` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `status_kesehatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_kesehatan`
--

INSERT INTO `status_kesehatan` (`id`, `kode`, `status_kesehatan`) VALUES
(1, 0, 'Normal'),
(2, 1, 'Cacat Fisik'),
(3, 2, 'Buta'),
(4, 4, 'Bisu / Tuli'),
(5, 8, 'Sulit Mengurus Diri Sendiri'),
(6, 16, 'Kesulitan Mengingat'),
(7, 32, 'Penyakit Kronis'),
(8, 55, 'Pikun');

-- --------------------------------------------------------

--
-- Table structure for table `status_perkawinan`
--

CREATE TABLE `status_perkawinan` (
  `id` int(11) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_perkawinan`
--

INSERT INTO `status_perkawinan` (`id`, `status_perkawinan`) VALUES
(1, 'Belum Nikah'),
(2, 'Sah Katolik'),
(3, 'Sah Beda Agama'),
(4, 'Sah Beda Gereja'),
(5, 'Nikah di Luar Gereja'),
(6, 'Di Tinggalkan Pasangannya'),
(7, 'Krisis Berkepanjangan'),
(8, 'Janda / Duda Mati'),
(9, 'Rm/Br/Sr dari Paroki'),
(10, 'Rm/Br/Sr bekerja di Paroki'),
(11, 'Hidup Bersama Tanpa Ikatan'),
(12, 'Nikah Adat'),
(13, 'Nikah Efek Sipil');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_baptis`
--

CREATE TABLE `waktu_baptis` (
  `id` int(11) NOT NULL,
  `waktu_baptis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu_baptis`
--

INSERT INTO `waktu_baptis` (`id`, `waktu_baptis`) VALUES
(1, 'Saat usia 0-7th'),
(2, 'Saat usia 9-18'),
(3, 'Dewasa dari islam'),
(4, 'Dewasa dari hindu'),
(5, 'Dewasa dari budha'),
(6, 'Dewasa dari khonghucu'),
(7, 'Dewasa dari kristen'),
(8, 'Dewasa dari lain-lain'),
(9, 'Belum baptis'),
(10, 'Katekumen (Bayi+Anak)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golongan_darah`
--
ALTER TABLE `golongan_darah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hub_dngn_kepala_rt`
--
ALTER TABLE `hub_dngn_kepala_rt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan_sosial`
--
ALTER TABLE `jabatan_sosial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterlibatan`
--
ALTER TABLE `keterlibatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_bidang_studi`
--
ALTER TABLE `kode_bidang_studi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `kode_keuskupan`
--
ALTER TABLE `kode_keuskupan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_pekerjaan`
--
ALTER TABLE `kode_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_suku_bangsa`
--
ALTER TABLE `kode_suku_bangsa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komuni_pertama`
--
ALTER TABLE `komuni_pertama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_anggota_keluarga`
--
ALTER TABLE `list_anggota_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_kepala_keluarga`
--
ALTER TABLE `list_kepala_keluarga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_anggota_keluarga` (`id_anggota_keluarga`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `status_gerejawi`
--
ALTER TABLE `status_gerejawi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_kesehatan`
--
ALTER TABLE `status_kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waktu_baptis`
--
ALTER TABLE `waktu_baptis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `golongan_darah`
--
ALTER TABLE `golongan_darah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hub_dngn_kepala_rt`
--
ALTER TABLE `hub_dngn_kepala_rt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jabatan_sosial`
--
ALTER TABLE `jabatan_sosial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `keterlibatan`
--
ALTER TABLE `keterlibatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kode_bidang_studi`
--
ALTER TABLE `kode_bidang_studi`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `kode_keuskupan`
--
ALTER TABLE `kode_keuskupan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `kode_pekerjaan`
--
ALTER TABLE `kode_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `kode_suku_bangsa`
--
ALTER TABLE `kode_suku_bangsa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `komuni_pertama`
--
ALTER TABLE `komuni_pertama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `list_anggota_keluarga`
--
ALTER TABLE `list_anggota_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=371;
--
-- AUTO_INCREMENT for table `list_kepala_keluarga`
--
ALTER TABLE `list_kepala_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status_gerejawi`
--
ALTER TABLE `status_gerejawi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `status_kesehatan`
--
ALTER TABLE `status_kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `waktu_baptis`
--
ALTER TABLE `waktu_baptis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
