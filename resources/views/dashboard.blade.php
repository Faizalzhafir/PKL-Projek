@extends('layout.master')

@section('content')
{{-- <section id="hero" class="hero section dark-background">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
        <h2>SELAMAT DATANG {{auth()->user()->name}} DI</h2>
        <h2>SISTEM INFORMASI</h2>
        <h2>PRAKTEK KERJA LAPANGAN</h2>
        <div class="d-flex">
          <a href="#about" class="btn-get-started">Get Started</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('dashboard/img/hero-img.png') }}" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section> --}}
<section id="team" class="team section bg-warning">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member d-flex align-items-start mt-5">
          <div class="pic mt-5 mb-5"><img src="{{ asset('dashboard/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info mt-5 mb-5">
            <h1>SELAMAT DATANG {{auth()->user()->name}} DI</h1>
            <h1>SISTEM INFORMASI</h1>
            <h1>PRAKTEK KERJA LAPANGAN</h1>
            <span>Product Manager</span>
          </div>
        </div>
      </div><!-- End Team Member -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member d-flex align-items-start mt-5">
          <div class="member-info">
            <span>Cari tahu mulai dari <a class="text-warning">informasi PKL </a>sampai informasi tempat PKL  atau Industri lebih lanjut dengan menemukan berbagai referensi untuk membantumu dalam mempersiapkan tempat PKL yang sesuai dan cocok untuk dijadikan tempat PKL mu ! Jangan salah pilih ya !</span>
            <a href="#about" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div><!-- End Team Member -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member d-flex align-items-start mt-5">
          <div class="pic"><img src="{{ asset('dashboard/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <span>Tempat PKL</span><br>
            <h1>129</h1>
          </div>
        </div>
      </div><!-- End Team Member -->
    </div>

  </div>

</section>
@endsection
{{-- @if (auth()->user()->role === 'Admin') 
    <h1>Hai {{auth()->user()->name}} !</h1>
@elseif (auth()->user()->role === 'Hubin') 
    <h1>Assalamu'alaikum {{auth()->user()->name}} !</h1>
@elseif (auth()->user()->role === 'Alumni') 
    <h1>Konnichiwa {{auth()->user()->name}} !</h1>
@else
    <h1>Sampurasun {{auth()->user()->name}} !</h1>
@endif
<br>
<a href="{{route('logout')}}">Logout</a>
<br>
<p>sidebar</p>
<a href="{{ route('info') }}">info</a>
<a href="{{ route('form') }}">form</a>
<a href="{{ route('tempat') }}">tempat</a>
<a href="{{ route('register') }}">register</a>  --}}
