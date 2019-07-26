import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { VincularEstudianteEmpresaComponent } from './vincular-estudiante-empresa.component';

describe('VincularEstudianteEmpresaComponent', () => {
  let component: VincularEstudianteEmpresaComponent;
  let fixture: ComponentFixture<VincularEstudianteEmpresaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ VincularEstudianteEmpresaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(VincularEstudianteEmpresaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
