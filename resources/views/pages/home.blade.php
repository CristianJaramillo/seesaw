@section('content')

	<div class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          
          <h1 class="header center white-text">
            TU ESCUELA EN UN SOLO LUGAR
          </h1>
          <div class="row center">
            <h5 class="header col s12 light white-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.    
            </h5>
          </div>

        </div>
      </div>
      <div class="parallax">
        <img src="{{ asset('img/background-one.jpg') }}" alt="Unsplashed background img 2"/>
      </div>
    </div>

    <div class="container">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          
          <div class="col s12 m6">
            <div class="icon-block">
              <h2 class="center light-blue-text">
                <i class="material-icons">call_made</i>
              </h2>
              <div class="row center">
                <a href="{{ route('upload') }}" id="upload-button" class="btn-large waves-effect waves-light orange lighten-1">Subir archivos</a>
              </div>
              <h5 class="center">Opción sólo para profesores</h5>
            </div>
          </div>

          <div class="col s12 m6">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">call_received</i></h2>
              <div class="row center">
                <a href="{{ route('download') }}" id="download-button" class="btn-large waves-effect waves-light orange lighten-1">Descargar archivos</a>
              </div>
              <h5 class="center">Opción para todos</h5>
            </div>
          </div>
          
        </div>

      </div>
    </div>

    <div class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <h1 class="header center white-text">
            ¿QUÉ ES UPIICSA SEESAW?
          </h1>
          <div class="row center">
            <h5 class="header col s12 light white-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.    
            </h5>
          </div>
        </div>
      </div>
      <div class="parallax">
        <img src="{{ asset('img/background-two.jpg') }}" alt="Unsplashed background img 2">
      </div>
    </div>

@endsection