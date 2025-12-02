📘 SISTEM INFORMASI SISWA — Web Akademik Sekolah

Sistem Informasi Siswa adalah aplikasi manajemen akademik berbasis Laravel yang dirancang untuk membantu sekolah mengelola data siswa, guru, kelas, mata pelajaran, jadwal pelajaran, hingga statistik akademik secara efisien, rapi, dan terstruktur.

Aplikasi ini bertujuan untuk membuat pengelolaan data akademik lebih cepat, rapi, modern, dan mudah dioperasikan oleh admin sekolah.

✨ Fitur Utama
👨‍🎓 Manajemen Siswa

Tambah, edit, hapus, dan lihat detail siswa

Statistik gender otomatis (jumlah laki-laki & perempuan)

Menampilkan list siswa berdasarkan kelas

Dashboard menampilkan total jumlah siswa



🏫 Manajemen Kelas

Tambah, edit, hapus kelas

Menampilkan daftar siswa di setiap kelas

Statistik jumlah siswa per kelas otomatis

📚 Manajemen Mata Pelajaran

CRUD data mata pelajaran

Relasi guru ↔ mata pelajaran

🗓️ Manajemen Jadwal Pelajaran

Tambah, edit, hapus jadwal

Relasi: kelas ↔ mapel ↔ guru

Jadwal tampil rapi berdasarkan hari & jam

📊 Dashboard Statistik Modern

Total jumlah siswa

Statistik gender

Statistik jumlah siswa per kelas

Tampilan UI modern & responsive

🧰 Teknologi yang Digunakan

Laravel 10

PHP 8.2

MySQL / MariaDB

Blade Template Engine

Bootstrap 5

Chart.js (untuk grafik & statistik)

Composer

Git & GitHub

🛠 Cara Clone & Menjalankan Sistem Informasi Siswa (Langkah Demi Langkah)
1️⃣ Install Git

Git digunakan untuk mengambil (clone) project dari GitHub.

Download Git:
👉 https://git-scm.com/downloads

Install seperti aplikasi biasa (Next → Next → Finish)

Cek apakah sudah terpasang:

git --version


Jika muncul versi, berarti Git sudah siap.

2️⃣ Install Composer

Composer dibutuhkan untuk mengambil dependency Laravel.

Download:
👉 https://getcomposer.org/download/

Cek apakah composer sudah terpasang:

composer -V

3️⃣ Clone Repository

Pilih folder mana saja di laptop, lalu buka terminal:

git clone https://github.com/Hadynatayusufpratama/Sistem_informasi_siswa.git


Masuk ke folder project:

cd Sistem_informasi_siswa

4️⃣ Install Dependency Laravel
composer install

5️⃣ Buat File .env

Copy file contoh:

cp .env.example .env


Generate app key:

php artisan key:generate

6️⃣ Buat Database

Buka phpMyAdmin / MySQL

Buat database baru, misalnya:

db_siswa


Edit file .env:

DB_DATABASE=db_siswa
DB_USERNAME=root
DB_PASSWORD=


(ubah sesuai konfigurasi MySQL kamu)

7️⃣ Jalankan Migrasi & Seeder
php artisan migrate --seed


Seeder otomatis membuat admin & data dasar.

8️⃣ Jalankan Server Laravel
php artisan serve


Akses di browser:

👉 http://127.0.0.1:8000

🔑 Akun Login Default
Email: admin@gmail.com
Password: 12345678

📂 Struktur Folder Project
Sistem_informasi_siswa/
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── views/
│   └── css/js
├── routes/
│   └── web.php
├── .env
├── composer.json
└── README.md

👨‍💻 Kontributor

Developer Utama:

HADYNATA YUSUF PRATAMA

Support & Kontributor:

Fidya Rahayu

Melin Okaviani

I Made Aditya Pramana

IRPANDI
