@extends('layouts.main')

<!-- Css -->
<link rel="stylesheet" href="css/style.css">

@section('container')
<!-- Jumbotron -->
<section class="jumbotron text-center">
    <h1>About Us</h1>   
    <img src="img/logo.png" class="img-fluid" alt="logo" width="250">
    <h1 class="display-4">Food Court Online</h1>
    <p class="lead">Kami adalah pemadam kelaparan</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L24,181.3C48,171,96,149,144,165.3C192,181,240,235,288,240C336,245,384,203,432,181.3C480,160,528,160,576,144C624,128,672,96,720,112C768,128,816,192,864,208C912,224,960,192,1008,170.7C1056,149,1104,139,1152,122.7C1200,107,1248,85,1296,112C1344,139,1392,213,1416,250.7L1440,288L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>

</section>
<!-- akhir Jumbotron -->

<!-- Deksiripsi About-->

<section id="aboutus">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2>Latar Belakang</h2>
            </div>
        </div>
        <div class="row justify-content-center fs-10 text-justify">
            <div class="col-md-4 text-center">
                <p>Website <b>Food Court Online</b> ini dibuat untuk memenuhi para makanan dan minuman yang pengen kalian share atau  ,yang ingin memposting ke jaring media <b>disilah tempat yang paling anda cari</b>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <p>Website <b>Food Court Online</b> ini juga dibuat oleh 5 anggota yang luar biasa  yaitu <b>Rifqi Alfauzaan</b> 
                    ,  <b>Ipan Sopian</b>  <b>Fikri Anjani</b> ,  <b>Aimar Shacher A. K</b> 
                  , dan <b>lukman Tresnahadi</b> 
                </p>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#5de9cb" fill-opacity="1" d="M0,320L34.3,277.3C68.6,235,137,149,206,117.3C274.3,85,343,107,411,128C480,149,549,171,617,165.3C685.7,160,754,128,823,106.7C891.4,85,960,75,1029,96C1097.1,117,1166,171,1234,165.3C1302.9,160,1371,96,1406,64L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>
<!-- akhir about -->

<!-- Galery -->
<section id="galery">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2>Galery Team</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/1.jpg" class="card-img-top" alt="lukman">
                    <div class="card-body">
                      <p class="card-text">Nama : Lukman Tresnahadi</p>
                      <p class="card-text">NRP  : 193040117</p>
                      <p class="card-text">IG   : lukmantrsnhdi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/2.jpg" class="card-img-top" alt="aimar">
                    <div class="card-body">
                      <p class="card-text">Nama : Aimar Shacher A. K</p>
                      <p class="card-text">NRP  : 193040114</p>
                      <p class="card-text">IG   : aimarshacherak</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/3.jpg" class="card-img-top" alt="fikri">
                    <div class="card-body">
                      <p class="card-text">Nama : Fikri Anjani</p>
                      <p class="card-text">NRP  : 193040112</p>
                      <p class="card-text">IG   : fikranjani</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/4.jpg" class="card-img-top" alt="ipan">
                    <div class="card-body">
                      <p class="card-text">Nama : Ipan Sopian</p>
                      <p class="card-text">NRP  : 193040113</p>
                      <p class="card-text">IG   : iiiiiiiifan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/5.jpg" class="card-img-top" alt="rifki">
                    <div class="card-body">
                      <p class="card-text">Nama : M. Rifqi Al Fauzaan</p>
                      <p class="card-text">NRP  : 193040115</p>
                      <p class="card-text">IG   : rfqalfauzaan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection