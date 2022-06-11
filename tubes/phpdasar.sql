-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 09:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `genre` int(11) NOT NULL,
  `durasi` varchar(250) NOT NULL,
  `sutradara` varchar(250) NOT NULL,
  `pemeran` varchar(250) NOT NULL,
  `poster` varchar(64) NOT NULL,
  `sinopsis` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul`, `genre`, `durasi`, `sutradara`, `pemeran`, `poster`, `sinopsis`) VALUES
(1, 'Mariposa', 2, '1 jam 58 menit', 'Fajar Bustomi', 'Angga Yunanda, Adhisty Zara, Junior Roberts,  Dania Salsabila, Syakir Daulay,  Abun Sungkar,  Ariyo Wahab,  Ersa Mayori', '62a181bcb4593.jpg', 'Mariposa (Kupu-kupu) seperti kamu, aku mengejar tapi kamu menghindar. Begitulah gambaran sosok Iqbal Guanna bagi Natasha Kay Loovy atau Acha. Acha bertekad ingin mendapatkan hati Iqbal, seorang cowok cakep, pintar dan dikenal berhati dingin. Sahabat Acha, Amanda, berusaha mencegah niat Acha untuk mendekati Iqbal. Amanda takut Acha akan terluka dan sakit hati.'),
(28, 'Dilan 1990', 1, '1 jam 50 menit', 'Pidi Baiq, Fajar Bustomi', 'Iqbaal Ramadhan, Vanesha Prescilla, Debo Andryos, Giulio Parengkuan, Omara Esteghlal, Yoriko Angeline, Zulfa Maharani, Brandon Salim, Ira Wibowo, Happy Salma, Farhan', '62a0d301c5486.jpg', 'Milea (Vanesha Prescilla) bertemu dengan Dilan (Iqbaal Ramadhan) di sebuah SMA di Bandung. Itu adalah tahun 1990, saat Milea pindah dari Jakarta ke Bandung. Perkenalan yang tidak biasa kemudian membawa Milea mulai mengenal keunikan Dilan lebih jauh. Dilan yang pintar, baik hati dan romantis.'),
(29, '5 cm', 2, '125 menit', 'Rizal Mantovani', 'Herjunot Ali, Raline Shah, Fedi Nuril, Pevita Pearce, Denny Sumargo, Saykoji	', '62a0d419c31bf.jpg', 'Genta (Fedi Nuril), Arial (Denny Sumargo), Zafran (Herjunot Ali), Riani (Raline Shah) dan Ian (Igor Saykoji) adalah  lima remaja yang telah menjalin persahabatan sepuluh tahun lamanya.  Mereka memiliki karakter yang berbeda-beda'),
(30, 'Single', 1, '127 menit', ' Raditya Dika', 'Raditya Dika, Annisa Rawles, Chandra Liow, Pandji Pragiwaksono, Babe Cabita, Elvira Devinamira, Tinna Harahap, Rina Hasyim', '62a0d78a095ac.jpg', 'bercerita tentang sosok Ebi (Raditya Dika), seorang pemuda 27 tahun yang naif dan belum mempunyai pekerjaan. Ebi bahkan masih sering meminta uang dari ibunya setiap kali ibunya datang ke Jakarta. Ebi juga seorang single forever atau jomblo dari lahir yang belum pernah pacaran. Hal ini terjadi karena setiap kali Ebi mendekati perempuan, Ebi selalu saja ditolak. Intinya, kehidupan Ebi layak untuk dikasihani.'),
(31, 'Sweet 20 ', 1, '109 menit', 'Ody C. Harahap', 'Tatjana Saphira, Niniek L. Karim, Kevin Julio, Morgan Oey, Slamet Rahardjo, Lukman Sardi, Cut Mini, Widyawati, Alexa Key, Tika Panggabean', '62a0d91c9bf87.jpg', 'Fatmawati (Niniek L. Karim) adalah seorang wanita lanjut usia berusia 70 tahun yang serba mengatur kehidupan anak semata wayangnya, Aditya (Lukman Sardi), yang sudah berkeluarga dengan istrinya, Salma (Cut Mini) dan dua anaknya Juna (Kevin Julio) dan Luna (Alexa Key). Fatmawati kendatinya beritikad baik, ia hanya merasa paling tahu apa yang terbaik untuk keluarga anaknya, tetapi hal ini malah membuat keluarga Aditya merasa terkekang. '),
(32, 'Milly &amp; Mamet', 2, '1 jam 41 menit', 'Ernest Prakasa', 'Sissy Priscillia, Dennis Adhiswara, Ernest Prakasa, Julie Estelle, Yoshi Sudarso, Dian Sastrowardoyo, Titi Kamal, Adinia Wirasti', '62a0dc719eaa2.jpg', ' Milly (Sissy Priscillia) dan Mamet (Dennis Adhiswara) sedang disibukkan dengan mengurus bayi mereka. Mamet yang punya passion memasak dan sempat bekerja sebagai chef kini bekerja di pabrik milik Papa Milly. Sebuah pilihan yang agak terpaksa, karena kini ia jadi tumpuan keluarga kecil mereka setelah Milly resign dari profesinya sebagai bankir untuk fokus membesarkan anak.'),
(33, 'Habibie &amp; Ainun 3', 1, '2 jam 1 menit', 'Hanung Bramantyo', 'Maudy Ayunda, Reza Rahadian, Jefri Nichol, Marcella Zalianty Arswendy, Bening Swara, Jennifer Coppen, Rebecca Klopper, Teuku Ryzki, Eric Febrian, Aghniny Haque, Kevin Ardilova', '62a0ddbdde3fd.jpg', 'Pada 22 Mei 2011, Habibie (Reza Rahadian) pergi ke kuburan Ainun untuk mengenang setahun kematian istrinya. Setelah berziarah, Habibie yang masih berduka sedang meratapi kematian istrinya, sementara keluarga Habibie menyiapkan makan malam. Habibie lewat Thareq menginginkan suasana bahagia ketika makan malam. Habibie atas keinginan cucu-cucunya menceritakan &quot;Eyang Putri&quot;, panggilan Hasri Ainun Besari.');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `nama_genre`) VALUES
(1, 'roman'),
(2, 'drama'),
(3, 'petualangan'),
(4, 'anak-anak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'rahma', '$2y$10$Jd5I0FekaFfwKC/RZmAZluVmuO7LQrW26f8SMOuEYfELrxF/cb33G'),
(2, 'putri', '$2y$10$il7gJtVrJJaoaBM2z8uxGu8Tlk06IjSzGArzwCPYzO9QrkrB26hnC'),
(3, 'bucat', '$2y$10$dX06YZ/IlsJsZDU5niY.oeb.h/zK79wx.CvYeIsPkWsHegOjIzEba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_2` (`genre`),
  ADD KEY `genre_3` (`genre`),
  ADD KEY `genre` (`genre`) USING BTREE;

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `genre` FOREIGN KEY (`genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
