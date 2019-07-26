import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { RegistroTutoresComponent } from './registro-tutores.component';

describe('RegistroTutoresComponent', () => {
  let component: RegistroTutoresComponent;
  let fixture: ComponentFixture<RegistroTutoresComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ RegistroTutoresComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(RegistroTutoresComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
