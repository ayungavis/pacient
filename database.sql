/**
 *	Officially created by
 * 	Tranity Project
 * 	---------------------
 * 	
 *	For more information:
 *	+62 857 3240 5860 (WhatsApp)
 * 	http://udah.pw/ayung
 */

CREATE TABLE `rawat_jalan` (
	`id` int(4) NOT NULL,
	`log_date` datetime,
	`identitas` varchar(32) NOT NULL,
	`nama_pasien` varchar(64) NOT NULl,
	`jenis_kelamin` enum('l', 'p') NOT NULL,
	`agama` enum('Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha') NOT NULL,
	`tanggal_lahir` date,
	`usia` varchar(4) NOT NULL,
	`nomor_telepon` varchar(16) NOT NULL,
	`nama_kk` varchar(64) NOT NULL,
	`hubungan_keluarga` varchar(16) NOT NULL,
	`jenis_perawatan` enum('jalan', 'inap') NOT NULL,
	`jenis_poli` enum('anak', 'gigi', 'syaraf', 'bedah', 'obsgyn', 'jantung', 'paru', 'rehabilitasi') NOT NULL,
	`alamat` text NOT NULL,
	`updated_by` varchar(32) NOT NULL,
	`updated_date` datetime,
	`revision` int(2) NOT NULL
) ENGINE=InnoDb DEFAULT CHARSET=latin1;

CREATE TABLE `rawat_inap` (
	`id` int(4) NOT NULL,
	`log_date` datetime,
	`identitas` varchar(32) NOT NULL,
	`nama_pasien` varchar(64) NOT NULl,
	`jenis_kelamin` enum('l', 'p') NOT NULL,
	`agama` enum('Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha') NOT NULL,
	`tanggal_lahir` date,
	`usia` varchar(4) NOT NULL,
	`nomor_telepon` varchar(16) NOT NULL,
	`nama_kk` varchar(64) NOT NULL,
	`hubungan_keluarga` varchar(16) NOT NULL,
	`jenis_perawatan` enum('jalan', 'inap') NOT NULL,
	`jenis_bangsal` enum('bedah', 'obsgyn', 'anak', 'dalam') NOT NULL,
	`alamat` text NOT NULL,
	`updated_by` varchar(32) NOT NULL,
	`updated_date` datetime,
	`revision` int(2) NOT NULL
) ENGINE=InnoDb DEFAULT CHARSET=latin1;

CREATE TABLE `rawat_darurat` (
	`id` int(4) NOT NULL,
	`log_date` datetime,
	`identitas` varchar(32) NOT NULL,
	`nama_pasien` varchar(64) NOT NULl,
	`jenis_kelamin` enum('l', 'p') NOT NULL,
	`agama` enum('Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha') NOT NULL,
	`tanggal_lahir` date,
	`usia` varchar(4) NOT NULL,
	`nomor_telepon` varchar(16) NOT NULL,
	`nama_kk` varchar(64) NOT NULL,
	`hubungan_keluarga` varchar(16) NOT NULL,
	`alamat` text NOT NULL,
	`updated_by` varchar(32) NOT NULL,
	`updated_date` datetime,
	`revision` int(2) NOT NULL
) ENGINE=InnoDb DEFAULT CHARSET=latin1;

ALTER TABLE `rawat_jalan` ADD PRIMARY KEY (`id`);
ALTER TABLE `rawat_jalan` MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `rawat_inap` ADD PRIMARY KEY (`id`);
ALTER TABLE `rawat_inap` MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `rawat_darurat` ADD PRIMARY KEY (`id`);
ALTER TABLE `rawat_darurat` MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;