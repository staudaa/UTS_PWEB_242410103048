# Bloomify Admin Panel

Bloomify Admin Panel merupakan aplikasi berbasis Laravel 12 yang digunakan untuk mengelola data produk bunga, testimoni pelanggan, serta informasi profil pengguna.  
Aplikasi ini dirancang dengan pendekatan layout master dan Blade templating engine untuk menjaga konsistensi tampilan dan kemudahan pengelolaan kode.

## Deskripsi Singkat

Aplikasi ini menampilkan halaman login, dashboard, pengelolaan data bunga, testimoni pelanggan, dan profil pengguna.  
Struktur halaman menggunakan konsep `@extends`, `@section`, `@yield`, `@include`, serta komponen Blade `x-component` agar modular dan mudah dikembangkan.

## Fitur Utama

1. **Login Page**  
   Halaman autentikasi pengguna sebelum masuk ke sistem.

2. **Dashboard**  
   Menampilkan menu utama dan ringkasan fitur admin.

3. **Pengelolaan Produk**  
   Berisi tabel data bunga yang menampilkan nama, kategori, harga, stok, dan deskripsi.

4. **Testimoni Pelanggan**  
   Menampilkan carousel testimoni pelanggan yang dapat digeser.

5. **Profile Page**  
   Menampilkan data username dan password yang diinput saat login.

6. **Responsive Design**  
   Tampilan menyesuaikan secara otomatis pada berbagai ukuran layar (320px hingga 1440px).

7. **Sidebar Toggle (Mobile)**  
   Sidebar dapat ditampilkan dan disembunyikan menggunakan tombol toggle pada mode mobile.

8. **Blade Component (x-component)**  
   Menggunakan komponen `x-alert` untuk menampilkan pesan dinamis di halaman dashboard.

## Teknologi yang Digunakan

- Laravel 12  
- Bootstrap 5.3  
- Bootstrap Icons  
- Blade Templating Engine  
- HTML5, CSS3, dan JavaScript  
- Font Poppins  

## Instalasi dan Cara Menjalankan

1. **Clone atau ekstrak proyek**
   ```bash
   git clone https://github.com/username/bloomify-admin.git
   cd bloomify-admin
````

2. **Install dependency**

   ```bash
   composer install
   npm install
   ```

3. **Jalankan server Laravel**

   ```bash
   php artisan serve
   ```

   Kemudian buka browser dan akses `http://localhost:8000`

## Arsitektur Halaman

Semua halaman menggunakan layout master dengan elemen:

* `@extends('layouts.app')`
* `@section` dan `@endsection`
* `@yield('content')`
* `@include('components.navbar')` dan `@include('components.footer')`
* `<x-alert>` sebagai contoh penggunaan Blade Component

## Contoh Penggunaan Blade Component

File: `resources/views/components/alert.blade.php`

```blade
<x-alert type="success" message="Selamat datang di Bloomify!" />
```

Komponen ini digunakan untuk menampilkan pesan dinamis pada halaman dashboard atau halaman lain yang membutuhkan notifikasi sederhana.

## Catatan Pengembangan

* Semua halaman telah menerapkan ketentuan layout master sesuai instruksi.
* Data bunga dan testimoni masih berupa data statis yang diatur di dalam controller.
* Sidebar otomatis berubah menjadi toggle pada ukuran layar 320px hingga 1440px.
* Desain mengusung tema lembut dan pastel sesuai karakteristik brand Bloomify.

## Identitas Pengembang

Nama: Siti Raudatul Jannah
NIM: 242410103048
Mata Kuliah: Pemrograman Website
Tahun: 2025
