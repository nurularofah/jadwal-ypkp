CREATE DATABASE  IF NOT EXISTS `jadwal-usb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `jadwal-usb`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: jadwal-usb
-- ------------------------------------------------------
-- Server version	5.5.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `usb_head_info_akademik`
--

DROP TABLE IF EXISTS `usb_head_info_akademik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_head_info_akademik` (
  `kd_infoakademik` varchar(6) NOT NULL,
  `tgl_infoakademik` date NOT NULL,
  `jenis_info` int(11) NOT NULL,
  PRIMARY KEY (`kd_infoakademik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_head_info_akademik`
--

LOCK TABLES `usb_head_info_akademik` WRITE;
/*!40000 ALTER TABLE `usb_head_info_akademik` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_head_info_akademik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_detail_info_jadwal_uas`
--

DROP TABLE IF EXISTS `usb_detail_info_jadwal_uas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_detail_info_jadwal_uas` (
  `jam_awalUAS` time NOT NULL,
  `jam_akhirUAS` time NOT NULL,
  `kd_detail_UAS` varchar(6) NOT NULL,
  `kd_matkul` varchar(6) NOT NULL,
  `kd_head_UAS` varchar(6) NOT NULL,
  `kd_ruang` varchar(6) NOT NULL,
  `kd_lokasi` varchar(6) NOT NULL,
  PRIMARY KEY (`kd_detail_UAS`),
  KEY `fk_usb_detail_info_jadwal_uas_usb_matkul1_idx` (`kd_matkul`),
  KEY `fk_usb_detail_info_jadwal_uas_usb_info_jadwal_uas1_idx` (`kd_head_UAS`),
  KEY `fk_usb_detail_info_jadwal_uas_usb_ruang1_idx` (`kd_ruang`,`kd_lokasi`),
  CONSTRAINT `fk_usb_detail_info_jadwal_uas_usb_info_jadwal_uas1` FOREIGN KEY (`kd_head_UAS`) REFERENCES `usb_info_jadwal_uas` (`kd_head_UAS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_detail_info_jadwal_uas_usb_matkul1` FOREIGN KEY (`kd_matkul`) REFERENCES `usb_matkul` (`kd_matkul`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_detail_info_jadwal_uas_usb_ruang1` FOREIGN KEY (`kd_ruang`, `kd_lokasi`) REFERENCES `usb_ruang` (`kd_ruang`, `kd_lokasi`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_detail_info_jadwal_uas`
--

LOCK TABLES `usb_detail_info_jadwal_uas` WRITE;
/*!40000 ALTER TABLE `usb_detail_info_jadwal_uas` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_detail_info_jadwal_uas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_kelas`
--

DROP TABLE IF EXISTS `usb_kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_kelas` (
  `kd_kelas` varchar(6) NOT NULL,
  `nm_kelas` varchar(10) NOT NULL,
  `kd_jurusan` varchar(6) NOT NULL,
  PRIMARY KEY (`kd_kelas`),
  KEY `fk_usb_kelas_usb_jurusan1_idx` (`kd_jurusan`),
  CONSTRAINT `fk_usb_kelas_usb_jurusan1` FOREIGN KEY (`kd_jurusan`) REFERENCES `usb_jurusan` (`kd_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_kelas`
--

LOCK TABLES `usb_kelas` WRITE;
/*!40000 ALTER TABLE `usb_kelas` DISABLE KEYS */;
INSERT INTO `usb_kelas` VALUES ('1TI1','1TI-1','TI'),('1TI2','1TI-2','TI'),('1TI3','1TI-3','TI'),('1TI4','1TI-4','TI'),('1TI5','1TI-5','TI'),('1TI6','1TI-6','TI'),('1TI7','1TI-7','TI'),('1TI8','1TI-8','TI'),('2TI1','2TI-1','TI'),('2TI2','2TI-2','TI'),('2TI3','2TI-3','TI'),('2TI4','2TI-4','TI'),('2TI5','2TI-5','TI'),('2TI6','2TI-6','TI'),('2TI7','2TI-7','TI'),('2TI8','2TI-8','TI');
/*!40000 ALTER TABLE `usb_kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_info_jadwal_uas`
--

DROP TABLE IF EXISTS `usb_info_jadwal_uas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_info_jadwal_uas` (
  `kd_head_UAS` varchar(6) NOT NULL,
  `tahun_UAS` year(4) NOT NULL,
  `kd_kelas` varchar(6) NOT NULL,
  `kd_smstr` int(11) NOT NULL,
  PRIMARY KEY (`kd_head_UAS`),
  KEY `fk_usb_info_jadwal_uas_usb_kelas1_idx` (`kd_kelas`),
  KEY `fk_usb_info_jadwal_uas_usb_semester1_idx` (`kd_smstr`),
  CONSTRAINT `fk_usb_info_jadwal_uas_usb_kelas1` FOREIGN KEY (`kd_kelas`) REFERENCES `usb_kelas` (`kd_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_info_jadwal_uas_usb_semester1` FOREIGN KEY (`kd_smstr`) REFERENCES `usb_semester` (`kd_smstr`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_info_jadwal_uas`
--

LOCK TABLES `usb_info_jadwal_uas` WRITE;
/*!40000 ALTER TABLE `usb_info_jadwal_uas` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_info_jadwal_uas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_detail_info_akademik`
--

DROP TABLE IF EXISTS `usb_detail_info_akademik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_detail_info_akademik` (
  `kd_detail_infoakademik` varchar(6) NOT NULL,
  `jammulai` time NOT NULL,
  `jamakhir` time NOT NULL,
  `status_dosen` varchar(15) NOT NULL,
  `kd_infoakademik` varchar(6) NOT NULL,
  `nip` varchar(6) NOT NULL,
  PRIMARY KEY (`kd_detail_infoakademik`),
  KEY `fk_usb_detail_info_akademik_usb_head_info_akademik1_idx` (`kd_infoakademik`),
  KEY `fk_usb_detail_info_akademik_usb_dosen1_idx` (`nip`),
  CONSTRAINT `fk_usb_detail_info_akademik_usb_dosen1` FOREIGN KEY (`nip`) REFERENCES `usb_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_detail_info_akademik_usb_head_info_akademik1` FOREIGN KEY (`kd_infoakademik`) REFERENCES `usb_head_info_akademik` (`kd_infoakademik`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_detail_info_akademik`
--

LOCK TABLES `usb_detail_info_akademik` WRITE;
/*!40000 ALTER TABLE `usb_detail_info_akademik` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_detail_info_akademik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_staff`
--

DROP TABLE IF EXISTS `usb_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_staff` (
  `no_staff` varchar(6) NOT NULL,
  `nm_staff` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `fungsi` varchar(15) NOT NULL,
  PRIMARY KEY (`no_staff`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_staff`
--

LOCK TABLES `usb_staff` WRITE;
/*!40000 ALTER TABLE `usb_staff` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_head_info_jadwal_uts`
--

DROP TABLE IF EXISTS `usb_head_info_jadwal_uts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_head_info_jadwal_uts` (
  `kd_head_UTS` varchar(6) NOT NULL,
  `tahun_UTS` year(4) NOT NULL,
  `kd_kelas` varchar(6) NOT NULL,
  `kd_smstr` int(11) NOT NULL,
  PRIMARY KEY (`kd_head_UTS`),
  KEY `fk_usb_head_info_jadwal_uts_usb_kelas1_idx` (`kd_kelas`),
  KEY `fk_usb_head_info_jadwal_uts_usb_semester2_idx` (`kd_smstr`),
  CONSTRAINT `fk_usb_head_info_jadwal_uts_usb_kelas1` FOREIGN KEY (`kd_kelas`) REFERENCES `usb_kelas` (`kd_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_head_info_jadwal_uts_usb_semester2` FOREIGN KEY (`kd_smstr`) REFERENCES `usb_semester` (`kd_smstr`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_head_info_jadwal_uts`
--

LOCK TABLES `usb_head_info_jadwal_uts` WRITE;
/*!40000 ALTER TABLE `usb_head_info_jadwal_uts` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_head_info_jadwal_uts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_detail_info_jadwal_uts`
--

DROP TABLE IF EXISTS `usb_detail_info_jadwal_uts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_detail_info_jadwal_uts` (
  `kd_detail_UTS` varchar(6) NOT NULL,
  `tgl_UTS` date NOT NULL,
  `jam_awalUTS` time NOT NULL,
  `jam_akhirUTS` time NOT NULL,
  `kd_head_UTS` varchar(6) NOT NULL,
  `kd_matkul` varchar(6) NOT NULL,
  `kd_ruang` varchar(6) NOT NULL,
  `kd_lokasi` varchar(6) NOT NULL,
  `kd_smstr` int(11) NOT NULL,
  PRIMARY KEY (`kd_detail_UTS`),
  KEY `fk_usb_detail_info_jadwal_uts_usb_head_info_jadwal_uts1_idx` (`kd_head_UTS`),
  KEY `fk_usb_detail_info_jadwal_uts_usb_matkul1_idx` (`kd_matkul`),
  KEY `fk_usb_detail_info_jadwal_uts_usb_ruang1_idx` (`kd_ruang`,`kd_lokasi`),
  KEY `fk_usb_detail_info_jadwal_uts_usb_semester1_idx` (`kd_smstr`),
  CONSTRAINT `fk_usb_detail_info_jadwal_uts_usb_head_info_jadwal_uts1` FOREIGN KEY (`kd_head_UTS`) REFERENCES `usb_head_info_jadwal_uts` (`kd_head_UTS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_detail_info_jadwal_uts_usb_matkul1` FOREIGN KEY (`kd_matkul`) REFERENCES `usb_matkul` (`kd_matkul`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_detail_info_jadwal_uts_usb_ruang1` FOREIGN KEY (`kd_ruang`, `kd_lokasi`) REFERENCES `usb_ruang` (`kd_ruang`, `kd_lokasi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_detail_info_jadwal_uts_usb_semester1` FOREIGN KEY (`kd_smstr`) REFERENCES `usb_semester` (`kd_smstr`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_detail_info_jadwal_uts`
--

LOCK TABLES `usb_detail_info_jadwal_uts` WRITE;
/*!40000 ALTER TABLE `usb_detail_info_jadwal_uts` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_detail_info_jadwal_uts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_semester`
--

DROP TABLE IF EXISTS `usb_semester`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_semester` (
  `kd_smstr` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`kd_smstr`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_semester`
--

LOCK TABLES `usb_semester` WRITE;
/*!40000 ALTER TABLE `usb_semester` DISABLE KEYS */;
INSERT INTO `usb_semester` VALUES (1,'Semester 1'),(2,'Semester 2'),(3,'Semester 3'),(4,'Semester 4'),(5,'Semester 5'),(6,'Semester 6'),(7,'Semester 7'),(8,'Semester 8');
/*!40000 ALTER TABLE `usb_semester` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_prodi`
--

DROP TABLE IF EXISTS `usb_prodi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_prodi` (
  `kd_prodi` varchar(6) NOT NULL,
  `nm_prodi` varchar(30) NOT NULL,
  PRIMARY KEY (`kd_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_prodi`
--

LOCK TABLES `usb_prodi` WRITE;
/*!40000 ALTER TABLE `usb_prodi` DISABLE KEYS */;
INSERT INTO `usb_prodi` VALUES ('AN','Komputer Akuntansi'),('MI','Manajemen Informatika');
/*!40000 ALTER TABLE `usb_prodi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_jadwalmatkul`
--

DROP TABLE IF EXISTS `usb_jadwalmatkul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_jadwalmatkul` (
  `kd_head_jadwal` varchar(8) NOT NULL,
  `tahun` year(4) NOT NULL,
  `kd_kelas` varchar(6) NOT NULL,
  `kd_smstr` int(11) NOT NULL,
  PRIMARY KEY (`kd_head_jadwal`),
  KEY `fk_usb_jadwalmatkul_usb_kelas1_idx` (`kd_kelas`),
  KEY `fk_usb_jadwalmatkul_usb_semester1_idx` (`kd_smstr`),
  CONSTRAINT `fk_usb_jadwalmatkul_usb_kelas1` FOREIGN KEY (`kd_kelas`) REFERENCES `usb_kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_usb_jadwalmatkul_usb_semester1` FOREIGN KEY (`kd_smstr`) REFERENCES `usb_semester` (`kd_smstr`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_jadwalmatkul`
--

LOCK TABLES `usb_jadwalmatkul` WRITE;
/*!40000 ALTER TABLE `usb_jadwalmatkul` DISABLE KEYS */;
INSERT INTO `usb_jadwalmatkul` VALUES ('14070001',2014,'1TI1',1);
/*!40000 ALTER TABLE `usb_jadwalmatkul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_detail_jadwalmatkul`
--

DROP TABLE IF EXISTS `usb_detail_jadwalmatkul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_detail_jadwalmatkul` (
  `kd_head_jadwal` varchar(6) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jammulai` time NOT NULL,
  `jamakhir` time NOT NULL,
  `nip` varchar(6) NOT NULL,
  `kd_matkul` varchar(6) NOT NULL,
  `kd_ruang` varchar(6) NOT NULL,
  PRIMARY KEY (`kd_head_jadwal`),
  KEY `fk_usb_detail_jadwalmatkul_usb_dosen1_idx` (`nip`),
  KEY `fk_usb_detail_jadwalmatkul_usb_matkul1_idx` (`kd_matkul`),
  KEY `fk_usb_detail_jadwalmatkul_usb_ruang1_idx` (`kd_ruang`),
  CONSTRAINT `fk_usb_detail_jadwalmatkul_usb_dosen1` FOREIGN KEY (`nip`) REFERENCES `usb_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_detail_jadwalmatkul_usb_matkul1` FOREIGN KEY (`kd_matkul`) REFERENCES `usb_matkul` (`kd_matkul`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_detail_jadwalmatkul_usb_ruang1` FOREIGN KEY (`kd_ruang`) REFERENCES `usb_ruang` (`kd_ruang`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_detail_jadwalmatkul`
--

LOCK TABLES `usb_detail_jadwalmatkul` WRITE;
/*!40000 ALTER TABLE `usb_detail_jadwalmatkul` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_detail_jadwalmatkul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_ruangan`
--

DROP TABLE IF EXISTS `usb_ruangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_ruangan` (
  `kd_ruang` varchar(6) NOT NULL,
  `nm_ruang` varchar(20) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `jenis_ruang` varchar(20) DEFAULT NULL,
  `kd_lokasi` varchar(6) NOT NULL,
  PRIMARY KEY (`kd_ruang`),
  KEY `fkLokasi_idx` (`kd_lokasi`),
  CONSTRAINT `fkLokasi` FOREIGN KEY (`kd_lokasi`) REFERENCES `usb_lokasi` (`kd_lokasi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_ruangan`
--

LOCK TABLES `usb_ruangan` WRITE;
/*!40000 ALTER TABLE `usb_ruangan` DISABLE KEYS */;
INSERT INTO `usb_ruangan` VALUES ('R01','Ruang 1',40,'Ruang Teori','G1'),('R02','Ruang 2',25,'Lab. Komputer','G1'),('R03','Labkom 1',30,'Lab. Komputer','G3');
/*!40000 ALTER TABLE `usb_ruangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_dosen`
--

DROP TABLE IF EXISTS `usb_dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_dosen` (
  `nip` varchar(6) NOT NULL,
  `nm_dosen` varchar(30) NOT NULL,
  `jab_fungsional` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlp` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_dosen`
--

LOCK TABLES `usb_dosen` WRITE;
/*!40000 ALTER TABLE `usb_dosen` DISABLE KEYS */;
INSERT INTO `usb_dosen` VALUES ('100001','Roni Irawan, S.T, M.T','kaprodi','S1','bandung','1990-07-07',2147483647,22589654,'Soreang'),('100004','Nurul Arofah, S.T, M.M','kaprodi','S3','bandung','1990-07-07',2147483647,22589654,'Soreang'),('100005','Lukman Abdul Fatah, MSI','Ketua Jurusan','S2','Bandung','1980-06-01',22586543,2147483647,'Kiara Condong'),('100006','Irman Hariman, M.Kom','Dosen Luar Biasa','S2','Tasik','1979-08-08',2147483647,2147483647,'Jl. Kiaracondong No 78 Kiaracondong Bandung');
/*!40000 ALTER TABLE `usb_dosen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_matkul`
--

DROP TABLE IF EXISTS `usb_matkul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_matkul` (
  `kd_matkul` varchar(6) NOT NULL,
  `nm_matkul` varchar(30) NOT NULL,
  `sks` int(11) NOT NULL,
  PRIMARY KEY (`kd_matkul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_matkul`
--

LOCK TABLES `usb_matkul` WRITE;
/*!40000 ALTER TABLE `usb_matkul` DISABLE KEYS */;
INSERT INTO `usb_matkul` VALUES ('A01','Data Mining',2),('A02','Database Sertifikasi',2),('A03','Jaringan Komputer',2),('A04','Pemrograman Web',4),('A05','Artifical Intelegense',4),('A06','Profdev',2),('A07','MPPL',2);
/*!40000 ALTER TABLE `usb_matkul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_running_text`
--

DROP TABLE IF EXISTS `usb_running_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_running_text` (
  `kd_running_text` int(11) NOT NULL AUTO_INCREMENT,
  `informasi` text NOT NULL,
  `tgl_running_text` datetime NOT NULL,
  PRIMARY KEY (`kd_running_text`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_running_text`
--

LOCK TABLES `usb_running_text` WRITE;
/*!40000 ALTER TABLE `usb_running_text` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_running_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_lokasi`
--

DROP TABLE IF EXISTS `usb_lokasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_lokasi` (
  `kd_lokasi` varchar(6) NOT NULL DEFAULT '',
  `nm_lokasi` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`kd_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_lokasi`
--

LOCK TABLES `usb_lokasi` WRITE;
/*!40000 ALTER TABLE `usb_lokasi` DISABLE KEYS */;
INSERT INTO `usb_lokasi` VALUES ('G1','Gedung 1'),('G2','Gedung 2'),('G3','Gedung 3');
/*!40000 ALTER TABLE `usb_lokasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_jurusan`
--

DROP TABLE IF EXISTS `usb_jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_jurusan` (
  `kd_jurusan` varchar(6) NOT NULL,
  `nm_jurusan` varchar(45) DEFAULT NULL,
  `jenjang` varchar(45) DEFAULT NULL,
  `kd_prodi` varchar(6) NOT NULL,
  PRIMARY KEY (`kd_jurusan`),
  KEY `fkProdi_idx` (`kd_prodi`),
  CONSTRAINT `fkProdi` FOREIGN KEY (`kd_prodi`) REFERENCES `usb_prodi` (`kd_prodi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_jurusan`
--

LOCK TABLES `usb_jurusan` WRITE;
/*!40000 ALTER TABLE `usb_jurusan` DISABLE KEYS */;
INSERT INTO `usb_jurusan` VALUES ('ADNIS','Administrasi Bisnis','3 Tahun','AN'),('AP','Aplikasi Perkantoran','1 Tahun','MI'),('IF','Teknik Informatika','4 Tahun','MI'),('KA','Komputer Akuntansi','3 Tahun','AN'),('KP','Komputer Perpajakan','3 Tahun','AN'),('KU','Komputer Keuangan','3 Tahun','AN'),('MI','Manajemen Informatika','3 Tahun','MI'),('SI','Sistem Informasi','4 Tahun','MI'),('TI','Teknik Informatika','3 Tahun','MI');
/*!40000 ALTER TABLE `usb_jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'jadwal-usb'
--
/*!50003 DROP FUNCTION IF EXISTS `nooto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`roni`@`localhost` FUNCTION `nooto`() RETURNS int(11)
BEGIN
DECLARE nomor char(4);
DECLARE thn char(2);
DECLARE bln char(2);
DECLARE tamp char(16);

    SET nomor=(SELECT COUNT(kd_head_jadwal)FROM usb_jadwalmatkul);
    
    IF nomor>0 THEN
        BEGIN
            SET nomor=(SELECT RIGHT(kd_head_jadwal,4) FROM usb_jadwalmatkul ORDER BY kd_head_jadwal DESC LIMIT 0,1);
            SET nomor=nomor+1;
        END;
    ELSE
        SET nomor=1;
    END IF;
    
    SET thn=RIGHT(YEAR(NOW()),2);
    SET bln=MONTH(NOW());
    IF LENGTH(bln)=1 THEN
        SET bln=CONCAT('0',bln);
    END IF;
    SET tamp=CONCAT(thn,bln,LEFT('0000',4-LENGTH(nomor)),nomor);
    RETURN tamp;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-14 20:49:14
