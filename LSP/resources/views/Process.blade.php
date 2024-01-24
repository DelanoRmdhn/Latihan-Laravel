<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
  </head>
  <body>

  <!-- NAVBAR -->
  @include('layouts.mainNavbar')  

<h3 class="subtittle text-center mt-5 process-subtittle">PROSES PENGADUAN & ASPIRASI WARGA</h3>
<p class="process-content text-center mt-3">Masukan Nomor Pengaduan untuk melihat Perkembangan pengaduan Anda</p>

<!-- SEARCH BAR -->
@include('layouts.searchBarProcess')


<!-- TABLE DATA  -->
@include('layouts.processTable')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>