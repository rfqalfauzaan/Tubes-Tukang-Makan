@extends('layouts.main')
@section('container')
<!doctype html>
<html lang="en">


  <style>
    
  </style>


  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="blog.css" rel="stylesheet">
</head>

<body>

  <main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">Food Court Online</h1>
        <p class="lead my-3">pengen toko kalian di website?anda pengen tau kami ? </p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold">lanjut kesini aja</a></p>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Best Menu</strong>
            <h3 class="mb-0">Ayam Goreng</h3>
            <div class="mb-1 text-muted">Rp.20.000,00</div>
            <p class="card-text mb-auto">Ayam goreng yang di goreng dadakan</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Best Menu</strong>
            <h3 class="mb-0">Jus Melon</h3>
            <div class="mb-1 text-muted">Rp.20.000,00</div>
            <p class="mb-auto">Jus melon segar</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>

          </div>
        </div>
      </div>
    </div>

    <div class="row g-5">
      <div class="col-md-8">
        <h2 class="pb-4 mb-4 fst-italic border-bottom">
          Menu Makanan :
        </h2>
        <table class="table">
          <thead>
            <tr>
              <th>Makanan</th>
              <th>Harga</th>
              <th>Porsi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Ayam</td>
              <td>10k</td>
              <td>1</td>
            </tr>
            <tr>
              <td>ikan</td>
              <td>20k</td>
              <td>1</td>
            </tr>
            <tr>
              <td>cumi</td>
              <td>30k</td>
              <td>1</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>sayur</td>
              <td>21k</td>
              <td>1</td>
            </tr>
          </tfoot>
        </table>
        </article>
      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">Tentang kami</h4>
            <p class="mb-0">kami adalah website makan blabla bla</p>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">Kategori Makanan</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">Ayam</a></li>
              <li><a href="#">Ikan</a></li>
              <li><a href="#">Daging</a></li>
              <li><a href="#">Desert</a></li>
              <li><a href="#">Minuman</a></li>
            </ol>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">Contact Us</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

  </main>

</body>

</html>
@endsection