<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>
      @yield('title')
    </title>
  </head>
  <body>
      <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container" style="font-size: 18px">  
            <a class="navbar-brand" href="{{ url('/')}}">LOGO</a>            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav justify-content-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/lahan')}}">Lahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/aktivitas')}}">Aktivitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/permintaan')}}">Permintaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/keuangan')}}">Keuangan</a>
                    </li>
                </ul>
                   
                <ul class="nav center-content-end" style="margin-left: 36%">
                    <li class="nav-item">
                        <a class="nav-link" href="#">NOTIF</a>
                    </li>
                    <li class="nav-item">
                    @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                                <li class="nav-item">

@if (Route::has('register'))
    <a href="{{ route('register') }}" class="nav-link">Register</a>
@endif
                                </li>
                                <li class="nav-item">
                            @endif
                    @endif
                    </li>
                </ul>                            
            </div>
          </div>
        </nav>
        
      @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>