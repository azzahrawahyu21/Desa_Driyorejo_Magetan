<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Struktur Keanggotaan dan Profil Pejabat Desa Driyorejo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  {{-- Navbar --}}
  @include('navbar')

  <!-- Section Struktur Keanggotaan -->
  <section class="container my-5" style="padding-top: 80px;">
    <div class="text-center mb-4">
      <div class="p-3" style="background-color:#014421; color:white; font-weight:bold; border-radius:5px;">
        STRUKTUR KEANGGOTAAN DAN PROFIL PEJABAT
      </div>
    </div>

    <div class="card shadow-sm mb-5">
      <div class="card-body text-center">
        <img src="struktur-organisasi.png" alt="Struktur Organisasi" class="img-fluid">
      </div>
    </div>
  </section>

  <!-- Section Profil Pejabat -->
  <section class="container mb-5">
    <div class="card shadow-sm">
      <div class="card-header text-danger fw-bold" style="font-size: 0.9rem;">
        PROFIL KEPALA DESA
      </div>
      <div class="card-body d-flex flex-wrap">
        
        <!-- Foto -->
        <div class="me-4 mb-3" style="flex: 0 0 200px; background:#f0f0f0; display:flex; align-items:center; justify-content:center;">
          <span>FOTO KEPALA DESA</span>
        </div>

        <!-- Data Kepala Desa -->
        <div style="flex: 1;">
          <h5 class="fw-bold">Nama Kepala Desa</h5>
          <p><strong>Jabatan :</strong> Kepala Desa</p>
          <p>
            Hartanto adalah pria kelahiran 1980 yang menjabat sebagai Kepala Desa Bantengan, Kecamatan Wungu, Kabupaten Madiun.
            Ia merupakan putra daerah Madiun dan menyelesaikan pendidikan terakhirnya pada jenjang SLTA/sederajat.
          </p>
          <p>
            Sebagai Kepala Desa, Hartanto memegang tanggung jawab tertinggi dalam penyelenggaraan pemerintahan, pembangunan,
            dan pelayanan masyarakat di Desa Bantengan. Dengan kepemimpinannya, ia berkomitmen untuk membangun desa yang lebih maju,
            transparan, dan berpihak kepada kepentingan warga.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="container mb-5">
    <div class="card shadow-sm">
      <div class="card-header text-danger fw-bold" style="font-size: 0.9rem;">
        PROFIL SEKERTARIS
      </div>
      <div class="card-body d-flex flex-wrap">
        
        <!-- Foto -->
        <div class="me-4 mb-3" style="flex: 0 0 200px; background:#f0f0f0; display:flex; align-items:center; justify-content:center;">
          <span>FOTO SEKERTARIS</span>
        </div>

        <!-- Data Kepala Desa -->
        <div style="flex: 1;">
          <h5 class="fw-bold">Nama Sekertaris</h5>
          <p><strong>Jabatan :</strong> Kepala Desa</p>
          <p>
            Hartanto adalah pria kelahiran 1980 yang menjabat sebagai Kepala Desa Bantengan, Kecamatan Wungu, Kabupaten Madiun.
            Ia merupakan putra daerah Madiun dan menyelesaikan pendidikan terakhirnya pada jenjang SLTA/sederajat.
          </p>
          <p>
            Sebagai Kepala Desa, Hartanto memegang tanggung jawab tertinggi dalam penyelenggaraan pemerintahan, pembangunan,
            dan pelayanan masyarakat di Desa Bantengan. Dengan kepemimpinannya, ia berkomitmen untuk membangun desa yang lebih maju,
            transparan, dan berpihak kepada kepentingan warga.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="container mb-5">
    <div class="card shadow-sm">
      <div class="card-header text-danger fw-bold" style="font-size: 0.9rem;">
        PROFIL KEPALA DESA
      </div>
      <div class="card-body d-flex flex-wrap">
        
        <!-- Foto -->
        <div class="me-4 mb-3" style="flex: 0 0 200px; background:#f0f0f0; display:flex; align-items:center; justify-content:center;">
          <span>FOTO KEPALA DESA</span>
        </div>

        <!-- Data Kepala Desa -->
        <div style="flex: 1;">
          <h5 class="fw-bold">Nama Kepala Desa</h5>
          <p><strong>Jabatan :</strong> Kepala Desa</p>
          <p>
            Hartanto adalah pria kelahiran 1980 yang menjabat sebagai Kepala Desa Bantengan, Kecamatan Wungu, Kabupaten Madiun.
            Ia merupakan putra daerah Madiun dan menyelesaikan pendidikan terakhirnya pada jenjang SLTA/sederajat.
          </p>
          <p>
            Sebagai Kepala Desa, Hartanto memegang tanggung jawab tertinggi dalam penyelenggaraan pemerintahan, pembangunan,
            dan pelayanan masyarakat di Desa Bantengan. Dengan kepemimpinannya, ia berkomitmen untuk membangun desa yang lebih maju,
            transparan, dan berpihak kepada kepentingan warga.
          </p>
        </div>
      </div>
    </div>
  </section>

   {{-- footer --}}
  @include('footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>