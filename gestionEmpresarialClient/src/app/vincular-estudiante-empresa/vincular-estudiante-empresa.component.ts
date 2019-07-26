import { Component, OnInit } from '@angular/core';
import { TutoresService } from '../services/tutores.service';
import { AsignacionEmpresaService } from '../services/asignacion-empresa.service';
import { ITutorGe } from '../interfaces/tutores';
import { ITutorAca } from '../interfaces/ITutorAca';
import { ITutorEsp } from '../interfaces/ITutorEsp';
import { IEmpresa } from '../interfaces/IEmpresa';
import { IEstudiantes } from '../interfaces/IEstudiantes';
import { IAsigEmpresa } from '../interfaces/IAsigEmpresa';
import { EmpresaServices } from '../services/empresa.service';
import { EstudianteService } from '../services/estudiante.service';

@Component({
  selector: 'app-vincular-estudiante-empresa',
  templateUrl: './vincular-estudiante-empresa.component.html',
  styleUrls: ['./vincular-estudiante-empresa.component.css']
})
export class VincularEstudianteEmpresaComponent implements OnInit {
  titulo = "Asignar Empresa Estudiante";

  tutorAca: ITutorGe[];
  empresa: IEmpresa[];
  tutorGen: ITutorAca[];
  tutorEsp: ITutorEsp[];
  estudiante:IEstudiantes[];

  tutorAc: ITutorGe = {
    id: 0,
    identificacion: null,
    apellido1: null,
    apellido2: null,
    nombre1: null,
    nombre2: null,
    correo: null,
    fecha_nacimiento: null,
    direccion: null,
    telefono: null
  };

  tutorGe: ITutorAca = {
    id: 0,
    identificacion: null,
    apellido1: null,
    apellido2: null,
    nombre1: null,
    nombre2: null,
    correo: null,
    fecha_nacimiento: null,
    direccion: null,
    telefono: null
  };

  tutorEs: ITutorEsp = {
    id: 0,
    identificacion: null,
    apellido1: null,
    apellido2: null,
    nombre1: null,
    nombre2: null,
    correo: null,
    fecha_nacimiento: null,
    direccion: null,
    telefono: null
  };

  empresas: IEmpresa = {
    id: 0,
    carrera: null,
    nombre_empresa: null,
    nombre_representante: null,
    correo_empresarial: null,
    direccion: null,
    telefono: null,
    telefono_opcional: null,
    fecha_inicio_contrato: null,
    fecha_fin_contrato: null,
    compensacion: null,
  };

  estudiantes: IEstudiantes = {
    id:0,
    carrera: null,
    identificacion: null,
    apellido1: null,
    apellido2: null,
    nombre1: null,
    nombre2: null,
    correo_institucional: null,
    direccion: null,
    telefono: null,
  };

  asgEmpresa: IAsigEmpresa = {
    empresa_id: null,
    estudiante_id: null,
    tutor_general_id: null,
    tutor_academico_id: null,
    tutor_especifico_id: null,
    estado: null,
  };

  constructor(
    private tutoresService: TutoresService,
    private empresaService: EmpresaServices,
    private estudianteService:EstudianteService,
    private asociarEmpresaService: AsignacionEmpresaService) {
  }

  ngOnInit() {
    this.getAllTutorAcademico();
    this.getAllTutorEspecifico();
    this.getAllTutorGeneral();
    this.getAllEstudiantes();
    this.getAllEmpresa();
  }
  /**
   * this.tutorGe,
      this.tutorEs,
      this.tutorAc,
      this.empresas,
      this.estudiante,
      this.asgEmpresa
   */

  crearVinculacion() {
    this.asociarEmpresaService.crearAsignacionEstudiante(
      this.tutorGe,
      this.tutorEs,
      this.tutorAc,
      this.empresas,
      this.estudiantes,
      this.asgEmpresa
    ).subscribe((data) => {
      alert("Estudiante vinculado");
    }, (error) => {
      alert("Algo salió mal");
      console.log(error);
    });
  }

  getAllTutorAcademico() {
    return this.tutoresService.getAllTutorAcademico()
      .subscribe(tutordesdeWS => this.tutorAca = tutordesdeWS,
        error => console.error(error));
  }

  getAllTutorGeneral() {
    return this.tutoresService.getAllTutorGeneral()
      .subscribe(tutordesdeWS => this.tutorGen = tutordesdeWS,
        error => console.error(error));
  }
  getAllTutorEspecifico() {
    return this.tutoresService.getAllTutorEspecifico()
      .subscribe(tutordesdeWS => this.tutorEsp = tutordesdeWS,
        error => console.error(error));
  }

  getAllEmpresa() {
    return this.empresaService.getAllEmpresas()
      .subscribe(tutordesdeWS => this.empresa = tutordesdeWS,
        error => console.error(error));
  }

  getAllEstudiantes() {
    return this.estudianteService.getAllEstudiantes()
      .subscribe(tutordesdeWS => this.estudiante = tutordesdeWS,
        error => console.error(error));
  }

}
