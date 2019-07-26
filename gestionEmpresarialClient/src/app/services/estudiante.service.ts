import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { IEstudiantes } from '../interfaces/IEstudiantes';
import { URL_SERVICIOS } from '../constantes/url.service';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class EstudianteService {

  constructor(private http: HttpClient) {
  }

  getAllEstudiantes(): Observable<IEstudiantes[]> {
    return this.http.get<IEstudiantes[]>(URL_SERVICIOS + '/estudiante');
  }

}
