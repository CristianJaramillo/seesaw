<!DOCTYPE html>
<html lang="@yield('lang', 'es-MX')">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="author" content="@yield('author')"/>
    <meta name="description" content="@yield('description')"/>
    <title>UPIICSA - @yield('title')</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body>
    
    <nav class="teal darken-4">
      <div class="nav-wrapper">
        <a href="{{ route('home') }}" class="brand-logo">UPIICSA SEESAW</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li>
            <a href="{{ route('home') }}">
              <i class="material-icons left">home</i>Inicio</a>
          </li>
          <li>
            <a href="{{ route('download') }}">
              <i class="material-icons left">cloud_download</i>Descargas</a>
          </li>
          <li>
            <a href="{{ route('upload') }}">
              <i class="material-icons left">cloud_upload</i>Subir</a>
          </li>
          <li>
            <a href="{{ route('sign-in') }}">
              <i class="material-icons left">account_circle</i>Ingresar</a>
          </li>
        </ul>
      </div>
    </nav>

    @yield('content')

    <footer class="teal darken-4">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container white-text">
          © 2014 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>
            
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>

  </body>
</html>
