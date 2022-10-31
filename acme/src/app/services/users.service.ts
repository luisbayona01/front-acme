import { Injectable } from '@angular/core';
import {HttpClient,HttpHeaders} from '@angular/common/http';
import { Usuarios } from '../interfaces/usuarios';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class UsersService {

  constructor(private htppClient:HttpClient) { }



listadouser(){
return this.htppClient.get<Usuarios>(environment.Api+'listarusuarios');
}

registrouser(params:any){

 return this.htppClient.post<any>(environment.Api+'registrausuarios',params);
}
showuser(id:string){

 return this.htppClient.get<Usuarios>(environment.Api+'mostrar/'+id);
}
edituser(params:Usuarios,id:any){

const url=environment.Api+'actualizarUsers/'+id;
 console.log(url)
 return this.htppClient.post<Usuarios>(url, params);
}

}
