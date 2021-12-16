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
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" img src="img/ayam.jpg" class="card-img-top">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Best Menu</strong>
            <h3 class="mb-0">Ayam Goreng</h3>
            <div class="mb-1 text-muted">Rp.20.000,00</div>
            <p class="card-text mb-auto">Ayam goreng yang di goreng dadakan</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>

          <div class="col-auto d-none d-lg-block">
           <div> <img src="img/ayam.jpg"  width="250" height="200" >
                <svg  class="bd-placeholder-img" width="200" height="250" role="img">
            </svg>
        </Div>
    </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Best Menu</strong>
            <h3 class="mb-0">Jus Melon</h3>
            <div class="mb-1 text-muted">Rp.20.000,00</div>
            <p class="mb-auto">Jus melon segar yang di buat dadakan</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <div>
                <img src="img/melon.jpg" width="250" height="200" >

                <svg class="bd-placeholder-img"  width="200" height="250" >
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
              <td>Ayam Goreng</td>
              <td>10k</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Ayam Bakar</td>
              <td>20k</td>
              <td>1</td>
            </tr>
            <tr>
              <td>cumi</td>
              <td>30k</td>
              <td>1</td>
            </tr>
            <tr>
              <td>sayur sop</td>
              <td>21k</td>
              <td>1</td>
            </tr>
            <tr>
                <td>gulai ikan</td>
                <td>21k</td>
                <td>1</td>
              </tr>
              <tr>
                <td>gulai daging</td>
                <td>31k</td>
                <td>1</td>
              </tr>
              <tr>
                <td>ikan bakar</td>
                <td>21k</td>
                <td>1</td>
              </tr>
              <tr>
                <td>ikan goreng</td>
                <td>21k</td>
                <td>1</td>
              </tr>
              <tr>
                <td>pepes ikan</td>
                <td>21k</td>
                <td>1</td>
              </tr>
              <tr>
                <td>pepes ayam</td>
                <td>21k</td>
                <td>1</td>
              </tr>

              <table class="table">
                <thead>
                  <tr>
                    <th> Minuman</th>
                    <th>Harga</th>
                    <th>porsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Black Coffe</td>
                    <td>10k</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Cappucinno</td>
                    <td>20k</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Mochacinno</td>
                    <td>30k</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Chocolate</td>
                    <td>10k</td>
                    <td>1</td>
                  </tr>
                  <tr>
                      <td>Milo</td>
                      <td>21k</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Jus</td>
                      <td>31k</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>ice Tea</td>
                      <td>21k</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Lemon Tea</td>
                      <td>21k</td>
                      <td>1</td>
                    </tr>
            </tbody>
          </tfoot>
        </table>
        </article>
      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">Tentang kami</h4>
            <p class="mb-0">kami adalah website yang akan mempromosikan produk-produk kuliner dari seluruh indonesia, jika kalian ingin mempromosikannya bisa hubungi kami langsung.</p>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">Kategori Kuliner</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">Makanan</a></li>
              <li><a href="#">Minuman</a></li>
              <li><a href="#">Desert</a></li>

            </ol>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">Contact Us</h4>
            <ol class="list-unstyled">
              <li><a href="#">Instagram</a></li>
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
