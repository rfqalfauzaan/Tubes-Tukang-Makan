@extends('layouts.main')
@section('container')
<!doctype html>
<html lang="en">

</head>

<body>

  <main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-primary">
      <div class="col-md-6 px-0">
        <h1 class="display-4">Food Court Online</h1>
        <p class="lead my-3">pengen toko kalian di website?anda pengen tau kami ? </p>
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

    <div class="b-example-divider"></div>

    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="img/sayur.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">Food Court Online </h1>
          <p class="lead">Sebuah website yang mempromosikan usaha kuliner pertama di indonesia.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="/about" class="stretched-link"/>
            <button type="button"  class="btn btn-primary btn-lg px-4 me-md-2">Tentang Kami</button>
        </div>
        </div>
      </div>
    </div>

    </body>
</html>
@endsection
