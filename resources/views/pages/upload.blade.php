@section('content')

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
    	<br><br>
    	<h1 class="header center orange-text">Sube lo que desees compartir</h1>
    	<div class="row center">
        	<h5 class="header col s12 light">Recuerda que al compartir, podrá ser descargado por cualquiera que ingrese al sitio</h5>
    	</div>
    	<div class="caja center">
       		<form method="post" action="{{ route('store') }}" enctype="multipart/form-data" class="col s6 m6 l6">

                {{ csrf_field() }}

                <div class="file-field input-field">
                    <div class="btn">
                        <span>Archivo</span>
                        <input type="file" name="upload_doc" />
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Sube un archivo">
                    </div>
                </div>

        		<input type="submit" value="Subir Archivo" id="download-button" class="btn-large waves-effect waves-light orange" />
        	</form>

            <br/>
            <br/>

      </div>
    </div>
</div>

@endsection