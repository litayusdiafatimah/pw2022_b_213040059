-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 02:37 PM
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
  `genre` varchar(250) NOT NULL,
  `durasi` varchar(250) NOT NULL,
  `sutradara` varchar(250) NOT NULL,
  `pemeran` varchar(250) NOT NULL,
  `poster` varchar(64) NOT NULL,
  `sinopsis` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul`, `genre`, `durasi`, `sutradara`, `pemeran`, `poster`, `sinopsis`) VALUES
(1, 'Mariposa', 'Roman/drama', '1 jam 58 menit', 'Fajar Bustomi', 'Angga Yunanda, Adhisty Zara, Junior Roberts,  Dania Salsabila, Syakir Daulay,  Abun Sungkar,  Ariyo Wahab,  Ersa Mayori', 'Mariposa.jpg', 'Mariposa (Kupu-kupu) seperti kamu, aku mengejar tapi kamu menghindar. Begitulah gambaran sosok Iqbal Guanna bagi Natasha Kay Loovy atau Acha. Acha bertekad ingin mendapatkan hati Iqbal, seorang cowok cakep, pintar dan dikenal berhati dingin. '),
(2, 'Dilan 1990', 'Roman/drama', '1 jam 50 menit', 'Fajar Bustomi, Pidi Baiq', 'Iqbaal Ramadhan, Vanesha Prescilla, Debo Andryos, Giulio Parengkuan, Omara Esteghlal, Yoriko Angeline,Zulfa Maharani,Brandon Salim,Ira Wibowo\r\nHappy Salma,Farhan', 'Dilan1990.jpg', 'Milea (Vanesha Prescilla) bertemu dengan Dilan (Iqbaal Ramadhan) di sebuah SMA di Bandung. Itu adalah tahun 1990, saat Milea pindah dari Jakarta ke Bandung. Perkenalan yang tidak biasa kemudian membawa Milea mulai mengenal keunikan Dilan lebih jauh. '),
(3, 'Habibie & Ainun 3', 'roman/drama', '2 jam 1 menit', 'Hanung Bramantyo', 'Maudy Ayunda, Reza Rahadian, Jefri Nichol, Marcella Zalianty, Arswendy Bening Swara, Jennifer Coppen, Rebecca Klopper, Teuku Ryzki, Eric Febrian, Aghniny Haque, Kevin Ardilova', 'Habibie&Ainun3.jpg', 'Kisah Ainun (Maudy Ayunda) sebagaimana remaja di usianya, punya kisah kasih yang cukup unik, menggelitik dan menarik...'),
(4, '5 cm', 'Petualangan drama', '2 jam 6 menit', 'Rizal Mantovani', 'Herjunot Ali, Raline Shah, Fedi Nuril, Pevita Pearce, Denny Sumargo,Saykoji', '5cm.jpg', '\"17 Agustus di puncak tertinggi Jawa, 5 sahabat 2 cinta, sebuah mimpi mengubah segalanya\" Genta, Arial, Zafran, Riani dan Ian adalah lima remaja yang telah menjalin persahabatan belasan tahun lamanya.'),
(5, '#Teman Tapi Menikah', 'Drama', '1 jam 42 menit', 'Rako Prijanto', 'Adipati Dolken, Vanesha Prescilla, Cut Beby Tshabina,Denira Wiraguna, Diandra Agatha, Rendi Jhon, Shara Virrisya\r\nSari Nila, Sarah Sechan', 'TemanTapiMenikah.png', 'Semenjak pertama kali bertemu, Ditto (Adipati Dolken) sudah suka setengah mati pada Ayu (Vanesha Prescilla). Bukan karena Ayu adalah seorang artis, tapi karena Ayu suka bergaya gahar seperti preman. Kocak! Sayangnya selama 11 tahun bersahabat.'),
(13, 'Sweet 20', 'Roman/Drama', '109 menit', 'Ody C. Harahap', 'Tatjana Saphira, Niniek L. Karim, Kevin Julio, Morgan Oey, Slamet Rahardjo, Lukman Sardi, Cut Mini, Widyawati, Alexa Key, Tika Panggabean', 'Sweet20.jpg', 'Fatmawati, 70 tahun, tiba-tiba kembali ke usia 20 tahun setelah mengunjungi sebuah tempat foto. Hal tersebut membawanya dalam perjalanan penuh makna untuk lebih memahami akan arti sebuah keluarga.'),
(14, 'Single', 'Roman/komedi', '2 jam 7 menit', 'Raditya Dika', 'Raditya Dika, Annisa Rawles, Chandra Liow, Pandji Pragiwaksono, Babe Cabita, Elvira Devinamira, Tinna Harahap,Rina Hasyim', 'Single.jpg', 'bercerita tentang sosok Ebi (Raditya Dika), seorang pemuda 27 tahun yang naif dan belum mempunyai pekerjaan. Ebi bahkan masih sering meminta uang dari ibunya setiap kali ibunya datang ke Jakarta. Ebi juga seorang single forever atau jomblo dari lahir'),
(15, 'Milly & Mamet', 'Komedi romantis/Drama', '1 jam 41 menit\r\n', 'Ernest Prakasa', 'Sissy Priscillia, Dennis Adhiswara, Ernest Prakasa, Julie Estelle, Yoshi Sudarso, Dian Sastrowardoyo, Titi Kamal,Adinia Wirasti', 'Milly&Mamet.jpg', 'Milly (Sissy Priscillia) dan Mamet (Dennis Adhiswara) sedang disibukkan dengan mengurus bayi mereka. Mamet yang punya passion memasak dan sempat bekerja sebagai chef kini bekerja di pabrik milik Papa Milly. '),
(16, 'Si Doel The Movie', 'Drama/Anak-anak', '1 jam 25 menit', 'Rano Karno', 'Rano Karno, Cornelia Agatha,  Maudy Koesnaedi,  Mandra,  Rey Bong,  Aminah Cendrakasih, Suti Karno', 'SiDoelthemovie.jpg', '14 tahun sudah Sarah (Cornelia Agatha) pergi tanpa kabar dan perpisahan yang jelas, menyimpan kerinduan dalam hati Doel (H. Rano Karno) yang sudah berumah tangga dengan Zaenab (Maudy Koesnaedi).');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
