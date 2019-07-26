import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ListaVinculadosComponent } from './lista-vinculados.component';

describe('ListaVinculadosComponent', () => {
  let component: ListaVinculadosComponent;
  let fixture: ComponentFixture<ListaVinculadosComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ListaVinculadosComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ListaVinculadosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
