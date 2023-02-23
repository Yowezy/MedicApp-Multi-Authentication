<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ config('app.name', 'MedicApp-v1') }}</title>
  <meta name="keywords" content="MedicApp">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('../assets/img/favicon.ico') }}">

  <!-- Plugins CSS -->
  <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('../assets/css/icofont.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../assets/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('../assets/css/jquery.typeahead.css') }}">
  <link rel="stylesheet" href="{{ asset('../assets/css/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap-select.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../assets/css/Chart.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../assets/css/morris.css') }}">
  <link rel="stylesheet" href="{{ asset('../assets/css/leaflet.css') }}">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">
</head>


<body class="public-layout">
<div class="app-loader main-loader">
  <div class="loader-box">
    <div class="bounceball"></div>
    <div class="text">Medic<span>app</span></div>
  </div>
</div>
<!-- .main-loader -->

<div class="page-box">
  <div class="app-container page-sign-in">
    <div class="content-box">
      <div class="content-header">
        <div class="app-logo">
          <div class="logo-wrap">
            <img src="{{ asset('../assets/img/logo.png') }}"> 
            
            {{-- alt="width="147" height="33" class="logo-img">  --}}
          </div>
        </div>
      </div>
      <form method="POST" action="{{ route('login') }}">
        @csrf
      <br>
      <br>
      <br>
      <div class="content-body">
        <div class="w-100">
          <h3 class="h4 mt-0 mb-1">DASHBOARD - LOGIN </h3>
          <p class="text-muted">Access your dashboard</p>
{{-- Email log in  --}}
          <form>
            <div class="form-group">
                <label for="email" class="form-control">
                <input id="email" type="email" class="form-control" placeholder="Email Address" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></label>
                
                 <div 
                 @error('email') is-invalid @enderror
                  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> 
            </div>

            <div class="form-group">
                <label for="password" class="form-control" type="password">
                    <input  placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"></label>

                <div class="col-md-6">
                    

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- <div class="form-check form-switch mb-4">
              <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
            </div> --}}

            <div class="actions justify-content-between">
              <button class="btn btn-primary">
                <span class="btn-icon icofont-login me-2"></span>{{ __('Login') }}
              </button>
            </div>
          </form>
{{--           
          @if (Route::has('password.request'))
          <p class="mt-5 mb-1"><a href="{{ route('password.request') }}">
            {{ __('Forgot Password?') }}</a></p>
            @endif --}}
          {{-- <p>Don't have an account? <a href="{{ __('Login') }}">Sign up!</a></p> --}}
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

<script src="{{ asset('../assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('../assets/js/jquery-migrate-1.4.1.min.js') }}"></script>
<script src="{{ asset('../assets/js/popper.min.js') }}"></script>
<script src="{{ asset('../assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('../assets/js/jquery.typeahead.min.js') }}"></script>
<script src="{{ asset('../assets/js/datatables.min.js') }}"></script>
<script src="{{ asset('../assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('../assets/js/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('../assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('../assets/js/raphael-min.js') }}"></script>
<script src="{{ asset('../assets/js/morris.min.js') }}"></script>
<script src="{{ asset('../assets/js/echarts.min.js') }}"></script>
<script src="{{ asset('../assets/js/echarts-gl.min.js') }}"></script>

<script src="{{ asset('../assets/js/main.js') }}"></script>


</body>
</html>
