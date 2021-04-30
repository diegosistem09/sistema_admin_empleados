<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<h1>{{$modo}} empleado</h1>

<label for="Nombre">Nombres</label>
<input type="text" name="nombres" value="{{isset($empleado->nombres) ? $empleado->nombres : ''}}">
<br>
<label for="Nombre">Apellidos</label>
<input type="text" name="apellidos" value="{{isset($empleado->apellidos) ? $empleado->apellidos : ''}}">
<br>
<label for="Nombre">Identidad</label>
<input type="text" name="identidad" value="{{isset($empleado->identidad) ? $empleado->identidad : ''}}">
<br>
<label for="Nombre">Direccion</label>
<input type="text" name="direccion" value="{{isset($empleado->direccion) ? $empleado->direccion : ''}}">
<br>
<label for="Nombre">telefono</label>
<input type="text" name="telefono" value="{{isset($empleado->telefono) ? $empleado->telefono : ''}}">
<br>

<div class="form-group">
    <label for="title">Seleccione pais:</label>
    <select name="pais" class="form-control">
        <option value="">Seleccione pais</option>
        @foreach ($pais as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="title">Seleccione Ciudad:</label>
    <select name="ciudad_nacimiento" class="form-control">
    </select>
</div>

<!--<label for="Nombre">Ciudad de Nacimiento</label>
<input type="text" name="ciudad_nacimiento" value="{{isset($empleado->ciudad_nacimiento) ?  $empleado->ciudad_nacimiento : ''}}">-->

<input type="submit" value="{{$modo}}">

<script type="text/javascript">

	function pais_ciudad(){		
		 return new Promise(function(resolve, reject) {
    var req = new XMLHttpRequest();
        req.open('GET', 'http://localhost/sistema_empleados.com/public/ciudad/1');

        req.onload = function() {
          if (req.status == 200) {
            resolve(JSON.parse(req.response));

          }
          else {
            reject();
          }
        };

        req.send();
    })
	}

     $(document).ready(function() {    	
        $('select[name="pais"]').on('change', function() {
            var paisID = $(this).val();            
            
            if(paisID) {            	
            	
                $.ajax({
                    url: 'http://localhost/sistema_empleados.com/public/ciudad/1',
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                    	console.log("iniciando Datos" +data);
                    	
                    	$.each(data, function(key, value) 
                    	{
                    		console.log('llave ->'+key);
                    		console.log('Valor ->'+value);

                    		$('select[name="ciudad_nacimiento"]').append('<option value="'+ key +'">'+ value +'</option>');
                        $('select[name="ciudad_nacimiento"]').append('<option value="1">¨rueba</option>');
                    	});
                }

                });
            }else{

                console.log('HAY UN ERROR');
                $('select[name="ciudad_nacimiento"]').empty();

            }
        });
    
     });
</script>