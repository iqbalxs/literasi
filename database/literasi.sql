-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Agu 2017 pada 12.18
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `literasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Muhamad Iqbal', 'muhamad.iqbal46@gmail.com', '089692825280', 'Tes ini saya', '2017-07-20 08:49:39', '2017-07-20 08:49:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_posts`
--

CREATE TABLE `main_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `viewcount` int(11) NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `main_posts`
--

INSERT INTO `main_posts` (`id`, `title`, `content`, `image`, `category`, `user_id`, `viewcount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lomba Lagu Semangat GLS WJLRC 2016-2017', '<p>Alhamdulillah, Banyak hal baik bisa terlaksana di Oktober ini dalam program GLS WJLRC.<br />Kami sangat berterima kasih Bapak dan Ibu penggerak yang hebat. Semoga keberuntungan penuh berkah menjadi rezeki baik untuk kita.</p>\r\n<p>Kembali kami berikan kejutan khusus di minggu ini untuk Bapak dan Ibu penggerak yang memiliki bakat membuat lagu penyemangat.</p>\r\n<p>Adapun&nbsp;<strong>PERSYARATAN LOMBA LAGU SEMANGAT&nbsp;</strong>Gerakan Literasi Sekolah WJLRC 2016-2017 adalah sebagai berikut:</p>\r\n<ul>\r\n<li><strong>Durasi lagu</strong><br />4-5 menit direkam dan diunggah pada youtube dengan hastag #LaguGLSWJLRC,<strong>Syair Lagu dituliskan di kolom keterangan youtube tersebut.</strong>&nbsp;Dan unggah di web literasi.jabarprov.go.id atau group sosial media Literasi Jawa Barat.</li>\r\n<li><strong>Materi</strong><br />Mengajak warga sekolah dan masyarakat menyukseskan GLS WJLRC</li>\r\n<li><strong>Musik</strong><br />Irama sedang, cepat, dan bersemangat</li>\r\n<li><strong>Lirik Lagu&nbsp;</strong>boleh menggunakan Bahasa Inggris</li>\r\n</ul>\r\n<p><strong>Kirimkan Karya Anda sebelum TANGGAL:</strong></p>\r\n<ul>\r\n<li>1 November sampai dengan 10 November 2016 (Waktu mengunggah dan seleksi)</li>\r\n<li>Pengumuman PEMENANG pada tanggal 20&nbsp; November 2016</li>\r\n</ul>\r\n<p><strong>Para PEMENANG JUARA I dan II berhak mendapatkan hadiah sebagai berikut:</strong></p>\r\n<ul>\r\n<li>Hadiah I<br />500.000 dan piagam penghargaan Disdik Prov Jabar + Paket Buku Baru</li>\r\n<li>Hadiah II<br />250.000 dan piagam penghargaan Disdik Prov Jabar+ Palet Buku Baru</li>\r\n</ul>\r\n<p>Karya yang masuk menjadi milik Disdik Prov Jabar. SELAMAT BERKARYA Semoga menjadi amal&nbsp;&nbsp; sholeh.</p>\r\n<p>&nbsp;</p>\r\n<p>*Lomba ini disponsori dan didukung penuh oleh Donatur dan DISDIK Prov Jabar</p>', NULL, 'announcement', 1, 22, 'Publish', '2017-07-10 20:41:29', '2017-07-19 05:46:41'),
(4, 'Pengumuman Tantangan PRC 2017', '<div dir=\"auto\">\r\n<div dir=\"auto\">\r\n<div dir=\"auto\">\r\n<div dir=\"auto\">300 MEDALI PENGHARGAAN Internasional dari Premier\'s Reading Challenge (PRC) South Australia, telah tersedia untuk para peserta WJLRC 2017.</div>\r\n<div dir=\"auto\">&nbsp;</div>\r\n<div dir=\"auto\">Peserta WJLRC ditantang PRC untuk membaca dan mereviu minimal 3 bacaan tentang South Australia, kemudian membuat essay baru tentang South Australia (sekitar 400 kata), dengan ketentuan sbb.</div>\r\n<div dir=\"auto\">a. Sumber bacaan boleh buku atau online.</div>\r\n<div dir=\"auto\">b. Teknik review bebas</div>\r\n<div dir=\"auto\">c. Boleh menggunakan bacaan berbahasa Indonesia atau Inggris</div>\r\n<div dir=\"auto\">d. Boleh menulis essay dalam bahasa Indonesia atau bahasa Inggris.&nbsp;</div>\r\n<div dir=\"auto\">&nbsp;</div>\r\n<div dir=\"auto\">Syarat peserta tantangan PRC:</div>\r\n<ol dir=\"ltr\">\r\n<li>Peserta WJLRC yang telah menyelesaikan kegiatan membaca dan melaporkan review nya ke web literasi Jabar, dengan jumlah minimal 24 buku.</li>\r\n<li>Pada semester 2 depan masih tercatat aktif sebagai siswa SD, SMP dan SMA/K.</li>\r\n</ol>\r\n<div dir=\"auto\">&nbsp;</div>\r\n<div dir=\"auto\">Masa tantangan adalah 10 April sampai dengan 10 Juli 2017.</div>\r\n<div dir=\"auto\">Karya peserta dikirim mulai 1 Juni 2017 ke email&nbsp;exchangechallenge.PRC@gmail.com</div>\r\n<div dir=\"auto\">&nbsp;</div>\r\n<div dir=\"auto\">&nbsp;3 April 2017, dua orang peserta dikmen yaitu Dela Agisti (SMAN 1 Jalan Cagak Subang) dan Aldi Aldinar (SMAN 1 Cisarua Kab Bandung Barat) telah mendapat penghargaan dari Gubernur Jabar dan Menteri South Australia. Keduanya mewakili peserta WJLRC dikmen yang telah menuntaskan tantangan 10 bulan, berhasil mereview lebih dari 24 buku dan menjadi 2 pengirim tercepat dalam tantangan menulis draft naskah buku.</div>\r\n<div dir=\"auto\">&nbsp;</div>\r\n<div dir=\"auto\">Penyerahan penghargaan untuk peserta WJLRC DIKMEN lain yang telah lulus tantangan, Insha Allah akan dilaksanakan di Dispusipda Jawa Barat selepas musim ujian sekolah (undangan menyusul).</div>\r\n<div dir=\"auto\">&nbsp;</div>\r\n<div dir=\"auto\">Untuk peserta WJLRC DIKDAS, penyerahan sertifikat dan medali akan diselenggarakan sekitar Oktober 2017.&nbsp;</div>\r\n<div dir=\"auto\">&nbsp;</div>\r\n<div dir=\"auto\">Pelaporan portofolio yang diunggah ke web, bukan \"keindahan karya review\" yang utama dinilai tapi kejelasan makna bacaan yang diikat dan ketepatan waktu pelaporan setiap bulan.&nbsp;</div>\r\n<div dir=\"auto\">&nbsp;</div>\r\n<div dir=\"auto\">Kegiatan mereview hasil bacaan sebaiknya bisa dilakukan dengan sederhana, hemat waktu dan biaya tapi tetap jelas terbaca hasilnya di kertas A4 (memudahkan dokumentasi portofolio).&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>', NULL, 'announcement', 1, 2, 'Publish', '2017-07-10 20:46:40', '2017-07-18 22:45:38'),
(5, 'Workshop Literasi Sekolah Perintis', '<p>Kegiatan workshop literasi sekolah perintis secara bertahap akan mulai pada tanggal 27 Juli - 18 Agustus 2016 di enam daerah, yakni Bandung, Cianjur, Garut, Kota Cirebon, Kuningan dan Pangandaran. Peserta workshop ini sebanyak 2.600 orang tenaga perintis literasi sekolah yang terdiri dari 600 SD dan 700 SMP dari kabupaten/kota se Jawa Barat terdiri atas kepala sekolah dan guru. Peserta terbagi dalam 26 angkatan dan setiap angkatan masing-masing terdiri dari 100 orang.</p>', NULL, 'announcement', 1, 1, 'Publish', '2017-07-10 20:47:46', '2017-07-19 05:47:34'),
(7, 'Prinsip-prinsip Dasar Menulis Artikel', '<p>Artikel atau tulisan (karangan) bebas yang tidak terikat oleh pola-pola tertentu, yang biasa digunakan dalam media (cetak/offline atau online). Pada hakikatnya, tulisan artikel sejenis atau senafas dengan tulisan yang disebut opini, kolom, resensi, dan lain-lain. Perbedaan nama itu terjadi karena terdapatnya perbedaan teknis dalam pemuatannya, atau bidang kajian yang digunakannya. Artikel disebut juga karya tulis ilmiah populer karena bahasanya bisa diserap oleh semua kalangan.</p>\r\n<p>Nah, karena terdapat kesamaan beragam nama tulisan itu, namun pada hakikatnya sama. Guna memahami hakikat tulisan (karangan) bebas, apakah itu esai atau resensi, opini atau artikel, dan atau karangan bebas yang lainnya, maka prinsip-prinsip dasar menulis artikel ini berguna juga bagi prinsip dasar tulisan yang lain.<br />Kaidah temporer: Artikel adalah karya tulis, dan hakikat karya tulis adalah menyodorkan argumentasi.<br />Prasyarat tulisan yang baik, yaitu&nbsp;enak dibaca dan perlu, semestinya memenuhi unsur-unsur berikut ini:<br />- Menggunakan tatabahasa dan gaya bahasa yang masuk akal;<br />- Analitis;<br />- Kritis;&nbsp;<br />- Disampaikan secara runut dengan metode deduktif atau induktif; dan<br />- Disertai data dan fakta, baik hasil penelitian maupun&nbsp;pengamatan di sekitar lingkungan.</p>\r\n<p>Catatan:&nbsp;</p>\r\n<ol>\r\n<li>Tulisan asli hasil karya sendiri</li>\r\n<li>Panjang tulisan/karangan 500 - 1.500 kata</li>\r\n<li>Menyertakan pas foto penulis</li>\r\n</ol>\r\n<p>Penanggung jawab redaksi Artikel: Esep Muhammad Zaini</p>', NULL, 'announcement', 1, 1, 'Publish', '2017-07-10 20:49:30', '2017-07-19 05:47:05'),
(10, 'Semarak Literasi Hardiknas 2017', '<p>Hari Pendidikan Nasional tidak melulu dilaksanakan dengan melakukan Upacara Bendera saja, di kota Cirebon, tim literasi yang juga penggerak dan perintis gerakan literasi sekolah (GLS) mengadakan kegiatan istimewa yang mungkin di daerah lain tidak ada atau belum ada yang melakukannya. Ya, di penghujung bulan April tepatnya dari tanggal 26-30 April 2017 bertempat di Atrium CSB Mall Cirebon, telah diselenggarakan berbagai lomba literasi yang dikemas dalam acara Semarak Literasi Hardiknas 2017.</p>\r\n<p>Di antara lomba yang diadakan adalah Lomba Rangking 1 yang diadakan untuk tingkat SD dan SMP. Antusiasme siswa dalam mengikuti lomba ini sangat tinggi, terlebih dari keikutsertaan siswa yang ternyata tidak hanya peserta dari tim literasi sekolah saja, siswa yang sekolahnya belum tergabung dalam kegiatan GLS pun turut serta memeriahkan lomba yang teknisnya mengharuskan siswa membaca dan meriview buku KKPK Manusia Sejuta Fobia karya Aisya Aulia Sudarajat terlebih dahulu, sebelum mereka benar-benar terlibat langsung dalam lomba tersebut.</p>\r\n<p>Data yang kami peroleh, peserta lomba Ranking 1 tingkat SD sebanyak 107 peserta dari beberapa sekolah di Kota Cirebon. Dan alhamdulillah, Ananda Najma Alexandria Novalina, yang juga peserta WJLRC, lolos menjadi juara Ranking 1, menyisihkan ratusan peserta lainnya. Selain Najma, di hari Ahad kemarin 30 April 2017, Inayatun Rofiah juga masuk dalam babak final 8 besar lomba Cipta Puisi buku Rindu untuk Mama, dari puluhan peserta yang berasal dari beberapa sekolah dasar di Kota Cirebon. Semoga, semakin banyak kegiatan positif lainnya yang membangun dan membentuk siswa dan generasi muda kita menjadi pribadi yang berilmu, dan cinta membaca, sehingga mereka menjadi insan literat yang akan mengangkat nama baik Indonesia di mata dunia. (Afi)</p>', 'dc809ea924e3e16daffe5f736f03c9d1.jpg', 'news', 1, 9, 'Publish', '2017-07-10 22:59:53', '2017-07-18 22:24:16'),
(12, 'Terserahx', '<p>Terserahx</p>', 'e569be9a263e5840a73ec7dedd00af7e.jpg', 'news', 1, 2, 'Draft', '2017-07-10 23:39:08', '2017-07-11 03:24:22'),
(14, 'Kembangkan Potensi Siswa Melalui Beragam Peminatan', '<p>Setiap anak mempunyai potensi di dalam dirinya. Potensi tersebut sejatinya telah melekat pada anak semenjak lahir ke dunia. Oran tua atau atau institusi lain seperti sekolah hanya tinggal mengembangkan setiap potensi anak tersebut dalam beragam kegiatan yang diminatinya.</p>\r\n<p>SMP Islam Fitrah Al Fikri di jalan Raden Saleh, Kota Depok, dalam upaya mengembangkan potensi anak atau para siswanya membuat program khusus kegiatan berkelanjutan yang terintegrasi dengan setiap mata pelajaran. Kegiatan tersebut dilaksanakan selama tahun pembelajaran dan diberi nama &ldquo;peminatan&rdquo;. Pada setiap akhir semester, para siswa yang bergabung dalam peminatan masing-masing tesebut diberi kesempatan untuk unjuk potensinya dalam acara yang diberi tajuk &ldquo;Talent Expo&rdquo; seperti yang baru saja dilaksanakan pada Minggu, 19 Maret 2017.</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;Talent Expo ini merupakan pengembangan potensi siswa yang tidak hanya berkutat dengan urusan akademik atau otak kanan. Otak kiri juga perlu dikembangkan, agar para siswa belajar secara komprehensif dan seimbang,&rdquo; kata kepala SMPIF Al Fikri Nur Alam Astuti dalam sambutannya di hadapan para orang tua siswa yang hadir sebagai undangan utama.</p>\r\n<p>Dalam Talent Expo tersebut para siswa SMPIF Al Fikri wajib menampilkan hasil peminatan yang diikutinya. Sebelumnya, para siswa dibagi ke dalam dua bentuk peminatan, yakni peminatan yang bersifat tampilan pentas dan peminatan yang besifat pameran produk.</p>\r\n<p>Pada peminatan yang bersifat tampilan pentas para siswa sangat antusias unjuk kemampuan terbaiknya seperti dalam bermain musik, berakting teater, scientific da&rsquo;i, story telling, baca puisi, dan tahfidz Al Quran.&nbsp; Sedangkan bentuk lainnya yang bersifat pameran produk ada beberapa karya yang ditampilkan seperti dari peminatan fotografi, islamic math, menulis kreatif, jurnalistik, seni rupa, dan desain grafis.</p>\r\n<p>Baik peminatan yang bersifat pentas maupun tampilan produk, semuanya sangat luar biasa kreatif. Para siswa terlihat begitu serius dengan garapan peminatannya masing-masing. Pada tampilan teater, misalnya, para siswa tidak hanya berhasil memanggungkan naskah ke dalam pentas, melainkan mampu menggarap puisi ke dalam bentuk teater. Bayangkan saja, kelompok teater dari kelas 7 mampu menggubah puisi Emha Ainun Najib berjudul &ldquo;Ketika Engkau Bersujud&rdquo; ke dalam pentas teatrikal yang memukau hingga penonton dibuat takjub dan memberikan tepuk tangan yang gemuruh.</p>\r\n<p>Para siswa yang tergabung dalam peminatan non pentas juga tak kalah kreatif dalam unjuk kemampuannya. Seperti yang terlihat dari peminatan jurnalistik, para siswa memperlihatkan hasil produk jurnalistiknya dalam bentuk majalah yang dikemas ekslusif dan diberi nama &ldquo;Nuevas&rdquo;. Majalah ini dicetak&nbsp;<em>full colour</em>&nbsp;dan penuh gambar pada kertas berkualitas dengan tata letak yang menarik dipandang mata. Di dalamnya terdapat beberapa tulisan siswa seperti catatan traveling, aneka tips, transkrip siaran radio, dan berita-berita seputar kegiatan di sekolah.</p>\r\n<p>Dari kelompok peminatan menulis kreatif juga tak kalah menakjubkan. Para siswanya menghasilkan sebuah buku yang diberi judul &ldquo;Bumi Marah&rdquo;. Buku setebal 400 halaman tersebut memuat sekitar tiga puluh cerita pendek yang semuanya hasil karya siswa.</p>\r\n<p>Guru peminatan menulis kreatif Dewi Sulistiayani mengungkapkan bahwa buku kumpulan kaya tulis siswa tersebut dibuat untuk memberi ruang berkarya di bidang tulis menulis atau literasi siswa.</p>\r\n<p>&ldquo;Buku ini adalah buku ketiga yang dihasilkan dari peminatan menulis kreatif. Peminatan tahun lalu kita menerbitkan dua buku yang memuat karya siswa berupa puisi dan cerita pendek. Ini kami persembahkan dalam rangka mewujudkan budaya literasi di kalangan siswa SMPIF Al Fikri khususnya dan di Indonesia pada umumnya,&rdquo; katanya.</p>\r\n<p>Tidak hanya itu, dari acara Talent Expo ini terlihat semua tampilan dan produk-produk yang terwujud dari kreatifitas kelompok peminatan lainnya juga patut diapresiasi tinggi karena semua hasil yang siswa hadirkan adalah bentuk nyata yang lahir dari pebelajaran yang menghargai kemampuan atau talenta setiap siswa. Guru, dalam hal ini, telah berlaku sesuai fungsinya, yakni sebagai fasilitator atau pemberi semangat bagi siswanya.</p>\r\n<p>&nbsp;</p>\r\n<p>Secara umum, kegiatan Talent Expo yang digelar ketiga kalinya ini terus mendapat tanggapan positif dari para siswa dan orang tua siswa. Yasser Haikal, salah satu siswa kelas 7, menyatakan kegambiraannya dengan acara tersebut.</p>\r\n<p>&ldquo;Saya menyukai peminatan teater karena mengasah rasa percaya diri saya. Dan acara-acara semacam Talent Expo ini membuat saya lebih bersemangat belajar di sekolah ini,&rdquo; ucapnya bersemangat.&nbsp;&nbsp;</p>\r\n<p>Tidak hanya siswa, para orang tua siswa juga banyak menilai positif dan berharap agar acara atau kegiatan semacam ini terus dilanjutkan. Bambang Pristyono, salah satu orang tua siswa dari kelas 8, memberi dukungan sekaligus masukan yang positif.</p>\r\n<p>&ldquo;<em>Good job</em>. Terus lanjutkan. Dan saya berharap program Talent Expo ini terus dikembangkan dengan inovasi-inovasi lainnya seperti adanya kolaborasi dari satu peminatan dengan peminatan lainnya,&rdquo; ucapnya seraya mengacungkan jempol.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Ragam Peminatan Siswa di SMPIF Al Fikri</strong></p>\r\n<p>&nbsp;</p>\r\n<p>SMP Islam Fitrah Al Fikri atau kerap disingkat SMPIF Al Fikri adalah sekolah inklusi yang dalam visi dan misinya mengusung pendidikan berkarakter Islam dan berbasis fitrah. Sekolah yang berdiri sejak tahun 1997 ini telah menorehkan banyak prestasi dari beragam program yang dibuatnya, salah satunya adalah program peminatan karena program ini telah dianggap sebagai program khas SMPIF Al Fikri dan tidak ada di sekolah lain.</p>\r\n<p>&nbsp;</p>\r\n<p>Peminatan di SMPIF Al Fikri merupakan program intrakulikuler siswa yang terintegrasi dengan beberapa mata pelajaran. Karena itu, waktunya pun dilaksanakan di jam pembelajaran. Hanya saja, semua peminatan dialokasikan waktunya di jam akhir pembelajaran pada setiap harinya.</p>\r\n<p>&nbsp;</p>\r\n<p>Jumlah total peminatan yang dilaksanakan di SMPIF Al Fikri sekitar dua belas peminatan yang dihimpun dalam tiga rumpun besar. Rumpun-rumpun tersebut masing-masing mengakomodasi empat peminatan. Setiap rumpun diberi nama khusus seperti rumpun Arte, rumpun Lingua, dan rumpun Is-Me. Rumpun Arte mengakomodasi peminatan seni rupa, fotografi, desain grafis, dan musik. Rumpun Lingua mengakomodasi peminatan teater, jurnalistik, English club, dan menulis kreatif. Sedangkan rumpun Is-Me mengakomodasi peminatan islamic math, hadroh, scientific da&rsquo;i, dan tahfidz Al Quran.</p>\r\n<p>&nbsp;</p>\r\n<p>Setiap peminatan diberi kesempatan dua kali untuk tampil di hadapan orang tua. Pada semester pertama, siswa harus presentasi dan membuat workshop di sekolah bersama orang tua dari apa yang telah dipelajarinya dalam peminatan. Acara ini diberi nama Talent Expo-Workshop. Sedangkan pada semester dua, siswa membuat tampilan jadi atau lazim disebut sebagai Talent Expo Raya.</p>\r\n<p>&nbsp;</p>\r\n<p>Setiap siswa dari kelas 7 hingga kelas 9 diwajibkan mengikuti satu peminatan dari setiap rumpunnya. Artinya, dalam setiap tahun ajaran, siswa SMPIF Al Fikri mengikuti tiga peminatan. Peminatan yang dipilih harus berbeda jenisnya. Jenis yang dimaksud adalah yang bersifat pentas dan non pentas. Jika salah satu siswa mengikuti peminatan teater pada rumpun Lingua, misalnya, maka pada rumpun lainnya siswa tersebut harus memilih peminatan yang bukan bersifat pentas, seperti fotografi atau islamic math.</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;Pembedaan jenis tersebut dimaksudkan agar para siswa lebih mampu mengksplorasi talentanya, baik talenta yang memiliki berhubungan langsung dengan respons publik maupun yang tidak berhubungan langsung. Jadi, siswa juga lebih terasah keberaniannya dari dua sisi,&rdquo; kata Kepala SMPIF Al Fikri Nur Alam Astuti.</p>\r\n<p>&nbsp;</p>\r\n<p>Selain itu, imbuhnya, pada Talent Expo berikutnya akan ada penambahan jenis peminatan sekaligus pendalaman dalam upaya mengeksplorasi materi di setiap peminatannya.*|US</p>', '1765c9b5b1e9e26487a69ab3eee89ea8.jpg', 'news', 1, 7, 'Publish', '2017-07-11 03:31:13', '2017-07-18 22:26:01'),
(15, 'Literasi Merupakan Keberaksaraan', '<p>Masyarakat memiliki keragaman budaya, budaya itu berasal dari kata buddhi yang berarti akal, budaya masyarakat yang ada, dibentuk karena kebiasaan (kecerdasan/akal) dan fasilitas alam yang tersedia sebagai sumber kehidupan. Budaya masyarakat merupakan beradapan turun temurun yang tidak lepas dari ilmu pengetahuan. &nbsp;Budaya itu adalah sebuah proses berfikir, yang dipengaruhi oleh agama(keyakinan hati), politik (aturan), bahasa (komunikasi), pakaian (perlindungan diri), bangunan (karya), seni (rasa). Budaya itu juga merupakan hasil karya, cipta dan rasa yang dimiliki manusia.</p>\r\n<p>Literasi adalah keberaksaraan, yaitu kemampuan menulis dan membaca, budaya literasi dimaksudkan untuk melakukan kebiasaan berfikir yang diikuti oleh sebuah proses membaca, menulis yang pada akhirnya apa yang dilakukan dalam sebuah proses kegiatan tersebut akan menciptakan karya. Membudayakan atau membiasakan untuk membaca, menulis itu perlu proses jika memang dalam suatu kelompok masyarakat kebiasaan tersebut memang belum ada atau belum terbentuk.</p>\r\n<p>Ada banyak cara untuk membentuk budaya literasi diantaranya (dekat, mudah, murah, senang, lanjut) :<br />1. &nbsp; &nbsp; &nbsp; Pendekatan akses fasilitas baca (buku dan non buku)<br />2. &nbsp; &nbsp; &nbsp; Kemudahan akses mendapatkan bahan bacaan<br />3. &nbsp; &nbsp; &nbsp; Murah / Tanpa biaya (gratis)<br />4. &nbsp; &nbsp; &nbsp; Menyenangkan dengan segala keramahan<br />5. &nbsp; &nbsp; &nbsp; Keberlanjutan / Continue / istiqomah</p>\r\n<p>Namun sebenarnya upaya itu tidak cukup hanya dengan lima langkah, karena ada penjabaran yang lebih detail. Tidak sekedar ketersediaan fasilitas saja tapi ada cara bagaimana menjalin hubungan antar manusia sehingga hubungan tersebut akan mpengaruhi bagaimana suatu kelompok masyarakat bisa menerima dengan baik apa yang akan menjadi tujuan kita melakukan gerakan literasi.</p>\r\n<p>Hubungan antar manusia itu bisa terjalin baik apabila ada komunikasi, komuikasi dan cara pendekatan yang baik akan bisa menjadi syarat bisa diterimanya fasilitas yang sengaja disediakan buat masyarakat tersebut. Perlu belajar sejarah untuk memasukkan sebuah &ldquo;budaya baru&rdquo; kepada kelompok masyarakat. Dalam sejarah yang bisa kita pelajari adalah masuknya Islam di Indonesia, bagaimana seorang Wali mengajarkan Islam melalui budaya masyarakat. Contoh gamelan sebagai alat musik digunakan untuk syiar Islam, memasukkan ajaran ajaran Islam melalui penciptaan lagu, seperti lagu Lir liri. Penggunaan bedug adalah alat yang digunakan sebagai penanda waktu sholad. Selamatan itu merupakan cara untuk mengajarkan masyarakat memberikan sodakhoh dalam bentuk makanan tapi dikemasnya dengan menggunakan budaya atau kebiasaan masyarakat yang selama ini biasa dilakukan oleh komunitas Hindu.</p>\r\n<p>Trik trik yang perlu dilakukan dalam pengembangan budaya literasi melalui pendekatan kultural bagi seorang pustakawan yang merupakan garis depan dalam perjuangan pencerdasan masyarakat maka ada beberapa hal yang perlu diingat diantaranya adalah :<br />1. &nbsp; &nbsp; &nbsp; Kenali budaya/ kebiasaan masyarakat lokal (tradisi/kebiasaan)<br />2. &nbsp; &nbsp; &nbsp; Kenali tokoh masyarakat (memiliki pengaruh/kepala suku/pemuka agama/kepala desa)<br />3. &nbsp; &nbsp; &nbsp; Kenali fasilitas yang ada di masyarakat, (fasilitas umum)<br />4. &nbsp; &nbsp; &nbsp; Kenali alam dan kondisi lingkungan (alam, geografis, lingkungan, potensi)<br />5. &nbsp; &nbsp; &nbsp; Kenali kearifan lokal : (petuah, aturan)</p>\r\n<p>Lakukan pendekatan secara bertahap dengan berbagai cara diantaranya :<br />1. &nbsp; &nbsp; &nbsp; Sosialiasi : penyampaian niatan dan kegiatan yang akan disediakan buat masyarakat, cara cara akses buku, aturan dan kebijakan yang akan menyertai, dan semua apa yang bisa dimanfaatkan masyarakat.<br />2. &nbsp; &nbsp; &nbsp; Partisipasi : keterlibatan masyarakat secara aktif di setiap kegiatan, termasuk kemungkinan menjadi donatur bagi keberlangsungan Taman Belajar Masyarakat (TBM).<br />3. &nbsp; &nbsp; &nbsp; Silaturahmi : menjalin keakraban antar masyarakat dan tokoh masyarakat, tidak saja untuk sosialisasi tapi untuk kepeluan lainnya, memahami karakter masyarakat, mendapatkan dana, dan mendapatkan dukungan, banyak yang bisa dilakukan saat silaturahmi.</p>\r\n<p>Buatlah kerangka acuan dengan disertai target dan rencana program, dengan menyertakan masyarakat untuk membuatnya apa yang akan di capai dengan fasilitas yang tersedia, untuk membudayakan baca dan tulis. Apa yang sudah dilakukan akan perlu di tinjau ulang untuk melihat tingkat keberhasilannya, dengan tujuan mengatur strategi pendekatan di kemudian hari untuk mencapai tujuan.</p>\r\n<p>Ingat jangan paksa masyarakat membaca jika itu belum menjadi budaya. Masuklah mengikuti budaya yang ada, perlahan tapi pasti &ldquo;membiasakan membaca&rdquo; akan mudah bagi masyarakat jika kita sudah mengenal budayanya, kita sudah mengenal tokoh masyarakat, kita sertakan partisipasi masyarakat. Perlu keahlian khusus bagi pustakawan jika memang tujuan mencerdasakan masyarakat melalui TBM.</p>\r\n<p>Masyarakat adat yang memiliki kearifan lokal sangat kuat, jarang memasukkan budaya membaca dalam lingkungan adatnya, yang ada adalah budaya lisan (tutur), contoh resep obat tradisional di sampaikan secara lisan dan turun temurun, jarang ditemukan buku, tapi dalam suatu temuan bahwa Negara Kertagama memiliki Kakawin (huruf Bali) yang ditulis tahun 1365 oleh mpu Prapanca, dan ditemukan kembali pada tahun 1894 oleh J.L.A. Brandes, konon naskahnya ada di Perpusnas setelah diserahkan oleh Ratu Juliana sekitar tahun 1973, berisi sejarah kerajaan Majapahit. Masih banyak lagi naskah kuno, dari lontar, kulit kayu dan mungkin dinding batu. Dengan tidak &ldquo;merasa&rdquo; perlu akan Kakawin tersebut maka kakawin tersebut berada di Belanda, masih banyak sekali naskah Kuno milik Republik yang sebagaian berada di Belanda. Sehingga mengajarkan baca tulis (literasi) dalam suatu komunitas adat tentu dibutuhkan keahlian khusus, namun apa yang sudah dijelaskan diatas adalah lendasan dasar. Jika sudah terbiasa membaca maka menulis juga akan menjadi lebih mudah, begitu juga menulis akan menjadi mudah jika dibekali oleh kebiasaan membaca. Membiasakan membaca perlu di gelakkan mulai dari dalam kandungan sampai usia renta.</p>\r\n<p><br />Contoh yang sudah YPPI lakukan selama ini salah satunya di daerah Musi Banyuasin, masyarakat transmigrasi yang tidak terbiasa membaca, aktivitasnya di perkebunan karet dan sawit, maka pendekatan yang dilakukan adalah layanan ke kelompok pada sore hari, mengajak anak anak bermain. Ketika layanan ke sekolah mobil perpustakaan melakukan berbagai kegiatan, diantaranya memberikan fasilitas majalah dinding supaya anak anak imajinasi dan karyanya bisa di pajang. Akhirnya dengan seringnya Mobil Perpustakaan keliling datang terbentuklah kebiasaan membaca pada masyarakat tersebut, bahkan ketika mobil berhalangan hadir maka masyarakt menanyakannya melalui sms dan telp.</p>\r\n<p>Di Kabupaten Kepulauan Anambas dilakukan berbagai aktivitas seperti membaca Gurindam 12, membuat pantun dan puisi, mengadakan bazar buku, memasak bersama di balai pertemuan, cara sosialisasi dan mengenalkan buku dengan berbagai aktivitas. Setelah melihat, memegang buku, baru kemudian masyarakat akhirnya terbiasa membaca. Tidak ada yang sulit, jika kita mau berupaya, dan tidak ada yang tidak bisa jika kita sudah mencobanya. Tatangan terberat saat ini adalah media visual yang merampas hati sebagian besar masyarakat untuk menikmatinya, tapi buku visual (e-book) menjadi lebih efisien dan semua itu tergantung pilihan masyarakat. Kesimpulan &agrave; Membaca bagi sebagian masyarakat (komunitas) memiliki berbagai kendala dan kendalanya ini yang perlu ditangani secara bersama, jika tidak, maka &nbsp;kekuatan pribadi tidak akan mampu menjebol tembok pertahanan arus informasi yang mengglobal. Pemerintah, swasta, masyarakat, sekolah, aparat, dan kelompok jika bersama sama maka akan menjadi kekuatan besar untuk sama sama menyadari pentingnya literasi bagi kemajuan dan kecerdasan masyarakat menuju Indonesia cerdas seutuhnya. &ldquo;Salam literasi&rdquo;</p>', '875da771280b33b566f0cee135ca43aa.jpg', 'articles', 1, 8, 'Publish', '2017-07-12 06:54:07', '2017-07-18 22:28:43'),
(16, 'Merekam Jejak Kartini', '<p style=\"text-align: justify;\">&ldquo;Dunia ini adalah perhiasan, dan sebaik-baik perhiasan adalah wanita Sholehah&rdquo; (Al-Hadist)</p>\r\n<p style=\"text-align: justify;\">Hari Kartini diperingati bangsa Indonesia, sebagai hari bagi kaum wanita Indonesia, yang menunjukkan penghargaan yang tinggi terhadap kaum hawa. Tentu saja ini adalah kehormatan yang besar, karena memang wanita diciptakan Sang Pencipta dengan segala keistimewaan. RA Kartini adalah sosok yang memberi inspirasi dan pencerahan bagi kaumnya, surat surat yang dilayangkan kepada sahabatnya di Belanda, Stella Zihandelaar dan Ny. Abendanon adalah sebuah ungkapan curahan hati, tentang sesuatu yang ingin diketahuinya lebih &nbsp;&nbsp;tentang keyakinannnya Islam, dan karena Kartini, adalah&nbsp; wanita maka pada saat itu&nbsp; dilarang untuk belajar tentang banyak hal&nbsp; dan mengetahui lebih dalam tentang Al-qur&rsquo;an.</p>\r\n<p style=\"text-align: justify;\">Curahan hatinya menunjukkan betapa inginnya dia memahami kitabullah Al-Qur&rsquo;an, mengetahui bahwa Islam adalah keyakinan yang mantap dalam jiwanya yang disertai pemahaman dan pengetahuan yang idhar, namun ada keterbatasan, ada kejahiliyahan yang memang &ldquo;dikembangbiakkan&rdquo; bangsa penjajah, secara resmi pemerintahan Belanda saat itu melarang penterjemahan apalagi penafsiran Al-qur&rsquo;an lebih jauh, sehingga guru ngajinya mewanti-wanti dengan mengatakan bahwa &nbsp;Al-qur&rsquo;an terlalu suci untuk diterjemahkan dalam bahasa jawa yang dipahami Kartini.</p>\r\n<p style=\"text-align: justify;\">Tapi&nbsp; Allah adalah Berqodroh Irodah, &nbsp;Maha Berkuasa dan berkehendak menuntun Kartini melalui seorang Kyai untuk mengetahui beberapa zuz&nbsp; Al-qur&rsquo;an yang diyakini Kartini sebagai anugrah terbesar dalam kehidupannya. Buku&nbsp; Habis Gelap Terbitlah terang, menjadi fenomenal, karena sebenarnya gejolak jiwa Kartini yang&nbsp; ingin membebaskan dirinya dalam kegelapan jiwa tanpa cahaya Al-qur&rsquo;an, kepada jiwa yang penuh dengan keimanan dan cahaya betapa kehausannnya untuk terus belajar dan mendapat pencerahan. Habis Gelap Terbitlah terang adalah kumpulan surat surat Kartni berasal dari penggalan ayat Al-quran, Surat Al-baqoroh ayat 257, Yang mencantumkan bnahwa Allah-lah yang telah membimbing orang-orang yang beriman&nbsp; dari gelap kepada cahaya (Minadh Dhulumaati Ilan nuur) yang artinya Allah&nbsp; membimbing &nbsp;menusia yang beriman &nbsp;dari gelapnya kehidupan tanpa berqur&rsquo;an menuju cahaya Ilahi dengan hidup berdasarkan Al-qur&rsquo;an, mengajak manusia dari kegelapan menuju cahaya.Sebenarnya kalau surat Kartini diterjemahkan ke dalam bahasa Al-qur&rsquo;an yang benar, Habis Gelap menuju Cahaya Allah.</p>\r\n<p style=\"text-align: justify;\">Kartini adalah wanita sholehah yang menutupi tubuhnya dengan jilbab , jiwanya sudah tersibghoh dengan celupan Allah melalui Al-qur&rsquo;an, melawan arus kebiasaan berpakaian wanita wanita jawa dan nyonya-nyonya belanda saat itu, karena jiwanya sudah berhijrah untuk meyakini Islam sebagai&nbsp; jalan bagi kehidupannnya. Kartini adalah sejarah yang&nbsp; terpatri dalam jiwa setiap wanita Indonesia. Untuk merayakan hari Kartini begitu banyak euporia yang disuguhkan dalam banyak gaya dan cerita, namun kenyataan sesungguhnya Kartini adalah muslimah yang mengajarkan kepada kita semua wanita Indonesia untuk menjadi hamba Allah yang &nbsp;taat, yang mendudukan tugas, fungsi dan peran yang telah&nbsp; ditetapkan Allah baginya. Emansipasi wanita sebenarnya adalah kemerdekaan wanita Indonesia yang beriman untuk menjadi muslimah,&nbsp;<em>Real&nbsp;</em>Muslimah, yang harus terus &nbsp;menerus belajar ilmu pengetahuan yang bermanfaat dan maslahat bagi dirinya dan keluarganya. Apabila Rasullullah SAW dalam hadistnya mengatakan bahwa wanita adalah madrasah bagi anak-anaknya, maka yang harus dilakukan oleh para wanita adalah membekali dirinya dengan ilmu dan pengetahuan yang dapat diajarkan bagi anak-anak yang dikaruniakan kepadanya.</p>\r\n<p style=\"text-align: justify;\">Wanita adalah tiang negara, sebagai tiang maka wanita adalah penyangga bagi keberlangsungan kehidupan suatu negara, wanita yang ruksak akhlaknya, maka robohlah kehidupan sebuah negara, karena itulah tugas penyangga, haruslah kuat, kokoh, teguh keimanannya, sabar menghadapi berbagai tantangan dan hambatan yang menimpanya, pantang menyerah dan siap berkorban dan ikhlas berjuang untuk menuntaskan tugas, fungsi dan perannya sesuai kehendak Sang Pencipta. Semuanya dapat dilakukan wanita yang muslimah, yang faham siapa dirinya, mengenal Tuhannya, serta memahami tugas dan fungsinya baik sebagai dirinya sendiri, sebagai istri, sebagai ibu, dan sebagai anggota masyarakat yang bermanfaat bagi orang-orang yang dihadirkan dihadapannya.</p>\r\n<p style=\"text-align: justify;\">Semoga kita diberi kekuatan dan keistiqomahan&nbsp; oleh Allah untuk belajar dari kitab suci Al-quran dan Sunnah Rasul-nya, karena itulah sebenarnya jejak rekam Kartini, yang begitu susah payah berjuang ingin mengetahui isi Al-qur&rsquo;an dan dijadikan pedoman bagi kehidupannya. Sekarang Al-qur&rsquo;an dan tafsirnya sudah ada dihadapan kita, bagaimana mungkin kita membiarkannnya merana, tidakkah kita seharusnya mempelajarinya, mengkajinya lalu kita jadikan sebagai arah langkah dalam kehidupan kita. Semoga kita dapat menjadi kartini-kartini yang memiliki jiwa sholehah, karena sebaik-baik perhiasan dunia adalah wanita yang sholehah. Semoga. (Afi)&nbsp;</p>', 'e27853abd06abf9059b7f729b38dcb0e.jpg', 'articles', 1, 11, 'Publish', '2017-07-13 00:58:20', '2017-07-13 00:58:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2017_06_19_015022_laratrust_setup_tables', 1),
(10, '2017_06_19_021142_create_posts_table', 2),
(19, '2017_07_11_021302_create_main_posts_table', 3),
(20, '2017_07_11_021344_create_teacher_posts_table', 3),
(21, '2017_07_11_021400_create_student_posts_table', 3),
(22, '2017_07_11_021417_create_single_posts_table', 3),
(23, '2017_07_20_153205_create_contact_us_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'How To Use Laravel', NULL, NULL),
(2, 'Algolia', 'How to use Algolia', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, '2017-06-18 19:07:34', '2017-06-18 19:07:34'),
(2, 'guru', 'Guru', NULL, '2017-06-18 19:07:34', '2017-06-18 19:07:34'),
(3, 'siswa', 'Siswa', NULL, '2017-06-18 19:07:34', '2017-06-18 19:07:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(3, 3, 'App\\User'),
(6, 2, 'App\\User'),
(7, 3, 'App\\User'),
(10, 2, 'App\\User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `single_posts`
--

CREATE TABLE `single_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `single_posts`
--

INSERT INTO `single_posts` (`id`, `title`, `content`, `category`, `user_id`, `created_at`, `updated_at`) VALUES
(101, 'Daftar Istilah Yang Ada di Website Gerakan Literasi Sekolah', '<p><strong>Big Book Read</strong><br />Guru/orang tua membaca dan bercerita dengan menggunakan gambar-gambar besar, karya manual atau buku cerita besar bila ada.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>E-Book&nbsp;</strong><br />Buku dalam format digital, yang paling umum biasanya dalam format PDF. tapi ada juga ebook dalam format lain.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Fiksi</strong><br />Cerita rekaan hasil karangan atau imajinasi penulis yang dilatarbelakangi oleh kultur, pengalaman batin, filosofi, pendidikan, dan religiuitas.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>GLS</strong><br />Gerakan Literasi Sekolah</p>\r\n<p>&nbsp;</p>\r\n<p><strong>KPM</strong><br />Kata per Menit, satuan kecepatan membaca.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Non Fiksi</strong><br />Jenis karangan eksposisi, argumentasi, fungsional, dan opini; esai mengenai seni atau sastra; biografi; memoar; jurnalisme; serta tulisan-tulisan sejarah, ilmiah, teknis (termasuk elektronika), atau ekonomi.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Pohon GeuLis&nbsp;</strong><br />Pohon GeuLis adalah adalah media informasi yang dibuat menarik dan cantik di dinding kelas atau sekolah untuk merekap informasi identitas dan jumlah buku yang telah dibaca serta direviu para peserta.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Pustakawan</strong><br />Pustakawan adalah Orang yang bertugas dan mengelola perpustakaan yang ada di daerah masing-masing maupun sekolah.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Read Aloud</strong><br />Guru/orang tua membacakan buku dan bercerita dengan suara keras, jelas dan intonasi yang pas</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Readathon</strong><br />Readathon berasal dari gabungan 2 kata, yaitu Read (membaca) dan Marathon (lomba lari jarak jauh). Jadi, Readathon adalah saat di mana kita harus membaca buku dalam jangka waktu tertentu, tanpa berhenti.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Review</strong><br />Review adalah memahami, mengolah referensi, membandingkan dan memberikan pendapat pribadi berdasarkan referensi ilmiah kemudian menyimpulkan/memberi pendapat pribadi.</p>', 'dictionary', 1, '2017-07-10 17:00:00', '2017-07-12 05:36:31'),
(202, 'Daftar Pertanyaan Yang Sering Ditanyakan Pengunjung', '<p><strong>1. Bagaimana cara mengirim artikel yang ingin dimuat di Website Gerakan Literasi Sekolah ?</strong><br />Silahkan ketik artikel anda dalam format ms word, kemudian kirimkan melalui email ke alamat literasi@jabarprov.go.id . Anda akan mendapat pemberitahuan jika artikel anda di muat di halaman artikel.<br /><br /><strong>2. Apakah artikel dan berita yang dibuat harus tentang literasi yang ada di sekolah?&nbsp;</strong><br />Ya, karena website ini mengenai gerakan literasi sekolah, maka artikel dan berita haruslah yang berkaitan dengan kegiatan literasi. Artikel dan berita yang diinput tidak langsung tayang, melainkan melalui proses verifikasi admin aplikasi. Jadi kalau isi artikel dan berita tidak ada hubungannya dengan kegiatan literasi bisa saja di tolak oleh admin aplikasi.<br /><br /><strong>3. Bagaimana cara mengupload foto ke website tersebut ? berapa kapasitasnya?&nbsp;</strong><br />Untuk mengupload foto kedalam website bisa mempergunakan fasilitas yang disediakan di halaman sekolah, Galeri, Foto. Secara sistem tidak ada pembatasan, untuk satu kegiatan pilih foto yang mewakili tidak usah semua foto di upload. Akan lebih baik pada saat mengupload foto ubah dulu resolusi ke ukuran 800 x 600 pixel untuk memperkecil ukuran file foto pada saat uplod. Jangan langsung dari kamera digital atau dari smartphone yang mempunya kualitas foto resolusi tinggi.<br /><br /><strong>4. Bagaimana cara mengunggah video yang berkaitan dengan literasi ke website?</strong><br />Untuk mengunggah video kedalam aplikasi dengan cara, mengunggah video tersebut ke youtube. Diusahkan menggunakan kanal youtube milik sekolah, kemudian masuk ke menu sekolah, galeri dan input video. Panduan secara detail bisa dilihat di halaman download.<br /><br /><strong>5. Adakah waktu khusus untuk penggerak untuk mengirim tulisan atau foto atau video?</strong><br />Sampai saat ini tidak ada waktu khusus bagi penggerak atau sekolah untuk mengirimkan tulisan, foto atau video. Tapi jika suatu saat sekolah sudah aktif semua dan fasilitas servernya tidak memungkinkan untuk input bersamaan bisa saja dilakukan pembagian waktu untuk input data.<br /><br /><strong>6. Harus menghubungi siapa ketika akan mengirmkan tulisan, foto, video, terjadi eror atau gagal?&nbsp;</strong><br />Jika terjadi error atau kegagalan pada saat input data, silahkan hubungi nomor HP yang tertera di halaman kontak atau di kontak yang ada footer halaman web. Jika susah di hubungi bisa melalui email atau dengan mengisi form yang ada di halaman kontak.<br /><br /><strong>7. Adakah kriteria jenis font, huruf, dan ketebalan yang ditentukan ketika mengirmkan tulisan ke web?&nbsp;</strong><br />Jika diperlukan bisa saja merubah ukuran huruf, membuat jadi tebal atau memiringkan kalimat dalam isi tulisan. Hanya harus diperhatikan agar tidak terlalu besar atau mencolok sehingga malah mengganggu pada saat dibaca oleh publik.<br /><br /><strong>8. Apakah yang bertugas sebagaim admin webiste di sekolah kami bisa dilakukan secara bergantian ataukah harus orang yang sama?&nbsp;</strong><br />Setiap sekolah hanya di beri satu user ID dan password untuk input data, user ID dan password tersebut untuk mengatur hak akses ke aplikasi dan bisa di ganti secara berkala. User ID tersebut bisa dipergunakan oleh beberapa guru atau petugas yang ditugaskan untuk input data.<br /><br /><strong>9. Apakah website tersebut untuk sekolah-sekolah yang mengikuti workshop ? Jika tidak bolehkah untuk berpartispasi dalam pengiriman artikel atau berita?&nbsp;</strong><br />Sementara karena ini masih tahap awal, hanya sekolah-sekolah yang ikut dalam workshop yang mempunyai user id dan password. Tapi jika ada siswa, guru atau umum yang belum terdaftar bisa mengirimkan karyanya melalui email ke alamat email yang tertera di kontak. Untuk nanti di bantu oleh tim redaksi website memuatnya kedalam website.<br /><br /><strong>10. Apakah Pengiriman karya siswa harus tentang review buku yang mereka baca? Bolehkah dalam bentuk karya lain?&nbsp;</strong><br />Siswa yang mengikuti kegiatan WJLRC harus membuat review buku untuk kemudian di upload oleh sekolah, review buku bisa berupa teks atau gambar untuk kemudian di foto dan di upload kedalam modul upload review siswa. Selain upload review siswa bagi siswa yang suka menulis disediakan fasilitas untuk menampilkan karyanya dalam karya siswa, sekolah bisa menginputnya dalam modul input karya siswa.<br /><br /><strong>11. Bagaimana cara mendownload ebook yang ada dalam web?</strong><br />Untuk mendownload ebook ada di menu download, disana ada tiga tab, materi yang berisi materi-materi terkait literasi, panduan dll, kemudian aturan-aturan yang terkait dengan literasi, serta ebook. Pilih tab ebook, kemudian pilih buku yang ingin anda download. Klik tombol yang berada di sebelah kanan menampilkan data buku dan link untuk download.<br /><br /><strong>12. Jika sekolah memiliki ebook bolehkah atau bisakah dikirim ke website tersebut? Jika Iya, Bagaimana caranya?&nbsp;</strong><br />Untuk ebook silahkan kirim melalui email ke admin website/redaksi untuk kemudian di bantu memuatnya kedalam modul download/ebook. Untuk ebook ini harus di perhatikan maslaah hak cipta dari ebook yang akan di upload.<br /><br /><strong>13. Bagaimana jika lupa user id dan password, apa yang harus di lakukan ?</strong><br />Jika lupa user id dan password silahkan hubungi admin dengan nomor telepon atau email yang tertera di kontak. Nanti user id dan password sementara akan dikirim melalui email yang tetera di data sekolah.</p>', 'tanya_jawab', 1, '2017-07-10 17:00:00', '2017-07-12 05:37:12'),
(303, 'Sambutan', '<p>Isi Sambutan</p>', 'sambutan', 1, '2017-07-10 17:00:00', '2017-07-11 06:44:55'),
(404, 'Sejarah', '<p><strong>Kilasan Sejarah&nbsp;<em>West Java Leader\'s Reading Challenge</em></strong></p>\r\n<p>Mulai tahun 2010, Dinas Pendidikan Provinsi Jawa Barat menyeleksi dan mengirimkan guru-guru berprestasi dan berdedikasi untuk mengikuti kegiatan pelatihan profesionalisme pendidik di&nbsp;<em>Department for Education and Children Development South Australia</em>&nbsp;(DECD SA). Selama 3 minggu seluruh peserta pelatihan ditugaskan untuk mempelajari hal-hal positif dari sistem pendidikan yang berlaku di sekolah-sekolah South Australia. Kemudian membuat rencana aksi kegiatan pembelajaran yang bisa diterapkan dan dikembangkan di sekolah Indonesia.</p>\r\n<p>Sejak 2012, salah satu kegiatan pendidikan yang diadopsi dan diadaptasi dari sistem pendidikan Australia oleh guru Jawa Barat pasca pelatihan di South Australia adalah program&nbsp;<em>Premier&rsquo;s Reading Challenge&nbsp;</em>(PRC) sebagai usaha pelestarian budaya baca dan peningkatan keterampilan literasi siswa. Dengan izin dan bimbingan langsung Carmel Jones sebagai State Manager dari PRC South Australia, dikembangkan ujicoba pertama&nbsp;<em>West Java Leader&rsquo;s Reading Challenge</em>&nbsp;(WJLRC) di 3 sekolah yaitu SMA Negeri 1 Cisarua Kabupaten Bandung Barat, SMP Negeri 5 Kota Bandung, dan SMP Negeri 1 Subang. Penghargaan perdana untuk para siswa yang berhasil menyelesaikan tantangan membaca dan mereviu buku diberikan langsung oleh Darryl Carter sebagai wakil dari DECD South Australia di Sekolah PascaSarjana Universitas Pendidikan Bandung. Keterangan lebih lanjut tentang PRC dapat dilihat melalui&nbsp;<a href=\"http://www.premiersreadingchallenge.sa.edu.au/\">www.premiersreadingchallenge.sa.edu.au</a></p>\r\n<p>Tahun 2013-2014 Profesor Wahyudin Zarkasyi sebagai Kepala Dinas Pendidikan Provinsi Jawa Barat mengizinkan dilakukan ujicoba tahap kedua serempak di 230 sekolah seJawa Barat dengan dana mandiri para guru alumni pelatihan di Australia. Laporan kegiatan yang berlangsung selama 1 tahun tersebut disampaikan kepada dinas pendidikan provinsi Jawa Barat serta Menteri Pendidikan dan Kebudayaan Republik Indonesia. Dari hasil kegiatan terdata 39 sekolah berhasil menuntaskan program selama 1 tahun. Evaluasi program memperlihatkan bahwa banyak sekolah kesulitan melaksanakan program ini karena rendahnya dukungan pimpinan dan warga sekolah, sehingga dipastikan bahwa sangat dibutuhkan payung hukum yang tegas untuk mendorong kelancaran dan ketangguhan komitmen pelaksana program pada pendidikan budaya literasi di sekolah.</p>\r\n<p>Januari 2015 Gubernur Jawa Barat berkenan mengundang wakil 5 sekolah terbaik dalam program WJLRC 2013-2014 dari kabupaten Bandung, Kabupaten Bandung Barat, Kota Bekasi, Kota Cirebon dan Kabupaten Majalengka untuk makan pagi bersama di kediaman resmi Gubernur, Gedung Pakuan Bandung. Beliau memberikan dukungan dan penghargaan atas contoh kebaikan, ketangguhan dan konsistensi tinggi para peserta WJLRC dalam memenuhi tantangan membaca 24 buku dalam 1 tahun pelaksanaan.</p>\r\n<p>Mei 2015 berlangsung festival Literasi Jawa Barat bertempat di Badan Perpustakaan dan Arsip Daerah Provinsi Jawa Barat. Saat itu Istri Gubernur Jawa Barat, Ibu Netty Heryawan berkenan memberikan medali penghargaan kepada seluruh siswa dan guru pionir WJLRC 2013-2014. Acara tersebut dihadiri pula oleh Direktur bidang International Education Services DECD South Australia.</p>\r\n<p>Juli 2015 Kementerian Pendidikan dan Kebudayaan Republik Indonesia resmi menerbitkan permendikbud no 23 tahun 2015 yang di dalamnya tercantum kebijakan kegiatan wajib membaca 15 menit setiap hari di sekolah sebagai bagian dari program penumbuhan karakter baik. Resmi pula dicanangkan gerakan literasi sekolah (GLS) secara nasional melalui 3 tahap kegiatan yaitu (1) Pembiasaan, kegiatan rutin membaca setiap hari tanpa tagihan. (2) Pengembangan, kegiatan pendidikan literasi di sekolah sebagai ekstrakurikuler dengan tagihan tertentu. (3) Pembelajaran, kegiatan pendidikan literasi terintegrasi ke dalam proses pembelajaran di kelas. Dengan terbitnya payung hukum ini, WJLRC merupakan contoh kegiatan GLS di tahap pengembangan/tahap kedua dalam GLS.</p>\r\n<p>Kepala Dinas Pendidikan Provinsi Jawa Barat DR. Asep Hilman mendukung penuh pencanangan GLS tahap pembiasaan yaitu 15 menit membaca setiap hari di seluruh sekolah di Jawa Barat. Dan mendorong 27 Kabupaten/Kota seJawa Barat untuk terlibat dalam tahap pengembangan dengan menunjuk sekolah-sekolah rintisan dan mengirimkan kepala sekolah beserta 1 guru dari tiap sekolah rintisan tersebut untuk dilatih dan siap melaksanakan program WJLRC dalam tahun anggaran tahun 2016-2017 secara serempak bersama 1300 sekolah rintisan lainnya. Pelaksanaan program selama 10 bulan langsung didata dan diolah secara statistik oleh Bidang Pendidikan Dasar dan Menengah Dinas Pendidikan Provinsi Jawa Barat, melalui web&nbsp;<a href=\"http://www.literasi.jabarprov.go.id/\">www.literasi.jabarprov.go.id</a></p>\r\n<p>Pada Septemper 2015 bertempat di Adelaide South Australia pimpinan tertinggi provinsi Jawa Barat dan South Australia sepakat serta menandatangani&nbsp;<em>MoU Sister Cooperation&nbsp;</em>dalam berbagai bidang pembangunan, termasuk kerjasama lebih lanjut dalam bidang pendidikan. Dalam lampiran perjanjian internasional antara kedua bangsa tersebut tercantum secara jelas bahwa keberhasilan pelaksanaan kerjasama WJLRC dan PRC dapat menjadi salah satu indikator kesuksesan program&nbsp;<em>Sister Cooperation.</em></p>\r\n<p>Peserta WJLRC tahun 2012 sd 2017 merupakan para pionir kebangkitan budaya literasi di sekolah Indonesia. Kesuksesan melewati ujian ketangguhan komitmen, daya persistensi juga resiliensi, latihan menjaga disiplin dengan konsisten, serta memupuk karakter kerjasama, saling menghargai dan mendukung dalam kelompok diharapkan akan terpatri menjadi karakter unggul dlam diri peserta WJLRC. Figur dan energi positif dari para pemimpin Jawa Barat yang menjadi penantang dalam WJLRC pun diharapkan dapat mengalir lancar dan sukses membantu menanamkan karakter baik yang berharga.</p>', 'sejarah', 1, '2017-07-10 17:00:00', '2017-07-12 05:38:07'),
(505, 'Latar Belakang', '<p>West Java Leader&rsquo;s Reading Challenge (WLRC) merupakan Gerakan Literasi Sekolah di Jawa Barat. Program ini mulai dirintis sejak tahun 2012 untuk meningkatkan minat membaca dan menulis bagi para siswa di Jawa Barat. Para pioneernya adalah guru-guru alumni pelatihan di Adelaide Australia Selatan yang dikirim oleh DInas Pendidikan Provinsi Jawa Barat.</p>\r\n<p>WJLRC adalah program adopsi dan adaptasi dari Premiers Reading Chalenge (PRC) yang sudah berhasil dilaksanakan di sekolah-sekolah Adelaide. Seiring dengan kebijakan Kemendikbud tentang Penumbuhan Gerakan Budi Pekerti melalui budaya literasi, Pemerintah Jawa Barat melakukan akselerasi percepatan pembangunan bidang pendidikan satu diantaranya melalui program WJLRC.</p>', 'latar_belakang', 1, '2017-07-10 17:00:00', '2017-07-12 05:38:24'),
(606, 'Struktur Organisasi', '<p><strong>STRUKTUR ORGANISASI<br />WEBSITE LITERASI JABAR</strong></p>\r\n<p><strong>DEWAN PENASIHAT :</strong></p>\r\n<ol>\r\n<li>DR. H. ASEP HILMAN, M.Pd</li>\r\n</ol>\r\n<p>(KEPALA DINAS PENDIDIKAN PROVINSI JAWA BARAT)</p>\r\n<ol start=\"2\">\r\n<li>DR. H. KARYONO, M.Si</li>\r\n</ol>\r\n<p>(SEKRETARIS KEPALA DINAS PENDIDIKAN PROVINSI JAWA BARAT)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>PENANGGUNG JAWAB :</strong></p>\r\n<p>H. FIRMAN ADAM, S.Pd., M.M.Pd<br />(KEPALA BIDANG PENDIDIKAN DASAR)</p>\r\n<p><strong>PIMPINAN REDAKSI&nbsp;&nbsp;&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp; :</p>\r\n<p>HJ. ENDANG SUSILASTUTI, SE., M.M.Pd<br />(KEPALA SEKSI PEMBINAAN SEKOLAH SWASTA)</p>\r\n<p><strong>SEKRETARIS REDAKSI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong></p>\r\n<p>MIA DAMAYANTI, S.Pd, M.Pd</p>\r\n<p><strong>DEWAN REDAKSI&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>\r\n<ol>\r\n<li>ESEP MUHAMMAD, S.Pd., M.M.Pd</li>\r\n<li>DENI PERMANA, S.Pd., M.Pd</li>\r\n<li>DENY ROCHMAN, S.Sos., M.Pd.I</li>\r\n<li>TAUFIK YUSMANSYAH, S.Pd.</li>\r\n<li>LILIS LATIFAH, S.Pd., M.M.Pd</li>\r\n</ol>\r\n<p><strong>STAF AHLI IT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>\r\n<p>BOYKE HENDARSAH</p>\r\n<p><strong>STAF OPERASIONAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp; :</p>\r\n<ol>\r\n<li>R. LUCKY RAHMAN</li>\r\n<li>HARIS SIROJUDIN</li>\r\n<li>SUNDUS AFIFAH</li>\r\n</ol>', 'struktur_organisasi', 1, '2017-07-10 17:00:00', '2017-07-12 05:38:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `student_posts`
--

CREATE TABLE `student_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `viewcount` int(11) NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `student_posts`
--

INSERT INTO `student_posts` (`id`, `title`, `content`, `image`, `user_id`, `viewcount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ini karya pertama saya', '<p>Karya saya yg pertama</p>', '17362ffdcc28d111af4a583bd532087a.jpg', 3, 1, 'publish', '2017-07-13 03:28:17', '2017-07-13 03:31:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teacher_posts`
--

CREATE TABLE `teacher_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `viewcount` int(11) NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teacher_posts`
--

INSERT INTO `teacher_posts` (`id`, `title`, `content`, `image`, `category`, `user_id`, `viewcount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tes Karya Guru', '<p>Ini isinya</p>', '6fa3f1b9fcddd0016d887da1699588f7.jpg', 'karya_guru', 2, 1, 'publish', '2017-07-13 05:01:21', '2017-07-13 05:01:21'),
(2, 'Publikasi ilmiah', '<p>tes publikasi ilmiah</p>', '797fdfa17f9d5999980737a3e8623eaa.png', 'publikasi_ilmiah', 2, 1, 'publish', '2017-07-13 06:01:46', '2017-07-17 18:46:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_id` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `r_id`, `school`, `is_verified`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Literasi', 'admin@gmail.com', NULL, NULL, 1, '$2y$10$sOjKkDfEFrwKmgg0zEfIHe2.EsgYYanZ4upgq7smBm5FIMrDOFLyi', 'rLyuwA3utmg3pmJUUuPmnlrL9gYTagg2TcNZppXyW0rzQJV3Esvqr2qk4Gpn', '2017-06-18 19:07:34', '2017-06-18 19:07:34'),
(2, 'Sample Guru', 'guru@gmail.com', '124000', 'SMK 1 Bandung', 1, '$2y$10$s0NU1NnbnRGHEakOxOhav..x73/AshxPW1Z2Q3qbsteZODvMU.xni', '0QVdZMrxMrqCyPBPjyFwWYrOBz88VAaSTYb1V5SXgR1PFhfoUaNRlxPe96y8', '2017-06-18 19:07:34', '2017-06-18 19:07:34'),
(3, 'Sample Siswa', 'siswa@gmail.com', '432000', 'SMP 2 Bandung', 1, '$2y$10$rDSw9RhfxnJEJP.sbCNQbOYTnH.xM8rkc8m2i.KDMcif/vUvWhTCO', 'tUTvBIYADu9Dv2d7Zl2lvw1PSaTIhDmPT7qzv3T7g54PIwXnzWsD1kGFEgrx', '2017-06-18 19:07:35', '2017-06-18 19:07:35'),
(6, 'Nabilah Ratna Ayu', 'nabilah@gmail.com', '12345', 'SMA 1 Bandung', 1, '$2y$10$41BpItGrPYWkFEccAdcw6OHYcGemiFblectgZyYu1EkSgz/D32AFq', 'wBY1KrDR5vjU5EvbcXV0Y4UAhE4e3xdOQ4c0yddLhaEWlEAPqfoThkF75fPI', '2017-07-19 18:43:36', '2017-07-19 18:43:36'),
(7, 'Melody', 'melody@gmail.com', '17654', 'SMK 1 Karawang', 1, '$2y$10$Q8EBKZeDPbkRUQdGD8hsnu2TjRx/2GghBLnOemxRJcN5WCyYO.BeC', 'mt6tETRl1fD53UC5h3reXR98ok44fRrC8CQqMxNzbVA32GCbhUuLPnpI2UI9', '2017-07-19 19:07:32', '2017-07-19 19:07:32'),
(10, 'Shania', 'shania@gmail.com', '187654', 'SMP 1 Bandung', 0, '$2y$10$yicTdOalRubHbC4O9GMnGe.qUTVIB/zyt9sGH/XvOCMgQAfbyLj1.', 'jLlinkI1A73J9Uiee8ZmnUuZEpe81SsqcfxARwFEUEVibXh2IFDa416x1UnC', '2017-07-19 19:12:12', '2017-07-19 19:12:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_posts`
--
ALTER TABLE `main_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`permission_id`,`user_id`,`user_type`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `single_posts`
--
ALTER TABLE `single_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `single_posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `student_posts`
--
ALTER TABLE `student_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `teacher_posts`
--
ALTER TABLE `teacher_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `main_posts`
--
ALTER TABLE `main_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `single_posts`
--
ALTER TABLE `single_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=607;
--
-- AUTO_INCREMENT for table `student_posts`
--
ALTER TABLE `student_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teacher_posts`
--
ALTER TABLE `teacher_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `main_posts`
--
ALTER TABLE `main_posts`
  ADD CONSTRAINT `main_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `single_posts`
--
ALTER TABLE `single_posts`
  ADD CONSTRAINT `single_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `student_posts`
--
ALTER TABLE `student_posts`
  ADD CONSTRAINT `student_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `teacher_posts`
--
ALTER TABLE `teacher_posts`
  ADD CONSTRAINT `teacher_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
