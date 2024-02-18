<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <link rel="stylesheet" href={{ asset('css/style.css')}}>
  </head>
  <body>
    
    <div class="bg-top-lapor" style="height: 100px;"></div>
    <div class="container">

      <h3 class="subtittle text-center mt-5 process-subtittle">DAFTAR PENGADUAN MASYARAKAT</h3>
      <p class="process-content text-center mt-3">Data - Data Pengaduan & Aspirasi Warga </p>
<!-- TABLE ADMIN -->

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

  <table class=" ms-auto mt-5 table-process mb-5">
    <thead>
      <tr class="table-header text-centerP">
        <th scope="col" class="table-header">Nomor</th>
        <th scope="col" class="table-header">NIS Pelapor</th>
        <th scope="col" class="table-header">Kategori Aspirasi</th>
        <th scope="col" class="table-header">Aspirasi</th>
        <th scope="col" class="table-header">Lokasi Kejadian</th>
        <th scope="col" class="table-header">Keterangan</th>
        <th scope="col" class="table-header">Gambar Bukti</th>
        <th scope="col" class="table-header">Status Penyelesaiaan</th>
        <th scope="col" class="table-header">Umpan Balik</th>
        <th scope="col" class="table-header" colspan="3">Aksi</th>
      </tr>
    </thead>
    <tbody >
      @forelse ($laporan as $key => $data)
      <tr class="table-content text-center">
          <td>{{ $key + 1 }}</td>
          <td>{{ $data->siswa->nis }}</td>
          <td>{{ $data->category->ket_kategori }}</td>
          <td>{{ $data->aspirasi }}</td>
          <td>{{ $data->lokasi_kejadian }}</td>
          <td>{{ $data->keterangan }}</td>
          <td>
            <img src="{{ asset($data->gambar_kejadian) }}" width="75px">
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
          <td>{{ $data->feedback }}</td>
          <td>
            <a href="{{ route('show', ['id' => $data->id]) }}" class="btn btn-success">Lihat</a>
          </td>
          <td>
            <form action="{{ route('destroy', $data->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </td>   
      </tr>
      @empty
      @endforelse
    </tbody>
  </table>

  <div class="d-flex my-5">

    <form action="{{ route('logout') }}" method="post">
      @csrf
      <button type="submit" class="button">Logout</button>
    </form>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>