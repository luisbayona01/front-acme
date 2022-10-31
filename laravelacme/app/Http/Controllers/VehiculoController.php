<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Models\Usuario;
use DB;
use PhpParser\Node\Expr\AssignOp\Concat;

class VehiculoController extends Controller
{
    
    public function listar()
    {
        $vehiculosusuarios = DB::table('vw_vehiculosusarios')->get();  
        return $vehiculosusuarios;     
        
    }


 public  function tipousuario(){
//$tipouusario=$request->tipousuario;

$usuariosTipos= Usuario:: join('tipousuario', 'tipousuario.idtipousuario', '=', 'usuario.tipousuario')
        ->get(['usuario.idusuario',  'usuario.primernombre as nombre','usuario.apellidos', 'tipousuario.tipousuario' ]);


return  $usuariosTipos;
}
    
    public function store(Request $request)
    {
       
       $arraysave=$request->all();

        $vehiculo = Vehiculo::create($arraysave);
           
      $menssage="vehiculo registrado correctamente";
        return response()->json([
            'ok'    => true,
            'menssage'  => $menssage
           
        ]);
    }

  
    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);
        return $vehiculo;
      
    }

    

    public function updateVehiculo($id, Request $request)
    {  
           $arrayupdate = $request->all();
     Vehiculo::where("idvehiculos", $id)->update($arrayupdate);
      
 $menssage="vehiculo actualizado correctamente";
        return response()->json([
            'ok'    => true,
            'menssage'  => $menssage
           
        ]);
        
    }

    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id)->delete();
         $menssage="vehiculo eliminado correctamente";
        return response()->json([
            'ok'    => true,
            'menssage'  => $menssage
           
        ]);
       
    }
}
