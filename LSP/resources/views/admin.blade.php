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

      <table class="container ms-auto mt-5 table-process">
  <thead>
    <tr>
    <th scope="col" class="table-header">Nomor Pengaduan</th>
    <th scope="col" class="table-header">Aspirasi Warga</th>
    <th scope="col" class="table-header">Umpan Balik Admin</th>
    <th scope="col" class="table-header">Status Penyelesaiaan</th>
    <th scope="col" class="table-header">Edit Data</th>
    </tr>
  </thead>
  <tbody >
    <tr class="table-content">
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
        <select class="form-select form-sett" id="status" name="status">
          <option value="pending">Pending</option>
          <option value="diproses">Diproses</option>
          <option value="selesai">Selesai</option>
        </select>
    </td>
      <td>
      <button type="button" class="btn btn-dark">Tambah Aspirasi</button>
    </td>
  </tr>
  <tr class="table-content">
    <th scope="row">2</th>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
    <td>@mdo</td>
    </tr>
    <tr class="table-content">
      <th scope="row">3</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
<button type="button" class="button my-5" href="#">Simpan Data</button>

<a type="button" class="button my-5" href="#">Lihat Data</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>