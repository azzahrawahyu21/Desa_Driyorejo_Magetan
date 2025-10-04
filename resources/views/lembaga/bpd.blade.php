<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Lembaga Desa Driyorejo - BPD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  {{-- Navbar --}}
  @include('navbar')

  {{-- Header --}}
<header class="header-2 position-relative">
  <div class="page-header min-vh-100 d-flex align-items-center justify-content-center text-center text-white"
       style="background-image: url('{{ asset('assets/img/lembaga/background_bpd.png') }}');
              background-size: cover; background-position: center;">
    <!-- Overlay -->
    <div style="background: rgba(0,0,0,0.5); position:absolute; top:0; right:0; bottom:0; left:0;"></div>

    <!-- Teks -->
    <div class="container position-relative">
      <h1 class="fw-bold">LEMBAGA DI DESA DRIYOREJO</h1>
    </div>
  </div>
</header>

  {{-- Content --}}
  <main class="container my-5">
    <div class="card shadow-sm p-4">
      <h3 class="bg-success text-white text-center py-2 mb-4">BADAN PERMUSYAWARATAN DESA (BPD)</h3>

      <div class="text-center mb-4">
        <img src="{{ asset('assets/img/lembaga/struktur_bpd.png') }}" class="img-fluid" alt="Struktur BPD">
      </div>

      <p><strong>Badan Permusyawaratan Desa (BPD)</strong> Desa Driyorejo merupakan lembaga yang menjalankan fungsi legislasi
        (peraturan desa), menampung dan menyalurkan aspirasi masyarakat, serta melakukan pengawasan terhadap jalannya
        pemerintahan desa. BPD adalah mitra kerja Kepala Desa dalam menyusun kebijakan dan program pembangunan.
        Dengan demikian, BPD memiliki peran penting untuk mewujudkan pemerintahan desa yang transparan, partisipatif,
        demokratis, dan akuntabel. Dasar hukum keberadaan BPD adalah Undang-Undang Nomor 6 Tahun 2014 tentang Desa.
      </p>

      <h5 class="text-center text-success fw-bold mt-4">PROGRAM KERJA BPD</h5>
      <div class="mt-3">
        <strong>Bidang Legislasi</strong>
        <ol>
          <li>Menyusun dan menetapkan Peraturan Desa (Perdes) bersama Kepala Desa.</li>
          <li>Memberikan masukan terhadap Rancangan APBDes.</li>
        </ol>

        <strong>Bidang Aspirasi dan Pengawasan</strong>
        <ol>
          <li>Menampung aspirasi masyarakat dari setiap dusun.</li>
          <li>Mengawasi pelaksanaan pembangunan dan penggunaan anggaran desa.</li>
        </ol>

        <strong>Bidang Pemberdayaan Masyarakat</strong>
        <ol>
          <li>Mendukung kegiatan musyawarah desa (musdes).</li>
          <li>Mendorong partisipasi masyarakat dalam pembangunan.</li>
        </ol>

        <strong>Bidang Kelembagaan dan Kemitraan</strong>
        <ol>
          <li>Menjalin kerja sama dengan lembaga desa lain (LPMD, Karang Taruna, PKK).</li>
          <li>Mengelola program-program pemerintah agar tepat sasaran.</li>
        </ol>
      </div>
    </div>
  </main>

   {{-- footer --}}
  @include('footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>