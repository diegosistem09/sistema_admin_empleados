<form action="{{url('/empleado/'.$empleado->id)}}" method="post">
    <!--llave de seguridad interno delaravel-->
    @csrf
    {{method_field('PATCH')}}
    @include('empleado.form',['modo'=> 'Editar']);
    
    
</form>