CREATE DATABASE IF NOT EXISTS db_matakuliah
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE db_matakuliah;

CREATE TABLE IF NOT EXISTS matakuliah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_mk VARCHAR(20) NOT NULL UNIQUE,
    nama_mk VARCHAR(100) NOT NULL,
    sks INT NOT NULL,
    semester INT NOT NULL,
    dosen_pengampu VARCHAR(100) NOT NULL
);

INSERT INTO matakuliah
(kode_mk, nama_mk, sks, semester, dosen_pengampu)
VALUES
('SI101', 'Pengantar Sistem Informasi', 3, 1, 'Budi Santoso'),
('SI202', 'Analisis Proses Bisnis', 3, 2, 'Siti Rahmawati'),
('SI303', 'Basis Data', 4, 3, 'Andi Pratama');