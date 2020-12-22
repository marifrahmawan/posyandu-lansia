-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Nov 2020 pada 09.30
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lansia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('03b99p8ls8m38o478r48ddi79u6df9gl', '::1', 1554773506, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343737333231323b),
('0a0peh6jn6nstum8sku1cb2eegspgilu', '::1', 1554834142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343833343134323b),
('0lchdiltroie1na5jl49e9osb92jrn5q', '::1', 1555168441, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353136383135333b),
('12lh1t5ofmfbp0283iiegs2tn6df7gs6', '::1', 1555233903, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353233333839373b),
('16f3ijlc96o1tnp3t49v25i5d667enst', '::1', 1554773625, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343737333537343b),
('212hu04fug6lv2ghshaer9pp9gkamanc', '::1', 1555221579, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232313333303b),
('29695a4p9aeo7m1opvqt2i92c9sd93oc', '::1', 1554732139, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733323131393b),
('4rqumorl0ja6ldokgvg2fd9o97ihmvfi', '::1', 1554816362, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343831363335373b),
('5a59dc9fbrs4q8o555naaeqnaqb840tt', '::1', 1555221329, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232313032393b),
('5cq5vv4uu1rc8f4425r2q7uquhvd0v6t', '::1', 1554772148, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343737313834393b),
('5hlukhvo2hatjcgnt9c2iaea51l5romg', '::1', 1554771362, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343737313132383b),
('5joo51uqcb9onsucljtmf9g58vl5mke5', '::1', 1554814511, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343831343330303b),
('6ikcvh6derf96vdqrek6llnocgr8ve01', '::1', 1554736593, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733363330303b),
('6j0stlknbcbut8ogq2bg7rgj5ami0n26', '::1', 1554733887, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733333635383b),
('6u21ip4nl3t7h40eqr039lcpl9s7jbht', '::1', 1554735985, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733353638393b),
('7as8pm9bibkbbf3a0q3eg0qkpkrd78ic', '::1', 1554738571, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733383339323b),
('8vf5aqv8t13kd3087d6o6v2in3duniju', '::1', 1554738020, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733373733363b),
('bgd21m8i9ub2sd2qgebeq0e9v0qfmmkt', '::1', 1555169070, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353136383833323b),
('bsoji8n7nk0faf0m8e6lsf32eg6q7t2k', '::1', 1554732737, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733323436333b),
('cmenb0hvab762okgms4nt4k846k6b71p', '::1', 1554735290, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733353032323b),
('cv4oomkakiqq8ibulrc2be43kgo1aulk', '::1', 1555230593, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353233303539333b),
('d1nsu87a33vbs76846ivbekr3apjuok1', '::1', 1554737703, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733373432343b),
('d89sem5cri4su5vb3at6bah3el5959rp', '::1', 1555232228, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353233323232383b),
('did8p4r4i9riroto97jraedkbn5ncof5', '::1', 1555223764, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232333536303b),
('e73bt752mqm1bcjpkaiu2i6mf4mknqrf', '::1', 1555165267, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353136353236303b),
('f68viqeegfos66fqsqmtrsn5v7o10tej', '::1', 1554831824, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343833313831343b),
('fbcvpq98d6l450lr2ib3at3072gu2v1p', '::1', 1555167649, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353136373433303b),
('fr6qrg2ji7sq46djgs4cbe214bo8spv1', '::1', 1554771524, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343737313436383b),
('gbgcgrl2kgh22f0eg7ql57odmap9rhu9', '::1', 1555171351, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353137313231333b),
('h4rht4mo2b2e6l05a9bhtrco5vfkn1oe', '::1', 1555234326, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353233343239313b),
('ihn6g760kep1ahc00i0hflc2k07stgei', '::1', 1555231908, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353233313930383b),
('in9niuf492fnaqn2es4jkm69jrrvelk9', '::1', 1554817880, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343831373632363b),
('isp5udeg34bap0og9gffrf7bltmugh2j', '::1', 1554734899, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733343633343b),
('jffrilocbag9tgbob7gq55tdoo1t5fc8', '::1', 1554735555, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733353332363b),
('jjbgnktmibe9vej5g5ptd9ig3il5f6gd', '::1', 1554738361, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733383036383b),
('k1rtimg49s1dc5ai2ip265jv9earog97', '::1', 1555168797, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353136383531393b),
('k517s2thjn2gbim5ia48e29a1crvkrhu', '::1', 1554772445, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343737323135323b),
('kgfpf0a621r8ts6buiposa8etod59pg0', '::1', 1554817262, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343831373236323b),
('ki0ll1mfj2l1q0f8dp6kt3l95911s07c', '::1', 1554734284, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733343238343b),
('km992ao5034sg1bluma1qbpta2qhhi6h', '::1', 1555220274, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232303031393b),
('ktse0vmorsdbb652o5kt35mgps9ho9eh', '::1', 1554736910, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733363631313b),
('lej6v172ddqba3si4idhktdolfe7vedf', '::1', 1554734222, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733333938313b),
('lobumgsr750ld3kqq2enlk29kvit4oli', '::1', 1554770880, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343737303831383b),
('m85l0osqhd542isfls784e10mk6qugtb', '::1', 1555223546, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232333235313b),
('mq2i8phtla3c7vl7494klbg6p5jevepn', '::1', 1555234852, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353233343835323b),
('nuajbb3h822s8aio7qe9g68se4v7bdnm', '::1', 1555168116, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353136373832353b),
('ob13og989gfvr2f0nck1vrl7muo08k2n', '::1', 1555229682, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232393530333b),
('ofr719hls59dfjdsm7hd1hh3lrecv90n', '::1', 1555221958, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232313638353b),
('oslnd38dd3dlq5qbavcvd9voi607tdt0', '::1', 1555220688, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232303339313b),
('p646dlofnq1chi1ira1t2jo3no9ae55s', '::1', 1554815792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343831353638333b),
('pjjklsuvl44jfg1b9gr3bupefpbk83t1', '::1', 1555224196, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232333933313b),
('q0mn4isaj5gu63uf44nh06lff5gnkknt', '::1', 1555224687, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232343634313b),
('q43c15dt6vf5ospdjhh0og01cgivdbv0', '::1', 1555220985, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232303639333b),
('rbt6toueama83t9d2gqu0gu2fmqgc688', '::1', 1554733124, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733323835343b),
('roavten9hb0f7hu0qfjeb4lfaf8t76jl', '::1', 1555224564, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232343331383b),
('roi8dsc08se2bga68p6dutngqk3vd0f7', '::1', 1555222513, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232323531333b),
('soh266j3ldmu2b7ug67koevdp27ge8cp', '::1', 1554736286, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733353939343b),
('sq6l47jfhgmrd3r1tt44sobtvagic65j', '::1', 1554815388, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343831353334323b),
('ti0htitcdgum17v8391she66qfj7ebpk', '::1', 1554773087, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343737323831373b),
('u9b5b47bupv872ve1p86i9pu2b7481iq', '::1', 1554772784, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343737323438353b),
('ukcu45kr0k14bt1vg3bba9vt2c2ruho1', '::1', 1554818226, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343831383030313b),
('uqb51t14htfn150r9n74joecnpbeii5i', '::1', 1554737063, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733363932333b),
('v49cvcqsu9cqpef9hd4lah1gsj1s0bq0', '::1', 1554733304, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343733333232343b),
('vfehc1o29qlcier6o9o39m34tklmsrk6', '::1', 1554834263, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343833343134323b),
('vtgb9a62thvi0sfc27k4ebar7pduippd', '::1', 1555221989, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535353232313938383b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_lansia`
--

CREATE TABLE `data_lansia` (
  `kode_lansia` varchar(65) NOT NULL,
  `nama_lansia` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `ttl` varchar(40) NOT NULL,
  `umur` int(11) NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `jarak` int(11) NOT NULL,
  `tinggal_bersama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_lansia`
--

INSERT INTO `data_lansia` (`kode_lansia`, `nama_lansia`, `alamat`, `rt`, `jenis_kelamin`, `ttl`, `umur`, `riwayat_penyakit`, `jarak`, `tinggal_bersama`) VALUES
('5cbdfe7dbfc14', 'Samsudin', 'Lombok', '5', 'Laki - Laki', '1969-04-17', 56, 'Demam', 2, 'Anak'),
('5eef51522a43a', 'M. Arif Rahmawan', 'Jl. Ringroad Selatan, Kragilan, Tamanan, Kec. Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55191', '03', 'Laki - Laki', '13/09/1961', 59, 'Darah Tinggi', 4, 'Anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penyakit`
--

CREATE TABLE `data_penyakit` (
  `kode_penyakit` varchar(65) NOT NULL,
  `nama_penyakit` varchar(55) NOT NULL,
  `anjuran` text NOT NULL,
  `pantangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penyakit`
--

INSERT INTO `data_penyakit` (`kode_penyakit`, `nama_penyakit`, `anjuran`, `pantangan`) VALUES
('5ccb2dd845145', 'Hipertensi', 'Pola makan sehat dengan sedikit garam, olahraga rutin, dan konsumsi obat dapat membantu menurunkan tekanan darah', 'Garam yg berlebih, Acar, Kulit Ayam, Mie Instan, Daging Merah, Kopi, Alkohol'),
('5ccb366540be3', 'Diabetes Melitus tipe 2', 'Diet sehat, Olahraga, Teratur minum obat, Terapi insulin, Rutin konsultasi ke dokter', 'Minuman Mengandung Gula Berlebih, Roti Putih, Pasta dan Nasi, Kopi, Makan Makanan Ringan, Kentang Goreng'),
('5ccb37c2748a3', 'Osteoporosis', 'Susu dan produk susu, Kacang, Sayuran, Ragi, Kurma, Sinar matahari, Buah-buahan, Sayuran hijau gelap, Kacang-kacangan, Telur, Aktivitas fisik, Omega-3, Suplemen, Ikan', 'Soft drinks, Garam, Kafein, Alkohol, Daging merah'),
('5eef531dc8748', 'Kelelahan', 'Mengonsumsi makanan dengan gizi seimbang, Menghindari makanan yang tinggi gula, Memperbanyak konsumsi buah dan sayur, Makan dalam porsi yang kecil dan lebih sering, Membatasi konsumsi alkohol dan kafein, serta menghindari konsumsi kafein di sore atau malam hari.', 'Pola makan yang tidak sehat, Konsumsi kafein yang berlebihan, Kurang tidur, Aktivitas fisik yang berlebihan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `kode_periksa` varchar(65) NOT NULL,
  `kode_lansia` varchar(65) NOT NULL,
  `tgl_periksa` varchar(40) NOT NULL,
  `tensi` varchar(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `gula_darah` int(11) NOT NULL,
  `kolesterol` int(11) NOT NULL,
  `diagnosa` varchar(65) DEFAULT NULL,
  `keluhan` varchar(300) DEFAULT NULL,
  `perawatan_tambahan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`kode_periksa`, `kode_lansia`, `tgl_periksa`, `tensi`, `berat_badan`, `tinggi_badan`, `gula_darah`, `kolesterol`, `diagnosa`, `keluhan`, `perawatan_tambahan`) VALUES
('5edcd50f51b16', '5cbdfe7dbfc14', '07/06/2020', '80/100', 45, 165, 90, 75, 'Hipertensi', 'Sakit Dada', 'Pemeriksaan Ke Rumah Sakit'),
('5eef5268c3d18', '5eef51522a43a', '14/03/2020', '160/80', 49, 165, 140, 200, 'Hipertensi', 'Sakit kepala, Lemas, Sesak napas, Nyeri dada', 'Pemeriksaan Ke Puskesmas'),
('5eef62f6c7b00', '5eef51522a43a', '16/04/2020', '180/80', 50, 165, 150, 200, 'Hipertensi', 'Sakit kepala, Lemas, Sesak napas, Nyeri dada', 'Pemeriksaan Ke Puskesmas'),
('5f17f3a143631', '5cbdfe7dbfc14', '22/02/2022', '13', 12, 132, 321, 23, 'Hipertensi', 'SDASD', 'Pemeriksaan Ke Puskesmas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(65) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `level`, `password`) VALUES
('5cd44278ddff3', 'Admin', 'super_admin', 1, 'd4e8e6deaa7b1f8381e09e3e6b83e36f0b681c5c'),
('5f6ab058b3174', 'admin1', 'admin1', 2, 'c7f5b90d4daa1df76af753d0a23c973f0242a508');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `data_lansia`
--
ALTER TABLE `data_lansia`
  ADD PRIMARY KEY (`kode_lansia`);

--
-- Indexes for table `data_penyakit`
--
ALTER TABLE `data_penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`kode_periksa`),
  ADD KEY `kode_pasien` (`kode_lansia`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD CONSTRAINT `pemeriksaan_ibfk_1` FOREIGN KEY (`kode_lansia`) REFERENCES `data_lansia` (`kode_lansia`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
