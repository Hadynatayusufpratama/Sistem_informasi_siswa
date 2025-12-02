📘 SISTEM INFORMASI SISWA — WEB AKADEMIK SEKOLAH


---

Sistem Informasi Siswa adalah aplikasi berbasis Laravel yang dirancang untuk membantu sekolah dalam mengelola data siswa, guru, kelas, mata pelajaran, jadwal, dan nilai dengan mudah dan terstruktur.

Tujuan aplikasi ini adalah menyediakan sistem akademik yang cepat, rapi, aman, dan memiliki tampilan yang modern serta mudah digunakan.


---

✨ FITUR UTAMA


---

🧑‍🏫 Manajemen Siswa

Tambah, edit, hapus, dan lihat detail siswa

Statistik gender otomatis

Statistik jumlah siswa per kelas



🏫 Manajemen Kelas

CRUD kelas

Menampilkan daftar siswa dalam setiap kelas


📚 Manajemen Mata Pelajaran

CRUD mata pelajaran

Relasi ke guru & jadwal


🗓️ Manajemen Jadwal Pelajaran

Tambah, edit, dan hapus jadwal

Penjadwalan otomatis


📊 Dashboard Statistik

Grafik jumlah siswa

Statistik gender

Rekap data akademik



---

💻 TEKNOLOGI YANG DIGUNAKAN


---

Teknologi	Keterangan

Laravel 10+	Framework backend
PHP 8.2+	Bahasa pemrograman
MySQL/MariaDB	Database
Blade Template	View system
Bootstrap 5	Styling UI
Chart.js	Grafik dashboard
Composer	Dependency manager



---

🛠️ LANGKAH INSTALASI & CLONE PROJECT


---

1️⃣ Install Git

Download Git:
https://git-scm.com/downloads

Cek versi:

git --version


---

2️⃣ Install Composer

Download Composer:
https://getcomposer.org/download/

Cek versi:

composer --version


---

3️⃣ Install PHP & XAMPP

Download XAMPP:
https://www.apachefriends.org/

Gunakan PHP 8.2 atau lebih baru
Aktifkan Apache & MySQL


---

4️⃣ Clone Repository

git clone https://github.com/HADY2006-hdy/Sistem-Informasi-Siswa.git
cd Sistem-Informasi-Siswa


---

5️⃣ Install Dependency

composer install


---

6️⃣ Setup Environment

Copy env:

cp .env.example .env

Edit database di .env:

DB_DATABASE=db_siswa
DB_USERNAME=root
DB_PASSWORD=

Buat database di phpMyAdmin: db_siswa


---

7️⃣ Generate Key

php artisan key:generate


---

8️⃣ Migrasi & Seeder

php artisan migrate --seed

🔐 Default Admin Login

Email: admin@gmail.com

Password: 12345678



---

9️⃣ Jalankan Server

php artisan serve

Akses di browser:
http://127.0.0.1:8000


---

🔧 PERINTAH TAMBAHAN (JIKA ERROR)

php artisan optimize:clear
php artisan view:clear
php artisan migrate:fresh --seed


---

👨‍💻 KONTRIBUTOR


---

Developer Utama

HADYNATA YUSUF PRATAMA


Support & Contributor

Fidya Rahayu

Melin Oktafiani

I Made Aditya Pramana

Irpandi
