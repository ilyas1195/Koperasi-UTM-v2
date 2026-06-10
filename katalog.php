<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koperasi Universitas Trunojoyo Madura</title>
  <link rel="icon" type="image/png" href="img/logo-koperasi.png">
  <meta name="description" content="Katalog produk Koperasi Mahasiswa Universitas Trunojoyo Madura. Cari dan pesan kebutuhan Anda melalui WhatsApp.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- LOADING SCREEN -->
  <div id="loading-screen">
    <div class="loader-icon"><img src="img/logo-koperasi.png" alt="Koperasi UTM" class="loader-logo-img"></div>
    <p class="loader-text">Koperasi UTM</p>
    <p class="loader-sub">Koperasi Universitas Trunojoyo Madura</p>
    <div class="loader-bar">
      <div class="loader-bar-fill"></div>
    </div>
  </div>

<?php $active = 'katalog'; include 'inc/navbar.php'; ?>

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="container">
      <h1 data-aos="fade-up">Katalog Produk</h1>
      <p data-aos="fade-up" data-aos-delay="50">Temukan kebutuhan Anda di Koperasi UTM</p>
      <div class="breadcrumb" data-aos="fade-up" data-aos-delay="100">
        <a href="index.php">Beranda</a>
        <i class="fas fa-chevron-right"></i>
        <span>Katalog</span>
      </div>
    </div>
  </section>

  <!-- CATALOG -->
  <section class="catalog-page">
    <div class="container">
      <!-- TOOLBAR -->
      <div class="catalog-toolbar" data-aos="fade-up">
        <div class="catalog-search">
          <i class="fas fa-search"></i>
          <input type="text" id="catalog-search-input" placeholder="Cari produk..." autocomplete="off">
        </div>
        <select id="catalog-sort" class="catalog-sort">
          <option value="terbaru">Terbaru</option>
          <option value="nama-asc">Nama A-Z</option>
          <option value="nama-desc">Nama Z-A</option>
          <option value="harga-termurah">Harga Termurah</option>
          <option value="harga-tertinggi">Harga Tertinggi</option>
        </select>
      </div>

      <!-- FILTERS -->
      <div class="catalog-filters" data-aos="fade-up" data-aos-delay="50">
        <button class="filter-btn active" data-filter="Semua Produk" onclick="setFilter('Semua Produk')">Semua Produk</button>
        <button class="filter-btn" data-filter="Retail" onclick="setFilter('Retail')">Retail</button>
        <button class="filter-btn" data-filter="Makanan" onclick="setFilter('Makanan')">Makanan</button>
        <button class="filter-btn" data-filter="Minuman" onclick="setFilter('Minuman')">Minuman</button>
        <button class="filter-btn" data-filter="Konsinyasi" onclick="setFilter('Konsinyasi')">Konsinyasi</button>
        <button class="filter-btn" data-filter="Lainnya" onclick="setFilter('Lainnya')">Lainnya</button>
      </div>

      <!-- RESULTS -->
      <div id="catalog-results" class="catalog-results"></div>
    </div>
  </section>

<?php include 'inc/footer.php'; ?>