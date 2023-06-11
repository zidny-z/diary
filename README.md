## Requirements
PHP 8.1 + <a link='https://www.php.net/downloads'>Download di sini</a>
Web server software seperti laragon <a link='https://laragon.org/download/'>Download di sini</a>

##  Cara clone

- Clone proyek 
- Buka aplikasi folder menggunakan perintah cd di cmd atau terminal Anda 
- Jalankan penginstalan komposer/ `composer install` di cmd atau terminal Anda
- Salin file `.env.example` ke `.env` di folder root. Anda bisa mengetik copy `.env.example` .env jika menggunakan command prompt Windows atau cp `.env.example` `.env` jika menggunakan terminal, Ubuntu
- Buka file `.env` Anda dan ubah nama basis data (DB_DATABASE) menjadi apa pun yang Anda miliki, bidang nama pengguna (DB_USERNAME) dan kata sandi (DB_PASSWORD) sesuai dengan konfigurasi Anda.
- Jalankan `php artisan key:generate`
- Jalankan `php artisan migrate`
- Jalankan `php artisan serve`
- Buka http://localhost:8000/

