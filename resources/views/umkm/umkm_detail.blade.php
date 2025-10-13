<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Detail UMKM Desa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  {{-- Navbar --}}
  @include('navbar')

  {{-- Content --}}
<main class="position-relative mb-5">
  <div class="container my-5" style="padding-top: 80px;">
    <div class="card shadow-sm p-4 mb-5">
    <h4 class="fw-bold mb-1">UMKM Desa</h4>
    <div style="width: 90px; height: 4px; background-color: #e67e22; margin-bottom: 25px;"></div>
      
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}" class="text-success text-decoration-none">Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('umkm') }}" class="text-success text-decoration-none">UMKM Desa</a>
        </li>
        </ol>
    </nav>

    <!-- Detail Berita -->
    <div class="row g-4">
        <div class="col-md-5">
        <img src="assets/img/dashboard/umkm.png" class="img-fluid rounded shadow-sm" alt="Kerajinan Tangan">
        </div>

        <div class="col-md-7">
        <h4 class="fw-bold">Kerajinan Tangan Bu Parti Berbuah Manis dan Menjanjikan</h4>
        <p class="text-muted" style="text-align: justify;">
            Masyarakat Desa Driyorejo, Kecamatan Nguntoronadi, Kabupaten Magetan memiliki tradisi dan keterampilan yang kuat dalam bidang kerajinan tangan. 
            Berbagai produk lokal dihasilkan dengan memanfaatkan bahan-bahan alam sekitar, seperti bambu, kayu, rotan, dan janur. 
            Anyaman bambu menjadi salah satu ciri khas desa ini, dengan hasil berupa besek, tampah, tudung saji, hingga keranjang yang tidak hanya digunakan untuk kebutuhan rumah tangga, 
            tetapi juga memiliki nilai ekonomi di pasar lokal.
        </p>
        <p class="text-muted" style="text-align: justify;">
            Selain itu, terdapat kerajinan batik tulis dan cap dengan motif sederhana bernuansa alam pedesaan yang menggambarkan identitas serta kearifan lokal masyarakat. 
            Kerajinan kayu dan rotan berupa hiasan rumah, miniatur, serta peralatan tradisional juga menjadi produk yang diminati. 
            Tidak ketinggalan, kerajinan janur yang sering dibuat untuk acara adat dan upacara desa turut memperkuat citra budaya Driyorejo.
        </p>
        </div>
    </div>

    <div class="mt-4">
        <p class="text-muted" style="text-align: justify;">
        Kerajinan tangan di Desa Driyorejo tidak hanya menjadi bagian dari warisan budaya, tetapi juga membuka peluang ekonomi bagi masyarakat. 
        Banyak pengrajin yang menjadikannya sebagai sumber penghasilan tambahan, sementara generasi muda desa mulai mengembangkan inovasi baru 
        dengan memadukan tradisi dan desain modern agar produk kerajinan lebih menarik di pasaran.
        </p>
        <p class="text-muted" style="text-align: justify;">
        Dengan dukungan pemerintah desa dan semangat gotong royong masyarakat, kerajinan tangan Driyorejo terus dilestarikan sekaligus dipromosikan 
        agar dapat dikenal lebih luas, baik di tingkat daerah maupun nasional.
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