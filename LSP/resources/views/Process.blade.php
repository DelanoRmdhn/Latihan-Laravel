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
<table class="container ms-auto mt-5 table-process mb-5">
  <thead>
    <tr>
      <th scope="col" class="table-header">Nomor Pengaduan</th>
      <th scope="col" class="table-header">NIS Pelapor</th>
      <th scope="col" class="table-header">Kategori Aspirasi</th>
      <th scope="col" class="table-header">Aspirasi</th>
      <th scope="col" class="table-header">Lokasi Kejadian</th>
      <th scope="col" class="table-header">Keterangan</th>
      <th scope="col" class="table-header">Gambar Bukti</th>
      <th scope="col" class="table-header">Status</th>
    </tr>
  </thead>
  <tbody >
    @forelse ($laporan as $key => $data)
    <tr class="table-content">
        <td>{{ $key + 1 }}</td>
        <td>{{ $data->nis }}</td>
        <td>{{ $data->category->ket_kategori }}</td>
        <td>{{ $data->aspirasi }}</td>
        <td>{{ $data->lokasi_kejadian }}</td>
        <td>{{ $data->keterangan }}</td>
        <td>
          <img src="{{ asset($data->gambar_kejadian) }}" width="100px">
        </td>
        <td>
            <b>
                <span class="badge rounded-pill py-2 px-4
                            @if ($data->status == 'pending') bg-danger
                            @elseif($data->status == 'progress') bg-warning
                            @elseif($data->status == 'done') bg-success @endif">
                    {{ $data->status }}
                </span>
            </b>
        </td>
    </tr>
    @empty
    @endforelse
  </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>