<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <title>Home Service | {{ $title }}</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">
  <img src="{{ URL::asset('assets//img/logo.png')}}" alt=" " width=" " height="100" class="d-inline-block align-text-top">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link"  href="/art">ART</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/baby_sitter">Baby Sitter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/perawat_lansia">Perawat Lansia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profil">Profil</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
    <h1>Profil</h1>
</div>

<div class="dropdown" style="margin: 50px 1300px">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a <button class="dropdown-item" type="button" href="/pesanan">Pesanan</button></a>
<form action="/logout" method="post">
      @csrf
    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Keluar</button>
</form>
  </ul>
</div>

<div class="container" style="margin-top:20px">
  <div class="row">
    <div class="col-sm-4">
    <img src="{{ URL::asset('assets//img/profil.png')}}" alt=" " width=" " height="200" class="d-inline-block align-text-top">
      <h2>Sarmita</h2>
      <p>Profesi: <button type="button" class="btn btn-warning">ART</button></p>
      <button type="button" class="btn btn-danger">Rp. 30.000,00/jam</button>
    </div>
    <div class="col-sm-8">
      <p>Umur : 35 Tahun</p>
      <p>Pengalaman kerja : 4 Tahun</p>
      <p>Deskripsi : Sarmita bisa di panggil Mita, Mita pengalaman kerja 4 tahun sebagai art. Mita berkepribadian, jujur, sopan, sabar, rajin, ramah, disiplin, inisiatif, bertanggung jawab, mudah diarahkan, gesit, telaten, sabar, tidak mudah tersinggung, Mita bisa memasak masakan sederhana seperti, sayur, sop ,opor ayam, pindang ikan, terong balado, nasi goreng, tumis sayuran, goreng ayam tempe tahu ikan dll, Mita juga mahir dalam mengerjakan pekaerjaan rumah seperti, menyapu, lap2, ngepel, nyetrika, nyuci pakaian menggunakan mesin/manual, nyiram tanaman sudah menjadi rutinitas sehari hari. Mita tidak memiliki riwayat penyakit apapun,tidak sedang batuk, flu demam, ataupun sakit lain nya, Mita memiliki identitas lengkap dan siap kerja hari ini. Mita sudah di vaksin dan siap kerja sekarang.</p>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>