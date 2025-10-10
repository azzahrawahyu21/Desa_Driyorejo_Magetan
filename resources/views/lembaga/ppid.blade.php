<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PPID</title>
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
        PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI (PPID)
      </h4>
      <p><strong>Pejabat Pengelola Informasi dan Dokumentasi (PPID)</strong> adalah pejabat yang bertanggung jawab di bidang 
        penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan publik.
      </p>

      <div class="row mt-4">
        <div class="col-md-4 mb-3">
            <div class="card p-3 h-100 d-flex justify-content-center align-items-center"
                style="border-radius:15px; box-shadow: 0 4px 15px rgba(13, 71, 21, 0.4);">
                <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/img/lembaga/isb.png') }}" 
                    alt="ISB Logo" 
                    style="width:40px; height:40px; object-fit:contain; margin-right:20px;">
                <h6 class="fw-bold mb-0">Informasi Secara Berkala</h6>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card p-3 h-100 d-flex justify-content-center align-items-center"
                style="border-radius:15px; box-shadow: 0 4px 15px rgba(13, 71, 21, 0.4);">
                <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/img/lembaga/ism.png') }}" 
                    alt="ISB Logo" 
                    style="width:40px; height:40px; object-fit:contain; margin-right:20px;">
                <h6 class="fw-bold mb-0">Informasi Secara Merta</h6>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card p-3 h-100 d-flex justify-content-center align-items-center"
                style="border-radius:15px; box-shadow: 0 4px 15px rgba(13, 71, 21, 0.4);">
                <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/img/lembaga/iss.png') }}" 
                    alt="ISB Logo" 
                    style="width:40px; height:40px; object-fit:contain; margin-right:20px;">
                <h6 class="fw-bold mb-0">Informasi Setiap Saat</h6>
                </div>
            </div>
        </div>

        <h5 class="text-center text-success fw-bold mt-4">DASAR HUKUM PPID</h5>
        <div class="mt-3">
            <strong>UNDANG UNDANG REPUBLIK INDONESIA</strong>
            <ol>
                <li>Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.</li>
                <li>Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik.</li>
                <li>Undang-Undang Nomor 6 Tahun 2014 tentang Desa.</li>
            </ol>

            <strong>PERATURAN PEMERINTAH</strong>
            <ol>
                <li>Peraturan Pemerintah Nomor 61 Tahun 2010 Tentang Pelaksanaan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.</li>
            </ol>

            <strong>PERATURAN KOMISI INFORMASI</strong>
            <ol>
            <li>Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2018 tentang Standar Layanan Informasi Publik Desa.</li>
            <li>Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2021 tentang Standar Layanan Informasi Publik.</li>
            </ol>

            <strong>PERATURAN MENTRI DALAM NEGERI</strong>
            <ol>
                <li>Peraturan Pemerintah Nomor 61 Tahun 2010 Tentang Pelaksanaan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.</li>
            </ol>
        </div>

      </div>
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