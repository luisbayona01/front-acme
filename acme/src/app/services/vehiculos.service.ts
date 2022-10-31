import { Injectable } from '@angular/core';
import {HttpClient,HttpHeaders} from '@angular/common/http';
import { UsuariosVehiculos} from '../interfaces/usuariosvehiculos';
import { environment } from 'src/environments/environment';
import { TipoUsuarios } from '../interfaces/tipousuarios';
import {Vehiculos} from '../interfaces/vehiculos'
 
@Injectable({
  providedIn: 'root'
})

export class VehiculossService {

  constructor(private htppClient:HttpClient) { }

listarvehiculos(){

  return this.htppClient.get<UsuariosVehiculos>(environment.Api+'listarvehiculos',{
 
    })
}


listartipousuario(){

  return this.htppClient.get<TipoUsuarios>(environment.Api+'usuariostipos',{
 
    });

}

registrovehiculo(params:any){

 return this.htppClient.post<any>(environment.Api+'registrovehiculo',params);
}

showvehiculo(id:any){

 return this.htppClient.get<any>(environment.Api+'/showvehiculos/'+id);
}

}


