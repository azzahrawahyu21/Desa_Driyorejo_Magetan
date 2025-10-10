<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Karang Taruna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  {{-- Navbar --}}
  @include('navbar')

  {{-- Header --}}
<header class="header-2 position-relative">
  <div class="page-header d-flex align-items-center justify-content-center text-center text-white"
       style="background-image: url('{{ asset('assets/img/lembaga/back_bpd.jpg') }}');
              background-size: cover; background-position: center; height: 60vh; position: relative;">
    <!-- Overlay -->
    <div style="background: rgba(0,0,0,0.5); position:absolute; top:0; right:0; bottom:0; left:0;"></div>

    <!-- Teks -->
    <div class="container position-relative">
      <h1 class="fw-bold">LEMBAGA DI DESA DRIYOREJO</h1>
    </div>
  </div>
</header>

  {{-- Content --}}
<main class="position-relative mb-5">
  <div class="container" style="margin-top:-180px; z-index:5; position:relative;">
    
    <!-- Card Utama -->
    <div class="card p-4 bg-white" 
        style="border-radius:20px; box-shadow: 0 4px 15px rgba(13, 71, 21, 0.5);">
      <h4 class="bg-success text-white text-center py-2 mb-4">
        KARANG TARUNA
      </h4>

      <div class="text-center mb-4">
        <img src="{{ asset('assets/img/lembaga/logo_kartar.png') }}" class="img-fluid" alt="logo" style="max-width: 180px; height: auto;">
      </div>

      <p>
        <strong>Karang Taruna</strong> adalah organisasi kepemudaan di Indonesia yang dibentuk oleh masyarakat sebagai wadah generasi muda untuk 
        mengembangkan diri, tumbuh, dan berkembang atas dasar kesadaran serta tanggung jawab sosial dari, oleh, dan untuk generasi 
        muda, yang berorientasi pada tercapainya kesejahteraan sosial bagi masyarakat.
      </p>
      <br>
      <p>
        Sebagai organisasi sosial kepemudaan Karang Taruna merupakan wadah pembinaan dan pengembangan serta pemberdayaan dalam upaya 
        mengembangkan kegiatan ekonomi produktif dengan pendayagunaan semua potensi yang tersedia di lingkungan baik sumber daya manusia 
        maupun sumber daya alam yang telah ada. Sebagai organisasi kepemudaan, Karang Taruna berpedoman pada Pedoman Dasar dan Pedoman 
        Rumah Tangga di mana telah pula diatur tentang struktur pengurus dan masa jabatan di masing-masing wilayah mulai dari Desa/
        Kelurahan sampai pada tingkat Nasional.
      </p>
      <br>
      <p>
        Semua ini wujud dari pada regenerasi organisasi demi kelanjutan organisasi serta pembinaan anggota Karang Taruna baik dimasa sekarang maupun masa yang akan datang.
      </p>
      <br>
      <p>
        Karang Taruna beranggotakan pemuda dan pemudi (dalam AD/ART nya diatur keanggotaannya mulai dari pemuda/i berusia mulai 
        dari 11 - 45 tahun) dan batasan sebagai Pengurus adalah berusia mulai 17 - 35 tahun.
      </p>
    </div>
  </div>
</main>

  {{-- Footer --}}
  <footer class="bg-light py-5 border-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h6 class="fw-bold">Pemerintahan Desa Driyorejo</h6>
          <p>Driyorejo, Nguntoronadi, Driyan, Driyorejo, Magetan, Kabupaten Magetan, Jawa Timur 63383</p>
        </div>
        <div class="col-md-3">
          <h6 class="fw-bold">Hubungi Kami</h6>
          <p>0850000000<br>driyorejo@gmail.com</p>
        </div>
        <div class="col-md-3">
          <h6 class="fw-bold">Jelajahi</h6>
          <ul class="list-unstyled">
            <li><a href="#">Lembaga</a></li>
            <li><a href="#">Struktur Keanggotaan</a></li>
            <li><a href="#">Berita</a></li>
            <li><a href="#">UMKM</a></li>
            <li><a href="#">Data Statistik</a></li>
            <li><a href="#">Galeri</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6 class="fw-bold">Lokasi</h6>
          <img src="{{ asset('assets/img/lembaga/map.png') }}" class="img-fluid" alt="Peta Lokasi">
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>