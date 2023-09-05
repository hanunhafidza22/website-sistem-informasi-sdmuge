-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 03:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `tgl` date NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id`, `judul`, `isi`, `kategori`, `tgl`, `gambar`) VALUES
(2, 'Parade Budaya Lebaran Bojonggede 2023', 'Alhamdulillah. Giat hari ini sukses.\r\nParade Budaya Lebaran Bojonggede. \r\nAlhamdulillah Team Drumband Dan Tapak Suci SD Muhammadiyah Bojonggede ikut memeriahkan acara ini. Sukses buat kita smua.\r\nTergerak, Bergerak, dan Menggerakan 💪💪💪', 'Kegiatan Sekolah', '2023-05-28', 'berita1686500746.jpeg'),
(3, 'Pembukaan Musyda Muhammadiyah dan Aisyiah PDM Jakarta Selatan', 'Alhamdulillah...Pembukaan Musyda Muhammadiyah dan Aisyiah PDM Jakarta Selatan berjalan lancar.  \r\n\r\nSukses Musydanya...\r\n\r\nAlhamdulillah SD Muhammadiyah Bojonggede dapat memberikan semangat melalui tampilan anak2 yang luar biasa. Terimakasih ayah bunda, anak2 ibu yang luar hiasa serta bapsk dan ibu guru yang membetsamai hari ini...', 'Kegiatan Sekolah', '2023-05-27', 'berita1686563347.jpg'),
(4, 'ROADSHOW LITERASI', 'Alhamdulillah. ROADSHOW LITERASI di SD Muhammadiyah Bojonggede, yang diselenggarakan oleh Dinas Arsip dan Perpustakaan Daerah. Serta MOU SD MUGE dengan Dinas Arsip dan Perpustakaan Daerah dan Launching Perpustakaan Digital SD MUGE dengan DAPD. 3 buku karya anak SD MUGE sudah kami serahkan ke DAPD. GEULIS merupakan program kami Gerakan Unjuk Literasi. Bismillah Literasi menulis dan membaca menjadi program unggulan kami.\r\nTerimakasih kepada Dinas Perpustakaan Daerah Kabupaten Bogor yang selalu support untuk Literasi menulis dan membaca.', 'Kegiatan Sekolah', '2023-05-23', 'berita1686563817.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bukutamu`
--

CREATE TABLE `tbl_bukutamu` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bukutamu`
--

INSERT INTO `tbl_bukutamu` (`id`, `nama`, `email`, `komentar`) VALUES
(2, 'hanun', 'embeddedkelompok4@gmail.com', 'ok websitenya'),
(3, 'Zayn Jamaluddin', 'zaynuddin@gmail.com', 'Informatif!'),
(4, 'Ismail Assalim', 'mailsalim04@gmail.com', 'Websitenya bagus ada fitur botnya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ekskul`
--

CREATE TABLE `tbl_ekskul` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ekskul`
--

INSERT INTO `tbl_ekskul` (`id`, `gambar`, `keterangan`) VALUES
(2, 'ekskul1687541800.jpg', 'Futsal'),
(3, 'ekskul1687543053.jpg', 'Membatik'),
(4, 'ekskul1687543080.png', 'Melukis'),
(5, 'ekskul1687543101.jpeg', 'Menari'),
(6, 'ekskul1687543123.jpg', 'Pantomim'),
(7, 'ekskul1687543495.png', 'Menganyam'),
(8, 'ekskul1687543160.jpg', 'Tahfidz'),
(9, 'ekskul1687543477.png', 'Gitar'),
(10, 'ekskul1687543282.png', 'Basket'),
(11, 'ekskul1687543300.jpg', 'Bahasa Inggris'),
(12, 'ekskul1687543457.png', 'Panahan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id` int(3) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id`, `gambar`, `keterangan`) VALUES
(2, 'fasilitas1687540188.jpg', 'Aula'),
(3, 'fasilitas1687540210.jpg', 'Lapangan Sekolah'),
(7, 'fasilitas1687541515.jpg', 'Masjid Nurul Ilmi'),
(8, 'fasilitas1687540370.jpg', 'Ruang Guru'),
(9, 'fasilitas1687540434.jpg', 'Ruang UKS'),
(10, 'fasilitas1687540466.jpg', 'Perpustakaan Al-Qolam'),
(11, 'fasilitas1687540565.jpg', 'Ruang Tata Usaha (TU)'),
(12, 'fasilitas1687540585.jpg', 'Ruang Kepala Sekolah'),
(13, 'fasilitas1687540973.jpg', 'Pos Security'),
(14, 'fasilitas1687541030.jpg', 'Area Parkir Guru Dan Siswa'),
(15, 'fasilitas1687541049.jpg', 'Gedung Sekolah'),
(16, 'fasilitas1687541072.jpg', 'Tempat Cuci Tangan'),
(17, 'fasilitas1687541099.jpg', 'Kendaraan Operasional'),
(18, 'fasilitas1687541129.jpg', 'Fingerprint'),
(19, 'fasilitas1687541158.jpg', 'Ruang Tamu'),
(20, 'fasilitas1687541210.jpg', 'Kantin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id` int(5) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(3, 'galeri1686132537.jpeg', 'Parade Budaya Bojonggede 2023', '2023-06-07 10:08:57', NULL),
(4, 'galeri1686132619.jpg', 'One Day To Write (OTDW) 2023', '2023-06-07 10:10:19', NULL),
(5, 'galeri1686142753.jpeg', 'Parade ', '2023-06-07 12:59:13', NULL),
(7, 'galeri1686481185.jpeg', 'Parade Budaya', '2023-06-12 11:06:28', '2023-06-12 13:06:28'),
(8, 'galeri1686654613.jpg', 'Sosialisasi', '2023-06-13 11:10:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nbm` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nbm`, `nama`, `jabatan`, `alamat`, `telpon`, `foto`) VALUES
(2, '1065.143', 'NURUL NUZLIA, M.Pd.', 'Kepala Sekolah', 'Komplek Al-Azhar Green Garden Blok D/1', '087780563047', '781-001 foto kepala SD Muhammadiyah Bojonggede (Nurul Nuzlia,M.Pd).jpg'),
(4, '1236.474', 'NENENG KHOIRUNNISA, S.Pd.', 'Guru Kelas 1A', 'BDB I Rt 06 Rw 12 Bojonggede Bogor', '085774489493', '242-012 Neneng Khoirunnisa.jpg'),
(5, '1236.475', 'YEYEN NURLIYANTI SINTIANI, S.Pd.', 'Guru Kelas 1B', 'BDB II Blok DM No. 02 Bojonggede', '082114165238', '800-013 Yeyen Nurliyanti.jpg'),
(6, '', 'SITI MASITOH RUMAIN, S.Pd.', 'Guru Kelas 1C', 'Bojonggede RT 02/12 NO 16 ', '082123547509', '214-014 Siti Masitoh.jpg'),
(7, '1065.142', 'Dra. ROFI&#039;AH, S.Pd.', 'Guru Kelas 2A', 'Perum Gaperi Blok GB/5', '087873568431', '813-007 Rofiah s.jpg'),
(8, '1236.545', 'SUNARTI, S.Pd.', 'Guru Kelas 2B', 'BDB I Blok EG No. 16 Bojonggede', '085697041414', '218-015 Sunarti.jpg'),
(9, '1236.471', 'DEDE RIZKI MAHMUZI, S.Pd.I, S.Pd.', 'Guru Kelas 3A', 'Desa Ciasaihan, Pamijahan, Kab. Bogor', '085794197747', '679-009 Dede Rizki s.jpg'),
(10, '1093.901', 'MASITOH, S.Pd.', 'Guru Kelas 3B', 'Perum Gaperi Blok GU/10', '082112121867', '418-011 Masitoh.jpg'),
(11, '1236.473', 'ARDIYANTI, S.T, S.Pd.', 'Guru Kelas 4A', 'Kp. Cipayung RT 03 RW 06 Desa Pondok Rajeg Kecamatan Cibinong Kabupaten Bogor', '081299018039', '17-017 Ardiyanti.jpg'),
(12, '1404.621', 'M. SYARIF HIDAYATULLOH, S.Pd.', 'Guru Kelas 4B', 'Jl. Batu Raya Menteng Atas Setia Budi', '085892180365', '64-grabilla.gqHp44.png'),
(13, '1236.172', 'SHINTA ARYANI SAPUTRI, S.Pd.', 'Guru Kelas 5A', 'Bukit Waringin E18/7 Kedung Waringin', '082211552862', '228-008 Shinta Aryani s.jpg'),
(14, '1065.144', 'MASRIYAH, S.Ag.', 'Guru Kelas 5B', 'Perum Artha Sentosa Blok D2 No. 12 A', '085920776239', '406-002 Masriyah  s.jpg'),
(15, '1065.140', 'ISHARYANI, M.Pd.', 'Guru Kelas 6', 'Perum Gaperi Blok MX/3', '085710001171', '343-006 Isharyani 1.jpg'),
(16, '1065.147', 'IRAWAN, S.Pd.I.', 'Guru PJOK, HW, dan Tapak Suci', 'Jalan Raya Bojonggede', '082124701500', '984-test.jpg'),
(17, '1093.902', 'IYET RAHMAWATI', 'Guru Bahasa Sunda', 'Jl. Swadaya 1 No. 05B Bojonggede', '081289077485', '424-010 Iyet Rahmawati s.jpg'),
(18, '1236.470', 'MUHAMAD SADIR, M.Pd.', 'Guru PAI dan Bahasa Arab', 'Jalan Al-Ikhlas Gaperi Bojonggede', '085288903550', '387-003 Muhamad Sadir s.jpg'),
(19, '1233.592', 'MUHAMMAD AMIN, S.Pd.', 'Guru Kemuhammadiyahan', 'Kampung Moyan Galuga Cibungbulang', '085926993867', '449-004 percobaan.jpg'),
(20, '1236.475', 'DIMAS EKO SAPUTRA', 'Guru Komputer', 'Ciawi Bogor', '089657825312', '210-Untitled.jpg'),
(21, '-', 'OJAN FAUZAN', 'Office Boy', 'Blok GX No. 13 Bojonggede, Bogor', '083871790370', '123-IMG_20160915_070902.jpg'),
(22, '--', 'SRI NURYANI', 'Office Girl', 'Kp. Balong RT 04 RW 11 Bojonggede, Bogor', '00000', '50-IMG_20180914_082948_HHT.jpg'),
(23, '.', 'SAMANAN', 'Satpam', 'Bojonggede, Bogor', '0895706433363', '942-grabilla.em9252.png'),
(24, '..', 'MUHAMMAD IKHSAN MAULANA', 'Pustakawan', 'Bojonggede, Bogor', '0895384273757', '987-M. IKHSAN MAULANA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `tentang` text NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` text NOT NULL,
  `history` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `email`, `website`, `alamat`, `nohp`, `tentang`, `visi`, `misi`, `history`) VALUES
(1, 'sdmuhammadiyahbojonggede@gmail.com', 'www.sdmuge.sch.id', 'Perum Bojong Depok Baru Jl. Merapi II Blok GX Bojonggede, Bogor, Jawa Barat, Indonesia.', '(021) 8784222', 'SD Muhammadiyah Bojonggede berdiri tahun 1994, SD Muhammadiyah Bojonggede merupakan amal usaha Pimpinan Daerah Muhamamdiyah Jakarta Selatan (ekspansi PDM Jak-Sel).', 'Mewujudkan peserta didik yang berakhlaq mulia, berprestasi, dan berwawasan global yang dilandasi nilai-nilai budaya luhur sesuai dengan ajaran Agama Islam.', '1.Menanamkan keyakinan / akidah melalui pengamalan ajaran agama Islam. \r\n2.Melaksanakan pembelajaran dan bimbingan secara efektif sehingga potensi siswa dapat berkembang secara optimal.\r\n3.Mengembangkan pengetahuan dalam bidang teknologi, bahasa, olahraga dan seni budaya sesuai dengan bakat, minat dan potensi siswa.\r\n4.Mengembangkan budaya disiplin dan etos kerja. \r\n5.Menjalin kerjasama yang harmonis antara warga sekolah dengan lingkungan.', 'SD Muhammadiyah Bojonggede berdiri tahun 1994, SD Muhammadiyah Bojonggede merupakan amal usaha Pimpinan Daerah Muhamamdiyah Jakarta Selatan (ekspansi PDM Jak-Sel).');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_ujian`
--

CREATE TABLE `tbl_nilai_ujian` (
  `id` int(11) NOT NULL,
  `no_ujian` char(7) NOT NULL,
  `pelajaran` varchar(100) NOT NULL,
  `nilai_ujian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_nilai_ujian`
--

INSERT INTO `tbl_nilai_ujian` (`id`, `no_ujian`, `pelajaran`, `nilai_ujian`) VALUES
(8, 'UTS-001', 'Tapak Suci', 88),
(9, 'UTS-001', 'Matematika', 95),
(10, 'UTS-001', 'HW', 86),
(11, 'UTS-001', 'IPA', 94),
(12, 'UTS-001', 'Olahraga', 89),
(13, 'UTS-001', 'TIK', 85),
(14, 'UTS-001', 'Bahasa Inggris', 82),
(15, 'UTS-002', 'Tapak Suci', 75),
(16, 'UTS-002', 'Matematika', 60),
(17, 'UTS-002', 'HW', 70),
(18, 'UTS-002', 'IPA', 65),
(19, 'UTS-002', 'Olahraga', 50),
(20, 'UTS-002', 'TIK', 55),
(21, 'UTS-002', 'Bahasa Inggris', 70),
(22, 'UTS-003', 'Tapak Suci', 80),
(23, 'UTS-003', 'Matematika', 70),
(24, 'UTS-003', 'HW', 90),
(25, 'UTS-003', 'IPA', 90),
(26, 'UTS-003', 'Olahraga', 90),
(27, 'UTS-003', 'TIK', 90),
(28, 'UTS-003', 'Bahasa Inggris', 100),
(29, 'UTS-004', 'Tapak Suci', 100),
(30, 'UTS-004', 'Matematika', 89),
(31, 'UTS-004', 'HW', 87),
(32, 'UTS-004', 'IPA', 75),
(33, 'UTS-004', 'Olahraga', 92),
(34, 'UTS-004', 'TIK', 76),
(35, 'UTS-004', 'Bahasa Inggris', 88),
(36, 'UTS-005', 'Tapak Suci', 100),
(37, 'UTS-005', 'Matematika', 90),
(38, 'UTS-005', 'HW', 78),
(39, 'UTS-005', 'IPA', 89),
(40, 'UTS-005', 'Olahraga', 79),
(41, 'UTS-005', 'TIK', 100),
(42, 'UTS-005', 'Bahasa Inggris', 98),
(43, 'UTS-003', 'Tapak Suci', 100),
(44, 'UTS-003', 'Matematika', 100),
(45, 'UTS-003', 'HW', 100),
(46, 'UTS-003', 'IPA', 100),
(47, 'UTS-003', 'Olahraga', 100),
(48, 'UTS-003', 'TIK', 90),
(49, 'UTS-003', 'Bahasa Inggris', 90),
(50, 'UTS-004', 'Tapak Suci', 89),
(51, 'UTS-004', 'Matematika', 85),
(52, 'UTS-004', 'HW', 90),
(53, 'UTS-004', 'IPA', 95),
(54, 'UTS-004', 'Olahraga', 87),
(55, 'UTS-004', 'TIK', 93),
(56, 'UTS-004', 'Bahasa Inggris', 98),
(57, 'UTS-005', 'Tapak Suci', 90),
(58, 'UTS-005', 'Matematika', 87),
(59, 'UTS-005', 'HW', 96),
(60, 'UTS-005', 'IPA', 100),
(61, 'UTS-005', 'Olahraga', 90),
(62, 'UTS-005', 'TIK', 95),
(63, 'UTS-005', 'Bahasa Inggris', 86),
(64, 'UTS-006', 'Tapak Suci', 80),
(65, 'UTS-006', 'Matematika', 67),
(66, 'UTS-006', 'HW', 84),
(67, 'UTS-006', 'IPA', 70),
(68, 'UTS-006', 'Olahraga', 75),
(69, 'UTS-006', 'TIK', 81),
(70, 'UTS-006', 'Bahasa Inggris', 55),
(71, 'UTS-007', 'Tapak Suci', 90),
(72, 'UTS-007', 'Matematika', 89),
(73, 'UTS-007', 'HW', 87),
(74, 'UTS-007', 'IPA', 100),
(75, 'UTS-007', 'Olahraga', 89),
(76, 'UTS-007', 'TIK', 92),
(77, 'UTS-007', 'Bahasa Inggris', 90),
(78, 'UTS-008', 'Tapak Suci', 98),
(79, 'UTS-008', 'Matematika', 85),
(80, 'UTS-008', 'HW', 81),
(81, 'UTS-008', 'IPA', 90),
(82, 'UTS-008', 'Olahraga', 84),
(83, 'UTS-008', 'TIK', 87),
(84, 'UTS-008', 'Bahasa Inggris', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelajaran`
--

CREATE TABLE `tbl_pelajaran` (
  `id` int(11) NOT NULL,
  `pelajaran` varchar(50) NOT NULL,
  `guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pelajaran`
--

INSERT INTO `tbl_pelajaran` (`id`, `pelajaran`, `guru`) VALUES
(5, 'Tapak Suci', 'Salman'),
(11, 'Matematika', 'Salman'),
(17, 'HW', 'Anto S.Pd'),
(18, 'IPA', 'Abdul S.Pd M.Pd'),
(19, 'Olahraga', 'Anto S.Pd'),
(20, 'TIK', 'Abdul S.Pd M.Pd'),
(21, 'Bahasa Inggris', 'Abdul S.Pd M.Pd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id_pendaftaran` char(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `th_ajaran` varchar(9) NOT NULL,
  `nama_peserta` varchar(128) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `th_ajaran`, `nama_peserta`, `tmp_lahir`, `tgl_lahir`, `jk`, `alamat`) VALUES
('P202300001', '2023-06-13', '2023/2024', 'Hanun Hafidza Horman', 'Bogor', '2001-10-22', 'Perempuan', 'BDB 1 Blok G/11'),
('P202300002', '2023-06-13', '2023/2024', 'Farid Musthafa', 'Depok', '2014-04-21', 'Laki-laki', 'Bojonggede Indah G/11'),
('P202300005', '0000-00-00', '2023/2024', 'Halim Perdana', 'Bojonggede, Bogor', '2016-06-14', 'Laki-laki', 'Jl. Belimbing V No.45D Bojonggede, Bogor, Jawa Barat, Indonesia. 16921'),
('P202300007', '2023-06-14', '2023/2024', 'Zayn Jamaluddin', 'Bogor', '2018-03-13', 'Laki-laki', 'Bojonggede Indah GS No.10 RT09/19 Bojonggede, Bogor 16322'),
('P202300008', '2023-07-05', '2023/2024', 'Faisal Abdullah', 'Bogor', '2016-02-05', 'Laki-laki', 'Perum Gaperi 2 Blok A1 No.16 Bojonggede Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prestasi`
--

CREATE TABLE `tbl_prestasi` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_prestasi`
--

INSERT INTO `tbl_prestasi` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(3, 'prestasi1688220859.jpeg', 'Penulis Cilik', '2023-07-01 14:14:19', NULL),
(4, 'prestasi1688220908.jpeg', 'Gerakan Sekolah Menulis Buku Nasional 2022', '2023-07-01 14:15:08', NULL),
(5, 'prestasi1688220962.jpeg', 'JUARA 1 Kejuaraan Karate Tingkat Nasional 2022', '2023-07-01 14:16:02', '2023-07-01 16:32:34'),
(6, 'prestasi1688221068.jpeg', 'MEDALI EMAS Kejuaraan SENKAIDO Di Taman Mini Indonesia Indah', '2023-07-01 14:17:48', '2023-07-01 16:33:10'),
(7, 'prestasi1688221104.jpeg', 'TERBAIK 1 Kegiatan Inline Skate Club Bogor', '2023-07-01 14:18:24', '2023-07-01 16:35:02'),
(8, 'prestasi1688221175.jpeg', 'JUARA 1 Liga Sepak Bola Anak Tingkat Nasional\r\nLiga ET 2022 KU-10/2012', '2023-07-01 14:19:35', '2023-07-01 16:35:22'),
(9, 'prestasi1688221435.jpeg', 'MEDALI EMAS KEMENPORA RI CUP 2023\r\nIndonesia Taekwondo Challenge', '2023-07-01 14:23:55', '2023-07-01 16:35:38'),
(10, 'prestasi1688221519.jpeg', 'Outstanding Program Planning On Reduce Circular Award & Outstanding Dedicated Principal On Circular School Initlatives', '2023-07-01 14:25:19', NULL),
(11, 'prestasi1688221573.jpeg', 'JUARA 1 Pertandingan 3x3 SD Putri Festival Bola Basket Bojonggede', '2023-07-01 14:26:13', NULL),
(12, 'prestasi1688221623.jpeg', 'Student Exchange SD Muhammadiyah Bojonggede', '2023-07-01 14:27:03', NULL),
(13, 'prestasi1688221667.jpeg', 'MEDALI PERUNGGU Kejuaraan Wushu Antar Sekolah Se-Kota Bogor', '2023-07-01 14:27:47', NULL),
(14, 'prestasi1688221699.jpeg', 'MEDALI EMAS Kejuaraan Karate', '2023-07-01 14:28:19', NULL),
(15, 'prestasi1688221743.jpeg', 'International Kangaroo Mathematics Contest SD Muhammadiyah Bojonggede', '2023-07-01 14:29:03', NULL),
(16, 'prestasi1688221815.jpeg', 'Lomba Hizbul Wathan Kabupaten Bogor Dalam Rangka Milad Ke-103 Hizbul Wathan', '2023-07-01 14:30:15', NULL),
(17, 'prestasi1688221878.jpeg', 'JUARA 1 Turnamen Bola Voli Kategori KU 2009 KAHUB KOSTRAD & KAHUB KOPPASSUS CUP 2021', '2023-07-01 14:31:18', NULL),
(18, 'prestasi1688221916.jpeg', 'Kejuaraan Bola Voli PBV PUR CUP', '2023-07-01 14:31:56', '2023-07-01 16:32:43'),
(19, 'prestasi1688226313.jpeg', 'JUARA 1 Exhibition VOBGARD Piala H. Alif Machmud', '2023-07-01 15:45:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `akreditasi` char(1) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tagline` varchar(256) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id`, `nama`, `alamat`, `akreditasi`, `status`, `email`, `tagline`, `gambar`) VALUES
(1, 'SD Muhammadiyah Bojonggede', 'Jl. Merapi II Blok GX Perum Bojong Depok Baru I Bojonggede - Bogor', 'A', 'Swasta', 'sdmuhammadiyahbojonggede@gmail.com', 'Cerdas, Kreatif, Berprestasi, dan Religius.', '13-bgLogin.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `alamat`, `kelas`, `foto`) VALUES
('2022200001', 'ABDULLAH AZZAM', 'Bojonggede, Bogor', 'I A', 'person.png'),
('2022200002', 'ABHIRAMA TRISTAN PUTRA GUMAY', 'Bojonggede, Bogor', 'I A', 'person.png'),
('2022200003', 'ADHYASTHA HARYANTO ', 'Bojonggede, Bogor', 'I A', 'person.png'),
('2022200004', 'ADIBA NAZMA ANINDITA', 'Bojonggede, Bogor', 'I A', 'person.png'),
('2022200005', 'ARSHIYA PUTRI ZUBAIR', 'Bojonggede, Bogor', 'I A', 'person.png'),
('2022200006', 'CHAYRA AQEELA FIRDAUS', 'Bojonggede, Bogor', 'I A', 'person.png'),
('2022200007', 'FATHIYA AULIA NISA', 'Bojonggede, Bogor', 'I A', 'person.png'),
('2022200008', 'FELIZ JETA', 'Bojonggede, Bogor', 'I A', 'person.png'),
('2022200009', 'HANIFAH CHOTIMATU ZAHRA', 'Bojonggede, Bogor', 'I A', 'person.png'),
('2022200010', 'HUGENG HIRATA NURLETTE', 'Bojonggede, Bogor', 'I A', 'person.png'),
('2022200011', 'MIQDAD HANIF ABDULHAKIM', 'Bojonggede, Bogor', '1A', 'person.png'),
('2022200012', 'MIRZA DANISH TUHEPALY', 'Bojonggede, Bogor', '1A', 'person.png'),
('2022200013', 'MOZA ARTHARAHAGI', 'Bojonggede, Bogor', '1A', 'person.png'),
('2022200014', 'NASYITA SHAFWATUNISA QISTHI', 'Bojonggede, Bogor', '1A', 'person.png'),
('2022200015', 'NAUFA ZAHRA RAFIFAH', 'Bojonggede, Bogor', '1A', 'person.png'),
('2022200016', 'OKTAFIANDRE PUTRA PRADANA', 'Bojonggede, Bogor', '1A', 'person.png'),
('2022200017', 'QUEENAYAH SYAFIYAH MARYAM', 'Bojonggede, Bogor', '1A', 'person.png'),
('2022200018', 'SAFIYA PUTRI SALSABILA', 'Bojonggede, Bogor', '1A', 'person.png'),
('2022200019', 'SATOSHI RYOJI ABHIPRAYA', 'Bojonggede, Bogor', '1A', 'person.png'),
('2022200020', 'SYAKIRA AULIA NISSA', 'Bojonggede, Bogor', '1A', 'person.png'),
('2022200021', 'SYAQILLA WAHYU ALFATHUNNISA', 'Bojonggede, Bogor', '1A', 'person.png'),
('2022200022', 'WILDAN RAZIQ HANNAN', 'Bojonggede, Bogor', '1A', 'person.png'),
('2022200023', 'AL SAMII HAQQSYAH', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200024', 'ALIFA SHAKILA RABBANI', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200025', 'ALMUALLIM IBNU HASAN', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200026', 'ARIO SETO KUSUMA', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200027', 'ASILAH HAVIKA PUTRIE', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200028', 'AZZELLA KANAIA KAYLASAKHI', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200029', 'CALLISTA ASSYAMI ZAHRA', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200030', 'DZAKY ALKHALIFI', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200031', 'HAISHA HANUM ALQUWAIS', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200032', 'HAISHA SHEBEE PERMADI', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200033', 'JASMINE ALAYOLA ZAHRA', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200034', 'LUQMAN HAKIM MUTTAQIN', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200035', 'MUHAMMAD ABDUH FATIH HIDAYAT', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200036', 'MUHAMMAD DWI HARYANTO', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200037', 'QAIREEN ADIVA DZIKRIA', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200038', 'RAFANDA TSABITHA HABIBI', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200039', 'RATIFA AZALEA FATHIYYATURRAHMAH', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200040', 'RAYYANDRA FAIZAN RAMADHAN', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200041', 'RENADY ATTAR RUZAIN RAMADHAN ', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200042', 'SAYYIDAH NAJMATUS SURUUR', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200043', 'SHABRIA SERUNI NURZAHRA', 'Bojonggede, Bogor', '1B', 'person.png'),
('2022200044', 'AMANDA YURI RAHMANI', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200045', 'ANINDIA KHUMAIRA', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200046', 'ARKANA ALWY MUHAMMAD', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200047', 'AYDAN AHMAD ZAYYAN', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200048', 'AYSHA FLORETTA AZZALEA', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200049', 'AZKADINA KIREI SAHIRA PASI', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200050', 'DEVANANTA ADHYASTA JAVAS', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200051', 'FATIYA YUMNA FAKHRUNNISA', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200052', 'HANUM ALESHA QANITA', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200053', 'KASYIDA DAMITSA PRIANTO', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200054', 'LATHIFA NAUFALYN FIQRIA PRAHARTANTO', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200055', 'MIKHAIL ALEANDRA FIRMAN', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200056', 'MUHAMMAD KEENAN AL FATIH', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200057', 'MUHAMMAD MAULANA ABDUL MAJIID SYAHLAN', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200058', 'NAEEMA KHAIRIYYA HAZIQAH', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200059', 'NAJWA KHAIRA WILDA', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200060', 'NAUFAL AZHAR RAMADHAN', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200061', 'RAIHAN ZAHY FIRDAUS', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200062', 'THALITA VALERIE', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200063', 'YAHYA ABDUSSALAM', 'Bojonggede, Bogor', '1C', 'person.png'),
('2022200064', 'AKHTAR FATHARN SIBI', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200065', 'ALEENA SHAFA ZAFEERA', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200066', 'ANNASYA NISWARA AYARA', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200067', 'ANNISA ZAHRA RAMADHAN', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200068', 'DARREL AUFA RIYOGO', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200069', 'DZIDNI ILMANI RIZQIYYA', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200070', 'FAIQA SHIDQIA KARIM LUBIS', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200071', 'FARISAH ALIKA ZANY', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200072', 'GAZHIVA KHAFIDZA MAULANA', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200073', 'GILBY FIRAZ ARSENIO', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200074', 'JASMINE DEYAN DESTIYANA', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200075', 'JIHAN TALITA ULFA', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200076', 'KANIA ANINDITA HADI', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200077', 'KHAULAH DWI NUSAIBAH', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200078', 'MALIKA KHAIRUNNISA SHOFWAN', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200079', 'MIKAILA AL ULA HANIFA', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200080', 'MUHAMMAD NAJMI FATIH IBRAHIM', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200081', 'MUHAMMAD REYHAN ALFARIZIQ TUMANGGOR', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200082', 'NAFISA SORAYA HAKIM', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200083', 'NAOMI ALESHA JASMINE', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200084', 'RAFFA AHMAD', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200085', 'RAFIF ADISI ZAIDAN', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200086', 'SALWA KEYNISANDRA', 'Bojonggede, Bogor', '2A', 'person.png'),
('2022200087', 'ADAM FAIZ AL-ARKHAN', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200088', 'AYLA ARAFAHTUNNISA', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200089', 'AZKADINA KAIRA LATIF', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200090', 'CLARA NURFADILAH', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200091', 'DEAN FACHRI PRAMATYA', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200092', 'EARLYTA ARSYFA SALSABILA', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200093', 'FAYYOLA GHANIYYAH NADHIFA', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200094', 'HABIBI DANISHWARA AL GHAZI', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200095', 'HAFIDZAH NADIRA ZIVARA', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200096', 'HAIKAL RAMADHAN WIBOWO', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200097', 'LABIKA RAISYA KINAYA', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200098', 'MALIKA AZZAHRA MULYATNO', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200099', 'MOCHAMAD DAFFA PUTRA KARIM', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200100', 'MUHAMAD TSAQIF NUGRAHA', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200101', 'MUHAMMAD HANY AR RIFAI', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200102', 'MUHAMMAD ZIDAN MIKAIL BUDIHARTA', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200103', 'MUHAMMAD ZIDANE ALGIFARI', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200104', 'NAUFAL ATHALLAH RADITYA SAPUTRA', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200105', 'QUEENZA NAMIA RISKI', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200106', 'RANIA SAFA QANITA', 'Bojonggede, bogor', '2B', 'person.png'),
('2022200107', 'RAYYA SAMHAH NAZIHAH', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200108', 'SYAHNALA PUTRI SIBYLLIA', 'Bojonggede, Bogor', '2B', 'person.png'),
('2022200109', 'ADIBA INAYA FIRDAUS', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200110', 'AHMAD HARIS AFRIZA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200111', 'ALANNA VIVIANNE AIKO', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200112', 'ALIF ZIDAN ABRAHAM', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200113', 'ANGGA PAMELA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200114', 'AQEELA AMIRA ZAHRA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200115', 'ARFA MIRZA RAJENDRA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200116', 'DEFFA REIYAN AINNURAHMAN', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200117', 'DIARRA MEDINA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200118', 'ERINA JETA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200119', 'FAKHRUMI KHOIROTUNHISAN', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200120', 'FARISHA AZRA AFIQAH', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200121', 'FATIH ABIY TSAQIB', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200122', 'GHAILAN ANDRIO WICAKSONO', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200123', 'HAMDI AL KHALIFI YAHYA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200124', 'HANINDA AULIA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200125', 'KHALIS RASENDRIYA DANISWARA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200126', 'KUMARA REZKY KHAIR', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200127', 'MAULANA ABDUL JABBAR', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200128', 'MUHAMMAD ABIDZAR SHIDDIQ', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200129', 'MUHAMMAD ARSA NUGRAHA PUTRA PRATAMA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200130', 'MUHAMMAD HAFUZA AYYUSH', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200131', 'MUHAMMAD ZAIDAN APRIYADI', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200132', 'NAFISSA TSABITAH CAHYADI', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200133', 'QUEENA HAURA ASANKA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200134', 'RAFEYLA ZHARUFA AFWA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200135', 'RASYDAN OKTAVIAN ARTANTO', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200136', 'RAZQA DEANDRA APRIANTO', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200137', 'RESTU ALCANTARA SANTANA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200138', 'SYAHRAZAD FAATHIMAH MALIKAL FATHAN', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200139', 'YOVIE ARKA SAPUTRA', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200140', 'ZHAFRAN SYAHBAN PRABOWO', 'Bojonggede, Bogor', '3A', 'person.png'),
('2022200141', 'ABBAD HAMMAM RAMADHAN', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200142', 'ABDUL RAHMAN ASSEGAF', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200143', 'AISYAH KAYLA PUTRI GUMAY', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200144', 'ALARIC JAGAD AZZAHIDI', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200145', 'ALFATHIR ZAVIER ALAMSYAH', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200146', 'AMRIH FAWWAZ HONESTO', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200147', 'ANISA WULANDARI', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200148', 'ASKANA AL-LATIEF', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200149', 'AZZALEA KANZA KALILASAKHI', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200150', 'FARID MUSTHAFA HORMAN', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200151', 'GILANG NAUVAL HADIWIJOYO', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200152', 'HAFIZ MAHARDIKA', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200153', 'JIHAN CANTIKA UMAR', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200154', 'JIHAN NADHIFA DINATA', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200155', 'KAYLA ALMIRA HADI', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200156', 'MALIKA ASKANA KUSWANDITA', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200157', 'MUHAMMAD BILAL BASILA', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200158', 'MUHAMMAD GIBSON AL DZHABAR', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200159', 'MUHAMMAD SHIDIQ', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200160', 'MUHAMMAD SYABIL BASILA', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200161', 'NADHIRA AISYA NURJANNAH', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200162', 'PUTRA AFDHAL RIZKI', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200163', 'RADEN SHAVIRA AZZAHRA', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200164', 'RAFA ABRISSAM TSAQIF', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200165', 'RAFIF ATHARIZZ CALIEF', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200166', 'RAFIKA AILANI MARITZA', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200167', 'RAHMAT GHIBRAN HADI RAMADHAN', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200168', 'RAIHAN NAZID KAMIL', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200169', 'RAYSHA SHAFWA PUTRI KURNIAWAN', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200170', 'TENGKU AGATHA SYAHIRA RAZIQIN', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200171', 'ZEVAN DYANDRA CHOIRUL', 'Bojonggede, Bogor', '3B', 'person.png'),
('2022200172', 'AISYAH AL LATIEF', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200173', 'AISYAH ALYA RIZKY', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200174', 'AISYAH RIZKIYAH KHADIJAH', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200175', 'AQILLAH SHAREEN KUSTIAWAN', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200176', 'AUFAR GHATAR SIBI', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200177', 'AZDZIKRY KAHFI AL JABBAR', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200178', 'HABIBIE HAIDAR SYAFI ANANTA', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200179', 'HAFIDZAH AQILA KHAYYIRA', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200180', 'HASAN ABDUL SALAAM', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200181', 'IBRAHIM ABDUL RAKIN FARROS', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200182', 'JULYA RAMADHANI KURNIAWAN', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200183', 'KANIA ALFADHIANY', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200184', 'KAYLA JIHAN AMIRA SURAWASITA', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200185', 'KAYLA ZAHRA IRAWAN', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200186', 'KENZIE PIJAR MATAHARI', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200187', 'KHANZA AYUMI TAQIYYA', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200188', 'KINANDYA AIRAZZAHRA', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200189', 'KIREINA ZAHRA AZDA PUTRI', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200190', 'MIKHAIL SHIRA AYDIN PUTRA', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200191', 'MUHAMMAD ATHA RAJENDRA', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200192', 'MUHAMMAD ZAKI AL FATHIH', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200193', 'RAISYA PRAMESWARI ALUFI', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200194', 'RASYIQUL ALAMGIR NABHAN', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200195', 'RIF&#039;AT ABDIRAHMAN', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200196', 'SALMAN', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200197', 'SATRIA RIYU PRAWIRA', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200198', 'TAVISHYA ATHIDIRA AGRATA', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200199', 'ZAHRAN GIFFARI', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200200', 'ZARA ZAHFIRA', 'Bojonggede, Bogor', '4A', 'person.png'),
('2022200201', 'AIRA ADNI', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200202', 'AKMAL MUHAMMAD RAFIF', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200203', 'AL GIBRAN FALIH ABRAR', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200204', 'ALVITO EMERALDY YUSUF', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200205', 'ALYSKA PUTRI ANNAJMI', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200206', 'ANNA CALISTA AURORA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200207', 'ARKHAN ZAKI ABDULLAH', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200208', 'BRYAN RAFIF AL KAHFI', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200209', 'DELISHA AMIRA ADWIN', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200210', 'FAIQA SAYYIDAH', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200211', 'FILZA AQILA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200212', 'GARLAND PRADANA RIYOGO', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200213', 'HARDHIKA NOMI BAGASKARA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200214', 'KHANZA SYAFIRA LIVINA SUHERMAN', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200215', 'MALAEKA KHANZA KINANTI', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200216', 'MOH AUFAR ADZAM', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200217', 'MOHD SULTHAN PARSA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200218', 'MUHAMAD ZEMA AL ISYA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200219', 'MUHAMMAD ARDIS RAHARJA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200220', 'MUHAMMAD RAFLI ALIFIANDRA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200221', 'MUHAMMAD RANGGA ALNENDRA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200222', 'MUHAMMAD RASYA DANENDRA PUTRA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200223', 'MUHAMMAD WAFI YAQZHAN', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200224', 'NAGATA SABIAN ABHINAYA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200225', 'QANIA NOOR SALSABILA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200226', 'QUEENCY ZAHWA ALTRUISTY', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200227', 'RAISA PUTRI ANDITA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200228', 'SHEZA SYAKIRA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200229', 'SITI QAILA NUR MEIDINA', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200230', 'TEGAR AL AZIZ', 'Bojonggede, Bogor', '4B', 'person.png'),
('2022200231', 'AIRA MILANI HADZKIYA', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200232', 'AREGRHA RHAMADANI PHERYGIANT', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200233', 'AZKA QANITAH FITROTUNNISA', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200234', 'CLARA AZALIA AFLAH', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200235', 'FATIHUL FARHAN', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200236', 'GIBRAN ARKANA SAPUTRA', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200237', 'GIOVANNI PUTRA NOFITA', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200238', 'JASMINE CALLISTA PUTRI', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200239', 'JAZHIRA FINDA KIRANA', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200240', 'KANAYA NAYLA HADI', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200241', 'KEAN ZAHIR REVARO', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200242', 'MUHAMMAD AYYASI ARKAN', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200243', 'MUHAMMAD FARHAT HAFY', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200244', 'MUHAMMAD RAFFA ZIKRI', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200245', 'NASHYWA NUR ROMADHON', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200246', 'NATASYA NIDA SYAH PUTRI', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200247', 'NAYLA PUTRI AZZAHRA', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200248', 'QONITA AZKIYA QURROTA &#039;AINI', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200249', 'RAZAN AYDIN ATHALLAH', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200250', 'SATYA WIRA DIRGANTARA', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200251', 'SYAURAH FAZILA ALFITRIANI', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200252', 'TENGKU KEANO BAYANAKA RAZIQIN', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200253', 'ZAHRA QADISA HUMAIRA', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200254', 'ZAIN KHELVIN ALVARO', 'Bojonggede, Bogor', '5A', 'person.png'),
('2022200255', 'ABDUL KHAIR ASSEGAF', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200256', 'AGISNA DES NATASYA', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200257', 'ANNERA PRATAMA GUMAY', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200258', 'AQEEL DAIYAN ALFAIZI', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200259', 'AQILAH QONITA DANAH', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200260', 'ATTHAYA DZUHNIY DZULHIJAH', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200261', 'BHIMO ARDYARAHAGI SIREGAR', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200262', 'DELISA PUTRI HUMAIRA', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200263', 'JASMINE AZZAHRA', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200264', 'KHAIRUNNISA SHIZA ANINDITA', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200265', 'KHALIFA AZKIA RISKI', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200266', 'KHANSA WAFA TAHIRA', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200267', 'LATIFA TRI FIRZANAH', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200268', 'MOHAMMAD GAISHAN FERDIAS', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200269', 'MUHAMMAD ERVAN', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200270', 'MUHAMMAD FEBRIYAN RADITYA SIDIQ', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200271', 'MUHAMMAD IHSAN BASIR', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200272', 'MUHAMMAD RIZKIYANSYAH H ', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200273', 'MUHAMMAD TSAQIEF ALFASHA', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200274', 'NU&#039;MA FATYA MASHLAHAH', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200275', 'SAKA SUTAN ALFARO', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200276', 'SITI KAYLA RAMIIZA', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200277', 'TRIAN RAHMANI PUTRA FIRDANI', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200278', 'ZAKARI KEANE', 'Bojonggede, Bogor', '5B', 'person.png'),
('2022200279', 'AFFAN AL AZIS', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200280', 'ARTETA KAISAR RAHMAN', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200281', 'ARYA BIMA RAMADHAN', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200282', 'AZZAHRA CAMELIA ABDI', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200283', 'CATUR BAGASKORO ADIWAHYONO', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200284', 'DION ARIF IRAWAN', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200285', 'FRIDA DIANA ADHA', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200286', 'HABIBURAHMAN FAKIH', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200287', 'HANINA SHAFWATUNNISA', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200288', 'HASYA REVITRA AYARA', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200289', 'ISTIYANA NINGRUM SARI', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200290', 'LABIBAH RAFA TABINA', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200291', 'LUTHFI ZEIN MUSTHOFA', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200292', 'MUHAMMAD FARHAN AYYAASI', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200293', 'MUHAMMAD SYAFIQ ROBIANTORO', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200294', 'MUSA', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200295', 'NAJLA MUTHIA NAFI&#039;AH', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200296', 'NARARYA AMRU HISYAM', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200297', 'PUTRA RADITYA ALFAHRIZI', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200298', 'RAFAN ARDHA ISLAHULHAQ', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200299', 'RAHIA ALIYEVA ARIFIANTI', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200300', 'RAIHAN AL BUKHORI', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200301', 'RAZITA IRDINA', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200302', 'RAZKHA RAYZAZAHRAN PUTERA', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200303', 'REVANSYAH PRADANA', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200304', 'RHAYA TARISHA KHUMAIRA', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200305', 'SASQIA AULIA RAHMADANI', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200306', 'SHAHIA FATMA NURHANISAH', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200307', 'SYAKILA NAHDA DHANIA', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200308', 'SYIFA NUR ALAWIYAH', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200309', 'ZEIDA ZAAD ZUKHRUFUL ASHFIYAA', 'Bojonggede, Bogor', '6', 'person.png'),
('2022200310', 'ZIDANE FATIH QOSIM', 'Bojonggede, Bogor', '6', 'person.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ujian`
--

CREATE TABLE `tbl_ujian` (
  `no_ujian` char(7) NOT NULL,
  `tgl_ujian` date NOT NULL,
  `nis` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  `nilai_terendah` int(11) NOT NULL,
  `nilai_tertinggi` int(11) NOT NULL,
  `nilai_rata2` int(11) NOT NULL,
  `hasil_ujian` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ujian`
--

INSERT INTO `tbl_ujian` (`no_ujian`, `tgl_ujian`, `nis`, `nama`, `total_nilai`, `nilai_terendah`, `nilai_tertinggi`, `nilai_rata2`, `hasil_ujian`) VALUES
('UTS-006', '2023-06-07', '2022200003', 'ADHYASTHA HARYANTO ', 512, 55, 84, 73, 'GAGAL'),
('UTS-007', '2023-06-08', '2022200004', 'ADIBA NAZMA ANINDITA', 637, 87, 100, 91, 'LULUS'),
('UTS-008', '2023-06-07', '2022200001', 'ABDULLAH AZZAM', 625, 81, 100, 89, 'LULUS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `nama`, `alamat`, `jabatan`, `foto`) VALUES
(1, 'admin', '$2y$10$/eVX/p9usBNK63oDaETNwe7tV8GyH5AWUpfmk2vmdhMUuPYY/xibS', 'admin SD', 'Bojonggede', 'Staf TU', '839-avatar-01.jpg'),
(4, 'hanun1', '$2y$10$PXbejliACA1f1I4NqbFn.eN4dWQsFCTQHHFOfjl3pYNHMifWwnACW', 'test', 'bojonggede', 'Staf TU', 'person.png'),
(5, 'adminmuge', '$2y$10$3sDvTR9avo7hPmSOaSHKzuDpnvJWS4OVLJ2gVZkX8XvUKbzBRZF5O', 'Admin Muge', 'Bojonggede', 'Guru', 'person.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nilai_ujian`
--
ALTER TABLE `tbl_nilai_ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_ujian`
--
ALTER TABLE `tbl_ujian`
  ADD PRIMARY KEY (`no_ujian`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_nilai_ujian`
--
ALTER TABLE `tbl_nilai_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
