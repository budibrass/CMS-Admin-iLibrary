# CMS-Admin-iLibrary
Disini saya membuat Web Aplikasi Sederhana menggunakan Bahasa Pemrograman PHP dan belum menggunakan framework apapun itu dan sangat cocok untuk bagi pemula yang mau belajar PHP, untuk desain nya sendiri saya menggunakan Custom dari Bootstrap V. Web Apps yang saya buat bernama Sistem Admin Perpustakaan yang dimana admin dapat melakukan CRUD data anggota dan buku, melihat transaksi peminjaman dan pengembalian buku dari inpuutan database, serta memprint laporan detail transaksi peminjaman. Untuk database nya sendiris saya menggunakan ```MySQL```.

## Task
Buatlah Fancy Todos App dengan require sebagai berikut :

- Release 0 :
    - Buat Database dan kolom yang berisi field sebagai berikut:
        - tbl_anggota
            - id
            - nama
            - jk
            - status
            - agama
            - hp
            - foto
            - alamat

        - tbl_admin
            - id
            - username
            - password

        - tbl_buku
            - id
            - nama
            - jenis
            - pengarang
            - penerbit
            - stok keseluruhan
            - sisa stok buku

        - tbl_transaksi
            - id
            - id anggota
            - id buku
            - tanggal peminjaman
            - tanggal pengembalian
            - status
    
- Release 1 :
    - Mengambil semua data dari tabel Anggota
    - Mengambil semua data dari tabel Buku
    - Mengambil semua data dari tabel Transaksi

- Release 2 :
    - Mengambil detail Anggota berdasarkan ID
    - Mengedit data Anggota dan Buku berdasarkan ID
    - Menghapus data Anggota dan Buku berdasarkan ID

- Release 3 :
    - Buat Login nya
    - Login wajib menggunakan Session


# Getting Started
Hal yang perlu dilakukan untuk memulai Aplikasi Web :

- Pastikan di komputer kamu telah terinstal ```XAMPP```
- Aktifkan XAMPP dan Start untuk ```Apache``` dan ```MySQL``` 
- Buka folder htdocs yang ada di folder ```XAMPP``` anda
- clone this repository
- cd CMS-Admin-iLibrary
- Buka Browser lalu masuk ke ```phpMyAdmin```
- Buat nama database ```ilibrary```
- import database ```ilibrary.sql``` yang ada di folder
- Buka browser web dengan URL : ```localhost/CMS-Admin-iLibrary/index.php```
- di form login masukkan usernama dan password nya ```admin``` dan ```admin```
- Selamat menjalankan DEMO Program 