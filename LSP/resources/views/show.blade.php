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
      <h3 class="subtittle text-center mt-5 process-subtittle">BALAS PENGADUAN MASYARAKAT</h3>
      <p class="process-content text-center mt-3">Data - Data Pengaduan & Aspirasi Warga </p>
     
      @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
      @endif      
      
      <table class=" ms-auto mt-5 table-process mb-5">
              <thead>
                <tr>
                  <th scope="col" class="table-header">Nomor Pengaduan</th>
                  <th scope="col" class="table-header">NIS Pelapor</th>
                  <th scope="col" class="table-header">Kategori Aspirasi</th>
                  <th scope="col" class="table-header">Aspirasi</th>
                  <th scope="col" class="table-header">Lokasi Kejadian</th>
                  <th scope="col" class="table-header">Keterangan</th>
                  <th scope="col" class="table-header">Gambar Bukti</th>
                  <th scope="col" class="table-header">Status Penyelesaiaan</th>
                  <th scope="col" class="table-header" colspan="3">Aksi</th>
                </tr>
              </thead>
              <tbody >
                <tr class="table-content">
                  <td>{{ $laporan->id }}</td>
                  <td>{{ $laporan->nis }}</td>
                  <td>{{ $laporan->category->ket_kategori }}</td>
                  <td>{{ $laporan->aspirasi }}</td>
                  <td>{{ $laporan->lokasi_kejadian }}</td>
                  <td>{{ $laporan->keterangan }}</td>
                  <td>
                    <img src="{{ asset($laporan->gambar_kejadian) }}" width="100px">
                  </td>
                  <td>
                    <b>
                      <span class="badge rounded-pill py-2 px-4
                      @if ($laporan->status == 'pending') bg-danger
                      @elseif($laporan->status == 'progress') bg-warning
                      @elseif($laporan->status == 'done') bg-success @endif">
                      {{ $laporan->status }}
                    </span>
                  </b>
                  </td>
                  <td>
                    <form method="post" action="{{ route('updateStatus', $laporan->id) }}">
                      @csrf
                      @method('patch')
                      <label for="status">Status:</label>
                      <select name="status" id="status" class="form-select">
                          <option value="pending" @if ($laporan->status == 'pending') selected @endif>Pending</option>
                          <option value="progress" @if ($laporan->status == 'progress') selected @endif>On-Progress</option>
                          <option value="done" @if ($laporan->status == 'done') selected @endif>Done</option>
                      </select>
                      <br>
                      <button type="submit" class="btn btn-primary mt-3">Update Status</button>
                  </form>
                  </td> 
          
      </tr>
  </tbody>
</table>

<a type="button" class="button" href="../">Kembali</a>
</div>    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>