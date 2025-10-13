<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sejarah Desa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  {{-- Navbar --}}
  @include('navbar')

  {{-- Content --}}
<main class="position-relative mb-5">
    <div class="container my-5" style="padding-top: 80px;">
    <div class="text-center mb-4">
      <div class="p-3" style="background-color:#014421; color:white; font-weight:bold; border-radius:5px;">
        PROFIL DESA
      </div>
    </div>

    <!-- Konten Sejarah Desa -->
    <div class="border border-success rounded-bottom p-4 bg-white box-shadow: 0 4px 15px rgba(13, 71, 21, 0.5);">
        <h4 class="fw-bold mb-1">Sejarah Desa</h4>
        <div style="width: 90px; height: 4px; background-color: #e67e22; margin-bottom: 25px;"></div>

        <div class="row align-items-center">
            <!-- Gambar kiri -->
            <div class="col-md-5 mb-3 mb-md-0">
                <img src="assets/img/dashboard/image_profil_desa.jpg" alt="Sejarah Desa Driyorejo" 
                    class="img-fluid rounded-3 shadow-sm" style="width: 100%; height: auto;">
            </div>

            <!-- Teks kanan -->
            <div class="col-md-7">
                <div class="bg-white border border-success-subtle rounded-4 shadow-sm p-4">
                <p class="text-justify mb-2">
                    Desa Driyorejo merupakan salah satu desa tua di wilayah Kecamatan Nguntoronadi, Kabupaten Magetan. 
                    Asal-usul nama Driyorejo diyakini berasal dari dua kata, yaitu <strong>“Driyo”</strong> 
                    yang berarti pepohonan atau tempat yang rindang, dan <strong>“Rejo”</strong> yang berarti ramai, 
                    makmur, serta penuh kehidupan. Nama ini dipilih karena sejak dahulu kawasan desa dikenal 
                    memiliki alam yang subur, banyak pepohonan, dan menjadi tempat bermukim masyarakat 
                    yang hidup rukun serta sejahtera.
                </p>

                <p class="text-justify mb-0">
                    Menurut cerita turun-temurun dari para sesepuh, cikal bakal desa dimulai ketika beberapa kelompok pendatang 
                    membuka lahan di sekitar daerah yang kini menjadi Dusun Driyan. Kehidupan masyarakat pada masa awal 
                    sangat sederhana, sebagian besar bermata pencaharian sebagai petani dan peternak. 
                    Lahan persawahan yang subur dan sumber air yang melimpah menjadikan desa ini cepat berkembang.
                </p>
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