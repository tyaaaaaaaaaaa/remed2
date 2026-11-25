-- Active: 1794357560193@@127.0.0.1@3306@db_apotek_remedial
-- Database: db_apotek_remedial
-- Tabel: tb_kunjungan (Single Table, Tanpa Relasi)

CREATE DATABASE IF NOT EXISTS `db_apotek_remedial`;
USE `db_apotek_remedial`;

DROP TABLE IF EXISTS `tb_kunjungan`;
CREATE TABLE `tb_kunjungan` (
    `id_kunjungan` INT AUTO_INCREMENT PRIMARY KEY,
    `nama_pasien` VARCHAR(100) NOT NULL,
    `no_telepon` VARCHAR(20) NOT NULL,
    `keluhan` TEXT NOT NULL,
    `tanggal_kunjungan` DATE NOT NULL,
    `status` ENUM('Menunggu', 'Selesai') NOT NULL DEFAULT 'Menunggu',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data Dummy Awal
INSERT INTO `tb_kunjungan` (`nama_pasien`, `no_telepon`, `keluhan`, `tanggal_kunjungan`, `status`) VALUES
('Rina Safitri', '081234567891', 'Konsultasi obat batuk berdahak dan vitamin', '2026-11-25', 'Menunggu'),
('Dani Pratama', '081298765432', 'Tebus resep obat demam anak', '2026-11-25', 'Menunggu'),
('Siti Rahma', '085711223344', 'Cek tekanan darah rutin', '2026-11-24', 'Selesai'),
('Budi Santoso', '081344556677', 'Keluhan nyeri lambung / maag', '2026-11-24', 'Selesai');

SELECT * FROM tb_kunjungan;