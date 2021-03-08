-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 09:28 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(50) NOT NULL,
  `update` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `cover` varchar(255) NOT NULL,
  `author` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `status` enum('publish','draft','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `update`, `title`, `slug`, `content`, `cover`, `author`, `category`, `status`) VALUES
(2, '2019-11-04 14:39:21', 'sayah', 'sayah', '<p>Penjelasan Project<br />Pada materi Tutorial Codeigniter Lanjutan ini, tidak lagi dijelaskan secara<br />detail tentang dasar-dasar codeigniter, karena dasar codeigniter telah dijelaskan<br />pada bab Tutorial Codeigniter Dasar. Jadi di sini hanya akan dijelaskan tentang<br />cara-cara bagaimana teman-teman bisa mebuat website sendiri, dengan<br />berbekal pengetahuan tentang codeigniter dasar yang sudah dipelajari<br />sebelumnya.<br />Pada ebook ini kita akan belajar membuat website sendiri dari nol sampai<br />selesai. Website yang akan kita buat adalah website yang bersifat umum.<br />Sehingga ke depannya teman-teman bisa mengembangkan lagi website yang<br />kita buat ini menjadi berbagai jenis website.</p>', 'geography-512.png', 1, 5, 'publish'),
(3, '2019-11-04 14:59:51', 'test', 'test', '<p>Pada method ini, kita menangkap data id artikel yang ingin diedit. Kemudian kita<br />ambil artikel tersebut, dan kita passing ke view v_artikel_edit.php<br />Buat view baru. Yaitu view v_artikel_edit.php.<br />Pada view ini kita akan membuat form untuk mengedit data artikel.</p>', 'cv.jpg', 1, 4, 'publish'),
(4, '2019-11-04 15:31:23', 'test lagi', 'test-lagi', '<p>Jika teman-teman perhatikan pada view di atas, penggunaan dan pembuatannya<br />masih sama saja seperti membuat form edit biasa pada saat kita membuat crud.<br />Data artikel yang ingin diedit kita tampilkan dalam form masing-masing.<br />Perhatikan pada tag</p>\r\n<form>. Form edit artikel ini akan kita eksekusi pada<br />method artikel_update() dalam controller Dashboard.php.</form>', 'Untitled1.jpg', 1, 4, 'publish'),
(5, '2019-11-05 09:44:17', 'qwerty', 'qwerty', '<p>Inti dari proses edit yang kita buat selain mengupdate artikel adalah melakukan<br />pengecekan pada form gambar sampul.</p>', 'IMG-20141204-WA0002.jpg', 1, 6, 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_slug`) VALUES
(4, 'Portfolio', 'portfolio'),
(5, 'My Profile', 'my-profile'),
(6, 'Privates', 'privates'),
(7, 'Berita', 'berita');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `page_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_title`, `page_slug`, `page_content`) VALUES
(1, 'Kontak Saya', 'kontak-saya', 'Pada method diatas kita hanya membuat validasi untuk form judul dan konten.\r\nAgar form judul dan konten wajib diisi, dan validasi unik pada form judul. Agar\r\ntidak ada judul yang sama nantinya.\r\nKemudian kita insert datanya ke table halaman.\r\nOh ya, untuk pembuatan url slug halaman, caranya sama saja dengan\r\npembuatan url slug untuk artikel.\r\nKita menggunakan fungsi strtolower() untuk mengubah semua judul menjadi\r\nhuruf kecil, dan kita gunakan fungsi url_title() untuk membuat slug yang\r\nmenghapus semua karakter spasi dan karakter lain selain huruf dan angka saja.\r\nSekarang langsung saja kita coba membuat halaman atau page baru. Klik\r\ntombol “Buat halaman baru”.\r\nMaka kita akan diarahkan ke form input halaman.');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img01` varchar(100) NOT NULL,
  `img02` varchar(100) NOT NULL,
  `img03` varchar(100) NOT NULL,
  `img04` varchar(100) NOT NULL,
  `img05` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` enum('admin','user','','') NOT NULL,
  `user_status` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `name`, `address`, `phone`, `email`, `level`, `user_status`) VALUES
(1, 'akhirwan', 'd9060df55290c9a35373d16ea2bb3204', 'Akhirwan Novendi', 'Bandung, Jawa Barat, Indonesia', '+6285722803586', 'akhirwan.novendi@gmail.com', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
