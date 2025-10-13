<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dashboard Desa Driyorejo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Responsive helper */
    body {
      font-family: 'Segoe UI', sans-serif;
      overflow-x: hidden;
    }

    .page-header {
      background-size: cover;
      background-position: center;
      height: 60vh;
      position: relative;
    }

    @media (max-width: 768px) {
      .page-header {
        height: 40vh;
        background-position: center top;
      }
      .page-header h1 {
        font-size: 1.5rem;
      }
      .page-header p {
        font-size: 1rem;
      }
      .card-stat {
        padding: 1.5rem !important;
      }
      .col-md-3, .col-md-4, .col-md-6, .col-md-8 {
        margin-bottom: 1.5rem;
      }
      footer .row > div {
        margin-bottom: 2rem;
      }
    }

    @media (max-width: 576px) {
      .card-stat {
        padding: 1rem !important;
      }
      .header-2 h1 {
        font-size: 1.25rem !important;
      }
    }

    /* Scrollable card spacing */
    .scroll-berita {
      gap: 1rem;
      scroll-snap-type: x mandatory;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
    .scroll-berita .card {
      flex: 0 0 auto;
      width: 260px;
      scroll-snap-align: start;
    }
  </style>
</head>

<body>
  {{-- Navbar --}}
  @include('navbar')

  {{-- Header --}}
  <header class="header-2 position-relative">
    <div class="page-header d-flex align-items-center justify-content-center text-center text-white"
         style="background-image: url('{{ asset('assets/img/dashboard/image_desa.jpg') }}');">
      <div style="background: rgba(0,0,0,0.5); position:absolute; top:0; right:0; bottom:0; left:0;"></div>
      <div class="container position-relative px-4">
        <h1 class="fw-bold">Selamat Datang di Website Resmi Desa Driyorejo</h1>
        <p style="font-size: 1.2rem;">Sumber informasi terbuka, pelayanan mudah, dan desa maju bersama.</p>
      </div>
    </div>
  </header>

  {{-- Content --}}
  <main class="position-relative mb-5">
    <!-- Statistik -->
    <div class="container d-flex justify-content-center" style="margin-top:-100px; z-index:5; position:relative;">
      <div class="card card-stat p-4 bg-transparent text-center w-100"
           style="border-radius:20px; background:linear-gradient(to bottom, rgba(255,255,255,0.9), rgba(104,152,117,0.9)); box-shadow:0 4px 15px rgba(210,231,213,0.5);">

        <div class="row g-4 text-center">
          <div class="col-12 col-md-4">
            <h3 class="fw-bold">3.100</h3>
            <h5 class="mb-0">Jumlah Penduduk</h5>
            <small>Total warga yang tinggal dan terdata di Desa</small>
          </div>
          <div class="col-12 col-md-4 border-md-start border-md-end" style="border-color: black !important;">
            <h3 class="fw-bold">130</h3>
            <h5 class="mb-0">Jumlah KK</h5>
            <small>Total kepala keluarga sebagai dasar kependudukan</small>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="fw-bold">75</h3>
            <h5 class="mb-0">Jumlah UMKM</h5>
            <small>Jumlah UMKM yang beroperasi di Desa Driyorejo</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Profil Desa -->
    <div class="container my-5 px-4 px-md-5">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 mb-4 mb-md-0">
          <h3 class="fw-bold mb-3">Profil Desa</h3>
          <div style="width: 90px; height: 4px; background-color: #d35400; margin-top: 5px;"></div>

          <div class="mt-4">
            <p><strong>Nama Desa:</strong> Driyorejo</p>
            <p><strong>Luas Wilayah:</strong> ± 248,35 hektar (sekitar 2,4835 km²)</p>
            <p><strong>Letak Geografis:</strong> Kecamatan Nguntoronadi, Kabupaten Magetan, Jawa Timur</p>
            <p><strong>Kode Pos:</strong> 63383</p>
            <p><strong>Kecamatan:</strong> Nguntoronadi</p>
            <p><strong>Kabupaten:</strong> Magetan</p>
          </div>

          <a href="#" class="btn text-white mt-3 px-4" style="background-color: #2A774C;">Baca Selengkapnya</a>
        </div>

        <div class="col-12 col-md-6 text-center">
          <div class="position-relative d-inline-block">
            <div style="position:absolute; top:-15px; right:-15px; width:100px; height:100px; background-color:#e67e22; border-radius:15px; z-index:1;"></div>
            <div style="position:absolute; bottom:-15px; left:-15px; width:100px; height:100px; background-color:#e67e22; border-radius:15px; z-index:1;"></div>
            <img src="assets/img/dashboard/image_profil_desa.jpg"
                 alt="Profil Desa"
                 class="img-fluid rounded-4 position-relative"
                 style="z-index:2; width:100%; max-width:400px; box-shadow:0 4px 15px rgba(0,0,0,0.2);">
          </div>
        </div>
      </div>
    </div>

    <!-- Jam Kerja & SOTK -->
    <div class="container my-5 px-4 px-md-5">
      <div class="row g-4">
        <div class="col-12 col-md-4">
          <div class="border border-success rounded p-4 text-center h-100">
            <h5 class="fw-bold mb-2">Jam Kerja</h5>
            <div style="width: 90px; height: 4px; background-color: #2A774C; margin: 0 auto 15px auto;"></div>

            @foreach (['Senin'=>'08:00 - 13:00', 'Selasa'=>'08:00 - 13:00', 'Rabu'=>'08:00 - 13:00', 'Kamis'=>'08:00 - 13:00', 'Jumat'=>'08:00 - 11:00', 'Sabtu'=>'Libur', 'Minggu'=>'Libur'] as $hari => $jam)
              <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="badge text-white px-3 py-2" style="background-color:#e67e22;">{{ $hari }}</span>
                <span class="border border-warning rounded-pill px-3 py-2">{{ $jam }}</span>
              </div>
            @endforeach
          </div>
        </div>

        <div class="col-12 col-md-8">
          <div class="border border-success rounded p-4 text-center h-100">
            <h5 class="fw-bold mb-2">SOTK</h5>
            <div style="width: 90px; height: 4px; background-color: #2A774C; margin: 0 auto 15px auto;"></div>
            <img src="assets/img/dashboard/sotk.png" alt="Struktur Organisasi" class="img-fluid mb-3">
            <a href="#" class="btn text-white" style="background-color: #e67e22;">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Berita -->
    <div class="container my-5 px-4 px-md-5">
      <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <h3 class="fw-bold mb-0">Berita</h3>
        <a href="{{ route('berita') }}" class="btn text-white fw-semibold px-3 py-1 mt-2 mt-sm-0" style="background-color: #e67e22;">Baca Selengkapnya</a>
      </div>

      <div style="width: 90px; height: 4px; background-color: #2A774C; margin-bottom: 25px;"></div>

      <div class="scroll-berita d-flex pb-3">
        @for ($i = 1; $i <= 6; $i++)
          <div class="card shadow-sm border-success">
            <img src="assets/img/dashboard/berita.png" class="card-img-top" alt="Berita">
            <div class="card-body">
              <small class="text-muted"><i class="bi bi-calendar-event"></i> 14 September 2025</small>
              <h6 class="fw-bold mt-2">Desa Driyorejo Adakan Kegiatan Gotong Royong</h6>
              <p class="text-muted small mb-2">Warga bersama perangkat desa melakukan kegiatan bersih lingkungan...</p>
              <a href="#" class="text-success fw-semibold text-decoration-none">Baca Selengkapnya</a>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </main>

  {{-- Footer --}}
  <footer class="bg-light py-5 border-top mt-5">
    <div class="container">
      <div class="row gy-4">
        <div class="col-12 col-md-3">
          <h6 class="fw-bold">Pemerintahan Desa Driyorejo</h6>
          <p>Driyorejo, Nguntoronadi, Magetan, Jawa Timur 63383</p>
        </div>
        <div class="col-12 col-md-3">
          <h6 class="fw-bold">Hubungi Kami</h6>
          <p>0850000000<br>driyorejo@gmail.com</p>
        </div>
        <div class="col-12 col-md-3">
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
        <div class="col-12 col-md-3 text-center text-md-start">
          <h6 class="fw-bold">Lokasi</h6>
          <img src="{{ asset('assets/img/lembaga/map.png') }}" class="img-fluid rounded" alt="Peta Lokasi">
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
