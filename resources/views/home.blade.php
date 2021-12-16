@extends('layouts.main')
@section('container')
<!doctype html>
<html lang="en">

</head>

<body>

  <main class="container">


    <div class="px-4 pt-5 my-5 text-center border-bottom">
      <h1 class="display-4 fw-bold">Food Court Online</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">pengen tau tentang kami pengen tau siapa kami bisa lanjut click di bawah ini.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
          <a href="/about" class="btn btn-primary">lanjut sini</a>

        </div>
      </div>
      <div class="overflow-hidden" style="max-height: 50vh;">
        <div class="container px-5">
          <img src="/img/banner.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="00" loading="lazy">
        </div>
      </div>
    </div>


</body>

</html>
@endsection