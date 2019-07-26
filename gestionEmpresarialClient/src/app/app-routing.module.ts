import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { RegistroTutoresComponent } from './registro-tutores/registro-tutores.component';
import { RegistroEmpresasComponent } from './registro-empresas/registro-empresas.component';
import { VincularEstudianteEmpresaComponent } from './vincular-estudiante-empresa/vincular-estudiante-empresa.component';
import { ListaVinculadosComponent } from './lista-vinculados/lista-vinculados.component';

const routes: Routes = [
  {path: '', component: RegistroTutoresComponent},
  {path: 'registroEmpresas', component: RegistroEmpresasComponent},
  {path: 'registroEstudiantes', component: VincularEstudianteEmpresaComponent},
  {path: 'lista', component: ListaVinculadosComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
