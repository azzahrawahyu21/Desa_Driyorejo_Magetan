<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Informasi Secara Berkala</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  {{-- Navbar --}}
  @include('navbar')

  {{-- Header --}}
  <header class="header-2 position-relative">
    <div class="page-header d-flex align-items-center justify-content-center text-center text-white"
         style="background-size: cover; background-position: center; height: 50vh; position: relative;">
      <!-- Overlay -->
      <div style="background: rgba(255, 255, 255, 0.5); position:absolute; top:0; right:0; bottom:0; left:0;"></div>

      <!-- Teks -->
      <div class="container position-relative">
        <h4 class="bg-success text-white text-center py-2 mb-4">
          PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI (PPID)
        </h4>
      </div>
    </div>
  </header>

  {{-- Content --}}
  <main class="position-relative mb-5">
    <div class="container" style="margin-top:-180px; z-index:5; position:relative;">
      <!-- Card Utama -->
      <div class="card p-4 bg-white" style="border-radius:20px; box-shadow: 0 4px 15px rgba(13, 71, 21, 0.5);">
        <p class="text-center">Informasi yang wajib disediakan dan diumumkan secara berkala.</p>
        <h5 class="text-center text-success fw-bold mt-4">ANGGARAN PENDAPATAN DAN BELANJA DESA</h5>

        <div class="card p-3" style="border-radius:15px; box-shadow: 0 4px 15px rgba(13, 71, 21, 0.4); margin-top:20px;">
          <table class="table table-bordered text-center">
            <thead style="background-color:#42644B; color:white;">
              <tr>
                <th>NO</th>
                <th>TANGGAL</th>
                <th>TENTANG</th>
                <th>UNDUH</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>7 September 2025</td>
                <td>Daftar Hadir MUSRENBANG</td>
                <td>
                  <i class="bi bi-download" style="color: #EA762B; margin-right: 5px;"></i>
                  <a href="#" style="color: #EA762B; text-decoration: none;">Unduh File</a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>19 September 2025</td>
                <td>Surat Keputusan BPD Tentang Persetujuan APBDES 2025</td>
                <td>
                  <i class="bi bi-download" style="color: #EA762B; margin-right: 5px;"></i>
                  <a href="#" style="color: #EA762B; text-decoration: none;">Unduh File</a>
                </td>
              </tr>
            </tbody>
          </table>
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
