@extends('layouts.main')
@section('container')
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Home</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">



  <!-- Bootstrap core CSS -->
  <link href="{{asset('file/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
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
        <h1 class="display-4 fst-italic">Website tukang makan</h1>
        <p class="lead my-3">anda suka makan?? </p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
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