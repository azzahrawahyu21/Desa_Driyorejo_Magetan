<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Berita Desa</title>
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

      <!-- Grid berita -->
      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm border-success h-100">
            <img src="assets/img/dashboard/berita.png" class="card-img-top" alt="Berita 1"
              style="object-fit: cover; height: 180px;">
            <div class="card-body p-3">
              <small class="text-muted"><i class="bi bi-calendar-event"></i> 14 September 2025</small>
              <h6 class="fw-bold mt-2">Desa Driyorejo Mengesahkan Pembukaan Tempat Wisata Baru</h6>
              <p class="text-muted small mb-2">
                Pemerintah Desa Driyorejo bersama Badan Permusyawaratan Desa (BPD) secara resmi mengesahkan pembukaan tempat...
              </p>
              <a href="{{ route('berita_detail') }}" class="text-success fw-semibold text-decoration-none">Baca Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm border-success h-100">
            <img src="assets/img/dashboard/berita.png" class="card-img-top" alt="Berita 2"
              style="object-fit: cover; height: 180px;">
            <div class="card-body p-3">
              <small class="text-muted"><i class="bi bi-calendar-event"></i> 14 September 2025</small>
              <h6 class="fw-bold mt-2">Desa Driyorejo Meningkatkan Kualitas UMKM Lokal</h6>
              <p class="text-muted small mb-2">
                Melalui pelatihan dan dukungan pemerintah desa, pelaku UMKM kini lebih siap menghadapi pasar digital...
              </p>
              <a href="{{ route('berita_detail') }}" class="text-success fw-semibold text-decoration-none">Baca Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm border-success h-100">
            <img src="assets/img/dashboard/berita.png" class="card-img-top" alt="Berita 3"
              style="object-fit: cover; height: 180px;">
            <div class="card-body p-3">
              <small class="text-muted"><i class="bi bi-calendar-event"></i> 14 September 2025</small>
              <h6 class="fw-bold mt-2">Desa Driyorejo Adakan Gotong Royong Bersama Warga</h6>
              <p class="text-muted small mb-2">
                Dalam rangka mempererat kebersamaan, warga Desa Driyorejo menggelar kegiatan bersih lingkungan bersama...
              </p>
              <a href="#" class="text-success fw-semibold text-decoration-none">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm border-success h-100">
            <img src="assets/img/dashboard/berita.png" class="card-img-top" alt="Berita 1"
              style="object-fit: cover; height: 180px;">
            <div class="card-body p-3">
              <small class="text-muted"><i class="bi bi-calendar-event"></i> 14 September 2025</small>
              <h6 class="fw-bold mt-2">Desa Driyorejo Mengesahkan Pembukaan Tempat Wisata Baru</h6>
              <p class="text-muted small mb-2">
                Pemerintah Desa Driyorejo bersama Badan Permusyawaratan Desa (BPD) secara resmi mengesahkan pembukaan tempat...
              </p>
              <a href="#" class="text-success fw-semibold text-decoration-none">Baca Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm border-success h-100">
            <img src="assets/img/dashboard/berita.png" class="card-img-top" alt="Berita 2"
              style="object-fit: cover; height: 180px;">
            <div class="card-body p-3">
              <small class="text-muted"><i class="bi bi-calendar-event"></i> 14 September 2025</small>
              <h6 class="fw-bold mt-2">Desa Driyorejo Meningkatkan Kualitas UMKM Lokal</h6>
              <p class="text-muted small mb-2">
                Melalui pelatihan dan dukungan pemerintah desa, pelaku UMKM kini lebih siap menghadapi pasar digital...
              </p>
              <a href="#" class="text-success fw-semibold text-decoration-none">Baca Selengkapnya</a>
            </div>
          </div>
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