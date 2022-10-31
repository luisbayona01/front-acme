<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\ValidacionesUsuarioTrait;
class UsuarioController extends Controller
{
    use  ValidacionesUsuarioTrait;
    public function listar()
    {
        $usuarios = Usuario::all();

        return $usuarios;

    }
       
    public function store(Request $request)
    {  

$error=$this->validateexistuser($request); 
if(count($error)==0){
  $usuario = Usuario::create($request->all());
       

 $menssage="usuario creado correctamente";
        return response()->json([
            'ok'    => true,
            'menssage'  => $menssage
           
        ]);
  
}else{
 //$menssage="usuario creado correctamente";
        return response()->json([
            'ok'    => false,
            'menssage'  => implode(' ', $error)
           
        ]);
  

}   

        
    }

    
    public function show($id)
    {
        $usuario = Usuario::find($id);

       return $usuario;
    }

    

      public function update($id,Request $request)
    {
         $arrayupdate = $request->all();
     Usuario::where("idusuario", $id)->update($arrayupdate);

         $menssage="usuario actualizado correctamente";
        return response()->json([
            'ok'    => true,
            'menssage'  => $menssage
           
        ]);
    }

    
    public function destroy($id)
    {
        $usuario = Usuario::find($id)->delete();

         $menssage="usuario eliminado correctamente";
        return response()->json([
            'ok'    => true,
            'menssage'  => $menssage
           
        ]);
    }
}
