-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2022 pada 16.54
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fakultas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kelamin` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konfigurasi`
--

CREATE TABLE `tb_konfigurasi` (
  `id` int(11) NOT NULL,
  `nama_web` varchar(128) DEFAULT NULL,
  `icon_web` varchar(255) DEFAULT NULL,
  `created_at` varchar(128) DEFAULT NULL,
  `updated_at` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_konfigurasi`
--

INSERT INTO `tb_konfigurasi` (`id`, `nama_web`, `icon_web`, `created_at`, `updated_at`) VALUES
(1, 'Universitas Cokroaminoto Palopo', '72772c46339b9175b01417d5ad0130b1.png', '07 Apr 2022', '05 Aug 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `created_at` varchar(128) DEFAULT NULL,
  `updated_at` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(100) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `kelamin` varchar(128) DEFAULT NULL,
  `semester` varchar(128) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nim`, `nama`, `kelamin`, `semester`, `alamat`, `user_id`) VALUES
(2, '1504411060', 'Adi Murdayani', 'Laki-Laki', 'Semester II', 'Palopo', 1),
(3, '1504411061', 'Faktor Lingkungan', 'Perempuan', 'Semester I', 'Palopo', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sejarah`
--

CREATE TABLE `tb_sejarah` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` varchar(128) DEFAULT NULL,
  `updated_at` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sejarah`
--

INSERT INTO `tb_sejarah` (`id`, `judul`, `isi`, `slug`, `created_at`, `updated_at`) VALUES
(5, 'Sejarah', '<div style=\"text-align: justify;\"><span style=\"color: rgb(68, 68, 68); font-family: &quot;Ubuntu Regular&quot;;\">Universitas Cokroaminoto Palopo (UNCP) yang populer dengan nama Uncokro Palopo berdiri sejak 1 Maret 1967. Perguruan Tinggi ini pada awalnya dibina oleh Yayasan Perguruan Tinggi Cokroaminoto Makassar berdasarkan Akte Notaris Nomor: 33 Tanggal 16 Mei 1986 oleh Notaris M.G. Ohorella, S.H. dengan nama Fakultas Keguruan dan Ilmu Pendidikan (FKIP) Universitas Cokroaminoto Makassar filial Pinrang, yang selanjutnya pada tanggal 24 Januari 1976 diubah menjadi Sekolah Tinggi Keguruan dan Ilmu Pendidikan (STKIP) Cokroaminoto Palopo berdasarkan Surat Keputusan Koordinator Kopertis Wilayah VII Sulawesi, Maluku dan Irian Jaya Nomor: II Tahun 1976 Tanggal 24 Januari 1976. Pada tahun 1995, Yayasan Perguruan Tinggi Cokroaminoto Palopo juga membuka Sekolah Tinggi Ilmu Pertanian (STIPER) Cokroaminoto Palopo berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan Nomor: 014/D/O/1995 Tanggal 23 Februari 1995. Dalam perkembangan selanjutnya, yakni pada tahun 2005, STKIP Cokroaminoto Palopo dan STIPER Cokroaminoto Palopo bergabung dan berubah bentuk menjadi Universitas Cokroaminoto Palopo berdasarkan Surat Keputusan Menteri Pendidikan Nasional Republik Indonesia Nomor 95/D/O/2005 tanggal 6 Juli 2005.</span><br></div>', 'sejarah', '21 Apr 2022', '06 Aug 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tentang`
--

CREATE TABLE `tb_tentang` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` varchar(128) DEFAULT NULL,
  `updated_at` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tentang`
--

INSERT INTO `tb_tentang` (`id`, `judul`, `isi`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Fakultas Teknik Komputer (FTKom)', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: \" ubuntu=\"\" regular\";=\"\" color:=\"\" rgb(68,=\"\" 68,=\"\" 68);=\"\" padding-top:=\"\" 0px=\"\" !important;\"=\"\"><span style=\"color: rgb(68, 68, 68); font-family: &quot;Ubuntu Regular&quot;; text-align: justify;\">Fakultas Teknik Komputer (FTKom) merupakan salah satu dari empat fakultas yang ada dalam lingkungan Universitas Cokroaminoto Palopo (UNCP). Dasar penyelenggaraan FTKom adalah SK Menteri Pendidikan Nasional No. 95/D/O/2005 tanggal 6 Juli 2005, bersamaan dengan peningkatan status dari Sekolah Tinggi Keguruan dan Ilmu Pendidikan (STKIP) Cokroaminoto Palopo menjadi Universitas Cokroaminoto Palopo (UNCP). FTKom pada saat dibentuk sampai sekarang membina satu program studi yaitu program studi teknik informatika. Walaupun hanya membina satu program studi, telah dibentuk dua konsentrasi yaitu: rekayasa perangkat lunak dan jaringan komputer yang tercermin pada mata kuliah pilihan yang disediakan. Di usia yang sudah mencapai sepuluh tahun, fakultas ini terus berupaya dan berbedah diri untuk mewujudkan visi, misi dan tujuan fakultas secara komprehensif melalui pelaksanaan tridharma perguruan tinggi.</span><br></p>', 'fakultas-teknik-komputer-ftkom', '17 Apr 2022', '06 Aug 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visimisi`
--

CREATE TABLE `tb_visimisi` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` varchar(128) DEFAULT NULL,
  `updated_at` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_visimisi`
--

INSERT INTO `tb_visimisi` (`id`, `judul`, `isi`, `slug`, `created_at`, `updated_at`) VALUES
(5, 'Visi dan Misi', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Ubuntu Regular&quot;; color: rgb(68, 68, 68); text-align: justify; padding-top: 0px !important;\"><strong style=\"font-weight: bold;\">Visi</strong></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Ubuntu Regular&quot;; color: rgb(68, 68, 68); text-align: justify; padding-top: 0px !important;\">Terwujudnya fakultas teknik komputer yang unggul secara nasional tahun 2020 dan menghasilkan luaran yang profesional dan berkarakter</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Ubuntu Regular&quot;; color: rgb(68, 68, 68); text-align: justify; padding-top: 0px !important;\"><strong style=\"font-weight: bold;\">Misi</strong></p><ol style=\"margin: 15px 0px; padding-left: 30px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; text-align: justify;\"><li>Menyelenggarakan pendidikan dan pengajaran, penelitian dan pengabdian masyarakat dalam bidang teknik komputer yang berdaya saing dan sesuai dengan kebutuhan stakeholder.</li><li>Menghasilkan luaran yang memiliki bakal keahlian sesuai dengan kompetensi yang dimilikinya.</li><li>Menyiapkan luaran yang berkarakter dan berwawasan global, sehingga dipercaya untuk mengemban amanat pembangunan nasional.</li></ol>', 'visi-dan-misi', '21 Apr 2022', '06 Aug 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visitor`
--

CREATE TABLE `tb_visitor` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `os` varchar(128) DEFAULT NULL,
  `browser` varchar(128) DEFAULT NULL,
  `versi` varchar(128) DEFAULT NULL,
  `online` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_visitor`
--

INSERT INTO `tb_visitor` (`id`, `ip`, `date`, `hits`, `os`, `browser`, `versi`, `online`, `time`) VALUES
(1, '::1', '2022-04-11', 6, NULL, NULL, NULL, '1649674598', '2022-04-11 05:54:30'),
(2, '::1', '2022-05-08', 2, NULL, NULL, NULL, '1651999235', '2022-05-08 15:40:27'),
(3, '::1', '2022-05-09', 2, NULL, NULL, NULL, '1652089034', '2022-05-09 16:37:07'),
(4, '::1', '2022-05-10', 2, NULL, NULL, NULL, '1652157804', '2022-05-10 11:43:15'),
(5, '::1', '2022-05-12', 31, NULL, NULL, NULL, '1652331680', '2022-05-12 09:18:24'),
(6, '::1', '2022-05-17', 17, 'Windows 10', 'Chrome', '101.0.4951.54', '1652780843', '2022-05-17 16:05:58'),
(7, '::1', '2022-05-18', 4, 'Windows 10', 'Chrome', '101.0.4951.54', '1652867960', '2022-05-18 16:37:17'),
(8, '::1', '2022-05-19', 8, 'Windows 10', 'Chrome', '101.0.4951.67', '1652979458', '2022-05-19 01:09:02'),
(9, '::1', '2022-05-20', 10, 'Windows 10', 'Chrome', '101.0.4951.67', '1653065836', '2022-05-20 11:51:06'),
(10, '::1', '2022-05-22', 3, 'Windows 10', 'Chrome', '101.0.4951.67', '1653222108', '2022-05-22 19:21:42'),
(11, '::1', '2022-05-23', 3, 'Windows 10', 'Chrome', '101.0.4951.67', '1653243787', '2022-05-23 01:22:56'),
(12, '::1', '2022-05-24', 6, 'Windows 10', 'Chrome', '101.0.4951.67', '1653392024', '2022-05-24 01:42:00'),
(13, '::1', '2022-05-25', 8, 'Windows 10', 'Chrome', '101.0.4951.67', '1653495167', '2022-05-25 19:05:25'),
(14, '::1', '2022-05-26', 8, 'Windows 10', 'Chrome', '102.0.5005.62', '1653558200', '2022-05-26 09:58:32'),
(15, '::1', '2022-06-03', 3, 'Windows 10', 'Chrome', '102.0.5005.63', '1654233684', '2022-06-03 12:21:19'),
(16, '::1', '2022-06-04', 3, 'Windows 10', 'Chrome', '102.0.5005.63', '1654326975', '2022-06-04 14:15:25'),
(17, '::1', '2022-06-05', 6, 'Windows 10', 'Chrome', '102.0.5005.63', '1654426280', '2022-06-05 14:19:39'),
(18, '::1', '2022-06-15', 9, 'Windows 10', 'Chrome', '102.0.0.0', '1655295323', '2022-06-15 18:20:32'),
(19, '::1', '2022-06-22', 5, 'Windows 10', 'Chrome', '102.0.0.0', '1655896559', '2022-06-22 16:43:11'),
(20, '::1', '2022-06-23', 3, 'Windows 10', 'Chrome', '102.0.0.0', '1655960168', '2022-06-23 11:56:03'),
(21, '::1', '2022-06-24', 12, 'Windows 10', 'Chrome', '102.0.0.0', '1656086711', '2022-06-24 12:30:17'),
(22, '::1', '2022-07-20', 1, 'Windows 10', 'Chrome', '103.0.0.0', '1658328413', '2022-07-20 21:46:53'),
(23, '::1', '2022-08-06', 91, 'Windows 10', 'Chrome', '103.0.0.0', '1659736551', '2022-08-06 02:43:06'),
(24, '::1', '2022-08-09', 17, 'Windows 10', 'Chrome', '104.0.0.0', '1660049160', '2022-08-09 18:56:25'),
(25, '::1', '2022-08-13', 1, 'Windows 10', 'Chrome', '104.0.0.0', '1660370491', '2022-08-13 13:01:31'),
(26, '::1', '2022-08-20', 6, 'Windows 10', 'Chrome', '104.0.0.0', '1661000403', '2022-08-20 18:47:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$10$3/QfuZWLF6GbiWXxwXIbFuXkIMEikgKAltNqQiI6Ha.ugTjH.fRUy', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1660996046, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_konfigurasi`
--
ALTER TABLE `tb_konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tentang`
--
ALTER TABLE `tb_tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_visitor`
--
ALTER TABLE `tb_visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_konfigurasi`
--
ALTER TABLE `tb_konfigurasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_tentang`
--
ALTER TABLE `tb_tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_visitor`
--
ALTER TABLE `tb_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
