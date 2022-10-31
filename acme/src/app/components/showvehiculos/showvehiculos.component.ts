import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { ActivatedRoute } from '@angular/router';
import { Router } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import {Vehiculos} from '../../interfaces/vehiculos'
import {VehiculossService} from '../../services/vehiculos.service'
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
@Component({
  selector: 'app-showvehiculos',
  templateUrl: './showvehiculos.component.html',
  styleUrls: ['./showvehiculos.component.css']
})
export class ShowvehiculosComponent implements OnInit {
editform!:FormGroup;
idvehiculo: any;
bodyForm!: Vehiculos; 

  constructor(  private formBuilder: FormBuilder, 
      private route: ActivatedRoute,
      private httpClient:HttpClient,
      private VehiculossService:VehiculossService,
      private router: Router, 
      private toastr: ToastrService) { }

  ngOnInit(): void {
 
this.builderForm();
this.showvehiculos();
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
showvehiculos(){
let id:any = this.route.snapshot.paramMap.get("id");

}

}
