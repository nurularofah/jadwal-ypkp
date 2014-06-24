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
-- Temporary table structure for view `vjadwalmatakuliah`
--

DROP TABLE IF EXISTS `vjadwalmatakuliah`;
/*!50001 DROP VIEW IF EXISTS `vjadwalmatakuliah`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `vjadwalmatakuliah` (
  `kode` tinyint NOT NULL,
  `hari` tinyint NOT NULL,
  `matakuliah` tinyint NOT NULL,
  `sks` tinyint NOT NULL,
  `jam` tinyint NOT NULL,
  `ruangan` tinyint NOT NULL,
  `dosen` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vjadwalmatakuliah`
--

/*!50001 DROP TABLE IF EXISTS `vjadwalmatakuliah`*/;
/*!50001 DROP VIEW IF EXISTS `vjadwalmatakuliah`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`roni`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vjadwalmatakuliah` AS select `hj`.`kd_head_jadwal` AS `kode`,`dj`.`hari` AS `hari`,`m`.`nm_matkul` AS `matakuliah`,`m`.`sks` AS `sks`,concat(`dj`.`jammulai`,' - ',`dj`.`jamakhir`) AS `jam`,`r`.`nm_ruang` AS `ruangan`,`d`.`nm_dosen` AS `dosen` from ((((`usb_jadwalmatkul` `hj` join `usb_detail_jadwalmatkul` `dj` on((`hj`.`kd_head_jadwal` = `dj`.`kd_head_jadwal`))) join `usb_matkul` `m` on((`dj`.`kd_matkul` = `m`.`kd_matkul`))) join `usb_ruang` `r` on((`dj`.`kd_ruang` = `r`.`kd_ruang`))) join `usb_dosen` `d` on((`dj`.`nip` = `d`.`nip`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-24 10:58:59
