import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { Router } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import { UsuariosVehiculos} from '../../interfaces/usuariosvehiculos';
import {VehiculossService} from '../../services/vehiculos.service'
import { TipoUsuarios } from '../../interfaces/tipousuarios';
@Component({
  selector: 'app-vehiculos',
  templateUrl: './vehiculos.component.html',
  styleUrls: ['./vehiculos.component.css']
})
export class VehiculosComponent implements OnInit {
  usuariosvehiculos: UsuariosVehiculos[]=[];
 tipoUsuarios: TipoUsuarios[]=[];
  constructor(private httpClient:HttpClient,private VehiculosService:VehiculossService,private router: Router, private toastr: ToastrService) { }

  ngOnInit(): void {

this.loadvehiculos();
this.loadtippouser();
  }

loadvehiculos(){
this.VehiculosService.listarvehiculos().subscribe( (data:any)=>{
 this.usuariosvehiculos=data 

//console.log(this.vehiculos)

},(error)=>{
    console.log(error)
  });

}

loadtippouser(){

this.VehiculosService.listartipousuario().subscribe( (data:any)=>{
 this.tipoUsuarios=data 

//console.log(this.vehiculos)

},(error)=>{
    console.log(error)
  });


}

savevehiculo(){
let selector: any;

 selector =  document.querySelector('#registrovehiculo');
  let isValid = selector.reportValidity();
 if (isValid==false) {  
  let element:any;
  element = document.getElementById("registrovehiculo");
  element.classList.add("was-validated");
}else{
//let registeruser:any= document.getElementById('registrarUser');
const formData = new FormData(selector);
this.VehiculosService.registrovehiculo(formData).subscribe( (data:any)=>{
 //this.usuario=data 
if(data.ok==false){
this.toastr.warning(data.menssage); 
//console.log('mal')
}else{
this.toastr.success(data.menssage); 
}
this.loadvehiculos();
let form= <HTMLFormElement> document.getElementById("registrovehiculo");
form.reset();


//console.log(this.vehiculos)

},(error)=>{
    console.log(error)
  });
}

}


}
