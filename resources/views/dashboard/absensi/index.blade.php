    @extends('dashboard.layouts.main')
    @section('container')
    <!-- <div>
    <h4>Data Absensi Siswa SMPN 1 Baureno</h4>
    </div> -->
    @if(session()->has('succes'))
    <div class="alert alert-succes" role="alert">
    {{ session('succes') }}
    </div>
    @endif
    <div class="mb-5 text-center margin:auto;">
<!-- 
    Hi, {{ auth()->user()->name }} 

    <br> Silahkan melakukan absensi <a href="/dashboard/absensi/create">ABSENSI</a>
    </div> -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active main d-flex justify-content-center align-items-center">
        <img src="/apik.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h1 class="text-dark ">Hi, {{ auth()->user()->name }} 
    </h1>
        <p class="text-dark">Silahkan lakukan absen</p>
        <p><a href="/dashboard/absensi/create" class="btn btn-warning">Klik Absen Sekarang !</a></p>
        </div>
    </div>
    <!-- <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
        </div>
    </div> -->
    <!-- <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
        </div>
    </div> -->
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button> -->
    </div>


    


    

    @endsection