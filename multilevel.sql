-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 08:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multilevel`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `permission`) VALUES
(1, 'Super Administrator', 'a:50:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:14:\"createFakultas\";i:9;s:14:\"updateFakultas\";i:10;s:12:\"viewFakultas\";i:11;s:14:\"deleteFakultas\";i:12;s:13:\"createJurusan\";i:13;s:13:\"updateJurusan\";i:14;s:11:\"viewJurusan\";i:15;s:13:\"deleteJurusan\";i:16;s:11:\"createKelas\";i:17;s:11:\"updateKelas\";i:18;s:9:\"viewKelas\";i:19;s:11:\"deleteKelas\";i:20;s:15:\"createMahasiswa\";i:21;s:15:\"updateMahasiswa\";i:22;s:13:\"viewMahasiswa\";i:23;s:15:\"deleteMahasiswa\";i:24;s:16:\"createPerceraian\";i:25;s:16:\"updatePerceraian\";i:26;s:14:\"viewPerceraian\";i:27;s:16:\"deletePerceraian\";i:28;s:15:\"createKelahiran\";i:29;s:15:\"updateKelahiran\";i:30;s:13:\"viewKelahiran\";i:31;s:15:\"deleteKelahiran\";i:32;s:13:\"createPensiun\";i:33;s:13:\"updatePensiun\";i:34;s:11:\"viewPensiun\";i:35;s:13:\"deletePensiun\";i:36;s:21:\"createPerceraianislam\";i:37;s:21:\"updatePerceraianislam\";i:38;s:19:\"viewPerceraianislam\";i:39;s:21:\"deletePerceraianislam\";i:40;s:11:\"createNikah\";i:41;s:11:\"updateNikah\";i:42;s:9:\"viewNikah\";i:43;s:11:\"deleteNikah\";i:44;s:14:\"createKematian\";i:45;s:14:\"updateKematian\";i:46;s:12:\"viewKematian\";i:47;s:14:\"deleteKematian\";i:48;s:11:\"viewProfile\";i:49;s:13:\"updateSetting\";}'),
(6, 'admin', 'a:46:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:14:\"createFakultas\";i:9;s:14:\"updateFakultas\";i:10;s:12:\"viewFakultas\";i:11;s:14:\"deleteFakultas\";i:12;s:13:\"createJurusan\";i:13;s:13:\"updateJurusan\";i:14;s:11:\"viewJurusan\";i:15;s:13:\"deleteJurusan\";i:16;s:11:\"createKelas\";i:17;s:11:\"updateKelas\";i:18;s:9:\"viewKelas\";i:19;s:11:\"deleteKelas\";i:20;s:15:\"createMahasiswa\";i:21;s:15:\"updateMahasiswa\";i:22;s:13:\"viewMahasiswa\";i:23;s:15:\"deleteMahasiswa\";i:24;s:16:\"createPerceraian\";i:25;s:16:\"updatePerceraian\";i:26;s:14:\"viewPerceraian\";i:27;s:16:\"deletePerceraian\";i:28;s:15:\"createKelahiran\";i:29;s:15:\"updateKelahiran\";i:30;s:13:\"viewKelahiran\";i:31;s:15:\"deleteKelahiran\";i:32;s:13:\"createPensiun\";i:33;s:13:\"updatePensiun\";i:34;s:11:\"viewPensiun\";i:35;s:13:\"deletePensiun\";i:36;s:21:\"createPerceraianislam\";i:37;s:21:\"updatePerceraianislam\";i:38;s:19:\"viewPerceraianislam\";i:39;s:21:\"deletePerceraianislam\";i:40;s:11:\"createNikah\";i:41;s:11:\"updateNikah\";i:42;s:9:\"viewNikah\";i:43;s:11:\"deleteNikah\";i:44;s:11:\"viewProfile\";i:45;s:13:\"updateSetting\";}'),
(8, 'User', 'a:16:{i:0;s:15:\"createKelahiran\";i:1;s:15:\"updateKelahiran\";i:2;s:13:\"viewKelahiran\";i:3;s:15:\"deleteKelahiran\";i:4;s:14:\"createKematian\";i:5;s:14:\"updateKematian\";i:6;s:12:\"viewKematian\";i:7;s:14:\"deleteKematian\";i:8;s:11:\"createNikah\";i:9;s:11:\"updateNikah\";i:10;s:9:\"viewNikah\";i:11;s:11:\"deleteNikah\";i:12;s:13:\"createPensiun\";i:13;s:13:\"updatePensiun\";i:14;s:11:\"viewPensiun\";i:15;s:13:\"deletePensiun\";}');

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id` int(20) NOT NULL,
  `nikPelapor` varchar(16) NOT NULL,
  `namaPelapor` varchar(100) NOT NULL,
  `alamatPelapor` varchar(255) NOT NULL,
  `namaFaskes` varchar(100) NOT NULL,
  `noPelapor` int(12) NOT NULL,
  `emailPelapor` varchar(20) NOT NULL,
  `nikIbu` varchar(16) NOT NULL,
  `namaIbu` varchar(100) NOT NULL,
  `nikAyah` varchar(16) NOT NULL,
  `namaAyah` varchar(100) NOT NULL,
  `nikSaksiSatu` varchar(16) NOT NULL,
  `namaSaksiSatu` varchar(100) NOT NULL,
  `nikSaksiDua` varchar(16) NOT NULL,
  `namaSaksiDua` varchar(100) NOT NULL,
  `noKK` int(16) NOT NULL,
  `namaKepalaKeluarga` varchar(100) NOT NULL,
  `namaBayi` varchar(100) NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL,
  `tempatDilahirkan` varchar(255) NOT NULL,
  `tempatKelahiran` varchar(100) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jam` varchar(5) NOT NULL,
  `jenisKelahiran` varchar(20) NOT NULL,
  `kelahiranKe` int(10) NOT NULL,
  `penolongKelahiran` varchar(20) NOT NULL,
  `beratBayi` int(10) NOT NULL,
  `panjangBayi` int(10) NOT NULL,
  `formPelapor` text NOT NULL,
  `suratKelahiran` text NOT NULL,
  `kutipanAkta` text NOT NULL,
  `KKortu` text NOT NULL,
  `KTPortu` text NOT NULL,
  `KTPpelapor` text NOT NULL,
  `KTPsaksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`id`, `nikPelapor`, `namaPelapor`, `alamatPelapor`, `namaFaskes`, `noPelapor`, `emailPelapor`, `nikIbu`, `namaIbu`, `nikAyah`, `namaAyah`, `nikSaksiSatu`, `namaSaksiSatu`, `nikSaksiDua`, `namaSaksiDua`, `noKK`, `namaKepalaKeluarga`, `namaBayi`, `jenisKelamin`, `tempatDilahirkan`, `tempatKelahiran`, `tanggalLahir`, `jam`, `jenisKelahiran`, `kelahiranKe`, `penolongKelahiran`, `beratBayi`, `panjangBayi`, `formPelapor`, `suratKelahiran`, `kutipanAkta`, `KKortu`, `KTPortu`, `KTPpelapor`, `KTPsaksi`) VALUES
(128, '1234567890098765', 'yoga', 'bekonang', 'bpjs', 2147483647, 'admin@gmail.com', '1234567890098761', 'murni', '1234567890098767', 'dodo', '1234567890098768', 'agus', '1234567890098125', 'broto', 2147483647, 'dodo', 'riski', 'laki-laki', 'RUMAH SAKIT', 'solo', '2023-03-29', '16.00', 'TUNGGAL', 1, 'DOKTER', 2, 15, 'assets/images/kelahiran/643ebcf347a78.png', 'assets/images/kelahiran/643ebcf347a78.png', 'assets/images/kelahiran/643ebcf347a78.png', 'assets/images/kelahiran/643ebcf347a78.png', 'assets/images/kelahiran/643ebcf347a78.png', '', 'assets/images/kelahiran/643ebcf347a78.png'),
(129, '1234567899087654', 'riski', 'solo', 'bpjs', 21, 'admin@gmail.com', '1234567899087652', 'murni', '1234567899087657', 'dodo', '1234567899087608', 'agus', '1234567899087647', 'broto', 2147483647, 'dodo', 'yoga', 'laki-laki', 'RUMAH SAKIT', 'solo', '2023-03-26', '4', 'TUNGGAL', 2, 'DOKTER', 5, 20, 'assets/images/kelahiran/643ecc599c3b8.png', 'assets/images/kelahiran/643ecc599c3b8.png', 'assets/images/kelahiran/643ecc599c3b8.png', 'assets/images/kelahiran/643ecc599c3b8.png', 'assets/images/kelahiran/643ecc599c3b8.png', '', 'assets/images/kelahiran/643ecc599c3b8.png'),
(130, '1234567890987654', 'fandi', 'boyolali', 'bpjs', 23, 'admin@gmail.com', '1234567890987653', 'mulyani', '1234567890987613', 'mulyadi', '1234567890987643', 'riski', '1234567890987629', 'rayhan', 2147483647, 'mulyadi', 'yoga', 'laki-laki', 'RUMAH SAKIT', 'solo', '2023-03-29', '4', 'TUNGGAL', 2, 'DOKTER', 4, 20, 'assets/images/kelahiran/643eda561937a.jpg', 'assets/images/kelahiran/643eda561937a.jpg', 'assets/images/kelahiran/643eda561937a.jpg', 'assets/images/kelahiran/643eda561937a.jpg', 'assets/images/kelahiran/643eda561937a.jpg', '', 'assets/images/kelahiran/643eda561937a.jpg'),
(131, '1', '2', '3', '4', 5, '6@gmail.com', '7', '8', '9', '10', '11', '12', '13', '14', 15, '17', '17', 'laki-laki', 'RUMAH SAKIT', '18', '2000-01-01', '18', 'TUNGGAL', 20, 'DUKUN', 21, 22, 'assets/images/kelahiran/6448ce8c32118.jpg', 'assets/images/kelahiran/6448ce8c3426d.jpg', 'assets/images/kelahiran/6448ce8c34f34.jpg', 'assets/images/kelahiran/6448ce8c35d7f.jpg', 'assets/images/kelahiran/6448ce8c36e19.jpg', 'assets/images/kelahiran/6448ce8c37dfa.jpg', 'assets/images/kelahiran/6448ce8c38e4b.jpg'),
(132, '1', '2', '3', '4', 5, '6', '6', '78', '1', '1', '2', '3', '4', '5', 6, '7', '1', 'laki-laki', 'RUMAH SAKIT', '1', '2000-01-01', '1', 'TUNGGAL', 1, 'BIDAN', 1, 1, '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '', '<p>You did not select a file to upload.</p>'),
(135, '1', '2', '3', '4', 5, '6@gmail.com', '1', '2', '3', '4', '5', '6', '7', '8', 9, '10', '11', 'laki-laki', 'RUMAH SAKIT', '1', '2000-01-01', '1', 'TUNGGAL', 1, 'DOKTER', 2, 3, 'assets/images/kelahiran/bbbb2fffeb0844df2970c20d8cdf1491.png', 'assets/images/kelahiran/464736d29d13f47bd38a271d28531d22.jpg', 'assets/images/kelahiran/644b624e6dcbd2.png', 'assets/images/kelahiran/644b624e6dcbd3.png', 'assets/images/kelahiran/644b624e6dcbd4.png', 'assets/images/kelahiran/644b624e6dcbd5.png', 'assets/images/kelahiran/644b624e6dcbd6.png'),
(136, '1512512', '2', '4', '3', 0, '2@gmail.com', '1', '2', '3', '4', '56', '7', '8', '9', 0, '-', '1', 'laki-laki', 'RUMAH SAKIT', '1', '2000-01-01', '1', 'KEMBAR DUA', 2, 'DOKTER', 3, 3, 'assets/images/kelahiran/644b75f61b4691.jpg', 'assets/images/kelahiran/644b75f61b469.png', 'assets/images/kelahiran/644b75f61b4691.png', 'assets/images/kelahiran/644b75f61b4692.jpg', 'assets/images/kelahiran/644b75f61b4692.png', 'assets/images/kelahiran/644b75f61b469.jpeg', 'assets/images/kelahiran/644b75f61b4691.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `id` int(11) NOT NULL,
  `nikPelapor` varchar(16) NOT NULL,
  `namaPelapor` varchar(100) NOT NULL,
  `noKKpelapor` varchar(16) NOT NULL,
  `noHp` varchar(12) NOT NULL,
  `alamatPelapor` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nikIbu` varchar(16) NOT NULL,
  `namaIbu` varchar(100) NOT NULL,
  `nikAyah` varchar(16) NOT NULL,
  `namaAyah` varchar(100) NOT NULL,
  `nikSaksiSatu` varchar(16) NOT NULL,
  `namaSaksiSatu` varchar(100) NOT NULL,
  `nikSaksiDua` varchar(16) NOT NULL,
  `namaSaksiDua` varchar(100) NOT NULL,
  `nikJenazah` varchar(16) NOT NULL,
  `namaJenazah` varchar(100) NOT NULL,
  `tanggalKematian` date NOT NULL,
  `waktuKematian` varchar(10) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `sebab` varchar(100) NOT NULL,
  `yangMenerangkan` varchar(100) NOT NULL,
  `noKK` varchar(16) NOT NULL,
  `namaKepala` varchar(100) NOT NULL,
  `formPelapor` text NOT NULL,
  `suratKet` text NOT NULL,
  `KKjenazah` text NOT NULL,
  `KTPjenazah` text NOT NULL,
  `KTPpelapor` text NOT NULL,
  `KTPsaksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`id`, `nikPelapor`, `namaPelapor`, `noKKpelapor`, `noHp`, `alamatPelapor`, `email`, `nikIbu`, `namaIbu`, `nikAyah`, `namaAyah`, `nikSaksiSatu`, `namaSaksiSatu`, `nikSaksiDua`, `namaSaksiDua`, `nikJenazah`, `namaJenazah`, `tanggalKematian`, `waktuKematian`, `tempat`, `sebab`, `yangMenerangkan`, `noKK`, `namaKepala`, `formPelapor`, `suratKet`, `KKjenazah`, `KTPjenazah`, `KTPpelapor`, `KTPsaksi`) VALUES
(2, '0394859402938493', 'Sugiyo', '0394859402938493', '2147483647', 'Sugihan', 'Sugiyoyo@gmail.com', '0394859402938493', 'Marni', '0394859402938493', 'Dodo', '0394859402938493', 'Didi', '0394859402938493', 'Dudu', '0394859402938493', 'Roni', '2023-04-11', '23:00', 'Rumah', 'Terjatuh', 'Anak', '0394859402938493', 'Marno', '', '', '', '', '', ''),
(4, '123', '2', '3', '4', '5', '6@gmail.com', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '2000-01-01', '1', '2', 'SAKIT BIASA/TUA', 'TENAGA KESEHATAN', '4', '5', '', '', 'assets/images/kematian/644b64b960350.jpg', 'assets/images/kematian/644b64b9603501.jpg', 'assets/images/kematian/644b64b960350.png', 'assets/images/kematian/644b64b9603502.jpg'),
(5, '123', '2', '3', '4', '5', '6@gmail.com', '8', '91249', '1', '1', '2', '3', '4', '5', '6', '1', '2000-01-01', '1', '1', 'SAKIT BIASA/TUA', 'LAINNYA', '12', '2', 'assets/images/kematian/2bf863f2c4988220b1c55bd315d734d4.jpg', 'assets/images/kematian/de5ddfa65f1fcdb5b5f2669dd819ea00.png', 'assets/images/kematian/6ac6ae29fbea33477789dc0c20a34d0e.png', 'assets/images/kematian/731391defec54b757d8554800c0c8307.png', 'assets/images/kematian/99aea19db6d1398f037b187589d9ebea.jpeg', 'assets/images/kematian/fd7106c25a00fb1852d4198bc2867276.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fakultas`
--

CREATE TABLE `tbl_fakultas` (
  `id` int(11) NOT NULL,
  `nama_fakultas` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fakultas`
--

INSERT INTO `tbl_fakultas` (`id`, `nama_fakultas`, `status`) VALUES
(5, 'A', 1),
(9, 'B', 1),
(10, 'C', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id`, `nama_jurusan`, `status`) VALUES
(3, 'Teknik Informatika', 1),
(8, 'Ilmu Komunikasi', 1),
(9, 'ilkom', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id`, `nama_kelas`, `status`) VALUES
(6, 'A', 1),
(7, 'B', 1),
(9, 'C', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `fakultas_id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `nim`, `nama_mahasiswa`, `fakultas_id`, `jurusan_id`, `kelas_id`, `no_hp`, `email`, `alamat`, `jenis_kelamin`, `foto`) VALUES
(3, 0, 'Irfan Nur Hidayat', 9, 3, 7, 2147483647, 'irfans.mutu@gmail.com', 'Dk Pundungrejo Rt 01/03 Kenokorejo Polokarto Sukoharjo', 1, 'assets/images/mahasiswa/60fe35b44194c.png'),
(7, 123445, 'rayhan', 10, 8, 9, 2147483647, 'rayhan@gmail.com', 'Parangkusumo', 1, 'assets/images/mahasiswa/642a5e6fd5d74.jpg'),
(8, 2147483647, '321dasdsadsad', 10, 9, 6, 0, 'admin@admin', '321213213', 1, 'assets/images/mahasiswa/64303d156824e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nikah`
--

CREATE TABLE `tbl_nikah` (
  `id` int(100) NOT NULL,
  `nik_pria` int(16) NOT NULL,
  `nama_lengkap_pria` varchar(50) NOT NULL,
  `provinsi_pria` varchar(50) NOT NULL,
  `kabupaten_pria` varchar(50) NOT NULL,
  `kecamatan_pria` varchar(50) NOT NULL,
  `desa_pria` varchar(50) NOT NULL,
  `nik_wanita` int(16) NOT NULL,
  `nama_lengkap_wanita` varchar(50) NOT NULL,
  `provinsi_wanita` varchar(50) NOT NULL,
  `kabupaten_wanita` varchar(50) NOT NULL,
  `kecamatan_wanita` varchar(50) NOT NULL,
  `desa_wanita` varchar(50) NOT NULL,
  `no_nikah` int(50) NOT NULL,
  `tanggal_nikah` date NOT NULL,
  `alamat_baru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nikah`
--

INSERT INTO `tbl_nikah` (`id`, `nik_pria`, `nama_lengkap_pria`, `provinsi_pria`, `kabupaten_pria`, `kecamatan_pria`, `desa_pria`, `nik_wanita`, `nama_lengkap_wanita`, `provinsi_wanita`, `kabupaten_wanita`, `kecamatan_wanita`, `desa_wanita`, `no_nikah`, `tanggal_nikah`, `alamat_baru`) VALUES
(2, 2147483647, 'ecdsadcasd', 'sdadasd', 'asdasda', 'dwadawdadw', 'wdadwada', 2147483647, 'fefefewfw', 'wdeqdwqq', 'fqwfqwf', 'wdfqdf', 'efqfef', 12, '2023-04-04', 'wddwqed'),
(3, 2147483647, 'fdsasdfsef', 'wefwefwe', 'fwefwefwef', 'fwefwefwe', 'fwewefwf', 2147483647, 'safasfas', 'fsasaa', 'afssaf', 'safsa', 'fsafasf', 11121, '2023-03-15', 'dsadsadsa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pensiun`
--

CREATE TABLE `tbl_pensiun` (
  `Id` int(100) NOT NULL,
  `tahun_pensiun` int(25) NOT NULL,
  `bulan_pensiun` int(25) NOT NULL,
  `upload_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pensiun`
--

INSERT INTO `tbl_pensiun` (`Id`, `tahun_pensiun`, `bulan_pensiun`, `upload_file`) VALUES
(5, 2001, 12, ''),
(18, 2001, 2, '<p>You did not select a file to upload.</p>'),
(19, 2002, 3, '<p>You did not select a file to upload.</p>'),
(20, 2010, 4, '<p>You did not select a file to upload.</p>'),
(21, 2222, 1, 'assets/images/pensiun/643eb7c877b55.jpg'),
(22, 2020, 3, 'assets/images/pensiun/c926538411e4c6b0cebc4ca13b40e032.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perceraian`
--

CREATE TABLE `tbl_perceraian` (
  `id` int(11) NOT NULL,
  `nik_petugas` varchar(16) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `nik_suami` varchar(16) NOT NULL,
  `nama_suami` varchar(25) NOT NULL,
  `nik_istri` varchar(16) NOT NULL,
  `nama_istri` varchar(25) NOT NULL,
  `mengajukan` varchar(5) NOT NULL,
  `no_akta` varchar(11) NOT NULL,
  `tanggal_akta` date NOT NULL,
  `no_putusan` int(11) NOT NULL,
  `tanggal_putusan` date NOT NULL,
  `sebab` varchar(100) NOT NULL,
  `form_permohonan` text NOT NULL,
  `amar_putusan` text NOT NULL,
  `akta_kawin` text NOT NULL,
  `kk` text NOT NULL,
  `ktp` text NOT NULL,
  `form_pindah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_perceraian`
--

INSERT INTO `tbl_perceraian` (`id`, `nik_petugas`, `nama_petugas`, `nik_suami`, `nama_suami`, `nik_istri`, `nama_istri`, `mengajukan`, `no_akta`, `tanggal_akta`, `no_putusan`, `tanggal_putusan`, `sebab`, `form_permohonan`, `amar_putusan`, `akta_kawin`, `kk`, `ktp`, `form_pindah`) VALUES
(2, '1234567890123456', 'zz', '1234567890123456', 'zz', '1234567890123456', 'zz', '1', '12345678901', '2023-04-05', 2147483647, '0000-00-00', 'BERBUAT ZINA', '<p>You did not select a file to upload.</p>', '', '', '', '', ''),
(3, '1234567890123456', 'a', '1234567890123456', 'a', '1234567890123456', 'b', '1', '12345678901', '2023-04-04', 2147483647, '0000-00-00', 'BERBUAT ZINA', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>'),
(5, '2324356789067543', 'gsgfdsegsegt', '2324356789067512', 'sadfsdsadaw', '2324356789067532', 'dsafadsfas', '2', '121', '2023-04-14', 0, '0000-00-00', 'BERBUAT ZINA', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>'),
(6, '1234456789543267', 'dudu', '1234456789543274', 'edi', '1234456789543268', 'mul', '1', '12345675', '2023-03-09', 32, '0000-00-00', 'PEMABUK/PEMADAT', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>'),
(11, '1', '2', '3', '4', '5', '6', '1', '1', '2000-01-01', 1, '2023-04-28', 'PEMABUK/PEMADAT', 'assets/images/perceraian/217ddc241cfbce612940a59f08d37e31.jpg', 'assets/images/perceraian/b426feed2cf24877448c8ca59462cbd0.png', 'assets/images/perceraian/644b7640071ca1.png', 'assets/images/perceraian/644b7640071ca2.png', 'assets/images/perceraian/644b7640071ca3.png', 'assets/images/perceraian/644b7640071ca4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perceraianislam`
--

CREATE TABLE `tbl_perceraianislam` (
  `id` int(100) NOT NULL,
  `nik_pria` varchar(16) NOT NULL,
  `nama_lengkap_pria` varchar(50) NOT NULL,
  `provinsi_pria` varchar(50) NOT NULL,
  `kabupaten_pria` varchar(50) NOT NULL,
  `kecamatan_pria` varchar(50) NOT NULL,
  `desa_pria` varchar(50) NOT NULL,
  `nik_wanita` varchar(16) NOT NULL,
  `nama_lengkap_wanita` varchar(50) NOT NULL,
  `provinsi_wanita` varchar(50) NOT NULL,
  `kabupaten_wanita` varchar(50) NOT NULL,
  `kecamatan_wanita` varchar(50) NOT NULL,
  `desa_wanita` varchar(50) NOT NULL,
  `no_perceraianislam` int(50) NOT NULL,
  `tanggal_perceraianislam` date NOT NULL,
  `alamat_baru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_perceraianislam`
--

INSERT INTO `tbl_perceraianislam` (`id`, `nik_pria`, `nama_lengkap_pria`, `provinsi_pria`, `kabupaten_pria`, `kecamatan_pria`, `desa_pria`, `nik_wanita`, `nama_lengkap_wanita`, `provinsi_wanita`, `kabupaten_wanita`, `kecamatan_wanita`, `desa_wanita`, `no_perceraianislam`, `tanggal_perceraianislam`, `alamat_baru`) VALUES
(6, '1234567890988765', 'agus', 'jawa tengah', 'sukoharjo', 'polokarto', 'wonorejo', '1234567890988762', 'mulyani', 'jawa tengah', 'solo', 'laweyan', 'new laweyan', 21, '2023-04-01', 'bekonang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `phone`, `gender`) VALUES
(1, 'admin', '$2y$10$qfDBG/AxIjJHdkgpmAzHreaYM5FgEcK9mJH7t3.EXBYugiEYdZiIC', 'admin@admin.com', 'john', 'doe', '123456', 1),
(10, 'ezscode786', '$2y$10$WO4YniOT9NubqXNbg4fYPOqWY97cgrRwSInc6um.atNt723CBSkPC', 'ezscode786@gmail.com', 'ez', 'scode', '1234567', 1),
(11, 'gendar', '$2y$10$cGuFuryRp/OYHFRLeQ.C9OPTtCgDuN.3RT1IQ4ALgjFFk9BHDJNZe', 'gendar@gendar.com', 'mmy', 'garage', '1213131', 1),
(12, 'yogatama', '$2y$10$3ivQ6J5ZB2wNaKgiBI17b.NhAZvYhLIqB5AN0x36zsGyI/BholoMq', 'yogatama@gmail.com', 'yogatama', 'wijaya', '081328879498', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(11, 10, 6),
(12, 11, 1),
(13, 12, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_mahasiswa` (`nama_mahasiswa`),
  ADD KEY `fakultas_id` (`fakultas_id`),
  ADD KEY `jurusan_id` (`jurusan_id`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- Indexes for table `tbl_nikah`
--
ALTER TABLE `tbl_nikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pensiun`
--
ALTER TABLE `tbl_pensiun`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_perceraian`
--
ALTER TABLE `tbl_perceraian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_perceraianislam`
--
ALTER TABLE `tbl_perceraianislam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_nikah`
--
ALTER TABLE `tbl_nikah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pensiun`
--
ALTER TABLE `tbl_pensiun`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_perceraian`
--
ALTER TABLE `tbl_perceraian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_perceraianislam`
--
ALTER TABLE `tbl_perceraianislam`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD CONSTRAINT `tbl_mahasiswa_ibfk_1` FOREIGN KEY (`fakultas_id`) REFERENCES `tbl_fakultas` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_mahasiswa_ibfk_2` FOREIGN KEY (`jurusan_id`) REFERENCES `tbl_jurusan` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_mahasiswa_ibfk_3` FOREIGN KEY (`kelas_id`) REFERENCES `tbl_kelas` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
