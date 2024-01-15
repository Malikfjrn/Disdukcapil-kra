-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2024 pada 13.05
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.15

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
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `permission`) VALUES
(1, 'Super Administrator', 'a:35:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:15:\"createKelahiran\";i:9;s:15:\"updateKelahiran\";i:10;s:13:\"viewKelahiran\";i:11;s:15:\"deleteKelahiran\";i:12;s:14:\"createKematian\";i:13;s:14:\"updateKematian\";i:14;s:12:\"viewKematian\";i:15;s:14:\"deleteKematian\";i:16;s:11:\"createNikah\";i:17;s:11:\"updateNikah\";i:18;s:9:\"viewNikah\";i:19;s:11:\"deleteNikah\";i:20;s:13:\"createPensiun\";i:21;s:13:\"updatePensiun\";i:22;s:11:\"viewPensiun\";i:23;s:13:\"deletePensiun\";i:24;s:16:\"createPerceraian\";i:25;s:16:\"updatePerceraian\";i:26;s:14:\"viewPerceraian\";i:27;s:16:\"deletePerceraian\";i:28;s:21:\"createPerceraianislam\";i:29;s:21:\"updatePerceraianislam\";i:30;s:19:\"viewPerceraianislam\";i:31;s:21:\"deletePerceraianislam\";i:32;s:11:\"viewProfile\";i:33;s:10:\"viewGrafik\";i:34;s:13:\"updateSetting\";}'),
(6, 'admin', 'a:46:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:14:\"createFakultas\";i:9;s:14:\"updateFakultas\";i:10;s:12:\"viewFakultas\";i:11;s:14:\"deleteFakultas\";i:12;s:13:\"createJurusan\";i:13;s:13:\"updateJurusan\";i:14;s:11:\"viewJurusan\";i:15;s:13:\"deleteJurusan\";i:16;s:11:\"createKelas\";i:17;s:11:\"updateKelas\";i:18;s:9:\"viewKelas\";i:19;s:11:\"deleteKelas\";i:20;s:15:\"createMahasiswa\";i:21;s:15:\"updateMahasiswa\";i:22;s:13:\"viewMahasiswa\";i:23;s:15:\"deleteMahasiswa\";i:24;s:16:\"createPerceraian\";i:25;s:16:\"updatePerceraian\";i:26;s:14:\"viewPerceraian\";i:27;s:16:\"deletePerceraian\";i:28;s:15:\"createKelahiran\";i:29;s:15:\"updateKelahiran\";i:30;s:13:\"viewKelahiran\";i:31;s:15:\"deleteKelahiran\";i:32;s:13:\"createPensiun\";i:33;s:13:\"updatePensiun\";i:34;s:11:\"viewPensiun\";i:35;s:13:\"deletePensiun\";i:36;s:21:\"createPerceraianislam\";i:37;s:21:\"updatePerceraianislam\";i:38;s:19:\"viewPerceraianislam\";i:39;s:21:\"deletePerceraianislam\";i:40;s:11:\"createNikah\";i:41;s:11:\"updateNikah\";i:42;s:9:\"viewNikah\";i:43;s:11:\"deleteNikah\";i:44;s:11:\"viewProfile\";i:45;s:13:\"updateSetting\";}'),
(8, 'User', 'a:16:{i:0;s:15:\"createKelahiran\";i:1;s:15:\"updateKelahiran\";i:2;s:13:\"viewKelahiran\";i:3;s:15:\"deleteKelahiran\";i:4;s:14:\"createKematian\";i:5;s:14:\"updateKematian\";i:6;s:12:\"viewKematian\";i:7;s:14:\"deleteKematian\";i:8;s:11:\"createNikah\";i:9;s:11:\"updateNikah\";i:10;s:9:\"viewNikah\";i:11;s:11:\"deleteNikah\";i:12;s:13:\"createPensiun\";i:13;s:13:\"updatePensiun\";i:14;s:11:\"viewPensiun\";i:15;s:13:\"deletePensiun\";}'),
(9, 'Pengadilan', 'a:2:{i:0;s:14:\"viewPerceraian\";i:1;s:19:\"viewPerceraianislam\";}'),
(10, 'kematian', 'a:6:{i:0;s:14:\"createKematian\";i:1;s:14:\"updateKematian\";i:2;s:12:\"viewKematian\";i:3;s:14:\"deleteKematian\";i:4;s:11:\"viewProfile\";i:5;s:13:\"updateSetting\";}'),
(11, 'Nikah', 'a:6:{i:0;s:11:\"createNikah\";i:1;s:11:\"updateNikah\";i:2;s:9:\"viewNikah\";i:3;s:11:\"deleteNikah\";i:4;s:11:\"viewProfile\";i:5;s:13:\"updateSetting\";}'),
(12, 'Perceraian', 'a:6:{i:0;s:16:\"createPerceraian\";i:1;s:16:\"updatePerceraian\";i:2;s:14:\"viewPerceraian\";i:3;s:16:\"deletePerceraian\";i:4;s:11:\"viewProfile\";i:5;s:13:\"updateSetting\";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id` int(20) NOT NULL,
  `nikPelapor` varchar(16) NOT NULL,
  `namaPelapor` varchar(100) NOT NULL,
  `alamatPelapor` varchar(255) NOT NULL,
  `namaFaskes` varchar(100) NOT NULL,
  `noPelapor` varchar(225) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nikIbu` varchar(16) NOT NULL,
  `namaIbu` varchar(100) NOT NULL,
  `nikAyah` varchar(16) NOT NULL,
  `namaAyah` varchar(100) NOT NULL,
  `nikSaksiSatu` varchar(16) NOT NULL,
  `namaSaksiSatu` varchar(100) NOT NULL,
  `nikSaksiDua` varchar(16) NOT NULL,
  `namaSaksiDua` varchar(100) NOT NULL,
  `noKK` varchar(225) NOT NULL,
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
  `beratBayi` varchar(225) NOT NULL,
  `panjangBayi` varchar(225) NOT NULL,
  `formPelapor` text NOT NULL,
  `suratKelahiran` text NOT NULL,
  `kutipanAkta` text NOT NULL,
  `KKortu` text NOT NULL,
  `KTPortu` text NOT NULL,
  `KTPpelapor` text NOT NULL,
  `KTPsaksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id`, `nikPelapor`, `namaPelapor`, `alamatPelapor`, `namaFaskes`, `noPelapor`, `email`, `nikIbu`, `namaIbu`, `nikAyah`, `namaAyah`, `nikSaksiSatu`, `namaSaksiSatu`, `nikSaksiDua`, `namaSaksiDua`, `noKK`, `namaKepalaKeluarga`, `namaBayi`, `jenisKelamin`, `tempatDilahirkan`, `tempatKelahiran`, `tanggalLahir`, `jam`, `jenisKelahiran`, `kelahiranKe`, `penolongKelahiran`, `beratBayi`, `panjangBayi`, `formPelapor`, `suratKelahiran`, `kutipanAkta`, `KKortu`, `KTPortu`, `KTPpelapor`, `KTPsaksi`) VALUES
(163, '11111111111111', 'adminp', 'skh', 'erergerg', '77', 'admin@admin.com', '1111111111111111', 'swvww', '1111111111111111', 'vwwvwew', '1111111111111111', 'dbdbbfw', '1111111111111111', 'vwwvwvw', '22', 'svvsvsddv', 'svsevsv', 'laki-laki', 'RUMAH SAKIT', 'svsvvs', '2023-06-07', 'svsvv', 'KEMBAR DUA', 2, 'DUKUN', '22', '11', '', '', '', '', '', '', ''),
(164, '11111111111111', 'adminp', 'skh', 'gfnnfnfn', '77', 'admin@admin.com', '1111111111111111', 'svsvsvs', '1111111111111111', 'berberberbe', '1111111111111111', 'wbbbdr', '1111111111111111', 'bdbdbrdb', '44', 'bdbdbs', 'dbdbdb', 'laki-laki', 'PUSKESMAS', 'dbdbd', '2024-01-12', '3', 'TUNGGAL', 4, 'BIDAN', '44', '44', '', '', '', '', '', '', ''),
(165, '11111111111111', 'adminp', 'skh', 'svsvsv', '77', 'admin@admin.com', '1111111111111111', 'cqqcqcq', '1111111111111111', 'svsvsev', '1111111111111111', 'svdsdsv', '1111111111111111', 'dbdbdbdb', '555', 'dbdbdb', 'dbddb', 'laki-laki', 'RUMAH', 'dbdbdf', '2024-01-23', 'dbdbd', 'KEMBAR DUA', 5, 'DUKUN', '33', '33', 'assets/images/kelahiran/02fbad529f9fd73ae60d9b185fa85658.jpeg', 'assets/images/kelahiran/65a1568d6cc752.jpg', 'assets/images/kelahiran/65a1568d6cc753.jpg', 'assets/images/kelahiran/65a1568d6cc75.jpeg', 'assets/images/kelahiran/65a1568d6cc754.jpg', 'assets/images/kelahiran/65a1568d6cc755.jpg', 'assets/images/kelahiran/65a1568d6cc756.jpg'),
(166, '11111111111111', 'adminp', 'skh', 'srgrvsrv', '77', 'admin@admin.com', '1111111111111111', 'svsvsvsv', '1111111111111111', 'erveverv', '1111111111111111', 'vsvsvsvs', '1111111111111111', 'sdvssve', '22', 'svsvsv', 'vsessvs', 'perempuan', 'PUSKESMAS', 'svsvesvs', '2024-06-18', 'svsve', 'TUNGGAL', 3, 'DOKTER', '33', '11', 'assets/images/kelahiran/65a15729887cc1.jpeg', 'assets/images/kelahiran/65a15729887cc2.jpeg', 'assets/images/kelahiran/65a15729887cc3.jpeg', 'assets/images/kelahiran/65a15729887cc4.jpeg', 'assets/images/kelahiran/65a15729887cc5.jpeg', 'assets/images/kelahiran/65a15729887cc6.jpeg', 'assets/images/kelahiran/65a15729887cc7.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `id` int(11) NOT NULL,
  `nikPelapor` varchar(16) NOT NULL,
  `namaPelapor` varchar(100) NOT NULL,
  `noKKpelapor` varchar(16) NOT NULL,
  `noPelapor` varchar(12) NOT NULL,
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
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`id`, `nikPelapor`, `namaPelapor`, `noKKpelapor`, `noPelapor`, `alamatPelapor`, `email`, `nikIbu`, `namaIbu`, `nikAyah`, `namaAyah`, `nikSaksiSatu`, `namaSaksiSatu`, `nikSaksiDua`, `namaSaksiDua`, `nikJenazah`, `namaJenazah`, `tanggalKematian`, `waktuKematian`, `tempat`, `sebab`, `yangMenerangkan`, `noKK`, `namaKepala`, `formPelapor`, `suratKet`, `KKjenazah`, `KTPjenazah`, `KTPpelapor`, `KTPsaksi`) VALUES
(4, '123', '2', '3', '4', '5', '6@gmail.com', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '2000-01-01', '1', '2', 'SAKIT BIASA/TUA', 'TENAGA KESEHATAN', '4', '5', '', '', 'assets/images/kematian/644b64b960350.jpg', 'assets/images/kematian/644b64b9603501.jpg', 'assets/images/kematian/644b64b960350.png', 'assets/images/kematian/644b64b9603502.jpg'),
(6, '1', 'fevew', '2', '5', 'wevewv', 'mlk@mlk.com', '4', 'verveve', '6', 'rtbrbr', '7', '55', '66', 'bdrbrb', '33', 'srtb4b', '2023-11-28', '13.00', 'gsrrb', 'SAKIT BIASA/TUA', 'TENAGA KESEHATAN', '22', 'btrtbsrbt', '', '', '', '', '', ''),
(7, '8888888888888888', 'betsbtbs', '99', '868767857476', 'uiggu', 'kkkk@kkk.com', '8888888888888889', 'iohiogugui', '8888888888888899', 'ihiokb', '8888888888888880', 'jbjkbkjvk', '8888888888888877', 'gjkvbjkv', '8888888888888999', 'njkbjkbk', '2023-12-13', '11.00', 'njjbi', 'BUNUH DIRI', 'TENAGA KESEHATAN', '77', 'ubkjvb', '', '', '', '', '', ''),
(8, '9999999999999999', 'njvbwieb', '00', '980898678', 'hihubb', 'ddd@ddd.com', '9999999999999991', 'kncwjlenl', '9999999999999992', 'bjkebcwe', '9999999999999993', 'jbsbkweub', '9999999999999994', 'nsjlcbwjbe', '9999999999999997', 'nlsnvwl', '2023-11-29', '11.00', 'nsocnosid', 'PANDEMI/WABAH PENYAKIT', 'KEPOLISIAN', '77', 'vhjvh', '', '', '', '', '', ''),
(9, '', '', '11', '', '', '', '9999999999999999', 'sdfghkl', '9999999999999990', 'rtghj', '9999999999999988', 'dfghjk', '9999999999999999', 'rtyuikkjhgh', '9999999999999999', 'dfghjnhgfdfg', '2023-12-07', '11', 'sdfghjkf', 'BUNUH DIRI', 'DOKTER', '55', 'sghgfd', '', '', '', '', '', ''),
(10, '11111111111111', 'adminp', '33', '77', 'skh', 'admin@admin.com', '9999999999999990', 'sdfghjhg', '9999999999999997', 'hgfdyuyt', '9999999999999995', 'dfghjhgddfgh', '9999999999999991', 'sdfghjhgfgh', '9999999999999993', 'shjhgfsdfg', '2023-12-14', '11', 'dfghjfdfg', 'KECELAKAAN', 'TENAGA KESEHATAN', '77', 'efghfd', 'assets/images/kematian/a967d6e663a7dc21bb67490c5d5935cf.jpg', 'assets/images/kematian/e160a22d4c71ab024373236edfc0bb26.jpeg', 'assets/images/kematian/c3efafb32a323a9d382612d53d55ddea.jpeg', 'assets/images/kematian/b20a0be427527a89433c4418809642e4.jpeg', 'assets/images/kematian/8af45e15d28577e7c396f6c3322682de.jpeg', 'assets/images/kematian/383e76fbc48e0142d52f689df7de75b0.jpeg'),
(11, '3311062710010001', '', '11', '44', 'mulur', 'kema@kema.com', '3311062710010003', 'susur', '3311062710010006', 'bibiw', '3311062710010009', 'babak', '3311062710010007', 'jujuk', '3311062710010008', 'kikiw', '2023-12-26', '22.00', 'jungki', 'PANDEMI/WABAH PENYAKIT', 'TENAGA KESEHATAN', '1111', 'kiwkiw', 'assets/images/kematian/658a85ca5bf9e1.jpg', 'assets/images/kematian/658a85ca5bf9e2.jpg', 'assets/images/kematian/658a85ca5bf9e3.jpg', '', '', ''),
(12, '11111111111111', 'adminp', '1212', '77', 'skh', 'admin@admin.com', '3311062710010002', 'nwjvnwuvb', '3311062710010000', 'jbubi', '3311062710010007', 'vbevbeuvr', '3311062710010009', 'nvivbevbe', '3311062710010005', 'klvnelvnel', '2023-12-22', '11.00', 'jvndvnv', 'PANDEMI/WABAH PENYAKIT', 'DOKTER', '22', 'dfvvv', '', 'assets/images/kematian/658a87c5313ca.jpg', 'assets/images/kematian/658a87c5313ca1.jpg', '', 'assets/images/kematian/658a87c5313ca2.jpg', ''),
(13, '11111111111111', 'adminp', '11', '77', 'skh', 'admin@admin.com', '3311062710010001', 'gerhh', '3311062710010002', 'ndtdjtj', '3311062710010009', 'jctyjtjct', '3311062710010006', 'jyrjyjvkuk', '3311062710010004', 'fyktykkck', '2023-12-16', '11.00', 'ndfjfj', 'KRIMINALITAS', 'DOKTER', '33', 'mghmghm', 'assets/images/kematian/658a8a48195e41.jpg', 'assets/images/kematian/658a8a48195e42.jpg', 'assets/images/kematian/658a8a48195e43.jpg', 'assets/images/kematian/32b035454452772049296a6d8c1f42f6.jpeg', 'assets/images/kematian/fe3ed48baecd6af2e89ee96c784f1758.jpeg', 'assets/images/kematian/38c635c046f743b2fd5685015d0c953e.jpeg'),
(14, '11111111111111', 'adminp', '11', '77', 'skh', 'admin@admin.com', '3311062710010001', 'jtrtjrj', '3311062710010005', 'rtjrjjr', '3311062710010007', 'jxrtjcyjcy', '3311062710010000', 'kcyfkgykgkgyk', '3311062710010003', 'ngvnvgng', '2023-12-26', '11.00', 'ndnfnf', 'SAKIT BIASA/TUA', 'TENAGA KESEHATAN', '33', 'gnvgvm', 'assets/images/kematian/658a8b85eedc81.jpg', 'assets/images/kematian/658a8b85eedc8.png', '', '', '', 'assets/images/kematian/658a8b85eedc82.jpg'),
(15, '11111111111111', 'adminp', '55', '77', 'skh', 'admin@admin.com', '3311062710010001', 'ehrtjrtjrj', '3311062710010009', 'ggkkhuku', '3311062710010008', 'fcjcgkg', '3311062710010000', 'fjykykyk', '3311062710010004', 'gghhh,h,', '2023-12-15', '11.00', 'hvyvuyu', 'BUNUH DIRI', 'TENAGA KESEHATAN', '22', 'fcnnndr', 'assets/images/kematian/658a8cc1938551.jpg', 'assets/images/kematian/658a8cc1938552.jpg', 'assets/images/kematian/658a8cc1938553.jpg', 'assets/images/kematian/658a8cc1938554.jpg', 'assets/images/kematian/658a8cc1938555.jpg', 'assets/images/kematian/658a8cc1938556.jpg'),
(16, '3311062710010001', '', '33', '44', 'mulur', 'kema@kema.com', '3311062710010002', 'asini', '3311062710010003', 'susu', '3311062710010009', 'jiji', '3311062710010000', 'juju', '3311062710010006', 'jaja', '2023-12-21', '11.00', 'kikiw', 'KECELAKAAN', 'TENAGA KESEHATAN', '22', 'kaka', '', '', '', '', '', ''),
(17, '3311062710010001', '', '66', '44', 'mulur', 'kema@kema.com', '3311062710010004', 'dbddbdb', '3311062710010009', 'dfnngf', '3311062710010000', 'bdfhhtfhft', '3311062710010003', 'nfnfgngf', '3311062710010002', 'ngfnfgngfn', '2023-12-30', '11.00', 'xdvxbcfb', 'PANDEMI/WABAH PENYAKIT', 'DOKTER', '33', 'cfbcfbcf', 'assets/images/kematian/05dc8d1512a6e0db2ab897456b597b98.jpeg', '', '', '', '', ''),
(18, '11111111111111', 'adminp', '44', '77', 'skh', 'admin@admin.com', '3311062710010001', 'bddfb', '3311062710010005', 'ffnggf', '3311062710010001', 'hhdhdhd', '3311062710010001', 'dhddnd', '3311062710010001', 'gfnfnf', '2023-11-30', '12.00', 'sgsgsgs', 'KECELAKAAN', 'TENAGA KESEHATAN', '55', 'fdbcfbc', '', '', '', '', '', ''),
(19, '11111111111111', 'adminp', '11', '77', 'skh', 'admin@admin.com', '3311062710010001', 'gssgsg', '3311062710010001', 'bdfbdd', '3311062710010001', 'ssgdrhd', '3311062710010001', 'bsbsrhdhd', '3311062710010001', 'dbcbcfb', '2023-12-21', '11.00', 'dvxdvxvxd', 'BUNUH DIRI', 'KEPOLISIAN', '66', '44', 'assets/images/kematian/658a8f2f5ef4c1.jpg', 'assets/images/kematian/658a8f2f5ef4c2.jpg', 'assets/images/kematian/658a8f2f5ef4c3.jpg', 'assets/images/kematian/658a8f2f5ef4c4.jpg', 'assets/images/kematian/658a8f2f5ef4c5.jpg', 'assets/images/kematian/658a8f2f5ef4c6.jpg'),
(21, '3311062710010001', '', '88', '44', 'mulur', 'kema@kema.com', '3311062710010001', 'dvsdvdxd', '3311062710010001', 'ndnndfbdbr', '3311062710010001', 'bdfbf', '3311062710010001', 'bxdbxb', '3311062710010001', 'xbxfb', '2023-12-02', '12', 'dcfbxf', 'PANDEMI/WABAH PENYAKIT', 'TENAGA KESEHATAN', '55', '33', 'assets/images/kematian/658a91124bb691.jpg', 'assets/images/kematian/658a91124bb692.jpg', 'assets/images/kematian/658a91124bb693.jpg', 'assets/images/kematian/658a91124bb694.jpg', 'assets/images/kematian/658a91124bb695.jpg', 'assets/images/kematian/658a91124bb696.jpg'),
(22, '11111111111111', 'adminp', '55', '77', 'skh', 'admin@admin.com', '3311062710010001', 'sddrhdh', '3311062710010001', 'bbddrbdrb', '3311062710010001', 'bfbbdfbd', '3311062710010001', 'ndndnd', '3311062710010001', 'hhdhdrhdr', '2023-12-04', '12', 'hdrhdh', 'KRIMINALITAS', 'KEPOLISIAN', '66', 'hdhdhdh', '', '', '', '', '', ''),
(23, '11111111111111', 'adminp', '66', '77', 'skh', 'admin@admin.com', '3311062710010001', 'hsrhhdrh', '3311062710010001', 'dhdhdrh', '3311062710010001', 'hdxhdrdrh', '3311062710010001', 'dhdrhd', '3311062710010001', 'dhrhdrhdr', '2023-12-09', '12', 'drhth', 'KECELAKAAN', 'KEPOLISIAN', '22', 'sgsegs', '', '', '', '', '', ''),
(24, '11111111111111', 'adminp', '11', '77', 'skh', 'admin@admin.com', '3311062710010001', 'jsebssvsv', '3311062710010001', 'srgrgdgd', '3311062710010001', 'bddbdrbdb', '3311062710010001', 'drhdrhdrh', '3311062710010001', 'rrgdvdbdfb', '2023-12-21', '11', 'dhdhth', 'KECELAKAAN', 'TENAGA KESEHATAN', '22', 'fngvngmgm', '', '', '', '', '', ''),
(25, '11111111111111', 'adminp', '99', '77', 'skh', 'admin@admin.com', '3311062710010001', 'jajan', '3311062710010002', 'jujun', '3311062710010009', 'jajak', '3311062710010003', 'jijin', '3311062710010000', 'jojon', '2023-02-07', '12.00', 'mulur', 'PANDEMI/WABAH PENYAKIT', 'KEPOLISIAN', '11', '33', '', '', '', '', '', ''),
(26, '11111111111111', 'adminp', '11', '77', 'skh', 'admin@admin.com', '3311062710010002', 'jajak', '3311062710010007', 'susun', '3311062710010008', 'vivin', '3311062710010002', 'aanaaa', '3311062710010005', 'kukuh', '2023-06-13', '12.00', 'skh', 'PANDEMI/WABAH PENYAKIT', 'TENAGA KESEHATAN', '33', 'bawah', 'assets/images/kematian/eaa2740822841ae88b2700e1f617b0df.jpeg', '', '', '', '', ''),
(27, '11111111111111', 'adminp', '11', '77', 'skh', 'admin@admin.com', '3311062710010001', 'haha', '3311062710010003', 'hihi', '3311062710010000', 'juju', '3311062710010005', 'jaja', '3311062710010003', 'kaka', '2023-08-29', '11', 'gentaan', 'KECELAKAAN', 'TENAGA KESEHATAN', '11', '12', 'assets/images/kematian/658adad5bb8881.jpeg', 'assets/images/kematian/658adad5bb8882.jpeg', 'assets/images/kematian/658adad5bb8883.jpeg', 'assets/images/kematian/658adad5bb8884.jpeg', 'assets/images/kematian/658adad5bb8885.jpeg', 'assets/images/kematian/658adad5bb8886.jpeg'),
(28, '3311062710010001', 'Budi Subudi', '12345678', '44', 'mulur', 'kema@kema.com', '3311062710010001', 'susi', '3311062710010011', 'andi', '3311062710010022', 'aska', '3311062710010033', 'kinta', '3311062710010077', 'jajak', '2024-02-13', '13.00', 'Bulu', 'PANDEMI/WABAH PENYAKIT', 'LAINNYA', '6765543456', 'jujuk', 'assets/images/kematian/658b77b5b56901.jpeg', 'assets/images/kematian/658b77b5b56902.jpeg', 'assets/images/kematian/658b77b5b56903.jpeg', 'assets/images/kematian/658b77b5b56904.jpeg', 'assets/images/kematian/658b77b5b56905.jpeg', 'assets/images/kematian/658b77b5b56906.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nikah`
--

CREATE TABLE `tbl_nikah` (
  `id` int(100) NOT NULL,
  `nik_pria` varchar(225) NOT NULL,
  `nama_lengkap_pria` varchar(50) NOT NULL,
  `provinsi_pria` varchar(50) NOT NULL,
  `kabupaten_pria` varchar(50) NOT NULL,
  `kecamatan_pria` varchar(50) NOT NULL,
  `desa_pria` varchar(50) NOT NULL,
  `nik_wanita` varchar(225) NOT NULL,
  `nama_lengkap_wanita` varchar(50) NOT NULL,
  `provinsi_wanita` varchar(50) NOT NULL,
  `kabupaten_wanita` varchar(50) NOT NULL,
  `kecamatan_wanita` varchar(50) NOT NULL,
  `desa_wanita` varchar(50) NOT NULL,
  `no_nikah` int(50) NOT NULL,
  `tanggalNikah` date NOT NULL,
  `alamat_baru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nikah`
--

INSERT INTO `tbl_nikah` (`id`, `nik_pria`, `nama_lengkap_pria`, `provinsi_pria`, `kabupaten_pria`, `kecamatan_pria`, `desa_pria`, `nik_wanita`, `nama_lengkap_wanita`, `provinsi_wanita`, `kabupaten_wanita`, `kecamatan_wanita`, `desa_wanita`, `no_nikah`, `tanggalNikah`, `alamat_baru`) VALUES
(7, '3311062710010001', 'Malik Fajar Nugraha', 'Jawa Tengah', 'Sukoharjo', 'Bendosari', 'Mulur', '3311060510010002', 'Nailul Maghfiroh', 'Jawa Tengah', 'Batang', 'Subah', 'Kemiri', 11, '2024-01-24', 'Semarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pensiun`
--

CREATE TABLE `tbl_pensiun` (
  `Id` int(100) NOT NULL,
  `bulan_pensiun` int(25) NOT NULL,
  `upload_file` text NOT NULL,
  `tahun_pensiun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pensiun`
--

INSERT INTO `tbl_pensiun` (`Id`, `bulan_pensiun`, `upload_file`, `tahun_pensiun`) VALUES
(19, 2, '<p>You did not select a file to upload.</p>', '2023-08-16'),
(23, 44, '<p>You did not select a file to upload.</p>', '2023-06-16'),
(24, 12, 'assets/images/pensiun/657d8180154d0.jpg', '2023-02-14'),
(25, 0, 'assets/images/pensiun/eff35b4a614586769f8cae7897a7f802.jpeg', '2023-12-21'),
(27, 0, 'assets/images/pensiun/657d96ab972be.jpeg', '2023-12-19'),
(28, 0, 'assets/images/pensiun/658eaf9ccc739.jpeg', '2023-01-10'),
(29, 0, 'assets/images/pensiun/658eafbe95923.jpg', '2023-03-08'),
(30, 0, 'assets/images/pensiun/658eafd2e623d.jpeg', '2023-04-06'),
(31, 0, 'assets/images/pensiun/658eaff0469b0.jpg', '2023-05-10'),
(32, 0, 'assets/images/pensiun/658eb013721cc.jpeg', '2023-07-12'),
(33, 0, 'assets/images/pensiun/658eb026db8b7.jpg', '2023-09-19'),
(34, 0, 'assets/images/pensiun/658eb03adaea2.jpeg', '2023-10-17'),
(35, 0, 'assets/images/pensiun/658eb04ca5524.jpeg', '2023-11-14'),
(36, 0, 'assets/images/pensiun/c38527896ea2dc517c3554c48df50e57.jpeg', '2024-01-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_perceraian`
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
  `no_putusan` varchar(225) NOT NULL,
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
-- Dumping data untuk tabel `tbl_perceraian`
--

INSERT INTO `tbl_perceraian` (`id`, `nik_petugas`, `nama_petugas`, `nik_suami`, `nama_suami`, `nik_istri`, `nama_istri`, `mengajukan`, `no_akta`, `tanggal_akta`, `no_putusan`, `tanggal_putusan`, `sebab`, `form_permohonan`, `amar_putusan`, `akta_kawin`, `kk`, `ktp`, `form_pindah`) VALUES
(11, '11', '2', '3', '4', '5', '6', '1', '1', '2000-01-01', '1', '2023-12-16', 'PEMABUK/PEMADAT', 'assets/images/perceraian/217ddc241cfbce612940a59f08d37e31.jpg', 'assets/images/perceraian/b426feed2cf24877448c8ca59462cbd0.png', 'assets/images/perceraian/644b7640071ca1.png', 'assets/images/perceraian/644b7640071ca2.png', 'assets/images/perceraian/644b7640071ca3.png', 'assets/images/perceraian/644b7640071ca4.png'),
(13, '3311062710010001', 'sggsegse', '3311062710010001', 'dgdrdgr', '3311062710010001', 'hdrhdrh', '1', '66', '2024-06-13', '22', '2024-06-13', 'BERBUAT ZINA', 'assets/images/perceraian/658a95e930c3c.jpeg', 'assets/images/perceraian/658a95e930c3c1.jpeg', 'assets/images/perceraian/658a95e930c3c2.jpeg', 'assets/images/perceraian/658a95e930c3c3.jpeg', 'assets/images/perceraian/658a95e930c3c4.jpeg', 'assets/images/perceraian/658a95e930c3c5.jpeg'),
(14, '1111111111111111', 'vevee', '1111111111111111', 'berbebrew', '1111111111111111', 'gweegwgw', '2', '33', '2023-01-01', '44', '2023-05-16', 'MENINGGALKAN PASANGAN LEBIH DARI 2 THN TANPA ALASAN', '', '', '', '', '', ''),
(15, '3311062710010001', 'vsdvsdv', '3311062710010001', 'avsvs', '3311062710010001', 'erbvdvv', '2', '223', '2024-01-25', '22', '2024-01-31', 'MENINGGALKAN PASANGAN LEBIH DARI 2 THN TANPA ALASAN', 'assets/images/perceraian/af6ffacb9efdd6a1c823c182b5fcbd05.jpeg', 'assets/images/perceraian/65a15a4bb97a61.jpg', 'assets/images/perceraian/65a15a4bb97a62.jpg', 'assets/images/perceraian/65a15a4bb97a63.jpg', 'assets/images/perceraian/65a15a4bb97a64.jpg', 'assets/images/perceraian/65a15a4bb97a65.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_perceraianislam`
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
  `no_perceraianislam` varchar(225) NOT NULL,
  `tanggal_perceraianislam` date NOT NULL,
  `alamat_baru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_perceraianislam`
--

INSERT INTO `tbl_perceraianislam` (`id`, `nik_pria`, `nama_lengkap_pria`, `provinsi_pria`, `kabupaten_pria`, `kecamatan_pria`, `desa_pria`, `nik_wanita`, `nama_lengkap_wanita`, `provinsi_wanita`, `kabupaten_wanita`, `kecamatan_wanita`, `desa_wanita`, `no_perceraianislam`, `tanggal_perceraianislam`, `alamat_baru`) VALUES
(7, '3333333333333333', 'erhrtnrtn', 'nrtrntnrt', 'rntnrnrt', 'ntrsntrr', 'nrtnrtrt', '3333333333333332', 'mtmmm', 'tyndtnydtn', 'tntyn', 'tnnty', 'ntynty', '55', '2024-02-14', 'tfndtntn');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `nikPelapor` varchar(225) NOT NULL,
  `alamatPelapor` varchar(225) NOT NULL,
  `noPelapor` varchar(225) NOT NULL,
  `namaPelapor` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `phone`, `gender`, `nikPelapor`, `alamatPelapor`, `noPelapor`, `namaPelapor`) VALUES
(1, 'SuperAdministrator', '$2y$10$qfDBG/AxIjJHdkgpmAzHreaYM5FgEcK9mJH7t3.EXBYugiEYdZiIC', 'admin@admin.com', 'Malik', 'Fajar', '082134928939', 1, '3311062710010001', 'Sukoharjo', '271001', 'Admin'),
(10, 'ezscode786', '$2y$10$WO4YniOT9NubqXNbg4fYPOqWY97cgrRwSInc6um.atNt723CBSkPC', 'ezscode786@gmail.com', 'ez', 'scode', '1234567', 1, '', '', '', ''),
(11, 'gendar', '$2y$10$cGuFuryRp/OYHFRLeQ.C9OPTtCgDuN.3RT1IQ4ALgjFFk9BHDJNZe', 'gendar@gendar.com', 'mmy', 'garage', '1213131', 1, '', '', '', ''),
(12, 'yogatama', '$2y$10$3ivQ6J5ZB2wNaKgiBI17b.NhAZvYhLIqB5AN0x36zsGyI/BholoMq', 'yogatama@gmail.com', 'yogatama', 'wijaya', '081328879498', 1, '', '', '', ''),
(13, 'malik12345', '$2y$10$3H.qDOFzDkZV2qco7pONOOdOTWY30zYkvYM32OALMeu9zqow5W21S', 'malik@malik.com', 'malik', 'fajar', '0897866544', 1, '', '', '', ''),
(14, 'Fajarn', '$2y$10$NdBGOVGqZeU5Ii9VXjcsyeewZ6..ZUdq82FSgAwsUR4QLNYmadgXe', 'fajar@fajar.com', 'fajar', 'nugraha', '0896523345', 1, '', '', '', ''),
(15, 'Pengadilan', '$2y$10$p6iszWYCOvL/0xVp2yRCTOATRlXli/e5omCs4CPd7bv4esvyWPd8y', 'pengadilan@pangadilan.com', 'pengadilan', 'agama', '089765435344', 1, '', '', '', ''),
(16, 'ardiyansah', '$2y$10$PFtYojrqBatU9/oS6UigsuOY3m/jZS/JN9TBashCFeQtUgPmw/Fmm', 'ardiy@ardiy.com', 'ardiyan', 'sayhara', '09886755644', 1, '777777777', 'skh', '66', ''),
(17, 'kematiann', '$2y$10$Y3XmR9yOBKRJJV5efJ5i8eTwcGqRqpRveAVbCbFBUi6UBIjGvBQv6', 'kema@kema.com', 'kema', 'tian', '089765678987', 1, '3311062710010001', 'mulur', '44', 'Budi Subudi'),
(18, 'Pernikahan', '$2y$10$LU/DMxYK3TNus4eccG2uW..l2UkpyMqxuGS20XJd69qG1E3ZH95yG', 'nikah@nikah.com', 'nik', 'kah', '098876545666', 2, '3311089710010111', 'sukh', '55', 'abjcbasjcba'),
(19, 'Perceraian', '$2y$10$OEHw55zAIiqdc1l7RlpDWejQhh/Sb6QeRVwoZHeuWVgwkGfjsm7Hi', 'malikfajarnugroho@gmail.com', 'Malik', 'Fajar', '082134928939', 1, '3311062710010001', 'Banjarsari RT 01 RW 06 Mulur, Bendosari, Sukoharjo', '159753', 'Malik fajar'),
(20, 'handoko', '$2y$10$LIFTC/fTUBCv1AsnsLYKMurywltW3bGW0y6xrd8y4CFb12aSwuKLK', 'handoko@rocketmail.com', 'handoko', 'suroto', '987987987987', 1, '1231231231231231', 'ngkene', '987987987987', 'kikin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_group`
--

INSERT INTO `user_group` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(11, 10, 6),
(12, 11, 1),
(13, 12, 8),
(14, 13, 6),
(15, 14, 1),
(16, 15, 9),
(17, 16, 8),
(18, 17, 10),
(19, 18, 11),
(20, 19, 12),
(21, 20, 8);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_nikah`
--
ALTER TABLE `tbl_nikah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pensiun`
--
ALTER TABLE `tbl_pensiun`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tbl_perceraian`
--
ALTER TABLE `tbl_perceraian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_perceraianislam`
--
ALTER TABLE `tbl_perceraianislam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT untuk tabel `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tbl_nikah`
--
ALTER TABLE `tbl_nikah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_pensiun`
--
ALTER TABLE `tbl_pensiun`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tbl_perceraian`
--
ALTER TABLE `tbl_perceraian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_perceraianislam`
--
ALTER TABLE `tbl_perceraianislam`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
