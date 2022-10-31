import { ComponentFixture, TestBed } from '@angular/core/testing';

import { UsuarioslistarComponent } from './usuarioslistar.component';

describe('UsuarioslistarComponent', () => {
  let component: UsuarioslistarComponent;
  let fixture: ComponentFixture<UsuarioslistarComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ UsuarioslistarComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(UsuarioslistarComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
