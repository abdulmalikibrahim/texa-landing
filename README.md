# TEXA Landing Page

Landing page resmi **PT Technology Extraordinary Advanced Management (TEXA)** — perusahaan teknologi yang berkedudukan di Haurgeulis, Kabupaten Indramayu, Jawa Barat, bergerak di bidang pengembangan aplikasi, distribusi perangkat komputer, dan infrastruktur telekomunikasi.

Dibangun di atas [CodeIgniter 3](https://codeigniter.com/userguide3/), tema gelap, satu halaman (single view), tanpa dependency eksternal (semua CSS/JS inline, tanpa build step).

## Struktur

```
application/
  config/       konfigurasi CI3 (base_url otomatis mendeteksi host/port/subfolder)
  controllers/  Landing.php — satu route ke halaman utama
  views/        landing.php — seluruh markup, style, dan script halaman
assets/img/     logo dan aset favicon (di-generate dari logo asli)
system/         core framework CodeIgniter 3.4.2
```

## Menjalankan secara lokal

Perlu PHP 7.2+ dan Apache/Nginx dengan `mod_rewrite` (atau [Laragon](https://laragon.org/) di Windows).

```bash
php -S localhost:8080
```

Lalu buka `http://localhost:8080/`.

## Konten

- Profil perusahaan, visi & misi
- Layanan unggulan: pengembangan aplikasi web, mobile, ERP/bisnis, integrasi sistem
- Lini usaha pendukung sesuai KBLI terdaftar (distribusi komputer, infrastruktur & peralatan telekomunikasi)
- Legalitas: NIB, SK Pengesahan Menkumham, Akta Pendirian, status terdaftar DJP
- Susunan direksi & komisaris
- Kontak (WhatsApp, email)

## Kontak

- Email: superadmin@texamanagement.com
- WhatsApp: +62 813-5677-4474
