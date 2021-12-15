@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row align-items-top g-lg-9 py-5">
      <div class="col-md-6  text-center text-lg-start">
        <h1 class="display-5 fw-bold lh-1 mb-10">Mari membuat perubahan bersama</h1>
        <p class="col-lg-10 fs-4">Jika anda mempunyai saran maupun kritik,silahkan mengisi form contact tersebut.</p>
      </div>
      <div class=" col-md-10  col-lg-6">
        <form class="p-4 p-md-6 border rounded-3 bg-light">
          <div class="form-floating mb-4">
            <input type="name" class="form-control" id="floatingInput" placeholder="name">
            <label for="floatingInput">Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>

          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Management
            </label>
          </div>
           <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Outlet Bandung
            </label>
           </div>
            <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Outlet Kebon Jeruk
            </label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Outlet bintaro
            </label>
          </div>
          <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">submit</button>
          <hr class="my-4">
        </form>
      </div>
    </div>
  </div>

@endsection