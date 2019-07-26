import { Component, OnInit } from '@angular/core';
import { IEmpresa } from '../interfaces/IEmpresa';
import { EmpresaServices } from '../services/empresa.service';

@Component({
  selector: 'app-registro-empresas',
  templateUrl: './registro-empresas.component.html',
  styleUrls: ['./registro-empresas.component.css']
})
export class RegistroEmpresasComponent implements OnInit {
titulo = "Registrar Empresa";

empresa : IEmpresa={
  carrera: null,
    nombre_empresa: null,
    nombre_representante:null,
    correo_empresarial:null,
    direccion:null,
    telefono: null,
    telefono_opcional: null,
    fecha_inicio_contrato: null,
    fecha_fin_contrato: null,
    compensacion: null,
};
  constructor(private empresaService : EmpresaServices) { }

  ngOnInit() {
  }

  guardarEmpresa() {
      this.empresaService.crearEmpresa(this.empresa).subscribe((data) => {
        alert("Empresa Guardada");
      }, (error) => {
        console.log(error);
      });

    }

}
