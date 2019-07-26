import { Component, OnInit } from '@angular/core';
import { AsignacionEmpresaService } from '../services/asignacion-empresa.service';
import { IAsigEmpresa } from '../interfaces/IAsigEmpresa';

@Component({
  selector: 'app-lista-vinculados',
  templateUrl: './lista-vinculados.component.html',
  styleUrls: ['./lista-vinculados.component.css']
})
export class ListaVinculadosComponent implements OnInit {

  constructor(
    private empresaService:AsignacionEmpresaService
  ) { }
  
listaAso:IAsigEmpresa[];

  ngOnInit() {
  this.cargarEstudiantes();
}

  cargarEstudiantes(){
    return this.empresaService.getAllEmpresaAsignada()
    .subscribe(tutordesdeWS => this.listaAso = tutordesdeWS,
      error => console.error(error));
  }
}
