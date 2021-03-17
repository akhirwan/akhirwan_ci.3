-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 05:20 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(14, '2019-11-10 19:53:12', 'PT. DwiPapuri Asri (Sigma)', 'pt-dwipapuri-asri-sigma', '<p>Bergabung dari&nbsp;<strong>14 Juli 2004 - 19 September 2005</strong>, sebagai Operator di bagian SawMill 1. Beralamat di Jl. soekarno Hatta No. 785A, Bandung - 40294, Indonesia. SKK Paklaring no. <strong>141/DPA/Pers/IX/2005</strong></p>', 'noimage3.png', 1, 3, 'publish'),
(15, '2019-11-10 20:10:42', 'PT. Nusantara Cemerlang', 'pt-nusantara-cemerlang', '<p>Bergabung dari <strong>05Januari</strong><strong>&nbsp;2005 - 25 April 2011</strong>, sebagai <em>Pattern Maker</em> dan mendapat mutasi menjadi <em>Quality Assurance</em> di tahun 2010. Bergerak di bidang Garment Industry</p>\r\n<p>Alamat saat ini adalah&nbsp;Jl. Cisaranten Wetan No.6 Kelurahan Babakan Penghulu Kecamatan CinamboBandung 40294 - Jawa Barat.</p>\r\n<p>Tugas dan tanggung jawab:</p>\r\n<ol>\r\n<li><strong>Pattern Maker :</strong> Membuat Pattern untuk sample, kemudian membuat Pattern untuk berbagai <em>size</em> untuk produksi massal.</li>\r\n<li><strong>Quality Assurance</strong> : Memastikan qualitas hasil produksi sesuai dan siap untuk dikirim ke&nbsp;<em>client.</em>&nbsp;</li>\r\n</ol>\r\n<p>SK Paklaring no.&nbsp;<strong>6/PERS-NC/V/2011</strong></p>', 'img00482.png', 1, 3, 'publish'),
(16, '2019-11-10 20:28:02', 'Trans Studio Bandung', 'trans-studio-bandung', '<p>Bergabung sejak&nbsp;<strong>01 Juni 2011 - 20 November 2019.&nbsp;</strong>Sebagai IT Support. Bergerak&nbsp; dibidang Entertaintment (Theme Park). Alamat Jl. Gatot Subroto no. 289 Bandung</p>\r\n<p>Tugas dan tanggung jawab :</p>\r\n<ol>\r\n<li>Menjaga dan mengelola jaringan komputer dan lingkungan komputasi lainnya termasuk perangkat keras, sistem operasi, perangkat lunak / aplikasi pendukung, dan konfigurasinya.</li>\r\n<li>Melakukan Backup dan Recovery data</li>\r\n<li>Diagnosa, troubleshoot, dan maintenance perangkat keras, sistem operasi, perangkat lunak / aplikasi pendukung dan jaringan.</li>\r\n<li>Merencanakan, mengoordinasikan, dan menerapkan langkah-langkah keamanan jaringan untuk melindungi data, perangkat lunak, dan perangkat keras.</li>\r\n<li>Mengkonfigurasi, memantau, dan memelihara aplikasi email atau perangkat lunak perlindungan virus.</li>\r\n<li>Mengoperasikan konsol utama untuk memantau kinerja sistem dan jaringan komputer, dan untuk mengoordinasikan akses dan penggunaan jaringan komputer.</li>\r\n<li>Desain, konfigurasi, dan uji perangkat keras komputer, perangkat lunak jaringan, dan perangkat lunak sistem operasi.</li>\r\n<li>Monitor kinerja jaringan untuk menentukan apakah perlu dilakukan penyesuaian, dan untuk menentukan di mana perubahan perlu dilakukan di masa depan.</li>\r\n<li>Berunding dengan pengguna jaringan tentang cara mengatasi masalah sistem yang ada.</li>\r\n<li>eneliti teknologi baru dengan menghadiri seminar, membaca artikel perdagangan, atau mengambil kelas, dan mengimplementasikan atau merekomendasikan penerapan teknologi baru.</li>\r\n<li>Menganalisis catatan kinerja peralatan untuk menentukan kebutuhan akan perbaikan atau penggantian.</li>\r\n<li>Melaksanakan dan menyediakan dukungan teknis untuk voice services and equipment (PABX), seperti nomor ekstention, voice mail system, dan sistem telekomunikasi.</li>\r\n<li>Rekomendasikan perubahan untuk meningkatkan konfigurasi sistem dan jaringan, dan menentukan persyaratan perangkat keras atau perangkat lunak yang terkait dengan perubahan tersebut.</li>\r\n<li>Kumpulkan data yang berkaitan dengan kebutuhan pelanggan, dan gunakan informasi tersebut untuk mengidentifikasi, memprediksi, menafsirkan, dan mengevaluasi persyaratan sistem dan jaringan.</li>\r\n<li>Melakukan trainning kepada user terkait penggunaan PC atau Laptop dan terkait sistem informasi yang digunakan.</li>\r\n<li>Berkoordinasi dengan vendor dan dengan personel perusahaan untuk memfasilitasi pembelian.</li>\r\n<li>Lakukan prosedur startup dan shutdown jaringan rutin, dan&nbsp;maintain control records.</li>\r\n</ol>\r\n<p>&nbsp;</p>', 'logo_tsb2.png', 1, 3, 'publish'),
(17, '2019-11-10 21:29:52', 'eJournal unfari.ac.id', 'ejournal-unfariacid', '<p><strong>2014</strong></p>\r\n<p><strong>Pembuatan e-journal untuk website unfair.ac.id</strong></p>\r\n<p>e-journal diposting oleh dosen atau panelist melalui portal back-end yang nantinya dapat di akses atau di download oleh mahasiswa</p>\r\n<p><em>note:&nbsp;</em><em>portal back-end tidak dapat di capture atas kontrak dengan client.</em></p>\r\n<p>Menggunakan Framework Codeigniter dan Javascript</p>', 'unfari_e-journal.JPG', 1, 1, 'publish'),
(18, '2019-11-10 21:32:58', 'Retail Point of Sale', 'retail-point-of-sale', '<p><strong>2015</strong></p>\r\n<p><strong>Koperasi Retail Karyawan Trans Studio Bandung</strong></p>\r\n<p>Point of Sale Terdiri dari modul:</p>\r\n<ol>\r\n<li>Pelanggan</li>\r\n<li>Barang / item</li>\r\n<li>Supplier / pemasok</li>\r\n<li>Laporan</li>\r\n<li>Receiving / penerimaan barang</li>\r\n<li>Sales / Penjualan</li>\r\n<li>User Employee / Karyawan</li>\r\n<li>Gift Card</li>\r\n<li>Konfigurasi</li>\r\n</ol>\r\n<p>Fitur lainnya adalah terdapat fitur 2 bahasa yaitu Bahasa Indonesia dan English</p>\r\n<p>Aplikasi ini berbasis web apps, menggunakan Framework Codeigniter dengan database menggunakan SQL-Server</p>', 'dunkpos021.JPG', 1, 1, 'publish'),
(19, '2019-11-10 22:05:41', 'Save and Loan', 'save-and-loan', '<p><strong>2015</strong></p>\r\n<p><strong>Koperasi Simpan &ndash; Pinjam Karyawan Trans Studio Bandung</strong></p>\r\n<p>Terdiri dari modul:</p>\r\n<ol>\r\n<li>Anggota</li>\r\n<li>Simpanan</li>\r\n<li>Pinjaman</li>\r\n<li>Laporan</li>\r\n</ol>\r\n<p>Aplikasi ini memiliki fitur:</p>\r\n<ol>\r\n<li>Pinjaman, dimana <strong>anggota</strong> bisa melakukan pinjaman dan membayar hutang pinjaman dengan cara dicicil perbulan atau jangka waktu yang ditentukan atau secara kontan. <strong>Admin</strong> dapat mengisi data pembayaran secara montly/weekly/ berdasarkan kesepakatan awal dengan <strong>anggota</strong>.</li>\r\n<li>Simpanan, dimana <strong>anggota</strong> dapat menyimpan uang berdasarkan jenis simpanan (wajib, pokok, dan sukarela).</li>\r\n<li>Laporan, dimana <strong>anggota</strong> dapat melihat laporan simpanan dan pinjaman pribadi anggota terhadap koperasi. dan, <strong>admin</strong> dapat melihat data simpanan, pinjaman dan anggota koperasi.</li>\r\n</ol>\r\n<p>Aplikasi ini berbasis web apps, menggunakan Framework Codeigniter dengan database menggunakan SQL-Server</p>', 'simp_detail.JPG', 1, 1, 'publish'),
(20, '2019-11-10 22:08:20', 'MOD Checklists (Manager On Duty Checklists)', 'mod-checklists-manager-on-duty-checklists', '<p>Trans Studio Bandung</p>\r\n<p>MOD Checklists adalah suatu aplikasi untuk membantu seorang karyawan yang mempunyai level Assistant Manager Up, dimana karyawan tersebut mempunyai tugas untuk melakukan checklist di Kawasan Theme Park Trans Studio Bandung.</p>\r\n<p>Tugas ini dilakukan melalui Local Network menggunakan gadget.</p>\r\n<p>Aplikasi ini berbasis</p>\r\n<ul>\r\n<li>web apps dan mobile template agar ketika diakses menggunakan mobile gadget tidak menyulitkan user dari segi template design,</li>\r\n<li>menggunakan Framework Codeigniter dan bootstrap UI</li>\r\n<li>database menggunakan SQL-Server</li>\r\n</ul>', 'Mod.JPG', 1, 1, 'publish'),
(21, '2019-11-10 22:14:07', 'Asset Management and Assignment Support', 'asset-management-and-assignment-support', '<p><strong>Trans Studio Bandung</strong></p>\r\n<p><strong>Asset Management and Assignment Support</strong>&nbsp;merupakan suatu aplikasi untuk memonitor asset milik perusahan terutama IT Asset, seperti Personal Computer / Laptop, Printer, Switch, Router dan bahkan PC Server.</p>\r\n<p>Aplikasi ini terdiri dari modul:</p>\r\n<p><strong>1.&nbsp; &nbsp;Assets</strong></p>\r\n<p>Dimana asset tersebut akan diberi QRBarcode berdasarkan id unik. Didalam modul asset, ada fitur Specification (spec) dimana dalam Spec terdapat data spesifikasi yang lebih detail dari assets tersebut.<br />Contoh :<br />ID : PC0001<br />Name : PC Admin<br />Username : Budi Sudarsono (pengguna asset)<br />Spec :<br />Motherboard Gigabyte XXXX<br />Processor Intel Core i3<br />RAM DDR3 4Gb<br />PSU SimCool 450W<br />Monitor Samsung<br />Keyboard &ndash; mouse Logitec</p>\r\n<p><strong>2.&nbsp; Assignment</strong></p>\r\n<p>Merupakan modul untuk penugasan berupa supporting, troubleshoot, maintenance, upgrade, replacement, dan lain-lain yang dilakukan oleh user yang memiliki level Support atau IT Department</p>\r\n<p><strong>3.&nbsp; Users</strong></p>\r\n<p>Modul ini memberikan informasi yang dimiliki oleh seorang user. Dimana informasi-informasi tersebut antar lain:</p>\r\n<ul>\r\n<li>Data pribadi</li>\r\n<li>Asset yang digunakan</li>\r\n<li>Level (terdiri dari user, admin, dan support)</li>\r\n</ul>\r\n<p><strong>4.&nbsp; Master Data</strong></p>\r\n<p>Berisikan modul-modul pendukung lainnya seperti</p>\r\n<ul>\r\n<li>Department (akan muncul dalam modul user),</li>\r\n<li>Level (akan muncul dalam modul user),</li>\r\n<li>Area (akan muncul dalam modul asset), area ini merupakan posisi dimana asset tersebut digunakan.</li>\r\n</ul>\r\n<p>Aplikasi ini berbasis</p>\r\n<ul>\r\n<li>web apps dan mobile template agar ketika diakses menggunakan mobile gadget tidak menyulitkan user dari segi template design,</li>\r\n<li>menggunakan Framework Codeigniter dan bootstrap UI</li>\r\n<li>database menggunakan SQL-Server</li>\r\n</ul>', 'assetmanagement.JPG', 1, 1, 'publish'),
(22, '2019-11-10 22:15:01', 'akhirwan.my.id', 'akhirwanmyid', '<p>Anda sedang mengunjungi <strong>akhirwan.my.id</strong></p>', 'akhir-my-id.jpg', 1, 1, 'publish'),
(23, '2019-11-10 22:48:24', 'Microsoft Azure Cloud Fundamental', 'microsoft-azure-cloud-fundamental', '<p>Penyelenggara : Dicoding Indonesia</p>\r\n<p>Website : <a href=\"http://www.dicoding.com\">www.dicoding.com</a></p>\r\n<p>Mitra Global Tech : Microsoft Azure</p>\r\n<p>Diterbitakan : 29 September 2019</p>\r\n<p><a title=\"azure cloud\" href=\"https://drive.google.com/file/d/0B7472VB0lD20SzhZRzdORGtERDE4SFVtVWU1MHFHVjZEX2VB/view?usp=sharing\" target=\"_blank\" rel=\"noopener\">Go to link</a></p>', 'azure-dicoding2.JPG', 1, 4, 'publish'),
(24, '2019-11-10 22:53:23', 'CISCO - CCNA Cybersecurity Operations', 'cisco-ccna-cybersecurity-operations', '<p>Penyelenggara : Digital Talent Scholarship 2019 - Online Academy</p>\r\n<p>Website : <a href=\"https://digitalent.kominfo.go.id/\">https://digitalent.kominfo.go.id/</a></p>\r\n<p>Mitra Global Tech : CISCO</p>\r\n<p>Diterbitkan : 8 November 2019</p>\r\n<p><a href=\"https://drive.google.com/file/d/1H6QzH29xVc-o9gU4LUgi9haImM20HGYi/view?usp=sharing\" target=\"_blank\" rel=\"noopener\">Go to link</a></p>\r\n<p>&nbsp;</p>', 'cyberops-DTS-OA2.JPG', 1, 4, 'publish'),
(25, '2019-11-10 23:02:19', 'Data Science with R', 'data-science-with-r', '<p>Penyelenggara : DQLab Academy</p>\r\n<p>Website : <a href=\"https://www.dqlab.id/\">https://www.dqlab.id/</a></p>\r\n<p>Diterbitkan : 23 September 2019</p>\r\n<p>#DQLABBGINRNCHSRE</p>\r\n<p><a href=\"https://drive.google.com/file/d/1MBEtvmaxjVm9HdGFW0fyfBneBo1wv0co/view?usp=sharing\" target=\"_blank\" rel=\"noopener\">Go to link</a></p>', 'datascienceR1.JPG', 1, 4, 'publish'),
(26, '2019-11-10 23:09:32', 'Web Development', 'web-development', '<p><img src=\"images/sources/web-dicoding.JPG\" alt=\"Web Dicoding Indonesia\" width=\"200\" /></p>', 'web-dicoding.JPG', 1, 4, 'publish');

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
(1, 'Akhirwan Portfolio', 'akhirwan-portfolio'),
(2, 'Akhirwan Profile', 'akhirwan-profile'),
(3, 'Akhirwan Experiences ', 'akhirwan-experiences'),
(4, 'Akhirwan Skills', 'akhirwan-skills');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `link_fb` varchar(255) NOT NULL,
  `link_li` varchar(255) NOT NULL,
  `link_ig` varchar(255) NOT NULL,
  `link_github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`url`, `name`, `description`, `logo`, `phone`, `email`, `address`, `link_fb`, `link_li`, `link_ig`, `link_github`) VALUES
('akhirwan.my.id', 'Akhirwan Novendi', 'Situs profil pemilik akhirwan.my.id', 'boy-1299608.png', '+62 857 2280 3586', 'akhirwan.novendi@gmail.com', 'Bandung, Jawa Barat, Indonesia', '#', '#', '#', '#');

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
(1, 'Contact', 'contact', '<p class=\"lead\">Situs profil pemilik akhirwan.my.id</p>\r\n<ul class=\"list-ico\">\r\n<li>&nbsp;Bandung, Jawa Barat, Indonesia</li>\r\n<li>&nbsp;+62 857 2280 3586</li>\r\n<li>&nbsp;akhirwan.novendi@gmail.com</li>\r\n</ul>'),
(2, 'About Akhirwan', 'about-akhirwan', '<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-6 col-md-5\">\r\n<div class=\"about-img\"><img class=\"img-fluid rounded b-shadow-a\" src=\"assets/front/img/akhirwan02.jpg\" alt=\"\" /></div>\r\n</div>\r\n<div class=\"col-sm-6 col-md-7\">\r\n<div class=\"about-info\">\r\n<p><span class=\"title-s\">Name: </span> Akhirwan Novendi</p>\r\n<p><span class=\"title-s\">Profile: </span> backend developer</p>\r\n<p><span class=\"title-s\">Email: </span> akhirwan.novendi@gmail.com</p>\r\n<p><span class=\"title-s\">Phone: </span> +62 857 2280 3586</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"skill-mf\">\r\n<p class=\"title-s\">Skill</p>\r\nWeb Development <span class=\"pull-right\">85%</span>\r\n<div class=\"progress\">\r\n<div class=\"progress-bar\" style=\"width: 85%;\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">&nbsp;</div>\r\n</div>\r\nSystem Engineer and Analyst <span class=\"pull-right\">80%</span>\r\n<div class=\"progress\">\r\n<div class=\"progress-bar\" style=\"width: 80%;\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">&nbsp;</div>\r\n</div>\r\nRelational Database Management System <span class=\"pull-right\">80%</span>\r\n<div class=\"progress\">\r\n<div class=\"progress-bar\" style=\"width: 80%;\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">&nbsp;</div>\r\n</div>\r\nComputer Equipment <span class=\"pull-right\">90%</span>\r\n<div class=\"progress\">\r\n<div class=\"progress-bar\" style=\"width: 90%;\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-6\">\r\n<div class=\"about-me pt-4 pt-md-0\">\r\n<div class=\"title-box-2\">\r\n<h5 class=\"title-left\">Profiling</h5>\r\n</div>\r\n<p class=\"lead\">Sumber energi berasal dari ide-ide, emosi, dan memori.</p>\r\n<p class=\"lead\">Berorientasi pada gambaran besar, sangat imajinatif.</p>\r\n<p class=\"lead\">Cenderung menggunakan penalaran sebab-akibat dalam membuat keputusan.</p>\r\n<p class=\"lead\">Seseorang yang sangat spontan dan fleksibel.</p>\r\n</div>\r\n</div>\r\n</div>');

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
  `level` enum('admin','author','user','') NOT NULL,
  `user_status` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `name`, `address`, `phone`, `email`, `level`, `user_status`) VALUES
(1, 'akhirwan', '37271cc2ecf06b09cf7d174119760bf9', 'Akhirwan Novendi', '<p>Bandung, Jawa Barat, Indonesia</p>', '+62 857 2280 3586', 'akhirwan.novendi@gmail.com', 'admin', 1),
(3, 'daand', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Zbyszek ', 'Dago, Bandung', '266427555', 'ahir.malmsneen@gmail.com', 'author', 1);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
