<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Visi Misi Desa Driyorejo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  {{-- Navbar --}}
  @include('navbar')

  <div class="container my-5" style="padding-top: 80px;">
  <!-- Judul -->
  <div class="text-center mb-5">
    <h4 class="fw-bold text-white py-2 px-4" style="background-color: #014421; border-radius: 4px; display: inline-block; width: 100%;">
      Visi & Misi
    </h4>
  </div>

  <!-- Visi -->
  <div class="text-center mb-5">
    <h3 class="fw-bold">Visi</h3>
    <hr style="width: 100px; border: 2px solid #e67e22; margin: 0 auto 15px auto;">
    <p style="font-size: 1rem; max-width: 700px; margin: 0 auto;">
      Visi adalah pernyataan singkat yang menggambarkan tujuan utama atau cita-cita
      yang ingin dicapai di masa depan, sehingga berfungsi sebagai arah dan panduan
      dalam pengambilan keputusan maupun pengembangan.
    </p>
  </div>

    <!-- Misi -->
    <div class="text-center mb-4">
      <h3 class="fw-bold">Misi</h3>
      <hr style="width: 100px; border: 2px solid #e67e22; margin: 0 auto 15px auto;">
    </div>

   <div class="p-4 rounded" style="border: 2px solid #014421;">
      <ul class="list-unstyled">
        <li class="d-flex align-items-center mb-3">
          <span class="badge rounded-circle me-3" style="background-color: #e67e22; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; font-weight: bold;">1</span>
          <span>Penjelasan misi 1</span>
        </li>
        <li class="d-flex align-items-center mb-3">
          <span class="badge rounded-circle me-3" style="background-color: #e67e22; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; font-weight: bold;">2</span>
          <span>Penjelasan misi 2</span>
        </li>
        <li class="d-flex align-items-center mb-3">
          <span class="badge rounded-circle me-3" style="background-color: #e67e22; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; font-weight: bold;">3</span>
          <span>Penjelasan misi 3</span>
        </li>
        <li class="d-flex align-items-center">
          <span class="badge rounded-circle me-3" style="background-color: #e67e22; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; font-weight: bold;">4</span>
          <span>Penjelasan misi 4</span>
        </li>
      </ul>
    </div>
  </div>

   {{-- footer --}}
  @include('footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>