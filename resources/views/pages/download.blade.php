@section('content')

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
    	<br><br>
    	<h1 class="header center orange-text">Descarga lo que necesites</h1>
    	<div class="row center">
        	<h5 class="header col s12 light">Encuentra y descarga lo que profesores han compartido</h5>
    	</div>
      
    	<table class="highlight centered">
	        <thead>
	        	<tr>
	            	<th data-field="id">Id</th>
	            	<th data-field="name">Nombre Archivo</th>
	            	<th data-field="created_at">Fecha de creación</th>
	        		<th data-field="url">Descargar</th>
	        	</tr>
	        </thead>

	        <tbody>

	          	@foreach($docs as $doc)

	          		<tr>
		            	<td>{{ $doc->id }}</td>
		            	<td>{{ $doc->name }}</td>
		            	<td>{{ $doc->created_at }}</td>
		            	<td>
			            	<a class="btn-floating btn-large waves-effect waves-light red" href="{{ url('/docs/' . $doc->name) }}"><i class="material-icons">cloud_download</i></a>
			    		</td>			    		
		          	</tr>

	          	@endforeach
	          	
	        </tbody>
	      </table>

    	<br><br>

    </div>
</div>

@endsection