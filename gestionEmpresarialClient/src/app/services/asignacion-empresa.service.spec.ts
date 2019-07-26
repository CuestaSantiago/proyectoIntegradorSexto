import { TestBed } from '@angular/core/testing';

import { AsignacionEmpresaService } from './asignacion-empresa.service';

describe('AsignacionEmpresaService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: AsignacionEmpresaService = TestBed.get(AsignacionEmpresaService);
    expect(service).toBeTruthy();
  });
});
