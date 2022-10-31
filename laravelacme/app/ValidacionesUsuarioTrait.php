<?php
namespace App;
use App\Models\Usuario;
use Symfony\Component\HttpFoundation\Request;
  trait  ValidacionesUsuarioTrait{

  public   function  validateexistuser($request){
$error=[];  

$usuario= Usuario::where('numerodecedula',$request->numerodecedula)->first();

if (isset($usuario)){
//dd($usuario);
$error[]="este usuario ya existe en la bd";
}

return $error;
}




}


