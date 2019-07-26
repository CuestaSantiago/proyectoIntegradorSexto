import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { ITutorGe } from '../interfaces/tutores';
import { ITutorEsp } from '../interfaces/ITutorEsp';
import { ITutorAca } from '../interfaces/ITutorAca';
import { IAsigEmpresa } from '../interfaces/IAsigEmpresa';
import { IEstudiantes } from '../interfaces/IEstudiantes';
import { IEmpresa } from '../interfaces/IEmpresa';
import { URL_SERVICIOS } from '../constantes/url.service';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class AsignacionEmpresaService {

  constructor(private http: HttpClient) {
  }

  getAllEmpresaAsignada(): Observable<IAsigEmpresa[]> {
    return this.http.get<IAsigEmpresa[]>(URL_SERVICIOS + '/asgEmpresa');
  }

  crearAsignacionEstudiante(
    tutors: ITutorGe, 
    tutorEsp: ITutorEsp, 
    tutorAca: ITutorAca, 
    empresas: IEmpresa, 
    estudiante: IEstudiantes, 
    AsgEmpresa: IAsigEmpresa) {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    return this.http.post(URL_SERVICIOS + '/asgempresa', 
    { 
      'tutor_general': tutors.id, 
      'tutor_especifico': tutorEsp.id, 
      'tutor_academico': tutorAca.id, 
      'empresa': empresas.id, 
      'estudiante': estudiante.id, 
      'asignar_empresa': AsgEmpresa.estado }, 
      { headers: headers });
  }
}
