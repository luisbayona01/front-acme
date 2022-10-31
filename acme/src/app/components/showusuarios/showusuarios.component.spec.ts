import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ShowusuariosComponent } from './showusuarios.component';

describe('ShowusuariosComponent', () => {
  let component: ShowusuariosComponent;
  let fixture: ComponentFixture<ShowusuariosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ShowusuariosComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ShowusuariosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
