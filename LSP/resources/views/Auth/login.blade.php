<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
          <div class="col-md-4">
              <h1>Login Admin</h1>
              <p>Username : Ilham123 <br>Password : password</p>
          </div>
          <div class="col-md-4 col-sm-12 px-3 shadow rounded px-4">
              <form action="{{ url('/login') }}" method="POST">
                  @csrf
                  @if (session('error'))
                      <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                  @endif
                  <div class="input-control my-2">
                    <label for="username">Username:  </label>
                    <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" required autofocus>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    
                  </div>
    
                  <div class="input-control my-2">
                      <label for="password">Password :</label>
                      <input type="password" name="password" class="form-control" required>
                  </div>
                  <div style="float: right;">
                      <button type="submit" class="btn btn-outline-primary my-4 px-4 py-2">Login</button>
                  </div>
              </form>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>