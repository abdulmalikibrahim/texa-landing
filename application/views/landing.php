<?php
$texa_title = 'TEXA — Jasa Pembuatan Aplikasi & Solusi IT di Indramayu, Jawa Barat';
$texa_desc  = 'TEXA menyediakan jasa pembuatan aplikasi web & mobile, sistem bisnis, distribusi perangkat komputer, dan infrastruktur telekomunikasi untuk pelaku usaha di Indramayu, Jawa Barat.';
$texa_url   = current_url();
$texa_logo  = base_url('assets/img/logo.png');
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
<meta property="og:image:width" content="866">
<meta property="og:image:height" content="288">
<meta property="og:locale" content="id_ID">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $texa_title; ?>">
<meta name="twitter:description" content="<?php echo $texa_desc; ?>">
<meta name="twitter:image" content="<?php echo $texa_logo; ?>">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "PT Technology Extraordinary Advanced Management",
  "alternateName": "TEXA",
  "description": "<?php echo $texa_desc; ?>",
  "url": "<?php echo base_url(); ?>",
  "logo": "<?php echo $texa_logo; ?>",
  "image": "<?php echo $texa_logo; ?>",
  "email": "superadmin@texamanagement.com",
  "telephone": "+62-813-5677-4474",
  "foundingDate": "2026-03-25",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Jalan Babakan Jati 2, Kasun 03, Desa Mekarjati",
    "addressLocality": "Haurgeulis, Kabupaten Indramayu",
    "addressRegion": "Jawa Barat",
    "postalCode": "45264",
    "addressCountry": "ID"
  },
  "areaServed": {
    "@type": "AdministrativeArea",
    "name": "Jawa Barat, Indonesia"
  },
  "sameAs": []
}
</script>

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
    --shadow: 0 30px 70px -22px rgba(0,0,0,0.85);

    --font-mono: ui-monospace, "JetBrains Mono", "Cascadia Code", "SFMono-Regular", Consolas, monospace;
    --font-sans: -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif;

    --fs-xs: 0.72rem;
    --fs-sm: 0.85rem;
    --fs-base: 1rem;
    --fs-md: 1.1rem;
    --fs-lg: 1.35rem;
    --fs-xl: 1.9rem;
    --fs-2xl: clamp(2rem, 3.2vw, 2.75rem);
    --fs-3xl: clamp(2.4rem, 6vw, 4.4rem);

    --space-1: 0.5rem;
    --space-2: 1rem;
    --space-3: 1.5rem;
    --space-4: 2.25rem;
    --space-5: 3.5rem;
    --space-6: 5.5rem;

    --radius: 3px;
    --container: 1120px;
  }

  /* TEXA berkomitmen pada satu identitas gelap — tidak mengikuti preferensi terang perangkat. */

  * { box-sizing: border-box; }
  html { scroll-behavior: smooth; overflow-x: hidden; }
  body { overflow-x: hidden; }
  @media (prefers-reduced-motion: reduce) {
    html { scroll-behavior: auto; }
    * { animation-duration: 0.001ms !important; animation-iteration-count: 1 !important; transition-duration: 0.001ms !important; }
  }

  body {
    margin: 0;
    background:
      radial-gradient(circle at 1px 1px, rgba(227,160,82,0.05) 1px, transparent 1px) 0 0/28px 28px,
      var(--bg);
    color: var(--text);
    font-family: var(--font-sans);
    font-size: var(--fs-base);
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
  }

  img, canvas { max-width: 100%; display: block; }

  a { color: inherit; }

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

  h1, h2, h3 { text-wrap: balance; margin: 0; font-family: var(--font-mono); font-weight: 600; }

  p { margin: 0; }

  .tab-nums { font-variant-numeric: tabular-nums; }

  :focus-visible {
    outline: 2px solid var(--accent);
    outline-offset: 3px;
  }

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
  .brand {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: var(--text);
  }
  .brand-logo {
    display: inline-flex;
    align-items: center;
    background: #FFFFFF;
    padding: 0.4rem 0.75rem;
    border-radius: var(--radius);
    line-height: 0;
    transition: box-shadow 0.2s ease;
  }
  .brand:hover .brand-logo {
    box-shadow: 0 6px 20px -6px color-mix(in srgb, var(--accent) 55%, transparent);
  }
  .brand-logo img {
    display: block;
    height: 28px;
    width: auto;
  }
  @media (min-width: 640px) {
    .brand-logo img { height: 34px; }
  }
  .nav-links {
    display: none;
    gap: var(--space-4);
    font-size: var(--fs-sm);
    color: var(--text-muted);
  }
  @media (min-width: 860px) {
    .nav-links { display: flex; }
  }
  .nav-links a { text-decoration: none; transition: color 0.15s ease; }
  .nav-links a:hover { color: var(--text); }
  .btn {
    font-family: var(--font-mono);
    font-size: var(--fs-sm);
    letter-spacing: 0.02em;
    padding: 0.6rem 1.1rem;
    border-radius: var(--radius);
    border: 1px solid var(--accent);
    background: var(--accent);
    color: var(--accent-ink);
    text-decoration: none;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.15s ease, background 0.15s ease, box-shadow 0.15s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    white-space: nowrap;
  }
  .btn:hover {
    background: var(--accent-strong);
    transform: translateY(-1px);
    box-shadow: 0 8px 24px -8px color-mix(in srgb, var(--accent) 55%, transparent);
  }
  .btn.ghost {
    background: transparent;
    color: var(--text);
    border-color: var(--line);
  }
  .btn.ghost:hover {
    border-color: var(--accent);
    color: var(--accent);
    box-shadow: 0 8px 24px -10px color-mix(in srgb, var(--accent) 35%, transparent);
  }

  /* ---------- Hero ---------- */
  .hero {
    position: relative;
    overflow: hidden;
    border-bottom: 1px solid var(--line-soft);
  }
  .hero::before {
    content: "";
    position: absolute;
    top: -20%;
    left: 50%;
    width: 900px;
    height: 900px;
    transform: translateX(-50%);
    background: radial-gradient(circle, color-mix(in srgb, var(--accent) 16%, transparent) 0%, transparent 65%);
    pointer-events: none;
  }
  .hero-canvas {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    opacity: 0.55;
  }
  .hero-inner {
    position: relative;
    padding: var(--space-6) 0 var(--space-5);
  }
  .hero-eyebrow {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    margin-bottom: var(--space-3);
  }
  .dot {
    width: 7px; height: 7px; border-radius: 50%;
    background: var(--ok);
    box-shadow: 0 0 0 3px color-mix(in srgb, var(--ok) 25%, transparent);
    flex: none;
  }
  .hero h1 {
    font-size: var(--fs-3xl);
    line-height: 1.08;
    max-width: 16ch;
    letter-spacing: -0.01em;
  }
  .hero h1 .accent {
    color: var(--accent);
    text-shadow: 0 0 42px color-mix(in srgb, var(--accent) 45%, transparent);
  }
  .hero-sub {
    margin-top: var(--space-3);
    max-width: 52ch;
    font-size: var(--fs-md);
    color: var(--text-muted);
  }
  .hero-cta {
    margin-top: var(--space-4);
    display: flex;
    flex-wrap: wrap;
    gap: 0.9rem;
  }
  .hero-meta {
    margin-top: var(--space-5);
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-4);
    border-top: 1px solid var(--line-soft);
    padding-top: var(--space-3);
  }
  .meta-item {
    font-family: var(--font-mono);
    font-size: var(--fs-xs);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--text-faint);
  }
  .meta-item b { color: var(--text-muted); font-weight: 600; }

  /* ---------- Section shell ---------- */
  section { padding: var(--space-6) 0; }
  .section-head {
    display: flex;
    flex-direction: column;
    gap: 0.6rem;
    margin-bottom: var(--space-4);
    max-width: 60ch;
  }
  .section-head h2 { font-size: var(--fs-xl); }
  .section-head .sub { color: var(--text-muted); font-size: var(--fs-base); font-family: var(--font-sans); }

  .reveal {
    opacity: 0;
    transform: translateY(22px) scale(0.985);
    transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1), transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .reveal.in { opacity: 1; transform: translateY(0) scale(1); }

  /* Staggered cascade for grid children */
  .services-grid > .reveal:nth-child(1) { transition-delay: 0ms; }
  .services-grid > .reveal:nth-child(2) { transition-delay: 70ms; }
  .services-grid > .reveal:nth-child(3) { transition-delay: 140ms; }
  .services-grid > .reveal:nth-child(4) { transition-delay: 210ms; }
  .services-grid > .reveal:nth-child(5) { transition-delay: 280ms; }
  .services-grid > .reveal:nth-child(6) { transition-delay: 350ms; }
  .sub-services-grid > .reveal:nth-child(1) { transition-delay: 0ms; }
  .sub-services-grid > .reveal:nth-child(2) { transition-delay: 80ms; }
  .sub-services-grid > .reveal:nth-child(3) { transition-delay: 160ms; }
  .lead-grid > .reveal:nth-child(1) { transition-delay: 0ms; }
  .lead-grid > .reveal:nth-child(2) { transition-delay: 100ms; }

  /* ---------- Scroll progress ---------- */
  .scroll-progress {
    position: fixed;
    top: 0;
    left: 0;
    height: 3px;
    width: 100%;
    background: linear-gradient(90deg, var(--accent), var(--accent-strong));
    transform: scaleX(0);
    transform-origin: 0 0;
    z-index: 100;
    pointer-events: none;
  }
  @media (prefers-reduced-motion: reduce) {
    .scroll-progress { transition: none; }
  }

  /* ---------- About ---------- */
  #tentang { background: var(--bg-raised); border-bottom: 1px solid var(--line-soft); }
  .about-solo { max-width: 68ch; }
  .about-body { font-size: var(--fs-md); color: var(--text-muted); }
  .about-body strong { color: var(--text); font-weight: 600; }

  /* ---------- Visi & Misi ---------- */
  #visi-misi { background: var(--bg-raised); border-bottom: 1px solid var(--line-soft); }
  .vm-grid {
    display: grid;
    grid-template-columns: 0.9fr 1.1fr;
    gap: var(--space-5);
    align-items: start;
  }
  @media (max-width: 800px) {
    .vm-grid { grid-template-columns: 1fr; }
  }
  .vm-grid h3.label { margin-bottom: var(--space-3); }
  .vm-visi {
    border-left: 2px solid var(--accent);
    padding-left: var(--space-3);
  }
  .vm-visi p {
    font-family: var(--font-mono);
    font-size: var(--fs-lg);
    line-height: 1.5;
    color: var(--text);
    text-wrap: balance;
  }
  .misi-list {
    display: flex;
    flex-direction: column;
    gap: 0;
    border-top: 1px solid var(--line-soft);
  }
  .misi-item {
    display: grid;
    grid-template-columns: 2.5rem 1fr;
    gap: var(--space-2);
    padding: 1rem 0;
    border-bottom: 1px solid var(--line-soft);
  }
  .misi-item .n {
    font-family: var(--font-mono);
    color: var(--accent);
    font-size: var(--fs-sm);
    font-variant-numeric: tabular-nums;
  }
  .misi-item p { color: var(--text-muted); font-size: var(--fs-sm); }

  /* ---------- Services ---------- */
  .layanan-lead { margin-bottom: var(--space-4); }
  .services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-3);
  }
  @media (max-width: 900px) {
    .services-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 640px) {
    .services-grid { grid-template-columns: 1fr; }
  }
  .service-card {
    display: flex;
    flex-direction: column;
    background: var(--bg-card);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    padding: var(--space-4);
    transition: border-color 0.2s ease, transform 0.2s ease;
  }
  .service-card:hover {
    border-color: var(--accent);
    transform: translateY(-2px);
    box-shadow: 0 20px 40px -24px color-mix(in srgb, var(--accent) 45%, transparent);
  }
  .service-card--featured { border-top: 2px solid var(--accent); }
  .service-card .kbli {
    font-family: var(--font-mono);
    font-size: var(--fs-xs);
    color: var(--accent);
    letter-spacing: 0.08em;
    border: 1px solid var(--line);
    display: inline-block;
    padding: 0.2rem 0.5rem;
    border-radius: 2px;
    margin-bottom: var(--space-2);
  }
  .service-card h3 { font-size: var(--fs-lg); margin-bottom: 0.6rem; }
  .service-card p { color: var(--text-muted); font-size: var(--fs-sm); }
  .card-wa {
    margin-top: auto;
    padding-top: 0.9rem;
    border-top: 1px solid var(--line-soft);
    font-family: var(--font-mono);
    font-size: var(--fs-xs);
    letter-spacing: 0.05em;
    color: var(--accent);
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    transition: color 0.15s ease, gap 0.15s ease;
  }
  .card-wa:hover { color: var(--accent-strong); gap: 0.6rem; }
  .card-wa::after { content: "→"; }

  .sub-services-head {
    margin: var(--space-5) 0 var(--space-3);
    padding-top: var(--space-4);
    border-top: 1px solid var(--line-soft);
  }
  .sub-services-head .label { display: block; margin-bottom: 0.3rem; }
  .sub-services-head p { color: var(--text-muted); font-size: var(--fs-sm); }
  .sub-services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-2);
  }
  @media (max-width: 720px) {
    .sub-services-grid { grid-template-columns: 1fr; }
  }
  .sub-service-card {
    display: flex;
    flex-direction: column;
    background: transparent;
    border: 1px solid var(--line);
    border-radius: var(--radius);
    padding: var(--space-3);
  }
  .sub-service-card .kbli {
    font-family: var(--font-mono);
    font-size: var(--fs-xs);
    color: var(--text-faint);
    letter-spacing: 0.06em;
    display: block;
    margin-bottom: 0.4rem;
  }
  .sub-service-card h4 {
    font-family: var(--font-mono);
    font-size: var(--fs-base);
    font-weight: 600;
    margin: 0 0 0.4rem;
  }
  .sub-service-card p { color: var(--text-muted); font-size: var(--fs-sm); margin: 0; }

  /* ---------- Legalitas ---------- */
  #legalitas { background: var(--bg-raised); border-top: 1px solid var(--line-soft); border-bottom: 1px solid var(--line-soft); }
  .legal-panel {
    background: var(--bg-card);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    overflow: hidden;
  }
  .legal-row {
    display: flex;
    align-items: center;
    gap: var(--space-3);
    padding: 1.1rem var(--space-4);
    border-bottom: 1px solid var(--line-soft);
    font-family: var(--font-mono);
    font-size: var(--fs-sm);
  }
  .legal-row:last-child { border-bottom: none; }
  @media (max-width: 640px) {
    .legal-row { flex-direction: column; align-items: flex-start; gap: 0.55rem; }
    .legal-row .k { flex-basis: auto; }
  }
  .legal-row .k {
    flex: 0 0 220px;
    white-space: nowrap;
    color: var(--text-faint);
    letter-spacing: 0.09em;
    text-transform: uppercase;
    font-size: var(--fs-xs);
    font-weight: 600;
  }
  .legal-row .v {
    flex: 1 1 auto;
    color: var(--text);
    font-weight: 700;
    letter-spacing: 0.005em;
  }
  .status {
    flex: 0 0 auto;
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    color: var(--ok);
    font-size: var(--fs-xs);
    font-weight: 700;
    letter-spacing: 0.07em;
    text-transform: uppercase;
    padding: 0.3rem 0.7rem;
    border-radius: 999px;
    background: color-mix(in srgb, var(--ok) 14%, transparent);
    border: 1px solid color-mix(in srgb, var(--ok) 34%, transparent);
  }

  /* ---------- Leadership ---------- */
  .lead-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-3);
  }
  @media (max-width: 640px) {
    .lead-grid { grid-template-columns: 1fr; }
  }
  .lead-card {
    padding: var(--space-4);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    background: var(--bg-card);
  }
  .lead-card .role { color: var(--accent); font-family: var(--font-mono); font-size: var(--fs-xs); letter-spacing: 0.1em; text-transform: uppercase; }
  .lead-card .name { font-size: var(--fs-lg); font-family: var(--font-mono); margin-top: 0.4rem; }
  .lead-card .init {
    width: 44px; height: 44px;
    border: 1px solid var(--line);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-family: var(--font-mono);
    color: var(--accent);
    margin-bottom: var(--space-2);
    font-size: var(--fs-sm);
  }

  /* ---------- Contact ---------- */
  .contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-5);
  }
  @media (max-width: 800px) {
    .contact-grid { grid-template-columns: 1fr; }
  }
  .contact-list { display: flex; flex-direction: column; gap: var(--space-3); }
  .contact-map {
    margin-top: var(--space-3);
    aspect-ratio: 16 / 10;
    border: 1px solid var(--line);
    border-radius: var(--radius);
    overflow: hidden;
    background: var(--bg-card);
  }
  .contact-map iframe { display: block; }
  .contact-item .label { display: block; margin-bottom: 0.35rem; }
  .contact-item .val { font-size: var(--fs-md); }
  .contact-item a.val { text-decoration: none; }
  .contact-item a.val:hover { color: var(--accent); }
  .contact-card {
    background: var(--bg-card);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    padding: var(--space-4);
  }
  .contact-card h3 { font-size: var(--fs-md); margin-bottom: var(--space-2); }
  .contact-card p { color: var(--text-muted); font-size: var(--fs-sm); margin-bottom: var(--space-3); }
  .contact-actions { display: flex; flex-direction: column; gap: 0.7rem; }
  .contact-actions .btn { justify-content: center; }

  /* ---------- Footer ---------- */
  footer {
    border-top: 1px solid var(--line-soft);
    padding: var(--space-4) 0;
  }
  .footer-inner {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: var(--space-2);
    font-size: var(--fs-xs);
    color: var(--text-faint);
    font-family: var(--font-mono);
  }
</style>
</head>
<body>

<div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>

<header class="nav">
  <div class="wrap nav-inner">
    <a href="#top" class="brand">
      <span class="brand-logo">
        <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="TEXA — PT Technology Extraordinary Advanced Management">
      </span>
    </a>
    <nav class="nav-links">
      <a href="#tentang">Tentang</a>
      <a href="#visi-misi">Visi &amp; Misi</a>
      <a href="#layanan">Layanan</a>
      <a href="#legalitas">Legalitas</a>
      <a href="#tim">Tim</a>
      <a href="#kontak">Kontak</a>
    </nav>
    <a class="btn" href="#kontak">Hubungi Kami</a>
  </div>
</header>

<main id="top">
  <section class="hero">
    <canvas class="hero-canvas" id="netCanvas" aria-hidden="true"></canvas>
    <div class="wrap hero-inner">
      <div class="hero-eyebrow reveal in">
        <span class="dot"></span>
        <span class="label">PT Technology Extraordinary Advanced Management</span>
      </div>
      <h1 class="reveal in">Dari kode hingga kabel — <span class="accent">satu mitra teknologi.</span></h1>
      <p class="hero-sub reveal in">TEXA menyediakan layanan teknologi informasi, distribusi perangkat komputer, dan infrastruktur telekomunikasi bagi pelaku usaha di Indramayu dan sekitarnya.</p>
      <div class="hero-cta reveal in">
        <a class="btn" href="#kontak">Hubungi Kami</a>
        <a class="btn ghost" href="#layanan">Lihat Layanan</a>
      </div>
      <div class="hero-meta reveal in">
        <span class="meta-item">Berdiri <b class="tab-nums">2026</b></span>
        <span class="meta-item">Kedudukan <b>Kab. Indramayu, Jawa Barat</b></span>
        <span class="meta-item">Status <b>PMDN</b></span>
        <span class="meta-item">NIB <b class="tab-nums">1004260019382</b></span>
      </div>
    </div>
  </section>

  <section id="tentang">
    <div class="wrap">
      <div class="reveal about-solo">
        <div class="section-head">
          <span class="label">Tentang Kami</span>
          <h2>Dibangun di persimpangan perangkat lunak, perangkat keras, dan jaringan.</h2>
        </div>
        <p class="about-body">
          Disahkan sebagai badan hukum pada <strong>2 April 2026</strong> oleh Kementerian Hukum Republik Indonesia
          (SK No. AHU-0025386.AH.01.01.TAHUN 2026), TEXA berkedudukan di Haurgeulis, Kabupaten Indramayu, Jawa Barat.
          Kami merancang lini usaha untuk melayani tiga kebutuhan sekaligus: sistem dan layanan IT, distribusi perangkat
          komputer, serta infrastruktur telekomunikasi — bagi pelaku usaha skala kecil hingga menengah di kawasan
          pesisir utara Jawa Barat.
        </p>
      </div>
    </div>
  </section>

  <section id="visi-misi">
    <div class="wrap">
      <div class="section-head reveal">
        <span class="label">Visi &amp; Misi</span>
        <h2>Arah dan komitmen jangka panjang kami.</h2>
      </div>
      <div class="vm-grid">
      <div class="reveal">
        <h3 class="label">Visi</h3>
        <div class="vm-visi">
          <p>Menjadi mitra teknologi tepercaya bagi pelaku usaha di seluruh Indonesia, dengan aplikasi dan infrastruktur digital sebagai fondasi pertumbuhan bisnis yang berkelanjutan.</p>
        </div>
      </div>
      <div class="reveal">
        <h3 class="label">Misi</h3>
        <div class="misi-list">
          <div class="misi-item">
            <span class="n">01</span>
            <p>Membangun aplikasi dan sistem perangkat lunak yang dirancang sesuai kebutuhan spesifik setiap klien — dari sistem internal hingga aplikasi yang menghadap pelanggan.</p>
          </div>
          <div class="misi-item">
            <span class="n">02</span>
            <p>Menyediakan perangkat komputer dan kelengkapannya dengan kualitas terjamin serta harga yang kompetitif.</p>
          </div>
          <div class="misi-item">
            <span class="n">03</span>
            <p>Mengembangkan infrastruktur jaringan dan telekomunikasi yang stabil untuk mendukung operasional bisnis pelanggan.</p>
          </div>
          <div class="misi-item">
            <span class="n">04</span>
            <p>Memberikan layanan purnajual dan dukungan teknis yang responsif di setiap tahap kerja sama.</p>
          </div>
          <div class="misi-item">
            <span class="n">05</span>
            <p>Tumbuh bersama pelaku usaha mikro, kecil, dan menengah di seluruh Indonesia melalui solusi teknologi yang terjangkau.</p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <section id="layanan">
    <div class="wrap">
      <div class="section-head reveal layanan-lead">
        <span class="label">Layanan Unggulan — Pengembangan Aplikasi</span>
        <h2>Jasa kami berdiri di atas satu keahlian utama: membangun aplikasi.</h2>
        <p class="sub">Terdaftar resmi di bawah KBLI 62090 — Aktivitas Teknologi Informasi dan Jasa Komputer Lainnya.</p>
      </div>
      <div class="services-grid">
        <div class="service-card service-card--featured reveal">
          <span class="kbli">Web</span>
          <h3>Aplikasi Web Kustom</h3>
          <p>Sistem informasi, dashboard admin, dan aplikasi berbasis web yang dirancang mengikuti alur kerja bisnis Anda, bukan sebaliknya.</p>
          <a class="card-wa" href="https://wa.me/6281356774474?text=<?php echo rawurlencode('Halo TEXA, saya ingin tanya soal layanan Aplikasi Web Kustom.'); ?>" target="_blank" rel="noopener">Tanya via WhatsApp</a>
        </div>
        <div class="service-card service-card--featured reveal">
          <span class="kbli">Bisnis</span>
          <h3>Aplikasi Bisnis &amp; ERP</h3>
          <p>Sistem billing, POS, inventori, dan manajemen operasional yang terintegrasi dalam satu platform.</p>
          <a class="card-wa" href="https://wa.me/6281356774474?text=<?php echo rawurlencode('Halo TEXA, saya ingin tanya soal layanan Aplikasi Bisnis & ERP.'); ?>" target="_blank" rel="noopener">Tanya via WhatsApp</a>
        </div>
        <div class="service-card service-card--featured reveal">
          <span class="kbli">Mobile</span>
          <h3>Aplikasi Mobile</h3>
          <p>Aplikasi Android dan iOS untuk memperluas jangkauan layanan ke pelanggan maupun tim lapangan.</p>
          <a class="card-wa" href="https://wa.me/6281356774474?text=<?php echo rawurlencode('Halo TEXA, saya ingin tanya soal layanan Aplikasi Mobile.'); ?>" target="_blank" rel="noopener">Tanya via WhatsApp</a>
        </div>
        <div class="service-card service-card--featured reveal">
          <span class="kbli">Integrasi</span>
          <h3>Integrasi Sistem &amp; API</h3>
          <p>Menghubungkan aplikasi Anda dengan payment gateway, layanan pihak ketiga, dan sistem yang sudah berjalan.</p>
          <a class="card-wa" href="https://wa.me/6281356774474?text=<?php echo rawurlencode('Halo TEXA, saya ingin tanya soal layanan Integrasi Sistem & API.'); ?>" target="_blank" rel="noopener">Tanya via WhatsApp</a>
        </div>
        <div class="service-card service-card--featured reveal">
          <span class="kbli">Support</span>
          <h3>Maintenance &amp; Dukungan Teknis</h3>
          <p>Pemeliharaan, pembaruan, dan dukungan berkelanjutan pasca peluncuran aplikasi.</p>
          <a class="card-wa" href="https://wa.me/6281356774474?text=<?php echo rawurlencode('Halo TEXA, saya ingin tanya soal layanan Maintenance & Dukungan Teknis.'); ?>" target="_blank" rel="noopener">Tanya via WhatsApp</a>
        </div>
        <div class="service-card service-card--featured reveal">
          <span class="kbli">Konsultasi</span>
          <h3>Konsultasi &amp; Arsitektur Sistem</h3>
          <p>Perencanaan teknis dari kebutuhan bisnis hingga pemilihan teknologi yang tepat sebelum pengembangan dimulai.</p>
          <a class="card-wa" href="https://wa.me/6281356774474?text=<?php echo rawurlencode('Halo TEXA, saya ingin tanya soal layanan Konsultasi & Arsitektur Sistem.'); ?>" target="_blank" rel="noopener">Tanya via WhatsApp</a>
        </div>
      </div>

      <div class="sub-services-head reveal">
        <span class="label">Lini Usaha Pendukung</span>
        <p>Tiga bidang usaha tambahan yang turut tercatat pada Nomor Induk Berusaha 1004260019382.</p>
      </div>
      <div class="sub-services-grid">
        <div class="sub-service-card reveal">
          <span class="kbli">KBLI 46511</span>
          <h4>Distribusi Perangkat Komputer</h4>
          <p>Perdagangan besar komputer dan perlengkapan pendukungnya untuk mitra usaha dan instansi.</p>
          <a class="card-wa" href="https://wa.me/6281356774474?text=<?php echo rawurlencode('Halo TEXA, saya ingin tanya soal layanan Distribusi Perangkat Komputer.'); ?>" target="_blank" rel="noopener">Tanya via WhatsApp</a>
        </div>
        <div class="sub-service-card reveal">
          <span class="kbli">KBLI 61100</span>
          <h4>Infrastruktur Telekomunikasi Kabel</h4>
          <p>Perencanaan dan pengelolaan jaringan telekomunikasi berbasis kabel untuk kebutuhan konektivitas.</p>
          <a class="card-wa" href="https://wa.me/6281356774474?text=<?php echo rawurlencode('Halo TEXA, saya ingin tanya soal layanan Infrastruktur Telekomunikasi Kabel.'); ?>" target="_blank" rel="noopener">Tanya via WhatsApp</a>
        </div>
        <div class="sub-service-card reveal">
          <span class="kbli">KBLI 46523</span>
          <h4>Perdagangan Peralatan Telekomunikasi</h4>
          <p>Distribusi perangkat dan peralatan pendukung telekomunikasi untuk kebutuhan korporasi maupun personal.</p>
          <a class="card-wa" href="https://wa.me/6281356774474?text=<?php echo rawurlencode('Halo TEXA, saya ingin tanya soal layanan Perdagangan Peralatan Telekomunikasi.'); ?>" target="_blank" rel="noopener">Tanya via WhatsApp</a>
        </div>
      </div>
    </div>
  </section>

  <section id="legalitas">
    <div class="wrap">
      <div class="section-head reveal">
        <span class="label">Legalitas</span>
        <h2>Badan usaha resmi, tercatat pada lembaga negara berwenang.</h2>
      </div>
      <div class="legal-panel reveal">
        <div class="legal-row">
          <span class="k">NIB</span>
          <span class="v tab-nums">1004260019382</span>
          <span class="status">● Terbit</span>
        </div>
        <div class="legal-row">
          <span class="k">SK Pengesahan Menkumham</span>
          <span class="v">AHU-0025386.AH.01.01.TAHUN 2026</span>
          <span class="status">● Sah</span>
        </div>
        <div class="legal-row">
          <span class="k">Akta Pendirian</span>
          <span class="v">No. 84, 25 Maret 2026 — Notaris Cynthia Maharani, S.H., M.Kn.</span>
          <span class="status">● Sah</span>
        </div>
        <div class="legal-row">
          <span class="k">Terdaftar DJP</span>
          <span class="v">08 April 2026 — KPP Pratama Indramayu</span>
          <span class="status">● Aktif</span>
        </div>
      </div>
    </div>
  </section>

  <section id="tim">
    <div class="wrap">
      <div class="section-head reveal">
        <span class="label">Tim Kepemimpinan</span>
        <h2>Susunan direksi dan komisaris.</h2>
      </div>
      <div class="lead-grid">
        <div class="lead-card reveal">
          <div class="init">DA</div>
          <div class="role">Direktur</div>
          <div class="name">Dadi Afril Anggarawansyah</div>
        </div>
        <div class="lead-card reveal">
          <div class="init">AM</div>
          <div class="role">Komisaris</div>
          <div class="name">Abdul Malik Ibrahim</div>
        </div>
      </div>
    </div>
  </section>

  <section id="kontak">
    <div class="wrap contact-grid">
      <div class="reveal">
        <div class="section-head">
          <span class="label">Kontak</span>
          <h2>Mari bicara soal kebutuhan teknologi Anda.</h2>
        </div>
        <div class="contact-list">
          <div class="contact-item">
            <span class="label">Alamat Kantor</span>
            <span class="val">Jalan Babakan Jati 2, Kasun 03, Desa Mekarjati, Kec. Haurgeulis, Kabupaten Indramayu, Jawa Barat 45264</span>
          </div>
          <div class="contact-item">
            <span class="label">Telepon</span>
            <a class="val tab-nums" href="tel:+6281356774474">+62 813-5677-4474</a>
          </div>
          <div class="contact-item">
            <span class="label">Email</span>
            <a class="val" href="mailto:superadmin@texamanagement.com">superadmin@texamanagement.com</a>
          </div>
        </div>
        <div class="contact-map">
          <iframe
            src="https://www.google.com/maps?q=-6.453648,107.942803&hl=id&z=16&output=embed"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Lokasi Kantor TEXA — Haurgeulis, Kabupaten Indramayu">
          </iframe>
        </div>
      </div>
      <div class="contact-card reveal">
        <h3>Hubungi langsung</h3>
        <p>Tim kami siap membantu kebutuhan layanan IT, pengadaan perangkat, hingga infrastruktur telekomunikasi Anda.</p>
        <div class="contact-actions">
          <a class="btn" href="https://wa.me/6281356774474" target="_blank" rel="noopener">WhatsApp — 0813-5677-4474</a>
          <a class="btn ghost" href="mailto:superadmin@texamanagement.com">Kirim Email</a>
        </div>
      </div>
    </div>
  </section>
</main>

<footer>
  <div class="wrap footer-inner">
    <span>© 2026 PT TECHNOLOGY EXTRAORDINARY ADVANCED MANAGEMENT</span>
    <span>NIB 1004260019382 · Kab. Indramayu, Jawa Barat</span>
  </div>
</footer>

<script>
(function () {
  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  var els = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && !reduceMotion) {
    els.forEach(function (el) { el.classList.remove('in'); });
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    els.forEach(function (el) { io.observe(el); });
  } else {
    els.forEach(function (el) { el.classList.add('in'); });
  }

  // Scroll progress bar
  var progress = document.getElementById('scrollProgress');
  if (progress) {
    var ticking = false;
    var updateProgress = function () {
      var doc = document.documentElement;
      var scrollable = doc.scrollHeight - doc.clientHeight;
      var pct = scrollable > 0 ? Math.min(1, Math.max(0, window.scrollY / scrollable)) : 0;
      progress.style.transform = 'scaleX(' + pct + ')';
      ticking = false;
    };
    updateProgress();
    window.addEventListener('scroll', function () {
      if (!ticking) {
        requestAnimationFrame(updateProgress);
        ticking = true;
      }
    }, { passive: true });
    window.addEventListener('resize', updateProgress);
  }

  var canvas = document.getElementById('netCanvas');
  if (!canvas) return;
  var ctx = canvas.getContext('2d');
  var hero = canvas.parentElement;
  var W, H, nodes;

  function readAccent() {
    var probe = document.createElement('span');
    probe.style.color = getComputedStyle(document.documentElement).getPropertyValue('--accent').trim() || '#E3A052';
    document.body.appendChild(probe);
    var c = getComputedStyle(probe).color;
    document.body.removeChild(probe);
    var m = c.match(/\d+/g);
    return m ? m.slice(0, 3).join(',') : '227,160,82';
  }

  function size() {
    W = canvas.width = hero.clientWidth;
    H = canvas.height = hero.clientHeight;
  }

  function initNodes() {
    var count = Math.max(18, Math.min(46, Math.floor((W * H) / 42000)));
    nodes = [];
    for (var i = 0; i < count; i++) {
      nodes.push({
        x: Math.random() * W,
        y: Math.random() * H,
        vx: (Math.random() - 0.5) * 0.18,
        vy: (Math.random() - 0.5) * 0.18
      });
    }
  }

  var rgb = readAccent();

  function draw() {
    ctx.clearRect(0, 0, W, H);
    var linkDist = Math.min(160, W / 5);

    for (var i = 0; i < nodes.length; i++) {
      var n = nodes[i];
      n.x += n.vx; n.y += n.vy;
      if (n.x < 0 || n.x > W) n.vx *= -1;
      if (n.y < 0 || n.y > H) n.vy *= -1;
    }

    for (var i = 0; i < nodes.length; i++) {
      for (var j = i + 1; j < nodes.length; j++) {
        var a = nodes[i], b = nodes[j];
        var dx = a.x - b.x, dy = a.y - b.y;
        var dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < linkDist) {
          var alpha = (1 - dist / linkDist) * 0.35;
          ctx.strokeStyle = 'rgba(' + rgb + ',' + alpha.toFixed(3) + ')';
          ctx.lineWidth = 1;
          ctx.beginPath();
          ctx.moveTo(a.x, a.y);
          ctx.lineTo(b.x, b.y);
          ctx.stroke();
        }
      }
    }

    for (var i = 0; i < nodes.length; i++) {
      ctx.beginPath();
      ctx.arc(nodes[i].x, nodes[i].y, 1.6, 0, Math.PI * 2);
      ctx.fillStyle = 'rgba(' + rgb + ',0.65)';
      ctx.fill();
    }
  }

  function loop() {
    draw();
    requestAnimationFrame(loop);
  }

  size();
  initNodes();
  window.addEventListener('resize', function () {
    size();
    initNodes();
  });

  if (reduceMotion) {
    draw();
  } else {
    loop();
  }
})();
</script>
</body>
</html>
