-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_test.keu_5akun
CREATE TABLE IF NOT EXISTS `keu_5akun` (
  `noakun` int(30) NOT NULL,
  `namaakun` varchar(100) NOT NULL DEFAULT '',
  `namaakun1` varchar(100) NOT NULL DEFAULT '',
  `tipeakun` varchar(100) NOT NULL DEFAULT '',
  `kasbank` int(5) NOT NULL DEFAULT '0',
  `level` int(1) NOT NULL DEFAULT '0',
  `matauang` varchar(4) NOT NULL DEFAULT '0',
  `kodeorg` varchar(4) NOT NULL DEFAULT '0',
  `detail` int(4) NOT NULL DEFAULT '0',
  `fieldaktif` int(4) NOT NULL DEFAULT '0',
  `pemilik` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`noakun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_test.keu_5akun: ~8 rows (approximately)
/*!40000 ALTER TABLE `keu_5akun` DISABLE KEYS */;
INSERT INTO `keu_5akun` (`noakun`, `namaakun`, `namaakun1`, `tipeakun`, `kasbank`, `level`, `matauang`, `kodeorg`, `detail`, `fieldaktif`, `pemilik`) VALUES
	(1, 'AKTIVA', 'AKTIVA', 'aktiva', 0, 0, 'IDR', '0', 0, 0, '0'),
	(2, 'PASSIVA', 'PASSIVA', 'passiva', 0, 0, 'IDR', '0', 0, 0, '0'),
	(11, 'AKTIVA LANCAR', 'AKTIVA LANCAR', 'aktiva', 0, 0, 'IDR', '0', 0, 0, '0'),
	(21, 'PASSIVA LANCAR', 'PASSIVA LANCAR', 'passiva', 0, 0, 'IDR', '0', 0, 0, '0'),
	(211, 'HUTANG USAHA', 'HUTANG USAHA', 'passiva', 0, 0, 'IDR', '0', 0, 0, '0'),
	(2110101, 'Hutang usaha Pihak Ketiga', 'Hutang usaha Pihak Ketiga', 'passiva', 0, 0, 'IDR', '0', 0, 0, '0'),
	(2110102, 'Hutang Pembelian Barang/Jasa', 'Hutang Pembelian Barang/Jasa', 'passiva', 0, 0, 'IDR', '0', 0, 0, '0'),
	(2110103, 'Hutang Supplier Lokal', 'Hutang Supplier Lokal', 'passiva', 0, 0, 'IDR', '0', 0, 0, '0');
/*!40000 ALTER TABLE `keu_5akun` ENABLE KEYS */;

-- Dumping structure for table db_test.keu_5klsupplier
CREATE TABLE IF NOT EXISTS `keu_5klsupplier` (
  `kodeklp` varchar(4) NOT NULL,
  `namaklp` varchar(200) NOT NULL,
  `noakun` int(7) NOT NULL DEFAULT '0',
  `tipe` enum('KONTRAKTOR','SUPPLIER') NOT NULL DEFAULT 'SUPPLIER',
  PRIMARY KEY (`kodeklp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_test.keu_5klsupplier: ~0 rows (approximately)
/*!40000 ALTER TABLE `keu_5klsupplier` DISABLE KEYS */;
INSERT INTO `keu_5klsupplier` (`kodeklp`, `namaklp`, `noakun`, `tipe`) VALUES
	('K001', 'pt jaya wijaya', 2110101, 'KONTRAKTOR'),
	('K002', 'pt jaya wijaya', 2110101, 'KONTRAKTOR'),
	('S003', 'pt subur makmur', 2110102, 'SUPPLIER');
/*!40000 ALTER TABLE `keu_5klsupplier` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
