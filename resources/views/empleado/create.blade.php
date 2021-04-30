<a href="{{url('empleado')}}">Regresar</a>
<form action="{{url('/empleado')}}" method="post">
    <!--llave de seguridad interno delaravel-->
    @csrf
    @include('empleado.form',['modo'=> 'Create']);
    
    
</form>
