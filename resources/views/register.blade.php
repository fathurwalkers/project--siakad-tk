<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Page</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box mx-auto">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>REGISTER</b></a>
    </div>
    <div class="card-body">

        @if (session('login_fail'))
            <div class="alert alert-danger">
                {{ session('login_fail') }}
            </div>
        @endif

        @if (session('logout_success'))
            <div class="alert alert-info">
                {{ session('logout_success') }}
            </div>
        @endif

      <form action="{{ route('post-login') }}" method="post">
        @csrf
        <div class=
        "input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama lengkap..." name="detail_nama" autofocus autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nomor handphone/telepon..." name="detail_telepon" autofocus autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
            <div class="form-check form-check-inline icheck-primary">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="L">
                <label class="form-check-label" for="inlineCheckbox1"><b>Laki-laki</b></label>
              </div> | &nbsp;&nbsp;
              <div class="form-check form-check-inline icheck-primary">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="P">
                <label class="form-check-label" for="inlineCheckbox2"><b>Perempuan</b></label>
              </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username..." name="login_username" autofocus autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password..." name="login_password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="my-4">
            <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      Remember Me
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">REGISTER</button>
                </div>
                <!-- /.col -->
            </div>
        </div>

        
      </form>
      {{-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> --}}
      <p class="mx-auto my-2">
        <a href="register.html" class="btn btn-info text-center d-flex justify-content-center mx-5 mt-4">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('vendor/adminlte/') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendor/adminlte/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendor/adminlte/') }}/dist/js/adminlte.min.js"></script>
</body>
</html>
