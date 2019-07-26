import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule} from '@angular/common/http';
import { FormsModule } from '@angular/forms';


import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { RegistroTutoresComponent } from './registro-tutores/registro-tutores.component';
import { RegistroEmpresasComponent } from './registro-empresas/registro-empresas.component';
import { VincularEstudianteEmpresaComponent } from './vincular-estudiante-empresa/vincular-estudiante-empresa.component';
import { ListaVinculadosComponent } from './lista-vinculados/lista-vinculados.component';

@NgModule({
  declarations: [
    AppComponent,
    RegistroTutoresComponent,
    RegistroEmpresasComponent,
    VincularEstudianteEmpresaComponent,
    ListaVinculadosComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
