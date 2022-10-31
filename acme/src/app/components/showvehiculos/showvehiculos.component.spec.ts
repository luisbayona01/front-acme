import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ShowvehiculosComponent } from './showvehiculos.component';

describe('ShowvehiculosComponent', () => {
  let component: ShowvehiculosComponent;
  let fixture: ComponentFixture<ShowvehiculosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ShowvehiculosComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ShowvehiculosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
