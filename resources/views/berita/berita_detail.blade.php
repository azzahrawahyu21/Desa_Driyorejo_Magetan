<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Detail Berita Desa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  {{-- Navbar --}}
  @include('navbar')

  {{-- Content --}}
<main class="position-relative mb-5">
  <div class="container my-5" style="padding-top: 80px;">
    <div class="card shadow-sm p-4 mb-5">
    <h4 class="fw-bold mb-1">Berita Desa</h4>
    <div style="width: 90px; height: 4px; background-color: #e67e22; margin-bottom: 25px;"></div>
      
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}" class="text-success text-decoration-none">Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('berita') }}" class="text-success text-decoration-none">Berita Desa</a>
        </li>
        </ol>
    </nav>

    <!-- Detail Berita -->
    <div>
        <h4 class="fw-bold mb-1">Desa Driyorejo Mengesahkan Pembukaan Tempat Wisata Baru</h4>
        <small class="text-muted mb-3 d-block">
        <i class="bi bi-calendar-event"></i> 14 September 2025
        </small>

        <div class="text-center mb-4">
        <img src="assets/img/dashboard/berita.png" class="img-fluid rounded shadow-sm"
            alt="Gambar Berita" style="max-height: 400px; object-fit: cover;">
        </div>

        <p class="text-justify">
        Pemerintah Desa Driyorejo, Kecamatan Nguntoronadi, Kabupaten Magetan, bersama Badan Permusyawaratan Desa (BPD) secara resmi
        mengesahkan pembukaan tempat wisata baru yang berlokasi di wilayah Desa Driyorejo. Pengesahan ini dilakukan dalam Musyawarah
        Desa (Musdes) yang digelar pada hari Senin, 14 September 2025, dan dihadiri oleh perangkat desa, tokoh masyarakat, perwakilan
        karang taruna, serta sejumlah warga.
        </p>

        <p class="text-justify">
        Pembukaan tempat wisata ini dilatarbelakangi oleh potensi alam Desa Driyorejo yang masih asri, subur, dan memiliki nilai budaya
        yang kaya. Melalui pemanfaatan potensi tersebut, pemerintah desa berharap dapat menghadirkan destinasi wisata yang tidak hanya
        menjadi sarana rekreasi bagi masyarakat, tetapi juga mampu meningkatkan perekonomian warga desa. Kepala Desa Driyorejo, Bapak
        Yanto Prayitno S.I, dalam sambutannya menegaskan bahwa pembangunan sektor pariwisata merupakan langkah strategis untuk mendorong
        kemandirian desa.
        </p>

        <p class="text-justify">
        Konsep wisata yang dihadirkan akan mengusung tema wisata alam pedesaan. Pengunjung nantinya dapat menikmati suasana pedesaan yang
        hijau, bersih, dan menenangkan, serta terlibat dalam berbagai kegiatan khas wilayah Nguntoronadi. Selain itu, pemerintah desa juga
        berencana melibatkan masyarakat secara langsung dalam mengembangkan UMKM lokal, penyediaan warung kuliner desa, area gazebo dan
        spot foto, hingga wahana bermain keluarga. Dengan begitu, manfaat ekonomi dari keberadaan wisata akan dirasakan secara langsung oleh warga.
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