CREATE DATABASE IF NOT EXISTS `db_datatables`;

USE `db_datatables`;

CREATE TABLE IF NOT EXISTS `tbl_datatables` (
  `no` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_datatables` (`no`, `nama`, `tmp_lahir`, `tgl_lahir`, `status`, `keterangan`) VALUES
	(1, 'Rahmat Rahimi', 'Sukabumi', '1984-03-11', 'Ayah', 'Suami Idaman'),
	(2, 'Aisah Srinawati', 'Bandung', '1985-04-02', 'Ibu', 'Istri Tercinta'),
	(3, 'Raihan Firdaus', 'Bandung', '2010-04-25', 'Anak', 'Anak yg Aktif'),
	(4, 'Rafi Adnin', 'Bandung', '2012-03-26', 'Anak', 'Anak yg Cool');
