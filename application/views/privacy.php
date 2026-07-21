<?php
$texa_title = 'Kebijakan Privasi — TEXA (PT Technology Extraordinary Advanced Management)';
$texa_desc  = 'Kebijakan privasi TEXA menjelaskan bagaimana kami mengumpulkan, menggunakan, membagikan, dan melindungi data, termasuk data yang diproses melalui integrasi Meta Platforms seperti WhatsApp Business Platform.';
$texa_url   = current_url();
$texa_logo  = base_url('assets/img/logo.png');
$updated_at = 'Jul 21, 2026';
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $texa_title; ?></title>
<meta name="description" content="<?php echo $texa_desc; ?>">
<meta name="robots" content="index, follow">
<meta name="author" content="PT Technology Extraordinary Advanced Management">
<link rel="canonical" href="<?php echo $texa_url; ?>">
<meta name="theme-color" content="#05070A">
<link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" sizes="any">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/img/favicon-16x16.png'); ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/img/favicon-32x32.png'); ?>">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/img/icon-192.png'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>">

<meta property="og:type" content="website">
<meta property="og:site_name" content="TEXA — PT Technology Extraordinary Advanced Management">
<meta property="og:title" content="<?php echo $texa_title; ?>">
<meta property="og:description" content="<?php echo $texa_desc; ?>">
<meta property="og:url" content="<?php echo $texa_url; ?>">
<meta property="og:image" content="<?php echo $texa_logo; ?>">
<meta property="og:locale" content="id_ID">

<style>
  :root {
    --bg: #05070A;
    --bg-raised: #090C11;
    --bg-card: #0D1118;
    --line: #1E2530;
    --line-soft: rgba(236,238,242,0.05);
    --text: #EDEFF3;
    --text-muted: #8D97A8;
    --text-faint: #525C6B;
    --accent: #E3A052;
    --accent-strong: #F5BE7C;
    --accent-ink: #150E04;
    --ok: #6FBF9A;

    --font-mono: ui-monospace, "JetBrains Mono", "Cascadia Code", "SFMono-Regular", Consolas, monospace;
    --font-sans: -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif;

    --fs-xs: 0.72rem;
    --fs-sm: 0.85rem;
    --fs-base: 1rem;
    --fs-md: 1.1rem;
    --fs-lg: 1.35rem;
    --fs-xl: 1.9rem;

    --space-1: 0.5rem;
    --space-2: 1rem;
    --space-3: 1.5rem;
    --space-4: 2.25rem;
    --space-5: 3.5rem;

    --radius: 3px;
    --container: 880px;
  }

  * { box-sizing: border-box; }
  html { overflow-x: hidden; }
  body { overflow-x: hidden; }

  body {
    margin: 0;
    background:
      radial-gradient(circle at 1px 1px, rgba(227,160,82,0.05) 1px, transparent 1px) 0 0/28px 28px,
      var(--bg);
    color: var(--text);
    font-family: var(--font-sans);
    font-size: var(--fs-base);
    line-height: 1.65;
    -webkit-font-smoothing: antialiased;
  }

  img { max-width: 100%; display: block; }
  a { color: var(--accent); }
  a:hover { color: var(--accent-strong); }

  .wrap {
    max-width: var(--container);
    margin: 0 auto;
    padding-left: var(--space-3);
    padding-right: var(--space-3);
  }

  .label {
    font-family: var(--font-mono);
    font-size: var(--fs-xs);
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--accent);
  }

  h1, h2 { text-wrap: balance; margin: 0; font-family: var(--font-mono); font-weight: 600; }
  p { margin: 0; }

  :focus-visible { outline: 2px solid var(--accent); outline-offset: 3px; }

  /* ---------- Nav ---------- */
  header.nav {
    position: sticky;
    top: 0;
    z-index: 50;
    backdrop-filter: blur(10px);
    background: color-mix(in srgb, var(--bg) 82%, transparent);
    border-bottom: 1px solid var(--line-soft);
  }
  .nav-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 0;
  }
  .brand { display: flex; align-items: center; text-decoration: none; color: var(--text); }
  .brand-logo {
    display: inline-flex;
    align-items: center;
    background: #FFFFFF;
    padding: 0.4rem 0.75rem;
    border-radius: var(--radius);
    line-height: 0;
  }
  .brand-logo img { display: block; height: 28px; width: auto; }
  @media (min-width: 640px) { .brand-logo img { height: 34px; } }
  .btn {
    font-family: var(--font-mono);
    font-size: var(--fs-sm);
    letter-spacing: 0.02em;
    padding: 0.6rem 1.1rem;
    border-radius: var(--radius);
    border: 1px solid var(--line);
    background: transparent;
    color: var(--text);
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    white-space: nowrap;
    transition: border-color 0.15s ease, color 0.15s ease;
  }
  .btn:hover { border-color: var(--accent); color: var(--accent); }

  /* ---------- Doc header ---------- */
  .doc-hero { padding: var(--space-5) 0 var(--space-3); border-bottom: 1px solid var(--line-soft); }
  .doc-hero h1 { font-size: var(--fs-xl); margin-top: 0.6rem; }
  .doc-hero .updated { margin-top: var(--space-2); color: var(--text-faint); font-family: var(--font-mono); font-size: var(--fs-xs); letter-spacing: 0.05em; }

  /* ---------- Content ---------- */
  .doc { padding: var(--space-5) 0; }
  .doc-nav {
    background: var(--bg-card);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    padding: var(--space-3);
    margin-bottom: var(--space-5);
  }
  .doc-nav .label { display: block; margin-bottom: 0.7rem; }
  .doc-nav ol { margin: 0; padding-left: 1.2rem; color: var(--text-muted); font-size: var(--fs-sm); columns: 2; column-gap: var(--space-3); }
  .doc-nav li { margin-bottom: 0.35rem; break-inside: avoid; }
  .doc-nav a { text-decoration: none; color: var(--text-muted); }
  .doc-nav a:hover { color: var(--accent); }
  @media (max-width: 640px) { .doc-nav ol { columns: 1; } }

  .doc-section { padding-top: var(--space-4); padding-bottom: var(--space-4); border-bottom: 1px solid var(--line-soft); scroll-margin-top: 90px; }
  .doc-section:last-child { border-bottom: none; }
  .doc-section h2 { font-size: var(--fs-md); display: flex; align-items: baseline; gap: 0.6rem; }
  .doc-section h2 .n { color: var(--accent); font-size: var(--fs-sm); }
  .doc-section .body { margin-top: var(--space-2); color: var(--text-muted); font-size: var(--fs-base); }
  .doc-section .body p + p { margin-top: 0.9rem; }
  .doc-section .body ul, .doc-section .body ol { margin: 0.9rem 0 0; padding-left: 1.3rem; }
  .doc-section .body li { margin-bottom: 0.5rem; }
  .doc-section .body strong { color: var(--text); font-weight: 600; }
  .doc-section .body a { text-decoration: underline; text-underline-offset: 2px; }

  .callout {
    margin-top: var(--space-2);
    background: var(--bg-card);
    border: 1px solid var(--line);
    border-left: 2px solid var(--accent);
    border-radius: var(--radius);
    padding: 1rem var(--space-3);
    font-size: var(--fs-sm);
    color: var(--text-muted);
  }
  .callout strong { color: var(--text); }

  table.data-table { width: 100%; border-collapse: collapse; margin-top: var(--space-2); font-size: var(--fs-sm); }
  table.data-table th, table.data-table td { text-align: left; padding: 0.6rem 0.8rem; border: 1px solid var(--line); vertical-align: top; }
  table.data-table th { font-family: var(--font-mono); font-size: var(--fs-xs); text-transform: uppercase; letter-spacing: 0.06em; color: var(--text-faint); background: var(--bg-card); }
  table.data-table td { color: var(--text-muted); }
  .table-scroll { overflow-x: auto; }

  .contact-box {
    background: var(--bg-card);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    padding: var(--space-3);
    margin-top: var(--space-2);
    font-size: var(--fs-sm);
  }
  .contact-box .row { display: flex; gap: 0.6rem; padding: 0.35rem 0; }
  .contact-box .row .k { flex: 0 0 110px; color: var(--text-faint); font-family: var(--font-mono); font-size: var(--fs-xs); text-transform: uppercase; letter-spacing: 0.06em; }
  .contact-box .row .v { color: var(--text); }

  /* ---------- Footer ---------- */
  footer { border-top: 1px solid var(--line-soft); padding: var(--space-4) 0; }
  .footer-inner {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: var(--space-2);
    font-size: var(--fs-xs);
    color: var(--text-faint);
    font-family: var(--font-mono);
  }
  .footer-inner a { color: var(--text-faint); text-decoration: none; }
  .footer-inner a:hover { color: var(--accent); }
</style>
</head>
<body>

<header class="nav">
  <div class="wrap nav-inner">
    <a href="<?php echo base_url(); ?>" class="brand">
      <span class="brand-logo">
        <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="TEXA — PT Technology Extraordinary Advanced Management">
      </span>
    </a>
    <a class="btn" href="<?php echo base_url(); ?>#kontak">Kontak</a>
  </div>
</header>

<main>
  <div class="doc-hero">
    <div class="wrap">
      <span class="label">Dokumen Legal</span>
      <h1>Kebijakan Privasi</h1>
      <p class="updated">Terakhir diperbarui: <?php echo $updated_at; ?> · Berlaku untuk texamanagement.com dan seluruh layanan TEXA</p>
    </div>
  </div>

  <div class="doc wrap">
    <nav class="doc-nav" aria-label="Daftar isi">
      <span class="label">Daftar Isi</span>
      <ol>
        <li><a href="#pendahuluan">Pendahuluan</a></li>
        <li><a href="#data-dikumpulkan">Data yang Kami Kumpulkan</a></li>
        <li><a href="#cara-penggunaan">Bagaimana Kami Menggunakan Data</a></li>
        <li><a href="#dasar-hukum">Dasar Hukum Pemrosesan</a></li>
        <li><a href="#integrasi-meta">Integrasi dengan Platform Meta</a></li>
        <li><a href="#berbagi-data">Berbagi Data dengan Pihak Ketiga</a></li>
        <li><a href="#transfer-internasional">Transfer Data Internasional</a></li>
        <li><a href="#cookie">Cookie &amp; Teknologi Pelacakan</a></li>
        <li><a href="#keamanan">Keamanan Data</a></li>
        <li><a href="#retensi">Retensi Data</a></li>
        <li><a href="#hak-pengguna">Hak Anda atas Data Pribadi</a></li>
        <li><a href="#anak">Privasi Anak</a></li>
        <li><a href="#perubahan">Perubahan Kebijakan Ini</a></li>
        <li><a href="#kontak-privasi">Hubungi Kami</a></li>
      </ol>
    </nav>

    <section class="doc-section" id="pendahuluan">
      <h2><span class="n">01</span> Pendahuluan</h2>
      <div class="body">
        <p>Kebijakan Privasi ini menjelaskan bagaimana <strong>PT Technology Extraordinary Advanced Management</strong> ("TEXA", "kami") mengumpulkan, menggunakan, menyimpan, membagikan, dan melindungi data pribadi yang diperoleh melalui situs web texamanagement.com, komunikasi WhatsApp/email/telepon, serta produk dan layanan yang kami kembangkan untuk klien kami — termasuk aplikasi web, aplikasi mobile, sistem bisnis, dan integrasi pihak ketiga seperti WhatsApp Business Platform milik Meta Platforms, Inc.</p>
        <p>Dengan mengakses situs ini atau menggunakan layanan kami, Anda menyetujui praktik yang dijelaskan dalam kebijakan ini. Kebijakan ini berlaku bagi pengunjung situs web, calon klien, klien, serta pengguna akhir dari aplikasi yang kami bangun dan operasikan atas nama klien kami, sepanjang TEXA bertindak sebagai penyedia teknologi (technology/tech provider).</p>
      </div>
    </section>

    <section class="doc-section" id="data-dikumpulkan">
      <h2><span class="n">02</span> Data yang Kami Kumpulkan</h2>
      <div class="body">
        <p>Jenis data yang kami kumpulkan bergantung pada bagaimana Anda berinteraksi dengan kami:</p>
        <div class="table-scroll">
        <table class="data-table">
          <thead>
            <tr><th>Kategori</th><th>Contoh Data</th><th>Sumber</th></tr>
          </thead>
          <tbody>
            <tr>
              <td>Data identitas &amp; kontak</td>
              <td>Nama, nomor telepon/WhatsApp, alamat email, nama perusahaan, jabatan</td>
              <td>Diberikan langsung — formulir kontak, WhatsApp, email, telepon</td>
            </tr>
            <tr>
              <td>Data komunikasi</td>
              <td>Isi pesan, lampiran, riwayat percakapan dengan tim kami atau melalui saluran WhatsApp Business yang kami kelola untuk klien</td>
              <td>Interaksi langsung melalui WhatsApp, email, atau formulir</td>
            </tr>
            <tr>
              <td>Data teknis</td>
              <td>Alamat IP, jenis perangkat/browser, halaman yang dikunjungi, waktu akses, log server</td>
              <td>Otomatis saat mengakses situs atau aplikasi</td>
            </tr>
            <tr>
              <td>Data akun &amp; transaksi</td>
              <td>Kredensial login aplikasi, riwayat pesanan/transaksi, data pembayaran (diproses oleh penyedia gateway pembayaran pihak ketiga — kami tidak menyimpan nomor kartu penuh)</td>
              <td>Dibuat saat menggunakan aplikasi/sistem yang kami kembangkan</td>
            </tr>
            <tr>
              <td>Data melalui API Meta</td>
              <td>Nomor WhatsApp pengguna akhir, isi pesan, status pengiriman/pembacaan pesan, metadata percakapan, identifier akun WhatsApp Business</td>
              <td>Diproses melalui WhatsApp Business Platform (Cloud API) saat kami menyediakan solusi integrasi bagi klien</td>
            </tr>
          </tbody>
        </table>
        </div>
        <div class="callout"><strong>Catatan:</strong> Untuk data yang diproses dalam sistem milik klien kami (di mana TEXA bertindak sebagai penyedia teknologi/pengembang), pihak klien tetap menjadi pengendali data (data controller) atas data pengguna akhirnya, sedangkan TEXA bertindak sebagai pemroses data (data processor) sesuai kesepakatan kerja sama.</div>
      </div>
    </section>

    <section class="doc-section" id="cara-penggunaan">
      <h2><span class="n">03</span> Bagaimana Kami Menggunakan Data</h2>
      <div class="body">
        <ul>
          <li>Merespons pertanyaan, permintaan penawaran, dan komunikasi lain dari calon klien maupun klien.</li>
          <li>Mengembangkan, mengonfigurasi, menguji, dan memelihara aplikasi, sistem, serta integrasi (termasuk integrasi WhatsApp Business Platform) sesuai kontrak kerja dengan klien.</li>
          <li>Mengirimkan notifikasi transaksional melalui WhatsApp atau email atas nama klien (misalnya konfirmasi pesanan, pengingat, status layanan) sesuai instruksi klien selaku pengendali data.</li>
          <li>Menjaga keamanan sistem, mencegah penyalahgunaan, dan melakukan audit teknis.</li>
          <li>Memenuhi kewajiban hukum, termasuk kewajiban perpajakan dan administrasi badan usaha.</li>
          <li>Meningkatkan kualitas situs web dan layanan kami melalui analisis penggunaan secara agregat.</li>
        </ul>
        <p>Kami <strong>tidak</strong> menjual data pribadi kepada pihak ketiga, dan tidak menggunakan data komunikasi WhatsApp klien untuk kepentingan iklan pihak ketiga.</p>
      </div>
    </section>

    <section class="doc-section" id="dasar-hukum">
      <h2><span class="n">04</span> Dasar Hukum Pemrosesan</h2>
      <div class="body">
        <p>Kami memproses data pribadi berdasarkan salah satu dasar berikut, sejalan dengan Undang-Undang Republik Indonesia Nomor 27 Tahun 2022 tentang Pelindungan Data Pribadi:</p>
        <ul>
          <li><strong>Persetujuan</strong> — saat Anda mengirimkan formulir kontak atau memulai percakapan WhatsApp dengan kami.</li>
          <li><strong>Pelaksanaan kontrak</strong> — untuk mengirimkan layanan yang telah disepakati dengan klien.</li>
          <li><strong>Kewajiban hukum</strong> — misalnya pencatatan untuk kepentingan perpajakan.</li>
          <li><strong>Kepentingan sah (legitimate interest)</strong> — untuk keamanan sistem dan pencegahan penyalahgunaan, selama tidak mengesampingkan hak Anda.</li>
        </ul>
      </div>
    </section>

    <section class="doc-section" id="integrasi-meta">
      <h2><span class="n">05</span> Integrasi dengan Platform Meta</h2>
      <div class="body">
        <p>TEXA membangun dan mengoperasikan integrasi teknis dengan produk Meta Platforms, Inc. — termasuk <strong>WhatsApp Business Platform (Cloud API)</strong> — sebagai bagian dari layanan pengembangan aplikasi bisnis bagi klien kami. Dalam kapasitas ini, TEXA dapat bertindak sebagai <strong>Tech Provider</strong> yang menghubungkan sistem klien dengan infrastruktur Meta.</p>
        <p>Sehubungan dengan integrasi tersebut:</p>
        <ul>
          <li>Data yang dikirim dan diterima melalui WhatsApp Business Platform (nomor telepon, isi pesan, status pengiriman, metadata percakapan) diproses sesuai dengan <a href="https://www.whatsapp.com/legal/business-policy/" target="_blank" rel="noopener">Kebijakan Bisnis WhatsApp</a>, <a href="https://developers.facebook.com/terms/" target="_blank" rel="noopener">Meta Platform Terms</a>, dan <a href="https://developers.facebook.com/devpolicy/" target="_blank" rel="noopener">Meta Developer Policies</a>.</li>
          <li>TEXA hanya mengakses data yang diperlukan untuk menjalankan fungsi integrasi yang disepakati dengan klien (misalnya pengiriman pesan transaksional, chatbot layanan pelanggan, atau notifikasi otomatis).</li>
          <li>Data tidak digunakan untuk tujuan di luar cakupan yang diizinkan oleh kebijakan platform Meta, dan tidak dibagikan kepada pihak ketiga yang tidak berkepentingan.</li>
          <li>Klien yang menggunakan layanan integrasi kami tetap bertanggung jawab untuk memberikan pemberitahuan privasi yang sesuai kepada pengguna akhir mereka sendiri.</li>
        </ul>
        <div class="callout">Jika Anda adalah pengguna akhir yang berkomunikasi dengan salah satu klien kami melalui WhatsApp dan memiliki pertanyaan mengenai data Anda, silakan hubungi bisnis yang bersangkutan secara langsung, atau hubungi kami melalui kontak pada bagian 14 untuk permintaan yang berkaitan dengan infrastruktur teknis yang kami kelola.</div>
      </div>
    </section>

    <section class="doc-section" id="berbagi-data">
      <h2><span class="n">06</span> Berbagi Data dengan Pihak Ketiga</h2>
      <div class="body">
        <p>Kami dapat membagikan data dengan pihak ketiga terbatas berikut, sejauh diperlukan untuk menjalankan layanan:</p>
        <ul>
          <li><strong>Meta Platforms, Inc.</strong> — melalui WhatsApp Business Platform, untuk pengiriman dan penerimaan pesan sesuai konfigurasi integrasi klien.</li>
          <li><strong>Penyedia hosting &amp; infrastruktur cloud</strong> — untuk penyimpanan data dan menjalankan aplikasi.</li>
          <li><strong>Penyedia payment gateway</strong> — untuk memproses transaksi pembayaran pada aplikasi yang kami kembangkan.</li>
          <li><strong>Konsultan profesional</strong> (hukum, akuntansi) — sejauh diperlukan untuk kepatuhan hukum.</li>
          <li><strong>Otoritas berwenang</strong> — apabila diwajibkan oleh hukum yang berlaku.</li>
        </ul>
        <p>Kami mewajibkan setiap pihak ketiga yang memproses data atas nama kami untuk menjaga kerahasiaan dan keamanan data sesuai standar yang setara dengan kebijakan ini.</p>
      </div>
    </section>

    <section class="doc-section" id="transfer-internasional">
      <h2><span class="n">07</span> Transfer Data Internasional</h2>
      <div class="body">
        <p>Beberapa penyedia layanan yang kami gunakan — termasuk infrastruktur Meta Platforms dan penyedia cloud — dapat memproses atau menyimpan data di server yang berlokasi di luar Indonesia. Kami memastikan transfer data lintas negara semacam ini dilakukan oleh penyedia yang menerapkan standar perlindungan data yang memadai.</p>
      </div>
    </section>

    <section class="doc-section" id="cookie">
      <h2><span class="n">08</span> Cookie &amp; Teknologi Pelacakan</h2>
      <div class="body">
        <p>Situs web kami dapat menggunakan cookie dan teknologi serupa untuk menjaga fungsi dasar situs serta memahami pola penggunaan secara agregat dan anonim. Anda dapat mengatur browser Anda untuk menolak cookie, meskipun beberapa fitur situs mungkin tidak berfungsi optimal jika cookie dinonaktifkan.</p>
      </div>
    </section>

    <section class="doc-section" id="keamanan">
      <h2><span class="n">09</span> Keamanan Data</h2>
      <div class="body">
        <p>Kami menerapkan langkah-langkah teknis dan organisasional yang wajar untuk melindungi data dari akses tidak sah, kehilangan, penyalahgunaan, atau perubahan — termasuk enkripsi dalam transit, pembatasan akses berbasis peran, dan pemantauan sistem secara berkala. Namun demikian, tidak ada sistem transmisi atau penyimpanan data elektronik yang sepenuhnya aman, dan kami tidak dapat menjamin keamanan mutlak.</p>
      </div>
    </section>

    <section class="doc-section" id="retensi">
      <h2><span class="n">10</span> Retensi Data</h2>
      <div class="body">
        <p>Kami menyimpan data pribadi hanya selama diperlukan untuk memenuhi tujuan pengumpulannya, termasuk untuk memenuhi kewajiban hukum, akuntansi, atau pelaporan. Untuk data yang diproses atas nama klien (misalnya melalui integrasi WhatsApp Business Platform), periode retensi mengikuti kesepakatan kontraktual dengan klien terkait, kecuali disyaratkan lain oleh hukum.</p>
      </div>
    </section>

    <section class="doc-section" id="hak-pengguna">
      <h2><span class="n">11</span> Hak Anda atas Data Pribadi</h2>
      <div class="body">
        <p>Sesuai peraturan pelindungan data pribadi yang berlaku, Anda berhak untuk:</p>
        <ul>
          <li>Meminta akses dan salinan atas data pribadi Anda yang kami proses.</li>
          <li>Meminta perbaikan atas data yang tidak akurat atau tidak lengkap.</li>
          <li>Meminta penghapusan data pribadi Anda, sepanjang tidak bertentangan dengan kewajiban hukum yang berlaku.</li>
          <li>Menarik persetujuan yang telah diberikan sebelumnya, kapan pun.</li>
          <li>Mengajukan keberatan atas pemrosesan tertentu.</li>
          <li>Meminta portabilitas data dalam format yang umum digunakan.</li>
        </ul>
        <p>Untuk menggunakan hak-hak tersebut, silakan hubungi kami melalui kontak pada bagian 14. Kami akan merespons permintaan Anda dalam waktu yang wajar sesuai ketentuan hukum yang berlaku.</p>
      </div>
    </section>

    <section class="doc-section" id="anak">
      <h2><span class="n">12</span> Privasi Anak</h2>
      <div class="body">
        <p>Layanan kami ditujukan bagi pelaku usaha dan bukan ditujukan langsung kepada anak-anak di bawah usia 18 tahun. Kami tidak secara sengaja mengumpulkan data pribadi dari anak-anak. Apabila Anda mengetahui adanya data anak yang terkumpul tanpa persetujuan yang sah, silakan hubungi kami agar dapat segera kami hapus.</p>
      </div>
    </section>

    <section class="doc-section" id="perubahan">
      <h2><span class="n">13</span> Perubahan Kebijakan Ini</h2>
      <div class="body">
        <p>Kami dapat memperbarui Kebijakan Privasi ini dari waktu ke waktu untuk mencerminkan perubahan layanan, teknologi, atau ketentuan hukum. Tanggal "Terakhir diperbarui" pada bagian atas halaman ini akan disesuaikan setiap kali perubahan dilakukan. Kami menganjurkan Anda untuk meninjau halaman ini secara berkala.</p>
      </div>
    </section>

    <section class="doc-section" id="kontak-privasi">
      <h2><span class="n">14</span> Hubungi Kami</h2>
      <div class="body">
        <p>Jika Anda memiliki pertanyaan, permintaan, atau keluhan terkait Kebijakan Privasi ini atau pemrosesan data pribadi Anda, silakan hubungi:</p>
        <div class="contact-box">
          <div class="row"><span class="k">Perusahaan</span><span class="v">PT Technology Extraordinary Advanced Management (TEXA)</span></div>
          <div class="row"><span class="k">Alamat</span><span class="v">Jalan Babakan Jati 2, Kasun 03, Desa Mekarjati, Kec. Haurgeulis, Kabupaten Indramayu, Jawa Barat 45264, Indonesia</span></div>
          <div class="row"><span class="k">Email</span><span class="v"><a href="mailto:superadmin@texamanagement.com">superadmin@texamanagement.com</a></span></div>
          <div class="row"><span class="k">Telepon</span><span class="v"><a href="tel:+6281356774474">+62 813-5677-4474</a></span></div>
        </div>
      </div>
    </section>
  </div>
</main>

<footer>
  <div class="wrap footer-inner">
    <span>© 2026 PT TECHNOLOGY EXTRAORDINARY ADVANCED MANAGEMENT</span>
    <a href="<?php echo base_url(); ?>">Kembali ke Beranda</a>
  </div>
</footer>

</body>
</html>
