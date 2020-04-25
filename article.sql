-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 06:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obati`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `terbit` varchar(50) NOT NULL,
  `isi` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `penulis`, `terbit`, `isi`) VALUES
(4, 'Pasien Kanker Jalani Imunoterapi, Cek Nutrisi Dongkrak Kekebalan Tubuh', 'Dimit', '20 april, 2020', 'Pilihan nutrisi makanan sehat bagi pasien kanker yang menjalani terapi imun atau imunoterapi ikut mendongkrak kekebalan tubuh. Hal ini demi mendukung kualitas hidup pasien, khususnya kanker paru. Mereka tak hanya didukung obat imunoterapi dan rutin konsultasi ke dokter. Pandai menjaga asupan makan dapat diterapkan. Ahli gizi Dedyanto Hengky Saputra yang fokus membahas nutrisi tepat untuk pasien kanker mengungkapkan, kebutuhan zat nutrisi bantu membangun sistem imun. Glutamin punya peran memberikan energi pada sel imun. Zat yang merupakan hasil proses dari glukosa ini memetabolisme sel.'),
(5, 'Bingung Pilih Menu Buka Puasa Pertama? Baca Dulu Saran dari Ahli Gizi', 'Wira', '12 april, 2020', 'Spesialis Gizi Klinik dr. Raissa Edwina Djuanda, M.Gizi, Sp.GK memperbolehkan menu makanan manis untuk disantap saat buka puasa pertama. Eits, tapi tidak lantas mengonsumsi manis secara berlebihan ya.\n\"Untuk buka puasa pertama itu karena sudah berpuasa lama, jadi boleh langsung untuk energi tubuh yang sudah habis itu digantikan secara cepat jadi kita boleh makan yang manis-manis. Tapi tentunya balik lagi jangan berlebihan juga ya,\" ujar dr. Raissa beberapa waktu lalu kepada awak media.\nIa mengatakan contoh memakan buah kurma yang dipraktikkan Nabi Muhammad sudah paling tepat. Selain buah yang manis, kurma juga mengandung serat sehingga lebih cepat kenyang, tapi cukup 2 hingga 3 butir saja.\n\"Misalnya mau makan kurma yang paling gampang itu boleh. 2 sampai 3 butir atau boleh juga misalnya buka dengan sirup buah itu boleh atau misalnya dengan makanan seperti kolak pisang kayak gitu boleh,\" paparnya.\nDokter yang berpraktik di RS MMC Jakarta itu mengingatkan jika mengonsumsi makanan manis untuk lebih sadar penyakit bawaan yang dimiliki, khususnya mereka yang punya diabetes, darah tinggi, kolesterol.'),
(6, 'Ajakan Hidup Sehat Melalui GERMAS', 'Wira', '15 april, 2020', 'Siapa yang belum pernah mendengar tentang Germas, yang merupakan singkatan dari gerakan masyarakat hidup sehat. Program ini diinisiasi oleh pemerintah dengan menggandeng organisasi kemasyarakatan serta tokoh-tokoh masyarakat lainnya. Program ini dimulai sejak 2016 lalu dan utamanya dilakukan dengan program hidup sehat yang dimulai dari keluarga, di antaranya seperti:\n\n1. Konsumsi Buah dan Sayur\nMengkonsumsi buah dan sayur sudah terbukti sebagai salah satu cara untuk hidup sehat. Buah dan sayur mengandung vitamin dan serat yang dibutuhkan oleh tubuh. Dengan menambah konsumsi buah dan sayur dalam menekan radikal bebas yang beredar di dalam tubuh. Selain itu, dengan bertambahnya asupan serat dapat meningkatkan sistem metabolisme tubuh, sehingga tubuh tidak akan menumpuk kotoran.\n\n2. Beraktivitas Fisik\nAktivitas fisik diperlukan tubuh, khususnya demi kesehatan tulang. Budaya kerja masyarakat modern yang lebih banyak duduk menyebabkan kurangnya aktivitas fisik harian. Padahal, aktivitas fisik dapat membantu sistem metabolisme. Adapun tipe aktivitas fisik yang dilakukan tidak harus dengan berolahraga berat, namun dapat dilakukan dengan banyak berjalan. Bahkan bagi ibu rumah tangga, menyapu dan mengepel lantai juga merupakan aktivitas fisik yang dapat membuat berkeringat.\n\n3. Rutin Memeriksakan Kesehatan\nSelain dua aktivitas di atas, perlu juga untuk rutin memeriksakan kesehatan. Apabila sudah terlihat tanda-tanda waspada, dapat dilakukan pencegahan sehingga tidak sampai jatuh sakit. Dengan demikian, selain tetap dapat hidup sehat, namun juga sekaligus menekan pengeluaran untuk biaya berobat.\n\nKetiga program Germas di atas merupakan program utama yang dilakukan dari lingkungan terkecil – keluarga. Artinya anggota keluarga saling menjaga dan mengingatkan demi untuk mendapatkan hidup yang sehat. Terlebih lagi dengan menggalakkan hidup sehat dari lingkungan keluarga dapat membantu mencegah munculnya berbagai penyakit. Seperti yang sudah banyak disampaikan, mencegah itu lebih baik daripada mengobati.'),
(7, 'Dampak Buruk Junk Food Bagi Kesehatan Tubuh', 'Wira', '18 april, 2020', 'Junk Food disebut makanan instan atau makanan cepat saji yang kini telah berkembang pesat di persaingan perusahaan makanan di Indonesia. Makanan cepat saji dinilai sebagian orang lebih efektif terhadap waktu dan mudah ditemukan. Tak hanya itu saja, makanan cepat saji juga memiliki cita rasa yang lezat ditambah lagi harganya yang terjangkau.\n\nMakanan cepat saji sudah lama mengundang kontroversi di negara kita karena terungkapnya beberapa dampak buruk yang ia miliki. Dampak buruk itu disebabkan oleh kandungan zat-zat berbahaya di dalam makanan instan seperti lilin yang ada pada mie instan. Tak berhenti disitu, nyatanya di dalam makanan cepat saji terkandung bahan pengawet dan penyedap yang kini disebut micin.\n\nFenomena kata micin kini mendadak kerap digunakan para remaja hingga dewasa bila seseorang mengalami hal-hal yang kurang normal. Maksud dari hal kurang normal itu seperti seseorang yang telat berpikir, lama menjawab bila diajak bicara dan lain sebagainya. Tak dielakkan, makanan cepat saji memang mengandung zat berbahaya seperti yang telah diungkapkan di atas.\n\nSejumlah penelitian telah membuktikan bahwa keseringan mengkonsumsi makanan cepat saja memang tidak berdampak secara langsung ke tubuh. Namun, makanan-makanan cepat saji yang dikonsumsi akan tertimbun di dalam tubuh yang kemudian hari menjadi penyebab penyakit mematikan seperti kanker. Tak hanya kanker, penyakit berbahaya juga mengintai misalnya stroke, usus buntu dan penyakit ginjal.\nMaka bila Anda termasuk ke dalam orang yang hobi mengkonsumsi makanan cepat saja, kurangilah hal itu dan\n\nmulai sayangi tubuh serta diri Anda sendiri. Perlu diketahui bahwa salah satu kandungan di dalam makanan instan yaitu lilin sulit dicerna tubuh. Lilin itu menghancurkan prinsip kerja sistem pencernaan tubuh sehingga makanan yang mengandung lilin akan dicerna dengan waktu minimal dua hari.'),
(8, 'Mengapa telinga sering berdengung?', 'Wira', '23 april, 2020', 'Telinga berdengung memiliki istilah tinnitus dalam dunia kesehatan. Tinnitus bukan merupakan penyakit, tetapi sebuah gejala dari gangguan pendengaran. Umumnya tinnitus bukan merupakan gejala dari kondisi yang serius, namun dapat mengganggu aktifitas. Untuk mengobati tinnitus dapat dilakukan jika sudah mengetahui penyebabnya.\nApakah Penyebab Telinga Berdengung?\nPenyebab paling umum terjadinya tinnitus karena mendengarkan suara keras dalam waktu lama. Suara keras yang didengar menyebabkan kerusakan permanen pada sel-sel sensitive suara dari koklea (organ berbentuk spiral di telinga bagian dalam). Beberapa profesi seperti teknisi pesawat, musisi, tukang kayu, pilot memiliki resiko mengalami tinnitus lebih besar. Paparan suara sangat keras secara tiba-tiba juga dapat menyebabkan tinnitus.\nFaktor Usia\nBagi banyak orang, bertambahnya usia dapat berdampak pada memburuknya pendengaran yang umumnya dimulai sekitar usia 60 tahun. Gangguan pendengaran yang terjadi ini dapat menyebabkan timbulnya tinnitus.\nPaparan Suara Keras\nSumber umum suara keras adalah perangkat music portable seperti iPod, Handphone, atau laptop. Mendengarkan music dengan suara keras melalui headphone dalam waktu lama dapat menimbulkan tinnitus. Paparan suara keras dalam jangka pendek atau panjang memiliki resiko yang sama menyebabkan kerusakan permanen.\nPenyumbatan Kotoran Telinga\nKotoran telinga memiliki manfaat menjaga kotoran dan bakteri dari luar memasuki saluran telinga. Ketika terlalu banyak kotoran telinga menumpuk dan susah untuk dibersihkan maka dapat menyebabkan gangguan pendengaran atau iritasi pada gendang telinga yang menimbulkan tinnitus.\nPerubahan Tulang Telinga\nPengerasan tulang di telinga bagian tengah (otosklerosis) dapat mempengaruhi pendengaran dan menyebabkan tinnitus. Kondisi ini disebabkan oleh pertumbuhan tulang yang tidak normal dan umumnya karena faktor genetik.'),
(9, 'Aneka Minuman Buka Puasa yang Segar dan Menyehatkan', 'Dimit', '21 april, 2020', 'Saat berpuasa, tubuh kita akan rentan mengalami kekurangan cairan. Maka dari itu, Anda perlu mencukupi asupan cairan dalam tubuh selama puasa saat sahur dan berbuka puasa. Namun jangan asal minum, sebaiknya Anda memilih minuman buka puasa yang tidak hanya menghilangkan rasa haus saat berbuka, tetapi juga menyehatkan.\nMinuman yang segar dan menyehatkan dapat mengisi kembali energi tubuh yang hilang selama berpuasa. Tubuh manusia terdiri dari kurang lebih 60% air dan rata-rata akan mengeluarkan sebanyak kurang lebih 2-3 liter cairan melalui urine, keringat, dan napas. Hal ini juga berlangsung saat Anda berpuasa. Oleh karena itu, apabila Anda tidak mengonsumsi cukup cairan saat sahur dan berbuka puasa dapat berisiko menyebabkan dehidrasi. Kondisi ini bisa disebabkan oleh penurunan kadar air secara keseluruhan dalam periode yang lama di dalam tubuh.\nSalah satu minuman buka puasa yang wajib dikonsumsi setiap harinya adalah air putih. Minum air putih saat berbuka puasa dapat membantu mencukupi kebutuhan cairan tubuh yang hilang setelah seharian penuh berpuasa.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
