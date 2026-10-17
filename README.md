
# MVC PHP Native - Data Mata Kuliah

Aplikasi CRUD sederhana untuk mengelola data mata kuliah menggunakan PHP Native dengan pola Model-View-Controller (MVC).

## Kebutuhan Sistem
- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Laragon atau XAMPP
- Git

## Instalasi
1. Simpan proyek di folder web server.
2. Impor file `database/matakuliah.sql` melalui phpMyAdmin.
3. Sesuaikan koneksi database pada `config/database.php`.
4. Jalankan Apache dan MySQL/MariaDB.
5. Buka aplikasi melalui browser:

   `http://localhost/mvc-data-matakuliah_0152/public/index.php`

## Struktur Folder
- `app/models/` : mengelola operasi data dan query database.
- `app/controllers/` : menangani request dan validasi input.
- `app/views/` : menampilkan halaman aplikasi.
- `config/` : konfigurasi koneksi database.
- `database/` : skrip database dan data awal.
- `public/` : entry point dan routing aplikasi.

## Fitur
- Menampilkan data mata kuliah.
- Menambahkan data mata kuliah.
- Mengubah data mata kuliah.
- Menghapus data mata kuliah.
- Validasi input wajib.
- Koneksi database menggunakan PDO.

## Histori Git
Untuk melihat riwayat pengembangan proyek, jalankan:

`git log --oneline --graph --decorate`
