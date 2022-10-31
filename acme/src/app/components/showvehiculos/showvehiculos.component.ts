import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { ActivatedRoute } from '@angular/router';
import { Router } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import {Vehiculos} from '../../interfaces/vehiculos'
import {VehiculossService} from '../../services/vehiculos.service'
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { TipoUsuarios } from '../../interfaces/tipousuarios';
@Component({
  selector: 'app-showvehiculos',
  templateUrl: './showvehiculos.component.html',
  styleUrls: ['./showvehiculos.component.css']
})
export class ShowvehiculosComponent implements OnInit {
editform!:FormGroup;
idvehiculo: any;
bodyForm!: Vehiculos; 
 tipoUsuarios: TipoUsuarios[]=[];

  constructor(  private formBuilder: FormBuilder, 
      private route: ActivatedRoute,
      private httpClient:HttpClient,
      private VehiculossService:VehiculossService,
      private router: Router, 
      private toastr: ToastrService) { }

  ngOnInit(): void {
 this.loadtippouser();
this.builderForm();
this.showvehiculos();

console.log('Campo form', this.editform)


 }


builderForm(){
    this.editform = this.formBuilder.group({
      placa:['', []],
      color:['', []],
      marca:['', []],
      tipodevehiculo:['', []],
      idusuariovehiculo:['', []],
      })
  }
showvehiculos(){
let id:any = this.route.snapshot.paramMap.get("id");
 
 this.VehiculossService.showvehiculo(id).subscribe( (data:any)=>{

this.idvehiculo = data.idvehiculos

  //this.productos=data;
//console.log(data);
this.editform.patchValue({
placa: data.placa,
color: data.color,
marca: data.marca,
tipodevehiculo: data.tipodevehiculo,
idusuariovehiculo: data.idusuariovehiculo,


}) 

},(error)=>{
    console.log(error)
  });
}

actualizarEditForm(){
  console.log('enviar formulario', this.editform)
if(this.editform.valid){
  const {
  placa,
  color,
  marca,
  tipodevehiculo,
  idusuariovehiculo
} = this.editform.value

 const bodyForm = {
  placa,
  color,
  marca,
  tipodevehiculo,
  idusuariovehiculo,
  idvehiculos: this.idvehiculo
}

this.bodyForm=bodyForm;



console.log('cuerpo del formulario', this.bodyForm, this.idvehiculo)

this.VehiculossService.editvehiculo(this.bodyForm,this.idvehiculo).subscribe( (data:any)=>{

this.toastr.success(data.menssage);
 if(data.ok==true){
this.router.navigate(['vehiculos']);
}

},(error)=>{
    console.log(error)
  });


}


}

loadtippouser(){

this.VehiculossService.listartipousuario().subscribe( (data:any)=>{
 this.tipoUsuarios=data 

//console.log(this.vehiculos)

},(error)=>{
    console.log(error)
  });


}


}
