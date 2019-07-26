import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import {IEmpresa} from '../interfaces/IEmpresa';
import {URL_SERVICIOS} from '../constantes/url.service';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class EmpresaServices {

  constructor(private http: HttpClient) {
  }

  getAllEmpresas(): Observable<IEmpresa[]>{
    return this.http.get<IEmpresa[]>(URL_SERVICIOS + '/empresa');
  }
  
  crearEmpresa(empresa : IEmpresa){
    const headers = new HttpHeaders({'Content-Type': 'application/json'});
    return this.http.post(URL_SERVICIOS+'/empresa',{'empresa':empresa},{headers:headers});
  }


}
