-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2016 at 05:33 AM
-- Server version: 10.0.25-MariaDB
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_diaspora`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id_city` int(11) NOT NULL,
  `name_city` varchar(50) NOT NULL,
  `id_province_city` int(11) NOT NULL,
  PRIMARY KEY (`id_province_city`,`id_city`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id_city`, `name_city`, `id_province_city`) VALUES
(1, 'Kabupaten Aceh Barat', 1),
(2, 'Kabupaten Aceh Barat Daya', 1),
(3, 'Kabupaten Aceh Besar', 1),
(4, 'Kabupaten Aceh Jaya', 1),
(5, 'Kabupaten Aceh Selatan', 1),
(6, 'Kabupaten Aceh Singkil', 1),
(7, 'Kabupaten Aceh Tamiang', 1),
(8, 'Kabupaten Aceh Tengah', 1),
(9, 'Kabupaten Aceh Tenggara', 1),
(10, 'Kabupaten Aceh Timur', 1),
(11, 'Kabupaten Aceh Utara', 1),
(12, 'Kabupaten Bener Meriah', 1),
(13, 'Kabupaten Bireuen', 1),
(14, 'Kabupaten Gayo Lues', 1),
(15, 'Kabupaten Nagan Raya', 1),
(16, 'Kabupaten Pidie', 1),
(17, 'Kabupaten Pidie Jaya', 1),
(18, 'Kabupaten Simeulue', 1),
(19, 'Kota Banda Aceh', 1),
(20, 'Kota Langsa', 1),
(21, 'Kota Lhokseumawe', 1),
(22, 'Kota Sabang', 1),
(23, 'Kota Subulussalam', 1),
(1, 'Kabupaten Asahan', 2),
(2, 'Kabupaten Batu Bara', 2),
(3, 'Kabupaten Dairi', 2),
(4, 'Kabupaten Deli Serdang', 2),
(5, 'Kabupaten Humbang Hasundutan', 2),
(6, 'Kabupaten Karo', 2),
(7, 'Kabupaten Labuhanbatu', 2),
(8, 'Kabupaten Labuhanbatu Selatan', 2),
(9, 'Kabupaten Labuhanbatu Utara', 2),
(10, 'Kabupaten Langkat', 2),
(11, 'Kabupaten Mandailing Natal', 2),
(12, 'Kabupaten Nias', 2),
(13, 'Kabupaten Nias Barat', 2),
(14, 'Kabupaten Nias Selatan', 2),
(15, 'Kabupaten Nias Utara', 2),
(16, 'Kabupaten Padang Lawas', 2),
(17, 'Kabupaten Padang Lawas Utara', 2),
(18, 'Kabupaten Pakpak Bharat', 2),
(19, 'Kabupaten Samosir', 2),
(20, 'Kabupaten Serdang Bedagai', 2),
(21, 'Kabupaten Simalungun', 2),
(22, 'Kabupaten Tapanuli Selatan', 2),
(23, 'Kabupaten Tapanuli Tengah', 2),
(24, 'Kabupaten Tapanuli Utara', 2),
(25, 'Kabupaten Toba Samosir', 2),
(26, 'Kota Binjai', 2),
(27, 'Kota Gunung Sitoli', 2),
(28, 'Kota Medan', 2),
(29, 'Kota Padang Sidempuan', 2),
(30, 'Kota Pematangsiantar', 2),
(31, 'Kota Sibolga', 2),
(32, 'Kota Tanjung Balai', 2),
(33, 'Kota Tebing Tinggi', 2),
(1, 'Kabupaten Bengkulu Selatan', 3),
(2, 'Kabupaten Bengkulu Tengah', 3),
(3, 'Kabupaten Bengkulu Utara', 3),
(4, 'Kabupaten Benteng', 3),
(5, 'Kabupaten Kaur', 3),
(6, 'Kabupaten Kepahiang', 3),
(7, 'Kabupaten Lebong', 3),
(8, 'Kabupaten Mukomuko', 3),
(9, 'Kabupaten Rejang Lebong', 3),
(10, 'Kabupaten Seluma', 3),
(11, 'Kota Bengkulu', 3),
(1, 'Kabupaten Batang Hari', 4),
(2, 'Kabupaten Bungo', 4),
(3, 'Kabupaten Kerinci', 4),
(4, 'Kabupaten Merangin', 4),
(5, 'Kabupaten Muaro Jambi', 4),
(6, 'Kabupaten Sarolangun', 4),
(7, 'Kabupaten Tanjung Jabung Barat', 4),
(8, 'Kabupaten Tanjung Jabung Timur', 4),
(9, 'Kabupaten Tebo', 4),
(10, 'Kota Jambi', 4),
(11, 'Kota Sungai Penuh', 4),
(1, 'Kabupaten Bengkalis', 5),
(2, 'Kabupaten Indragiri Hilir', 5),
(3, 'Kabupaten Indragiri Hulu', 5),
(4, 'Kabupaten Kampar', 5),
(5, 'Kabupaten Kuantan Singingi', 5),
(6, 'Kabupaten Pelalawan', 5),
(7, 'Kabupaten Rokan Hilir', 5),
(8, 'Kabupaten Rokan Hulu', 5),
(9, 'Kabupaten Siak', 5),
(10, 'Kota Pekanbaru', 5),
(11, 'Kota Dumai', 5),
(12, 'Kabupaten Kepulauan Meranti', 5),
(1, 'Kabupaten Agam', 6),
(2, 'Kabupaten Dharmasraya', 6),
(3, 'Kabupaten Kepulauan Mentawai', 6),
(4, 'Kabupaten Lima Puluh Kota', 6),
(5, 'Kabupaten Padang Pariaman', 6),
(6, 'Kabupaten Pasaman', 6),
(7, 'Kabupaten Pasaman Barat', 6),
(8, 'Kabupaten Pesisir Selatan', 6),
(9, 'Kabupaten Sijunjung', 6),
(10, 'Kabupaten Solok', 6),
(11, 'Kabupaten Solok Selatan', 6),
(12, 'Kabupaten Tanah Datar', 6),
(13, 'Kota Bukittinggi', 6),
(14, 'Kota Padang', 6),
(15, 'Kota Padangpanjang', 6),
(16, 'Kota Pariaman', 6),
(17, 'Kota Payakumbuh', 6),
(18, 'Kota Sawahlunto', 6),
(19, 'Kota Solok', 6),
(1, 'Kabupaten Banyuasin', 7),
(2, 'Kabupaten Empat Lawang', 7),
(3, 'Kabupaten Lahat', 7),
(4, 'Kabupaten Muara Enim', 7),
(5, 'Kabupaten Musi Banyuasin', 7),
(6, 'Kabupaten Musi Rawas', 7),
(7, 'Kabupaten Ogan Ilir', 7),
(8, 'Kabupaten Ogan Komering Ilir', 7),
(9, 'Kabupaten Ogan Komering Ulu', 7),
(10, 'Kabupaten Ogan Komering Ulu Selatan', 7),
(11, 'Kabupaten Ogan Komering Ulu Timur', 7),
(12, 'Kota Lubuklinggau', 7),
(13, 'Kota Pagar Alam', 7),
(14, 'Kota Palembang', 7),
(15, 'Kota Prabumulih', 7),
(1, 'Kabupaten Lampung Barat', 8),
(2, 'Kabupaten Lampung Selatan', 8),
(3, 'Kabupaten Lampung Tengah', 8),
(4, 'Kabupaten Lampung Timur', 8),
(5, 'Kabupaten Lampung Utara', 8),
(6, 'Kabupaten Mesuji', 8),
(7, 'Kabupaten Pesawaran', 8),
(8, 'Kabupaten Pringsewu', 8),
(9, 'Kabupaten Tanggamus', 8),
(10, 'Kabupaten Tulang Bawang', 8),
(11, 'Kabupaten Tulang Bawang Barat', 8),
(12, 'Kabupaten Way Kanan', 8),
(13, 'Kota Bandar Lampung', 8),
(14, 'Kota Metro', 8),
(1, 'Kabupaten Bangka', 9),
(2, 'Kabupaten Bangka Barat', 9),
(3, 'Kabupaten Bangka Selatan', 9),
(4, 'Kabupaten Bangka Tengah', 9),
(5, 'Kabupaten Belitung', 9),
(6, 'Kabupaten Belitung Timur', 9),
(7, 'Kota Pangkal Pinang', 9),
(1, 'Kabupaten Bintan', 10),
(2, 'Kabupaten Karimun', 10),
(3, 'Kabupaten Kepulauan Anambas', 10),
(4, 'Kabupaten Lingga', 10),
(5, 'Kabupaten Natuna', 10),
(6, 'Kota Batam', 10),
(7, 'Kota Tanjung Pinang', 10),
(1, 'Kabupaten Lebak', 11),
(2, 'Kabupaten Pandeglang', 11),
(3, 'Kabupaten Serang', 11),
(4, 'Kabupaten Tangerang', 11),
(5, 'Kota Cilegon', 11),
(6, 'Kota Serang', 11),
(7, 'Kota Tangerang', 11),
(8, 'Kota Tangerang Selatan', 11),
(1, 'Kabupaten Bandung', 12),
(2, 'Kabupaten Bandung Barat', 12),
(3, 'Kabupaten Bekasi', 12),
(4, 'Kabupaten Bogor', 12),
(5, 'Kabupaten Ciamis', 12),
(6, 'Kabupaten Cianjur', 12),
(7, 'Kabupaten Cirebon', 12),
(8, 'Kabupaten Garut', 12),
(9, 'Kabupaten Indramayu', 12),
(10, 'Kabupaten Karawang', 12),
(11, 'Kabupaten Kuningan', 12),
(12, 'Kabupaten Majalengka', 12),
(13, 'Kabupaten Purwakarta', 12),
(14, 'Kabupaten Subang', 12),
(15, 'Kabupaten Sukabumi', 12),
(16, 'Kabupaten Sumedang', 12),
(17, 'Kabupaten Tasikmalaya', 12),
(18, 'Kota Bandung', 12),
(19, 'Kota Banjar', 12),
(20, 'Kota Bekasi', 12),
(21, 'Kota Bogor', 12),
(22, 'Kota Cimahi', 12),
(23, 'Kota Cirebon', 12),
(24, 'Kota Depok', 12),
(25, 'Kota Sukabumi', 12),
(26, 'Kota Tasikmalaya', 12),
(1, 'Kabupaten Administrasi Kepulauan Seribu', 13),
(2, 'Kota Administrasi Jakarta Barat', 13),
(3, 'Kota Administrasi Jakarta Pusat', 13),
(4, 'Kota Administrasi Jakarta Selatan', 13),
(5, 'Kota Administrasi Jakarta Timur', 13),
(6, 'Kota Administrasi Jakarta Utara', 13),
(1, 'Kabupaten Banjarnegara', 14),
(2, 'Kabupaten Banyumas', 14),
(3, 'Kabupaten Batang', 14),
(4, 'Kabupaten Blora', 14),
(5, 'Kabupaten Boyolali', 14),
(6, 'Kabupaten Brebes', 14),
(7, 'Kabupaten Cilacap', 14),
(8, 'Kabupaten Demak', 14),
(9, 'Kabupaten Grobogan', 14),
(10, 'Kabupaten Jepara', 14),
(11, 'Kabupaten Karanganyar', 14),
(12, 'Kabupaten Kebumen', 14),
(13, 'Kabupaten Kendal', 14),
(14, 'Kabupaten Klaten', 14),
(15, 'Kabupaten Kudus', 14),
(16, 'Kabupaten Magelang', 14),
(17, 'Kabupaten Pati', 14),
(18, 'Kabupaten Pekalongan', 14),
(19, 'Kabupaten Pemalang', 14),
(20, 'Kabupaten Purbalingga', 14),
(21, 'Kabupaten Purworejo', 14),
(22, 'Kabupaten Rembang', 14),
(23, 'Kabupaten Semarang', 14),
(24, 'Kabupaten Sragen', 14),
(25, 'Kabupaten Sukoharjo', 14),
(26, 'Kabupaten Tegal', 14),
(27, 'Kabupaten Temanggung', 14),
(28, 'Kabupaten Wonogiri', 14),
(29, 'Kabupaten Wonosobo', 14),
(30, 'Kota Magelang', 14),
(31, 'Kota Pekalongan', 14),
(32, 'Kota Salatiga', 14),
(33, 'Kota Semarang', 14),
(34, 'Kota Surakarta', 14),
(35, 'Kota Tegal', 14),
(1, 'Kabupaten Bangkalan', 15),
(2, 'Kabupaten Banyuwangi', 15),
(3, 'Kabupaten Blitar', 15),
(4, 'Kabupaten Bojonegoro', 15),
(5, 'Kabupaten Bondowoso', 15),
(6, 'Kabupaten Gresik', 15),
(7, 'Kabupaten Jember', 15),
(8, 'Kabupaten Jombang', 15),
(9, 'Kabupaten Kediri', 15),
(10, 'Kabupaten Lamongan', 15),
(11, 'Kabupaten Lumajang', 15),
(12, 'Kabupaten Madiun', 15),
(13, 'Kabupaten Magetan', 15),
(14, 'Kabupaten Malang', 15),
(15, 'Kabupaten Mojokerto', 15),
(16, 'Kabupaten Nganjuk', 15),
(17, 'Kabupaten Ngawi', 15),
(18, 'Kabupaten Pacitan', 15),
(19, 'Kabupaten Pamekasan', 15),
(20, 'Kabupaten Pasuruan', 15),
(21, 'Kabupaten Ponorogo', 15),
(22, 'Kabupaten Probolinggo', 15),
(23, 'Kabupaten Sampang', 15),
(24, 'Kabupaten Sidoarjo', 15),
(25, 'Kabupaten Situbondo', 15),
(26, 'Kabupaten Sumenep', 15),
(27, 'Kabupaten Trenggalek', 15),
(28, 'Kabupaten Tuban', 15),
(29, 'Kabupaten Tulungagung', 15),
(30, 'Kota Batu', 15),
(31, 'Kota Blitar', 15),
(32, 'Kota Kediri', 15),
(33, 'Kota Madiun', 15),
(34, 'Kota Malang', 15),
(35, 'Kota Mojokerto', 15),
(36, 'Kota Pasuruan', 15),
(37, 'Kota Probolinggo', 15),
(38, 'Kota Surabaya', 15),
(1, 'Kabupaten Bantul', 16),
(2, 'Kabupaten Gunung Kidul', 16),
(3, 'Kabupaten Kulon Progo', 16),
(4, 'Kabupaten Sleman', 16),
(5, 'Kota Yogyakarta', 16),
(1, 'Kabupaten Badung', 17),
(2, 'Kabupaten Bangli', 17),
(3, 'Kabupaten Buleleng', 17),
(4, 'Kabupaten Gianyar', 17),
(5, 'Kabupaten Jembrana', 17),
(6, 'Kabupaten Karangasem', 17),
(7, 'Kabupaten Klungkung', 17),
(8, 'Kabupaten Tabanan', 17),
(9, 'Kota Denpasar', 17),
(1, 'Kabupaten Bima', 18),
(2, 'Kabupaten Dompu', 18),
(3, 'Kabupaten Lombok Barat', 18),
(4, 'Kabupaten Lombok Tengah', 18),
(5, 'Kabupaten Lombok Timur', 18),
(6, 'Kabupaten Lombok Utara', 18),
(7, 'Kabupaten Sumbawa', 18),
(8, 'Kabupaten Sumbawa Barat', 18),
(9, 'Kota Bima', 18),
(10, 'Kota Mataram', 18),
(1, 'Kabupaten Kupang', 19),
(2, 'Kabupaten Timor Tengah Selatan', 19),
(3, 'Kabupaten Timor Tengah Utara', 19),
(4, 'Kabupaten Belu', 19),
(5, 'Kabupaten Alor', 19),
(6, 'Kabupaten Flores Timur', 19),
(7, 'Kabupaten Sikka', 19),
(8, 'Kabupaten Ende', 19),
(9, 'Kabupaten Ngada', 19),
(10, 'Kabupaten Manggarai', 19),
(11, 'Kabupaten Sumba Timur', 19),
(12, 'Kabupaten Sumba Barat', 19),
(13, 'Kabupaten Lembata', 19),
(14, 'Kabupaten Rote Ndao', 19),
(15, 'Kabupaten Manggarai Barat', 19),
(16, 'Kabupaten Nagekeo', 19),
(17, 'Kabupaten Sumba Tengah', 19),
(18, 'Kabupaten Sumba Barat Daya', 19),
(19, 'Kabupaten Manggarai Timur', 19),
(20, 'Kabupaten Sabu Raijua', 19),
(21, 'Kota Kupang', 19),
(1, 'Kabupaten Bengkayang', 20),
(2, 'Kabupaten Kapuas Hulu', 20),
(3, 'Kabupaten Kayong Utara', 20),
(4, 'Kabupaten Ketapang', 20),
(5, 'Kabupaten Kubu Raya', 20),
(6, 'Kabupaten Landak', 20),
(7, 'Kabupaten Melawi', 20),
(8, 'Kabupaten Pontianak', 20),
(9, 'Kabupaten Sambas', 20),
(10, 'Kabupaten Sanggau', 20),
(11, 'Kabupaten Sekadau', 20),
(12, 'Kabupaten Sintang', 20),
(13, 'Kota Pontianak', 20),
(14, 'Kota Singkawang', 20),
(1, 'Kabupaten Balangan', 21),
(2, 'Kabupaten Banjar', 21),
(3, 'Kabupaten Barito Kuala', 21),
(4, 'Kabupaten Hulu Sungai Selatan', 21),
(5, 'Kabupaten Hulu Sungai Tengah', 21),
(6, 'Kabupaten Hulu Sungai Utara', 21),
(7, 'Kabupaten Kotabaru', 21),
(8, 'Kabupaten Tabalong', 21),
(9, 'Kabupaten Tanah Bumbu', 21),
(10, 'Kabupaten Tanah Laut', 21),
(11, 'Kabupaten Tapin', 21),
(12, 'Kota Banjarbaru', 21),
(13, 'Kota Banjarmasin', 21),
(1, 'Kabupaten Barito Selatan', 22),
(2, 'Kabupaten Barito Timur', 22),
(3, 'Kabupaten Barito Utara', 22),
(4, 'Kabupaten Gunung Mas', 22),
(5, 'Kabupaten Kapuas', 22),
(6, 'Kabupaten Katingan', 22),
(7, 'Kabupaten Kotawaringin Barat', 22),
(8, 'Kabupaten Kotawaringin Timur', 22),
(9, 'Kabupaten Lamandau', 22),
(10, 'Kabupaten Murung Raya', 22),
(11, 'Kabupaten Pulang Pisau', 22),
(12, 'Kabupaten Sukamara', 22),
(13, 'Kabupaten Seruyan', 22),
(14, 'Kota Palangka Raya', 22),
(1, 'Kabupaten Berau', 23),
(2, 'Kabupaten Bulungan', 23),
(3, 'Kabupaten Kutai Barat', 23),
(4, 'Kabupaten Kutai Kartanegara', 23),
(5, 'Kabupaten Kutai Timur', 23),
(6, 'Kabupaten Malinau', 23),
(8, 'Kabupaten Paser', 23),
(9, 'Kabupaten Penajam Paser Utara', 23),
(10, 'Kabupaten Tana Tidung', 23),
(11, 'Kota Balikpapan', 23),
(12, 'Kota Bontang', 23),
(13, 'Kota Samarinda', 23),
(14, 'Kota Tarakan', 23),
(7, 'Kabupaten Nunukan', 24),
(1, 'Kabupaten Boalemo', 25),
(2, 'Kabupaten Bone Bolango', 25),
(3, 'Kabupaten Gorontalo', 25),
(4, 'Kabupaten Gorontalo Utara', 25),
(5, 'Kabupaten Pohuwato', 25),
(6, 'Kota Gorontalo', 25),
(1, 'Kabupaten Bantaeng', 26),
(2, 'Kabupaten Barru', 26),
(3, 'Kabupaten Bone', 26),
(4, 'Kabupaten Bulukumba', 26),
(5, 'Kabupaten Enrekang', 26),
(6, 'Kabupaten Gowa', 26),
(7, 'Kabupaten Jeneponto', 26),
(8, 'Kabupaten Kepulauan Selayar', 26),
(9, 'Kabupaten Luwu', 26),
(10, 'Kabupaten Luwu Timur', 26),
(11, 'Kabupaten Luwu Utara', 26),
(12, 'Kabupaten Maros', 26),
(13, 'Kabupaten Pangkajene dan Kepulauan', 26),
(14, 'Kabupaten Pinrang', 26),
(15, 'Kabupaten Sidenreng Rappang', 26),
(16, 'Kabupaten Sinjai', 26),
(17, 'Kabupaten Soppeng', 26),
(18, 'Kabupaten Takalar', 26),
(19, 'Kabupaten Tana Toraja', 26),
(20, 'Kabupaten Toraja Utara', 26),
(21, 'Kabupaten Wajo', 26),
(22, 'Kota Makassar', 26),
(23, 'Kota Palopo', 26),
(24, 'Kota Parepare', 26),
(1, 'Kabupaten Bombana', 27),
(2, 'Kabupaten Buton', 27),
(3, 'Kabupaten Buton Utara', 27),
(4, 'Kabupaten Kolaka', 27),
(5, 'Kabupaten Kolaka Utara', 27),
(6, 'Kabupaten Konawe', 27),
(7, 'Kabupaten Konawe Selatan', 27),
(8, 'Kabupaten Konawe Utara', 27),
(9, 'Kabupaten Muna', 27),
(10, 'Kabupaten Wakatobi', 27),
(11, 'Kota Bau-Bau', 27),
(12, 'Kota Kendari', 27),
(1, 'Kabupaten Banggai', 28),
(2, 'Kabupaten Banggai Kepulauan', 28),
(3, 'Kabupaten Buol', 28),
(4, 'Kabupaten Donggala', 28),
(5, 'Kabupaten Morowali', 28),
(6, 'Kabupaten Parigi Moutong', 28),
(7, 'Kabupaten Poso', 28),
(8, 'Kabupaten Tojo Una-Una', 28),
(9, 'Kabupaten Toli-Toli', 28),
(10, 'Kabupaten Sigi', 28),
(11, 'Kota Palu', 28),
(1, 'Kabupaten Bolaang Mongondow', 29),
(2, 'Kabupaten Bolaang Mongondow Selatan', 29),
(3, 'Kabupaten Bolaang Mongondow Timur', 29),
(4, 'Kabupaten Bolaang Mongondow Utara', 29),
(5, 'Kabupaten Kepulauan Sangihe', 29),
(6, 'Kabupaten Kepulauan Siau Tagulandang Biaro', 29),
(7, 'Kabupaten Kepulauan Talaud', 29),
(8, 'Kabupaten Minahasa', 29),
(9, 'Kabupaten Minahasa Selatan', 29),
(10, 'Kabupaten Minahasa Tenggara', 29),
(11, 'Kabupaten Minahasa Utara', 29),
(12, 'Kota Bitung', 29),
(13, 'Kota Kotamobagu', 29),
(14, 'Kota Manado', 29),
(15, 'Kota Tomohon', 29),
(1, 'Kabupaten Majene', 30),
(2, 'Kabupaten Mamasa', 30),
(3, 'Kabupaten Mamuju', 30),
(4, 'Kabupaten Mamuju Utara', 30),
(5, 'Kabupaten Polewali Mandar', 30),
(1, 'Kabupaten Buru', 31),
(2, 'Kabupaten Buru Selatan', 31),
(3, 'Kabupaten Kepulauan Aru', 31),
(4, 'Kabupaten Maluku Barat Daya', 31),
(5, 'Kabupaten Maluku Tengah', 31),
(6, 'Kabupaten Maluku Tenggara', 31),
(7, 'Kabupaten Maluku Tenggara Barat', 31),
(8, 'Kabupaten Seram Bagian Barat', 31),
(9, 'Kabupaten Seram Bagian Timur', 31),
(10, 'Kota Ambon', 31),
(11, 'Kota Tual', 31),
(1, 'Kabupaten Halmahera Barat', 32),
(2, 'Kabupaten Halmahera Tengah', 32),
(3, 'Kabupaten Halmahera Utara', 32),
(4, 'Kabupaten Halmahera Selatan', 32),
(5, 'Kabupaten Kepulauan Sula', 32),
(6, 'Kabupaten Halmahera Timur', 32),
(7, 'Kabupaten Pulau Morotai', 32),
(8, 'Kota Ternate', 32),
(9, 'Kota Tidore Kepulauan', 32),
(1, 'Kabupaten Asmat', 33),
(2, 'Kabupaten Biak Numfor', 33),
(3, 'Kabupaten Boven Digoel', 33),
(4, 'Kabupaten Deiyai', 33),
(5, 'Kabupaten Dogiyai', 33),
(6, 'Kabupaten Intan Jaya', 33),
(7, 'Kabupaten Jayapura', 33),
(8, 'Kabupaten Jayawijaya', 33),
(9, 'Kabupaten Keerom', 33),
(10, 'Kabupaten Kepulauan Yapen', 33),
(11, 'Kabupaten Lanny Jaya', 33),
(12, 'Kabupaten Mamberamo Raya', 33),
(13, 'Kabupaten Mamberamo Tengah', 33),
(14, 'Kabupaten Mappi', 33),
(15, 'Kabupaten Merauke', 33),
(16, 'Kabupaten Mimika', 33),
(17, 'Kabupaten Nabire', 33),
(18, 'Kabupaten Nduga', 33),
(19, 'Kabupaten Paniai', 33),
(20, 'Kabupaten Pegunungan Bintang', 33),
(21, 'Kabupaten Puncak', 33),
(22, 'Kabupaten Puncak Jaya', 33),
(23, 'Kabupaten Sarmi', 33),
(24, 'Kabupaten Supiori', 33),
(25, 'Kabupaten Tolikara', 33),
(26, 'Kabupaten Waropen', 33),
(27, 'Kabupaten Yahukimo', 33),
(28, 'Kabupaten Yalimo', 33),
(29, 'Kota Jayapura', 33),
(1, 'Kabupaten Fakfak', 34),
(2, 'Kabupaten Kaimana', 34),
(3, 'Kabupaten Manokwari', 34),
(4, 'Kabupaten Maybrat', 34),
(5, 'Kabupaten Raja Ampat', 34),
(6, 'Kabupaten Sorong', 34),
(7, 'Kabupaten Sorong Selatan', 34),
(8, 'Kabupaten Tambrauw', 34),
(9, 'Kabupaten Teluk Bintuni', 34),
(10, 'Kabupaten Teluk Wondama', 34),
(11, 'Kota Sorong', 34),
(1, 'Seoul', 35),
(2, 'Pusan', 35),
(3, 'Taegu', 35),
(4, 'Taejon', 35),
(5, 'Kwangju', 35),
(6, 'Suwon', 35),
(7, 'Songnam', 35),
(8, 'Ulsan', 35),
(9, 'Chonju', 35),
(10, 'Ansan', 35),
(11, 'Anyang', 35),
(12, 'Uijongbu', 35),
(13, 'Kwangmyong', 35),
(14, 'Kimhae', 35),
(15, 'Masan', 35),
(16, 'Yosu', 35),
(17, 'Cheju', 35),
(18, 'Chinju', 35),
(19, 'Kumi', 35),
(20, 'Iksan', 35),
(21, 'Kunsan', 35),
(22, 'Wonju', 35),
(23, 'Kuri', 35),
(24, 'Kangnung', 35),
(25, 'Osan', 35),
(26, 'Kyongju', 35),
(27, 'Hanam', 35),
(28, 'Chinhae', 35),
(29, 'Kyongsan', 35),
(30, 'Andong', 35),
(31, 'Hwado', 35),
(32, 'Tonghae', 35),
(33, 'Asan', 35),
(34, 'Wabu', 35),
(35, 'Namyangju', 35),
(36, 'Kwangyang', 35),
(37, 'Yongju', 35),
(38, 'Ungsang', 35),
(39, 'Sinhyon', 35),
(40, 'Kwangju', 35),
(41, 'Naeso', 35),
(42, 'Sosan', 35),
(43, 'Kongju', 35),
(44, 'Koje', 35),
(45, 'Yangsan', 35),
(46, 'Ansong', 35),
(47, 'Hwawon', 35),
(48, 'Pubal', 35),
(49, 'Poryong', 35),
(50, 'Hwasun', 35),
(51, 'Namwon', 35),
(52, 'Sangju', 35),
(53, 'Miryang', 35),
(54, 'Taebaek', 35),
(55, 'Kimje', 35),
(56, 'Nonsan', 35),
(57, 'Munsan', 35),
(58, 'Kijang', 35),
(59, 'Naju', 35),
(60, 'Yonil', 35),
(61, 'Hayang', 35),
(62, 'Yesan', 35),
(63, 'Hongsong', 35),
(64, 'Yoju', 35),
(65, 'Hunghae', 35),
(66, 'Tangjin', 35),
(67, 'Puyo', 35),
(68, 'Waegwan', 35),
(69, 'Songhwan', 35),
(70, 'Chinyong', 35),
(71, 'Kosong', 35),
(72, 'Kanghwa', 35),
(73, 'Yongwol', 35),
(74, 'Kumsan', 35),
(75, 'Yonmu', 35),
(76, 'Yongdong', 35),
(77, 'Haenam', 35),
(78, 'Aewol-li', 35),
(79, 'Taesan', 35),
(80, 'Puan', 35),
(81, 'Sonsan', 35),
(82, 'Yonggwang', 35),
(83, 'Polgyo', 35);

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `id_donate` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `value` text NOT NULL,
  `donatetype` varchar(50) NOT NULL,
  `dateadded` varchar(10) NOT NULL,
  `donationstatus` int(11) NOT NULL,
  PRIMARY KEY (`id_donate`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id_donate`, `id_user`, `id_project`, `value`, `donatetype`, `dateadded`, `donationstatus`) VALUES
(1, 12, 1, '121212', 'uang', '01/02/2016', 0),
(2, 12, 2, '111222', 'uang', '11/03/2016', 0),
(3, 12, 2, 'memancing, menjala ikan, menyelam', 'tenaga', '22/02/2016', 0),
(4, 12, 3, 'Baju Baru', 'barang', '11/03/2016', 0),
(5, 12, 3, 'pakaian layak pakai', 'barang', '13/03/2016', 0),
(6, 19, 1, '2', 'tenaga', '23/03/2016', 0),
(7, 19, 2, '500000', 'uang', '11/02/2016', 0),
(8, 19, 4, '1000000', 'uang', '02/03/2016', 0),
(9, 13, 1, '6', 'uang', '01/03/2016', 0),
(10, 12, 6, '20000000', 'uang', '13/03/2016', 0),
(11, 19, 5, 'manusia', 'tenaga', '14/03/2016', 0),
(12, 19, 8, '1500000', 'uang', '14/03/2016', 0),
(13, 13, 7, '10000000', 'uang', '14/03/2016', 0),
(14, 13, 6, '1000000', 'uang', '14/03/2016', 1),
(15, 13, 8, '10000', 'uang', '14/03/2016', 0),
(16, 13, 1, '', 'barang', '23/03/2016', 0),
(17, 13, 1, 'test', 'tenaga', '24/03/2016', 0),
(18, 13, 6, '10000', 'uang', '24/03/2016', 0),
(19, 21, 10, 'ddrfg', 'barang', '31/03/2016', 0),
(20, 21, 10, '5456566', 'uang', '31/03/2016', 0),
(21, 21, 10, '454543', 'uang', '31/03/2016', 0),
(22, 21, 1, 'komputer, pengajar, ngaduk semen', 'tenaga', '31/03/2016', 0),
(23, 21, 1, '33333', 'uang', '31/03/2016', 0),
(24, 12, 8, '3000000', 'uang', '01/06/2016', 0),
(25, 12, 7, '100000', 'uang', '01/06/2016', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donate_money`
--

CREATE TABLE IF NOT EXISTS `donate_money` (
  `id_dm` int(11) NOT NULL AUTO_INCREMENT,
  `id_donate` int(11) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `atasnama` varchar(100) NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`id_dm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `donate_money`
--

INSERT INTO `donate_money` (`id_dm`, `id_donate`, `bank`, `atasnama`, `catatan`) VALUES
(1, 2, 'BCA', 'Esha', 'haloo'),
(2, 7, 'Mandiri', 'Maulida ', 'test'),
(3, 8, 'BRI', 'Zaraveer', '-'),
(4, 9, 'fadf', 'fadf', 'adf'),
(5, 10, 'BCA', 'Paijo', 'heheheh'),
(6, 12, 'Mandiri', 'Maulida ', 'jsksjds'),
(7, 13, 'fadf', 'fadf', ''),
(8, 14, 'fdsf', 'afdf', ''),
(9, 15, '1', '1', ''),
(10, 18, '', '', ''),
(11, 20, 'kjkmk', 'kllklk', 'klljk'),
(12, 21, 'tyrthfg', 'ghgfh', 'hnhgj'),
(13, 23, 'fefre', 'fcvfdv', 'cfdv'),
(14, 24, 'BCA', 'Paijo', ''),
(15, 25, 'BCA', 'Paijo', 'heheheh');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name_project` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `datefrom` varchar(10) NOT NULL,
  `dateto` varchar(10) NOT NULL,
  `cost` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `summary` text NOT NULL,
  `objective` text NOT NULL,
  `reason` text NOT NULL,
  `goal` text NOT NULL,
  `details` text NOT NULL,
  `projectphoto` varchar(50) NOT NULL DEFAULT 'none',
  `projectadded` varchar(10) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `id_user`, `name_project`, `category`, `datefrom`, `dateto`, `cost`, `province`, `city`, `summary`, `objective`, `reason`, `goal`, `details`, `projectphoto`, `projectadded`, `slug`, `status`) VALUES
(1, 12, 'Pensi SMA', 2, '02/10/2016', '02/18/2016', 1000000, 5, 5, 'asdasd', 'asda sda sd asd asd', 'a sdasdasda s', 'as dsd asd asd', 'asd asd asd asdasd asd asd asd asd asd asd asd&nbsp;', 'none', '', 'pensi-sma', 2),
(2, 12, 'Majukan Bangsa', 1, '03/09/2016', '04/09/2016', 2000000, 13, 3, 'Summary', 'tujuan', 'alasan utama', 'pencapaiannya adalah', 'setiap orang harus menabung di bang', 'none', '', 'majukan-bangsa', 1),
(3, 12, 'asda sdas dasd as', 2, '02/27/2016', '03/04/2016', 100000, 4, 3, 'asdasdas ', 'as asd asd a sd asd', 'a sda sd asd asd ', 'a sd asdasxasdas c', 'asda sdasdf asdas dasd asd asd asdasd', 'none', '', 'asda-sdas-dasd-as', 0),
(4, 12, 'xzcdas dasd', 2, '03/01/2016', '03/05/2016', 123123, 7, 14, 'asda sasd asd asd', 'asd asdasdasdasda', 'asd asdasd as', 'asdasda sdasdasda ', 'asd asda sd asd asda s dasd as', 'none', '', 'xzcdas-dasd', 0),
(5, 19, 'test', 2, '03/07/2016', '03/11/2016', 5000000, 16, 5, 'sadasadasdas', 'asdsdfdfd', 'dfdfsdff', 'zdffdfdfdfd', 'sadaadfdfdfdsfsdfsffdddsfsdfsgff', 'none', '', 'test', 0),
(6, 13, 'Pembangunan Desa binaan', 1, '04/05/2016', '04/15/2016', 1000000, 26, 1, 'Melakukan yang terbaik', 'Melakukan Yang terbaik', ' adf', ' adf', 'adfadfsdf', 'none', '', 'pembangunan-desa-binaan', 1),
(7, 19, 'Pembangunan Jembatan', 1, '04/05/2016', '04/07/2016', 2000000, 15, 3, 'asdasd asd asd adfdas dasd ', 'asdasda dsd', 'asdasdka;skdlk;ams daslkdm alksd ', 'sad asd asd asd asd ', 'hehehehe hahahaha huhuhuhu<br>', 'none', '13/03/2016', 'pembangunan-jembatan', 1),
(8, 19, 'Writing project', 1, '03/14/2016', '03/31/2016', 5000000, 14, 30, 'project menulis', 'menulis', 'menulis', 'satu tulisan', 'menulis menulis menulis', 'none', '14/03/2016', 'writing-project', 1),
(9, 12, 'Berapa 1 + 1 = 2 hayo?', 2, '03/22/2016', '03/26/2016', 1000000, 5, 7, 'hashdakjsdh kjasdhkja shdk', ' askjdh akjsdh akjsdh kjahsd', 'jjakddha kjsdhkjahsdasd', 'j hskaj ljlaskdasdasd asd asd', 'kjjahkdha sku hk jasj &nbsp;ha jh hjaskj dhaksjda', 'none', '22/03/2016', 'berapa-1-1-2-hayo', 0),
(10, 21, 'cx', 1, '03/07/2016', '04/11/2016', 1286, 19, 2, 'dfsvff', 'cdvfdf', 'dvdfvgdfg', 'dfghb', 'rewtret', 'none', '31/03/2016', 'cx', 1),
(11, 13, 'fadf', 2, '06/09/2016', '07/15/2016', 100000, 4, 3, 'fadf', 'adf', 'adf', 'adf', 'adfadf', 'none', '01/06/2016', 'fadf', 0),
(14, 12, 'Pembangunan Jembatan', 2, '06/07/2016', '06/09/2016', 1000000, 4, 6, 'asda sd asd asda s', 'da sd asd asd', ' asd asd as', 'd asd asd asd d', 'asda sd asd asd asd as qfadf asdf asd asd aczxcqsda<br>', 'ad402f3970be24001de848b80cc35a27.jpg', '03/06/2016', 'pembangunan-jembatan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projectcategory`
--

CREATE TABLE IF NOT EXISTS `projectcategory` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(100) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `projectcategory`
--

INSERT INTO `projectcategory` (`id_category`, `name_category`) VALUES
(1, 'Sosial'),
(2, 'Kesehatan'),
(3, 'Produk & Teknologi'),
(4, 'Pendidikan'),
(5, 'Event'),
(6, 'Lingkungan'),
(7, 'Infrastruktur'),
(8, 'Inspirasi'),
(9, 'Sedekah');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `id_province` int(11) NOT NULL AUTO_INCREMENT,
  `name_province` varchar(50) NOT NULL,
  PRIMARY KEY (`id_province`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id_province`, `name_province`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'Bengkulu'),
(4, 'Jambi'),
(5, 'Riau'),
(6, 'Sumatera Barat'),
(7, 'Sumatera Selatan'),
(8, 'Lampung'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Kepulauan Riau'),
(11, 'Banten'),
(12, 'Jawa Barat'),
(13, 'DKI Jakarta'),
(14, 'Jawa Tengah'),
(15, 'Jawa Timur'),
(16, 'Daerah Istimewa Yogyakarta'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Selatan'),
(22, 'Kalimantan Tengah'),
(23, 'Kalimantan Timur'),
(24, 'Kalimantan Utara'),
(25, 'Gorontalo'),
(26, 'Sulawesi Selatan'),
(27, 'Sulawesi Tenggara'),
(28, 'Sulawesi Tengah'),
(29, 'Sulawesi Utara'),
(30, 'Sulawesi Barat'),
(31, 'Maluku'),
(32, 'Maluku Utara'),
(33, 'Papua'),
(34, 'Papua Barat'),
(35, 'Korsel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` char(1) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(10) NOT NULL,
  `province` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `aboutme` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `dob`, `gender`, `profession`, `address`, `country`, `province`, `city`, `aboutme`, `photo`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$zlTlU4vCplYeWbp.olYrx./zuyRb0Hp3NXkhEDiAW1jDMVOlnvmxi', '', 'esha.rama@gmail.com', '', NULL, NULL, NULL, 1268889823, 1464775167, 1, 'Admin', 'istrator', 'ADMIN', '0', '', '', '', '', '', 0, 0, '', ''),
(12, '::1', 'esharamady', '$2y$08$TcR4X3/0WuGOs649dMU82.M0cDaSZuSva0D9r2i6jjOb.qbkeGy9q', NULL, 'esha.rama@gmail.com', NULL, NULL, NULL, NULL, 1453613004, 1464990567, 1, 'Esha', 'Ramadiansyah', NULL, '08564869', '01/24/2016', 'M', 'Programmer', 'Semolowaru', 'korsel', 35, 1, 'Halo, nama saya esha saya suka sekali membaca buku. Bagaimana cara membaca buku? hehehhaha<br>', 'bc081c68f0a1414a4e5ba64e880ba4ea.jpg'),
(13, '210.123.45.220', 'zicoalaia', '$2y$08$IArJENkcFjy3KQ1qfXqhmOqYLG/CWAS5tCzQ09dPA6weVT6B4szGW', NULL, 'zicoalaia@gmail.com', NULL, 'umSEOxDwy6trdapZakZIlOfb08dcf517f6f19a96', 1456127788, NULL, 1455717021, 1464782459, 1, 'zico', 'alaia', NULL, '', '03/16/2016', 'M', 'Mahasiswa', 'Korea', '', 2, 1, '', ''),
(14, '203.250.78.62', 'zaraveer', '$2y$08$Rc94F9pJiB5fhfI126LwT.2e1YfTDWN96Y3.tfNITaw9PwfgzOsZW', NULL, 'maul_zaya@yahoo.co.id', NULL, NULL, NULL, NULL, 1455776214, 1456207162, 1, 'Maulida', 'Mazaya', NULL, '01024012302', '10/12/1989', 'W', 'Student', 'UoU', '', 14, 30, 'Secrets make woman woman!', '35b802065093c66ce8f871de69530e25.jpg'),
(18, '203.250.78.62', 'maulida', '$2y$08$GckxjK0oFpwojkPA8JAh6usA.E44s1w4N.Hi3AhPz0ys9lMK3HBG2', NULL, 'maulidamazaya@gmail,com', NULL, NULL, NULL, NULL, 1457059228, 1457059941, 1, NULL, NULL, NULL, NULL, '', '', '', '', '', 0, 0, '', ''),
(19, '203.250.78.62', 'maulzaya', '$2y$08$X9nd7n87G/vSdcItwarCIOcubVXPSz5PA9RM0N683vDoZBTeoPcqe', NULL, 'maul_zaya@yahoo.co.id', NULL, NULL, NULL, NULL, 1457067654, 1461327967, 1, 'Maulida', 'Mazaya', NULL, '01024012302', '10/12/1989', 'W', 'Student', 'Jl Yos Sudarso Gg Maharani 6 Rt1 Rw1 Kauman, Kota Magelang', '', 14, 30, 'Secret makes woman, woman!', '3309df57d473c8af753c12c451446cb5.jpg'),
(20, '121.88.211.31', 'alaia', '$2y$08$Op8kXeKngaTaBu2kkjmfg.U0D/qPl4McC01i3tyXPqTzwKsKbDT5i', NULL, 'zicoalaia@gmail.com', NULL, NULL, NULL, NULL, 1458136307, 1458137128, 1, NULL, NULL, NULL, NULL, '', '', '', '', '', 0, 0, '', ''),
(21, '210.94.171.102', 'lexior', '$2y$08$Fab4C3a4E78yl0fEs2NhDuAOHM/mrF2W5QZR5xPx32zUyKlS3cz3.', NULL, 'alexsyaekhoni@yahoo.com', NULL, NULL, NULL, NULL, 1459408874, 1459410171, 1, 'sdsfdd', 'jnhkljm', NULL, '55555553455554', '03/09/2016', 'W', 'tfdahyhth nh', ' hghh', '', 3, 2, 'sdscdvfxcvfxv', '456134bc1b7509faa20cf4e7648dad80.jpg'),
(22, '117.17.196.70', 'athoya', '$2y$08$/P2GzVqcC7IJYI.iXC3auuZlXBetKq8tRWXeDhIc9yCbvU5v6FT1a', NULL, 'athoyaa@gmail.com', NULL, NULL, NULL, NULL, 1463380107, 1463380218, 1, NULL, NULL, NULL, NULL, '', '', '', '', '', 0, 0, '', ''),
(38, '36.74.8.228', 'paijo', '$2y$08$Q83J2JnmwxsmoccoVV6NGO.kYxYIW48eesP0gFmXobnXMrI8JUZA.', NULL, 'esha.rama@gmail.com', NULL, NULL, NULL, NULL, 1464332040, 1464448805, 1, NULL, NULL, NULL, NULL, '', '', '', '', '', 0, 0, '', ''),
(39, '210.123.45.220', 'zicoalaia1', '$2y$08$Nu4sYP1sTWojcNBjRYg3pOkpfWkkZSFacdoWRcej0F0QC1MH426Fe', NULL, 'zicoalaia@gmail.com', 'a2eee1e4c3576c00e4733090dd88a9b12eda3c07', NULL, NULL, NULL, 1464782428, NULL, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(13, 12, 2),
(14, 13, 2),
(15, 14, 2),
(19, 18, 2),
(20, 19, 2),
(21, 20, 2),
(22, 21, 2),
(23, 22, 2),
(39, 38, 2),
(40, 39, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
