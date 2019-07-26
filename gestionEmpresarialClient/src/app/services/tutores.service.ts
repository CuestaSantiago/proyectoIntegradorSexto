import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { ITutorGe } from '../interfaces/tutores';
import { ITutorAca } from '../interfaces/ITutorAca';
import { ITutorEsp } from '../interfaces/ITutorEsp';
import { URL_SERVICIOS } from '../constantes/url.service';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class TutoresService {

  constructor(private http: HttpClient) {
  }

  getAllTutorAcademico(): Observable<ITutorGe[]> {
    return this.http.get<ITutorGe[]>(URL_SERVICIOS + '/tutora');
  }

  getAllTutorGeneral(): Observable<ITutorGe[]> {
    return this.http.get<ITutorGe[]>(URL_SERVICIOS + '/tutorg');
  }
  
  getAllTutorEspecifico(): Observable<ITutorGe[]> {
    return this.http.get<ITutorGe[]>(URL_SERVICIOS + '/tutore');
  }

  crearTutorAcademico(tutors: ITutorAca) {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    return this.http.post(URL_SERVICIOS + '/tutora', { 'tutor_academico': tutors }, { headers: headers });
  }

  crearTutorGeneral(tutors: ITutorGe) {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    return this.http.post(URL_SERVICIOS + '/tutorg', { 'tutor_general': tutors }, { headers: headers });
  }

  crearTutorEspecifico(tutors: ITutorEsp) {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    return this.http.post(URL_SERVICIOS + '/tutore', { 'tutor_especifico': tutors }, { headers: headers });
  }

}
