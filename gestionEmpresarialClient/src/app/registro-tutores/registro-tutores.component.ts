import { Component, OnInit } from '@angular/core';
import { TutoresService } from '../services/tutores.service';
import { ITutorGe } from '../interfaces/tutores';

@Component({
  selector: 'app-registro-tutores',
  templateUrl: './registro-tutores.component.html',
  styleUrls: ['./registro-tutores.component.css']
})
export class RegistroTutoresComponent implements OnInit {
  titulo = "Registro Tutores";
  tutors: ITutorGe = {
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
  
  seleccionado="";

  constructor(private tutoresService: TutoresService) {

  }
  ngOnInit() {
  } 

  guardarTutor() {

    if (this.seleccionado=="A") {
      this.tutoresService.crearTutorAcademico(this.tutors).subscribe((data) => {
        alert("Tutor guardado");
        console.log(data);
      }, (error) => {
        console.log(error);
      });
    }

    if (this.seleccionado=="G") {
      this.tutoresService.crearTutorGeneral(this.tutors).subscribe((data) => {
        alert("Tutor guardado");
        console.log(data);
      }, (error) => {
        console.log(error);
      });
    }

    if (this.seleccionado=="E") {
      this.tutoresService.crearTutorEspecifico(this.tutors).subscribe((data) => {
        alert("Tutor guardado");
        console.log(data);
      }, (error) => {
        console.log(error);
      });
    }
  }

  /** 
    cargarData(){
      return this.tutoresService.getAllTutores()
        .subscribe(tutordesdeWS => this.tutor = tutordesdeWS,
          error => console.error(error));
    }
  **/
}
