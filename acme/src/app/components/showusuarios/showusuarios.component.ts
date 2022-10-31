import { Component, OnInit } from '@angular/core';

import { HttpClient } from '@angular/common/http';
import { ActivatedRoute } from '@angular/router';
import { Router } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import { Usuarios } from '../../interfaces/usuarios';
import {UsersService} from '../../services/users.service'
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-showusuarios',
  templateUrl: './showusuarios.component.html',
  styleUrls: ['./showusuarios.component.css']
})
export class ShowusuariosComponent implements OnInit {

editform!:FormGroup;
idusuario: any;
bodyForm!: Usuarios; 

  constructor(
      private formBuilder: FormBuilder, 
      private route: ActivatedRoute,
      private httpClient:HttpClient,
      private UsersService:UsersService,
      private router: Router, 
      private toastr: ToastrService
              ) { 
//this.bodyForm=
 }

  ngOnInit(): void {
this.builderForm()
this.showUser();
console.log('Campo form', this.editform)
  }

builderForm(){
    this.editform = this.formBuilder.group({
      numerodecedula:['', []],
      primernombre:['', []],
      segundonombre:['', []],
      apellidos:['', []],
      telefono:['', []],
      ciudad:['', []],
      tipousuario:['', []],
        
    })
  }

showUser(){

  let id:any = this.route.snapshot.paramMap.get("id");
 
 this.UsersService.showuser(id).subscribe( (data:any)=>{

this.idusuario = data.idusuario
  //this.productos=data;
//console.log(data);
this.editform.patchValue({
numerodecedula: data.numerodecedula,
primernombre: data.primernombre,
segundonombre: data.segundonombre,
apellidos: data.apellidos,
telefono: data.telefono,
ciudad: data.ciudad,
tipousuario: data.tipousuario

}) 

},(error)=>{
    console.log(error)
  });

 } 

actualizarEditForm(){
  console.log('enviar formulario', this.editform)
if(this.editform.valid){
  const {
  numerodecedula,
  primernombre,
  segundonombre,
  apellidos,
  telefono,
  ciudad,
  tipousuario
} = this.editform.value

 const bodyForm = {
  numerodecedula,
  primernombre,
  segundonombre,
  apellidos,
  telefono,
  ciudad,
  tipousuario,
  idusuario: this.idusuario
}

this.bodyForm=bodyForm;



console.log('cuerpo del formulario', this.bodyForm, this.idusuario)

this.UsersService.edituser(this.bodyForm,this.idusuario).subscribe( (data:any)=>{

this.toastr.success(data.menssage);
 if(data.ok==true){
this.router.navigate(['']);
}

},(error)=>{
    console.log(error)
  });


}


}

}
