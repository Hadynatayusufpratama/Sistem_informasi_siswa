Sistem Informasi Siswa

Sistem informasi sederhana berbasis Laravel 12 yang digunakan untuk mengelola data siswa, autentikasi user, role admin/user, pencarian data, dashboard modern, grafik siswa per tahun, dan mode gelap (Dark Mode).

🚀 Fitur Utama

Login & Logout (Autentikasi)

Role User: Admin & User

CRUD Data Siswa

Pencarian siswa berdasarkan nama

Dashboard modern + statistik + grafik siswa

Profil pengguna

Dark Mode

Middleware role:admin

🛠️ Teknologi yang Digunakan

Laravel 12

PHP 8.2

Bootstrap 5

Chart.js

MySQL

Blade Template Engine

📥 Cara Instalasi & Menjalankan

Ikuti langkah berikut untuk menjalankan aplikasi dari awal:

1️⃣ Clone repository
git clone https://github.com/HADY2006-hdy/Sistem-Informasi-Siswa.git

2️⃣ Masuk ke folder project
cd Sistem-Informasi-Siswa

3️⃣ Install dependency Laravel
composer install

4️⃣ Copy file environment
cp .env.example .env

5️⃣ Generate key
php artisan key:generate

6️⃣ Buat database MySQL

Buat database baru misalnya:

nama database: sistem_siswa

7️⃣ Atur koneksi database di .env
DB_DATABASE=sistem_siswa
DB_USERNAME=root
DB_PASSWORD=

8️⃣ Jalankan migrasi + seeder
php artisan migrate --seed


Ini akan membuat:

tabel users

tabel siswas

akun admin default

9️⃣ Jalankan server Laravel
php artisan serve


Aplikasi bisa diakses di:

👉 http://127.0.0.1:8000

🔐 Akun Login Default
Admin

Email: admin2@example.com
Password: password

User

Email: user1@example.com
Password: password

🖥️ Screenshot

Tambahkan screenshot sesuai kebutuhan.

👨‍💻 Developer

HADYNATA YUSUF PRATAMA

