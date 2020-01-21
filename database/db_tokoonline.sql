/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.10-MariaDB : Database - db_tokoonline
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_tokoonline` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_tokoonline`;

/*Table structure for table `detail_checkout` */

DROP TABLE IF EXISTS `detail_checkout`;

CREATE TABLE `detail_checkout` (
  `id_checkout` varchar(255) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_checkout` */

insert  into `detail_checkout`(`id_checkout`,`id_barang`,`jumlah`) values 
('74570261810586961011511125375',3,15),
('74570261810586961011511125375',2,20),
('74570261810586961011511125375',1,50);

/*Table structure for table `tbl_barang` */

DROP TABLE IF EXISTS `tbl_barang`;

CREATE TABLE `tbl_barang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` double(8,2) NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_barang` */

insert  into `tbl_barang`(`id`,`nama_produk`,`harga`,`gambar`) values 
(1,'Lemon',20000.00,'1578644079_lemon.jpg'),
(2,'Berry',30000.00,'1578644099_berry.jpg'),
(3,'Pir',25000.00,'1578644117_pir.jpg');

/*Table structure for table `tbl_checkout` */

DROP TABLE IF EXISTS `tbl_checkout`;

CREATE TABLE `tbl_checkout` (
  `id_checkout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_checkout` */

insert  into `tbl_checkout`(`id_checkout`,`id_user`,`total`) values 
('74570261810586961011511125375','18','1975000');

/*Table structure for table `tbl_keranjang` */

DROP TABLE IF EXISTS `tbl_keranjang`;

CREATE TABLE `tbl_keranjang` (
  `id_keranjang` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_barang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_keranjang`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_keranjang` */

insert  into `tbl_keranjang`(`id_keranjang`,`id_user`,`id_barang`,`jumlah`) values 
(19,'18','3',15),
(20,'18','2',20),
(21,'18','1',50);

/*Table structure for table `tbl_konfirmasi` */

DROP TABLE IF EXISTS `tbl_konfirmasi`;

CREATE TABLE `tbl_konfirmasi` (
  `id_konfirmasi` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_checkout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bukti` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_konfirmasi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_konfirmasi` */

insert  into `tbl_konfirmasi`(`id_konfirmasi`,`id_user`,`id_checkout`,`bukti`) values 
(2,'18','74570261810586961011511125375','1579566023_receipt.png');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`nama_user`,`email`,`password`) values 
(1,'admin','admin@mail.com','admin'),
(18,'user','user@mail.com','12345');

/*Table structure for table `checkout` */

DROP TABLE IF EXISTS `checkout`;

/*!50001 DROP VIEW IF EXISTS `checkout` */;
/*!50001 DROP TABLE IF EXISTS `checkout` */;

/*!50001 CREATE TABLE  `checkout`(
 `id_checkout` varchar(255) ,
 `nama_produk` varchar(255) ,
 `harga` double(8,2) ,
 `gambar` varchar(255) ,
 `jumlah` int(11) ,
 `nama_user` varchar(255) ,
 `id_user` varchar(255) 
)*/;

/*Table structure for table `keranjang` */

DROP TABLE IF EXISTS `keranjang`;

/*!50001 DROP VIEW IF EXISTS `keranjang` */;
/*!50001 DROP TABLE IF EXISTS `keranjang` */;

/*!50001 CREATE TABLE  `keranjang`(
 `id_keranjang` int(10) unsigned ,
 `nama_user` varchar(255) ,
 `nama_produk` varchar(255) ,
 `harga` double(8,2) ,
 `gambar` varchar(255) ,
 `jumlah` int(11) 
)*/;

/*View structure for view checkout */

/*!50001 DROP TABLE IF EXISTS `checkout` */;
/*!50001 DROP VIEW IF EXISTS `checkout` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `checkout` AS (select `tbl_checkout`.`id_checkout` AS `id_checkout`,`tbl_barang`.`nama_produk` AS `nama_produk`,`tbl_barang`.`harga` AS `harga`,`tbl_barang`.`gambar` AS `gambar`,`detail_checkout`.`jumlah` AS `jumlah`,`tbl_user`.`nama_user` AS `nama_user`,`tbl_checkout`.`id_user` AS `id_user` from (((`detail_checkout` join `tbl_checkout` on(`detail_checkout`.`id_checkout` = `tbl_checkout`.`id_checkout`)) join `tbl_user` on(`tbl_checkout`.`id_user` = `tbl_user`.`id`)) join `tbl_barang` on(`detail_checkout`.`id_barang` = `tbl_barang`.`id`))) */;

/*View structure for view keranjang */

/*!50001 DROP TABLE IF EXISTS `keranjang` */;
/*!50001 DROP VIEW IF EXISTS `keranjang` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `keranjang` AS (select `tbl_keranjang`.`id_keranjang` AS `id_keranjang`,`tbl_user`.`nama_user` AS `nama_user`,`tbl_barang`.`nama_produk` AS `nama_produk`,`tbl_barang`.`harga` AS `harga`,`tbl_barang`.`gambar` AS `gambar`,`tbl_keranjang`.`jumlah` AS `jumlah` from ((`tbl_keranjang` join `tbl_barang` on(`tbl_keranjang`.`id_barang` = `tbl_barang`.`id`)) join `tbl_user` on(`tbl_keranjang`.`id_user` = `tbl_user`.`id`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
