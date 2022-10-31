import { formatDate } from '@angular/common';
import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import { Usuarios } from '../../interfaces/usuarios';
import {UsersService} from '../../services/users.service'
@Component({
  selector: 'app-usuarioslistar',
  templateUrl: './usuarioslistar.component.html',
  styleUrls: ['./usuarioslistar.component.css']
})
export class UsuarioslistarComponent implements OnInit {
  usuario: Usuarios[]=[];
  constructor(private httpClient:HttpClient,private UsersService:UsersService,private router: Router, private toastr: ToastrService) { }

  ngOnInit(): void {
this.loadusuarios();  
}


loadusuarios(){
this.UsersService.listadouser().subscribe( (data:any)=>{
 this.usuario=data 

//console.log(this.usuario)

},(error)=>{
    console.log(error)
  });

}


RegistrarUser(){

let selector: any;

 selector =  document.querySelector('#registrarUser');
  let isValid = selector.reportValidity();
 if (isValid==false) {  
  let element:any;
  element = document.getElementById("registrarUser");
  element.classList.add("was-validated");
}else{
//let registeruser:any= document.getElementById('registrarUser');
const formData = new FormData(selector);
this.UsersService.registrouser(formData).subscribe( (data:any)=>{
 //this.usuario=data 
if(data.ok==false){
this.toastr.warning(data.menssage); 
//console.log('mal')
}else{
this.toastr.success(data.menssage); 
}
this.loadusuarios();
let form= <HTMLFormElement> document.getElementById("registrarUser");
form.reset();

//console.log(this.usuario)

},(error)=>{
    console.log(error)
  });
}
}


}
