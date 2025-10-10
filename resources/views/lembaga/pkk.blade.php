<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pemberdayaan dan Kesejahteraan Keluarga (PKK)</title>
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
        PEMBERDAYAAN DAN KESEJAHTERAAN KELUARGA (PKK)
      </h4>

      <div class="text-center mb-4">
        <img src="{{ asset('assets/img/lembaga/logo_pkk.png') }}" class="img-fluid" alt="logo" style="max-width: 180px; height: auto;">
      </div>

      <p> <strong>Pemberdayaan dan Kesejahteraan Keluarga (PKK)</strong> adalah organisasi kemasyarakatan yang berfokus 
        pada pemberdayaan keluarga, terutama perempuan, dengan kegiatan seperti pelatihan UKM, pengajian, penyuluhan kesehatan, 
        KB, hingga isu KDRT dan anak. Meski identik dengan “ibu-ibu PKK”, gerakan ini sejatinya terbuka untuk semua karena 
        tujuannya meningkatkan kesejahteraan keluarga dan masyarakat secara menyeluruh.
      </p>

      <h5 class="text-center text-success fw-bold mt-4">KELOMPOK KERJA</h5>
      <div class="row mt-4">
        <div class="col-md-12 mb-3">
          <div class="card p-3 h-100" style="border-radius:15px; box-shadow: 0 4px 15px rgba(13, 71, 21, 0.4);">
            <h6 class="text-center text-success fw-bold mt-2">POKJA I</h6>
            <div class="mt-3">
                <h6 class="text-left text-success fw-bold mt-2">PENGHAYATAN DAN PENGAMALAN PANCASILA</h6>
                <ol>
                    <li>Melaksanakan penyuluhan Undang-undang Perkawinan.</li>
                    <li>Ceramah kesadaran hukum, penanggulangan kenakalan remaja dan narkoba bekerjasama dengan dinas / instansi terkait.</li>
                    <li>Pembentukan dan pembinaan terhadap kelompok Majlis Taklim.</li>
                    <li>Penyuluhan tentang Panca Darma Wanita, diadakan dalam bina wilayah yang di ikuti oleh kelompok PKK Dusun , Kelompok PKK RT dan Dasa Wisma.</li>
                    <li>Melaksanakan Pembinaan kepada BKB 4 ( Empat ) kelompok BKR 3 (Tiga) Kelompok, dan BKL 3 ( Tiga ) kelompok.</li>
                    <li>Membina Simulasi gender dilaksanakan pada minggu Ke-4 ( Empat ) setiap bulan.</li>
                </ol>
                <br>
                <h6 class="text-left text-success fw-bold mt-2">GOTONG ROYONG</h6>
                <ol>
                    <li>Mengikuti Lomba K-3.</li>
                    <li>Melaksanakan kegiatan kerja bakti setiap hari Sabtu ( Sabsih ) di lingkungan desa.</li>
                    <li>Mengadakan kegiatan arisan, jimpitan, dan rukun kematian.</li>
                    <li>Monitoring Kegiatan K-3 di lingkungan Dusun dan RT di desa.</li>
                    <li>Memelihara dan memupuk gotong royong dilingkungan desa.</li>
                    <li>Pemberian sumbangan kepada anak yatim piatu, orang jompo, dan korban bencana alam.</li>
                </ol>
            </div>
          </div>
        </div>

        <div class="col-md-12 mb-3">
          <div class="card p-3 h-100" style="border-radius:15px; box-shadow: 0 4px 15px rgba(13, 71, 21, 0.4);">
            <h6 class="text-center text-success fw-bold mt-2">POKJA II</h6>
            <div class="mt-3">
                <h6 class="text-left text-success fw-bold mt-2">PROGRAM PENDIDIKAN DAN KETERAMPILAN</h6>
                <ol>
                    <li>Mengadakan latihan keterampilan, kursus bunga dari sedotan, kain perca, atau plastik, membuat boneka gantungan dari pita, hantaran pengantin dan membuat emping dari melinjo.</li>
                    <li>Melaksanakan pendataan dan pencatatan kader yang sudah ada dan mencari kader yang baru.</li>
                    <li>Membina dan mengembangkan kader BKB dan PAUD , untuk meningkatkan pengetahuan Ibu dalam kembang anak dalam keluarga.</li>
                    <li>Menyempurnakan dan menambah BKBN yang sudah ada.</li>
                    <li>Pembinaan Kelompok BKB.</li>
                    <li>Pembinaan Kelompok Anak Usia Dini ( PAUD ).</li>
                    <li>Pembinaan kelompok BKR dan BKL</li>
                </ol>
                <br>
                <h6 class="text-left text-success fw-bold mt-2">PROGRAM PENGEMBANGAN KEHIDUPAN BERKOPRASI</h6>
                <ol>
                    <li>Mengadakan penyuluhan kepada masyarakat tentang manfaat koperasi.</li>
                    <li>Membina dan mengembangkan UP2K di semua kelompok PKK Dusun dan Kelompok PKK RT sehingga manfaatnya semakin berarti bagi usaha masyarakat, terutama bagi kelompok yang memerlukan modal.</li>
                    <li>Penyuluhan dalam upaya meningkatkan peran serta dalam pembentukan dan peningkatan simpan pinjam pra koperasi dan koperasi.</li>
                </ol>
            </div>
          </div>
        </div>

        <div class="col-md-12 mb-3">
          <div class="card p-3 h-100" style="border-radius:15px; box-shadow: 0 4px 15px rgba(13, 71, 21, 0.4);">
            <h6 class="text-center text-success fw-bold mt-2">POKJA III</h6>
            <div class="mt-3">
                <h6 class="text-left text-success fw-bold mt-2">PROGRAM SANDANG</h6>
                <ol>
                    <li>Penyuluhan berbusana untuk meningkatkan kesadaran masyarakat dalam cara berbusana yang baik dan sopan sesuai dengan situasi dan keadaan.</li>
                    <li>Pembinaan keterampilan menjahit untuk memenuhi kebutuhan pakaian keluarga dalam rangka meningkatkan pendapatan keluarga.</li>
                    <li>Menciptakan kesadaran cinta pakaian daerah dan nasional.</li>
                    <li>Meningkatkan kemampuan membuat keterampilan dan memasarkan hasilnya.</li>
                </ol>
                <br>
                <h6 class="text-left text-success fw-bold mt-2">PROGRAM PANGAN</h6>
                <ol>
                    <li>Mengadakan lomba cipta menu sehat dan bergizi serta lomba menghias kue baik di tingkat kelurahan maupun tingkat kelompok PKK Dusun/RT.</li>
                    <li>Mengadakan penyuluhan Tabulapot dan Tabulakar.</li>
                    <li>Sosialisasi tentang mutu bahan pangan asal hewan.</li>
                    <li>Mengadakan lomba tumpeng tingkat Dusun.</li>
                    <li>Penyuluhan tentang manfaat pekarangan bukan hanya untuk keindahan dan kesejukan saja tetapi juga untuk peningkatan perekonomian keluarga.</li>
                    <li>Penyuluhan tentang keanekaragaman makanan nusantara dari bahan pokok non beras.</li>
                    <li>Menumbukan kesadaran masyarakat untuk mengkonsumsi makanan yang beragam, bergizi, dan berimbang ( 3B ).</li>
                </ol>
                <br>
                <h6 class="text-left text-success fw-bold mt-2">PROGRAM PERUMAHAN DAN TATA LAKSANA RUMAH TANGGA</h6>
                <ol>
                    <li>Penyuluhan lingkungan pemukiman.</li>
                    <li>Penyuluhan mengenai K-3 dan sampah agar dikelola oleh masyarakat menjadi pupuk kompos / organic.</li>
                    <li>Peningkatan sarana air bersih agar masyarakat memperoleh air bersih dan mampu memperbaikinya.</li>
                    <li>Melaksanakan penyuluhan rumah sehat dan layak huni serta meningkatkan pemanfaatan halaman dan tanah pekarangan dengan hatinya PKK.</li>
                </ol>
            </div>
          </div>
        </div>

                <div class="col-md-12 mb-3">
          <div class="card p-3 h-100" style="border-radius:15px; box-shadow: 0 4px 15px rgba(13, 71, 21, 0.4);">
            <h6 class="text-center text-success fw-bold mt-2">POKJA IV</h6>
            <div class="mt-3">
                <h6 class="text-left text-success fw-bold mt-2">PROGRAM KESEHATAN</h6>
                <ol>
                    <li>Sosialisasi tentang pentingnya olahraga.</li>
                    <li>Pemanfaatan Posyandu untuk peningkatan mutu dan pencakupan posyandu.</li>
                    <li>Penyuluhan GSI di setiap posyandu, agar tercapainya penurunan angka kelahiran dan kematian bayi serta ibu hamil.</li>
                    <li>Peningkatan imunisasi.</li>
                    <li>Penyuluhan dan pengembangan tentang obat-obat tradisional bekerjasama dengan Puskesmas.</li>
                    <li>Penyuluhan tentang kepedulian dan peran keluarga terhadap Lansia.</li>
                    <li>Pembinaan keluarga sadar gizi, mengenal keanekaragaman makanan, pemeriksaan kesehatan, menggunakan garam yodium, ASI dan sarapan pagi.</li>
                    <li>Pembinaan Posyandu.</li>
                    <li>Pemberian makanan tambahan ( PMT ) bagi balita dan Lansia.</li>
                </ol>
                <br>
                <h6 class="text-left text-success fw-bold mt-2">PROGRAM PANGAN</h6>
                <ol>
                    <li>Penyuluhan PHBS ( Perilaku Hidup Bersih dan Sehat ).</li>
                    <li>Penyuluhan tentang pemanfaatan tanah kosong / pekarangan.</li>
                    <li>Penyuluhan tentang air bersih, penyegaran dan penghijauan.</li>
                    <li>Penyuluhan tentang pengertian dan kesadaran mengenai arti peran pentingnya peran lingkungan hidup yang sehat, bebas polusi, mencegah erosi, dan melestarikan lingkungan.</li>
                    <li>Penyuluhan pemberantasan sarang nyamuk untuk mencegah DBD (Demam Berdarah Dengue) dengan cara 3M.</li>
                </ol>
                <br>
                <h6 class="text-left text-success fw-bold mt-2">PROGRAM PERUMAHAN DAN TATA LAKSANA RUMAH TANGGA</h6>
                <ol>
                    <li>Penyuluhan tentang Norma Keluarga Kecil Bahagia Sejahtera ( NKKBS ) yang dilaksanakan dalam kegiatan Posyandu.</li>
                    <li>Penyuluhan gemar menabung untuk kehidupan dan penghidupan masa depan.</li>
                    <li>Penyuluhan tentang KB mandiri.</li>
                    <li>Melaksanakan penyuluhan tentang 8 ( delapan ) fungsi keluarga.</li>
                    <li>Melakukan penyuluhan reproduksi KB di Usia subur.</li>
                    <li>Melaksanakan penyuluhan tentang pengelolaan keuangan keluarga dengan cara hidup yang hemat dan sederhana.</li>
                    <li>Melaksanakan pendataan keluarga.</li>
                </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- End Row -->
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