<img width="1226" height="462" alt="image" src="https://github.com/user-attachments/assets/5f1b7714-0098-4f54-b9c4-2dc2e38309f5" />

# QuotesVault 🧠✨
QuotesVault adalah aplikasi PHP sederhana untuk menampilkan kutipan inspiratif secara dinamis. Aplikasi ini menggunakan MySQL untuk menyimpan data quotes dan Redis untuk caching agar performa lebih cepat. Dilengkapi CI/CD otomatis melalui GitHub Actions yang langsung mendeloy ke server VPS.

## 🏗️ Arsitektur
QuotesVault terdiri dari tiga service utama:
- **App (PHP + Apache)** → Menjalankan web application.
- **Database (MySQL)** → Menyimpan data quotes.
- **Cache (Redis)** → Menyimpan cache agar akses data lebih cepat.

Semua service dikelola melalui Docker Compose.

Client → PHP App → Redis ↔ MySQL

## ✨ Fitur Utama
- Menampilkan kutipan inspiratif dari database
- Caching otomatis menggunakan Redis
- Dockerized (multi-container: app + db + redis)
- CI/CD otomatis dengan GitHub Actions
- Database auto-initialize dengan file `db.sql`

## 🚀 Menjalankan Secara Lokal

1. Clone repositori ini:
   ```
   git clone https://github.com/destiaeka/quotesvault.git
   cd quotesvault
   ```
2. Build dan Jalankan menggunakan Docker Compose
   ```
   docker-compose up -d
   ```
3. Akses Aplikasi
   ```
   http://localhost:82
   ```
