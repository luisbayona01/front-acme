import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { HttpClientModule } from '@angular/common/http';
import {routing,appRoutingProviders} from './app.routing';
import { CommonModule } from '@angular/common';
import { AppComponent } from './app.component';
import { UsuarioslistarComponent } from './components/usuarioslistar/usuarioslistar.component';
import { ShowusuariosComponent } from './components/showusuarios/showusuarios.component';
import { ShowvehiculosComponent } from './components/showvehiculos/showvehiculos.component';
import { VehiculosComponent } from './components/vehiculos/vehiculos.component';
import { ToastrModule, ToastNoAnimation, ToastNoAnimationModule } from 'ngx-toastr';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
@NgModule({
  declarations: [
    AppComponent,
    UsuarioslistarComponent,
    ShowusuariosComponent,
    ShowvehiculosComponent,
    VehiculosComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    ToastrModule.forRoot(), // required animations module
    HttpClientModule,
    routing,
    FormsModule, 
    ReactiveFormsModule



  ],
  providers: [appRoutingProviders],
  bootstrap: [AppComponent]
})
export class AppModule { }
