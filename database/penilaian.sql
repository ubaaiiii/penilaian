-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 10:56 PM
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
('2019090000', 'Rizqi Ubaidillah', 'P', '2019-05-23', 'ISL', '6282119832786', 'Mauris@risus.edu', '9994 Elementum Ave', 'ubai', 'dillah', 1),
('2019090001', 'Poppy Indryani', 'P', '2020-07-16', 'ISL', '0219377303941', 'sit.amet@ligulaDonec.com', 'P.O. Box 553, 7396 Neque. St.', 'NAME', 'Hannah C. Harrison', 0),
('2019090002', 'Sean U. Jennings', 'L', '2019-11-17', 'ISL', '0213927768791', 'Cras@et.org', 'Ap #416-869 Commodo Avenue', 'NAME', 'Chaney W. Randall', 0),
('2019090003', 'Jillian F. Rivera', 'P', '2020-01-26', 'ISL', '6285911770477', 'iaculis.aliquet.diam@lacusUt.co.uk', 'P.O. Box 698, 8698 Neque Av.', 'NAME', 'Merritt N. Payne', 0),
('2019090004', 'Mira V. Baker', 'P', '2019-01-27', 'ISL', '0216247004448', 'eget.varius.ultrices@egestasAliquamfringilla.edu', 'P.O. Box 824, 4151 Aliquam Av.', 'NAME', 'Kasper Q. Frost', 1),
('2019090005', 'Rifqi Aria', 'L', '2019-02-19', 'ISL', '6238472430874', 'consequat.enim.diam@risusvarius.edu', '5094 A, St.', 'NAME', 'Alyssa C. Alexander', 0),
('2019090006', 'Alisa C. Carlson', 'P', '2020-11-11', 'ISL', '6271778302632', 'Cras@mauris.org', '821-8757 Sem Rd.', 'NAME', 'Cora T. Duran', 0),
('2019090007', 'Kyle T. Barr', 'L', '2019-08-31', 'ISL', '6266223336108', 'adipiscing.lobortis@enim.net', '3393 Amet Avenue', 'NAME', 'Abra X. Rios', 0),
('2019090008', 'Edan H. Burns', 'P', '2020-04-29', 'ISL', '0217393053699', 'consequat.purus.Maecenas@sit.edu', '983-1248 Nullam Avenue', 'NAME', 'Mikayla Y. Porter', 0),
('2019090009', 'Gisela D. Sanchez', 'L', '2020-03-17', 'ISL', '6276049109330', 'In.mi@magna.co.uk', 'P.O. Box 273, 2580 Et Av.', 'NAME', 'Perry U. Craig', 1),
('2019090010', 'Alexis Q. Oconnor', 'P', '2020-01-27', 'KK', '0213539242335', 'vitae.erat@enimcondimentumeget.net', 'Ap #503-183 Eu Rd.', 'NAME', 'Rebecca O. Mcbride', 0),
('2019090011', 'Blaze G. Baker', 'P', '2018-07-02', 'KK', '0213849046846', 'amet.orci.Ut@Nunc.edu', '973-3186 Nulla Avenue', 'NAME', 'Felix C. Hebert', 1),
('2019090012', 'Drake E. Cohen', 'L', '2018-02-23', 'KK', '0219433518627', 'iaculis.odio@libero.edu', '892-8233 Nunc Ave', 'NAME', 'Elijah B. Kirkland', 0),
('2019090013', 'Molly D. Sharpe', 'L', '2020-03-31', 'KK', '6213726354685', 'malesuada.ut@ultricesiaculisodio.com', 'Ap #719-4640 Risus Avenue', 'NAME', 'Elvis I. Calhoun', 1),
('2019090014', 'Randall X. Oneil', 'L', '2019-07-09', 'KK', '0216039638617', 'orci.lacus.vestibulum@Vivamusnisi.com', '6901 Nulla. St.', 'NAME', 'Isadora M. Kramer', 0),
('2019090015', 'Connor W. Irwin', 'L', '2019-01-02', 'KK', '6208851075171', 'Vivamus.molestie@Donecconsectetuer.edu', 'P.O. Box 685, 5924 Elit, Avenue', 'NAME', 'Derek K. Gordon', 0),
('2019090016', 'Chaim B. Christian', 'L', '2019-07-25', 'KK', '0212084761857', 'dolor.tempus.non@posuereenimnisl.co.uk', 'P.O. Box 946, 8741 Nibh. Road', 'NAME', 'Melodie P. Dixon', 0),
('2019090017', 'Bryar C. Guerra', 'P', '2020-04-30', 'KK', '6296579442566', 'penatibus.et.magnis@Nullamutnisi.edu', 'P.O. Box 753, 6024 Tellus. Street', 'NAME', 'Joelle T. Moore', 0),
('2019090018', 'Naida P. Mcmillan', 'P', '2019-09-03', 'KK', '6267461360188', 'lectus.justo.eu@ipsumportaelit.ca', 'P.O. Box 105, 3776 Nonummy St.', 'NAME', 'Wallace R. Lewis', 1),
('2019090019', 'Hope T. Leonard', 'L', '2018-05-25', 'KK', '0211619475860', 'interdum.Sed@Curabitur.com', '9048 Dui, Rd.', 'NAME', 'Clinton J. Kline', 1),
('2019090020', 'Deacon R. Galloway', 'P', '2019-03-23', 'KP', '0211459783634', 'in.felis.Nulla@volutpatNulladignissim.org', 'Ap #603-7529 Ut, Rd.', 'NAME', 'Illana H. Hale', 0),
('2019090021', 'Jocelyn D. Lee', 'L', '2020-12-21', 'KP', '0218437559192', 'Etiam.vestibulum@tellusnonmagna.net', 'Ap #780-1298 Neque. Street', 'NAME', 'Ivory L. Daugherty', 0),
('2019090022', 'Isabelle Y. Reed', 'L', '2020-10-18', 'KP', '6249078632626', 'nibh.Phasellus.nulla@nislMaecenas.ca', '6945 Morbi Av.', 'NAME', 'Paloma P. Christian', 0),
('2019090023', 'Castor B. Buck', 'L', '2019-05-25', 'KP', '0216186893384', 'primis.in.faucibus@Suspendisseseddolor.edu', 'Ap #240-820 In Street', 'NAME', 'Kelly W. Wolf', 1),
('2019090024', 'Callum J. Fry', 'P', '2018-04-26', 'KP', '6223737756900', 'cursus@orciDonecnibh.ca', '260-1413 Auctor Av.', 'NAME', 'Rhoda R. Battle', 1),
('2019090025', 'Keith J. Beasley', 'P', '2018-08-11', 'KP', '6283571235507', 'luctus@Nullaeget.ca', '388-8075 Ultrices Road', 'NAME', 'Mark X. Santiago', 1),
('2019090026', 'Leilani Q. Roberson', 'L', '2018-06-02', 'KP', '6249441895256', 'venenatis@egestasligulaNullam.net', 'Ap #622-1537 Morbi Rd.', 'NAME', 'Mia D. Moran', 1),
('2019090027', 'Noel D. Powell', 'L', '2020-06-05', 'KP', '6257633240357', 'metus@metusIn.net', '106-8957 Aliquet St.', 'NAME', 'Tarik N. Craft', 1),
('2019090028', 'Erasmus R. Gray', 'P', '2020-04-16', 'KP', '6267762495542', 'diam.nunc.ullamcorper@commodoat.com', 'P.O. Box 158, 5087 Mus. Av.', 'NAME', 'Kylie E. Terrell', 0),
('2019090029', 'Mara Q. Moses', 'P', '2019-08-01', 'KP', '6296009180914', 'velit.Cras@Etiamgravidamolestie.com', 'Ap #420-2587 Consectetuer Av.', 'NAME', 'Denton S. Morton', 0),
('2019090030', 'Ignacia O. Marshall', 'L', '2018-10-08', 'HIN', '0211927373480', 'Cras.convallis.convallis@Inatpede.net', '435 Sed Avenue', 'NAME', 'Malcolm S. Schroeder', 0),
('2019090031', 'Hasad J. Murray', 'L', '2018-06-12', 'HIN', '0211562576700', 'Quisque@ullamcorpervelitin.edu', 'Ap #312-6085 Sociis St.', 'NAME', 'Madonna B. Doyle', 1),
('2019090032', 'Willa B. Mccullough', 'P', '2020-03-31', 'HIN', '0218898772850', 'egestas.a@vulputatenisi.com', 'Ap #914-5143 Nam Rd.', 'NAME', 'Natalie T. Walter', 0),
('2019090033', 'Ciaran E. Lloyd', 'L', '2020-10-29', 'HIN', '0213294287879', 'Quisque@id.ca', 'Ap #777-2786 Ipsum Rd.', 'NAME', 'Jasper E. Marshall', 1),
('2019090034', 'Hayden O. Ramsey', 'P', '2019-06-16', 'HIN', '0216363081173', 'sed@massa.ca', '3481 In Rd.', 'NAME', 'Hermione X. Phillips', 1),
('2019090035', 'Fadli Handoyo Kassi', 'L', '2018-12-11', 'HIN', '6229890513683', 'Proin@ipsum.edu', 'Ap #210-8607 Eu, Street', 'NAME', 'Daniel A. Wooten', 0),
('2019090036', 'Rizqi Ubaidillah', 'L', '2020-11-05', 'HIN', '6214157688268', 'non.arcu.Vivamus@orcilobortisaugue.ca', '9971 Duis Road', 'NAME', 'Kyla Z. Schroeder', 0),
('2019090037', 'Amber F. Hendrix', 'P', '2020-10-22', 'HIN', '6245809674595', 'sollicitudin.orci.sem@acfacilisisfacilisis.com', 'P.O. Box 361, 5704 Blandit Rd.', 'NAME', 'Lucian J. Pearson', 1),
('2019090038', 'Reyhan Ali', 'L', '2018-02-20', 'HIN', '0212752004023', 'tortor@justo.edu', '8344 Phasellus Avenue', 'NAME', 'Ivory S. Waller', 1),
('2019090039', 'Galvin A. Knapp', 'L', '2018-10-22', 'HIN', '6267890543848', 'ac.mattis@eratVivamus.co.uk', '872-8501 Cursus Ave', 'NAME', 'Amir M. Garrett', 1),
('2019090040', 'Giovanni Anthionia', 'L', '2020-09-05', 'BUD', '6226589896868', 'quam.quis.diam@sodales.edu', '6510 Egestas. Avenue', 'NAME', 'Quamar T. Wynn', 1),
('2019090041', 'Rina Z. Duncan', 'L', '2018-07-13', 'BUD', '0215655050450', 'eu.nulla@euismodindolor.edu', '8364 Vitae Rd.', 'NAME', 'Dominic Q. Evans', 0),
('2019090042', 'Demetria V. Weiss', 'L', '2019-06-10', 'BUD', '0215254064406', 'justo.sit@Aliquamerat.net', 'P.O. Box 269, 8298 Blandit Road', 'NAME', 'Lucian A. Hess', 1),
('2019090043', 'Stephen N. Hernandez', 'P', '2019-11-05', 'BUD', '0215033142949', 'Aenean.eget.metus@vulputatelacus.org', '121-6655 Semper Rd.', 'NAME', 'Mark N. Kramer', 0),
('2019090044', 'Guinevere I. Hawkins', 'L', '2018-04-03', 'BUD', '0219636289383', 'et.libero.Proin@sedleoCras.com', '318-9114 Urna Rd.', 'NAME', 'Hedwig V. Henderson', 1),
('2019090045', 'Quail U. Hodge', 'P', '2020-03-24', 'BUD', '0210472356206', 'mus.Aenean.eget@mifelis.com', 'P.O. Box 744, 1601 Ornare, Avenue', 'NAME', 'Florence A. Savage', 1),
('2019090046', 'Chaney V. Yates', 'L', '2018-02-09', 'BUD', '6267118564913', 'elementum.dui@lobortisultricesVivamus.edu', '2139 Senectus St.', 'NAME', 'Yardley V. Douglas', 1),
('2019090047', 'Pearl V. Macias', 'L', '2020-08-01', 'BUD', '0215555242719', 'ut.eros.non@orci.ca', 'P.O. Box 584, 5364 Et Road', 'NAME', 'Alexandra B. Harding', 0),
('2019090048', 'Derek E. Walter', 'L', '2020-04-17', 'BUD', '0218228079394', 'pede.nec.ante@eutelluseu.edu', '563-7815 Aliquam Road', 'NAME', 'Bell V. Richard', 0),
('2019090049', 'Risa T. Banks', 'L', '2019-06-19', 'BUD', '0211092807277', 'sed.dui@euismodestarcu.org', '134-9086 Diam Street', 'NAME', 'Jana V. Dunn', 0),
('2019090050', 'Reinando Sihombing', 'L', '2020-12-01', 'KON', '0210883708426', 'sapien@litoratorquentper.ca', 'P.O. Box 291, 6940 Amet Rd.', 'NAME', 'Ruby N. Morin', 0),
('2019090051', 'Kameko J. Jensen', 'P', '2018-12-14', 'KON', '0210719928489', 'consequat@magnaNamligula.org', 'Ap #312-140 Enim St.', 'NAME', 'Nissim Y. Ellis', 0),
('2019090052', 'Jack S. Hurst', 'P', '2019-06-07', 'KON', '0219226499567', 'eu.arcu.Morbi@mi.co.uk', '5931 Eu, Avenue', 'NAME', 'Jameson Z. Justice', 1),
('2019090053', 'Signe O. Odonnell', 'L', '2018-02-19', 'KON', '6282664410150', 'ligula@odio.co.uk', '8711 Aliquam Ave', 'NAME', 'Marah E. Landry', 1),
('2019090054', 'Maggy O. Strickland', 'L', '2019-04-20', 'KON', '6268510285482', 'Nunc@sociisnatoquepenatibus.co.uk', '616-3833 Semper St.', 'NAME', 'Ciara G. Jones', 1),
('2019090055', 'Nero U. Rosario', 'L', '2019-07-02', 'KON', '0219757864989', 'Mauris.eu@eutemporerat.com', 'Ap #448-7686 Augue. St.', 'NAME', 'Talon Z. Castro', 1),
('2019090056', 'Catherine L. Roy', 'P', '2018-08-10', 'KON', '6276524746135', 'tincidunt.nibh@ac.ca', 'P.O. Box 774, 5660 Eros Rd.', 'NAME', 'Abbot V. Meyer', 1),
('2019090057', 'Jasmine T. Knight', 'P', '2018-08-27', 'KON', '0214603590855', 'ultrices.a.auctor@Namac.edu', '351 Etiam Rd.', 'NAME', 'Leigh U. Strickland', 0),
('2019090058', 'Alexis V. Walls', 'L', '2020-04-11', 'KON', '6256525807112', 'tempor@sociosquad.net', 'P.O. Box 375, 2218 Tellus Rd.', 'NAME', 'Ryder Y. Joyce', 0),
('2019090059', 'Yen K. Mcdowell', 'P', '2020-06-28', 'KON', '0212526912126', 'mauris.sit.amet@ornareplacerat.org', '5662 Ut, St.', 'NAME', 'Tucker Y. Clements', 0),
('2019090060', 'Blair P. Dennis', 'L', '2018-01-08', 'ISL', '6214998932072', 'et.malesuada.fames@eleifendvitaeerat.edu', '937-647 Eu Road', 'NAME', 'Halee N. Dunn', 1),
('2019090061', 'Malcolm E. Bonner', 'P', '2020-06-08', 'ISL', '0219457911327', 'Donec.sollicitudin.adipiscing@cursusvestibulumMaur', '7979 Gravida Ave', 'NAME', 'Nicholas P. Mcleod', 0),
('2019090062', 'Armando G. Petersen', 'P', '2018-10-07', 'ISL', '6286366025734', 'sit.amet@torquent.org', '868-6187 Convallis St.', 'NAME', 'Regan P. Boone', 1),
('2019090063', 'Alma X. Harvey', 'L', '2019-07-14', 'ISL', '6240195483472', 'quis.turpis@Crasvehicula.edu', 'Ap #557-1708 Congue, Rd.', 'NAME', 'Leila L. Cunningham', 0),
('2019090064', 'Bell I. Herrera', 'L', '2020-08-24', 'ISL', '0211484251521', 'ac.fermentum@conubianostra.org', 'P.O. Box 765, 9887 Enim. Street', 'NAME', 'Ira U. Moran', 1),
('2019090065', 'Vernon Z. Stafford', 'L', '2020-11-06', 'ISL', '6264559654775', 'blandit.mattis@semut.net', '205 Sem Rd.', 'NAME', 'Adele Y. Benjamin', 1),
('2019090066', 'Blythe W. Riddle', 'L', '2018-01-24', 'ISL', '6231616065963', 'eu@aodiosemper.ca', '978-1808 Aliquam Street', 'NAME', 'Aurelia Z. Reyes', 0),
('2019090067', 'Avram V. Wade', 'P', '2020-07-08', 'ISL', '0219753695039', 'metus.Aenean.sed@dolor.ca', '862-4270 Risus St.', 'NAME', 'Logan W. Guy', 0),
('2019090068', 'Cheyenne R. Odom', 'P', '2018-09-11', 'ISL', '0215929269664', 'vel.vulputate@faucibusorci.com', 'Ap #419-3984 At, Ave', 'NAME', 'William G. Logan', 1),
('2019090069', 'Macaulay V. Lopez', 'P', '2018-04-13', 'ISL', '0212187812070', 'orci.tincidunt.adipiscing@risusMorbi.edu', '1766 Tincidunt. Ave', 'NAME', 'Kirk W. Emerson', 0),
('2019090070', 'Sebastian G. Pierce', 'L', '2020-11-01', 'KK', '6223757981794', 'neque.Sed.eget@semperegestasurna.com', 'Ap #976-9830 Dapibus St.', 'NAME', 'Zeph I. Martin', 1),
('2019090071', 'Aiko O. Doyle', 'P', '2020-03-31', 'KK', '6288465476536', 'Vivamus.molestie@etmalesuada.org', 'P.O. Box 993, 2995 At Road', 'NAME', 'Thane D. Travis', 0),
('2019090072', 'Reese D. Tucker', 'P', '2019-08-21', 'KK', '0213375473334', 'Phasellus@mauris.net', 'Ap #788-2155 Scelerisque Av.', 'NAME', 'Harlan W. Morris', 1),
('2019090073', 'Irreneus Alviano Grafenelo Yanuar', 'L', '2018-01-07', 'KK', '0214459892628', 'magna.Praesent@Proinvel.com', '3526 Cras Ave', 'NAME', 'Richard B. Graham', 0),
('2019090074', 'Knox D. Stafford', 'L', '2018-04-08', 'KK', '6214306674400', 'et.lacinia.vitae@tincidunt.ca', 'P.O. Box 771, 3967 Velit. St.', 'NAME', 'Melodie U. Camacho', 0),
('2019090075', 'Jessica S. Perry', 'P', '2019-04-28', 'KK', '6229313490610', 'massa@a.net', '646-6876 Nec Avenue', 'NAME', 'Donna G. Knapp', 1),
('2019090076', 'Dede Apriyani', 'P', '2018-09-30', 'KK', '0212207790586', 'Nunc.mauris.elit@quisurna.org', 'Ap #761-348 Suspendisse Rd.', 'NAME', 'Alvin S. Holloway', 1),
('2019090077', 'Shad O. Santiago', 'L', '2019-02-13', 'KK', '6207515838032', 'vulputate.risus.a@Aliquamnecenim.edu', 'P.O. Box 182, 9679 Libero Av.', 'NAME', 'Genevieve B. Frye', 0),
('2019090078', 'Cecilia W. Glover', 'L', '2018-05-27', 'KK', '6225560424334', 'Cras.vulputate@egetmassaSuspendisse.com', 'Ap #363-3838 Nascetur St.', 'NAME', 'Nero Z. Ray', 0),
('2019090079', 'Guinevere X. Owen', 'L', '2018-03-12', 'KK', '0216135861238', 'elementum.dui.quis@ipsumCurabitur.edu', '906-3684 Donec Rd.', 'NAME', 'Belle T. Bass', 1),
('2019090080', 'David T. Shaw', 'P', '2019-03-18', 'KP', '6237060459863', 'neque@erat.com', 'P.O. Box 610, 3815 Aliquet Road', 'NAME', 'Regan B. Sims', 0),
('2019090081', 'Logan E. Meadows', 'L', '2019-03-14', 'KP', '0210454299374', 'vel.lectus@interdumliberodui.edu', 'P.O. Box 850, 1830 Est, Road', 'NAME', 'Neil E. Mcdonald', 0),
('2019090082', 'Quincy B. Kaufman', 'L', '2020-12-09', 'KP', '6216389894281', 'vitae.erat.Vivamus@varius.co.uk', '968-4026 Pellentesque St.', 'NAME', 'Nolan E. Chen', 0),
('2019090083', 'Dhiya Ulhaq Salaahuddin', 'L', '2020-12-10', 'KP', '0217335757542', 'hendrerit.Donec@maurisMorbinon.org', 'Ap #457-6220 Fames Rd.', 'NAME', 'Summer S. Lott', 1),
('2019090084', 'Serena Q. Kelly', 'L', '2019-07-26', 'KP', '6218607306780', 'et.magnis.dis@Phasellusdolorelit.co.uk', 'P.O. Box 737, 5837 Vestibulum Avenue', 'NAME', 'Merrill C. Vega', 1),
('2019090085', 'Christine W. Vega', 'L', '2018-05-29', 'KP', '6214323145557', 'ligula@lacus.org', '7567 Elementum, St.', 'NAME', 'Theodore C. Randall', 0),
('2019090086', 'Briar U. Maxwell', 'P', '2019-10-04', 'KP', '0212087948187', 'lorem.Donec.elementum@egestasDuisac.com', '749 Vitae, St.', 'NAME', 'Steven H. Bruce', 0),
('2019090087', 'Muhammad Hilmawan', 'L', '2018-08-02', 'KP', '0216394142701', 'orci@eliterat.ca', 'P.O. Box 808, 2063 Dictum. Road', 'NAME', 'Nora Y. Shaffer', 0),
('2019090088', 'Robert N. Salinas', 'L', '2019-02-23', 'KP', '0214610759181', 'Donec.at@faucibusorci.org', '7393 Ante. St.', 'NAME', 'Hadley B. Mooney', 0),
('2019090089', 'Keelie Q. Harding', 'L', '2020-08-21', 'KP', '6255222054968', 'consequat.nec.mollis@parturient.edu', 'P.O. Box 465, 1189 Etiam Road', 'NAME', 'Honorato M. Gibbs', 0),
('2019090090', 'Russell W. Ortega', 'L', '2018-11-12', 'HIN', '0213842351487', 'malesuada.fames@eget.com', '300-6133 Mauris St.', 'NAME', 'Ann O. Robertson', 0),
('2019090091', 'Ari Satrio Hutomo', 'L', '2019-11-26', 'HIN', '0213744104013', 'ridiculus.mus@Nullamenim.edu', 'Ap #958-6162 Cursus Avenue', 'NAME', 'Price E. Carr', 1),
('2019090092', 'Pamela G. Gamble', 'P', '2020-10-16', 'HIN', '0216722576452', 'at.egestas@laciniaSed.ca', '243-1957 Porttitor Rd.', 'NAME', 'Candace Y. Sparks', 0),
('2019090093', 'Ivan G. Bonner', 'L', '2018-02-14', 'HIN', '6244893016156', 'pellentesque@erateget.ca', '542-4567 Ante, St.', 'NAME', 'Oren T. Bell', 1),
('2019090094', 'Alma E. Simpson', 'L', '2019-11-29', 'HIN', '6250387094716', 'Quisque.ac.libero@esttemporbibendum.ca', '767 Non, Street', 'NAME', 'Vernon H. Sandoval', 0),
('2019090095', 'Christen U. Andrews', 'L', '2020-10-24', 'HIN', '6271775446763', 'Integer.sem.elit@accumsanneque.edu', '8390 Et Road', 'NAME', 'Basil C. Blair', 0),
('2019090096', 'Hayfa R. Jackson', 'L', '2020-11-02', 'HIN', '6272365717490', 'nunc.sed@loremlorem.edu', 'P.O. Box 652, 8532 Nunc Avenue', 'NAME', 'Dieter X. Best', 0),
('2019090097', 'Kitra R. Knapp', 'L', '2020-06-30', 'HIN', '6243583164242', 'risus.Nulla.eget@cursusaenim.com', '773-5837 Fames Rd.', 'NAME', 'Tatiana P. Benton', 1),
('2019090098', 'Valentine Y. Powell', 'P', '2020-08-24', 'HIN', '6264549496183', 'Nulla.eget@SuspendissesagittisNullam.ca', 'Ap #960-5746 Lorem, Ave', 'NAME', 'Steven P. Bell', 1),
('2019090099', 'Elijah U. Dunlap', 'L', '2019-07-28', 'HIN', '6241845151888', 'pharetra.ut@maurisid.org', 'P.O. Box 979, 6334 Donec Ave', 'NAME', 'Kirby L. Parker', 0);

-- --------------------------------------------------------

--
-- Table structure for table `list_kriteria`
--

CREATE TABLE `list_kriteria` (
  `kode` varchar(4) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `bobot` int(11) NOT NULL,
  `atribut` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_kriteria`
--

INSERT INTO `list_kriteria` (`kode`, `deskripsi`, `bobot`, `atribut`) VALUES
('K01', 'Kehadiran', 8, 'BEN'),
('K02', 'Loyalitas', 7, 'BEN'),
('K03', 'Kinerja Kerja', 10, 'BEN'),
('K04', 'Keterlambatan', 9, 'COS');

-- --------------------------------------------------------

--
-- Table structure for table `list_nilai`
--

CREATE TABLE `list_nilai` (
  `nik` varchar(10) NOT NULL,
  `K01` int(3) DEFAULT NULL,
  `K02` int(3) DEFAULT NULL,
  `K03` int(3) DEFAULT NULL,
  `K04` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_nilai`
--

INSERT INTO `list_nilai` (`nik`, `K01`, `K02`, `K03`, `K04`) VALUES
('2019090001', 93, 87, 82, 11),
('2019090002', 78, 81, 86, 23),
('2019090003', 78, 73, 90, 25),
('2019090004', 89, 98, 81, 26),
('2019090005', 85, 79, 79, 28),
('2019090006', 81, 96, 90, 24),
('2019090007', 84, 93, 89, 20),
('2019090008', 77, 88, 82, 23),
('2019090009', 76, 97, 98, 29),
('2019090010', 92, 82, 71, 16),
('2019090011', 89, 83, 75, 19),
('2019090012', 99, 92, 98, 27),
('2019090013', 94, 84, 77, 17),
('2019090014', 93, 73, 99, 16),
('2019090015', 87, 71, 96, 28),
('2019090016', 89, 86, 87, 23),
('2019090017', 78, 100, 97, 20),
('2019090018', 73, 87, 85, 17),
('2019090019', 70, 86, 72, 18),
('2019090020', 94, 90, 88, 18),
('2019090021', 86, 78, 71, 13),
('2019090022', 77, 70, 96, 30),
('2019090023', 84, 72, 93, 21),
('2019090024', 76, 73, 91, 27),
('2019090025', 92, 83, 97, 27),
('2019090026', 94, 91, 88, 19),
('2019090027', 77, 75, 82, 20),
('2019090028', 81, 90, 76, 18),
('2019090029', 81, 100, 96, 22),
('2019090030', 75, 90, 95, 21),
('2019090031', 71, 79, 82, 11),
('2019090032', 71, 99, 86, 12),
('2019090033', 100, 79, 97, 20),
('2019090034', 89, 79, 100, 29),
('2019090035', 70, 93, 99, 11),
('2019090036', 92, 89, 93, 10),
('2019090037', 72, 82, 70, 15),
('2019090038', 70, 85, 77, 30),
('2019090039', 84, 78, 90, 17),
('2019090040', 81, 81, 72, 24),
('2019090041', 87, 76, 81, 25),
('2019090042', 96, 96, 80, 22),
('2019090043', 100, 74, 98, 22),
('2019090044', 89, 70, 99, 16),
('2019090045', 95, 93, 85, 18),
('2019090046', 94, 73, 74, 26),
('2019090047', 91, 95, 100, 30),
('2019090048', 96, 76, 86, 15),
('2019090049', 98, 96, 76, 19),
('2019090050', 92, 89, 93, 12),
('2019090051', 97, 72, 91, 29),
('2019090052', 81, 80, 93, 20),
('2019090053', 87, 91, 98, 18),
('2019090054', 91, 79, 76, 23),
('2019090055', 75, 81, 78, 16),
('2019090056', 85, 76, 71, 12),
('2019090057', 91, 80, 96, 19),
('2019090058', 98, 70, 98, 28),
('2019090059', 89, 92, 82, 16),
('2019090060', 92, 73, 87, 13),
('2019090061', 88, 70, 91, 13),
('2019090062', 83, 85, 87, 19),
('2019090063', 70, 95, 93, 29),
('2019090064', 75, 90, 97, 13),
('2019090065', 87, 85, 88, 30),
('2019090066', 90, 84, 98, 23),
('2019090067', 93, 78, 78, 16),
('2019090068', 76, 73, 91, 27),
('2019090069', 95, 87, 97, 20),
('2019090070', 86, 89, 91, 19),
('2019090071', 85, 74, 99, 13),
('2019090072', 90, 78, 97, 16),
('2019090073', 98, 83, 72, 10),
('2019090074', 95, 93, 70, 12),
('2019090075', 81, 73, 78, 21),
('2019090076', 87, 78, 75, 27),
('2019090077', 87, 79, 86, 17),
('2019090078', 89, 90, 88, 26),
('2019090079', 70, 73, 99, 20),
('2019090080', 73, 87, 94, 15),
('2019090081', 94, 92, 93, 25),
('2019090082', 85, 84, 99, 13),
('2019090083', 85, 72, 71, 30),
('2019090084', 97, 89, 77, 30),
('2019090085', 88, 96, 92, 22),
('2019090086', 93, 99, 81, 26),
('2019090087', 72, 95, 77, 27),
('2019090088', 94, 77, 82, 19),
('2019090089', 75, 86, 78, 24),
('2019090090', 70, 83, 90, 10),
('2019090091', 74, 85, 95, 11),
('2019090092', 85, 99, 85, 18),
('2019090093', 80, 98, 87, 20),
('2019090094', 71, 81, 95, 23),
('2019090095', 83, 89, 89, 22),
('2019090096', 85, 84, 74, 26),
('2019090097', 72, 98, 95, 17),
('2019090098', 94, 92, 96, 16),
('2019090099', 76, 87, 90, 14);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_pivot`
--

CREATE TABLE `nilai_pivot` (
  `kriteria` varchar(4) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_pivot`
--

INSERT INTO `nilai_pivot` (`kriteria`, `nilai`) VALUES
('K01', 100),
('K02', 100),
('K03', 100),
('K04', 10);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_preferensi`
--

CREATE TABLE `nilai_preferensi` (
  `nik` varchar(10) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_preferensi`
--

INSERT INTO `nilai_preferensi` (`nik`, `nilai`) VALUES
('2019090001', 29.911),
('2019090002', 24.423),
('2019090003', 23.95),
('2019090004', 25.541),
('2019090005', 23.444),
('2019090006', 25.949),
('2019090007', 26.63),
('2019090008', 24.433),
('2019090009', 25.773),
('2019090010', 25.825),
('2019090011', 25.166),
('2019090012', 27.493),
('2019090013', 26.394),
('2019090014', 28.075),
('2019090015', 24.744),
('2019090016', 25.753),
('2019090017', 27.44),
('2019090018', 25.724),
('2019090019', 23.819),
('2019090020', 27.619),
('2019090021', 26.363),
('2019090022', 23.659),
('2019090023', 25.345),
('2019090024', 23.623),
('2019090025', 26.203),
('2019090026', 27.426),
('2019090027', 24.11),
('2019090028', 25.379),
('2019090029', 27.17),
('2019090030', 26.085),
('2019090031', 27.591),
('2019090032', 28.709),
('2019090033', 27.73),
('2019090034', 25.753),
('2019090035', 30.191),
('2019090036', 31.89),
('2019090037', 24.499),
('2019090038', 22.249),
('2019090039', 26.474),
('2019090040', 23.099),
('2019090041', 23.98),
('2019090042', 26.49),
('2019090043', 27.07),
('2019090044', 27.545),
('2019090045', 27.609),
('2019090046', 23.491),
('2019090047', 26.929),
('2019090048', 27.599),
('2019090049', 26.896),
('2019090050', 30.389),
('2019090051', 25.003),
('2019090052', 25.88),
('2019090053', 28.129),
('2019090054', 24.323),
('2019090055', 25.095),
('2019090056', 26.719),
('2019090057', 27.216),
('2019090058', 25.754),
('2019090059', 27.385),
('2019090060', 28.093),
('2019090061', 27.963),
('2019090062', 26.026),
('2019090063', 24.653),
('2019090064', 28.923),
('2019090065', 24.709),
('2019090066', 26.793),
('2019090067', 26.325),
('2019090068', 23.623),
('2019090069', 27.89),
('2019090070', 26.946),
('2019090071', 28.803),
('2019090072', 27.985),
('2019090073', 29.85),
('2019090074', 28.609),
('2019090075', 23.675),
('2019090076', 23.253),
('2019090077', 26.384),
('2019090078', 25.681),
('2019090079', 25.11),
('2019090080', 27.329),
('2019090081', 26.86),
('2019090082', 29.503),
('2019090083', 21.939),
('2019090084', 24.689),
('2019090085', 27.05),
('2019090086', 25.931),
('2019090087', 23.443),
('2019090088', 25.846),
('2019090089', 23.569),
('2019090090', 29.41),
('2019090091', 29.551),
('2019090092', 27.229),
('2019090093', 26.46),
('2019090094', 24.763),
('2019090095', 25.86),
('2019090096', 23.541),
('2019090097', 27.414),
('2019090098', 29.185),
('2019090099', 27.598);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_terbobot`
--

CREATE TABLE `nilai_terbobot` (
  `nik` varchar(10) NOT NULL,
  `K01` float DEFAULT NULL,
  `K02` float DEFAULT NULL,
  `K03` float DEFAULT NULL,
  `K04` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_terbobot`
--

INSERT INTO `nilai_terbobot` (`nik`, `K01`, `K02`, `K03`, `K04`) VALUES
('2019090001', 7.44, 6.09, 8.2, 8.181),
('2019090002', 6.24, 5.67, 8.6, 3.913),
('2019090003', 6.24, 5.11, 9, 3.6),
('2019090004', 7.12, 6.86, 8.1, 3.461),
('2019090005', 6.8, 5.53, 7.9, 3.214),
('2019090006', 6.48, 6.72, 9, 3.749),
('2019090007', 6.72, 6.51, 8.9, 4.5),
('2019090008', 6.16, 6.16, 8.2, 3.913),
('2019090009', 6.08, 6.79, 9.8, 3.103),
('2019090010', 7.36, 5.74, 7.1, 5.625),
('2019090011', 7.12, 5.81, 7.5, 4.736),
('2019090012', 7.92, 6.44, 9.8, 3.333),
('2019090013', 7.52, 5.88, 7.7, 5.294),
('2019090014', 7.44, 5.11, 9.9, 5.625),
('2019090015', 6.96, 4.97, 9.6, 3.214),
('2019090016', 7.12, 6.02, 8.7, 3.913),
('2019090017', 6.24, 7, 9.7, 4.5),
('2019090018', 5.84, 6.09, 8.5, 5.294),
('2019090019', 5.6, 6.02, 7.2, 4.999),
('2019090020', 7.52, 6.3, 8.8, 4.999),
('2019090021', 6.88, 5.46, 7.1, 6.923),
('2019090022', 6.16, 4.9, 9.6, 2.999),
('2019090023', 6.72, 5.04, 9.3, 4.285),
('2019090024', 6.08, 5.11, 9.1, 3.333),
('2019090025', 7.36, 5.81, 9.7, 3.333),
('2019090026', 7.52, 6.37, 8.8, 4.736),
('2019090027', 6.16, 5.25, 8.2, 4.5),
('2019090028', 6.48, 6.3, 7.6, 4.999),
('2019090029', 6.48, 7, 9.6, 4.09),
('2019090030', 6, 6.3, 9.5, 4.285),
('2019090031', 5.68, 5.53, 8.2, 8.181),
('2019090032', 5.68, 6.93, 8.6, 7.499),
('2019090033', 8, 5.53, 9.7, 4.5),
('2019090034', 7.12, 5.53, 10, 3.103),
('2019090035', 5.6, 6.51, 9.9, 8.181),
('2019090036', 7.36, 6.23, 9.3, 9),
('2019090037', 5.76, 5.74, 7, 5.999),
('2019090038', 5.6, 5.95, 7.7, 2.999),
('2019090039', 6.72, 5.46, 9, 5.294),
('2019090040', 6.48, 5.67, 7.2, 3.749),
('2019090041', 6.96, 5.32, 8.1, 3.6),
('2019090042', 7.68, 6.72, 8, 4.09),
('2019090043', 8, 5.18, 9.8, 4.09),
('2019090044', 7.12, 4.9, 9.9, 5.625),
('2019090045', 7.6, 6.51, 8.5, 4.999),
('2019090046', 7.52, 5.11, 7.4, 3.461),
('2019090047', 7.28, 6.65, 10, 2.999),
('2019090048', 7.68, 5.32, 8.6, 5.999),
('2019090049', 7.84, 6.72, 7.6, 4.736),
('2019090050', 7.36, 6.23, 9.3, 7.499),
('2019090051', 7.76, 5.04, 9.1, 3.103),
('2019090052', 6.48, 5.6, 9.3, 4.5),
('2019090053', 6.96, 6.37, 9.8, 4.999),
('2019090054', 7.28, 5.53, 7.6, 3.913),
('2019090055', 6, 5.67, 7.8, 5.625),
('2019090056', 6.8, 5.32, 7.1, 7.499),
('2019090057', 7.28, 5.6, 9.6, 4.736),
('2019090058', 7.84, 4.9, 9.8, 3.214),
('2019090059', 7.12, 6.44, 8.2, 5.625),
('2019090060', 7.36, 5.11, 8.7, 6.923),
('2019090061', 7.04, 4.9, 9.1, 6.923),
('2019090062', 6.64, 5.95, 8.7, 4.736),
('2019090063', 5.6, 6.65, 9.3, 3.103),
('2019090064', 6, 6.3, 9.7, 6.923),
('2019090065', 6.96, 5.95, 8.8, 2.999),
('2019090066', 7.2, 5.88, 9.8, 3.913),
('2019090067', 7.44, 5.46, 7.8, 5.625),
('2019090068', 6.08, 5.11, 9.1, 3.333),
('2019090069', 7.6, 6.09, 9.7, 4.5),
('2019090070', 6.88, 6.23, 9.1, 4.736),
('2019090071', 6.8, 5.18, 9.9, 6.923),
('2019090072', 7.2, 5.46, 9.7, 5.625),
('2019090073', 7.84, 5.81, 7.2, 9),
('2019090074', 7.6, 6.51, 7, 7.499),
('2019090075', 6.48, 5.11, 7.8, 4.285),
('2019090076', 6.96, 5.46, 7.5, 3.333),
('2019090077', 6.96, 5.53, 8.6, 5.294),
('2019090078', 7.12, 6.3, 8.8, 3.461),
('2019090079', 5.6, 5.11, 9.9, 4.5),
('2019090080', 5.84, 6.09, 9.4, 5.999),
('2019090081', 7.52, 6.44, 9.3, 3.6),
('2019090082', 6.8, 5.88, 9.9, 6.923),
('2019090083', 6.8, 5.04, 7.1, 2.999),
('2019090084', 7.76, 6.23, 7.7, 2.999),
('2019090085', 7.04, 6.72, 9.2, 4.09),
('2019090086', 7.44, 6.93, 8.1, 3.461),
('2019090087', 5.76, 6.65, 7.7, 3.333),
('2019090088', 7.52, 5.39, 8.2, 4.736),
('2019090089', 6, 6.02, 7.8, 3.749),
('2019090090', 5.6, 5.81, 9, 9),
('2019090091', 5.92, 5.95, 9.5, 8.181),
('2019090092', 6.8, 6.93, 8.5, 4.999),
('2019090093', 6.4, 6.86, 8.7, 4.5),
('2019090094', 5.68, 5.67, 9.5, 3.913),
('2019090095', 6.64, 6.23, 8.9, 4.09),
('2019090096', 6.8, 5.88, 7.4, 3.461),
('2019090097', 5.76, 6.86, 9.5, 5.294),
('2019090098', 7.52, 6.44, 9.6, 5.625),
('2019090099', 6.08, 6.09, 9, 6.428);

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

CREATE TABLE `rangking` (
  `peringkat` int(3) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nilai` float NOT NULL,
  `tahun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rangking`
--

INSERT INTO `rangking` (`peringkat`, `nik`, `nilai`, `tahun`) VALUES
(1, '2019090036', 31.89, '0000-00-00'),
(2, '2019090050', 30.389, '0000-00-00'),
(3, '2019090035', 30.191, '0000-00-00'),
(4, '2019090001', 29.911, '0000-00-00'),
(5, '2019090073', 29.85, '0000-00-00'),
(6, '2019090091', 29.551, '0000-00-00'),
(7, '2019090082', 29.503, '0000-00-00'),
(8, '2019090090', 29.41, '0000-00-00'),
(9, '2019090098', 29.185, '0000-00-00'),
(10, '2019090064', 28.923, '0000-00-00'),
(11, '2019090071', 28.803, '0000-00-00'),
(12, '2019090032', 28.709, '0000-00-00'),
(13, '2019090074', 28.609, '0000-00-00'),
(14, '2019090053', 28.129, '0000-00-00'),
(15, '2019090060', 28.093, '0000-00-00'),
(16, '2019090014', 28.075, '0000-00-00'),
(17, '2019090072', 27.985, '0000-00-00'),
(18, '2019090061', 27.963, '0000-00-00'),
(19, '2019090069', 27.89, '0000-00-00'),
(20, '2019090033', 27.73, '0000-00-00'),
(21, '2019090020', 27.619, '0000-00-00'),
(22, '2019090045', 27.609, '0000-00-00'),
(23, '2019090048', 27.599, '0000-00-00'),
(24, '2019090099', 27.598, '0000-00-00'),
(25, '2019090031', 27.591, '0000-00-00'),
(26, '2019090044', 27.545, '0000-00-00'),
(27, '2019090012', 27.493, '0000-00-00'),
(28, '2019090017', 27.44, '0000-00-00'),
(29, '2019090026', 27.426, '0000-00-00'),
(30, '2019090097', 27.414, '0000-00-00'),
(31, '2019090059', 27.385, '0000-00-00'),
(32, '2019090080', 27.329, '0000-00-00'),
(33, '2019090092', 27.229, '0000-00-00'),
(34, '2019090057', 27.216, '0000-00-00'),
(35, '2019090029', 27.17, '0000-00-00'),
(36, '2019090043', 27.07, '0000-00-00'),
(37, '2019090085', 27.05, '0000-00-00'),
(38, '2019090070', 26.946, '0000-00-00'),
(39, '2019090047', 26.929, '0000-00-00'),
(40, '2019090049', 26.896, '0000-00-00'),
(41, '2019090081', 26.86, '0000-00-00'),
(42, '2019090066', 26.793, '0000-00-00'),
(43, '2019090056', 26.719, '0000-00-00'),
(44, '2019090007', 26.63, '0000-00-00'),
(45, '2019090042', 26.49, '0000-00-00'),
(46, '2019090039', 26.474, '0000-00-00'),
(47, '2019090093', 26.46, '0000-00-00'),
(48, '2019090013', 26.394, '0000-00-00'),
(49, '2019090077', 26.384, '0000-00-00'),
(50, '2019090021', 26.363, '0000-00-00'),
(51, '2019090067', 26.325, '0000-00-00'),
(52, '2019090025', 26.203, '0000-00-00'),
(53, '2019090030', 26.085, '0000-00-00'),
(54, '2019090062', 26.026, '0000-00-00'),
(55, '2019090006', 25.949, '0000-00-00'),
(56, '2019090086', 25.931, '0000-00-00'),
(57, '2019090052', 25.88, '0000-00-00'),
(58, '2019090095', 25.86, '0000-00-00'),
(59, '2019090088', 25.846, '0000-00-00'),
(60, '2019090010', 25.825, '0000-00-00'),
(61, '2019090009', 25.773, '0000-00-00'),
(62, '2019090058', 25.754, '0000-00-00'),
(63, '2019090034', 25.753, '0000-00-00'),
(63, '2019090016', 25.753, '0000-00-00'),
(65, '2019090018', 25.724, '0000-00-00'),
(66, '2019090078', 25.681, '0000-00-00'),
(67, '2019090004', 25.541, '0000-00-00'),
(68, '2019090028', 25.379, '0000-00-00'),
(69, '2019090023', 25.345, '0000-00-00'),
(70, '2019090011', 25.166, '0000-00-00'),
(71, '2019090079', 25.11, '0000-00-00'),
(72, '2019090055', 25.095, '0000-00-00'),
(73, '2019090051', 25.003, '0000-00-00'),
(74, '2019090094', 24.763, '0000-00-00'),
(75, '2019090015', 24.744, '0000-00-00'),
(76, '2019090065', 24.709, '0000-00-00'),
(77, '2019090084', 24.689, '0000-00-00'),
(78, '2019090063', 24.653, '0000-00-00'),
(79, '2019090037', 24.499, '0000-00-00'),
(80, '2019090008', 24.433, '0000-00-00'),
(81, '2019090002', 24.423, '0000-00-00'),
(82, '2019090054', 24.323, '0000-00-00'),
(83, '2019090027', 24.11, '0000-00-00'),
(84, '2019090041', 23.98, '0000-00-00'),
(85, '2019090003', 23.95, '0000-00-00'),
(86, '2019090019', 23.819, '0000-00-00'),
(87, '2019090075', 23.675, '0000-00-00'),
(88, '2019090022', 23.659, '0000-00-00'),
(89, '2019090024', 23.623, '0000-00-00'),
(89, '2019090068', 23.623, '0000-00-00'),
(91, '2019090089', 23.569, '0000-00-00'),
(92, '2019090096', 23.541, '0000-00-00'),
(93, '2019090046', 23.491, '0000-00-00'),
(94, '2019090005', 23.444, '0000-00-00'),
(95, '2019090087', 23.443, '0000-00-00'),
(96, '2019090076', 23.253, '0000-00-00'),
(97, '2019090040', 23.099, '0000-00-00'),
(98, '2019090038', 22.249, '0000-00-00'),
(99, '2019090083', 21.939, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_karyawan`
--
ALTER TABLE `list_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `nilai_pivot`
--
ALTER TABLE `nilai_pivot`
  ADD PRIMARY KEY (`kriteria`);

--
-- Indexes for table `nilai_terbobot`
--
ALTER TABLE `nilai_terbobot`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
