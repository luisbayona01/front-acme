import { UsuarioslistarComponent } from './components/usuarioslistar/usuarioslistar.component';
import { ShowusuariosComponent } from './components/showusuarios/showusuarios.component';
import { ShowvehiculosComponent } from './components/showvehiculos/showvehiculos.component';
import { VehiculosComponent } from './components/vehiculos/vehiculos.component';

import {ModuleWithProviders}  from '@angular/core';
import {Routes,RouterModule}  from '@angular/router';
const appRoutes:Routes=[
{path:'',component:UsuarioslistarComponent},
{path:'showuser/:id',component:ShowusuariosComponent},
{path:'vehiculos',component:VehiculosComponent},
{path:'showvehiculos/:id',component:ShowvehiculosComponent}


]

export const appRoutingProviders:any[]=[];
export const routing: ModuleWithProviders<any> = RouterModule.forRoot(appRoutes);
