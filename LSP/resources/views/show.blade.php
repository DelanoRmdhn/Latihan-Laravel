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
      <p class="process-content text-center mt-3 mb-5">Berikan Umpan Balik & Ubah Status Laporan</p>
     
      @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
      @endif      
    
      <div class="container px-4 py-4 mb-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 col-sm-6 shadow rounded px-5" style="border: 1px solid lightblue;">

        <form method="post" action="{{ route('updateStatus', $laporan->id) }}">
          @csrf
          @method('patch')
          
          <div class="input-control my-1">
            <label class="mb-3 mt-3" for="feedback" class="my-2">Umpan Balik : </label>
            <input type="text" class="form-control" id="feedback" name="feedback" value="{{ $laporan->feedback }}">
          </div>
          <div class="input-control my-1">
            <label class="mb-3 mt-3" for="status">Status :</label>
            <select name="status" id="status" class="form-select">
              <option value="pending" @if ($laporan->status == 'pending') selected @endif>Pending</option>
              <option value="progress" @if ($laporan->status == 'progress') selected @endif>On-Progress</option>
              <option value="done" @if ($laporan->status == 'done') selected @endif>Done</option>
            </select>
          </div>
          <br>
          <button type="submit" class="btn btn-primary mt-3 mb-5">Update Data</button>
        </form>
                
        <a type="button" class="mb-5" href="../">Kembali Ke Halaman Admin --> </a>
      </div>
      </div>
      </div>
    </div>
      
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>