<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Cargo;
use DB;

class EmpleadoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        

        $datos['empleados'] = Empleado::paginate(10);
        
        #return view('empleado.index',$datos,'pais'=>$pais);

        return view('empleado.index', $datos);

        #return view('empleado.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$pais = DB::table("pais")->pluck('nombre','id');

        return view('empleado.create')->with('pais', $pais);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //       

        $datosEmpleado = request()->except('_token','pais');
        Empleado::insert($datosEmpleado);       

        return redirect('empleado')->with('mensaje','Empleado Registrado con exito');
     
    }

    
    public function show(empleado $empleado)
    {
        return "Inciiando show";

    }

    public function edit($id)
    {
    	$pais = DB::table("pais")->pluck('nombre','id');
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', ['empleado' => $empleado,'pais'=>$pais]);
        #return view('empleado.edit', compact('empleado'));
    }

    public function update(Request $request, $id)
    {
        $datosEmpleado = request()->except('_token','_method','pais');
        Empleado::where('id','=',$id)->update($datosEmpleado);
        $pais = DB::table("pais")->pluck('nombre','id');

        $empleado = Empleado::findOrFail(1);
        #return view('empleado.edit', compact('empleado'));
        return view('empleado.edit', ['empleado' => $empleado,'pais'=>$pais]);
    }

    
    public function destroy($id)
    {
        Empleado::destroy($id);
        #return redirect('empleado');
        return redirect('empleado')->with('mensaje','Empleado Borrado');
    }

    public function pais()
    {
        $pais = DB::table("pais")->pluck('nombre','id');        
        return view('empleado.index',compact('pais'));
    }

    public function ciudad($id)
    {
        $cities = DB::table("ciudads")
                    ->where("id_pais",$id)
                    ->pluck('nombre','id');
        return json_encode($cities);
    }


}
