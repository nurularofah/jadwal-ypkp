CREATE DATABASE  IF NOT EXISTS `jadwal-usb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `jadwal-usb`;
-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: jadwal-usb
-- ------------------------------------------------------
-- Server version	5.5.31

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
-- Table structure for table `usb_detail_jadwalmatkul`
--

DROP TABLE IF EXISTS `usb_detail_jadwalmatkul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_detail_jadwalmatkul` (
  `kd_detail_jadwal` varchar(6) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jammulai` time NOT NULL,
  `jamakhir` time NOT NULL,
  `kd_head_jadwal` varchar(6) NOT NULL,
  `nip` varchar(6) NOT NULL,
  `kd_matkul` varchar(6) NOT NULL,
  `kd_ruang` varchar(6) NOT NULL,
  PRIMARY KEY (`kd_detail_jadwal`),
  KEY `fk_usb_detail_jadwalmatkul_usb_jadwalmatkul1_idx` (`kd_head_jadwal`),
  KEY `fk_usb_detail_jadwalmatkul_usb_dosen1_idx` (`nip`),
  KEY `fk_usb_detail_jadwalmatkul_usb_matkul1_idx` (`kd_matkul`),
  KEY `fk_usb_detail_jadwalmatkul_usb_ruang1_idx` (`kd_ruang`),
  CONSTRAINT `fk_usb_detail_jadwalmatkul_usb_dosen1` FOREIGN KEY (`nip`) REFERENCES `usb_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_detail_jadwalmatkul_usb_jadwalmatkul1` FOREIGN KEY (`kd_head_jadwal`) REFERENCES `usb_jadwalmatkul` (`kd_head_jadwal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
/*!40000 ALTER TABLE `usb_dosen` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Table structure for table `usb_jadwalmatkul`
--

DROP TABLE IF EXISTS `usb_jadwalmatkul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_jadwalmatkul` (
  `kd_head_jadwal` varchar(6) NOT NULL,
  `tahun` year(4) NOT NULL,
  `kd_jurusan` varchar(6) NOT NULL,
  `kd_prodi` varchar(6) NOT NULL,
  `kd_kelas` varchar(6) NOT NULL,
  `kd_smstr` int(11) NOT NULL,
  PRIMARY KEY (`kd_head_jadwal`),
  KEY `fk_usb_jadwalmatkul_usb_jurusan1_idx` (`kd_jurusan`,`kd_prodi`),
  KEY `fk_usb_jadwalmatkul_usb_kelas1_idx` (`kd_kelas`),
  KEY `fk_usb_jadwalmatkul_usb_semester1_idx` (`kd_smstr`),
  CONSTRAINT `fk_usb_jadwalmatkul_usb_jurusan1` FOREIGN KEY (`kd_jurusan`) REFERENCES `usb_jurusan` (`kd_jurusan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_jadwalmatkul_usb_kelas1` FOREIGN KEY (`kd_kelas`) REFERENCES `usb_kelas` (`kd_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usb_jadwalmatkul_usb_semester1` FOREIGN KEY (`kd_smstr`) REFERENCES `usb_semester` (`kd_smstr`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_jadwalmatkul`
--

LOCK TABLES `usb_jadwalmatkul` WRITE;
/*!40000 ALTER TABLE `usb_jadwalmatkul` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_jadwalmatkul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_jurusan`
--

DROP TABLE IF EXISTS `usb_jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_jurusan` (
  `kd_jurusan` varchar(6) NOT NULL,
  `nm_jurusan` varchar(30) NOT NULL,
  `jenjang` int(11) NOT NULL,
  `kd_prodi` varchar(6) NOT NULL,
  PRIMARY KEY (`kd_jurusan`),
  KEY `fk_usb_jurusan_usb_prodi1_idx` (`kd_prodi`),
  CONSTRAINT `fk_usb_jurusan_usb_prodi1` FOREIGN KEY (`kd_prodi`) REFERENCES `usb_prodi` (`kd_prodi`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_jurusan`
--

LOCK TABLES `usb_jurusan` WRITE;
/*!40000 ALTER TABLE `usb_jurusan` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_jurusan` ENABLE KEYS */;
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
  `kd_prodi` varchar(6) NOT NULL,
  PRIMARY KEY (`kd_kelas`),
  KEY `fk_usb_kelas_usb_jurusan1_idx` (`kd_jurusan`,`kd_prodi`),
  CONSTRAINT `fk_usb_kelas_usb_jurusan1` FOREIGN KEY (`kd_jurusan`) REFERENCES `usb_jurusan` (`kd_jurusan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_kelas`
--

LOCK TABLES `usb_kelas` WRITE;
/*!40000 ALTER TABLE `usb_kelas` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_lokasi`
--

DROP TABLE IF EXISTS `usb_lokasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_lokasi` (
  `kd_lokasi` varchar(6) NOT NULL,
  `nm_lokasi` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_lokasi`
--

LOCK TABLES `usb_lokasi` WRITE;
/*!40000 ALTER TABLE `usb_lokasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_lokasi` ENABLE KEYS */;
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
/*!40000 ALTER TABLE `usb_matkul` ENABLE KEYS */;
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
/*!40000 ALTER TABLE `usb_prodi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb_ruang`
--

DROP TABLE IF EXISTS `usb_ruang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_ruang` (
  `kd_ruang` varchar(6) NOT NULL,
  `nm_ruang` varchar(20) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `jenis_ruang` varchar(20) NOT NULL,
  `kd_lokasi` varchar(6) NOT NULL,
  PRIMARY KEY (`kd_ruang`,`kd_lokasi`),
  KEY `fk_usb_ruang_usb_lokasi_idx` (`kd_lokasi`),
  CONSTRAINT `fk_usb_ruang_usb_lokasi` FOREIGN KEY (`kd_lokasi`) REFERENCES `usb_lokasi` (`kd_lokasi`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_ruang`
--

LOCK TABLES `usb_ruang` WRITE;
/*!40000 ALTER TABLE `usb_ruang` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_ruang` ENABLE KEYS */;
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
-- Table structure for table `usb_semester`
--

DROP TABLE IF EXISTS `usb_semester`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb_semester` (
  `kd_smstr` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`kd_smstr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb_semester`
--

LOCK TABLES `usb_semester` WRITE;
/*!40000 ALTER TABLE `usb_semester` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb_semester` ENABLE KEYS */;
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-22 23:17:33