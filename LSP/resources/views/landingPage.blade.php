<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LaporAja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  
@include('layouts.mainNavbar')
<div class="landing-page container">
  <div class="row align-items-center justify-content-center">
    <div class="col-6">
      <h1 class="title">Layanan Pengaduan Masyarakat</h1>
      <p class="subtitle">Sampaikan aspirasi dan pengaduan, kami akan memberikan solusi dari laporan anda, dan jelajahi galeri kegiatan yang warga lakukan di LaporAja.</p>

      <div class="d-flex">
      <a class="button" href="#report">Lapor Sekarang!</a>
      <a class="button " href="process">Status Laporan </a>
      </div>
    </div>
    <div class="col-6">
      <img src={{ asset('image/landingPage.webp')}} style="width: 75%;" alt="">
    </div>
  </div>
</div>

<div class="bg-color-gallery">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col">
        <h3 class="subtittle" id="gallery">GALERI KEGIATAN</h3>
        <h1 class="tittle">Momen - Momen Istimewa Warga</h1>
        
        <div class="testimonials-gallery">
          <figure class="testimonials-gap row row-cols-2">
            <div class="col">
            <div class="d-flex flex-column mb-3">
              <div class="p-2"><img src={{ asset('image/customer-1.jpg')}} style="width: 64px;" class=""></div>
              <blockquote class="p-2" style="color: #555;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, et neque. Qui, molestiae veritatis! Mollitia saepe officia labore aut quod?</blockquote>
              <div class="p-2" style="color: #555;">— Jonnah Smith</div>
            </div>
            </div>
            <div class="col">
            <div class="d-flex flex-column mb-3">
              <div class="p-2"><img src={{ asset('image/customer-4.jpg')}} style="width: 64px;" class=""></div>
              <blockquote class="p-2" style="color: #555;">deleniti eligendi eos accusamus quam. Vel nam cumque ipsa odio, saepe excepturi dolorum illum quo, ex reprehenderit delectus infagus sofarira</blockquote>
              <div class="p-2" style="color: #555;">— David Foster</div>
            </div>
            </div>
            <div class="col">
            <div class="d-flex flex-column mb-3">
              <div class="p-2"><img src={{ asset('image/customer-2.jpg')}} style="width: 64px;" class=""></div>
              <blockquote class="p-2" style="color: #555;">Lorem ipsum dolor sit amet consectetur, adipisicing elit kuridel assap. </blockquote>
              <div class="p-2" style="color: #555;">— Ilham Kurniawan</div>
            </div>
            </div>
            <div class="col">
            <div class="d-flex flex-column mb-3">
              <div class="p-2"><img src={{ asset('image/customer-3.jpg')}} style="width: 64px;" class=""></div>
              <blockquote class="p-2" style="color: #555;">A, et neque. Qui, molestiae veritatis! Mollitia saepe officia labore aut quod?</blockquote>
              <div class="p-2" style="color: #555;">— Jonnah Smith</div>
            </div>
            </div>

          </figure>
        </div>
        
      </div>
      
      <div class="col">
        <div class="gallery">
          <div class="testimonials-gap row row-cols-2">
            <div class="col"><img src={{ asset('image/Galeri1.jpg') }} class="img-fluid" alt=""></div>
            <div class="col"><img src={{ asset('image/Galeri2.jpg') }} class="img-fluid" alt=""></div>
            <div class="col"><img src={{ asset('image/Galeri4.jpg') }} class="img-fluid" alt=""></div>
            <div class="col"><img src={{ asset('image/Galeri3.jpg') }} class="img-fluid" alt=""></div>
            <div class="col"><img src={{ asset('image/Galeri5.jpg') }} class="img-fluid" alt=""></div>
            <div class="col"><img src={{ asset('image/Galeri6.jpg') }} class="img-fluid" alt=""></div>
          </div>            
        </div>
      </div>
    </div>
  </div>
</div>
  
  <div class="bg-top-lapor"></div>
<div class="container">
  <h1 class="subtittle text-center mt-5" id="report">LAPOR SEKARANG</h1>
  <p class="tittle text-center mt-3">Adukan keluhan, Dapatkan Solusi!</p>
</div>

<div class="report">
  @include('layouts.form')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
