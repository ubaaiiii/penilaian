-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 11:05 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penilaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_karyawan`
--

CREATE TABLE `list_karyawan` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenisKelamin` varchar(1) NOT NULL,
  `tanggalLahir` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `nomorHandphone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_karyawan`
--

INSERT INTO `list_karyawan` (`nik`, `nama`, `jenisKelamin`, `tanggalLahir`, `agama`, `nomorHandphone`, `email`, `alamat`, `username`, `password`, `role`) VALUES
('2019090000', 'Test Admin', 'L', '1997-08-23', 'ISL', '082119832786', 'test.admin@yahoo.co.id', 'Ds. Asia Afrika No. 965, Sorong 25385', '1', '1', 1),
('2019090001', 'Poppy Indryani', 'P', '2020-07-16', 'ISL', '02193773030', 'poppy.indryani@melani.desa.id', 'Psr. Reksoninten No. 687, Kendari 74323', 'POPIND1607', 'ND1607@!', 0),
('2019090002', 'Calista Kuswandari', 'L', '2019-11-17', 'ISL', '02139277680', 'calista.kuswandari@yahoo.co.id', 'Jl. Raya Pasirkoja No. 144, Pasuruan 67573', 'CALKUS1711', 'US1711@!', 0),
('2019090003', 'Lega Lazuardi', 'P', '2020-01-26', 'ISL', '085911770477', 'lega.lazuardi@sirait.tv', 'Gg. Abdul Muis No. 650, Tangerang 37854', 'LEGLAZ2601', 'AZ2601@!', 0),
('2019090004', 'Uli Wastuti', 'P', '2019-01-27', 'ISL', '02104700440', 'uli.wastuti@yahoo.co.id', 'Jl. Raya Dipenogoro No. 791, Salatiga 88484', 'ULIWAS2701', 'AS2701@!', 0),
('2019090005', 'Rifqi Aria', 'L', '2019-02-19', 'ISL', '088472430873', 'rifqi.aria@gmail.co.id', 'Gg. Gremet No. 889, Pematangsiantar 33055', 'RIFARI1902', 'RI1902@!', 0),
('2019090006', 'Raisa Namaga', 'P', '2020-11-11', 'ISL', '081778302637', 'raisa.namaga@budiman.sch.id', 'Kpg. Honggowongso No. 558, Bau-Bau 53654', 'RAINAM1111', 'AM1111@!', 0),
('2019090007', 'Latika Utami', 'L', '2019-08-31', 'ISL', '080233356101', 'latika.utami@yahoo.co.id', 'Psr. Barasak No. 923, Salatiga 95009', 'LATUTA3108', 'TA3108@!', 0),
('2019090008', 'Nabila Oktaviani', 'P', '2020-04-29', 'ISL', '02173930533', 'nabila.oktaviani@yahoo.co.id', 'Gg. Nanas No. 892, Pasuruan 98116', 'NABOKT2904', 'KT2904@!', 0),
('2019090010', 'Bajragin Wacana', 'P', '2020-01-27', 'KK', '02135392424', 'bajragin.wacana@yahoo.com', 'Kpg. Jambu No. 310, Pasuruan 42066', 'BAJWAC2701', 'AC2701@!', 0),
('2019090011', 'Paulin Widya Oktaviani', 'P', '2018-07-02', 'KK', '02138490462', 'paulin.widya@yahoo.com', 'Gg. Otto No. 699, Sorong 49933', 'PAUOKT0207', 'KT0207@!', 0),
('2019090012', 'Hesti Winarsih', 'L', '2018-02-23', 'KK', '02194335180', 'hesti.winarsih@gmail.com', 'Gg. Yoga No. 512, Tanjungbalai 14549', 'HESWIN2302', 'IN2302@!', 0),
('2019090013', 'Putu Latupono', 'L', '2020-03-31', 'KK', '083726354687', 'putu.latupono@siregar.asia', 'Jl. Raya Ketandan No. 890, Kotamobagu 23287', 'PUTLAT3103', 'AT3103@!', 0),
('2019090014', 'Salwa Oliva Purwanti', 'L', '2019-07-09', 'KK', '02160396382', 'salwa.oliva@yahoo.com', 'Jl. Raya Gotong Royong No. 593, Blitar 14253', 'SALPUR0907', 'UR0907@!', 0),
('2019090015', 'Vicky Puspita', 'L', '2019-01-02', 'KK', '088851075174', 'vicky.puspita@wijayanti.name', 'Gg. K.H. Wahid Hasyim (Kopo) No. 272, Administrasi Jakarta Timur 36107', 'VICPUS0201', 'US0201@!', 0),
('2019090016', 'Aslijan Haryanto', 'L', '2019-07-25', 'KK', '02120847612', 'aslijan.haryanto@yahoo.co.id', 'Ds. Sunaryo No. 346, Mataram 80110', 'ASLHAR2507', 'AR2507@!', 0),
('2019090017', 'Mahfud Prasetyo', 'L', '2020-04-30', 'KK', '086579442561', 'mahfud.prasetyo@yahoo.com', 'Psr. Yosodipuro No. 539, Jambi 69736', 'MAHPRA3004', 'RA3004@!', 0),
('2019090018', 'Lasmanto Pangestu Tampubolon', 'P', '2019-09-03', 'KK', '087461360181', 'lasmanto.pangestu@gmail.com', 'Jl. Raya Bass No. 171, Binjai 98720', 'LASTAM0309', 'AM0309@!', 0),
('2019090019', 'Maria Wulan Namaga', 'L', '2018-05-25', 'KK', '02116194754', 'maria.wulan@gmail.co.id', 'Ds. Baranang No. 781, Administrasi Jakarta Timur 66193', 'MARNAM2505', 'AM2505@!', 0),
('2019090020', 'Jail Rajata', 'P', '2019-03-23', 'KP', '02114597835', 'jail.rajata@yahoo.com', 'Gg. Gardujati No. 638, Makassar 96350', 'JAIRAJ2303', 'AJ2303@!', 0),
('2019090021', 'Qori Astuti', 'L', '2020-12-21', 'KP', '02184375594', 'qori.astuti@yahoo.com', 'Jl. Raya Taman No. 775, Surabaya 83782', 'QORAST2112', 'ST2112@!', 0),
('2019090022', 'Mustika Prasetyo', 'L', '2020-10-18', 'KP', '089078632025', 'mustika.prasetyo@anggraini.desa.id', 'Psr. Bazuka Raya No. 223, Sorong 69677', 'MUSPRA1810', 'RA1810@!', 0),
('2019090023', 'Simon Saputra', 'L', '2019-05-25', 'KP', '02161868935', 'simon.saputra@firgantoro.info', 'Jl. Raya Bagas Pati No. 218, Payakumbuh 92185', 'SIMSAP2505', 'AP2505@!', 0),
('2019090024', 'Oskar Natsir', 'P', '2018-04-26', 'KP', '02173775695', 'oskar.natsir@gmail.co.id', 'Jl. Raya Kebangkitan Nasional No. 149, Banjarbaru 60181', 'OSKNAT2604', 'AT2604@!', 0),
('2019090025', 'Diah Palastri', 'P', '2018-08-11', 'KP', '083571235507', 'diah.palastri@hutasoit.asia', 'Jl. Raya Bara No. 480, Ambon 36671', 'DIAPAL1108', 'AL1108@!', 0),
('2019090026', 'Mustika Nugroho', 'L', '2018-06-02', 'KP', '089441895252', 'mustika.nugroho@laksita.biz', 'Kpg. Dipenogoro No. 167, Payakumbuh 53117', 'MUSNUG0206', 'UG0206@!', 0),
('2019090027', 'Vivi Jessica Lestari', 'L', '2020-06-05', 'KP', '087633240354', 'vivi.jessica@hariyah.mil.id', 'Psr. Warga No. 741, Palangka Raya 99967', 'VIVLES0506', 'ES0506@!', 0),
('2019090028', 'Puput Sadina Wastuti', 'P', '2020-04-16', 'KP', '087704195547', 'puput.sadina@yahoo.co.id', 'Psr. Cikapayang No. 469, Blitar 47032', 'PUPWAS1604', 'AS1604@!', 0),
('2019090029', 'Ella Purwanti', 'P', '2019-08-01', 'KP', '086009180917', 'ella.purwanti@wacana.biz', 'Gg. B.Agam Dlm No. 427, Bontang 16947', 'ELLPUR0108', 'UR0108@!', 0),
('2019090030', 'Omar Budiyanto', 'L', '2018-10-08', 'HIN', '02119273733', 'omar.budiyanto@gmail.com', 'Kpg. Veteran No. 822, Padangsidempuan 20390', 'OMABUD0810', 'UD0810@!', 0),
('2019090031', 'Sabrina Winarsih', 'L', '2018-06-12', 'HIN', '02115057670', 'sabrina.winarsih@yuniar.co', 'Jl. Raya Dago No. 160, Lubuklinggau 31842', 'SABWIN1206', 'IN1206@!', 0),
('2019090032', 'Gambira Suryono', 'P', '2020-03-31', 'HIN', '02188987727', 'gambira.suryono@kuswandari.sch.id', 'Jl. Suniaraja No. 670, Administrasi Jakarta Utara 30181', 'GAMSUR3103', 'UR3103@!', 0),
('2019090033', 'Jail Sitorus', 'L', '2020-10-29', 'HIN', '02132942872', 'jail.sitorus@yahoo.co.id', 'Jl. Hasanuddin No. 499, Administrasi Jakarta Timur 64891', 'JAISIT2910', 'IT2910@!', 0),
('2019090034', 'Aurora Hasanah', 'P', '2019-06-16', 'HIN', '02163630810', 'aurora.hasanah@yahoo.co.id', 'Jl. Laksamana No. 600, Payakumbuh 39167', 'AURHAS1606', 'AS1606@!', 0),
('2019090035', 'Fadli Handoyo Kassi', 'L', '2018-12-11', 'HIN', '02189051362', 'fadli.handoyo@yahoo.com', 'Gg. Daan No. 241, Tual 28973', 'FADKAS1112', 'AS1112@!', 0),
('2019090036', 'Rizqi Ubaidillah', 'L', '2020-11-05', 'HIN', '084157688265', 'rizqi.ubaidillah@latupono.com', 'Ds. Baabur Royan No. 961, Gunungsitoli 98146', 'RIZUBA0511', 'BA0511@!', 0),
('2019090037', 'Wani Laksita', 'P', '2020-10-22', 'HIN', '085809674593', 'wani.laksita@yahoo.co.id', 'Psr. Baranangsiang No. 855, Lubuklinggau 66827', 'WANLAK2210', 'AK2210@!', 0),
('2019090038', 'Reyhan Ali', 'L', '2018-02-20', 'HIN', '02127520040', 'reyhan.ali@yahoo.com', 'Ds. Katamso No. 641, Banjar 75972', 'REYALI2002', 'LI2002@!', 0),
('2019090039', 'Vicky Widiastuti', 'L', '2018-10-22', 'HIN', '087890543842', 'vicky.widiastuti@yahoo.co.id', 'Jl. Raya Urip Sumoharjo No. 387, Bau-Bau 36927', 'VICWID2210', 'ID2210@!', 0),
('2019090040', 'Giovanni Anthionia', 'L', '2020-09-05', 'BUD', '02158989686', 'giovanni.anthionia@gmail.co.id', 'Gg. Padang No. 755, Jambi 64319', 'GIOANT0509', 'NT0509@!', 0),
('2019090041', 'Hesti Mandasari', 'L', '2018-07-13', 'BUD', '02156550501', 'hesti.mandasari@natsir.net', 'Psr. Bakau No. 65, Tanjungbalai 56753', 'HESMAN1307', 'AN1307@!', 0),
('2019090042', 'Chelsea Mala Aryani', 'L', '2019-06-10', 'BUD', '02152540646', 'chelsea.mala@simbolon.info', 'Jl. Raya Kusmanto No. 79, Kendari 84862', 'CHEARY1006', 'RY1006@!', 0),
('2019090043', 'Lulut Hidayat', 'P', '2019-11-05', 'BUD', '02150331428', 'lulut.hidayat@setiawan.go.id', 'Kpg. Supono No. 776, Parepare 35740', 'LULHID0511', 'ID0511@!', 0),
('2019090044', 'Hari Wasita', 'L', '2018-04-03', 'BUD', '02196308936', 'hari.wasita@handayani.ac.id', 'Gg. Daan No. 38, Kendari 26805', 'HARWAS0304', 'AS0304@!', 0),
('2019090045', 'Mila Janet Hassanah', 'P', '2020-03-24', 'BUD', '02104723508', 'mila.janet@usamah.or.id', 'Jl. Laksamana No. 591, Bukittinggi 67007', 'MILHAS2403', 'AS2403@!', 0),
('2019090046', 'Cindy Widya Susanti', 'L', '2018-02-09', 'BUD', '087118564911', 'cindy.widya@ardianto.go.id', 'Kpg. Cikutra Timur No. 57, Tasikmalaya 17890', 'CINSUS0902', 'US0902@!', 0),
('2019090047', 'Bakiadi Prasetya', 'L', '2020-08-01', 'BUD', '02155552424', 'bakiadi.prasetya@mandasari.mil.id', 'Jl. Bakau Griya Utama No. 351, Blitar 34582', 'BAKPRA0108', 'RA0108@!', 0),
('2019090048', 'Raisa Palastri', 'L', '2020-04-17', 'BUD', '02182280793', 'raisa.palastri@yahoo.com', 'Jl. Banda No. 704, Tasikmalaya 24284', 'RAIPAL1704', 'AL1704@!', 0),
('2019090049', 'Jasmani Haryanto', 'L', '2019-06-19', 'BUD', '02110928077', 'jasmani.haryanto@yahoo.com', 'Ds. Peta No. 476, Administrasi Jakarta Utara 88621', 'JASHAR1906', 'AR1906@!', 0),
('2019090050', 'Reinando Sihombing', 'L', '2020-12-01', 'KON', '02108837086', 'reinando.sihombing@gmail.co.id', 'Jl. Wahid Hasyim No. 42, Yogyakarta 95877', 'REISIH0112', 'IH0112@!', 0),
('2019090051', 'Sarah Prastuti', 'P', '2018-12-14', 'KON', '02107199288', 'sarah.prastuti@dongoran.my.id', 'Gg. Lada No. 462, Depok 88719', 'SARPRA1412', 'RA1412@!', 0),
('2019090052', 'Wulan Hilda Yulianti', 'P', '2019-06-07', 'KON', '02192264997', 'wulan.hilda@rahayu.info', 'Jl. Raya Cikutra Timur No. 869, Bogor 54753', 'WULYUL0706', 'UL0706@!', 0),
('2019090053', 'Rina Ilsa Yuniar', 'L', '2018-02-19', 'KON', '082664410150', 'rina.ilsa@safitri.web.id', 'Jl. Raya Pasteur No. 709, Mataram 56143', 'RINYUN1902', 'UN1902@!', 0),
('2019090054', 'Gasti Safina Suartini', 'L', '2019-04-20', 'KON', '088510285481', 'gasti.safina@yahoo.com', 'Jl. Raya Wora Wari No. 636, Tebing Tinggi 33417', 'GASSUA2004', 'UA2004@!', 0),
('2019090055', 'Salsabila Rahmawati', 'L', '2019-07-02', 'KON', '02197578640', 'salsabila.rahmawati@melani.mil.id', 'Ds. Otto No. 492, Batu 96061', 'SALRAH0207', 'AH0207@!', 0),
('2019090056', 'Galur Sabar Pradana', 'P', '2018-08-10', 'KON', '086524746133', 'galur.sabar@gmail.com', 'Jl. Raya Acordion No. 80, Bontang 83130', 'GALPRA1008', 'RA1008@!', 0),
('2019090057', 'Lulut Latupono', 'P', '2018-08-27', 'KON', '02146035908', 'lulut.latupono@gmail.co.id', 'Jl. Abdullah No. 143, Banda Aceh 94936', 'LULLAT2708', 'AT2708@!', 0),
('2019090058', 'Cakrabuana Wibisono', 'L', '2020-04-11', 'KON', '086525807115', 'cakrabuana.wibisono@mandala.go.id', 'Psr. Sugiono No. 657, Semarang 35461', 'CAKWIB1104', 'IB1104@!', 0),
('2019090059', 'Martana Nashiruddin', 'P', '2020-06-28', 'KON', '02125269126', 'martana.nashiruddin@yahoo.com', 'Jl. Raya Badak No. 845, Surakarta 32631', 'MARNAS2806', 'AS2806@!', 0),
('2019090060', 'Eva Laksmiwati', 'L', '2018-01-08', 'ISL', '084998932074', 'eva.laksmiwati@situmorang.web.id', 'Jl. Raya Hasanuddin No. 545, Madiun 82670', 'EVALAK0801', 'AK0801@!', 0),
('2019090061', 'Janet Usada', 'P', '2020-06-08', 'ISL', '02194579113', 'janet.usada@yahoo.com', 'Jl. Raya Jamika No. 659, Kupang 58828', 'JANUSA0806', 'SA0806@!', 0),
('2019090062', 'Adiarja Sitompul', 'P', '2018-10-07', 'ISL', '086366025734', 'adiarja.sitompul@gmail.co.id', 'Jl. Raya Abdul No. 181, Bandung 98876', 'ADISIT0710', 'IT0710@!', 0),
('2019090063', 'Ibrani Ardianto', 'L', '2019-07-14', 'ISL', '080195483475', 'ibrani.ardianto@gmail.com', 'Kpg. Supomo No. 414, Samarinda 86909', 'IBRARD1407', 'RD1407@!', 0),
('2019090064', 'Iriana Ayu Hasanah', 'L', '2020-08-24', 'ISL', '02114842510', 'iriana.ayu@marpaung.go.id', 'Jl. Raya Bahagia  No. 923, Cilegon 58306', 'IRIHAS2408', 'AS2408@!', 0),
('2019090065', 'Gasti Endah Nurdiyanti', 'L', '2020-11-06', 'ISL', '084559654777', 'gasti.endah@winarsih.sch.id', 'Jl. Kusmanto No. 311, Singkawang 61818', 'GASNUR0611', 'UR0611@!', 0),
('2019090066', 'Shakila Rahimah', 'L', '2018-01-24', 'ISL', '081616065962', 'shakila.rahimah@yahoo.com', 'Jl. Baabur Royan No. 154, Magelang 62513', 'SHARAH2401', 'AH2401@!', 0),
('2019090067', 'Tari Rahayu', 'P', '2020-07-08', 'ISL', '02197536951', 'tari.rahayu@aryani.info', 'Gg. Urip Sumoharjo No. 707, Administrasi Jakarta Utara 79613', 'TARRAH0807', 'AH0807@!', 0),
('2019090068', 'Iriana Winarsih', 'P', '2018-09-11', 'ISL', '02159292697', 'iriana.winarsih@purnawati.co.id', 'Psr. Suprapto No. 548, Kotamobagu 78295', 'IRIWIN1109', 'IN1109@!', 0),
('2019090069', 'Harjo Nugroho', 'P', '2018-04-13', 'ISL', '02121878123', 'harjo.nugroho@yahoo.co.id', 'Gg. Babakan No. 756, Palangka Raya 36132', 'HARNUG1304', 'UG1304@!', 0),
('2019090070', 'Ophelia Vanesa Lestari', 'L', '2020-11-01', 'KK', '02175798172', 'ophelia.vanesa@utama.name', 'Ds. Baung No. 56, Pekalongan 54154', 'OPHLES0111', 'ES0111@!', 0),
('2019090071', 'Kalim Hakim', 'P', '2020-03-31', 'KK', '088465476536', 'kalim.hakim@gmail.co.id', 'Jl. Raya Aceh No. 841, Tegal 83093', 'KALHAK3103', 'AK3103@!', 0),
('2019090072', 'Calista Oktaviani', 'P', '2019-08-21', 'KK', '02133754735', 'calista.oktaviani@yahoo.com', 'Psr. Otista No. 753, Malang 17809', 'CALOKT2108', 'KT2108@!', 0),
('2019090073', 'Irreneus Alfiano Grafenelo Yanuar', 'L', '2018-01-07', 'KK', '02144598928', 'irreneus.alfiano@nainggolan.biz.id', 'Jl. Raya Sutan Syahrir No. 104, Balikpapan 42474', 'IRRYAN0701', 'AN0701@!', 0),
('2019090074', 'Darmana Setiawan', 'L', '2018-04-08', 'KK', '084306674407', 'darmana.setiawan@kusmawati.com', 'Jl. Raya Yogyakarta No. 740, Pontianak 20603', 'DARSET0804', 'ET0804@!', 0),
('2019090075', 'Suci Novitasari', 'P', '2019-04-28', 'KK', '02131349067', 'suci.novitasari@mansur.com', 'Jl. Raya Gegerkalong Hilir No. 309, Dumai 48210', 'SUCNOV2804', 'OV2804@!', 0),
('2019090076', 'Dede Apriyani', 'P', '2018-09-30', 'KK', '02122077904', 'dede.apriyani@sudiati.name', 'Kpg. Achmad Yani No. 110, Bogor 66120', 'DEDAPR3009', 'PR3009@!', 0),
('2019090077', 'Almira Nilam Riyanti', 'L', '2019-02-13', 'KK', '087515838034', 'almira.nilam@lestari.co.id', 'Ds. Baik No. 594, Pematangsiantar 69154', 'ALMRIY1302', 'IY1302@!', 0),
('2019090078', 'Yance Handayani', 'L', '2018-05-27', 'KK', '02156042436', 'yance.handayani@gmail.co.id', 'Jl. Fajar No. 976, Langsa 83300', 'YANHAN2705', 'AN2705@!', 0),
('2019090079', 'Radika Lazuardi', 'L', '2018-03-12', 'KK', '02161358613', 'radika.lazuardi@yahoo.co.id', 'Jl. Warga No. 967, Lubuklinggau 75914', 'RADLAZ1203', 'AZ1203@!', 0),
('2019090080', 'Darmaji Prabowo', 'P', '2019-03-18', 'KP', '087060459866', 'darmaji.prabowo@yahoo.com', 'Jl. Juanda No. 309, Serang 56260', 'DARPRA1803', 'RA1803@!', 0),
('2019090081', 'Paulin Hariyah', 'L', '2019-03-14', 'KP', '02104542997', 'paulin.hariyah@gmail.com', 'Gg. Ciumbuleuit No. 778, Balikpapan 67032', 'PAUHAR1403', 'AR1403@!', 0),
('2019090082', 'Harjaya Santoso', 'L', '2020-12-09', 'KP', '086389894280', 'harjaya.santoso@yahoo.co.id', 'Ds. Baya Kali Bungur No. 754, Bitung 13655', 'HARSAN0912', 'AN0912@!', 0),
('2019090083', 'Dhiya Ulhaq Salaahuddin', 'L', '2020-12-10', 'KP', '02173357577', 'dhiya.ulhaq@yahoo.com', 'Gg. Orang No. 364, Sibolga 41091', 'DHISAL1012', 'AL1012@!', 0),
('2019090084', 'Danang Permadi', 'L', '2019-07-26', 'KP', '088607306780', 'danang.permadi@lestari.biz', 'Jl. Moch. Ramdan No. 879, Ternate 76228', 'DANPER2607', 'ER2607@!', 0),
('2019090085', 'Asmianto Maulana', 'L', '2018-05-29', 'KP', '084323145553', 'asmianto.maulana@hutapea.sch.id', 'Ds. Tambak No. 78, Tegal 44682', 'ASMMAU2905', 'AU2905@!', 0),
('2019090086', 'Latika Fitria Hartati', 'P', '2019-10-04', 'KP', '02120879486', 'latika.fitria@gmail.co.id', 'Jl. Adisucipto No. 762, Sibolga 40473', 'LATHAR0410', 'AR0410@!', 0),
('2019090087', 'Muhammad Hilmawan', 'L', '2018-08-02', 'KP', '02163941420', 'muhammad.hilmawan@yolanda.go.id', 'Gg. Bawal No. 111, Kotamobagu 49409', 'MUHHIL0208', 'IL0208@!', 0),
('2019090088', 'Wardaya Bagus Halim', 'L', '2019-02-23', 'KP', '02146107592', 'wardaya.bagus@yahoo.com', 'Jl. Raya B.Agam Dlm No. 931, Bau-Bau 93459', 'WARHAL2302', 'AL2302@!', 0),
('2019090089', 'Banawi Prasetyo', 'L', '2020-08-21', 'KP', '085222054966', 'banawi.prasetyo@gmail.co.id', 'Psr. Surapati No. 843, Palembang 89096', 'BANPRA2108', 'RA2108@!', 0),
('2019090090', 'Wani Mandasari', 'L', '2018-11-12', 'HIN', '02138423513', 'wani.mandasari@thamrin.id', 'Jl. Raya Baiduri No. 262, Bandung 76011', 'WANMAN1211', 'AN1211@!', 0),
('2019090091', 'Ari Satrio Hutomo', 'L', '2019-11-26', 'HIN', '02137441046', 'ari.satrio@gmail.co.id', 'Jl. Kebonjati No. 892, Batu 46139', 'ARIHUT2611', 'UT2611@!', 0),
('2019090092', 'Ikhsan Candra Maulana', 'P', '2020-10-16', 'HIN', '02167225765', 'ikhsan.candra@anggraini.my.id', 'Jl. Baabur Royan No. 133, Tual 46659', 'IKHMAU1610', 'AU1610@!', 0),
('2019090093', 'Taswir Wacana', 'L', '2018-02-14', 'HIN', '084893016154', 'taswir.wacana@yahoo.co.id', 'Kpg. Imam No. 1, Padangpanjang 86537', 'TASWAC1402', 'AC1402@!', 0),
('2019090094', 'Lintang Agustina', 'L', '2019-11-29', 'HIN', '080387094714', 'lintang.agustina@gmail.co.id', 'Ds. Reksoninten No. 933, Blitar 90590', 'LINAGU2911', 'GU2911@!', 0),
('2019090095', 'Lega Budiman ', 'L', '2020-10-24', 'HIN', '081775446767', 'lega.budiman@gmail.co.id', 'Kpg. Gading No. 215, Semarang 55854', 'LEG2410', '410@!', 0),
('2019090096', 'Karen Rahimah', 'L', '2020-11-02', 'HIN', '082365717497', 'karen.rahimah@gmail.com', 'Jl. Basoka Raya No. 510, Padangsidempuan 15243', 'KARRAH0211', 'AH0211@!', 0),
('2019090097', 'Jabal Siregar', 'L', '2020-06-30', 'HIN', '083583164245', 'jabal.siregar@mulyani.biz.id', 'Gg. Babah No. 969, Pekalongan 83065', 'JABSIR3006', 'IR3006@!', 0),
('2019090098', 'Martaka Zulkarnain', 'P', '2020-08-24', 'HIN', '084549496183', 'martaka.zulkarnain@simbolon.asia', 'Ds. Lembong No. 749, Kotamobagu 13627', 'MARZUL2408', 'UL2408@!', 0),
('2019090099', 'Najam Wahyudin', 'L', '2019-07-28', 'HIN', '081845151880', 'najam.wahyudin@melani.sch.id', 'Ds. Bakau Griya Utama No. 32, Bitung 11306', 'NAJWAH2807', 'AH2807@!', 0),
('2020010001', 'Ubai Dillah', 'L', '1997-08-23', 'ISL', '087877200523', 'emailnya@ubai.com', 'jalanan ubai', 'UBADIL2308', 'UD@2308!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `list_kriteria`
--

CREATE TABLE `list_kriteria` (
  `kode` varchar(8) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `bobot` int(11) NOT NULL,
  `atribut` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_kriteria`
--

INSERT INTO `list_kriteria` (`kode`, `deskripsi`, `bobot`, `atribut`) VALUES
('K2019002', 'Meloncat', 10, 'COS'),
('K2019003', 'Mengapung', 8, 'BEN'),
('K2020003', 'Berenang', 4, 'BEN');

-- --------------------------------------------------------

--
-- Table structure for table `list_nilai`
--

CREATE TABLE `list_nilai` (
  `nik` varchar(10) NOT NULL,
  `K2019002` int(3) DEFAULT NULL,
  `K2019003` int(3) DEFAULT NULL,
  `K2020003` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_nilai`
--

INSERT INTO `list_nilai` (`nik`, `K2019002`, `K2019003`, `K2020003`) VALUES
('2019090000', 10, 10, 100),
('2019090001', 31, 63, 82),
('2019090002', 11, 73, 89),
('2019090003', 32, 85, 60),
('2019090004', 38, 68, 94),
('2019090005', 38, 62, 71),
('2019090006', 25, 65, 92),
('2019090007', 11, 74, 67),
('2019090008', 32, 86, 79),
('2019090010', 20, 86, 62),
('2019090011', 19, 63, 83),
('2019090012', 14, 92, 92),
('2019090013', 25, 86, 69),
('2019090014', 28, 66, 89),
('2019090015', 14, 64, 97),
('2019090016', 32, 81, 81),
('2019090017', 27, 79, 93),
('2019090018', 26, 66, 84),
('2019090019', 20, 82, 80),
('2019090020', 16, 64, 90),
('2019090021', 24, 66, 71),
('2019090022', 35, 70, 65),
('2019090023', 30, 83, 94),
('2019090024', 31, 83, 95),
('2019090025', 16, 94, 93),
('2019090026', 39, 60, 82),
('2019090027', 36, 85, 69),
('2019090028', 32, 97, 79),
('2019090029', 15, 95, 89),
('2019090030', 37, 74, 69),
('2019090031', 18, 60, 99),
('2019090032', 22, 60, 67),
('2019090033', 30, 60, 60),
('2019090034', 15, 73, 78),
('2019090035', 20, 99, 71),
('2019090036', 28, 99, 64),
('2019090037', 10, 97, 85),
('2019090038', 39, 99, 93),
('2019090039', 26, 76, 69),
('2019090040', 38, 98, 89),
('2019090041', 23, 79, 99),
('2019090042', 20, 78, 88),
('2019090043', 34, 77, 84),
('2019090044', 30, 74, 95),
('2019090045', 14, 92, 84),
('2019090046', 20, 68, 77),
('2019090047', 32, 92, 72),
('2019090048', 17, 78, 68),
('2019090049', 20, 87, 66),
('2019090050', 29, 98, 65),
('2019090051', 30, 68, 70),
('2019090052', 27, 70, 93),
('2019090053', 36, 62, 74),
('2019090054', 19, 95, 75),
('2019090055', 15, 66, 91),
('2019090056', 39, 98, 93),
('2019090057', 33, 93, 91),
('2019090058', 25, 70, 77),
('2019090059', 11, 78, 91),
('2019090060', 20, 75, 85),
('2019090061', 16, 77, 91),
('2019090062', 24, 83, 64),
('2019090063', 32, 78, 64),
('2019090064', 23, 80, 71),
('2019090065', 30, 77, 63),
('2019090066', 24, 93, 81),
('2019090067', 20, 61, 75),
('2019090068', 22, 60, 76),
('2019090069', 39, 60, 93),
('2019090070', 11, 98, 60),
('2019090071', 20, 65, 81),
('2019090072', 36, 64, 83),
('2019090073', 15, 84, 76),
('2019090074', 39, 91, 69),
('2019090075', 38, 74, 98),
('2019090076', 28, 60, 63),
('2019090077', 11, 97, 82),
('2019090078', 35, 81, 82),
('2019090079', 35, 91, 65),
('2019090080', 29, 62, 97),
('2019090081', 21, 63, 72),
('2019090082', 36, 60, 89),
('2019090083', 10, 82, 91),
('2019090084', 35, 81, 87),
('2019090085', 31, 72, 63),
('2019090086', 35, 67, 74),
('2019090087', 27, 92, 83),
('2019090088', 13, 79, 94),
('2019090089', 24, 66, 80),
('2019090090', 28, 84, 60),
('2019090091', 11, 66, 79),
('2019090092', 11, 86, 77),
('2019090093', 16, 96, 86),
('2019090094', 17, 70, 62),
('2019090095', 11, 60, 70),
('2019090096', 39, 98, 67),
('2019090097', 17, 60, 64),
('2019090098', 29, 79, 60),
('2019090099', 38, 77, 88);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_pivot`
--

CREATE TABLE `nilai_pivot` (
  `kriteria` varchar(8) NOT NULL,
  `pivot` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilai_pivot`
--

INSERT INTO `nilai_pivot` (`kriteria`, `pivot`) VALUES
('K2019002', 10),
('K2019003', 99),
('K2020003', 100);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_preferensi`
--

CREATE TABLE `nilai_preferensi` (
  `nik` varchar(10) NOT NULL,
  `K2019002` float NOT NULL,
  `K2019003` float NOT NULL,
  `K2020003` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilai_preferensi`
--

INSERT INTO `nilai_preferensi` (`nik`, `K2019002`, `K2019003`, `K2020003`) VALUES
('2019090000', 1, 0.101, 1),
('2019090001', 0.3226, 0.6364, 0.82),
('2019090002', 0.9091, 0.7374, 0.89),
('2019090003', 0.3125, 0.8586, 0.6),
('2019090004', 0.2632, 0.6869, 0.94),
('2019090005', 0.2632, 0.6263, 0.71),
('2019090006', 0.4, 0.6566, 0.92),
('2019090007', 0.9091, 0.7475, 0.67),
('2019090008', 0.3125, 0.8687, 0.79),
('2019090010', 0.5, 0.8687, 0.62),
('2019090011', 0.5263, 0.6364, 0.83),
('2019090012', 0.7143, 0.9293, 0.92),
('2019090013', 0.4, 0.8687, 0.69),
('2019090014', 0.3571, 0.6667, 0.89),
('2019090015', 0.7143, 0.6465, 0.97),
('2019090016', 0.3125, 0.8182, 0.81),
('2019090017', 0.3704, 0.798, 0.93),
('2019090018', 0.3846, 0.6667, 0.84),
('2019090019', 0.5, 0.8283, 0.8),
('2019090020', 0.625, 0.6465, 0.9),
('2019090021', 0.4167, 0.6667, 0.71),
('2019090022', 0.2857, 0.7071, 0.65),
('2019090023', 0.3333, 0.8384, 0.94),
('2019090024', 0.3226, 0.8384, 0.95),
('2019090025', 0.625, 0.9495, 0.93),
('2019090026', 0.2564, 0.6061, 0.82),
('2019090027', 0.2778, 0.8586, 0.69),
('2019090028', 0.3125, 0.9798, 0.79),
('2019090029', 0.6667, 0.9596, 0.89),
('2019090030', 0.2703, 0.7475, 0.69),
('2019090031', 0.5556, 0.6061, 0.99),
('2019090032', 0.4545, 0.6061, 0.67),
('2019090033', 0.3333, 0.6061, 0.6),
('2019090034', 0.6667, 0.7374, 0.78),
('2019090035', 0.5, 1, 0.71),
('2019090036', 0.3571, 1, 0.64),
('2019090037', 1, 0.9798, 0.85),
('2019090038', 0.2564, 1, 0.93),
('2019090039', 0.3846, 0.7677, 0.69),
('2019090040', 0.2632, 0.9899, 0.89),
('2019090041', 0.4348, 0.798, 0.99),
('2019090042', 0.5, 0.7879, 0.88),
('2019090043', 0.2941, 0.7778, 0.84),
('2019090044', 0.3333, 0.7475, 0.95),
('2019090045', 0.7143, 0.9293, 0.84),
('2019090046', 0.5, 0.6869, 0.77),
('2019090047', 0.3125, 0.9293, 0.72),
('2019090048', 0.5882, 0.7879, 0.68),
('2019090049', 0.5, 0.8788, 0.66),
('2019090050', 0.3448, 0.9899, 0.65),
('2019090051', 0.3333, 0.6869, 0.7),
('2019090052', 0.3704, 0.7071, 0.93),
('2019090053', 0.2778, 0.6263, 0.74),
('2019090054', 0.5263, 0.9596, 0.75),
('2019090055', 0.6667, 0.6667, 0.91),
('2019090056', 0.2564, 0.9899, 0.93),
('2019090057', 0.303, 0.9394, 0.91),
('2019090058', 0.4, 0.7071, 0.77),
('2019090059', 0.9091, 0.7879, 0.91),
('2019090060', 0.5, 0.7576, 0.85),
('2019090061', 0.625, 0.7778, 0.91),
('2019090062', 0.4167, 0.8384, 0.64),
('2019090063', 0.3125, 0.7879, 0.64),
('2019090064', 0.4348, 0.8081, 0.71),
('2019090065', 0.3333, 0.7778, 0.63),
('2019090066', 0.4167, 0.9394, 0.81),
('2019090067', 0.5, 0.6162, 0.75),
('2019090068', 0.4545, 0.6061, 0.76),
('2019090069', 0.2564, 0.6061, 0.93),
('2019090070', 0.9091, 0.9899, 0.6),
('2019090071', 0.5, 0.6566, 0.81),
('2019090072', 0.2778, 0.6465, 0.83),
('2019090073', 0.6667, 0.8485, 0.76),
('2019090074', 0.2564, 0.9192, 0.69),
('2019090075', 0.2632, 0.7475, 0.98),
('2019090076', 0.3571, 0.6061, 0.63),
('2019090077', 0.9091, 0.9798, 0.82),
('2019090078', 0.2857, 0.8182, 0.82),
('2019090079', 0.2857, 0.9192, 0.65),
('2019090080', 0.3448, 0.6263, 0.97),
('2019090081', 0.4762, 0.6364, 0.72),
('2019090082', 0.2778, 0.6061, 0.89),
('2019090083', 1, 0.8283, 0.91),
('2019090084', 0.2857, 0.8182, 0.87),
('2019090085', 0.3226, 0.7273, 0.63),
('2019090086', 0.2857, 0.6768, 0.74),
('2019090087', 0.3704, 0.9293, 0.83),
('2019090088', 0.7692, 0.798, 0.94),
('2019090089', 0.4167, 0.6667, 0.8),
('2019090090', 0.3571, 0.8485, 0.6),
('2019090091', 0.9091, 0.6667, 0.79),
('2019090092', 0.9091, 0.8687, 0.77),
('2019090093', 0.625, 0.9697, 0.86),
('2019090094', 0.5882, 0.7071, 0.62),
('2019090095', 0.9091, 0.6061, 0.7),
('2019090096', 0.2564, 0.9899, 0.67),
('2019090097', 0.5882, 0.6061, 0.64),
('2019090098', 0.3448, 0.798, 0.6),
('2019090099', 0.2632, 0.7778, 0.88);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_terbobot`
--

CREATE TABLE `nilai_terbobot` (
  `nik` varchar(10) NOT NULL,
  `T2019` float NOT NULL,
  `T2020` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilai_terbobot`
--

INSERT INTO `nilai_terbobot` (`nik`, `T2019`, `T2020`) VALUES
('2019090000', 10.808, 4),
('2019090001', 8.3171, 3.2799),
('2019090002', 14.9901, 3.5599),
('2019090003', 9.9938, 2.4),
('2019090004', 8.1272, 3.7599),
('2019090005', 7.6423, 2.8399),
('2019090006', 9.2528, 3.68),
('2019090007', 15.0709, 2.68),
('2019090008', 10.0746, 3.16),
('2019090010', 11.9496, 2.48),
('2019090011', 10.3542, 3.3199),
('2019090012', 14.5773, 3.68),
('2019090013', 10.9496, 2.7599),
('2019090014', 8.9046, 3.5599),
('2019090015', 12.3149, 3.88),
('2019090016', 9.6705, 3.24),
('2019090017', 10.0879, 3.72),
('2019090018', 9.1796, 3.3599),
('2019090019', 11.6263, 3.2),
('2019090020', 11.4219, 3.5999),
('2019090021', 9.5006, 2.8399),
('2019090022', 8.5137, 2.5999),
('2019090023', 10.0401, 3.7599),
('2019090024', 9.9332, 3.7999),
('2019090025', 13.846, 3.72),
('2019090026', 7.4128, 3.2799),
('2019090027', 9.6468, 2.7599),
('2019090028', 10.9633, 3.16),
('2019090029', 14.3437, 3.5599),
('2019090030', 8.683, 2.7599),
('2019090031', 10.4048, 3.96),
('2019090032', 9.3938, 2.68),
('2019090033', 8.1818, 2.4),
('2019090034', 12.5662, 3.1199),
('2019090035', 13, 2.8399),
('2019090036', 11.571, 2.5599),
('2019090037', 17.8383, 3.4),
('2019090038', 10.5639, 3.72),
('2019090039', 9.9876, 2.7599),
('2019090040', 10.5512, 3.5599),
('2019090041', 10.7319, 3.96),
('2019090042', 11.3031, 3.5199),
('2019090043', 9.1634, 3.3599),
('2019090044', 9.3129, 3.7999),
('2019090045', 14.5773, 3.3599),
('2019090046', 10.4952, 3.0799),
('2019090047', 10.5594, 2.88),
('2019090048', 12.1851, 2.72),
('2019090049', 12.0303, 2.64),
('2019090050', 11.3671, 2.5999),
('2019090051', 8.8282, 2.7999),
('2019090052', 9.3607, 3.72),
('2019090053', 7.7883, 2.96),
('2019090054', 12.9397, 3),
('2019090055', 12.0006, 3.64),
('2019090056', 10.4831, 3.72),
('2019090057', 10.5452, 3.64),
('2019090058', 9.6567, 3.0799),
('2019090059', 15.3941, 3.64),
('2019090060', 11.0608, 3.4),
('2019090061', 12.4724, 3.64),
('2019090062', 10.8742, 2.5599),
('2019090063', 9.4281, 2.5599),
('2019090064', 10.8127, 2.8399),
('2019090065', 9.5554, 2.5199),
('2019090066', 11.6822, 3.24),
('2019090067', 9.9295, 3),
('2019090068', 9.3938, 3.0399),
('2019090069', 7.4128, 3.72),
('2019090070', 17.0101, 2.4),
('2019090071', 10.2527, 3.24),
('2019090072', 7.9499, 3.3199),
('2019090073', 13.455, 3.0399),
('2019090074', 9.9175, 2.7599),
('2019090075', 8.612, 3.92),
('2019090076', 8.4198, 2.5199),
('2019090077', 16.9293, 3.2799),
('2019090078', 9.4025, 3.2799),
('2019090079', 10.2105, 2.5999),
('2019090080', 8.4583, 3.88),
('2019090081', 9.8532, 2.88),
('2019090082', 7.6268, 3.5599),
('2019090083', 16.6263, 3.64),
('2019090084', 9.4025, 3.48),
('2019090085', 9.0443, 2.5199),
('2019090086', 8.2714, 2.96),
('2019090087', 11.1384, 3.3199),
('2019090088', 14.076, 3.7599),
('2019090089', 9.5006, 3.2),
('2019090090', 10.359, 2.4),
('2019090091', 14.4246, 3.16),
('2019090092', 16.0406, 3.0799),
('2019090093', 14.0075, 3.44),
('2019090094', 11.5387, 2.48),
('2019090095', 13.9398, 2.7999),
('2019090096', 10.4831, 2.68),
('2019090097', 10.7307, 2.5599),
('2019090098', 9.8319, 2.4),
('2019090099', 8.8544, 3.5199);

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

CREATE TABLE `rangking` (
  `nik` varchar(10) NOT NULL,
  `R2019` float NOT NULL,
  `R2020` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rangking`
--

INSERT INTO `rangking` (`nik`, `R2019`, `R2020`) VALUES
('2019090000', 40, 1),
('2019090001', 90, 43),
('2019090002', 8, 26),
('2019090003', 58, 95),
('2019090004', 93, 9),
('2019090005', 96, 67),
('2019090006', 78, 18),
('2019090007', 7, 79),
('2019090008', 56, 52),
('2019090010', 26, 93),
('2019090011', 52, 40),
('2019090012', 9, 18),
('2019090013', 37, 73),
('2019090014', 82, 26),
('2019090015', 22, 5),
('2019090016', 65, 47),
('2019090017', 55, 12),
('2019090018', 79, 37),
('2019090019', 28, 50),
('2019090020', 31, 25),
('2019090021', 69, 67),
('2019090022', 87, 83),
('2019090023', 57, 9),
('2019090024', 60, 7),
('2019090025', 16, 12),
('2019090026', 98, 43),
('2019090027', 67, 73),
('2019090028', 36, 52),
('2019090029', 12, 26),
('2019090030', 85, 73),
('2019090031', 50, 2),
('2019090032', 74, 79),
('2019090033', 92, 95),
('2019090034', 20, 55),
('2019090035', 18, 67),
('2019090036', 29, 86),
('2019090037', 1, 35),
('2019090038', 43, 12),
('2019090039', 59, 73),
('2019090040', 45, 26),
('2019090041', 41, 2),
('2019090042', 33, 31),
('2019090043', 80, 37),
('2019090044', 77, 7),
('2019090045', 9, 37),
('2019090046', 47, 56),
('2019090047', 44, 65),
('2019090048', 23, 78),
('2019090049', 24, 82),
('2019090050', 32, 83),
('2019090051', 84, 71),
('2019090052', 76, 12),
('2019090053', 95, 63),
('2019090054', 19, 61),
('2019090055', 25, 20),
('2019090056', 48, 12),
('2019090057', 46, 20),
('2019090058', 66, 56),
('2019090059', 6, 20),
('2019090060', 35, 35),
('2019090061', 21, 20),
('2019090062', 38, 86),
('2019090063', 71, 86),
('2019090064', 39, 67),
('2019090065', 68, 90),
('2019090066', 27, 47),
('2019090067', 61, 61),
('2019090068', 74, 59),
('2019090069', 98, 12),
('2019090070', 2, 95),
('2019090071', 53, 47),
('2019090072', 94, 40),
('2019090073', 17, 59),
('2019090074', 62, 73),
('2019090075', 86, 4),
('2019090076', 89, 90),
('2019090077', 3, 43),
('2019090078', 72, 43),
('2019090079', 54, 83),
('2019090080', 88, 5),
('2019090081', 63, 65),
('2019090082', 97, 26),
('2019090083', 4, 20),
('2019090084', 72, 33),
('2019090085', 81, 90),
('2019090086', 91, 63),
('2019090087', 34, 40),
('2019090088', 13, 9),
('2019090089', 69, 50),
('2019090090', 51, 95),
('2019090091', 11, 52),
('2019090092', 5, 56),
('2019090093', 14, 34),
('2019090094', 30, 93),
('2019090095', 15, 71),
('2019090096', 48, 79),
('2019090097', 42, 86),
('2019090098', 64, 95),
('2019090099', 83, 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_karyawan`
--
ALTER TABLE `list_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `list_kriteria`
--
ALTER TABLE `list_kriteria`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `list_nilai`
--
ALTER TABLE `list_nilai`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `nilai_pivot`
--
ALTER TABLE `nilai_pivot`
  ADD PRIMARY KEY (`kriteria`);

--
-- Indexes for table `nilai_preferensi`
--
ALTER TABLE `nilai_preferensi`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `nilai_terbobot`
--
ALTER TABLE `nilai_terbobot`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
