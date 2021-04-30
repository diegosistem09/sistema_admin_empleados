@if (Session::has('mensaje'));
{{Session::get('mensaje')}}
    
@endif
<a href="{{url('empleado/create')}}">Registrar nuevo empleado</a>
<table class="table table-light" border="1">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Identidad</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Ciudad</th>            
        </tr>
    </thead>
    <tbody>
        
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->nombres}}</td>
            <td>{{$empleado->apellidos}}</td>
            <td>{{$empleado->identidad}}</td>
            <td>{{$empleado->direccion}}</td>
            <td>{{$empleado->telefono}}</td>
            <td>{{$empleado->ciudad_nacimiento}}</td>
            <td>
                <a href="{{url('/empleado/'.$empleado->id.'/edit')}}">Editar</a>
                | 
                
                <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                    @csrf
                    
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Desceas BORRAR?')" value="BORRAR">
                </form>
            </td>
        
        </tr>
        @endforeach

    </tbody>
</table>